<?php

namespace App\Http\Controllers;

use App\Jobs\SendPaymentSuccessEmail;
use App\Models\Numerology;
use App\Models\PhoneNumerology;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Razorpay\Api\Api;
use Illuminate\Support\Facades\Validator;

class StorePhoneNumerologyController extends Controller
{
    public function createPhoneNumerology()
    {
        return view('numerology.phone_numerology');
    }

    public function storePhoneNumerology(Request $request)
    {
        try {
            // Step 1: Validation rules
            $rules = [
                'first_name' => 'required|string|alpha|max:255',
                'last_name' => 'nullable|string|alpha|max:255',
                'email' => 'required|email|max:255',
                'phone_number' => 'required|string|regex:/\d{10}/',
                'dob' => 'required|date',
                'town_city' => 'required|string|max:255',
                'hours' => 'nullable|integer|between:0,23',
                'minutes' => 'nullable|integer|between:0,59',
                'ampm' => 'required|in:am,pm',
                'language' => 'required|string|max:50',
                'gender' => 'required|in:Male,Female',
                'numerology_type' => 'required|integer|in:1,2,3,4,5',
            ];

            $validator = Validator::make($request->all(), $rules);

            // Step 2: Validation check
            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }

            // Step 3: Get validated data
            $validated = $validator->validated();
            // Combine the time inputs into a single time string
            $time = sprintf('%02d:%02d %s', $validated['hours'], $validated['minutes'], $validated['ampm']);
            $validated['time'] = $time; // Store the combined time here
            $validated['user_id'] = auth()->check() ? auth()->id() : 0;
            $validated['area_of_concern'] = 'null';  // Set default value for 'area_of_concern'

            // dd($validated);
            // Step 4: Retrieve numerology details and calculate amount
            try {
                $numerology = Numerology::where('numerology_type', $validated['numerology_type'])->first();
                if (!$numerology) {
                    throw new \Exception('Numerology type not found.');
                }
                $amount = $numerology->packages_amount * 100;
            } catch (\Exception $e) {
                Log::error('Failed to retrieve numerology type: ' . $e->getMessage());
                return redirect()->back()
                    ->with('error', 'Numerology type not found. Please try again.');
            }

            // Check if there's already session data for phone numerology
            if (session()->has('phone_numerology_data')) {
                // Clear existing session data if needed
                session()->forget('phone_numerology_data');
            }
            // Step 5: Store validated data in the session using `session()->put()`
            session()->put('phone_numerology_data', $validated);

            // Step 6: Initialize Razorpay API
            try {
                $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
            } catch (\Exception $e) {
                Log::error('Failed to initialize Razorpay API: ' . $e->getMessage());
                return redirect()->back()
                    ->with('error', 'Failed to initialize payment gateway. Please try again later.');
            }

            // Step 7: Create Razorpay order
            try {
                $order = $api->order->create([
                    'amount' => $amount,
                    'currency' => 'INR',
                    'receipt' => uniqid(),
                    'payment_capture' => 1
                ]);

                // Step 8: Store payment data in session using `session()->put()`
                session()->put('numerology_payment.order', $order);
                session()->put('numerology_payment.paymentPurpose', 'Phone Numerology ');
                session()->put('numerology_payment.phone_numerology_data', $validated);
                session()->put('numerology_payment.callbackUrl', route('phone_numerology.payment.callback'));
            } catch (\Exception $e) {
                Log::error('Error during Razorpay order creation: ' . $e->getMessage());
                return redirect()->back()
                    ->with('error', 'Failed to create payment order. Please try again.');
            }

            // Step 9: Redirect with success message
            return redirect()->route('numerology.mobile_numerology_form')->with('success', 'Phone Numerology data saved successfully.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Handle validation exceptions
            return redirect()->back()
                ->withErrors($e->errors())
                ->withInput();
        } catch (\Exception $e) {
            // Catch any other exceptions and log the error
            Log::error('Error in storePhoneNumerology: ' . $e->getMessage());
            return redirect()->back()
                ->with('error', 'An error occurred while processing your request. Please try again.');
        }
    }


    // public function storePhoneNumerology(Request $request)
    // {
    //     try {
    //         $rules = [
    //             'phone_number' => 'required|string|regex:/\d{10}/',
    //             'dob' => 'required|date',
    //             'numerology_type' => 'required|integer|in:1,2,3,4,5',
    //         ];

    //         $validator = Validator::make($request->all(), $rules);

    //         if ($validator->fails()) {
    //             return redirect()->route('numerology.phone_numerology_form')
    //                 ->withErrors($validator)
    //                 ->withInput();
    //         }

