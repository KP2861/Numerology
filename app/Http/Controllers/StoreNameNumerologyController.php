<?php

namespace App\Http\Controllers;

use App\Jobs\SendPaymentSuccessEmail;
use App\Models\NameNumerology;
use App\Models\Numerology;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Razorpay\Api\Api;
use Illuminate\Support\Facades\Validator;

class StoreNameNumerologyController extends Controller
{
    public function createNameNumerology()
    {
        return view('numerology.name_numerology');
    }

    // public function storeNameNumerology(Request $request)
    // {
    //     try {
    //         // Validate the request data
    //         $validated = $request->validate([
    //             'first_name' => 'required|string|regex:/^[\pL\s]+$/u|max:25',
    //             'last_name' => 'required|string|regex:/^[\pL\s]+$/u|max:25',
    //             'dob' => 'required|date',
    //             'gender' => 'required|string|in:Male,Female',
    //             'numerology_type' => 'required|integer|in:1,2,3,4,5',
    //         ]);

    //         // Add 'numerology_type' with a default value of 1
    //         // $validated['numerology_type'] = 1;

    //         $validated['user_id'] = auth()->check() ? auth()->id() : 0;

    //         // Add payment_id as null and payment_status as 2 (Assuming '2' is the desired status)
    //         // $validated['payment_id'] = "null";
    //         // $validated['payment_status'] = 2;

    //         // Attempt to create the NameNumerology record
    //         // NameNumerology::create($validated);
    //         // dd($validated);
    //         $numerology = Numerology::where('numerology_type', $validated['numerology_type'])->first();
    //         $amount = $numerology->packages_amount * 100;
    //         session(['name_numerology_data' => $validated]);

    //         // $NameNumerologyRecord =  NameNumerology::create($validated);

    //         try {
    //             $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
    //         } catch (\Exception $e) {
    //             Log::error('Failed to initialize Razorpay API: ' . $e->getMessage());
    //             return redirect()->back()
    //                 ->with('error', 'Failed to initialize payment gateway. Please try again later.');
    //         }

    //         try {
    //             // Create a Razorpay order
    //             $order = $api->order->create([
    //                 'amount' =>  $amount,
    //                 'currency' => 'INR',
    //                 'receipt' => uniqid(),
    //                 'payment_capture' => 1
    //             ]);

    //             session(['numerology_payment' => [
    //                 // 'name_numerology_id' => $NameNumerologyRecord->id,
    //                 'order' => $order,
    //                 'paymentPurpose' => 'Name Numerology Record',
    //                 'name_numerology_data' => $validated,
    //                 'callbackUrl' => route('name_numerology.payment.callback'),
    //             ]]);
    //         } catch (\Exception $e) {
    //             Log::error('Failed to create Razorpay order: ' . $e->getMessage());
    //             return redirect()->back()
    //                 ->with('error', 'Failed to create payment order. Please try again.');
    //         }

    //         return redirect()->route('numerology.name_numerology_form')->with('success', 'Name Numerology data saved successfully.');
    //     } catch (\Illuminate\Validation\ValidationException $e) {
    //         return redirect()->back()
    //             ->withErrors($e->errors())
    //             ->withInput();
    //     } catch (\Exception $e) {
    //         Log::error('Error in storeNameNumerology: ' . $e->getMessage());
    //         return redirect()->back()
    //             ->with('error', 'An error occurred while processing your request. Please try again.');
    //     }
    // }

