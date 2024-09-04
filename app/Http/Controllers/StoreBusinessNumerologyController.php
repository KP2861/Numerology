<?php

namespace App\Http\Controllers;

use App\Models\BusinessNumerology;
use App\Models\BusinessPartner;
use Illuminate\Http\Request;
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
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'You must be logged in to proceed.');
        }
        try {
            // Validate the main form data
            $validated = $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'dob' => 'required|date',
                'phone_number' => 'required|string|regex:/\d{10}/',
                'business_name' => 'required|string|max:255',
                'type_of_business' => 'required|string|max:255',
                'have_partner' => 'required|integer|in:0,1',
            ]);

            // Additional validation for partner fields if have_partner is 1
            if ($validated['have_partner'] == 1) {
                $request->validate([
                    'partner_first_names.*' => 'required|string|max:255',
                    'partner_last_names.*' => 'required|string|max:255',
                    'partner_dobs.*' => 'required|date',
                ], [
                    'partner_first_names.*.required' => 'Each partner\'s first name is required.',
                    'partner_first_names.*.string' => 'Each partner\'s first name must be a valid string.',
                    'partner_first_names.*.max' => 'Each partner\'s first name cannot exceed 255 characters.',
                    'partner_last_names.*.required' => 'Each partner\'s last name is required.',
                    'partner_last_names.*.string' => 'Each partner\'s last name must be a valid string.',
                    'partner_last_names.*.max' => 'Each partner\'s last name cannot exceed 255 characters.',
                    'partner_dobs.*.required' => 'Each partner\'s date of birth is required.',
                    'partner_dobs.*.date' => 'Each partner\'s date of birth must be a valid date.',
                ]);
            }

            $validated['user_id'] = auth()->id();
            $validated['numerology_type'] = 1; // Default numerology_type

            // Store data in session
            session()->put('business_numerology_data', $validated);


            if ($validated['have_partner'] == 1) {
                $partnerData = [];
                $partnerFirstNames = $request->input('partner_first_names', []);
                $partnerLastNames = $request->input('partner_last_names', []);
                $partnerDobs = $request->input('partner_dobs', []);

                foreach ($partnerFirstNames as $index => $firstName) {
                    $partnerData[] = [
                        'first_name' => $firstName,
                        'last_name' => $partnerLastNames[$index],
                        'dob' => $partnerDobs[$index],
                    ];
                }
                session()->put('business_numerology_partners', $partnerData);
            } else {
                session()->forget('business_numerology_partners');
            }

            // dd($validated, $partnerData);

            // Redirect to payment page
            try {
                $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
            } catch (\Exception $e) {
                Log::error('Failed to initialize Razorpay API: ' . $e->getMessage());
                return redirect()->back()->with('error', 'Failed to initialize payment gateway. Please try again later.');
            }

            // Create a Razorpay order
            try {
                $order = $api->order->create([
                    'amount' => 50000, // 500 INR in paise
                    'currency' => 'INR',
                    'receipt' => uniqid(),
                    'payment_capture' => 1
                ]);
            } catch (\Exception $e) {
                Log::error('Failed to create Razorpay order: ' . $e->getMessage());
                return redirect()->back()->with('error', 'Failed to create payment order. Please try again.');
            }

            return view('payment.pay', [
                'order' => $order,
                'paymentPurpose' => 'Business Numerology Record',
                'callbackUrl' => route('business_numerology.payment.callback')
            ])->with('success', 'Numerology data saved in session. Please proceed with the payment.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        } catch (\Exception $e) {
            Log::error('Failed to process the request: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred while processing your request. Please try again.');
        }
    }




    public function paymentCallback(Request $request)
    {
        return $this->handlePaymentCallback($request, 'business_numerology_form');
    }

    protected function handlePaymentCallback(Request $request, $formRoute)
    {
        try {

            Log::info('Razorpay Callback Data:', $request->all());

            $orderId = $request->input('order_id');
            $paymentId = $request->input('payment_id');
            $signature = $request->input('signature');
            // dd($orderId, $paymentId, $signature, $expectedSignature);

            if (!$orderId || !$paymentId || !$signature) {
                Log::error('Missing required parameters.');
                $errorMessage = 'Missing required parameters.';
                return view('payment.notworking', ['errorMessage' => $errorMessage]);
            }

            $expectedSignature = hash_hmac('sha256', $orderId . '|' . $paymentId, env('RAZORPAY_SECRET'));

            if ($signature === $expectedSignature) {

                // Retrieve data from session
                $numerologyData = session('business_numerology_data');
                $partnerData = session('business_numerology_partners', []);

                // // Check if numerology data exists in session
                if (!$numerologyData) {
                    Log::error('Session data not found.');
                    $errorMessage = 'Phone Numerology Session data not found.';
                    return view('payment.notworking', ['errorMessage' => $errorMessage]);
                }

                // Update numerology data with payment details
                $numerologyData['payment_id'] = $paymentId;
                $numerologyData['payment_status'] = '1';

                $businessNumerology = BusinessNumerology::create($numerologyData);

                // Store partner data if present
                if (!empty($partnerData)) {
                    foreach ($partnerData as $partner) {
                        BusinessPartner::create([
                            'business_id' => $businessNumerology->id,
                            'first_name' => $partner['first_name'],
                            'last_name' => $partner['last_name'],
                            'dob' => $partner['dob'],
                        ]);
                    }
                }

                // Clear the session data after processing
                session()->forget('business_numerology_data');
                session()->forget('business_numerology_partners');

                return redirect()->route('business_numerology.form')->with('success', 'Payment successful and record added!');
            } else {
                Log::error('Signature mismatch. Expected: ' . $expectedSignature . ' | Received: ' . $signature);
                $errorMessage = 'Payment verification failed!';
                return view('payment.notworking', ['errorMessage' => $errorMessage]);
            }
        } catch (\Exception $e) {

            Log::error('Payment callback error: ' . $e->getMessage() . ' | File: ' . $e->getFile() . ' | Line: ' . $e->getLine());
            $errorMessage = 'Payment verification failed due to an unexpected error.';
            return view('payment.notworking', ['errorMessage' => $errorMessage]);
        }
    }
}
