@extends('Website.layouts.app')
@section('content')
<section class="intro-hero-section custom-hero-padding moon-bg-absolute">
    <div class="container-fluid custom-padded-container custom-container-width custom-container-max-width">
        <div class="row">
            <div class="reach-us-section pt-3 pb-xxl-2 mb-5 gap-3 pb-lg-2">
                <div>
                    <div class="contact-us-sub-section  gap-3">
                        <div class="reach-us subtitle">
                            <div class="d-flex align-items-center justify-content-center h-100"><img
                                    src="{{ asset('frontend/assests/images/hero-section/reach-us-icon.svg') }}"
                                    alt="icon"></div>
                            <div class="subtitle-inner ms-2">
                                <p class="subtitle-heading mb-0">Reach Us</p>
                                <p class="subtitle-para">601, Ram Nagar Dewas</p>
                            </div>
                        </div>
                        <div class="reach-us subtitle ms-md-4">
                            <div class="d-flex align-items-center justify-content-center h-100"><img
                                    src="{{ asset('frontend/assests/images/hero-section/call-icon.svg') }}" alt="icon">
                            </div>
                            <div class="subtitle-inner ms-2">
                                <p class="subtitle-heading mb-0">Contact Us</p>
                                <p class="subtitle-para">+91-6359455599</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between   gap-4">
                    <div class="button-outer"><button class="outline-button">
                            <p class="mb-0 mt-0 mr-0 ml-0 button-text">Consultation</p>
                        </button></div>
                    <div class="button-outer"><button class="fill-button"><img
                                src="{{ asset('frontend/assests/images/hero-section/sign-in-icon.svg') }}">
                            <p class="mb-0 mt-0 mr-0 ms-2 button-text">SIGN IN</p>
                        </button></div>
                </div>
            </div>
        </div>
        <div class="row mb-5 align-items-center gy-md-0 gy-5 ">
            <div class="col-xl-4 col-lg-7 order-md-1 order-2">
                <div class="hero-section-content">

                    <div>

                        <h1 class="h1-main-heading mb-xxl-4 mb-3 pe-xl-5">
                            Unlock the Secrets to
                            a <span>Harmonious</span> and <span>Prosperous Life</span>
                        </h1>
                        <p class="gen-para mb-xxl-5 mb-4">
                            At Ravi Mundrra Numerology, we transform lives by merging the ancient wisdom of Vastu,
                            Astrology,
                            and Numerology with the challenges of modern living. Whether you're seeking balance in your
                            home,
                            clarity in your career, or alignment with your personal destiny, we offer customized
                            solutions
                            to
                            help you live your best life.
                        </p>
                        <button class="hero-section-button fill-button">
                            <p class="mb-0">Read More</p>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-5 order-md-2 order-1">
                <div class=" h-100 mt-xxl-5 mt-2 py-lg-0 py-md-5 py-0">
                    <div class="pattern-outer h-100" id="heroanimate">
                        <img src="{{ asset('frontend/assests/images/hero-section/random-pattern.png') }}" alt=""
                            class="img-fluid web">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="main-section-extended pb-lg-5 pb-2">
    <div class="card-row ">
        <div class="container-fluid custom-padded-container custom-container-width custom-container-max-width">
            <div id="carouselExample" class="carousel slide top-tab-slide" data-bs-ride="carousel">
                <div class="carousel-indicators d-none">
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner p-0">
                    <div class="carousel-item active">
                        <div class="row align-items-center justify-content-center tabs gap-md-3 gap-1">
                            <div class="col-auto  p-0">
                                <div class="tab" onclick="showContent('astrology')">
                                    <div class="card-row-card"><img
                                            src="{{ asset('frontend/assests/images/hero-section/card-row-1.svg') }}"
                                            alt="">
                                    </div>
                                    <div class="hidden-text-block">
                                        <p class="hidden-text">
                                            Astrology
                                        </p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-auto p-0">
                                <div class="tab" onclick="showContent('numerology')">
                                    <div class="card-row-card "><img
                                            src="{{ asset('frontend/assests/images/hero-section/card-row-2.svg') }}"
                                            alt="">
                                    </div>
                                    <div class="hidden-text-block">
                                        <p class="hidden-text">
                                            Numerology
                                        </p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-auto p-0">
                                <div class="tab" onclick="showContent('vastu')">
                                    <div class="card-row-card "><img
                                            src="{{ asset('frontend/assests/images/hero-section/card-row-3.svg') }}"
                                            alt="">
                                    </div>
                                    <div class="hidden-text-block">
                                        <p class="hidden-text">
                                            Vastu Shastra
                                        </p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-auto p-0">
                                <div class="tab" onclick="showContent('manifestation')">
                                    <div class="card-row-card "><img
                                            src="{{ asset('frontend/assests/images/hero-section/card-row-4.svg') }}"
                                            alt="">
                                    </div>
                                    <div class="hidden-text-block">
                                        <p class="hidden-text">
                                            Manifestation
                                        </p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-auto p-0">
                                <div class="tab" onclick="showContent('prediction')">
                                    <div class="card-row-card"><img
                                            src="{{ asset('frontend/assests/images/hero-section/card-row-5.svg') }}"
                                            alt="">
                                    </div>
                                    <div class="hidden-text-block">
                                        <p class="hidden-text">
                                            Event
                                        </p>
                                        <p class="hidden-text">
                                            Prediction
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row align-items-center justify-content-center tabs gap-md-3 gap-1">
                            <div class="col-auto p-0">
                                <div class="tab" onclick="showContent('scientific')">
                                    <div class="card-row-card "><img
                                            src="{{ asset('frontend/assests/images/hero-section/card-row-6.svg') }}"
                                            alt="">
                                    </div>
                                    <div class="hidden-text-block">
                                        <p class="hidden-text">
                                            Designing
                                        </p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-auto p-0">
                                <div class="tab" onclick="showContent('signature')">
                                    <div class="card-row-card "><img
                                            src="{{ asset('frontend/assests/images/hero-section/card-row-7.svg') }}"
                                            alt="">
                                    </div>
                                    <div class="hidden-text-block">
                                        <p class="hidden-text">
                                            Signature
                                        </p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-auto  p-0">
                                <div class="tab" onclick="showContent('watch')">
                                    <div class="card-row-card "><img
                                            src="{{ asset('frontend/assests/images/hero-section/card-row-8.svg') }}"
                                            alt="">
                                    </div>
                                    <div class="hidden-text-block">
                                        <p class="hidden-text">
                                            Watch
                                        </p>
                                    </div>


                                </div>
                            </div>

                            <div class="col-auto p-0">
                                <div class="tab" onclick="showContent('remedies')">
                                    <div class="card-row-card "><img
                                            src="{{ asset('frontend/assests/images/hero-section/card-row-9.svg') }}"
                                            alt="">
                                    </div>
                                    <div class="hidden-text-block">
                                        <p class="hidden-text">
                                            Remedies
                                        </p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-auto p-0">
                                <div class="tab" onclick="showContent('energy')">
                                    <div class="card-row-card"><img
                                            src="{{ asset('frontend/assests/images/hero-section/card-row-10.svg') }}"
                                            alt="">
                                    </div>
                                    <div class="hidden-text-block">
                                        <p class="hidden-text">
                                            Energy
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev d-none" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon d-none" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next d-none" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon d-none" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>




        </div>


    </div>

    <div class="container-fluid custom-padded-container custom-container-width custom-container-max-width">
        <div class="content-brown-cards ">
            <div id="astrology" class="content-section">
                <div class="row">
                    <h2 class=" heading mb-3 mt-0 text-center">
                        About<span> Astrology</span>
                    </h2>

                    <div class=" d-flex justify-content-center text-center flex-column mb-5">

                        <div><img src="{{ asset('frontend/assests/images/hero-section/gold-adorn.svg') }}" alt="icon">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="image-wrapper position-relative h-100">
                            <div class="animation-wrapper position-relative" id="globeanimate">
                                <img src="{{ asset('frontend/assests/images/hero-section/astrology-hands.png') }}"
                                    alt="" class="img-fluid web-2">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <div class="brown-cards-content mt-5 mb-lg-5 mb-3">
                            <p class="mb-2">Welcome to Ravi Mundrra Numerology, where Vastu, Astrology, and
                                Numerology
                                combine to bring
                                harmony and transformation. Our mission is to make these sacred sciences
                                accessible,
                                offering personalized guidance for unlocking positive energies in your life.

                            </p>
                            <p>Clients have experienced profound shifts, from career success to harmonious
                                relationships,
                                all thanks to practical and impactful insights rooted in ancient wisdom.</p>
                        </div>


                        <button class="fill-button mb-5">Read More</button>
                    </div>


                </div>
            </div>
            <div id="numerology" class="content-section">
                <div class="row">
                    <h2 class=" heading mb-3 mt-0 text-center">
                        About<span> Numerology</span>
                    </h2>

                    <div class=" d-flex justify-content-center text-center flex-column mb-5">

                        <div class="mb-lg-0 mb-5"><img
                                src="{{ asset('frontend/assests/images/hero-section/gold-adorn.svg') }}" alt="icon">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="image-wrapper h-100">
                            <div class="animation-wrapper" id="globeanimate">
                                <img src="{{ asset('frontend/assests/images/hero-section/globe-hands.png') }}" alt=""
                                    class="img-fluid web-2">
                            </div>
                            <div class="hands-absolute d-lg-block d-md-none d-sm-block"><img
                                    src="{{ asset('frontend/assests/images/hero-section/hands-globe.png') }}" alt=""
                                    class="img-fluid web-2b"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="brown-cards-content mt-5 mb-lg-5 mb-3">
                            <p class="mb-2">Welcome to Ravi Mundrra Numerology, where Vastu, Astrology, and
                                Numerology
                                combine to bring
                                harmony and transformation. Our mission is to make these sacred sciences accessible,
                                offering personalized guidance for unlocking positive energies in your life.

                            </p>
                            <p>Clients have experienced profound shifts, from career success to harmonious
                                relationships,
                                all thanks to practical and impactful insights rooted in ancient wisdom.</p>
                        </div>

                        <button class="fill-button mb-5">Read More</button>
                    </div>


                </div>
            </div>
            <div id="vastu" class="content-section">
                <div class="row">
                    <h2 class=" heading mb-3 mt-0 text-center">
                        About<span> Vastu Shastra</span>
                    </h2>

                    <div class=" d-flex justify-content-center text-center flex-column mb-5">

                        <div><img src="{{ asset('frontend/assests/images/hero-section/gold-adorn.svg') }}" alt="icon">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="image-wrapper h-100">
                            <div class="animation-wrapper" id="globeanimate">
                                <img src="{{ asset('frontend/assests/images/hero-section/vastu-hands.png') }}" alt=""
                                    class="img-fluid web-2">
                            </div>
                            <!-- <div class="hands-absolute"><img
                                src="{{ asset('frontend/assests/images/hero-section/hands-globe.png') }}" alt=""
                                class="img-fluid web-2b"></div> -->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="brown-cards-content mt-5 mb-lg-5 mb-3">
                            <p class="mb-2">Welcome to Ravi Mundrra Numerology, where Vastu, Astrology, and
                                Numerology
                                combine to bring
                                harmony and transformation. Our mission is to make these sacred sciences accessible,
                                offering personalized guidance for unlocking positive energies in your life.

                            </p>
                            <p>Clients have experienced profound shifts, from career success to harmonious
                                relationships,
                                all thanks to practical and impactful insights rooted in ancient wisdom.</p>
                        </div>

                        <button class="fill-button mb-5">Read More</button>
                    </div>


                </div>
            </div>
            <div id="manifestation" class="content-section">
                <div class="row">
                    <h2 class=" heading mb-3 mt-0 text-center">
                        About<span> Manifestation</span>
                    </h2>

                    <div class=" d-flex justify-content-center text-center flex-column mb-5">

                        <div><img src="{{ asset('frontend/assests/images/hero-section/gold-adorn.svg') }}" alt="icon">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="image-wrapper h-100">
                            <div class="animation-wrapper" id="globeanimate">
                                <img src="{{ asset('frontend/assests/images/hero-section/globe-hands.png') }}" alt=""
                                    class="img-fluid web-2">
                            </div>
                            <div class="hands-absolute d-lg-block d-md-none d-sm-block"><img
                                    src="{{ asset('frontend/assests/images/hero-section/hands-globe.png') }}" alt=""
                                    class="img-fluid web-2b"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="brown-cards-content mt-5 mb-lg-5 mb-3">
                            <p class="mb-2">Welcome to Ravi Mundrra Numerology, where Vastu, Astrology, and
                                Numerology
                                combine to bring
                                harmony and transformation. Our mission is to make these sacred sciences accessible,
                                offering personalized guidance for unlocking positive energies in your life.

                            </p>
                            <p>Clients have experienced profound shifts, from career success to harmonious
                                relationships,
                                all thanks to practical and impactful insights rooted in ancient wisdom.</p>
                        </div>

                        <button class="fill-button mb-5">Read More</button>
                    </div>


                </div>
            </div>
            <div id="prediction" class="content-section">
                <div class="row">
                    <h2 class=" heading mb-3 mt-0 text-center">
                        About <span> Event Prediction</span>
                    </h2>

                    <div class=" d-flex justify-content-center text-center flex-column mb-5">

                        <div><img src="{{ asset('frontend/assests/images/hero-section/gold-adorn.svg') }}" alt="icon">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="image-wrapper h-100">
                            <div class="animation-wrapper" id="globeanimate">
                                <img src="{{ asset('frontend/assests/images/hero-section/globe-hands.png') }}" alt=""
                                    class="img-fluid web-2">
                            </div>
                            <div class="hands-absolute d-lg-block d-md-none d-sm-block"><img
                                    src="{{ asset('frontend/assests/images/hero-section/hands-globe.png') }}" alt=""
                                    class="img-fluid web-2b"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="brown-cards-content mt-5 mb-lg-5 mb-3">
                            <p class="mb-2">Welcome to Ravi Mundrra Numerology, where Vastu, Astrology, and
                                Numerology
                                combine to bring
                                harmony and transformation. Our mission is to make these sacred sciences accessible,
                                offering personalized guidance for unlocking positive energies in your life.

                            </p>
                            <p>Clients have experienced profound shifts, from career success to harmonious
                                relationships,
                                all thanks to practical and impactful insights rooted in ancient wisdom.</p>
                        </div>

                        <button class="fill-button mb-5">Read More</button>
                    </div>


                </div>
            </div>
            <div id="scientific" class="content-section">
                <div class="row">
                    <h2 class=" heading mb-3 mt-0 text-center">
                        About <span>Scientific Designing</span>
                    </h2>

                    <div class=" d-flex justify-content-center text-center flex-column mb-5">

                        <div><img src="{{ asset('frontend/assests/images/hero-section/gold-adorn.svg') }}" alt="icon">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="image-wrapper h-100">
                            <div class="animation-wrapper" id="globeanimate">
                                <img src="{{ asset('frontend/assests/images/hero-section/globe-hands.png') }}" alt=""
                                    class="img-fluid web-2">
                            </div>
                            <div class="hands-absolute d-lg-block d-md-none d-sm-block"><img
                                    src="{{ asset('frontend/assests/images/hero-section/hands-globe.png') }}" alt=""
                                    class="img-fluid web-2b"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="brown-cards-content mt-5 mb-lg-5 mb-3">
                            <p class="mb-2">Welcome to Ravi Mundrra Numerology, where Vastu, Astrology, and
                                Numerology
                                combine to bring
                                harmony and transformation. Our mission is to make these sacred sciences accessible,
                                offering personalized guidance for unlocking positive energies in your life.

                            </p>
                            <p>Clients have experienced profound shifts, from career success to harmonious
                                relationships,
                                all thanks to practical and impactful insights rooted in ancient wisdom.</p>
                        </div>

                        <button class="fill-button mb-5">Read More</button>
                    </div>


                </div>
            </div>
            <div id="signature" class="content-section">
                <div class="row">
                    <h2 class=" heading mb-3 mt-0 text-center">
                        About <span>Analysis of Signature</span>
                    </h2>

                    <div class=" d-flex justify-content-center text-center flex-column mb-5">

                        <div><img src="{{ asset('frontend/assests/images/hero-section/gold-adorn.svg') }}" alt="icon">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="image-wrapper h-100">
                            <div class="animation-wrapper" id="globeanimate">
                                <img src="{{ asset('frontend/assests/images/hero-section/globe-hands.png') }}" alt=""
                                    class="img-fluid web-2">
                            </div>
                            <div class="hands-absolute d-lg-block d-md-none d-sm-block"><img
                                    src="{{ asset('frontend/assests/images/hero-section/hands-globe.png') }}" alt=""
                                    class="img-fluid web-2b"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="brown-cards-content mt-5 mb-lg-5 mb-3">
                            <p class="mb-2">Welcome to Ravi Mundrra Numerology, where Vastu, Astrology, and
                                Numerology
                                combine to bring
                                harmony and transformation. Our mission is to make these sacred sciences accessible,
                                offering personalized guidance for unlocking positive energies in your life.

                            </p>
                            <p>Clients have experienced profound shifts, from career success to harmonious
                                relationships,
                                all thanks to practical and impactful insights rooted in ancient wisdom.</p>
                        </div>

                        <button class="fill-button mb-5">Read More</button>
                    </div>


                </div>
            </div>
            <div id="watch" class="content-section">
                <div class="row">
                    <h2 class=" heading mb-3 mt-0 text-center">
                        About <span>Analysis of Watch</span>
                    </h2>

                    <div class=" d-flex justify-content-center text-center flex-column mb-5">

                        <div><img src="{{ asset('frontend/assests/images/hero-section/gold-adorn.svg') }}" alt="icon">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="image-wrapper h-100">
                            <div class="animation-wrapper" id="globeanimate">
                                <img src="{{ asset('frontend/assests/images/hero-section/globe-hands.png') }}" alt=""
                                    class="img-fluid web-2">
                            </div>
                            <div class="hands-absolute d-lg-block d-md-none d-sm-block"><img
                                    src="{{ asset('frontend/assests/images/hero-section/hands-globe.png') }}" alt=""
                                    class="img-fluid web-2b"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="brown-cards-content mt-5 mb-lg-5 mb-3">
                            <p class="mb-2">Welcome to Ravi Mundrra Numerology, where Vastu, Astrology, and
                                Numerology
                                combine to bring
                                harmony and transformation. Our mission is to make these sacred sciences accessible,
                                offering personalized guidance for unlocking positive energies in your life.

                            </p>
                            <p>Clients have experienced profound shifts, from career success to harmonious
                                relationships,
                                all thanks to practical and impactful insights rooted in ancient wisdom.</p>
                        </div>

                        <button class="fill-button mb-5">Read More</button>
                    </div>


                </div>
            </div>
            <div id="remedies" class="content-section">
                <div class="row">
                    <h2 class=" heading mb-3 mt-0 text-center">
                        About <span>Remedies</span>
                    </h2>

                    <div class=" d-flex justify-content-center text-center flex-column mb-5">

                        <div><img src="{{ asset('frontend/assests/images/hero-section/gold-adorn.svg') }}" alt="icon">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="image-wrapper h-100">
                            <div class="animation-wrapper" id="globeanimate">
                                <img src="{{ asset('frontend/assests/images/hero-section/globe-hands.png') }}" alt=""
                                    class="img-fluid web-2">
                            </div>
                            <div class="hands-absolute d-lg-block d-md-none d-sm-block"><img
                                    src="{{ asset('frontend/assests/images/hero-section/hands-globe.png') }}" alt=""
                                    class="img-fluid web-2b"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="brown-cards-content mt-5 mb-lg-5 mb-3">
                            <p class="mb-2">Welcome to Ravi Mundrra Numerology, where Vastu, Astrology, and
                                Numerology
                                combine to bring
                                harmony and transformation. Our mission is to make these sacred sciences accessible,
                                offering personalized guidance for unlocking positive energies in your life.

                            </p>
                            <p>Clients have experienced profound shifts, from career success to harmonious
                                relationships,
                                all thanks to practical and impactful insights rooted in ancient wisdom.</p>
                        </div>

                        <button class="fill-button mb-5">Read More</button>
                    </div>


                </div>
            </div>
            <div id="energy" class="content-section">
                <div class="row">
                    <h2 class=" heading mb-3 mt-0 text-center">
                        About <span>Energy Circle</span>
                    </h2>

                    <div class=" d-flex justify-content-center text-center flex-column mb-5">

                        <div><img src="{{ asset('frontend/assests/images/hero-section/gold-adorn.svg') }}" alt="icon">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="image-wrapper h-100">
                            <div class="animation-wrapper" id="globeanimate">
                                <img src="{{ asset('frontend/assests/images/hero-section/globe-hands.png') }}" alt=""
                                    class="img-fluid web-2">
                            </div>
                            <div class="hands-absolute d-lg-block d-md-none d-sm-block"><img
                                    src="{{ asset('frontend/assests/images/hero-section/hands-globe.png') }}" alt=""
                                    class="img-fluid web-2b"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="brown-cards-content mt-5 mb-lg-5 mb-3">
                            <p class="mb-2">Welcome to Ravi Mundrra Numerology, where Vastu, Astrology, and
                                Numerology
                                combine to bring
                                harmony and transformation. Our mission is to make these sacred sciences accessible,
                                offering personalized guidance for unlocking positive energies in your life.

                            </p>
                            <p>Clients have experienced profound shifts, from career success to harmonious
                                relationships,
                                all thanks to practical and impactful insights rooted in ancient wisdom.</p>
                        </div>

                        <button class="fill-button mb-5">Read More</button>
                    </div>


                </div>
            </div>
        </div>
    </div>
    </div>

