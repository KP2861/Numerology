@extends('Website.layouts.app')
@section('content')

<section class="intro-hero-section pb-5 moon-bg-absolute">
    <div class="container">
        <div class="row">
            <div class="reach-us-section pt-3 pb-xxl-5 mb-5">
                <div>
                    <div class="contact-us-sub-section">
                        <div class="reach-us subtitle">
                            <div class="d-flex align-items-center justify-content-center h-100"><img
                                    src="{{ asset('frontend/assests/images/hero-section/reach-us-icon.svg') }}"
                                    alt="icon"></div>
                            <div class="subtitle-inner ms-2">
                                <p class="subtitle-heading mb-0">Reach Us</p>
                                <p class="subtitle-para">601, Ram Nagar Dewas</p>
                            </div>
                        </div>
                        <div class="reach-us subtitle ms-4">
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
                <div class="d-flex gap-4">
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
        <div class="row mb-5 align-items-start">
            <div class="col-xl-6 col-lg-7">
                <h1 class="h1-main-heading mb-xxl-4 mb-3 ">
                    Unlock the Secrets to
                    a <span>Harmonious</span> and <span>Prosperous Life</span>
                </h1>
                <p class="gen-para mb-xxl-5 mb-4">
                    At Ravi Mundrra Numerology, we transform lives by merging the ancient wisdom of Vastu, Astrology,
                    and Numerology with the challenges of modern living. Whether you're seeking balance in your home,
                    clarity in your career, or alignment with your personal destiny, we offer customized solutions to
                    help you live your best life.
                </p>
                <button class="hero-section-button fill-button">
                    <p class="mb-0">Read More</p>
                </button>
            </div>
            <div class="col-xl-6 col-lg-5">
                <div class=" h-100 mt-xxl-5 mt-2">
                    <div class="pattern-outer h-100" id="heroanimate">
                        <img src="{{ asset('frontend/assests/images/hero-section/random-pattern.png') }}" alt=""
                            class="img-fluid web">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="main-section-extended">
    <div class="card-row ">
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators d-none">
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row align-items-center justify-content-center tabs gap-2">
                        <div class="col-auto  p-0">
                            <div class="tab" onclick="showContent('astrology')">
                                <div class="card-row-card "><img
                                        src="{{ asset('frontend/assests/images/hero-section/card-row-1.svg') }}" alt="">
                                </div>

                            </div>
                        </div>
                        <div class="col-auto p-0">
                            <div class="tab" onclick="showContent('numerology')">
                                <div class="card-row-card "><img
                                        src="{{ asset('frontend/assests/images/hero-section/card-row-2.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-auto p-0">
                            <div class="tab" onclick="showContent('vastu')">
                                <div class="card-row-card "><img
                                        src="{{ asset('frontend/assests/images/hero-section/card-row-3.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-auto p-0">
                            <div class="tab" onclick="showContent('manifestation')">
                                <div class="card-row-card "><img
                                        src="{{ asset('frontend/assests/images/hero-section/card-row-4.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-auto p-0">
                            <div class="tab" onclick="showContent('prediction')">
                                <div class="card-row-card"><img
                                        src="{{ asset('frontend/assests/images/hero-section/card-row-5.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row align-items-center justify-content-center tabs gap-2">
                        <div class="col-auto p-0">
                            <div class="tab" onclick="showContent('scientific')">
                                <div class="card-row-card "><img
                                        src="{{ asset('frontend/assests/images/hero-section/card-row-6.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-auto p-0">
                            <div class="tab" onclick="showContent('signature')">
                                <div class="card-row-card "><img
                                        src="{{ asset('frontend/assests/images/hero-section/card-row-7.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-auto  p-0">
                            <div class="tab" onclick="showContent('watch')">
                                <div class="card-row-card "><img
                                        src="{{ asset('frontend/assests/images/hero-section/card-row-8.svg') }}" alt="">
                                </div>

                            </div>
                        </div>

                        <div class="col-auto p-0">
                            <div class="tab" onclick="showContent('remedies')">
                                <div class="card-row-card "><img
                                        src="{{ asset('frontend/assests/images/hero-section/card-row-9.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-auto p-0">
                            <div class="tab" onclick="showContent('energy')">
                                <div class="card-row-card"><img
                                        src="{{ asset('frontend/assests/images/hero-section/card-row-10.svg') }}"
                                        alt="">
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
                <span class="visually-hidden ">Next</span>
            </button>
        </div>







    </div>


    <div class="content-brown-cards">
        <div id="astrology" class="content-section">
            <div class="row pb-5">
                <h2 class=" heading mb-3 mt-0 text-center">
                    About<span> Astrology</span>
                </h2>

                <div class=" d-flex justify-content-center text-center flex-column mb-5">

                    <div><img src="{{ asset('frontend/assests/images/hero-section/gold-adorn.svg') }}" alt="icon"></div>
                </div>

                <div class="col-6">
                    <div class="image-wrapper h-100">
                        <div class="animation-wrapper" id="globeanimate">
                            <img src="{{ asset('frontend/assests/images/hero-section/.png') }}" alt=""
                                class="img-fluid web-2">
                        </div>
                        <div class="hands-absolute"><img
                                src="{{ asset('frontend/assests/images/hero-section/hands-globe.png') }}" alt=""
                                class="img-fluid web-2b"></div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="pb-5">
                        <div class="brown-cards-content mt-5 mb-5">
                            <p class="mb-2">Welcome to Ravi Mundrra Numerology, where Vastu, Astrology, and Numerology
                                combine to bring
                                harmony and transformation. Our mission is to make these sacred sciences accessible,
                                offering personalized guidance for unlocking positive energies in your life.

                            </p>
                            <p>Clients have experienced profound shifts, from career success to harmonious
                                relationships,
                                all thanks to practical and impactful insights rooted in ancient wisdom.</p>
                        </div>
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

                    <div><img src="{{ asset('frontend/assests/images/hero-section/gold-adorn.svg') }}" alt="icon"></div>
                </div>

                <div class="col-6">
                    <div class="image-wrapper h-100">
                        <div class="animation-wrapper" id="globeanimate">
                            <img src="{{ asset('frontend/assests/images/hero-section/globe-hands.png') }}" alt=""
                                class="img-fluid web-2">
                        </div>
                        <div class="hands-absolute"><img
                                src="{{ asset('frontend/assests/images/hero-section/hands-globe.png') }}" alt=""
                                class="img-fluid web-2b"></div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="brown-cards-content mt-5 mb-5">
                        <p class="mb-2">Welcome to Ravi Mundrra Numerology, where Vastu, Astrology, and Numerology
                            combine to bring
                            harmony and transformation. Our mission is to make these sacred sciences accessible,
                            offering personalized guidance for unlocking positive energies in your life.

                        </p>
                        <p>Clients have experienced profound shifts, from career success to harmonious relationships,
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

                    <div><img src="{{ asset('frontend/assests/images/hero-section/gold-adorn.svg') }}" alt="icon"></div>
                </div>

                <div class="col-6">
                    <div class="image-wrapper h-100">
                        <div class="animation-wrapper" id="globeanimate">
                            <img src="{{ asset('frontend/assests/images/hero-section/.png') }}" alt=""
                                class="img-fluid web-2">
                        </div>
                        <div class="hands-absolute"><img
                                src="{{ asset('frontend/assests/images/hero-section/hands-globe.png') }}" alt=""
                                class="img-fluid web-2b"></div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="brown-cards-content mt-5 mb-5">
                        <p class="mb-2">Welcome to Ravi Mundrra Numerology, where Vastu, Astrology, and Numerology
                            combine to bring
                            harmony and transformation. Our mission is to make these sacred sciences accessible,
                            offering personalized guidance for unlocking positive energies in your life.

                        </p>
                        <p>Clients have experienced profound shifts, from career success to harmonious relationships,
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

                    <div><img src="{{ asset('frontend/assests/images/hero-section/gold-adorn.svg') }}" alt="icon"></div>
                </div>

                <div class="col-6">
                    <div class="image-wrapper h-100">
                        <div class="animation-wrapper" id="globeanimate">
                            <img src="{{ asset('frontend/assests/images/hero-section/globe-hands.png') }}" alt=""
                                class="img-fluid web-2">
                        </div>
                        <div class="hands-absolute"><img
                                src="{{ asset('frontend/assests/images/hero-section/hands-globe.png') }}" alt=""
                                class="img-fluid web-2b"></div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="brown-cards-content mt-5 mb-5">
                        <p class="mb-2">Welcome to Ravi Mundrra Numerology, where Vastu, Astrology, and Numerology
                            combine to bring
                            harmony and transformation. Our mission is to make these sacred sciences accessible,
                            offering personalized guidance for unlocking positive energies in your life.

                        </p>
                        <p>Clients have experienced profound shifts, from career success to harmonious relationships,
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

                    <div><img src="{{ asset('frontend/assests/images/hero-section/gold-adorn.svg') }}" alt="icon"></div>
                </div>

                <div class="col-6">
                    <div class="image-wrapper h-100">
                        <div class="animation-wrapper" id="globeanimate">
                            <img src="{{ asset('frontend/assests/images/hero-section/globe-hands.png') }}" alt=""
                                class="img-fluid web-2">
                        </div>
                        <div class="hands-absolute"><img
                                src="{{ asset('frontend/assests/images/hero-section/hands-globe.png') }}" alt=""
                                class="img-fluid web-2b"></div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="brown-cards-content mt-5 mb-5">
                        <p class="mb-2">Welcome to Ravi Mundrra Numerology, where Vastu, Astrology, and Numerology
                            combine to bring
                            harmony and transformation. Our mission is to make these sacred sciences accessible,
                            offering personalized guidance for unlocking positive energies in your life.

                        </p>
                        <p>Clients have experienced profound shifts, from career success to harmonious relationships,
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

                    <div><img src="{{ asset('frontend/assests/images/hero-section/gold-adorn.svg') }}" alt="icon"></div>
                </div>

                <div class="col-6">
                    <div class="image-wrapper h-100">
                        <div class="animation-wrapper" id="globeanimate">
                            <img src="{{ asset('frontend/assests/images/hero-section/globe-hands.png') }}" alt=""
                                class="img-fluid web-2">
                        </div>
                        <div class="hands-absolute"><img
                                src="{{ asset('frontend/assests/images/hero-section/hands-globe.png') }}" alt=""
                                class="img-fluid web-2b"></div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="brown-cards-content mt-5 mb-5">
                        <p class="mb-2">Welcome to Ravi Mundrra Numerology, where Vastu, Astrology, and Numerology
                            combine to bring
                            harmony and transformation. Our mission is to make these sacred sciences accessible,
                            offering personalized guidance for unlocking positive energies in your life.

                        </p>
                        <p>Clients have experienced profound shifts, from career success to harmonious relationships,
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

                    <div><img src="{{ asset('frontend/assests/images/hero-section/gold-adorn.svg') }}" alt="icon"></div>
                </div>

                <div class="col-6">
                    <div class="image-wrapper h-100">
                        <div class="animation-wrapper" id="globeanimate">
                            <img src="{{ asset('frontend/assests/images/hero-section/globe-hands.png') }}" alt=""
                                class="img-fluid web-2">
                        </div>
                        <div class="hands-absolute"><img
                                src="{{ asset('frontend/assests/images/hero-section/hands-globe.png') }}" alt=""
                                class="img-fluid web-2b"></div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="brown-cards-content mt-5 mb-5">
                        <p class="mb-2">Welcome to Ravi Mundrra Numerology, where Vastu, Astrology, and Numerology
                            combine to bring
                            harmony and transformation. Our mission is to make these sacred sciences accessible,
                            offering personalized guidance for unlocking positive energies in your life.

                        </p>
                        <p>Clients have experienced profound shifts, from career success to harmonious relationships,
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

                    <div><img src="{{ asset('frontend/assests/images/hero-section/gold-adorn.svg') }}" alt="icon"></div>
                </div>

                <div class="col-6">
                    <div class="image-wrapper h-100">
                        <div class="animation-wrapper" id="globeanimate">
                            <img src="{{ asset('frontend/assests/images/hero-section/globe-hands.png') }}" alt=""
                                class="img-fluid web-2">
                        </div>
                        <div class="hands-absolute"><img
                                src="{{ asset('frontend/assests/images/hero-section/hands-globe.png') }}" alt=""
                                class="img-fluid web-2b"></div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="brown-cards-content mt-5 mb-5">
                        <p class="mb-2">Welcome to Ravi Mundrra Numerology, where Vastu, Astrology, and Numerology
                            combine to bring
                            harmony and transformation. Our mission is to make these sacred sciences accessible,
                            offering personalized guidance for unlocking positive energies in your life.

                        </p>
                        <p>Clients have experienced profound shifts, from career success to harmonious relationships,
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

                    <div><img src="{{ asset('frontend/assests/images/hero-section/gold-adorn.svg') }}" alt="icon"></div>
                </div>

                <div class="col-6">
                    <div class="image-wrapper h-100">
                        <div class="animation-wrapper" id="globeanimate">
                            <img src="{{ asset('frontend/assests/images/hero-section/globe-hands.png') }}" alt=""
                                class="img-fluid web-2">
                        </div>
                        <div class="hands-absolute"><img
                                src="{{ asset('frontend/assests/images/hero-section/hands-globe.png') }}" alt=""
                                class="img-fluid web-2b"></div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="brown-cards-content mt-5 mb-5">
                        <p class="mb-2">Welcome to Ravi Mundrra Numerology, where Vastu, Astrology, and Numerology
                            combine to bring
                            harmony and transformation. Our mission is to make these sacred sciences accessible,
                            offering personalized guidance for unlocking positive energies in your life.

                        </p>
                        <p>Clients have experienced profound shifts, from career success to harmonious relationships,
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

                    <div><img src="{{ asset('frontend/assests/images/hero-section/gold-adorn.svg') }}" alt="icon"></div>
                </div>

                <div class="col-6">
                    <div class="image-wrapper h-100">
                        <div class="animation-wrapper" id="globeanimate">
                            <img src="{{ asset('frontend/assests/images/hero-section/globe-hands.png') }}" alt=""
                                class="img-fluid web-2">
                        </div>
                        <div class="hands-absolute"><img
                                src="{{ asset('frontend/assests/images/hero-section/hands-globe.png') }}" alt=""
                                class="img-fluid web-2b"></div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="brown-cards-content mt-5 mb-5">
                        <p class="mb-2">Welcome to Ravi Mundrra Numerology, where Vastu, Astrology, and Numerology
                            combine to bring
                            harmony and transformation. Our mission is to make these sacred sciences accessible,
                            offering personalized guidance for unlocking positive energies in your life.

                        </p>
                        <p>Clients have experienced profound shifts, from career success to harmonious relationships,
                            all thanks to practical and impactful insights rooted in ancient wisdom.</p>
                    </div>

                    <button class="fill-button mb-5">Read More</button>
                </div>


            </div>
        </div>
    </div>
    </div>

    <div class="indicators-cards">
        <span id="indicator1" class="indicator active"></span>
        <span id="indicator2" class="indicator"></span>
        <span id="indicator3" class="indicator"></span>
        <span id="indicator4" class="indicator"></span>
        <span id="indicator5" class="indicator"></span>
    </div>
