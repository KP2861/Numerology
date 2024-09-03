<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Payment Page</title>
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>

<body class="d-flex justify-content-center align-items-center vh-100 bg-light">
     <div class="card text-center p-4 shadow-lg" style="max-width: 400px;">
          <div class="card-body">
               <h3 class="card-title text-primary">Complete Your Payment</h3>
               <p class="card-text mt-3">You are about to pay ₹{{ number_format($order->amount / 100, 2) }} for {{ $paymentPurpose }}.</p>
               <div class="d-flex justify-content-around mt-4">
                    <button id="pay-button" class="btn btn-success">Pay Now</button>
                    <a href="{{ url()->previous() }}" class="btn btn-danger">Cancel</a>
               </div>
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
                         "color": "#3399cc"
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