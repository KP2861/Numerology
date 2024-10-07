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
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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

        .alert {
            margin: 20px;
        }

        .loading-message {
            display: none;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>

<body class="d-flex justify-content-center align-items-center vh-100 bg-light">
    <div id="main-content" class="card payment-card shadow-lg">
        <div class="payment-header">
            <h5 class="card-title text-primary">Payment Details</h5>
        </div>
        <div class="payment-body">
            @if ($sessionExpired)
                <div class="alert alert-danger" role="alert">
                    Your payment session has expired. Please <a href="{{ url('/') }}" class="alert-link">retry</a>.
                </div>
            @else
                <h3 class="card-title text-danger">Proceed with Payment?</h3>
                <p class="card-text mt-3">
                    Are you sure you want to proceed with the payment of
                    <span
                        class="highlight">₹{{ number_format(session('numerology_payment.order.amount') / 100, 2) }}</span>
                    for
                    <span class="highlight">{{ session('numerology_payment.paymentPurpose') }}</span>?
                </p>
                <div class="d-flex justify-content-between mt-4">
                    <button id="yesButton" class="btn btn-custom btn-green">
                        <i class="fas fa-credit-card"></i> Pay Now
                    </button>
                    <a href="javascript:history.back()" class="btn btn-custom btn-red">
                        <i class="fas fa-times"></i> Cancel
                    </a>
                </div>
            @endif
        </div>
        <div class="payment-footer">
            <p class="text-muted">Secure payment processing through Razorpay</p>
        </div>
    </div>

    <!-- Loading message -->
    <div id="loadingMessage" class="loading-message">
        <h4 class="text-warning">Payment is in processing, please wait...</h4>
        <p class="text-muted">Do not refresh or go back.</p>
    </div>

    <!-- Razorpay form -->
    <form id="razorpay-form" action="{{ session('numerology_payment.callbackUrl') }}" method="POST"
        style="display: none;">
        @csrf
        <input type="hidden" name="order_id" value="{{ session('numerology_payment.order.id') }}">
        <input type="hidden" name="payment_id" id="payment_id">
        <input type="hidden" name="signature" id="signature">
    </form>

    <script>
        document.getElementById('yesButton').onclick = function(e) {
            e.preventDefault();

            // Hide the main content and show the loading message
            document.getElementById('main-content').style.display = 'none';
            document.getElementById('loadingMessage').style.display = 'block';

            var options = {
                "key": "{{ env('RAZORPAY_KEY') }}",
                "amount": "{{ session('numerology_payment.order.amount') }}",
                "currency": "INR",
                "name": "Ravi Mundrra Numerology",
                "description": "{{ session('numerology_payment.paymentPurpose') }}",
                "image": "{{ asset('frontend/assests/images/content/top_logo.png') }}",
                "order_id": "{{ session('numerology_payment.order.id') }}",
                "handler": function(response) {
                    document.getElementById('payment_id').value = response.razorpay_payment_id;
                    document.getElementById('signature').value = response.razorpay_signature;
                    document.getElementById('razorpay-form').submit();
                },
                "prefill": {
                    "name": "{{ session('numerology_payment.name_numerology_data.name') }}",
                    "email": "{{ session('numerology_payment.name_numerology_data.email') }}"
                },
                "theme": {
                    "color": "#825c49"
                }
            };

            var rzp1 = new Razorpay(options);
            rzp1.open();
        };
    </script>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
