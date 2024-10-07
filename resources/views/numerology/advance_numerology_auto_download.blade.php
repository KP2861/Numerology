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
                id="countdown">13</span> seconds...</p>
        <div class="spinner-border text-success spinner" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
        <form id="postForm" action="{{ route('numerology.advance_numerology_auto-download') }}" method="POST">
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
        <div class="bg-white d-flex justify-content-center new-order-layout ">
            <div class="text-center order-successful-section-outer ">
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
                <div class="container text-center mt-3">
                    <h4>Your Report is Downloading...</h4>
                    <p class="mt-3 mb-1 client-order-details text-black">The report will start downloading shortly. You will
                        be redirected in <span class="fw-bold fs-2" id="countdown">10</span>
                        seconds...</p>
                    <form id="downloadForm" action="{{ route('numerology.advance_numerology_auto-download') }}"
                        method="POST" class="d-none">
                        @csrf
                    </form>
                    <div class="spinner-border text-success" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
                <div class="client-order-details mt-md-0 mt-1 md-5 pt-md-4">
                    <p class="bill-amount mb-1"><span>Order Amount :</span>
                        ₹{{ number_format(session('numerology_payment.order.amount', 0) / 100, 2) }}</p>
                    <p class="mb-1"><span>Order ID : </span>{{ session('numerology_payment.order.id', 'N/A') }}
                    </p>


                    <p class="mb-1"><span>Client Email :
                        </span>{{ session('numerology_payment.advance_numerology_data.email', 'N/A') }}</p>


                    <p class="mb-1"><span>Client Phone
                            :</span>{{ session('numerology_payment.advance_numerology_data.phone_number', 'N/A') }}</p>
                </div>

                <div
                    class="whatsapp-details justify-content-center align-items-center p-3 my-5  mx-auto whatsapp-block-auto-width">
                    <div class="d-flex justify-content-center align-items-center w-auto">
                        <div class="me-2"><img src="{{ asset('frontend/assests/images/hero-section/whatsapp.svg') }}"
                                alt="">
                        </div>
                        <p class="whatsapp-num "><span class="">Whats App :</span> 9883342145</p>
                    </div>
                </div>
                {{-- <p class="mt-3 mb-3 client-order-details text-black">
                    You will be redirected in <span class="fw-bold fs-2">10</span> seconds...
                </p> --}}

                {{-- <div class="mb-4">
                    <svg width="34" height="34" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11 1H12C18.075 1 23 5.925 23 12C23 18.075 18.075 23 12 23C5.925 23 1 18.075 1 12V11H3V12C3 13.78 3.52784 15.5201 4.51677 17.0001C5.50571 18.4802 6.91131 19.6337 8.55585 20.3149C10.2004 20.9961 12.01 21.1743 13.7558 20.8271C15.5016 20.4798 17.1053 19.6226 18.364 18.364C19.6226 17.1053 20.4798 15.5016 20.8271 13.7558C21.1743 12.01 20.9961 10.2004 20.3149 8.55585C19.6337 6.91131 18.4802 5.50571 17.0001 4.51677C15.5201 3.52784 13.78 3 12 3H11V1Z"
                            fill="black" />
                    </svg>

                </div> --}}


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