</section>

<section class="prediction-section py-lg-5 pb-4 pt-2 ">
    <div class="container">
        <div class="row align-items-center justify-content-center">

            <div class="col-12">
                <div class="video-player pb-3 mt-5">
                    <iframe height="400" src="https://www.youtube.com/embed/D5WbLG82-gw" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>

                </div>
            </div>

            <h2 class="secondary-heading  mt-3 mb-2">
                Prediction for Expression, and <span>Personality Numbers</span>
            </h2>
        </div>
    </div>
</section>
<section class="py-5 what-we-do-section">
    <div class="container-fluid custom-padded-container custom-container-width custom-container-max-width">
        <div class="row">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row gy-4">
                            <!-- Image Section -->
                            <div class="col-lg-4 text-center"> <img
                                    src="{{ asset('frontend/assests/images/hero-section/ravi-mundra-profile.png') }}"
                                    alt="Ravi Mundra" class="carousel-img">
                                <h4 class="mt-3 person-title">Ravi Mundra</h4>
                            </div> <!-- Text Section -->
                            <div class="col-lg-8 custom-carousel-content">
                                <h3 class="mb-2 carousel-content-title">What <span>Do We Do?</span></h3>
                                <p class="mb-3 carousel-content-descriprtion">Ravi Mundra is a seasoned expert in the fields of astrology and numerology, with over 15 years of experience. His deep knowledge spans Vedic Astrology, KP Astrology, Bhrigu Nadi, and Nandi systems. Ravi is also a highly skilled numerologist, offering specialized insights into mobile numbers, personal names, and business name numerology. Having provided more than 500+ lucky SIMs across India, he has a proven track record of enhancing fortunes through the precise application of numerology.<br>
                                    In addition to his expertise in astrology and numerology, Ravi is a scientific logo designer, creating logos that resonate with energy and align with success principles. As a visiting Vastu expert, he helps clients harmonize their living and workspaces to ensure positive energy flow and balance.
                                    What sets Ravi apart is his ability to offer instant predictions for situation-based challenges. Whether it's a business dilemma or a personal issue, he provides practical, effective remedies that are simple to implement. Drawing from Vedic wisdom, Rudraksha therapy, Ravan Samhita, energy circles, and even personalized wallpapers, Ravi crafts solutions that are tailored to each individual’s unique circumstances.
                                    With an impressive repertoire of methods and a passion for helping clients thrive, Ravi Mundra’s services are a beacon for those seeking growth, balance, and success in both personal and professional realms.</p>
                                <div class="experience-years d-flex gap-1 mb-4">
                                    <p class="years mb-0">15+</p>
                                    <div>
                                        <p class="mb-0 years-of">Years of</p>
                                        <p class="experience mt-0">Experience</p>
                                    </div>
                                </div>
                                <button class="fill-button">Read More</button>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row gy-4">
                            <!-- Image Section -->
                            <div class="col-lg-4 text-center">
                                <div class="unedited-image"> <img
                                        src="{{ asset('frontend/assests/images/hero-section/swati-mundra.jpg') }}"
                                        alt="swati Mundra" class="carousel-img"></div>
                                <h4 class="mt-3 person-title">Swati Mundra</h4>
                            </div> <!-- Text Section -->
                            <div class="col-lg-8 custom-carousel-content">
                                <h3 class="mb-2 carousel-content-title">What <span> We Do?</span></h3>
                                <p class="mb-3 carousel-content-descriprtion">Swati Mundra is a highly experienced Vastu consultant, with over 10 years of expertise in optimizing spaces for shops, homes, and offices. She has also gained valuable hands-on experience in **industrial Vastu**, where her guidance has enabled numerous businesses to experience remarkable growth and success from the ground up.

                                    In addition to her deep understanding of Vastu, Swati is a skilled numerologist, specializing in **mobile numerology**, **name numerology**, and even helping parents choose auspicious baby names. Her numerological insights and remedies have brought proven results across various aspects of life, including financial growth, improved relationships, business expansion, marriage harmony, and career advancements.
                                    
                                    Swati’s mastery in **Rudraksha and crystal therapies** adds another layer of effectiveness to her holistic approach. Her well-rounded expertise, combined with her passion for creating lasting positive changes, makes her a go-to guide for those seeking transformation in both personal and professional areas. Whether you need guidance for your home, business, or personal life, Swati Mundra offers the wisdom and tools to help you thrive.</p>
                                <div class="experience-years d-flex gap-1 mb-4">
                                    <p class="years mb-0">10+</p>
                                    <div>
                                        <p class="mb-0 years-of">Years of</p>
                                        <p class="experience mt-0">Experience</p>
                                    </div>
                                </div>
                                <button class="fill-button">Read More</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</section>