</section>

<section class="prediction-section py-5 ">
    <div class="container">
        <div class="row align-items-center justify-content-center">

            <div class="col-12">
                <div class="video-player pb-3 mt-5">

                    <video width="100%" height="350" controls>
                        <source src="https://youtu.be/3j1q6V4ijEI" type="video/mp4">
                        <source src="https://youtu.be/3j1q6V4ijEI" type="video/ogg">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
            <h2 class="secondary-heading  mt-3 mb-2">
                Prediction for Expression, and <span>Personality Numbers</span>
            </h2>
        </div>
    </div>
</section>
<section class="py-5 what-we-do-section">
    <div class="container">
        <div class="row">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <!-- Image Section -->
                            <div class="col-md-4 text-center"> <img
                                    src="{{ asset('frontend/assests/images/hero-section/ravi-mundra-profile.png') }}"
                                    alt="Ravi Mundra" class="carousel-img">
                                <h4 class="mt-3 person-title">Ravi Mundra</h4>
                            </div> <!-- Text Section -->
                            <div class="col-md-8 custom-carousel-content">
                                <h3 class="mb-2 carousel-content-title">What <span>Do We Do?</span></h3>
                                <p class="mb-3 carousel-content-descriprtion">Lorem Ipsum is simply dummy
                                    text of the printing and typesetting industry. Lorem Ipsum has been the
                                    industry's standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of type and scrambled it to make a type specimen
                                    book. It has survived not only five centuries, but also the leap into
                                    electronic typesetting, remaining essentially unchanged. It was
                                    popularised in the 1960s with the release of Letraset sheets containing
                                    Lorem Ipsum passages, and more recently with desktop publishing software
                                    like Aldus PageMaker including versions of Lorem Ipsum.</p>
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
                        <div class="row">
                            <!-- Image Section -->
                            <div class="col-md-4 text-center"> <img
                                    src="{{ asset('frontend/assests/images/hero-section/ravi-mundra-profile.png') }}"
                                    alt="Ravi Mundra" class="carousel-img">
                                <h4 class="mt-3 person-title">Ravi Mundra</h4>
                            </div> <!-- Text Section -->
                            <div class="col-md-8 custom-carousel-content">
                                <h3 class="mb-2 carousel-content-title">What <span> We Do?</span></h3>
                                <p class="mb-3 carousel-content-descriprtion">Lorem Ipsum is simply dummy
                                    text of the printing and typesetting industry. Lorem Ipsum has been the
                                    industry's standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of type and scrambled it to make a type specimen
                                    book. It has survived not only five centuries, but also the leap into
                                    electronic typesetting, remaining essentially unchanged. It was
                                    popularised in the 1960s with the release of Letraset sheets containing
                                    Lorem Ipsum passages, and more recently with desktop publishing software
                                    like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                <div class="experience-years d-flex gap-1 mb-4">
                                    <p class="years mb-0">15+</p>
                                    <div>
                                        <p class="mb-0 years-of">Years of</p>
                                        <p class="experience mt-0">Experience</p>
                                    </div>
                                </div>
                                <button class="fill-button">Read More..</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</section>

