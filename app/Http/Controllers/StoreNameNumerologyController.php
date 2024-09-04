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
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'You must be logged in to proceed.');
        }
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

            $validated['user_id'] = auth()->id();

            // Attempt to create the NameNumerology record
            // NameNumerology::create($validated);
            session(['name_numerology_data' => $validated]);

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
                'name_numerology_data' => $validated,
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
            // $expectedSignature = hash_hmac('sha256', $orderId . '|' . $paymentId, env('RAZORPAY_SECRET'));
            // dd($orderId, $paymentId, $signature, $expectedSignature);

            if (!$orderId || !$paymentId || !$signature) {
                Log::error('Missing required parameters.');
                $errorMessage = 'Missing required parameters.';
                return view('payment.notworking', ['errorMessage' => $errorMessage]);
            }

            $expectedSignature = hash_hmac('sha256', $orderId . '|' . $paymentId, env('RAZORPAY_SECRET'));

            if ($signature === $expectedSignature) {

                $nameNumerologyData = session('name_numerology_data');

                // Check if numerology data exists in session
                if (!$nameNumerologyData) {
                    Log::error('Session data not found.');
                    $errorMessage = 'Session data not found.';
                    return view('payment.notworking', ['errorMessage' => $errorMessage]);
                }

                // Update numerology data with payment details
                $nameNumerologyData['payment_id'] = $paymentId;
                $nameNumerologyData['payment_status'] = '1';

                // Store the NameNumerology record in the database
                NameNumerology::create($nameNumerologyData);

                // Clear the session data
                session()->forget('name_numerology_data');

                return redirect()->route('numerology.form')->with('success', 'Payment successful and record added!');
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