    //         $validated = $validator->validated();
    //         // $validated['numerology_type'] = 1; // Default value for numerology_type
    //         $validated['user_id'] = auth()->check() ? auth()->id() : 0;
    //         $validated['area_of_concern'] = 'null';

    //         // Add payment_id as null and payment_status as 2 (Assuming '2' is the desired status)
    //         // $validated['payment_id'] = "null";
    //         // $validated['payment_status'] = 2;

    //         // PhoneNumerology::create($validated);
    //         $numerology = Numerology::where('numerology_type', $validated['numerology_type'])->first();
    //         $amount = $numerology->packages_amount * 100;
    //         //  // Store validated data in the session
    //         session(['phone_numerology_data' => $validated]);
    //         // $PhoneNumerologyRecord =  PhoneNumerology::create($validated);
    //         // dd($validated);
    //         try {
    //             $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
    //         } catch (\Exception $e) {
    //             Log::error('Failed to initialize Razor-pay API: ' . $e->getMessage());
    //             return redirect()->route('numerology.phone_numerology_form')
    //                 ->with('error', 'Failed to initialize payment gateway. Please try again later.');
    //         }

    //         try {
    //             $order = $api->order->create([
    //                 'amount' => $amount,
    //                 'currency' => 'INR',
    //                 'receipt' => uniqid(),
    //                 'payment_capture' => 1
    //             ]);

    //             session(['numerology_payment' => [
    //                 // 'phone_numerology_id' => $PhoneNumerologyRecord->id,
    //                 'order' => $order,
    //                 'paymentPurpose' => 'Phone Numerology Record',
    //                 'phone_numerology_data' => $validated,
    //                 'callbackUrl' => route('phone_numerology.payment.callback'),
    //             ]]);
    //         } catch (\Exception $e) {
    //             Log::error('Error during Razorpay order creation: ' . $e->getMessage());
    //             return redirect()->route('numerology.phone_numerology_form')
    //                 ->with('error', 'Failed to create payment order. Please try again.');
    //         }

    //         // Redirect to the numerology.form page instead of payment page
    //         return redirect()->route('numerology.mobile_numerology_form')->with('success', 'Phone Numerology data saved successfully.');
    //     } catch (\Illuminate\Validation\ValidationException $e) {
    //         return redirect()->back()
    //             ->withErrors($e->errors())
    //             ->withInput();
    //     } catch (\Exception $e) {
    //         Log::error('Error in storePhoneNumerology: ' . $e->getMessage());
    //         return redirect()->back()
    //             ->with('error', 'An error occurred while processing your request. Please try again.');
    //     }
    // }



    public function paymentCallback(Request $request)
    {
        return $this->handlePaymentCallback($request, 'phone_numerology_form');
    }

    // protected function handlePaymentCallback(Request $request, $formRoute)
    // {
    //     try {

    //         Log::info('Razorpay Callback Data:', $request->all());

    //         $orderId = $request->input('order_id');
    //         $paymentId = $request->input('payment_id');
    //         $signature = $request->input('signature');
    //         // $expectedSignature = hash_hmac('sha256', $orderId . '|' . $paymentId, env('RAZORPAY_SECRET'));
    //         // dd($orderId, $paymentId, $signature, $expectedSignature);

    //         if (!$orderId || !$paymentId || !$signature) {
    //             Log::error('Missing required parameters.');
    //             $errorMessage = 'Missing required parameters.';
    //             return view('payment.notworking', ['errorMessage' => $errorMessage]);
    //         }

    //         $expectedSignature = hash_hmac('sha256', $orderId . '|' . $paymentId, env('RAZORPAY_SECRET'));

    //         if ($signature === $expectedSignature) {
    //             // Retrieve the existing session data
    //             $numerologyPaymentData = session('numerology_payment');
    //             $phoneNumerologyData = session('phone_numerology_data');

    //             // Check if numerology data exists in session
    //             if (!$numerologyPaymentData) {
    //                 Log::error('Session data not found.');
    //                 $errorMessage = 'Phone Numerology Session data not found.';
    //                 return view('payment.notworking', ['errorMessage' => $errorMessage]);
    //             }

    //             $nameNumerologyId = $numerologyPaymentData['phone_numerology_id'] ?? null;

    //             if ($nameNumerologyId) {
    //                 PhoneNumerology::where('id', $nameNumerologyId)
    //                     ->update([
    //                         'payment_id' => $paymentId,
    //                         'payment_status' => 1 // Assuming '1' indicates a successful payment
    //                     ]);
    //                 // Optionally clear the session data if no longer needed
    //                 session()->forget('numerology_payment');

