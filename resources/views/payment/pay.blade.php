<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Payment Page</title>
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
     <!-- Font Awesome CSS -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
     <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
     <style>
          .payment-card {
               max-width: 500px;
               border-radius: 8px;
               overflow: hidden;
          }

          .payment-header {
               background-color: #f8f9fa;
               border-bottom: 1px solid #dee2e6;
               padding: 20px;
          }

          .payment-body {
               padding: 20px;
               text-align: center;
          }

          .payment-footer {
               background-color: #f8f9fa;
               border-top: 1px solid #dee2e6;
               padding: 20px;
          }

          .highlight {
               font-weight: bold;
               color: #007bff;
          }

          .btn-custom {
               padding: 10px 20px;
               font-size: 16px;
               border-radius: 5px;
               display: flex;
               align-items: center;
               justify-content: center;
          }

          .btn-green {
               background-color: #28a745;
               color: #fff;
               border: none;
          }

          .btn-green:hover {
               background-color: #218838;
               color: #fff;
          }

          .btn-red {
               background-color: #dc3545;
               color: #fff;
               border: none;
          }

          .btn-red:hover {
               background-color: #c82333;
               color: #fff;
          }

          .btn-custom i {
               margin-right: 8px;
          }
     </style>
</head>

<body class="d-flex justify-content-center align-items-center vh-100 bg-light">
     <div class="card payment-card shadow-sm">
          <div class="payment-header">
               <h5 class="card-title text-primary">Payment Details</h5>
          </div>
          <div class="payment-body">
               <h3 class="card-title">Complete Your Payment</h3>
               <p class="card-text mt-3">You are about to pay <span class="highlight">₹{{ number_format($order->amount / 100, 2) }}</span> for <span class="highlight">{{ $paymentPurpose }}</span>.</p>
               <div class="d-flex justify-content-between mt-4">
                    <button id="pay-button" class="btn btn-custom btn-green">
                         <i class="fas fa-credit-card"></i> Pay Now
                    </button>
                    <a href="{{ url()->previous() }}" class="btn btn-custom btn-red">
                         <i class="fas fa-times"></i> Cancel
                    </a>
               </div>
          </div>
          <div class="payment-footer">
               <p class="text-muted">Secure payment processing through Razorpay</p>
          </div>
     </div>

     <form id="razorpay-form" action="{{ $callbackUrl }}" method="POST" style="display: none;">
          @csrf
          <input type="hidden" name="order_id" value="{{ $order->id }}">
          <input type="hidden" name="payment_id" id="payment_id">
          <input type="hidden" name="signature" id="signature">
     </form>

     <script>
          document.getElementById('pay-button').onclick = function(e) {
               e.preventDefault();

               var options = {
                    "key": "{{ env('RAZORPAY_KEY') }}",
                    "amount": "{{ $order->amount }}",
                    "currency": "INR",
                    "name": "Your Company Name",
                    "description": "{{ $paymentPurpose }}",
                    "order_id": "{{ $order->id }}",
                    "handler": function(response) {
                         document.getElementById('payment_id').value = response.razorpay_payment_id;
                         document.getElementById('signature').value = response.razorpay_signature;
                         document.getElementById('razorpay-form').submit();
                    },
                    "prefill": {
                         "name": "",
                         "email": "",
                         "contact": ""
                    },
                    "theme": {
                         "color": "#007bff"
                    }
               };

               var rzp = new Razorpay(options);
               rzp.open();
          };
     </script>

     <!-- Bootstrap JS and dependencies -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>