<?php

namespace App\Http\Controllers;

use App\Jobs\SendPaymentSuccessEmail;
use App\Models\BusinessNumerology;
use App\Models\BusinessPartner;
use App\Models\Numerology;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Razorpay\Api\Api;
use Illuminate\Support\Facades\Validator;

class StoreBusinessNumerologyController extends Controller
{
    public function createBusinessNumerology()
    {
        return view('numerology.business_numerology');
    }

    public function storeBusinessNumerology(Request $request)
    {
        try {
            // Step 1: Validate primary business numerology fields
            $validated = $request->validate([
                'first_name' => 'required|string|regex:/^[\pL\s]+$/u|max:25',
                'last_name' => 'required|string|regex:/^[\pL\s]+$/u|max:25',
                'dob' => 'required|date',
                'phone_number' => 'required|string|regex:/\d{10}/',
                'business_name' => 'required|string|max:255',
                'type_of_business' => 'required|string|max:255',
                'have_partner' => 'required|integer|in:0,1',
                'numerology_type' => 'required|integer|in:1,2,3,4,5',
            ]);

            // Step 2: Partner validation if `have_partner` is 1
            if ($validated['have_partner'] == 1) {
                $request->validate([
                    'partner_first_names.*' => 'required|string|regex:/^[\pL\s]+$/u|max:10',
                    'partner_last_names.*' => 'required|string|regex:/^[\pL\s]+$/u|max:10',
                    'partner_dobs.*' => 'required|date',
                    'partner_phone_numbers.*' => 'required|string|regex:/\d{10}/',
                ], [
                    'partner_first_names.*.required' => 'Each partner\'s first name is required.',
                    'partner_last_names.*.required' => 'Each partner\'s last name is required.',
                    'partner_dobs.*.required' => 'Each partner\'s date of birth is required.',
                    'partner_phone_numbers.*.required' => 'Each partner\'s phone number is required.',
                ]);
            }

            // Step 3: Store main validated data and set user_id
            $validated['user_id'] = auth()->check() ? auth()->id() : 0;
            // Check if there's already session data for business numerology
            if (session()->has('business_numerology_data')) {
                // Clear existing session data if needed
                session()->forget('business_numerology_data');
            }

            session()->put('business_numerology_data', $validated);

            // Step 4: Calculate payment amount based on numerology type
            try {
                $numerology = Numerology::where('numerology_type', $validated['numerology_type'])->first();
                $amount = $numerology->packages_amount * 100;
            } catch (\Exception $e) {
                Log::error('Failed to retrieve numerology type: ' . $e->getMessage());
                return redirect()->back()->with('error', 'Failed to retrieve numerology type. Please try again.');
            }

            // Step 5: Handle partner data if applicable
            if ($validated['have_partner'] == 1) {
                $partnerData = [];
                $partnerFirstNames = $request->input('partner_first_names', []);
                $partnerLastNames = $request->input('partner_last_names', []);
                $partnerDobs = $request->input('partner_dobs', []);
                $partnerPhoneNumbers = $request->input('partner_phone_numbers', []);

                foreach ($partnerFirstNames as $index => $firstName) {
                    $partnerData[] = [
                        'first_name' => $firstName,
                        'last_name' => $partnerLastNames[$index],
                        'dob' => $partnerDobs[$index],
                        'phone_number' => $partnerPhoneNumbers[$index],
                    ];
                }

                // Store partner data in session
                session()->put('business_numerology_partners', $partnerData);
            } else {
                session()->forget('business_numerology_partners');
            }

            // dd(session('business_numerology_partners'));

            // Step 6: Initialize Razorpay API
            try {
                $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
            } catch (\Exception $e) {
                Log::error('Failed to initialize Razorpay API: ' . $e->getMessage());
                return redirect()->back()->with('error', 'Payment gateway initialization failed. Please try again later.');
            }

            // Step 7: Create a Razorpay order
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
                    'paymentPurpose' => 'Business Numerology',
                    'business_numerology_data' => $validated,
                    'callbackUrl' => route('business_numerology.payment.callback'),
                ]);
            } catch (\Exception $e) {
                Log::error('Failed to create Razorpay order: ' . $e->getMessage());
                return redirect()->back()->with('error', 'Payment order creation failed. Please try again.');
            }
            return redirect(url('/business-numerology'))->with('success', 'Payment successful and record updated!');

            // Step 8: Redirect to success page
            return redirect()->route('comingsoon.get')->with('success', 'Business Numerology data saved successfully.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        } catch (\Exception $e) {
            Log::error('Error in storeBusinessNumerology: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred while processing your request. Please try again.');
        }
    }


    // public function storeBusinessNumerology(Request $request)
    // {
    //     // if (!auth()->check()) {
    //     //     return redirect()->route('login')->with('error', 'You must be logged in to proceed.');
    //     // }
    //     try {

    //         $validated = $request->validate([
    //             'first_name' => 'required|string|regex:/^[\pL\s]+$/u|max:25',
    //             'last_name' => 'required|string|regex:/^[\pL\s]+$/u|max:25',
    //             'dob' => 'required|date',
    //             'phone_number' => 'required|string|regex:/\d{10}/',
    //             'business_name' => 'required|string|max:255',
    //             'type_of_business' => 'required|string|max:255',
    //             'have_partner' => 'required|integer|in:0,1',
    //             'numerology_type' => 'required|integer|in:1,2,3,4,5',
    //         ]);


    //         if ($validated['have_partner'] == 1) {
    //             $request->validate([
    //                 'partner_first_names.*' => 'required|string|regex:/^[\pL\s]+$/u|max:10',
    //                 'partner_last_names.*' => 'required|string|regex:/^[\pL\s]+$/u|max:10',
    //                 'partner_dobs.*' => 'required|date',
    //                 'partner_phone_numbers.*' => 'required|string|regex:/\d{10}/',
    //             ], [
    //                 'partner_first_names.*.required' => 'Each partner\'s first name is required.',
    //                 'partner_first_names.*.string' => 'Each partner\'s first name must be a valid string.',
    //                 'partner_first_names.*.max' => 'Each partner\'s first name cannot exceed 255 characters.',
    //                 'partner_last_names.*.required' => 'Each partner\'s last name is required.',
    //                 'partner_last_names.*.string' => 'Each partner\'s last name must be a valid string.',
    //                 'partner_last_names.*.max' => 'Each partner\'s last name cannot exceed 255 characters.',
    //                 'partner_dobs.*.required' => 'Each partner\'s date of birth is required.',
    //                 'partner_dobs.*.date' => 'Each partner\'s date of birth must be a valid date.',
    //                 'partner_phone_numbers.*.required' => 'Each partner\'s phone number is required.',
    //                 'partner_phone_numbers.*.regex' => 'Each partner\'s phone number must be exactly 10 digits.',
    //             ]);
    //         }

    //         $validated['user_id'] = auth()->check() ? auth()->id() : 0;
    //         // $validated['numerology_type'] = 1; // Default numerology_type

    //         // Store data in session
    //         session()->put('business_numerology_data', $validated);

    //         // Add payment_id as null and payment_status as 2 (Assuming '2' is the desired status)
    //         // $validated['payment_id'] = "null";
    //         // $validated['payment_status'] = 2;

    //         $numerology = Numerology::where('numerology_type', $validated['numerology_type'])->first();
    //         $amount = $numerology->packages_amount * 100;

    //         // $businessNumerologyRecord =  BusinessNumerology::create($validated);

    //         if ($validated['have_partner'] == 1) {
    //             $partnerData = [];
    //             $partnerFirstNames = $request->input('partner_first_names', []);
    //             $partnerLastNames = $request->input('partner_last_names', []);
    //             $partnerDobs = $request->input('partner_dobs', []);
    //             $partnerPhoneNumbers = $request->input('partner_phone_numbers', []);

    //             foreach ($partnerFirstNames as $index => $firstName) {
    //                 $partnerData[] = [
    //                     // 'business_id' => $businessNumerologyRecord->id,
    //                     'first_name' => $firstName,
    //                     'last_name' => $partnerLastNames[$index],
    //                     'dob' => $partnerDobs[$index],
    //                     'phone_number' => $partnerPhoneNumbers[$index],
    //                 ];
    //             }
    //             // BusinessPartner::insert($partnerData);
    //             session()->put('business_numerology_partners', $partnerData);
    //         } else {
    //             session()->forget('business_numerology_partners');
    //         }



    //         // dd($validated, $amount);
    //         // Redirect to payment page
    //         try {
    //             $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
    //         } catch (\Exception $e) {
    //             Log::error('Failed to initialize Razorpay API: ' . $e->getMessage());
    //             return redirect()->back()->with('error', 'Failed to initialize payment gateway. Please try again later.');
    //         }

    //         // Create a Razorpay order
    //         try {
    //             $order = $api->order->create([
    //                 'amount' => $amount,
    //                 'currency' => 'INR',
    //                 'receipt' => uniqid(),
    //                 'payment_capture' => 1
    //             ]);

    //             session(['numerology_payment' => [
    //                 // 'business_numerology_id' => $businessNumerologyRecord->id,
    //                 'order' => $order,
    //                 'paymentPurpose' => 'Business Numerology Record',
    //                 'business_numerology_data' => $validated,
    //                 'callbackUrl' => route('business_numerology.payment.callback'),
    //             ]]);
    //         } catch (\Exception $e) {
    //             Log::error('Failed to create Razorpay order: ' . $e->getMessage());
    //             return redirect()->back()->with('error', 'Failed to create payment order. Please try again.');
    //         }

    //         // return redirect()->route('business_numerology.form')->with('success', 'business Numerology data saved successfully.');
    //         return redirect()->route('comingsoon.get')->with('success', 'business Numerology data saved successfully.');
    //     } catch (\Illuminate\Validation\ValidationException $e) {
    //         return redirect()->back()->withErrors($e->validator)->withInput();
    //     } catch (\Exception $e) {
    //         Log::error('Failed to process the request: ' . $e->getMessage());
    //         return redirect()->back()->with('error', 'An error occurred while processing your request. Please try again.');
    //     }
    // }


    public function paymentCallback(Request $request)
    {
        return $this->handlePaymentCallback($request, 'business_numerology_form');
    }

    protected function handlePaymentCallback(Request $request, $formRoute)
    {
        try {
            // Log the Razorpay callback data
            Log::info('Razorpay Callback Data:', $request->all());

            // Step 1: Validate required parameters (order_id, payment_id, signature)
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

            // Step 2: Verify the payment signature
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

            // Step 3: Retrieve session data (numerology data and partners)
            try {
                $numerologyData = session('business_numerology_data');
                $partnerData = session('business_numerology_partners', []);
                // dd($partnerData);
                if (!$numerologyData) {
                    Log::error('Session data not found.');
                    return view('payment.notworking', ['errorMessage' => 'Numerology session data not found.']);
                }
            } catch (\Exception $e) {
                Log::error('Error retrieving session data: ' . $e->getMessage());
                return view('payment.notworking', ['errorMessage' => 'Error retrieving session data.']);
            }

            // Step 4: Store numerology data with payment details
            try {
                $numerologyData['payment_id'] = $paymentId;
                $numerologyData['payment_status'] = '1';

                // Store the BusinessNumerology record in the database
                $businessNumerology = BusinessNumerology::create($numerologyData);
            } catch (\Exception $e) {
                Log::error('Error storing numerology data in the database: ' . $e->getMessage());
                return view('payment.notworking', ['errorMessage' => 'Error storing numerology data.']);
            }

            // Step 5: Store partner data if available
            try {
                if (!empty($partnerData)) {
                    foreach ($partnerData as $partner) {
                        BusinessPartner::create([
                            'business_id' => $businessNumerology->id,
                            'first_name' => $partner['first_name'],
                            'last_name' => $partner['last_name'],
                            'dob' => $partner['dob'],
                            'phone_number' => $partner['phone_number'],
                        ]);
                        // dd($partner);
                    }
                }
            } catch (\Exception $e) {
                Log::error('Error storing partner data: ' . $e->getMessage());
                return view('payment.notworking', ['errorMessage' => 'Error storing partner data.']);
            }

            // Step 6: Handle optional email sending
            try {
                $NumerologyData = $numerologyData;
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

            // Step 7: Clear session data
            try {
                session()->forget('business_numerology_data');
                session()->forget('business_numerology_partners');
                session()->forget('numerology_payment');
            } catch (\Exception $e) {
                Log::error('Error clearing session data: ' . $e->getMessage());
                return view('payment.notworking', ['errorMessage' => 'Error clearing session data.']);
            }
            return redirect()->route('bussiness_numerology_auto_download')->with('success', 'Payment successful and record added!');

            // Success - Redirect to the success page
            // return redirect()->route('comingsoon.get')->with('success', 'Payment successful and record added!');
        } catch (\Exception $e) {
            // Global catch for any unhandled errors
            Log::error('Payment callback error: ' . $e->getMessage() . ' | File: ' . $e->getFile() . ' | Line: ' . $e->getLine());
            return view('payment.notworking', ['errorMessage' => 'Payment verification failed due to an unexpected error.']);
        }
    }
}
