{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirecting...</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f2f5;
        }

        .container {
            text-align: center;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
        }

        .icon {
            font-size: 60px;
            color: #4CAF50;
            margin-bottom: 15px;
        }

        h1 {
            font-size: 24px;
            color: #333;
        }

        .countdown {
            font-size: 22px;
            font-weight: bold;
            color: #FF6347;
        }

        .message {
            font-size: 16px;
            margin-top: 10px;
            color: #555;
        }

        .spinner {
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="icon">
            <i class="bi bi-arrow-down-circle"></i>
        </div>
        <h1>Your Report is Downloading...</h1>
        <p class="message">The report will start downloading shortly. You will be redirected in <span class="countdown"
                id="countdown">12</span> seconds...</p>
        <div class="spinner-border text-success spinner" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
        <form id="postForm" action="{{ route('numerology.mobile_numerology_auto-download') }}" method="POST">
            @csrf
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        // Submit form for download
        document.getElementById('postForm').submit();

        // Countdown timer logic
        let countdownElement = document.getElementById('countdown');
        let countdownValue = 12;
        let countdownTimer = setInterval(function() {
            countdownValue--;
            countdownElement.textContent = countdownValue;
            if (countdownValue === 0) {
                clearInterval(countdownTimer);
            }
        }, 1000);

        // Redirect to home page after 5 seconds
        setTimeout(function() {
            window.location.href = "{{ url('/') }}";
        }, 12000);
    </script>
</body>

</html> --}}
@extends('Website.layouts.app')
@section('content')
    <section class="min-fullscreen vw-100  d-flex justify-content-center align-items-center bg-white">
        <div class="bg-white d-flex justify-content-center new-order-layout">
            <div class="text-center order-successful-section-outer">
                <div class="order-successful-section pt-4">

                    <div class="row align-items-center justify-content-center text-center">
                        <h1 class="mb-md-4 mt-md-5 mt-1"><img
                                src="{{ asset('frontend/assests/images/hero-section/order-done.svg') }}" alt="">
                            Congratulation !!</h1>
                        <h3 class="mb-md-4 mb-2">Order Successful</h3>

                    </div>

                    <div class="bottom-adorn-section">
                        <img src="{{ asset('frontend/assests/images/hero-section/hero-bottom-adorn.png') }}"
                            class="img-fluid" alt="">
                    </div>
                </div>
                <!-- Downloading Report Section -->
                <div class="container text-center mt-3 ">
                    <h4>Your Report is Downloading...</h4>
                    <p class="mt-3 client-order-details text-black">The report will start downloading shortly. You will
                        be redirected in <span class="fw-bold fs-2" id="countdown">10</span>
                        seconds...</p>
                    <form id="downloadForm" action="{{ route('numerology.mobile_numerology_auto-download') }}"
                        method="POST" class="d-none">
                        @csrf
                    </form>
                    <div class="spinner-border text-success" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
                <div class="client-order-details mt-md-0 md-5 pt-md-4 mt-1">
                    <p class="bill-amount mb-1"><span>Order Amount :</span>
                        ₹{{ number_format(session('numerology_payment.order.amount', 0) / 100, 2) }}</p>
                    <p class="mb-1"><span>Order ID : </span>{{ session('numerology_payment.order.id', 'N/A') }}
                    </p>


                    <p class="mb-1"><span> Email :
                        </span>support@swrahan.com</p>
                    <p class="mb-1"><span>Phone :
                        </span>7096331505</p>
                </div>

                <div class="whatsapp-qr-outer-wrapper justify-content-lg-end justify-content-start mt-lg-0 mt-5">
                    <div class="qr-wrapper p-3 text-center mx-auto rounded">
                        <img src="{{ asset('frontend/assests/images/content/whatsaap-qr-img.png') }}" alt="footer_logo"
                            class="img-fluid img-thumbnail" style="width: 150px; height: 150px;" />
                        <p class="text-dark mt-3 fw-bold mb-0">
                            Connect on WhatsApp
                        </p>
                    </div>
                </div>

                {{-- <p class="mt-3 mb-3 client-order-details text-black">
                    You will be redirected in <span class="fw-bold fs-2">10</span> seconds...
                </p> --}}




            </div>
        </div>

    </section>

    <script type="text/javascript">
        // Countdown timer logic
        let countdownElement = document.getElementById('countdown');
        let countdownValue = 10; // Countdown starts at 30 seconds
        let countdownTimer = setInterval(function() {
            countdownValue--;
            countdownElement.textContent = countdownValue;
            if (countdownValue === 0) {
                clearInterval(countdownTimer);
            }
        }, 1000); // Update interval to 1 second

        // Submit form for download after 5 seconds
        setTimeout(function() {
            document.getElementById('downloadForm').submit();
        }, 1000); // 5 seconds delay for form submission

        // Function to delete session data and redirect
        function deleteSessionAndRedirect() {
            fetch("{{ route('delete.session') }}", {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json',
                }
            }).then(response => {
                if (response.ok) {
                    window.location.href = "{{ url('/') }}"; // Redirect after deleting session
                }
            }).catch(error => {
                console.error('Error deleting session:', error);
                window.location.href = "{{ url('/') }}"; // Fallback redirect
            });
        }

        // Redirect to home page after 30 seconds and delete the session
        setTimeout(deleteSessionAndRedirect, 7000); // Redirecting and deleting session after 30 seconds
    </script>
@endsection