</div>
</div>
</section>



<section class="unique-power unlock-bg pb-3">
    <div class="container">
        <div class="row ">

            <h2 class=" heading mb-3 mt-0 text-center">
                Unlock Your<span> Unique Power</span>
            </h2>

            <div class=" d-flex justify-content-center text-center flex-column">
                <p class="px-3 news-content-para mb-5">
                    Discover the true depth of your personality and life path by combining Astrology and Numerology.
                    Together, they offer a powerful roadmap to help you understand your strengths, life purpose, and how
                    to navigate your journey.
                </p>
                <div><img src="{{ asset('frontend/assests/images/hero-section/gold-adorn.svg') }}" alt="icon"></div>
            </div>


        </div>

        <div class="tab-n-container">
            <div class="tabs-n">
                <button class="tab-link active text-center" onclick="openTab(event, 'VastuShastra')">
                    <div class="d-flex align-items-center gap-4 justify-content-center">
                        <div class="tab-heading"><img
                                src="{{ asset('frontend/assests/images/hero-section/vastu-shastra-icon.svg') }}"
                                alt="icon"></div>Vastu Shastra
                    </div>
                </button>
                <button class="tab-link" onclick="openTab(event, 'AstrologyNumerology')">
                    <div class="d-flex align-items-center gap-4 justify-content-center">
                        <div class="tab-heading"><img
                                src="{{ asset('frontend/assests/images/hero-section/astrology-num-icon.svg') }}"
                                alt="icon"></div>Astrology + Numerology
                    </div>
                </button>
            </div>

            <div id="VastuShastra" class="tab-content unlock-bg" style="display: block;">
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <div class="vastu-description">
                            <p class="heading">Entrance – Welcoming Energy</p>
                            <p class="content">The direction and design of your main entrance can attract or repel
                                energy. An optimal entrance, ideally facing east or north, invites positive energy and
                                prosperity.</p>
                        </div>
                        <div class="vastu-description">
                            <p class="heading">Living Room – Social Harmony</p>
                            <p class="content">Placing the living room in the northeast or east enhances social
                                interactions and creates a space of warmth and connection, ideal for family gatherings
                                and social events.</p>
                        </div>
                        <div class="vastu-description">
                            <p class="heading">Kitchen – Health and Prosperity</p>
                            <p class="content">Positioning the kitchen in the southeast corner ensures a balanced flow
                                of energy that promotes health, wealth, and positive cooking experiences.</p>
                        </div>
                        <div class="vastu-description">
                            <p class="heading">Bedroom – Restful Sleep</p>
                            <p class="content">A bedroom in the southwest corner supports restful sleep and strengthens
                                relationships. Sleeping with your head towards the south can improve overall well-being.
                            </p>
                        </div>
                        <div class="vastu-description">
                            <p class="heading">Office/Workplace – Productivity and Success</p>
                            <p class="content">An office situated in the northwest or southeast encourages creativity
                                and productivity. A well-organized workspace enhances career growth and professional
                                success.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="d-flex align-items-center justify-content-center h-100"><img
                                src="{{ asset('frontend/assests/images/hero-section/vastu-bg-image.png') }}" alt="icon"
                                class="img-fluid">
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="vastu-description">
                            <p class="heading">Bathroom/Washroom – Clean Energy</p>
                            <p class="content">Bathrooms located in the northwest or southeast promote a healthy
                                environment and prevent energy stagnation. Proper placement supports cleanliness and
                                wellness.</p>
                        </div>
                        <div class="vastu-description">
                            <p class="heading">Study Room – Focus and Learning</p>
                            <p class="content">Positioning a study room in the northeast encourages concentration and
                                academic success. Facing east or north while studying can enhance mental clarity.</p>
                        </div>
                        <div class="vastu-description">
                            <p class="heading">Pooja Room/Spiritual Space – Spiritual Growth</p>
                            <p class="content">A pooja room in the northeast brings divine blessings and peace. It’s the
                                ideal place for spiritual practices and meditation.</p>
                        </div>
                        <div class="vastu-description">
                            <p class="heading">Garden/Outdoor Area – Vitality and Prosperity</p>
                            <p class="content">A garden or outdoor space in the north or east fosters growth and
                                prosperity. It’s a place for relaxation and rejuvenation, enhancing overall vitality.
                            </p>
                        </div>

                        <div class="vastu-description">
                            <p class="heading">Storage and Utility Areas – Organized Energy</p>
                            <p class="content">Place storage and utility areas in the southwest to maintain order and
                                prevent clutter. This promotes a balanced flow of energy and supports efficient space
                                usage.</p>
                        </div>

                    </div>
                </div>
            </div>

            <div id="AstrologyNumerology" class="tab-content unlock-bg">
                <div class="row  astro-numero ">
                    <div class="col-lg-3 col-sm-6 col-12 p-0">
                        <div class="lifepath-cards astro-numro-bottom h-100">
                            <div class="zodiac-sign"><img
                                    src="{{ asset('frontend/assests/images/hero-section/zodiac-sign-1.svg') }}"
                                    alt="icon"></div>
                            <h3 class="zodiac-name mt-4">Aries + Life Path 1 –</h3>
                            <p class="zodiac-title mb-3">The Visionary Leader</p>
                            <p class="zodiac-content">The Visionary Leader Discover the true depth of your personality
                                and life path
                                by combining Astrology and Numerology. Together, they offer a powerful roadmap to help
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
                                nature of Life Path 4, you are practical, dependable, and capable of creating lasting
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
                            <p class="zodiac-content">The Adventurous Communicator With Gemini's adaptability and Life
                                Path 5’s love of freedom, you're always exploring new ideas and experiences. You thrive
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
                            <p class="zodiac-content">The Caring Nurturer As a Cancer with Life Path 6, you are deeply
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
                            <p class="zodiac-content">The Creative Leader Leo’s charisma combined with Life Path 3’s
                                creativity makes you a natural-born performer. Your vibrant energy inspires others, and
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
                            <p class="zodiac-content">The Analytical Seeker Virgo’s precision combined with Life Path
                                7’s introspection makes you a deep thinker, always searching for truth and understanding
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
                            <p class="zodiac-content">The Diplomatic Harmonizer Libra’s love for balance, paired with
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
                            <p class="zodiac-content">The Powerful Transformer With Scorpio’s intensity and Life Path
                                8’s ambition, you are a force of transformation and success, driven to achieve greatness
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
                            <p class="zodiac-content">The Creative Leader Leo’s charisma combined with Life Path 3’s
                                creativity makes you a natural-born performer. Your vibrant energy inspires others, and
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
                            <p class="zodiac-content">The Analytical Seeker Virgo’s precision combined with Life Path
                                7’s introspection makes you a deep thinker, always searching for truth and understanding
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
                            <p class="zodiac-content">The Diplomatic Harmonizer Libra’s love for balance, paired with
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
                            <p class="zodiac-content">The Powerful Transformer With Scorpio’s intensity and Life Path
                                8’s ambition, you are a force of transformation and success, driven to achieve greatness
                                and influence on a large scale.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="combining-astrology primary-bg combining-astrology-bg ">
    <div class="container">
        <div class="row justify-content-between align-items-start  gx-3 mb-4">
            <div class="col-md-6">
                <h2>Combining Astrology and <span>Numerology</span> for <span>Everyday Solutions</span></h2>
            </div>
            <div class="col-md-6">
                <p>Are you facing daily challenges that feel overwhelming?? Explore how combining Astrology and
                    Numerology can offer unique insights and practical remedies for your everyday issues. This powerful
                    fusion helps you understand your personal and professional hurdles, offering customized strategies
                    to improve your daily experiences. Common Everyday Challenges and Their Solutions</p>
            </div>
        </div>
        <div class="row gx-3 align-items-center">
            <div class="col-md-6">
                <div>
                    <img src="{{ asset('frontend/assests/images/hero-section/work-life-balance.png') }}" alt=""
                        class="img-fluid">
                </div>

            </div>
            <div class="col-md-6">
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
                            <strong>Solution :</strong> Use your Capricorn's ambition to set clear boundaries and use
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
    <div class="container">
        <div class="row">
            <h2 class="nested-span mb-2 mt-0">
                Latest <span>News</span>
            </h2>
            <div class=" d-flex justify-content-center text-center">
                <p class="w-75 news-content-para">
                    Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
                    nisi
                    elit
                    consequat hello Aenean world.
                </p>
            </div>
        </div>
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators d-none">
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row gx-3 mb-3">
                        <div class="col-md-4">
                            <div class="news-cards">
                                <div class="thumbnail thumbnail-1"></div>
                                <p class="news-title mt-3">Proin gravida nibh vel velit auctor aliquet.</p>
                                <p class="news-content">Lorem quis bibendum auctor, nisi elit consequat ipsum, nec
                                    sagittis sem
                                    nibh
                                    id elit. Duis sed odio sit amet.</p>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="news-cards">
                                <div class="thumbnail thumbnail-2"></div>
                                <p class="news-title mt-3">Proin gravida nibh vel velit auctor aliquet.</p>
                                <p class="news-content">Lorem quis bibendum auctor, nisi elit consequat ipsum, nec
                                    sagittis sem
                                    nibh
                                    id elit. Duis sed odio sit amet.</p>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="news-cards">
                                <div class="thumbnail thumbnail-3"></div>
                                <p class="news-title mt-3">Proin gravida nibh vel velit auctor aliquet.</p>
                                <p class="news-content">Lorem quis bibendum auctor, nisi elit consequat ipsum, nec
                                    sagittis sem
                                    nibh
                                    id elit. Duis sed odio sit amet.</p>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row gx-3 mb-3">
                        <div class="col-md-4">
                            <div class="news-cards">
                                <div class="thumbnail thumbnail-3"></div>
                                <p class="news-title mt-3">Proin gravida nibh vel velit auctor aliquet.</p>
                                <p class="news-content">Lorem quis bibendum auctor, nisi elit consequat ipsum, nec
                                    sagittis sem
                                    nibh
                                    id elit. Duis sed odio sit amet.</p>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="news-cards">
                                <div class="thumbnail thumbnail-1"></div>
                                <p class="news-title mt-3">Proin gravida nibh vel velit auctor aliquet.</p>
                                <p class="news-content">Lorem quis bibendum auctor, nisi elit consequat ipsum, nec
                                    sagittis sem
                                    nibh
                                    id elit. Duis sed odio sit amet.</p>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="news-cards">
                                <div class="thumbnail thumbnail-2"></div>
                                <p class="news-title mt-3">Proin gravida nibh vel velit auctor aliquet.</p>
                                <p class="news-content">Lorem quis bibendum auctor, nisi elit consequat ipsum, nec
                                    sagittis sem
                                    nibh
                                    id elit. Duis sed odio sit amet.</p>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row gx-3 mb-3">
                        <div class="col-md-4">
                            <div class="news-cards">
                                <div class="thumbnail thumbnail-1"></div>
                                <p class="news-title mt-3">Proin gravida nibh vel velit auctor aliquet.</p>
                                <p class="news-content">Lorem quis bibendum auctor, nisi elit consequat ipsum, nec
                                    sagittis sem
                                    nibh
                                    id elit. Duis sed odio sit amet.</p>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="news-cards">
                                <div class="thumbnail thumbnail-3"></div>
                                <p class="news-title mt-3">Proin gravida nibh vel velit auctor aliquet.</p>
                                <p class="news-content">Lorem quis bibendum auctor, nisi elit consequat ipsum, nec
                                    sagittis sem
                                    nibh
                                    id elit. Duis sed odio sit amet.</p>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="news-cards">
                                <div class="thumbnail thumbnail-2"></div>
                                <p class="news-title mt-3">Proin gravida nibh vel velit auctor aliquet.</p>
                                <p class="news-content">Lorem quis bibendum auctor, nisi elit consequat ipsum, nec
                                    sagittis sem
                                    nibh
                                    id elit. Duis sed odio sit amet.</p>
                                <a href="#" class="read-more">Read More</a>
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
</section>
<section class="pre-footer">
    <div class="noh-wrapper">
        <div class="need-our-help-cta ">
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

    <div class="container">
        <div class="row">
            <h2 class="nested-span mb-2">
                What <span>clients</span> are saying
            </h2>

            <div class=" d-flex justify-content-center text-center">
                <p class="w-75 paragraph">
                    Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
                    nisi
                    elit
                    consequat hello Aenean world.
                </p>
            </div>
        </div>
        <div id="carouselExample" class="carousel slide overflow-show" data-bs-ride="carousel">
            <div class="carousel-indicators d-none">
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row gx-3 client-cards-row pb-5 px-5">
                        <div class="col-md-4">
                            <div class="client-card">
                                <div class="client-profile"><img
                                        src="{{ asset('frontend/assests/images/hero-section/client-1.png') }}" alt=""
                                        class="img-fluid"></div>
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
                                    <p class="paragraph">Lorem quis bibendum auctor, nisi elit consequat ipsum, nec
                                        sagittis sem
                                        nibh id elit. Duis
                                        sed odio sit amet.</p>
                                    <p class="client-name">Kyle Roberts DVM</p>
                                    <p class="client-title">Customer Web Consultant</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="client-card">
                                <div class="client-profile"><img
                                        src="{{ asset('frontend/assests/images/hero-section/client-2.png') }}" alt=""
                                        class="img-fluid"></div>
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
                                    <p class="paragraph">Lorem quis bibendum auctor, nisi elit consequat ipsum, nec
                                        sagittis sem
                                        nibh id elit. Duis
                                        sed odio sit amet.</p>
                                    <p class="client-name">Sophia Anderson</p>
                                    <p class="client-title">Internal Implementation Officer</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="client-card">
                                <div class="client-profile"><img
                                        src="{{ asset('frontend/assests/images/hero-section/client-3.png') }}" alt=""
                                        class="img-fluid"></div>
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
                </div>
                <div class="carousel-item">
                    <div class="row gx-3 client-cards-row pb-5 px-5">

                        <div class="col-md-4">
                            <div class="client-card">
                                <div class="client-profile"><img
                                        src="{{ asset('frontend/assests/images/hero-section/client-2.png') }}" alt=""
                                        class="img-fluid"></div>
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
                                    <p class="paragraph">Lorem quis bibendum auctor, nisi elit consequat ipsum, nec
                                        sagittis sem
                                        nibh id elit. Duis
                                        sed odio sit amet.</p>
                                    <p class="client-name">Sophia Anderson</p>
                                    <p class="client-title">Internal Implementation Officer</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="client-card">
                                <div class="client-profile"><img
                                        src="{{ asset('frontend/assests/images/hero-section/client-3.png') }}" alt=""
                                        class="img-fluid"></div>
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
                        <div class="col-md-4">
                            <div class="client-card">
                                <div class="client-profile"><img
                                        src="{{ asset('frontend/assests/images/hero-section/client-1.png') }}" alt=""
                                        class="img-fluid"></div>
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
                                    <p class="paragraph">Lorem quis bibendum auctor, nisi elit consequat ipsum, nec
                                        sagittis sem
                                        nibh id elit. Duis
                                        sed odio sit amet.</p>
                                    <p class="client-name">Kyle Roberts DVM</p>
                                    <p class="client-title">Customer Web Consultant</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row gx-3 client-cards-row pb-5 px-5">
                        <div class="col-md-4">
                            <div class="client-card">
                                <div class="client-profile"><img
                                        src="{{ asset('frontend/assests/images/hero-section/client-1.png') }}" alt=""
                                        class="img-fluid"></div>
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
                                    <p class="paragraph">Lorem quis bibendum auctor, nisi elit consequat ipsum, nec
                                        sagittis sem
                                        nibh id elit. Duis
                                        sed odio sit amet.</p>
                                    <p class="client-name">Kyle Roberts DVM</p>
                                    <p class="client-title">Customer Web Consultant</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="client-card">
                                <div class="client-profile"><img
                                        src="{{ asset('frontend/assests/images/hero-section/client-3.png') }}" alt=""
                                        class="img-fluid"></div>
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
                        <div class="col-md-4">
                            <div class="client-card">
                                <div class="client-profile"><img
                                        src="{{ asset('frontend/assests/images/hero-section/client-2.png') }}" alt=""
                                        class="img-fluid"></div>
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
                                    <p class="paragraph">Lorem quis bibendum auctor, nisi elit consequat ipsum, nec
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
</section>

