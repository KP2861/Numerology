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
       
        $validated = $request->validate([
            'first_name' => 'required|string|max:10',
            'last_name' => 'required|string|max:10',
            'dob' => 'required|date',
            'gender' => 'required|string',
        ]);

        // Add 'numerology_type' with a default value of 1
        $validated['numerology_type'] = 1;

        // Add 'user_id' with a default value of 1
        $validated['user_id'] = 1;

        try {
            NameNumerology::create($validated);

            $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
            $order = $api->order->create([
                'amount' => 50000, // 500 INR in paise
                'currency' => 'INR',
                'receipt' => uniqid(),
                'payment_capture' => 1
            ]);

            return view('payment.payment', [
                'order' => $order,
                'paymentPurpose' => 'Name Numerology Record',
                'numerology_data' => $validated,
                'callbackUrl' => route('name_numerology.payment.callback')
            ]);
        } catch (\Exception $e) {
            Log::error('Failed to create Razorpay order: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred while processing your request. Please try again.');
        }
    }

    public function paymentCallback(Request $request)
    {
        return $this->handlePaymentCallback($request, 'name_numerology_form');
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
                    'first_name' => 'required|string|max:10',
                    'last_name' => 'required|string|max:10',
                    'dob' => 'required|date',
                    'gender' => 'required|string|in:Male,Female',
                    'payment_id' => 'required|string',
                    'payment_status' => 'required|string',
                ]);

                if ($validator->fails()) {
                    return redirect()->route('numerology.' . $formRoute)
                        ->withErrors($validator)
                        ->withInput();
                }

                NameNumerology::create($numerologyData);

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
