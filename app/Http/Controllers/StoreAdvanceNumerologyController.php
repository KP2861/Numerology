<?php

namespace App\Http\Controllers;

use App\Jobs\SendPaymentSuccessEmail;
use App\Models\Numerology;
use Illuminate\Http\Request;
use App\Models\PhoneNumerology;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use App\Services\RazorpayService;
use Illuminate\Support\Facades\Auth;
use Razorpay\Api\Api;


class StoreAdvanceNumerologyController extends Controller
{
    //advance numerology

    public function storeAdvanceNumerology(Request $request)
    {
        try {
            // Step 1: Validate input fields
            //dd($request->all());
            $rules = [
                'area_of_concern' => 'required|string|max:255',
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

            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }

            // Step 2: Store validated data and set user_id
            $validated = $validator->validated();
            $validated['user_id'] = auth()->check() ? auth()->id() : 0;
            // Combine the time inputs into a single time string
            $time = sprintf('%02d:%02d %s', $validated['hours'], $validated['minutes'], $validated['ampm']);
            $validated['time'] = $time; // Store the combined time here
            // Check if there's already session data for advance numerology
            if (session()->has('advance_numerology_data')) {
                // Clear existing session data if needed
                session()->forget('advance_numerology_data');
            }

            // Store data in session
            session()->put('advance_numerology_data', $validated);

            // Step 3: Calculate payment amount based on numerology type
            try {
                $numerology = Numerology::where('numerology_type', $validated['numerology_type'])->first();
                $amount = $numerology->packages_amount * 100;
            } catch (\Exception $e) {
                Log::error('Failed to retrieve numerology type: ' . $e->getMessage());
                return redirect()->back()->with('error', 'Failed to retrieve numerology type. Please try again.');
            }

            // Step 4: Initialize Razorpay API
            try {
                $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
            } catch (\Exception $e) {
                Log::error('Failed to initialize Razorpay API: ' . $e->getMessage());
                return redirect()->back()
                    ->with('error', 'Failed to initialize payment gateway. Please try again later.');
            }

            // Step 5: Create Razorpay order
            try {
                $order = $api->order->create([
                    'amount' => $amount,
                    'currency' => 'INR',
                    'receipt' => uniqid(),
                    'payment_capture' => 1,
                ]);

                // Store payment details in session
                session()->put('numerology_payment', [
                    'order' => $order,
                    'paymentPurpose' => 'Advance Numerology ',
                    'advance_numerology_data' => $validated,
                    'callbackUrl' => route('advance_numerology.payment.callback'),
                ]);
            } catch (\Exception $e) {
                Log::error('Error during Razorpay order creation: ' . $e->getMessage());
                return redirect()->back()
                    ->with('error', 'Failed to create payment order. Please try again.');
            }

            // Step 6: Redirect to success page
            return redirect()->route('numerology.advance_numerology_form')->with('success', 'Advance Numerology data saved successfully.');
        } catch (\Exception $e) {
            Log::error('Error in storeAdvanceNumerology: ' . $e->getMessage());
            return redirect()->back()
                ->with('error', 'An error occurred while processing your request. Please try again.');
        }
    }


    // public function storeAdvanceNumerology(Request $request)
    // {
    //     // if (!auth()->check()) {
    //     //     return redirect()->route('login')->with('error', 'You must be logged in to proceed.');
    //     // }
    //     try {
    //         $rules = [
    //             'phone_number' => 'required|string|regex:/\d{10}/',
    //             'dob' => 'required|date',
    //             'area_of_concern' => 'required|string|max:255',
    //             'numerology_type' => 'required|integer|in:1,2,3,4,5',
    //         ];

    //         $validator = Validator::make($request->all(), $rules);

    //         if ($validator->fails()) {
    //             return redirect()->back()
    //                 ->withErrors($validator)
    //                 ->withInput();
    //         }


    //         $validated = $validator->validated();
    //         // $validated['numerology_type'] = 1; // Default value for numerology_type
    //         // $validated['user_id'] = auth()->id();
    //         $validated['user_id'] = auth()->check() ? auth()->id() : 0;

    //         // Add payment_id as null and payment_status as 2 (Assuming '2' is the desired status)
    //         // $validated['payment_id'] = "null";
    //         // $validated['payment_status'] = 2;

    //         // PhoneNumerology::create($validated);
    //         $numerology = Numerology::where('numerology_type', $validated['numerology_type'])->first();
    //         $amount = $numerology->packages_amount * 100;
    //         // Store validated data in the session
    //         session(['advance_numerology_data' => $validated]);
    //         // $AdvanceNumerologyRecord =  PhoneNumerology::create($validated);


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
    //                 'amount' => $amount,
    //                 'currency' => 'INR',
    //                 'receipt' => uniqid(),
    //                 'payment_capture' => 1
    //             ]);