<section class="unique-power unlock-bg ">
    <div class="container-fluid custom-container-max-width">
        <div class="row ">

            <h2 class=" heading mb-2 mt-0 text-center">
                Unlock Your<span> Unique Power</span>
            </h2>

            <div class=" d-flex justify-content-center text-center flex-column">
                <p class="px-md-3 news-content-para mb-lg-3 mb-3 container px-0">
                    Discover the true depth of your personality and life path by combining Astrology and Numerology.
                    Together, they offer a powerful roadmap to help you understand your strengths, life purpose, and
                    how
                    to navigate your journey.
                </p>
                <div><img src="{{ asset('frontend/assests/images/hero-section/gold-adorn.svg') }}" alt="icon">
                </div>
            </div>


        </div>

        <div class="tab-n-container">
            <div class="container">
                <div class="tabs-n">
                    <button class="tab-link active text-center" onclick="openTab(event, 'VastuShastra')">
                        <div class="d-flex align-items-center gap-4 justify-content-center">
                            <div class="tab-heading"><img
                                    src="{{ asset('frontend/assests/images/hero-section/vastu-shastra-icon.svg') }}"
                                    alt="icon" class="d-md-block d-none"></div>Vastu Shastra
                        </div>
                    </button>
                    <button class="tab-link" onclick="openTab(event, 'AstrologyNumerology')">
                        <div class="d-flex align-items-center gap-4 justify-content-center">
                            <div class="tab-heading"><img
                                    src="{{ asset('frontend/assests/images/hero-section/astrology-num-icon.svg') }}"
                                    alt="icon" class="d-md-block d-none"></div>Astrology + Numerology
                        </div>
                    </button>
                </div>
            </div>

            <div id="VastuShastra" class="tab-content-n unlock-bg" style="display: block;">
                <div class="row gy-3">
                    <div class="col-xl-4 col-lg-4">
                        <div class="vastu-description">
                            <p class="sub-heading">Entrance – Welcoming Energy</p>
                            <p class="content">The direction and design of your main entrance can attract or repel
                                energy. An optimal entrance, ideally facing east or north, invites positive energy
                                and
                                prosperity.</p>
                        </div>
                        <div class="vastu-description">
                            <p class="sub-heading">Living Room – Social Harmony</p>
                            <p class="content">Placing the living room in the northeast or east enhances social
                                interactions and creates a space of warmth and connection, ideal for family
                                gatherings
                                and social events.</p>
                        </div>
                        <div class="vastu-description">
                            <p class="sub-heading">Kitchen – Health and Prosperity</p>
                            <p class="content">Positioning the kitchen in the southeast corner ensures a balanced
                                flow
                                of energy that promotes health, wealth, and positive cooking experiences.</p>
                        </div>
                        <div class="vastu-description">
                            <p class="sub-heading">Bedroom – Restful Sleep</p>
                            <p class="content">A bedroom in the southwest corner supports restful sleep and
                                strengthens
                                relationships. Sleeping with your head towards the south can improve overall
                                well-being.
                            </p>
                        </div>
                        <div class="vastu-description">
                            <p class="sub-heading">Office/Workplace – Productivity and Success</p>
                            <p class="content">An office situated in the northwest or southeast encourages
                                creativity
                                and productivity. A well-organized workspace enhances career growth and professional
                                success.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="d-flex align-items-center justify-content-center h-100 "><img
                                src="{{ asset('frontend/assests/images/hero-section/vastu-bg-image.png') }}" alt="icon "
                                class="img-fluid custom-width-image-vastu">
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="vastu-description">
                            <p class="sub-heading">Bathroom/Washroom – Clean Energy</p>
                            <p class="content">Bathrooms located in the northwest or southeast promote a healthy
                                environment and prevent energy stagnation. Proper placement supports cleanliness and
                                wellness.</p>
                        </div>
                        <div class="vastu-description">
                            <p class="sub-heading">Study Room – Focus and Learning</p>
                            <p class="content">Positioning a study room in the northeast encourages concentration
                                and
                                academic success. Facing east or north while studying can enhance mental clarity.
                            </p>
                        </div>
                        <div class="vastu-description">
                            <p class="sub-heading">Pooja Room/Spiritual Space – Spiritual Growth</p>
                            <p class="content">A pooja room in the northeast brings divine blessings and peace.
                                It’s
                                the
                                ideal place for spiritual practices and meditation.</p>
                        </div>
                        <div class="vastu-description">
                            <p class="sub-heading">Garden/Outdoor Area – Vitality and Prosperity</p>
                            <p class="content">A garden or outdoor space in the north or east fosters growth and
                                prosperity. It’s a place for relaxation and rejuvenation, enhancing overall
                                vitality.
                            </p>
                        </div>

                        <div class="vastu-description mb-0">
                            <p class="sub-heading">Storage and Utility Areas – Organized Energy</p>
                            <p class="content">Place storage and utility areas in the southwest to maintain order
                                and
                                prevent clutter. This promotes a balanced flow of energy and supports efficient
                                space
                                usage.</p>
                        </div>

                    </div>
                </div>
            </div>

            <div id="AstrologyNumerology" class="tab-content-n unlock-bg">
                <div class="row  astro-numero ">
                    <div class="col-lg-3 col-sm-6 col-12 p-0">
                        <div class="lifepath-cards astro-numro-bottom h-100">
                            <div class="zodiac-sign"><img
                                    src="{{ asset('frontend/assests/images/hero-section/zodiac-sign-1.svg') }}"
                                    alt="icon"></div>
                            <h3 class="zodiac-name mt-4">Aries + Life Path 1 –</h3>
                            <p class="zodiac-title mb-3">The Visionary Leader</p>
                            <p class="zodiac-content">The Visionary Leader Discover the true depth of your
                                personality
                                and life path
                                by combining Astrology and Numerology. Together, they offer a powerful roadmap to
                                help
                                you understand your strengths,
                                life purpose, and how to navigate your journey.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 p-0">
                        <div class="lifepath-cards astro-numro-bottom astro-numro-left h-100">
                            <div class="zodiac-sign"><img
                                    src="{{ asset('frontend/assests/images/hero-section/zodiac-sign-2.svg') }}"
                                    alt="icon"></div>
                            <h3 class="zodiac-name mt-4">Taurus + Life Path 4 –</h3>
                            <p class="zodiac-title mb-3">The Reliable Builder</p>
                            <p class="zodiac-content">The Reliable Builder Grounded by Taurus and the hard-working
                                nature of Life Path 4, you are practical, dependable, and capable of creating
                                lasting
                                success through discipline and focus.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 p-0">
                        <div class="lifepath-cards astro-numro-bottom astro-numro-left h-100">
                            <div class="zodiac-sign"><img
                                    src="{{ asset('frontend/assests/images/hero-section/zodiac-sign-3.svg') }}"
                                    alt="icon"></div>
                            <h3 class="zodiac-name mt-4">Gemini + Life Path 5 –</h3>
                            <p class="zodiac-title mb-3">The Adventurous Communicator</p>
                            <p class="zodiac-content">The Adventurous Communicator With Gemini's adaptability and
                                Life
                                Path 5’s love of freedom, you're always exploring new ideas and experiences. You
                                thrive
                                on change and intellectual curiosity.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 p-0">
                        <div class="lifepath-cards astro-numro-bottom astro-numro-left h-100">
                            <div class="zodiac-sign"><img
                                    src="{{ asset('frontend/assests/images/hero-section/zodiac-sign-4.svg') }}"
                                    alt="icon"></div>
                            <h3 class="zodiac-name mt-4">Cancer + Life Path 6 –</h3>
                            <p class="zodiac-title mb-3">The Caring Nurturer</p>
                            <p class="zodiac-content">The Caring Nurturer As a Cancer with Life Path 6, you are
                                deeply
                                compassionate and protective. Your focus is on family, relationships, and creating
                                harmony in your environment.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 p-0">
                        <div class="lifepath-cards astro-numro-bottom h-100">
                            <div class="zodiac-sign"><img
                                    src="{{ asset('frontend/assests/images/hero-section/zodiac-sign-5.svg') }}"
                                    alt="icon"></div>
                            <h3 class="zodiac-name mt-4">Leo + Life Path 3 –</h3>
                            <p class="zodiac-title mb-3">The Creative Leader</p>
                            <p class="zodiac-content">The Creative Leader Leo’s charisma combined with Life Path
                                3’s
                                creativity makes you a natural-born performer. Your vibrant energy inspires others,
                                and
                                you shine in leadership roles.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 p-0">
                        <div class="lifepath-cards astro-numro-bottom astro-numro-left h-100">
                            <div class="zodiac-sign"><img
                                    src="{{ asset('frontend/assests/images/hero-section/zodiac-sign-6.svg') }}"
                                    alt="icon"></div>
                            <h3 class="zodiac-name mt-4">Virgo + Life Path 7 –</h3>
                            <p class="zodiac-title mb-3">The Analytical Seeker</p>
                            <p class="zodiac-content">The Analytical Seeker Virgo’s precision combined with Life
                                Path
                                7’s introspection makes you a deep thinker, always searching for truth and
                                understanding
                                the world at a higher level.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 p-0">
                        <div class="lifepath-cards astro-numro-bottom astro-numro-left h-100">
                            <div class="zodiac-sign"><img
                                    src="{{ asset('frontend/assests/images/hero-section/zodiac-sign-7.svg') }}"
                                    alt="icon"></div>
                            <h3 class="zodiac-name mt-4">Libra + Life Path 2 –</h3>
                            <p class="zodiac-title mb-3">The Diplomatic Harmonizer</p>
                            <p class="zodiac-content">The Diplomatic Harmonizer Libra’s love for balance, paired
                                with
                                Life Path 2’s peacemaking qualities, makes you a master of relationships, always
                                striving for harmony and fairness in every situation.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 p-0">
                        <div class="lifepath-cards astro-numro-bottom astro-numro-left h-100">
                            <div class="zodiac-sign"><img
                                    src="{{ asset('frontend/assests/images/hero-section/zodiac-sign-8.svg') }}"
                                    alt="icon"></div>
                            <h3 class="zodiac-name mt-4">Scorpio + Life Path 8 – </h3>
                            <p class="zodiac-title mb-3">The Powerful Transformer</p>
                            <p class="zodiac-content">The Powerful Transformer With Scorpio’s intensity and Life
                                Path
                                8’s ambition, you are a force of transformation and success, driven to achieve
                                greatness
                                and influence on a large scale.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 p-0">
                        <div class="lifepath-cards h-100">
                            <div class="zodiac-sign"><img
                                    src="{{ asset('frontend/assests/images/hero-section/zodiac-sign-9.svg') }}"
                                    alt="icon"></div>
                            <h3 class="zodiac-name mt-4">Sagittarius + Life Path 9 –</h3>
                            <p class="zodiac-title mb-3">The Humanitarian Explorer</p>
                            <p class="zodiac-content">The Creative Leader Leo’s charisma combined with Life Path
                                3’s
                                creativity makes you a natural-born performer. Your vibrant energy inspires others,
                                and
                                you shine in leadership roles.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 p-0">
                        <div class="lifepath-cards astro-numro-left h-100">
                            <div class="zodiac-sign"><img
                                    src="{{ asset('frontend/assests/images/hero-section/zodiac-sign-10.svg') }}"
                                    alt="icon"></div>
                            <h3 class="zodiac-name mt-4">Capricorn + Life Path 8 –</h3>
                            <p class="zodiac-title mb-3">The Ambitious Achiever</p>
                            <p class="zodiac-content">The Analytical Seeker Virgo’s precision combined with Life
                                Path
                                7’s introspection makes you a deep thinker, always searching for truth and
                                understanding
                                the world at a higher level.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 p-0">
                        <div class="lifepath-cards astro-numro-left h-100">
                            <div class="zodiac-sign"><img
                                    src="{{ asset('frontend/assests/images/hero-section/zodiac-sign-11.svg') }}"
                                    alt="icon"></div>
                            <h3 class="zodiac-name mt-4">Aquarius + Life Path 7 –</h3>
                            <p class="zodiac-title mb-3">The Visionary Thinker</p>
                            <p class="zodiac-content">The Diplomatic Harmonizer Libra’s love for balance, paired
                                with
                                Life Path 2’s peacemaking qualities, makes you a master of relationships, always
                                striving for harmony and fairness in every situation.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 p-0">
                        <div class="lifepath-cards astro-numro-left h-100">
                            <div class="zodiac-sign"><img
                                    src="{{ asset('frontend/assests/images/hero-section/zodiac-sign-12.svg') }}"
                                    alt="icon"></div>
                            <h3 class="zodiac-name mt-4">Pisces + Life Path 9 –</h3>
                            <p class="zodiac-title mb-3">The Compassionate Dreamer</p>
                            <p class="zodiac-content">The Powerful Transformer With Scorpio’s intensity and Life
                                Path
                                8’s ambition, you are a force of transformation and success, driven to achieve
                                greatness
                                and influence on a large scale.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="combining-astrology primary-bg combining-astrology-bg ">
    <div class="container-fluid custom-padded-container custom-container-width custom-container-max-width">
        <div class="row justify-content-between align-items-start  gx-2 mb-4">
            <div class="col-lg-6">
                <h2 class="mb-2">Combining Astrology and <span>Numerology</span> for <span>Everyday
                        Solutions</span>
                </h2>
            </div>
            <div class="col-lg-6">
                <p>Are you facing daily challenges that feel overwhelming?? Explore how combining Astrology and
                    Numerology can offer unique insights and practical remedies for your everyday issues. This
                    powerful
                    fusion helps you understand your personal and professional hurdles, offering customized
                    strategies
                    to improve your daily experiences. Common Everyday Challenges and Their Solutions</p>
            </div>
        </div>
        <div class="row gx-2 align-items-center">
            <div class="col-lg-6">
                <div>
                    <img src="{{ asset('frontend/assests/images/hero-section/work-life-balance.png') }}" alt=""
                        class="img-fluid">
                </div>

            </div>
            <div class="col-lg-6">
                <div>
                    <div id="dynamic-content">
                        <h3 id="dynamic-title">Work-Life Balance Struggles</h3>
                        <p id="dynamic-issue">
                            <strong>Issue :</strong> Balancing career demands with personal life can be tough. For
                            instance, a
                            driven Capricorn (Astrology) with a Life Path 8 (Numerology) may find it challenging to
                            switch off
                            from work, leading to burnout.
                        </p>
                        <p id="dynamic-solution">
                            <strong>Solution :</strong> Use your Capricorn's ambition to set clear boundaries and
                            use
                            your life
                            path 8's organizational skills to create a well-structured routine. Integrate relaxation
                            practices
                            like meditation and time management strategies aligned with your numerology to achieve a
                            healthier
                            balance.
                        </p>
                    </div>
                    <div class="arrows">
                        <button class="arrow-combining-astro-left" onclick="changeContent(-1)"> <img
                                src="{{ asset('frontend/assests/images/hero-section/right-arrow.svg') }}"
                                alt=""></button> <!-- Left arrow -->
                        <button class="arrow-combining-astro-right" onclick="changeContent(1)"> <img
                                src="{{ asset('frontend/assests/images/hero-section/right-arrow.svg') }}"
                                alt=""></button> <!-- Right arrow -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="latest-news prediction-section">
    <div class="container-fluid custom-padded-container custom-container-width custom-container-max-width">
        <div class="row">
            <h2 class="nested-span mb-2 mt-0">
                Latest <span>News</span>
            </h2>
            <div class=" d-flex justify-content-center text-center">
                <p class=" news-content-para custom-width">
                    Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
                    nisi
                    elit
                    consequat hello Aenean world.
                </p>
            </div>
        </div>
        <div class="container-fluid  text-center my-3">
            <div class="row mx-auto my-auto justify-content-center">
                <div id="recipeCarousel" class="carousel proin-wrap slide" data-bs-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item proin active">
                            <div class="col-lg-4 p-0">
                                <div class="news-cards">
                                    <div class="thumbnail thumbnail-1"></div>
                                    <p class="news-title mt-3">Proin gravida nibh vel velit auctor aliquet.</p>
                                    <p class="news-content">Lorem quis bibendum auctor, nisi elit consequat ipsum,
                                        nec
                                        sagittis sem nibh id elit.</p>
                                    <a href="#" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item proin">
                            <div class="col-lg-4 p-0">
                                <div class="news-cards">
                                    <div class="thumbnail thumbnail-3"></div>
                                    <p class="news-title mt-3">Proin gravida nibh vel velit auctor aliquet.</p>
                                    <p class="news-content">Lorem quis bibendum auctor, nisi elit consequat ipsum,
                                        nec
                                        sagittis sem nibh id elit.</p>
                                    <a href="#" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item proin">
                            <div class="col-lg-4 p-0">
                                <div class="news-cards">
                                    <div class="thumbnail thumbnail-2"></div>
                                    <p class="news-title mt-3">Proin gravida nibh vel velit auctor aliquet.</p>
                                    <p class="news-content">Lorem quis bibendum auctor, nisi elit consequat ipsum,
                                        nec
                                        sagittis sem nibh id elit.</p>
                                    <a href="#" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item proin">
                            <div class="col-lg-4 p-0">
                                <div class="news-cards">
                                    <div class="thumbnail thumbnail-1"></div>
                                    <p class="news-title mt-3">Proin gravida nibh vel velit auctor aliquet.</p>
                                    <p class="news-content">Lorem quis bibendum auctor, nisi elit consequat ipsum,
                                        nec
                                        sagittis sem nibh id elit.</p>
                                    <a href="#" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item proin">
                            <div class="col-lg-4 p-0">
                                <div class="news-cards">
                                    <div class="thumbnail thumbnail-3"></div>
                                    <p class="news-title mt-3">Proin gravida nibh vel velit auctor aliquet.</p>
                                    <p class="news-content">Lorem quis bibendum auctor, nisi elit consequat ipsum,
                                        nec
                                        sagittis sem nibh id elit.</p>
                                    <a href="#" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item proin">
                            <div class="col-lg-4 p-0">
                                <div class="news-cards">
                                    <div class="thumbnail thumbnail-2"></div>
                                    <p class="news-title mt-3">Proin gravida nibh vel velit auctor aliquet.</p>
                                    <p class="news-content">Lorem quis bibendum auctor, nisi elit consequat ipsum,
                                        nec
                                        sagittis sem nibh id elit.</p>
                                    <a href="#" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <a class="carousel-control-prev bg-transparent w-aut d-none" href="#recipeCarousel" role="button"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon d-none" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next bg-transparent w-aut d-none" href="#recipeCarousel" role="button"
            data-bs-slide="next">
            <span class="carousel-control-next-icon  d-none" aria-hidden="true"></span>
        </a>
    </div>

    </div>
