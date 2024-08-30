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

    // Display the form to create a new Name Numerology record
    public function createNameNumerology()
    {
        return view('numerology.name_numerology');
    }

    // Store a new Name Numerology record
    public function storeNameNumerology(Request $request)
    {
        try {
            $validated = $request->validate([
                'numerology_type' => 'required|integer',
                'first_name' => 'required|string|max:10',
                'last_name' => 'required|string|max:10',
                'dob' => 'required|date',
                'gender' => 'required|string|in:Male,Female',
            ]);

            NameNumerology::create($validated);

            return redirect()->back()->with('success', 'Record added successfully!');
        } catch (\Exception $e) {
            Log::error('Failed to add name numerology record: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to add record. Please try again.');
        }
    }

    // Display the form to create a new Business Numerology record
    public function createBusinessNumerology()
    {
        return view('numerology.business_numerology');
    }

    // Store a new Business Numerology record
    public function storeBusinessNumerology(Request $request)
    {
        try {

            $validated = $request->validate([
                'numerology_type' => 'required|integer',
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'dob' => 'required|date',
                'phone_number' => 'required|string|regex:/\d{10,}/',
                'business_name' => 'required|string|max:255',
                'type_of_business' => 'required|string|max:255',
                'have_partner' => 'required|integer|in:0,1',
            ]);

            // Create the new BusinessNumerology record
            BusinessNumerology::create($validated);

            return redirect()->back()->with('success', 'Record added successfully!');
        } catch (\Exception $e) {
            Log::error('Failed to add business numerology record: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to add record. Please try again.');
        }
    }

    // Display the form to create a new Phone Numerology record
    public function createPhoneNumerology()
    {
        return view('numerology.phone_numerology');
    }

    // Store a new Phone Numerology record
    public function storePhoneNumerology(Request $request)
    {
        // Step 1: Validate input
        $validated = $request->validate([
            'numerology_type' => 'required|integer',
            'phone_number' => 'required|string|max:20',
            'dob' => 'required|date',
            'area_of_concern' => 'required|string|max:255',
        ]);

        // Step 2: Create an order with Razorpay
        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
        $order = $api->order->create([
            'amount' => 50000, //(50000 paise = 500 INR)
            'currency' => 'INR',
            'receipt' => uniqid(),
            'payment_capture' => 1 // Auto-capture the payment
        ]);

        // Save the order ID and user data in the session for later use
        session([
            'phone_numerology_data' => $validated,
            'razorpay_order_id' => $order->id,
        ]);


        return view('payment.payment', [
            'order' => $order,
        ]);
    }

    public function paymentCallback(Request $request)
    {
        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
        $orderId = $request->input('order_id');
        $paymentId = $request->input('payment_id');
        $signature = $request->input('signature');

        try {
            $order = $api->order->fetch($orderId);

            if ($api->utility->verifyPaymentSignature([
                'order_id' => $orderId,
                'payment_id' => $paymentId,
                'signature' => $signature
            ])) {
                // Payment verified successfully
                $phoneNumerologyData = session('phone_numerology_data');

                if ($phoneNumerologyData) {
                    $phoneNumerologyData['payment_id'] = $paymentId;
                    $phoneNumerologyData['payment_status'] = 'completed'; // Update status

                    // Create the PhoneNumerology record
                    PhoneNumerology::create($phoneNumerologyData);

                    // Clear session data
                    session()->forget(['phone_numerology_data', 'razorpay_order_id']);

                    return redirect()->route('numerology.selectNumerology')->with('success', 'Payment successful and record added!');
                } else {
                    return redirect()->route('numerology.selectNumerology')->with('error', 'Session data not found!');
                }
            } else {
                return redirect()->route('numerology.selectNumerology')->with('error', 'Payment verification failed!');
            }
        } catch (\Exception $e) {
            Log::error('Payment verification failed: ' . $e->getMessage());
            return redirect()->route('numerology.selectNumerology')->with('error', 'Payment verification failed!');
        }
    }
}