@endsection('content')


<script>
const content = [{
        title: "Career Problems",
        issue: "Balancing career demands with personal life can be tough. For instance, a driven Capricorn (Astrology) with a Life Path 8 (Numerology) may find it challenging to switch off from work, leading to burnout.",
        solution: "Use your Capricorn's ambition to set clear boundaries and use your life path 8's organizational skills to create a well-structured routine. Integrate relaxation practices like meditation and time management strategies aligned with your numerology to achieve a healthier balance."
    },
    {
        title: "Marital Life Problems",
        issue: "Balancing career demands with personal life can be tough. For instance, a driven Capricorn (Astrology) with a Life Path 8 (Numerology) may find it challenging to switch off from work, leading to burnout.",
        solution: "Use your Capricorn's ambition to set clear boundaries and use your life path 8's organizational skills to create a well-structured routine. Integrate relaxation practices like meditation and time management strategies aligned with your numerology to achieve a healthier balance."
    },
    {
        title: "Work-Life Balance Struggles 3",
        issue: "Balancing career demands with personal life can be tough. For instance, a driven Capricorn (Astrology) with a Life Path 8 (Numerology) may find it challenging to switch off from work, leading to burnout.",
        solution: "Use your Capricorn's ambition to set clear boundaries and use your life path 8's organizational skills to create a well-structured routine. Integrate relaxation practices like meditation and time management strategies aligned with your numerology to achieve a healthier balance."
    }
];

