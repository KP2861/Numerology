<?php

namespace App\Http\Controllers;

use App\Models\NameNumerology;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Razorpay\Api\Api;
use Illuminate\Support\Facades\Validator;

class StoreNameNumerologyController extends Controller
{
    public function createNameNumerology()
    {
        return view('numerology.name_numerology');
    }

    public function storeNameNumerology(Request $request)
    {
        try {
            // Validate the request data
            $validated = $request->validate([
                'first_name' => 'required|string|max:10',
                'last_name' => 'required|string|max:10',
                'dob' => 'required|date',
                'gender' => 'required|string|in:Male,Female',
            ]);

            // Add 'numerology_type' with a default value of 1
            $validated['numerology_type'] = 1;

            // Add 'user_id' with a default value of 1
            $validated['user_id'] = 1;

            // Attempt to create the NameNumerology record
            NameNumerology::create($validated);

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
                Log::error('Failed to create Razorpay order: ' . $e->getMessage());
                return redirect()->back()
                    ->with('error', 'Failed to create payment order. Please try again.');
            }

            return view('payment.pay', [
                'order' => $order,
                'paymentPurpose' => 'Name Numerology Record',
                'numerology_data' => $validated,
                'callbackUrl' => route('name_numerology.payment.callback')
            ])->with('success', 'Name Numerology data saved successfully. Please proceed with the payment.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()
                ->withErrors($e->errors())
                ->withInput();
        } catch (\Exception $e) {
            Log::error('Error in storeNameNumerology: ' . $e->getMessage());
            return redirect()->back()
                ->with('error', 'An error occurred while processing your request. Please try again.');
        }
    }


    public function paymentCallback(Request $request)
    {
        return $this->handlePaymentCallback($request, 'name_numerology_form');
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
                return redirect()->route('xx')->with('error', 'Invalid payment callback data.');
            }

            $expectedSignature = hash_hmac('sha256', $orderId . '|' . $paymentId, env('RAZORPAY_SECRET'));

            if ($signature === $expectedSignature) {

                $numerologyData = session('numerology_data');

                // Check if numerology data exists in session
                if (!$numerologyData) {
                    Log::error('Session data not found.');
                    return redirect()->route('session')->with('error', 'Session data not found.');
                }

                // // Update numerology data with payment details
                // $numerologyData['payment_id'] = $paymentId;
                // $numerologyData['payment_status'] = 'completed';

                // PhoneNumerology::create($numerologyData);

                return redirect()->route('numerology.name_numerology_result')->with('success', 'Payment successful and record added!');
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
