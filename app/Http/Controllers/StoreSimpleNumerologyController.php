<?php

namespace App\Http\Controllers;

use App\Models\NameNumerology;
use App\Models\Numerology;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Razorpay\Api\Api;
use Illuminate\Support\Facades\Validator;

class StoreSimpleNumerologyController extends Controller
{
    // public function storeSimpleNameNumerology(Request $request)
    // {
    //     try {
    //         // Validate the request data
    //         $validated = $request->validate([
    //             'first_name' => 'required|string|max:10',
    //             'last_name' => 'required|string|max:10',
    //             'dob' => 'required|date',
    //             'gender' => 'required|string|in:Male,Female',
    //             'numerology_type' => 'required|integer|in:1,2,3,4,5',
    //         ]);

    //         // Add 'numerology_type' with a default value of 1
    //         // $validated['numerology_type'] = 1;

    //         $validated['user_id'] = auth()->check() ? auth()->id() : 0;

    //         // dd($validated);
    //         $numerology = Numerology::where('numerology_type', $validated['numerology_type'])->first();
    //         $amount = $numerology->packages_amount * 100;
    //         session(['name_numerology_data' => $validated]);

    //         // Attempt to create the NameNumerology record
    //         // NameNumerology::create($validated);

    //         try {
    //             $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
    //         } catch (\Exception $e) {
    //             Log::error('Failed to initialize Razorpay API: ' . $e->getMessage());
    //             return redirect()->back()
    //                 ->with('error', 'Failed to initialize payment gateway. Please try again later.');
    //         }

    //         try {
    //             // Create a Razorpay order
    //             $order = $api->order->create([
    //                 'amount' =>  $amount,
    //                 'currency' => 'INR',
    //                 'receipt' => uniqid(),
    //                 'payment_capture' => 1
    //             ]);
    //         } catch (\Exception $e) {
    //             Log::error('Failed to create Razorpay order: ' . $e->getMessage());
    //             return redirect()->back()
    //                 ->with('error', 'Failed to create payment order. Please try again.');
    //         }

    //         return view('payment.pay', [
    //             'order' => $order,
    //             'paymentPurpose' => 'Name Numerology Record',
    //             'name_numerology_data' => $validated,
    //             'callbackUrl' => route('simple_name_numerology.payment.callback')
    //         ])->with('success', 'Name Numerology data saved successfully. Please proceed with the payment.');
    //     } catch (\Illuminate\Validation\ValidationException $e) {
    //         return redirect()->back()
    //             ->withErrors($e->errors())
    //             ->withInput();
    //     } catch (\Exception $e) {
    //         Log::error('Error in storeNameNumerology: ' . $e->getMessage());
    //         return redirect()->back()
    //             ->with('error', 'An error occurred while processing your request. Please try again.');
    //     }
    // }

    public function storeSimpleNameNumerology(Request $request)
    {
        try {
            // Validate the request data
            $validated = $request->validate([
                'first_name' => 'required|string|max:25',
                'last_name' => 'required|string|max:25',
                'dob' => 'required|date',
                'gender' => 'required|string|in:Male,Female',
                'numerology_type' => 'required|integer|in:1,2,3,4,5',
            ]);

            // Set user_id to the authenticated user or 0
            $validated['user_id'] = auth()->check() ? auth()->id() : 0;

            // Add payment_id as null and payment_status as 2 (Assuming '2' is the desired status)
            // $validated['payment_id'] = "null";
            // $validated['payment_status'] = 2;

            // Retrieve the numerology and calculate the amount
            $numerology = Numerology::where('numerology_type', $validated['numerology_type'])->first();
            $amount = $numerology->packages_amount * 100;
            session(['name_numerology_data' => $validated]);

            // Create the NameNumerology record
            // $SimpleNameNumerologyRecord = NameNumerology::create($validated);

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
                    'amount' =>  $amount,
                    'currency' => 'INR',
                    'receipt' => uniqid(),
                    'payment_capture' => 1
                ]);