let currentIndex = 0;

function changeContent(direction) {
    currentIndex += direction;
    if (currentIndex < 0) currentIndex = content.length - 1;
    if (currentIndex >= content.length) currentIndex = 0;

    // Change title, issue, and solution separately
    document.getElementById("dynamic-title").innerHTML = content[currentIndex].title;
    document.getElementById("dynamic-issue").innerHTML = `<strong>Issue :</strong> ${content[currentIndex].issue}`;
    document.getElementById("dynamic-solution").innerHTML =
        `<strong>Solution :</strong> ${content[currentIndex].solution}`;
}
</script>

<script>
function openTab(evt, tabName) {
    // Get all tab content elements and hide them
    var tabContent = document.getElementsByClassName("tab-content");
    for (var i = 0; i < tabContent.length; i++) {
        tabContent[i].style.display = "none";
    }

    // Get all tab links and remove the active class
    var tabLinks = document.getElementsByClassName("tab-link");
    for (var i = 0; i < tabLinks.length; i++) {
        tabLinks[i].classList.remove("active");
    }

    // Show the clicked tab's content and add active class to the button
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.classList.add("active");
}
</script>

<script>
const track = document.querySelector('.carousel-track');
const slides = Array.from(track.children);
const prevButton = document.getElementById('prevButton');
const nextButton = document.getElementById('nextButton');
const indicators = document.querySelectorAll('.indicator');
const slideWidth = slides[0].getBoundingClientRect().width;
let slideInterval;
const intervalTime = 3000; // Change slide every 3 seconds  // Arrange slides next to each other  
slides.forEach((slide, index) => {
    slide.style.left = slideWidth * index + 'px';
});
const moveToSlide = (track, currentSlide, targetSlide) => {
    track.style.transform = 'translateX(-' + targetSlide.style.left + ')';
    currentSlide.classList.remove('current-slide');
    targetSlide.classList.add('current-slide');
};
const updateIndicators = (targetIndex) => {
    indicators.forEach((indicator, index) => {
        indicator.classList.remove('active');
        if (index === targetIndex) {
            indicator.classList.add('active');
        }
    });
};
const findIndexOfSlide = (targetSlide) => {
    return slides.findIndex(slide => slide === targetSlide);
};
const autoSlide = () => {
    const currentSlide = track.querySelector('.current-slide');
    const nextSlide = currentSlide.nextElementSibling ? currentSlide.nextElementSibling : slides[0];
    moveToSlide(track, currentSlide, nextSlide);
    updateIndicators(findIndexOfSlide(nextSlide));
}; // When I click next, move slides to the right  
nextButton.addEventListener('click', () => {
    const currentSlide = track.querySelector('.current-slide');
    const nextSlide = currentSlide.nextElementSibling ? currentSlide.nextElementSibling : slides[0];
    moveToSlide(track, currentSlide, nextSlide);
    updateIndicators(findIndexOfSlide(nextSlide));
}); // When I click prev, move slides to the left  
prevButton.addEventListener('click', () => {
    const currentSlide = track.querySelector('.current-slide');
    const prevSlide = currentSlide.previousElementSibling ? currentSlide.previousElementSibling : slides[slides
        .length - 1];
    moveToSlide(track, currentSlide, prevSlide);
    updateIndicators(findIndexOfSlide(prevSlide));
}); // Add click events to indicators  
indicators.forEach((indicator, index) => {
    indicator.addEventListener('click', () => {
        const currentSlide = track.querySelector('.current-slide');
        const targetSlide = slides[index];
        moveToSlide(track, currentSlide, targetSlide);
        updateIndicators(index);
    });
}); // Start auto sliding  
slideInterval = setInterval(autoSlide, intervalTime); // Optional: pause auto-slide when hovering over carousel  
track.addEventListener('mouseenter', () => clearInterval(slideInterval));
track.addEventListener('mouseleave', () => slideInterval = setInterval(autoSlide, intervalTime));
</script>

