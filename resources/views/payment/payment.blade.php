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
               <h3 class="card-title text-danger">Proceed with Payment?</h3>
               <p class="card-text mt-3">Are you sure you want to proceed with the payment?</p>
               <div class="d-flex justify-content-around mt-4">
                    <button id="yesButton" class="btn btn-success">Yes</button>
                    <a href="javascript:history.back()" class="btn btn-danger">No</a>
               </div>
          </div>
     </div>

     <form id="paymentForm">
          <script>
               var options = {
                    "key": "{{ env('RAZORPAY_KEY') }}",
                    "amount": "{{ $order->amount }}",
                    "currency": "INR",
                    "name": "Test Company",
                    "description": "Payment for Phone Numerology Record",
                    "order_id": "{{ $order->id }}",
                    "handler": function(response) {
                         var form = document.createElement('form');
                         form.method = 'POST';
                         form.action = "{{ route('payment.callback') }}";

                         var input = document.createElement('input');
                         input.type = 'hidden';
                         input.name = 'order_id';
                         input.value = response.order_id;
                         form.appendChild(input);

                         input = document.createElement('input');
                         input.type = 'hidden';
                         input.name = 'payment_id';
                         input.value = response.payment_id;
                         form.appendChild(input);

                         input = document.createElement('input');
                         input.type = 'hidden';
                         input.name = 'signature';
                         input.value = response.signature;
                         form.appendChild(input);

                         input = document.createElement('input');
                         input.type = 'hidden';
                         input.name = 'invoice_id';
                         input.value = 'test';
                         form.appendChild(input);

                         document.body.appendChild(form);
                         form.submit();
                    },
                    "prefill": {
                         "name": "text",
                         "email": "example@example.com",
                    }
               };

               document.getElementById('yesButton').onclick = function(e) {
                    e.preventDefault();
                    var rzp1 = new Razorpay(options);
                    rzp1.open();
               };
          </script>
     </form>

     <!-- Bootstrap JS and dependencies -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>