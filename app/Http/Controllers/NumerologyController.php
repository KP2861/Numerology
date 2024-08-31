<?php

namespace App\Http\Controllers;

use App\Models\NameNumerology;
use App\Models\BusinessNumerology;
use App\Models\Numerology;
use App\Models\PhoneNumerology;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Razorpay\Api\Api;
use Illuminate\Support\Facades\Validator;


class NumerologyController extends Controller
{
    // View numerology type form
    public function createNumerology()
    {
        return view('numerology.numerology');
    }

    public function storeNumerology(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'type' => 'required|integer|min:1|max:100',
            ]);

            // Assuming user_id should be dynamic, but using 1 for now
            $validated['user_id'] = Auth::id() ?? 1;

            Numerology::create($validated);

            return redirect()->route('numerology.selectNumerology')->with('success', 'Record added successfully!');
        } catch (\Exception $e) {
            Log::error('Failed to add numerology record: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to add record. Please try again.');
        }
    }

    public function paymentCallback(Request $request)
    {
        try {
            $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
            $orderId = $request->input('order_id');
            $paymentId = $request->input('payment_id');
            $signature = $request->input('signature');
            $invoiceId = $request->input('invoice_id');

            // Fetch and verify the order
            $order = $api->order->fetch($orderId);

            if ($api->utility->verifyPaymentSignature([
                'order_id' => $orderId,
                'payment_id' => $paymentId,
                'signature' => $signature
            ])) {
                // Payment verified successfully
                $phoneNumerologyData = $request->except(['order_id', 'payment_id', 'signature', 'invoice_id']);

                // Validate the incoming data
                $validator = Validator::make($phoneNumerologyData, [
                    'numerology_type' => 'required|integer',
                    'phone_number' => 'required|string|max:20',
                    'dob' => 'required|date',
                    'area_of_concern' => 'required|string|max:255',
                    'payment_id' => 'required|string',
                    'payment_status' => 'required|string',
                ]);

                if ($validator->fails()) {
                    // Handle validation errors
                    return redirect()->route('numerology.selectNumerology')
                        ->withErrors($validator)
                        ->withInput();
                }

                // Add additional data if needed
                $phoneNumerologyData['payment_status'] = 'completed';

                // Create the PhoneNumerology record
                PhoneNumerology::create($phoneNumerologyData);

                // return redirect()->route('numerology.selectNumerology')->with('success', 'Payment successful and record added!');
                $redirectRoute = $this->determineRedirectRoute($phoneNumerologyData['numerology_type']);
                return redirect()->route($redirectRoute)->with('success', 'Payment successful and record added!');
            } else {
                return redirect()->route('numerology.form')->with('error', 'Payment verification failed!');
            }
        } catch (\Exception $e) {
            Log::error('Payment callback error: ' . $e->getMessage());
            return redirect()->route('numerology.form')->with('error', 'Payment verification failed!');
        }
    }
}