<script>
function showContent(section) {
    const contents = document.querySelectorAll('.content-section');
    const indicators = document.querySelectorAll('.indicator');

    contents.forEach(content => {
        content.classList.remove('active');
        if (content.id === section) {
            content.classList.add('active');
        }
    });

    // Update indicators based on the section
    const index = Array.from(contents).findIndex(content => content.id === section);
    indicators.forEach((indicator, i) => {
        if (i === index) {
            indicator.classList.add('active');
        } else {
            indicator.classList.remove('active');
        }
    });
}

// Set the default active content
document.addEventListener("DOMContentLoaded", function() {
    showContent('numerology');
});
</script>

<script>
let brownCurrentSlide = 0;
const brownSlides = document.querySelectorAll('.brown-carousel-slide');
const brownTotalSlides = brownSlides.length;

function brownShowSlide(index) {
    brownSlides.forEach((slide, i) => {
        slide.classList.remove('brown-slide-active');
        slide.style.left = '100%';
        if (i === index) {
            slide.classList.add('brown-slide-active');
            slide.style.left = '0';
        }
    });
}

function brownNextSlide() {
    brownCurrentSlide = (brownCurrentSlide + 1) % brownTotalSlides;
    brownShowSlide(brownCurrentSlide);
}

setInterval(brownNextSlide, 3000); // Automatically switch slides every 3 seconds
</script>