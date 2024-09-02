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
        // Validate the request data
        $validated = $request->validate([
            // 'numerology_type' => 'required|integer',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'dob' => 'required|date',
            'phone_number' => 'required|string|regex:/\d{10,}/',
            'business_name' => 'required|string|max:255',
            'type_of_business' => 'required|string|max:255',
            'have_partner' => 'required|integer|in:0,1',
        ]);

        // Add default values to the validated data
        $numerologyData = array_merge($validated, [
            'numerology_type' => 1, // Default value
            'user_id' => 1, // Default value
        ]);

        // Store the data in the BusinessNumerology model
        BusinessNumerology::create($numerologyData);

        try {
            // Initialize Razorpay API
            $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

            // Create a Razorpay order
            $order = $api->order->create([
                'amount' => 50000, // 500 INR in paise
                'currency' => 'INR',
                'receipt' => uniqid(),
                'payment_capture' => 1
            ]);

            // Return the payment view with order details
            return view('payment.notworking', [
                'order' => $order,
                'paymentPurpose' => 'Business Numerology Record',
                'numerology_data' => $validated,
                'callbackUrl' => route('business_numerology.payment.callback')
            ]);
        } catch (\Exception $e) {
            // Log the error and redirect back with an error message
            Log::error('Failed to create Razorpay order: ' . $e->getMessage());
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
            $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
            $orderId = $request->input('order_id');
            $paymentId = $request->input('payment_id');
            $signature = $request->input('signature');

            $order = $api->order->fetch($orderId);

            if ($api->utility->verifyPaymentSignature([
                'order_id' => $orderId,
                'payment_id' => $paymentId,
                'signature' => $signature
            ])) {
                $numerologyData = $request->except(['order_id', 'payment_id', 'signature', 'invoice_id']);
                $numerologyData['payment_status'] = 'completed';

                $validator = Validator::make($numerologyData, [
                    'numerology_type' => 'required|integer',
                    'first_name' => 'required|string|max:255',
                    'last_name' => 'required|string|max:255',
                    'dob' => 'required|date',
                    'phone_number' => 'required|string|regex:/\d{10,}/',
                    'business_name' => 'required|string|max:255',
                    'type_of_business' => 'required|string|max:255',
                    'have_partner' => 'required|integer|in:0,1',
                    'payment_id' => 'required|string',
                    'payment_status' => 'required|string',
                ]);

                if ($validator->fails()) {
                    return redirect()->route('numerology.' . $formRoute)
                        ->withErrors($validator)
                        ->withInput();
                }

                BusinessNumerology::create($numerologyData);

                return redirect()->route('numerology.selectNumerology')->with('success', 'Payment successful and record added!');
            } else {
                return redirect()->route('numerology.' . $formRoute)->with('error', 'Payment verification failed!');
            }
        } catch (\Exception $e) {
            Log::error('Payment callback error: ' . $e->getMessage());
            return redirect()->route('numerology.' . $formRoute)->with('error', 'Payment verification failed!');
        }
    }
}