    public function storeNameNumerology(Request $request)
    {
        try {
            // Step 1: Validate the request data
            $validated = $request->validate([
                'first_name' => 'required|string|regex:/^[\pL\s]+$/u|max:25',
                'last_name' => 'nullable|string|regex:/^[\pL\s]+$/u|max:25',
                'email' => 'required|email|max:255',
                'phone_number' => 'required|regex:/\d{10}/|max:10|min:10',
                'town_city' => 'required|string',
                'dob' => 'required|date',
                'gender' => 'required|string|in:Male,Female',
                'numerology_type' => 'required|integer|in:1,2,3,4,5',
                'hours' => 'nullable|integer|between:1,12',
                'minutes' => 'nullable|integer|between:0,59',
                'ampm' => 'nullable|string|in:am,pm',
                'language' => 'required|string|in:en,hi',
            ]);

            // Step 2: Add 'user_id' and any other necessary fields
            $validated['user_id'] = auth()->check() ? auth()->id() : 1;

            // Combine the time inputs into a single time string
            $time = sprintf('%02d:%02d %s', $validated['hours'], $validated['minutes'], $validated['ampm']);
            $validated['time'] = $time; // Store the combined time here

            // Step 3: Retrieve the numerology type and calculate the amount
            try {
                $numerology = Numerology::where('numerology_type', $validated['numerology_type'])->first();
                if (!$numerology) {
                    throw new \Exception('Numerology type not found.');
                }
                $amount = $numerology->packages_amount * 100;
            } catch (\Exception $e) {
                Log::error('Failed to retrieve numerology type: ' . $e->getMessage());
                return redirect()->back()->with('error', 'Numerology type not found. Please try again.');
            }

            // Check if there's already session data for name numerology
            if (session()->has('name_numerology_data')) {
                // Clear existing session data if needed
                session()->forget('name_numerology_data');
            }
            // Step 4: Store validated data in the session using `session()->put()`
            session()->put('name_numerology_data', $validated);

            //dd(session('name_numerology_data'));

            // Step 5: Initialize Razorpay API
            try {
                $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
            } catch (\Exception $e) {
                Log::error('Failed to initialize Razorpay API: ' . $e->getMessage());
                return redirect()->back()->with('error', 'Failed to initialize payment gateway. Please try again later.');
            }

            // Step 6: Create Razorpay order
            try {
                $order = $api->order->create([
                    'amount' => $amount,
                    'currency' => 'INR',
                    'receipt' => uniqid(),
                    'payment_capture' => 1
                ]);

                // Step 7: Store payment data in session using `session()->put()`
                session()->put('numerology_payment.order', $order);
                session()->put('numerology_payment.paymentPurpose', 'Name Numerology ');
                session()->put('numerology_payment.name_numerology_data', $validated);
                session()->put('numerology_payment.callbackUrl', route('name_numerology.payment.callback'));
            } catch (\Exception $e) {
                Log::error('Failed to create Razorpay order: ' . $e->getMessage());
                return redirect()->back()->with('error', 'Failed to create payment order. Please try again.');
            }

            // Step 8: Redirect with success message
            return redirect()->route('numerology.name_numerology_form')->with('success', 'Name Numerology data saved successfully.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Handle validation errors
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            // Catch any other exceptions
            Log::error('Error in storeNameNumerology: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred while processing your request. Please try again.');
        }
    }


    public function paymentCallback(Request $request)
    {
        return $this->handlePaymentCallback($request, 'name_numerology_form');
    }

    // protected function handlePaymentCallback(Request $request, $formRoute)
    // {
    //     try {
    //         // Log the incoming Razorpay callback data
    //         Log::info('Razorpay Callback Data:', $request->all());

    //         // Step 1: Validate order_id, payment_id, and signature
    //         try {
    //             $orderId = $request->input('order_id');
    //             $paymentId = $request->input('payment_id');
    //             $signature = $request->input('signature');

    //             if (!$orderId || !$paymentId || !$signature) {
    //                 Log::error('Missing required parameters.');
    //                 return view('payment.notworking', ['errorMessage' => 'Missing required parameters.']);
    //             }
    //         } catch (\Exception $e) {
    //             Log::error('Error validating required parameters: ' . $e->getMessage());
    //             return view('payment.notworking', ['errorMessage' => 'Error validating required parameters.']);
    //         }

    //         // Step 2: Validate the signature
    //         try {
    //             $expectedSignature = hash_hmac('sha256', $orderId . '|' . $paymentId, env('RAZORPAY_SECRET'));

    //             if ($signature !== $expectedSignature) {
    //                 Log::error('Signature mismatch. Expected: ' . $expectedSignature . ' | Received: ' . $signature);
    //                 return view('payment.notworking', ['errorMessage' => 'Payment verification failed!']);
    //             }
    //         } catch (\Exception $e) {
    //             Log::error('Error generating or comparing the signature: ' . $e->getMessage());
    //             return view('payment.notworking', ['errorMessage' => 'Error verifying the payment signature.']);
    //         }

    //         // Step 3: Retrieve session data
    //         try {
    //             $nameNumerologyData = session('name_numerology_data');

    //             if (!$nameNumerologyData) {
    //                 Log::error('Session data not found.');
    //                 return view('payment.notworking', ['errorMessage' => 'Session data not found.']);
    //             }
    //         } catch (\Exception $e) {
    //             Log::error('Error retrieving session data: ' . $e->getMessage());
    //             return view('payment.notworking', ['errorMessage' => 'Error retrieving session data.']);
    //         }

    //         // Step 4: Update numerology data with payment details and store in database
    //         try {
    //             // $nameNumerologyData['user_id'] = Auth::id() ?? 0;
    //             $nameNumerologyData['payment_id'] = $paymentId;
    //             $nameNumerologyData['payment_status'] = '1';

    //             //  dd($emailData);
    //             // Store the NameNumerology record in the database
    //             NameNumerology::create($nameNumerologyData);
    //             // DB::table('name_numerology')->insert($nameNumerologyData);

    //             // Assign $NumerologyData to $nameNumerologyData
    //             $NumerologyData = $nameNumerologyData;
    //             $emailData = session('numerology_payment');
    //             // Get the authenticated user's email, or use the email of user ID 2 if not logged in
    //             // $userEmail = Auth::check() ? Auth::user()->email : User::find(2)->email;

    //             // if ($userEmail) {
    //             //     // Dispatch the job to send payment success email to the determined email
    //             //     SendPaymentSuccessEmail::dispatch($userEmail, $emailData, $NumerologyData);
    //             //     Log::info('Payment confirmation email queued for ' . $userEmail);
    //             // }


    //             // Clear session data
    //             session()->forget('name_numerology_data');
    //             session()->forget('numerology_payment');
    //             return redirect(url('/auto-name-report'))->with('success', 'Payment successful and record updated!');

    //             // return redirect(url('/'))->with('success', 'Payment successful and record updated!');
    //         } catch (\Exception $e) {
    //             Log::error('Error updating the database or clearing session: ' . $e->getMessage());
    //             return view('payment.notworking', ['errorMessage' => 'Payment succeeded but there was an error updating records.']);
    //         }
    //     } catch (\Exception $e) {
    //         // Global catch for any unhandled errors
    //         Log::error('Payment callback error: ' . $e->getMessage() . ' | File: ' . $e->getFile() . ' | Line: ' . $e->getLine());
    //         return view('payment.notworking', ['errorMessage' => 'Payment verification failed due to an unexpected error.']);
    //     }
    // }

    protected function handlePaymentCallback(Request $request, $formRoute)
    {
        try {
            // Log the incoming Razorpay callback data
            Log::info('Razorpay Callback Data:', $request->all());

            // Step 1: Validate order_id, payment_id, and signature
            try {
                $orderId = $request->input('order_id');
                $paymentId = $request->input('payment_id');
                $signature = $request->input('signature');

                if (!$orderId || !$paymentId || !$signature) {
                    Log::error('Missing required parameters.');
                    return view('payment.notworking', ['errorMessage' => 'Missing required parameters.']);
                }
            } catch (\Exception $e) {
                Log::error('Error validating required parameters: ' . $e->getMessage());
                return view('payment.notworking', ['errorMessage' => 'Error validating required parameters.']);
            }

            // Step 2: Validate the signature
            try {
                $expectedSignature = hash_hmac('sha256', $orderId . '|' . $paymentId, env('RAZORPAY_SECRET'));

                if ($signature !== $expectedSignature) {
                    Log::error('Signature mismatch. Expected: ' . $expectedSignature . ' | Received: ' . $signature);
                    return view('payment.notworking', ['errorMessage' => 'Payment verification failed!']);
                }
            } catch (\Exception $e) {
                Log::error('Error generating or comparing the signature: ' . $e->getMessage());
                return view('payment.notworking', ['errorMessage' => 'Error verifying the payment signature.']);
            }

            // Step 3: Retrieve session data
            $nameNumerologyData = [];
            try {
                $nameNumerologyData = session('name_numerology_data');

                if (!$nameNumerologyData) {
                    Log::error('Session data not found.');
                    return view('payment.notworking', ['errorMessage' => 'Session data not found.']);
                }
            } catch (\Exception $e) {
                Log::error('Error retrieving session data: ' . $e->getMessage());
                return view('payment.notworking', ['errorMessage' => 'Error retrieving session data.']);
            }

            // Step 4: Update numerology data with payment details and store in database
            try {
                // Update payment details in session data
                $nameNumerologyData['payment_id'] = $paymentId;
                $nameNumerologyData['payment_status'] = '1';
                // dd($nameNumerologyData);
                // Store the NameNumerology record in the database
                NameNumerology::create($nameNumerologyData);
            } catch (\Exception $e) {
                Log::error('Error updating the database: ' . $e->getMessage());
                return view('payment.notworking', ['errorMessage' => 'Payment succeeded but there was an error updating records.']);
            }

            // Step 5: Handle optional email sending
            try {
                $NumerologyData = $nameNumerologyData;
                $emailData = session('numerology_payment');

                $userEmail = Auth::check() ? Auth::user()->email : User::find(2)->email ?? null;

                if ($userEmail) {
                    // Dispatch the email sending job
                    SendPaymentSuccessEmail::dispatch($userEmail, $emailData, $NumerologyData);
                    Log::info('Payment confirmation email queued for ' . $userEmail);
                }
            } catch (\Exception $e) {
                Log::error('Error sending email: ' . $e->getMessage());
                // Continue even if email sending fails
            }

            // Clear session data after the email is sent
            try {
                session()->forget('name_numerology_data');
                // session()->forget('numerology_payment');
            } catch (\Exception $e) {
                Log::error('Error clearing session data: ' . $e->getMessage());
                // Log the error, but continue processing
            }

            // Redirect user with success message
            return redirect(url('/auto-name-report'))->with('success', 'Payment successful and record updated!');
        } catch (\Exception $e) {
            // Global catch for any unhandled errors
            Log::error('Payment callback error: ' . $e->getMessage() . ' | File: ' . $e->getFile() . ' | Line: ' . $e->getLine());
            return view('payment.notworking', ['errorMessage' => 'Payment verification failed due to an unexpected error.']);
        }
    }
}