    //             session(['numerology_payment' => [
    //                 // 'phone_numerology_id' => $AdvanceNumerologyRecord->id,
    //                 'order' => $order,
    //                 'paymentPurpose' => 'Advance Numerology Record',
    //                 'advance_numerology_data' => $validated,
    //                 'callbackUrl' => route('advance_numerology.payment.callback'),
    //             ]]);
    //         } catch (\Exception $e) {
    //             Log::error('Error during Razorpay order creation: ' . $e->getMessage());
    //             return redirect()->back()
    //                 ->with('error', 'Failed to create payment order. Please try again.');
    //         }

    //         // Redirect to the numerology.form page instead of payment page
    //         return redirect()->route('numerology.mobile_numerology_form')->with('success', 'Phone Numerology data saved successfully.');
    //     } catch (\Exception $e) {
    //         Log::error('Error in storeAdvanceNumerology: ' . $e->getMessage());
    //         return redirect()->back()
    //             ->with('error', 'An error occurred while processing your request. Please try again.');
    //     }
    // }

    public function paymentCallback(Request $request)
    {
        return $this->handlePaymentCallback($request, 'advance_numerology_form');
    }
    protected function handlePaymentCallback(Request $request, $formRoute)
    {
        try {
            // Log the callback data from Razorpay
            Log::info('Razorpay Callback Data:', $request->all());

            // Step 1: Retrieve and validate required parameters
            $orderId = $request->input('order_id');
            $paymentId = $request->input('payment_id');
            $signature = $request->input('signature');

            if (!$orderId || !$paymentId || !$signature) {
                Log::error('Missing required parameters: order_id, payment_id, or signature.');
                return view('payment.notworking', ['errorMessage' => 'Missing required parameters.']);
            }

            // Step 2: Verify Razorpay signature
            $expectedSignature = hash_hmac('sha256', $orderId . '|' . $paymentId, env('RAZORPAY_SECRET'));

            if ($signature === $expectedSignature) {
                // Step 3: Retrieve session data for advance numerology
                $advanceNumerologyData = session('advance_numerology_data');
                if (!$advanceNumerologyData) {
                    Log::error('Advance Numerology session data not found.');
                    return view('payment.notworking', ['errorMessage' => 'Session data not found.']);
                }

                // Step 4: Update numerology data with payment details
                try {
                    $advanceNumerologyData['payment_id'] = $paymentId;
                    $advanceNumerologyData['payment_status'] = '1';

                    // Store the PhoneNumerology record in the database
                    PhoneNumerology::create($advanceNumerologyData);
                    Log::info('Advance numerology data saved successfully.');
                } catch (\Exception $e) {
                    Log::error('Error saving advance numerology data: ' . $e->getMessage());
                    return view('payment.notworking', ['errorMessage' => 'Failed to save numerology data.']);
                }

                // Step 5: Handle optional email sending
                try {
                    $NumerologyData = $advanceNumerologyData;
                    $emailData = session('numerology_payment');

                    $userEmail = Auth::check() ? Auth::user()->email : User::find(2)->email ?? null;

                    if ($userEmail) {
                        SendPaymentSuccessEmail::dispatch($userEmail, $emailData, $NumerologyData);
                        Log::info('Payment confirmation email queued for ' . $userEmail);
                    }
                } catch (\Exception $e) {
                    Log::error('Error sending email: ' . $e->getMessage());
                    // Continue without email if error occurs
                }

                // Step 6: Clear session data after storing the records
                try {
                    session()->forget('advance_numerology_data');
                    // session()->forget('numerology_payment');
                    Log::info('Session data cleared successfully.');
                } catch (\Exception $e) {
                    Log::error('Error clearing session data: ' . $e->getMessage());
                    // Log the error but continue processing
                }

                // Step 7: Redirect to success page with a success message
                return redirect(url('/auto-advance-report'))->with('success', 'Payment successful and record updated!');
            } else {
                Log::error('Signature mismatch. Expected: ' . $expectedSignature . ' | Received: ' . $signature);
                return view('payment.notworking', ['errorMessage' => 'Payment verification failed!']);
            }
        } catch (\Exception $e) {
            // Global catch for any unhandled errors
            Log::error('Payment callback error: ' . $e->getMessage() . ' | File: ' . $e->getFile() . ' | Line: ' . $e->getLine());
            return view('payment.notworking', ['errorMessage' => 'Payment verification failed due to an unexpected error.']);
        }
    }
}
