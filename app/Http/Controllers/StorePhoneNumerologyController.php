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
        $rules = [
            // 'numerology_type' => 'required|integer',
            'phone_number' => 'required|string|max:20',
            'dob' => 'required|date',
            'area_of_concern' => 'required|string|max:255',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->route('numerology.phone_numerology_form')
                ->withErrors($validator)
                ->withInput();
        } else {
            $validated = $validator->validated();
            $validated['numerology_type'] = 1;
            PhoneNumerology::create($validated);
        }

        try {
            $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
            $order = $api->order->create([
                'amount' => 50000, // 500 INR in paise
                'currency' => 'INR',
                'receipt' => uniqid(),
                'payment_capture' => 1
            ]);

            return view('payment.payment2', [
                'order' => $order,
                'paymentPurpose' => 'Phone Numerology Record',
                'numerology_data' => $validated,
                'callbackUrl' => route('phone_numerology.payment.callback')
            ]);
        } catch (\Exception $e) {
            Log::error('Error during order creation: ' . $e->getMessage());
            return redirect()->route('numerology.phone_numerology_form')
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
