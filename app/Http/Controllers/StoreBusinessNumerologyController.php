<?php

namespace App\Http\Controllers;

use App\Models\BusinessNumerology;
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
        try {
            $validated = $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'dob' => 'required|date',
                'phone_number' => 'required|string|regex:/\d{10,}/',
                'business_name' => 'required|string|max:255',
                'type_of_business' => 'required|string|max:255',
                'have_partner' => 'required|integer|in:0,1',
            ]);

            $numerologyData = array_merge($validated, [
                'numerology_type' => 1, // Default value
                'user_id' => 1, // Default value
            ]);

            // Store the data in the BusinessNumerology model
            BusinessNumerology::create($numerologyData);

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
                'numerology_data' => $validated,
                'callbackUrl' => route('business_numerology.payment.callback')
            ])->with('success', 'Numerology data saved successfully. Please proceed with the payment.');
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

                // $numerologyData = session('numerology_data');

                // // Check if numerology data exists in session
                // if (!$numerologyData) {
                //     Log::error('Session data not found.');
                //     return redirect()->route('session')->with('error', 'Session data not found.');
                // }

                // // Update numerology data with payment details
                // $numerologyData['payment_id'] = $paymentId;
                // $numerologyData['payment_status'] = 'completed';

                // BusinessNumerology::create($numerologyData);

                return redirect()->route('business_numerology.result')->with('success', 'Payment successful and record added!');
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