    //                 return redirect()->route('numerology.mobile_numerology_pdf')->with('success', 'Payment successful and record updated!');
    //             } else {
    //                 Log::error('Mobile numerology ID not found in session.');
    //                 $errorMessage = 'Mobile numerology ID not found in session.';
    //                 return view('payment.notworking', ['errorMessage' => $errorMessage]);
    //             }
    //         } else {
    //             Log::error('Signature mismatch. Expected: ' . $expectedSignature . ' | Received: ' . $signature);
    //             $errorMessage = 'Payment verification failed!';
    //             return view('payment.notworking', ['errorMessage' => $errorMessage]);
    //         }
    //     } catch (\Exception $e) {

    //         Log::error('Payment callback error: ' . $e->getMessage() . ' | File: ' . $e->getFile() . ' | Line: ' . $e->getLine());
    //         $errorMessage = 'Payment verification failed due to an unexpected error.';
    //         return view('payment.notworking', ['errorMessage' => $errorMessage]);
    //     }
    // }

    protected function handlePaymentCallback(Request $request, $formRoute)
    {
        try {
            // Step 1: Log the Razorpay callback data
            Log::info('Razorpay Callback Data:', $request->all());

            // Step 2: Validate required parameters (order_id, payment_id, signature)
            try {
                $orderId = $request->input('order_id');
                $paymentId = $request->input('payment_id');
                $signature = $request->input('signature');

                if (!$orderId || !$paymentId || !$signature) {
                    Log::error('Missing required parameters.');
                    return view('payment.notworking', ['errorMessage' => 'Missing required parameters.']);
                }
            } catch (\Exception $e) {
                Log::error('Error retrieving required parameters: ' . $e->getMessage());
                return view('payment.notworking', ['errorMessage' => 'Error retrieving required parameters.']);
            }

            // Step 3: Verify the payment signature
            try {
                $expectedSignature = hash_hmac('sha256', $orderId . '|' . $paymentId, env('RAZORPAY_SECRET'));

                if ($signature !== $expectedSignature) {
                    Log::error('Signature mismatch. Expected: ' . $expectedSignature . ' | Received: ' . $signature);
                    return view('payment.notworking', ['errorMessage' => 'Payment verification failed!']);
                }
            } catch (\Exception $e) {
                Log::error('Error verifying payment signature: ' . $e->getMessage());
                return view('payment.notworking', ['errorMessage' => 'Error verifying payment signature.']);
            }

            // Step 4: Retrieve session data (phone numerology data)
            try {
                $phoneNumerologyData = session('phone_numerology_data');
                if (!$phoneNumerologyData) {
                    Log::error('Session data not found.');
                    return view('payment.notworking', ['errorMessage' => 'Phone numerology session data not found.']);
                }
            } catch (\Exception $e) {
                Log::error('Error retrieving session data: ' . $e->getMessage());
                return view('payment.notworking', ['errorMessage' => 'Error retrieving session data.']);
            }

            // Step 5: Store phone numerology data with payment details
            try {
                $phoneNumerologyData['payment_id'] = $paymentId;
                $phoneNumerologyData['payment_status'] = '1';

                // Store the PhoneNumerology record in the database
                PhoneNumerology::create($phoneNumerologyData);
            } catch (\Exception $e) {
                Log::error('Error storing phone numerology data: ' . $e->getMessage());
                return view('payment.notworking', ['errorMessage' => 'Error occurred while updating records.']);
            }

            // Optional: Send confirmation email if applicable (inside try-catch for error handling)
            try {
                $NumerologyData = $phoneNumerologyData ?? [];
                $emailData = session('numerology_payment') ?? [];

                $userEmail = Auth::check() ? Auth::user()->email : User::find(2)->email ?? null;

                if ($userEmail) {
                    // Dispatch the job to send payment success email
                    SendPaymentSuccessEmail::dispatch($userEmail, $emailData, $NumerologyData);
                    Log::info('Payment confirmation email queued for ' . $userEmail);
                }
            } catch (\Exception $e) {
                Log::error('Error sending payment confirmation email: ' . $e->getMessage());
            }

            // Step 6: Clear session data after sending the email
            try {
                session()->forget('phone_numerology_data');
                // session()->forget('numerology_payment');
            } catch (\Exception $e) {
                Log::error('Error clearing session data: ' . $e->getMessage());
            }

            // Step 7: Redirect on successful operation
            return redirect(url('/auto-mobile-report'))->with('success', 'Payment successful and record updated!');
        } catch (\Exception $e) {
            // Global error handler for any unexpected failures
            Log::error('Payment callback error: ' . $e->getMessage() . ' | File: ' . $e->getFile() . ' | Line: ' . $e->getLine());
            return view('payment.notworking', ['errorMessage' => 'An unexpected error occurred.']);
        }
    }
}