</section>
<section class="pre-footer">
    <div class="noh-wrapper">
        <div class="need-our-help-cta max-width-cta">
            <div>
                <h2>Need Our Help</h2>
                <p>Need help with designing your brand new website or you have any idea and thinking of getting it’s
                    branding done then get a FREE quote today..</p>
            </div>
            <div>
                <button class="fill-button">CONSULTATION
            </div>
        </div>
    </div>

    <div class="container-fluid custom-container-max-width">
        <div class="row ">
            <h2 class="nested-span mb-2">
                What <span>clients</span> are saying
            </h2>

            <div class=" d-flex justify-content-center text-center">
                <p class="custom-width paragraph custom-padding-rem">
                    Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
                    nisi
                    elit
                    consequat hello Aenean world.
                </p>
            </div>
        </div>

        <div class="container-fluid text-center my-3 p-0">
            <div class="row mx-auto my-auto justify-content-center p-0">
                <div id="recipeCarousel" class="carousel proin-wrap slide p-0" data-bs-ride="carousel">
                    <div class="carousel-inner custom-carousel-padding" role="listbox">
                        <div class="carousel-item proin active">
                            <div class="col-lg-4 ">
                                <div class="client-card h-100">
                                    <div class="client-profile"><img
                                            src="{{ asset('frontend/assests/images/hero-section/client-1.png') }}"
                                            alt="" class="img-fluid"></div>
                                    <div>
                                        <div class="star-rating">
                                            <img src="{{ asset('frontend/assests/images/hero-section/star-rating.svg') }}"
                                                alt="">
                                            <img src="{{ asset('frontend/assests/images/hero-section/star-rating.svg') }}"
                                                alt="">
                                            <img src="{{ asset('frontend/assests/images/hero-section/star-rating.svg') }}"
                                                alt="">
                                            <img src="{{ asset('frontend/assests/images/hero-section/star-rating.svg') }}"
                                                alt="">
                                            <img src="{{ asset('frontend/assests/images/hero-section/star-rating.svg') }}"
                                                alt="">
                                        </div>
                                        <p class="paragraph">Lorem quis bibendum auctor, nisi elit consequat ipsum,
                                            nec
                                            sagittis sem
                                            nibh id elit. Duis
                                            sed odio sit amet.</p>
                                        <p class="client-name">Kyle Roberts DVM</p>
                                        <p class="client-title">Customer Web Consultant</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item proin">
                            <div class="col-lg-4">
                                <div class="client-card h-100">
                                    <div class="client-profile"><img
                                            src="{{ asset('frontend/assests/images/hero-section/client-2.png') }}"
                                            alt="" class="img-fluid"></div>
                                    <div>
                                        <div class="star-rating">
                                            <img src="{{ asset('frontend/assests/images/hero-section/star-rating.svg') }}"
                                                alt="">
                                            <img src="{{ asset('frontend/assests/images/hero-section/star-rating.svg') }}"
                                                alt="">
                                            <img src="{{ asset('frontend/assests/images/hero-section/star-rating.svg') }}"
                                                alt="">
                                            <img src="{{ asset('frontend/assests/images/hero-section/star-rating.svg') }}"
                                                alt="">
                                            <img src="{{ asset('frontend/assests/images/hero-section/star-rating.svg') }}"
                                                alt="">
                                        </div>
                                        <p class="paragraph">Lorem quis bibendum auctor, nisi elit consequat ipsum,
                                            nec
                                            sagittis sem
                                            nibh id elit. Duis
                                            sed odio sit amet.</p>
                                        <p class="client-name">Sophia Anderson</p>
                                        <p class="client-title">Internal Implementation Officer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item proin">
                            <div class="col-lg-4">
                                <div class="client-card h-100">
                                    <div class="client-profile"><img
                                            src="{{ asset('frontend/assests/images/hero-section/client-3.png') }}"
                                            alt="" class="img-fluid"></div>
                                    <div>
                                        <div class="star-rating">
                                            <img src="{{ asset('frontend/assests/images/hero-section/star-rating.svg') }}"
                                                alt="">
                                            <img src="{{ asset('frontend/assests/images/hero-section/star-rating.svg') }}"
                                                alt="">
                                            <img src="{{ asset('frontend/assests/images/hero-section/star-rating.svg') }}"
                                                alt="">
                                            <img src="{{ asset('frontend/assests/images/hero-section/star-rating.svg') }}"
                                                alt="">
                                            <img src="{{ asset('frontend/assests/images/hero-section/star-rating.svg') }}"
                                                alt="">
                                        </div>
                                        <p class="paragraph">If you want real marketing that works and effective
                                            implementation -
                                            mobile
                                            app's got you covered.</p>
                                        <p class="client-name">Stephen Brekke</p>
                                        <p class="client-title">Legacy Integration Producer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item proin">
                            <div class="col-lg-4 ">
                                <div class="client-card h-100">
                                    <div class="client-profile"><img
                                            src="{{ asset('frontend/assests/images/hero-section/client-2.png') }}"
                                            alt="" class="img-fluid"></div>
                                    <div>
                                        <div class="star-rating">
                                            <img src="{{ asset('frontend/assests/images/hero-section/star-rating.svg') }}"
                                                alt="">
                                            <img src="{{ asset('frontend/assests/images/hero-section/star-rating.svg') }}"
                                                alt="">
                                            <img src="{{ asset('frontend/assests/images/hero-section/star-rating.svg') }}"
                                                alt="">
                                            <img src="{{ asset('frontend/assests/images/hero-section/star-rating.svg') }}"
                                                alt="">
                                            <img src="{{ asset('frontend/assests/images/hero-section/star-rating.svg') }}"
                                                alt="">
                                        </div>
                                        <p class="paragraph">Lorem quis bibendum auctor, nisi elit consequat ipsum,
                                            nec
                                            sagittis sem
                                            nibh id elit. Duis
                                            sed odio sit amet.</p>
                                        <p class="client-name">Sophia Anderson</p>
                                        <p class="client-title">Internal Implementation Officer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item proin">
                            <div class="col-lg-4 ">
                                <div class="client-card h-100">
                                    <div class="client-profile"><img
                                            src="{{ asset('frontend/assests/images/hero-section/client-3.png') }}"
                                            alt="" class="img-fluid"></div>
                                    <div>
                                        <div class="star-rating">
                                            <img src="{{ asset('frontend/assests/images/hero-section/star-rating.svg') }}"
                                                alt="">
                                            <img src="{{ asset('frontend/assests/images/hero-section/star-rating.svg') }}"
                                                alt="">
                                            <img src="{{ asset('frontend/assests/images/hero-section/star-rating.svg') }}"
                                                alt="">
                                            <img src="{{ asset('frontend/assests/images/hero-section/star-rating.svg') }}"
                                                alt="">
                                            <img src="{{ asset('frontend/assests/images/hero-section/star-rating.svg') }}"
                                                alt="">
                                        </div>
                                        <p class="paragraph">If you want real marketing that works and effective
                                            implementation -
                                            mobile
                                            app's got you covered.</p>
                                        <p class="client-name">Stephen Brekke</p>
                                        <p class="client-title">Legacy Integration Producer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item proin">
                            <div class="col-lg-4 ">
                                <div class="client-card h-100">
                                    <div class="client-profile"><img
                                            src="{{ asset('frontend/assests/images/hero-section/client-1.png') }}"
                                            alt="" class="img-fluid"></div>
                                    <div>
                                        <div class="star-rating">
                                            <img src="{{ asset('frontend/assests/images/hero-section/star-rating.svg') }}"
                                                alt="">
                                            <img src="{{ asset('frontend/assests/images/hero-section/star-rating.svg') }}"
                                                alt="">
                                            <img src="{{ asset('frontend/assests/images/hero-section/star-rating.svg') }}"
                                                alt="">
                                            <img src="{{ asset('frontend/assests/images/hero-section/star-rating.svg') }}"
                                                alt="">
                                            <img src="{{ asset('frontend/assests/images/hero-section/star-rating.svg') }}"
                                                alt="">
                                        </div>
                                        <p class="paragraph">Lorem quis bibendum auctor, nisi elit consequat
                                            ipsum,
                                            nec
                                            sagittis sem
                                            nibh id elit. Duis
                                            sed odio sit amet.</p>
                                        <p class="client-name">Kyle Roberts DVM</p>
                                        <p class="client-title">Customer Web Consultant</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item proin">
                            <div class="col-lg-4">
                                <div class="client-card h-100">
                                    <div class="client-profile"><img
                                            src="{{ asset('frontend/assests/images/hero-section/client-2.png') }}"
                                            alt="" class="img-fluid"></div>
                                    <div>
                                        <div class="star-rating">
                                            <img src="{{ asset('frontend/assests/images/hero-section/star-rating.svg') }}"
                                                alt="">
                                            <img src="{{ asset('frontend/assests/images/hero-section/star-rating.svg') }}"
                                                alt="">
                                            <img src="{{ asset('frontend/assests/images/hero-section/star-rating.svg') }}"
                                                alt="">
                                            <img src="{{ asset('frontend/assests/images/hero-section/star-rating.svg') }}"
                                                alt="">
                                            <img src="{{ asset('frontend/assests/images/hero-section/star-rating.svg') }}"
                                                alt="">
                                        </div>
                                        <p class="paragraph">Lorem quis bibendum auctor, nisi elit consequat ipsum,
                                            nec
                                            sagittis sem
                                            nibh id elit. Duis
                                            sed odio sit amet.</p>
                                        <p class="client-name">Sophia Anderson</p>
                                        <p class="client-title">Internal Implementation Officer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item proin">
                            <div class="col-lg-4 ">
                                <div class="client-card h-100">
                                    <div class="client-profile"><img
                                            src="{{ asset('frontend/assests/images/hero-section/client-2.png') }}"
                                            alt="" class="img-fluid"></div>
                                    <div>
                                        <div class="star-rating">
                                            <img src="{{ asset('frontend/assests/images/hero-section/star-rating.svg') }}"
                                                alt="">
                                            <img src="{{ asset('frontend/assests/images/hero-section/star-rating.svg') }}"
                                                alt="">
                                            <img src="{{ asset('frontend/assests/images/hero-section/star-rating.svg') }}"
                                                alt="">
                                            <img src="{{ asset('frontend/assests/images/hero-section/star-rating.svg') }}"
                                                alt="">
                                            <img src="{{ asset('frontend/assests/images/hero-section/star-rating.svg') }}"
                                                alt="">
                                        </div>
                                        <p class="paragraph">Lorem quis bibendum auctor, nisi elit consequat ipsum,
                                            nec
                                            sagittis sem
                                            nibh id elit. Duis
                                            sed odio sit amet.</p>
                                        <p class="client-name">Sophia Anderson</p>
                                        <p class="client-title">Internal Implementation Officer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item proin">
                            <div class="col-lg-4 ">
                                <div class="client-card h-100">
                                    <div class="client-profile"><img
                                            src="{{ asset('frontend/assests/images/hero-section/client-2.png') }}"
                                            alt="" class="img-fluid"></div>
                                    <div>
                                        <div class="star-rating">
                                            <img src="{{ asset('frontend/assests/images/hero-section/star-rating.svg') }}"
                                                alt="">
                                            <img src="{{ asset('frontend/assests/images/hero-section/star-rating.svg') }}"
                                                alt="">
                                            <img src="{{ asset('frontend/assests/images/hero-section/star-rating.svg') }}"
                                                alt="">
                                            <img src="{{ asset('frontend/assests/images/hero-section/star-rating.svg') }}"
                                                alt="">
                                            <img src="{{ asset('frontend/assests/images/hero-section/star-rating.svg') }}"
                                                alt="">
                                        </div>
                                        <p class="paragraph">Lorem quis bibendum auctor, nisi elit consequat ipsum,
                                            nec
                                            sagittis sem
                                            nibh id elit. Duis
                                            sed odio sit amet.</p>
                                        <p class="client-name">Sophia Anderson</p>
                                        <p class="client-title">Internal Implementation Officer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- hs footer wrapper Start -->

