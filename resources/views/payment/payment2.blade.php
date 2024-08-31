<!DOCTYPE html>
<html>

<head>
     <title>Payment Page</title>
     <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>

<body>
     <h1>Payment for {{ $paymentPurpose }}</h1>

     @if($errors->any())
     <div>
          <ul>
               @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
               @endforeach
          </ul>
     </div>
     @endif

     <form id="payment-form">
          <script>
               document.addEventListener('DOMContentLoaded', function() {
                    var options = {
                         "key": "{{ env('RAZORPAY_KEY') }}",
                         "amount": "{{ $order->amount }}",
                         "currency": "INR",
                         "name": "Test Company",
                         "description": "{{ $paymentPurpose }}",
                         "order_id": "{{ $order->id }}",
                         "handler": function(response) {
                              var form = document.createElement('form');
                              form.method = 'POST';
                              form.action = "{{ $callbackUrl }}";

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

                              // Adding Invoice ID to the form
                              input = document.createElement('input');
                              input.type = 'hidden';
                              input.name = 'invoice_id';
                              input.value = 'test';
                              form.appendChild(input);

                              document.body.appendChild(form);
                              form.submit();

                         },
                         "prefill": {
                              "name": "{{ Auth::user()->name }}",
                              "email": "{{ Auth::user()->email }}",
                         }
                    };

                    // Create and add the payment button
                    var paymentButton = document.createElement('button');
                    paymentButton.textContent = "Pay Now";
                    paymentButton.onclick = function(e) {
                         e.preventDefault();
                         var rzp1 = new Razorpay(options);
                         rzp1.open();
                    };

                    document.body.appendChild(paymentButton);
               });
          </script>
     </form>
</body>

</html>