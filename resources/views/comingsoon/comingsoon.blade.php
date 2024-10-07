@extends('Website.layouts.app')

@section('content')
    <section class="coming-soon-header d-flex justify-content-center align-items-center">
        <div class="container ">

            <div class=" h-100 d-flex flex-column justify-content-sm-center align-items-sm-center ">
                <h1 class="mainheading text-start text-sm-center">
                    Coming Soon
                </h1>
                <h2 class="subheading mt-4 text-start text-sm-center">
                    We’re currently performing some updates to bring you a better experience. We’ll be back shortly!
                </h2>
                <p class=" mt-4 mt-xl-5 text-start text-sm-center">
                    If you need immediate assistance, please contact us at:
                </p>
                <div class="contact-info mt-xl-3 ">
                    <div class="d-flex flex-column flex-sm-row justify-content-sm-center align-items-sm-center mt-3">
                        <p>
                            Phone:
                        </p>
                        <a href="#" class="ms-1 fw-bold"> +91-7096925750</a>
                    </div>
                    <div class="d-flex flex-column flex-sm-row justify-content-sm-center align-items-sm-center mt-2">
                        <p>
                            Email:
                        <p>
                            <a href="#" class="ms-1 fw-bold"> support@ravimundrranumerology.com</a>
                    </div>


                </div>
            </div>
        </div>
    </section>
@endsection