<div class="footer-main-wrapper ">
    <div class="footer-ellipse">
        <img src="{{ asset('frontend/assests/images/hero-section/footer-ellipse.png') }}" alt="" class="img-fluid">
    </div>



    <div class="container-fluid custom-padded-container custom-container-width custom-container-max-width">
        <div class="row justify-content-between">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="footer-subsection text-start">
                    <a href="index.html"><img
                            src="{{ asset('frontend/assests/images/hero-section/ravi-mundra-logo.svg') }}"
                            alt="footer_logo" class="img-fluid" /></a>
                    <p class="me-lg-5 me-md-3 me-0 footer-text">Donec id elit non mi porta gravida at eget metus.
                        Donec id elit non Vestibulum id ligula porta felis euism od semper. Nulla vitae elit libero
                    </p>
                    <!-- <h4><a href="#">Read More <i class="fa fa-long-arrow-right"></i></a></h4> -->
                    <ul class="social-links ">
                        <li><a href="https://www.facebook.com/RaviMundrraNumerology?mibextid=ZbWKwL"><i
                                    class="fa fa-facebook"></i></a></li>
                        <li><a
                                href="https://www.linkedin.com/in/ravimundra?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i
                                    class="fa fa-linkedin"></i></a></li>
                        <li><a href="https://youtube.com/@ravimundrranumerology?si=UOYgOKu1uI6pejlU"><i
                                    class="fa fa-youtube-play"></i></a></li>
                        <li><a href="https://www.instagram.com/ravimundrranumerology?igsh=MWF0cmN2MnhpamJ5Zw=="><i
                                    class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-6 col-lg-8 col-md-8 col-sm-12 col-12">
                <div class="row justify-content-between">
                    <div class="col-lg-7 col-md-8 col-sm-12 ">
                        <div class=" text-start">
                            <h2 class="footer-heading mb-1 mt-lg-0 mt-5">Services</h2>
                            <!-- <div class="services-border-bottom"> <img
                                          src="{{ asset('frontend/assests/images/hero-section/service-border.svg') }}"
                                          alt="footer_logo" /></div> -->
                            <div class="services-bullet-list">
                                <ul>
                                    <li><a href="">Home</a></li>
                                    <li><a href="">About us</a></li>
                                    <li><a href="">Services</a></li>
                                    <li><a href="">Gallery</a></li>
                                    <li><a href="">Contact Us</a></li>
                                    <li><a href="">Privacy Policy</a></li>
                                </ul>
                                <ul>
                                    <li><a href="">Husband wife Dispute</a></li>
                                    <li><a href="">Powerful Mantras for Love Spell</a></li>
                                    <li><a href="">Business Back</a></li>
                                    <li><a href="">Extra-Marital Affairs</a></li>
                                    <li><a href="">Divorce Problem Soluions</a></li>
                                </ul>

                            </div>

                        </div>
                    </div>
                    <div class="col-lg-5 col-md-4 col-sm-12 ">
                        <div
                            class="whatsapp-qr-outer-wrapper justify-content-lg-end justify-content-start mt-lg-0 mt-5 ">
                            <div class="hs_footer_qr_wrapper text-end">
                                <div class="qr-wrapper p-3 text-center mx-auto rounded">
                                    <img src="{{ asset('frontend/assests/images/content/whatsaap-qr-img.png') }}"
                                        alt="footer_logo" class="img-responsive" class="img-fluid rounded-pills" />
                                    <p class="text-dark mt-3 fw-bold mb-0">
                                        Connect on WhatsApp
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>




<!-- hs testi slider wrapper End -->
@endsection('content')