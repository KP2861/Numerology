<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PhoneNumerology;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use App\Services\RazorpayService;
use Razorpay\Api\Api;


class StoreAdvanceNumerologyController extends Controller
{
    //advance numerology
    public function storeAdvanceNumerology(Request $request)
    {
        try {
            $rules = [
                'phone_number' => 'required|string|max:20',
                'dob' => 'required|date',
                'area_of_concern' => 'required|string|max:255',
            ];

            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }

            $validated = $validator->validated();
            $validated['numerology_type'] = 1; // Default value for numerology_type
            // $validated['user_id'] = 1; // Default value for user_id


            PhoneNumerology::create($validated);

            try {
                $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
            } catch (\Exception $e) {
                Log::error('Failed to initialize Razorpay API: ' . $e->getMessage());
                return redirect()->back()
                    ->with('error', 'Failed to initialize payment gateway. Please try again later.');
            }

            try {
                // Create a Razorpay order
                $order = $api->order->create([
                    'amount' => 50000, // 500 INR in paise
                    'currency' => 'INR',
                    'receipt' => uniqid(),
                    'payment_capture' => 1
                ]);
            } catch (\Exception $e) {
                Log::error('Error during Razorpay order creation: ' . $e->getMessage());
                return redirect()->back()
                    ->with('error', 'Failed to create payment order. Please try again.');
            }

            return view('payment.pay', [
                'order' => $order,
                'paymentPurpose' => 'Advance Numerology Record',
                'numerology_data' => $validated,
                'callbackUrl' => route('advance_numerology.payment.callback')
            ])->with('success', 'Advance Numerology data saved successfully. Please proceed with the payment.');
        } catch (\Exception $e) {
            Log::error('Error in storeAdvanceNumerology: ' . $e->getMessage());
            return redirect()->back()
                ->with('error', 'An error occurred while processing your request. Please try again.');
        }
    }

    public function paymentCallback(Request $request)
    {
        return $this->handlePaymentCallback($request, 'advance_numerology_form');
    }
    protected function handlePaymentCallback(Request $request, $formRoute)
    {
        try {

            Log::info('Razorpay Callback Data:', $request->all());

            $orderId = $request->input('order_id');
            $paymentId = $request->input('payment_id');
            $signature = $request->input('signature');
            $expectedSignature = hash_hmac('sha256', $orderId . '|' . $paymentId, env('RAZORPAY_SECRET'));
            dd($orderId, $paymentId, $signature, $expectedSignature);

            if (!$orderId || !$paymentId || !$signature) {
                Log::error('Missing required parameters.');
                return redirect()->route('xx')->with('error', 'Invalid payment callback data.');
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

                // PhoneNumerology::create($numerologyData);

                return redirect()->route('numerology.mobile_numerology_form')->with('success', 'Payment successful and record added!');
            } else {
                Log::error('Signature mismatch. Expected: ' . $expectedSignature . ' | Received: ' . $signature);
                return redirect()->route('pot')->with('error', 'Payment verification failed!');
            }
        } catch (\Exception $e) {

            Log::error('Payment callback error: ' . $e->getMessage() . ' | File: ' . $e->getFile() . ' | Line: ' . $e->getLine());
            return redirect()->route('payment.error')->with('error', 'Payment verification failed!');
        }
    }
}
