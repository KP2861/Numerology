@extends('Website.layouts.app')
@section('content')
<section class="min-fullscreen">
    <div class="order-successful-section">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <h1 class="mb-md-4 mb-1"><img src="{{ asset('frontend/assests/images/hero-section/order-done.svg') }}" alt="">
                    Congratulation !!</h1>
                <h3 class="mb-md-4 mb-2">Order Successful</h3>
                <p class="mb-md-5 mb-4">Note : Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi, nobis
                    dolores. Voluptatibus
                    explicabo exercitationem laudantium blanditiis voluptates molestias vel maxime temporibus
                    dicta!Lorem
                    ipsum dolor sit amet consectetur, adipisicing elit. Eligendi, nobis dolores. </p>
            </div>
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
                    <div class=""><img src="{{ asset('frontend/assests/images/hero-section/rudraksh.png') }}"
                            class="img-fluid" alt=""></div>
                </div>
                <div class="col-md-7 col-12">
                    <div class="client-order-details mt-md-0 mt-5">
                        <p class="bill-amount mb-1"><span>Order Amount : </span>295.00</p>
                        <p class="mb-1"><span>Order ID : </span>ORD2649400</p>
                        <p class="mb-1"><span>Client Email : </span>Mundra.ravi@gmail.com</p>
                        <p class="mb-1"><span>Client Phone : </span>9712090796</p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="whatsapp-outer py-md-5 py-4 text-center mt-md-3 mt-0">
                        <div class="whatsapp-details justify-content-center align-items-center p-3">
                            <div class="d-flex justify-content-center align-items-center w-auto">
                                <div class="me-2"><img
                                        src="{{ asset('frontend/assests/images/hero-section/whatsapp.svg') }}" alt="">
                                </div>
                                <p class="whatsapp-num"><span>Whats App :</span> 9883342145</p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    </div>
    @endsection