{{-- @extends('Website.layouts.app')
@section('content')
    <section class="min-fullscreen">
        <div class="order-successful-section">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <h1 class="mb-md-4 mb-1">
                        <img src="{{ asset('frontend/assests/images/hero-section/order-done.svg') }}" alt="">
                        Congratulation !!
                    </h1>
                    <h3 class="mb-md-4 mb-2">Order Successful</h3>
                    {{-- <p class="mb-md-5 mb-4">Note: Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi, nobis
                        dolores. Voluptatibus explicabo exercitationem laudantium blanditiis voluptates molestias vel maxime
                        temporibus dicta! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi, nobis dolores.
                    </p> --}}
{{-- </div>
            </div>
            <div class="bottom-adorn-section">
                <img src="{{ asset('frontend/assests/images/hero-section/hero-bottom-adorn.png') }}" class="img-fluid"
                    alt="">
            </div>
        </div>

        <div class="order-confirmed-section py-md-5 pb-3 pt-2">
            <div class="container">
                <div class="row align-items-center justify-content-between py-2 ">
                    <div class="col-md-5 col-12">
                        <div class="">
                            <img src="{{ asset('frontend/assests/images/hero-section/rudraksh.png') }}" class="img-fluid"
                                alt="">
                        </div>
                    </div>
                    <div class="col-md-7 col-12">
                        <div class="client-order-details mt-md-0 mt-5">
                            <p class="bill-amount mb-1"><span>Order Amount :</span>
                                ₹{{ number_format(session('numerology_payment.order.amount', 0) / 100, 2) }}</p>
                            <p class="mb-1"><span>Order ID : </span>{{ session('numerology_payment.order.id', 'N/A') }}
                            </p>

                            @if (auth()->check())
                                <p class="mb-1"><span>Client Email : </span>{{ auth()->user()->email }}</p>
                            @else
                                <p class="mb-1"><span>Client Email : </span>You are a guest.</p>
                            @endif

                            <p class="mb-1"><span>Client Phone
                                    :</span>{{ session('numerology_payment.name_numerology_data.phone', 'N/A') }}</p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="whatsapp-outer py-md-5 py-4 text-center mt-md-3 mt-0">
                            <div class="whatsapp-details justify-content-center align-items-center p-3">
                                <div class="d-flex justify-content-center align-items-center w-auto">
                                    <div class="me-2"><img
                                            src="{{ asset('frontend/assests/images/hero-section/whatsapp.svg') }}"
                                            alt=""></div>
                                    <p class="whatsapp-num"><span>Whats App :</span> 9883342145</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Downloading Report Section -->
                    <div class="container text-center my-5">
                        <h4>Your Report is Downloading...</h4>
                        <p>The report will start downloading shortly. You will be redirected in <span
                                id="countdown">30</span>
                            seconds...</p>
                        <form id="downloadForm" action="{{ route('numerology.name_numerology_pdf') }}" method="POST"
                            class="d-none">
                            @csrf
                        </form>
                        <div class="spinner-border text-success" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </section> --}}

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
                    <p class="mt-3  client-order-details text-black">The report will start downloading shortly. You will
                        be redirected in <span class="fw-bold fs-2" id="countdown">10</span>
                        seconds...</p>
                    <form id="downloadForm" action="{{ route('numerology.name_numerology_pdf') }}" method="POST"
                        class="d-none">
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
