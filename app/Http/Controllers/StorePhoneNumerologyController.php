<?php

namespace App\Http\Controllers;

use App\Models\PhoneNumerology;
use Illuminate\Http\Request;
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
        // Define validation rules
        $rules = [
            'phone_number' => 'required|string|max:20',
            'dob' => 'required|date',
        ];

        // Validate the request data
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // Redirect back with validation errors if validation fails
            return redirect()->route('numerology.phone_numerology_form')
                ->withErrors($validator)
                ->withInput();
        } else {
            // Get validated data and add default values
            $validated = $validator->validated();
            $validated['numerology_type'] = 1; // Default value for numerology_type
            $validated['user_id'] = 1; // Default value for user_id
            $validated['area_of_concern'] = 'null';

            // Store the data in the PhoneNumerology model
            PhoneNumerology::create($validated);
        }

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
                'paymentPurpose' => 'Phone Numerology Record',
                'numerology_data' => $validated,
                'callbackUrl' => route('phone_numerology.payment.callback')
            ]);
        } catch (\Exception $e) {
            // Log the error and redirect back with an error message
            Log::error('Error during order creation: ' . $e->getMessage());
            return redirect()->back()
                ->with('error', 'An error occurred while processing your request. Please try again.');
        }
    }

    //advance numerology
    public function storeAdvanceNumerology(Request $request)
    {
        // Define validation rules
        $rules = [
            'phone_number' => 'required|string|max:20',
            'dob' => 'required|date',
            'area_of_concern' => 'required|string|max:255',
        ];

        // Validate the request data
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // Redirect back with validation errors if validation fails
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            // Get validated data and add default values
            $validated = $validator->validated();
            $validated['numerology_type'] = 1; // Default value for numerology_type
            $validated['user_id'] = 1; // Default value for user_id

            // Store the data in the PhoneNumerology model
            PhoneNumerology::create($validated);
        }

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
                'paymentPurpose' => 'Advance Numerology Record',
                'numerology_data' => $validated,
                'callbackUrl' => route('phone_numerology.payment.callback')
            ]);
        } catch (\Exception $e) {
            // Log the error and redirect back with an error message
            Log::error('Error during order creation: ' . $e->getMessage());
            return redirect()->back()
                ->with('error', 'An error occurred while processing your request. Please try again.');
        }
    }

    public function paymentCallback(Request $request)
    {
        return $this->handlePaymentCallback($request, 'phone_numerology_form');
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
                    'phone_number' => 'required|string|max:20',
                    'dob' => 'required|date',
                    'area_of_concern' => 'required|string|max:255',
                    'payment_id' => 'required|string',
                    'payment_status' => 'required|string',
                ]);

                if ($validator->fails()) {
                    return redirect()->route('numerology.' . $formRoute)
                        ->withErrors($validator)
                        ->withInput();
                }

                PhoneNumerology::create($numerologyData);

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
