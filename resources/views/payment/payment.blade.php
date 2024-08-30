<!DOCTYPE html>
<html>

<head>
     <title>Payment Page</title>
     <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>

<body>
     <h1>Payment for Phone Numerology Record</h1>
     <form>
          <script>
               var options = {
                    "key": "{{ env('RAZORPAY_KEY') }}",
                    "amount": "{{ $order->amount }}",
                    "currency": "INR",
                    "name": "Your Company",
                    "description": "Payment for Phone Numerology Record",
                    "order_id": "{{ $order->id }}",
                    "handler": function(response) {
                         // Redirect to callback route with payment details
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

                         // Adding Invoice ID to the form
                         input = document.createElement('input');
                         input.type = 'hidden';
                         input.name = 'invoice_id';
                         input.value = 'test'; // Invoice ID
                         form.appendChild(input);

                         document.body.appendChild(form);
                         form.submit();
                    },
                    "prefill": {
                         "name": "{{ Auth::user()->name }}",
                         "email": "{{ Auth::user()->email }}",
                    }
               };
               var paymentButton = document.createElement('button');
               paymentButton.textContent = "Pay Now";
               paymentButton.onclick = function(e) {
                    e.preventDefault();
                    var rzp1 = new Razorpay(options);
                    rzp1.open();
               };
               document.body.appendChild(paymentButton);
          </script>
     </form>
</body>

</html>