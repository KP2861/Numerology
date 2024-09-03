<?php

namespace App\Services;

use Razorpay\Api\Api;
use Illuminate\Support\Facades\Log;

class RazorpayService
{
     protected $api;

     public function __construct()
     {
          // Initialize Razorpay API instance with API key and secret
          $this->api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
     }

     /**
      * Create a new order with Razorpay
      *
      * @param float $amount Amount in INR
      * @param string $receipt Unique receipt ID
      * @return \Razorpay\Api\Order
      * @throws \Exception
      */
     public function createOrder($amount, $receipt)
     {
          try {
               // Create order with Razorpay API
               return $this->api->order->create([
                    'amount' => $amount * 100, // Convert amount to paise
                    'currency' => 'INR',
                    'receipt' => $receipt,
                    'payment_capture' => 1 // Automatically capture payment
               ]);
          } catch (\Exception $e) {
               // Log the error and rethrow
               Log::error('Error during Razorpay order creation: ' . $e->getMessage());
               throw new \Exception('Failed to create payment order.');
          }
     }

     /**
      * Verify the payment signature
      *
      * @param string $orderId Order ID from Razorpay
      * @param string $paymentId Payment ID from Razorpay
      * @param string $signature Payment signature from Razorpay
      * @return bool
      * @throws \Exception
      */
     public function verifyPayment($orderId, $paymentId, $signature)
     {
          try {
               // Fetch the order to verify the signature
               $order = $this->api->order->fetch($orderId);

               // Verify the payment signature
               return $this->api->utility->verifyPaymentSignature([
                    'order_id' => $orderId,
                    'payment_id' => $paymentId,
                    'signature' => $signature
               ]);
          } catch (\Exception $e) {
               // Log the error and rethrow
               Log::error('Payment verification error: ' . $e->getMessage());
               throw new \Exception('Payment verification failed.');
          }
     }
}