                session(['numerology_payment' => [
                    // 'name_numerology_id' => $SimpleNameNumerologyRecord->id,
                    'order' => $order,
                    'paymentPurpose' => 'Name Numerology Record',
                    'name_numerology_data' => $validated,
                    'callbackUrl' => route('simple_name_numerology.payment.callback'),
                ]]);
            } catch (\Exception $e) {
                Log::error('Failed to create Razorpay order: ' . $e->getMessage());
                return redirect()->back()
                    ->with('error', 'Failed to create payment order. Please try again.');
            }

            // Redirect to the numerology.form page instead of payment page
            return redirect()->route('numerology.form')->with('success', 'Name Numerology data saved successfully.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()
                ->withErrors($e->errors())
                ->withInput();
        } catch (\Exception $e) {
            Log::error('Error in storeSimpleNameNumerology: ' . $e->getMessage());
            return redirect()->back()
                ->with('error', 'An error occurred while processing your request. Please try again.');
        }
    }


    public function paymentCallback(Request $request)
    {
        return $this->handlePaymentCallback($request, 'name_numerology_form');
    }

    // protected function handlePaymentCallback(Request $request, $formRoute)
    // {
    //     try {

    //         Log::info('Razorpay Callback Data:', $request->all());

    //         $orderId = $request->input('order_id');
    //         $paymentId = $request->input('payment_id');
    //         $signature = $request->input('signature');
    //         // $expectedSignature = hash_hmac('sha256', $orderId . '|' . $paymentId, env('RAZORPAY_SECRET'));
    //         // dd($orderId, $paymentId, $signature, $expectedSignature);

    //         if (!$orderId || !$paymentId || !$signature) {
    //             Log::error('Missing required parameters.');
    //             $errorMessage = 'Missing required parameters.';
    //             return view('payment.notworking', ['errorMessage' => $errorMessage]);
    //         }

    //         $expectedSignature = hash_hmac('sha256', $orderId . '|' . $paymentId, env('RAZORPAY_SECRET'));

    //         if ($signature === $expectedSignature) {

    //             $nameNumerologyData = session('name_numerology_data');

    //             // Check if numerology data exists in session
    //             if (!$nameNumerologyData) {
    //                 Log::error('Session data not found.');
    //                 $errorMessage = 'Session data not found.';
    //                 return view('payment.notworking', ['errorMessage' => $errorMessage]);
    //             }

    //             // Update numerology data with payment details
    //             $nameNumerologyData['payment_id'] = $paymentId;
    //             $nameNumerologyData['payment_status'] = '1';
    //             // dd($nameNumerologyData);
    //             // Store the NameNumerology record in the database
    //             NameNumerology::create($nameNumerologyData);

    //             // Clear the session data
    //             session()->forget('name_numerology_data');

    //             return redirect()->route('numerology.form')->with('success', 'Payment successful and record added!');
    //         } else {
    //             Log::error('Signature mismatch. Expected: ' . $expectedSignature . ' | Received: ' . $signature);
    //             $errorMessage = 'Payment verification failed!';
    //             return view('payment.notworking', ['errorMessage' => $errorMessage]);
    //         }
    //     } catch (\Exception $e) {

    //         Log::error('Payment callback error: ' . $e->getMessage() . ' | File: ' . $e->getFile() . ' | Line: ' . $e->getLine());
    //         $errorMessage = 'Payment verification failed due to an unexpected error.';
    //         return view('payment.notworking', ['errorMessage' => $errorMessage]);
    //     }
    // }

    protected function handlePaymentCallback(Request $request, $formRoute)
    {
        try {
            Log::info('Razorpay Callback Data:', $request->all());

            $orderId = $request->input('order_id');
            $paymentId = $request->input('payment_id');
            $signature = $request->input('signature');

            if (!$orderId || !$paymentId || !$signature) {
                Log::error('Missing required parameters.');
                $errorMessage = 'Missing required parameters.';
                return view('payment.notworking', ['errorMessage' => $errorMessage]);
            }

            $expectedSignature = hash_hmac('sha256', $orderId . '|' . $paymentId, env('RAZORPAY_SECRET'));

            if ($signature === $expectedSignature) {
                // Retrieve the existing session data
                $numerologyPaymentData = session('numerology_payment');

                if (!$numerologyPaymentData || !isset($numerologyPaymentData['name_numerology_data'])) {
                    Log::error('Session data not found.');
                    $errorMessage = 'Session data not found.';
                    return view('payment.notworking', ['errorMessage' => $errorMessage]);
                }

                // Update the database with payment_id and payment_status
                $nameNumerologyData = $numerologyPaymentData['name_numerology_data'];
                // $nameNumerologyId = $numerologyPaymentData['name_numerology_id'] ?? null;

                // if ($nameNumerologyId) {
                //     NameNumerology::where('id', $nameNumerologyId)
                //         ->update([
                //             'payment_id' => $paymentId,
                //             'payment_status' => 1 // Assuming '1' indicates a successful payment
                //         ]);

                // Update session data with payment details
                $updatedSessionData = array_merge($nameNumerologyData, [
                    'payment_id' => $paymentId,
                    'payment_status' => 1
                ]);

                session(['numerology_payment' => array_merge($numerologyPaymentData, [
                    'name_numerology_data' => $updatedSessionData
                ])]);

                // dd(session('numerology_payment'));

                // Optionally clear the session data if no longer needed
                session()->forget('numerology_payment');
                session()->forget('name_numerology_data');
                return redirect(url('/'))->with('success', 'Payment successful and record updated!');
                // } else {
                //     Log::error('Name numerology ID not found in session.');
                //     $errorMessage = 'Name numerology ID not found in session.';
                //     return view('payment.notworking', ['errorMessage' => $errorMessage]);
                // }
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
