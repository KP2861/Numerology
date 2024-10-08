@extends('Website.layouts.app')
@section('content')
    {{-- <section class="min-fullscreen vw-100  d-flex justify-content-center align-items-center bg-white">
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
    </script> --}}


    <section class="min-fullscreen vw-100  d-flex justify-content-center align-items-center bg-white">
        <div class="bg-white d-flex justify-content-center new-order-layout">
            <div class="text-center order-successful-section-outer">
                <div class="order-successful-section pt-4">

                    <div class="row align-items-center justify-content-center text-center">
                        <h1 class="mb-md-3 mt-lg-5 mt-md-1 mt-1 mb-1"><img
                                src="{{ asset('frontend/assests/images/hero-section/order-done.svg') }}" alt="">
                            Congratulation !!</h1>
                        <h3 class="mb-md-4 mb-2">Order Placed</h3>

                    </div>

                    <div class="bottom-adorn-section">
                        <img src="{{ asset('frontend/assests/images/hero-section/hero-bottom-adorn.png') }}"
                            class="img-fluid" alt="">
                    </div>
                </div>

                <div class="client-order-details mt-md-0 pt-md-1">
                    <p class="mb-2">Your Report will be shared within 48 hours </p>
                    <p class="mb-2">OR</p>

                    <p class="mb-2">You can consult us through:</p>
                    {{-- <p class="mb-1"><span>Order ID : </span>{{ session('numerology_payment.order.id', 'N/A') }}
                    </p> --}}
                    <p class="mb-1"><span>Client Email :
                        </span>{{ session('numerology_payment.advance_numerology_data.email', 'N/A') }}</p>
                    <p class="mb-1"><span>Client Phone :
                        </span>{{ session('numerology_payment.advance_numerology_data.phone_number', 'N/A') }}</p>
                </div>

                <div
                    class="whatsapp-details justify-content-center align-items-center p-3 mt-5  mx-auto whatsapp-block-auto-width mb-5">
                    <div class="d-flex justify-content-center align-items-center w-auto">
                        <div class="me-2"><img src="{{ asset('frontend/assests/images/hero-section/whatsapp.svg') }}"
                                alt="">
                        </div>
                        <p class="whatsapp-num"><span class="">Whats App :</span> 9883342145</p>
                    </div>
                </div>




            </div>
        </div>

    </section>
@endsection
