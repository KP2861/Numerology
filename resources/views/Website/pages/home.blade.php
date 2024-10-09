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
                    <div class="button-outer"><a href="{{ url('/consultant') }}"><button class="outline-button">
                            <p class="mb-0 mt-0 mr-0 ml-0 button-text">Consultation</p></a>
                        </button></div>
                    <div class="d-flex">
                            <div class="button-outer">
                                @if (!Auth::check())
                                    <!-- User is not logged in -->
                                    <a href="{{ url('/login') }}">
                                        <button class="fill-button fill-button-hero">
                                            <img src="{{ asset('frontend/assests/images/hero-section/sign-in-icon.svg') }}">
                                            <p class="mb-0 mt-0 mr-0 ms-2 button-text">SIGN IN</p>
                                        </button>
                                    </a>
                                @endif
                            </div>
                            <div class="mt-1 ms-3">
                                @if (Auth::check())
                                    <!-- Show this only if the user is logged in -->
                                    <a href="{{ url('/profile') }}">
                                        <img src="{{ asset('frontend/assests/images/hero-section/user-logged-in.svg') }}"
                                            alt="" class=""></a>
                                @endif
                            </div>
                        </div>
                    
                    
                    
                </div>
            </div>
        </div>
        <div class="row mb-5 align-items-center gy-md-0 gy-5 ">
            <div class="col-xl-4 col-lg-7 order-md-1 order-2">
                <div class="hero-section-content mt-2">

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
                        <button class="hero-section-button fill-button fill-button-hero">
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
                                            Vastu
                                        </p>
                                        <p class="hidden-text">
                                            Shastra
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
                                            Scientific
                                        </p>
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
                                            Analysis Of
                                        </p>
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
                                            Analysis Of
                                        </p>
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
                                        <p class="hidden-text">
                                            Circle
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

    <div class="container-fluid custom-padded-container custom-container-width custom-container-max-width pt-1">
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

                    <div class="col-lg-5">
                        <div class="image-wrapper position-relative h-100">
                            <div class="animation-wrapper position-relative" id="globeanimate">
                                <img src="{{ asset('frontend/assests/images/hero-section/astrology-hands.png') }}"
                                    alt="" class="img-fluid web-2">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">

                        <div class="brown-cards-content mt-5 mb-lg-5 mb-3">
                            <p class="mb-2">Discover the transformative power of astrology with Swrahan! We don’t just
                                predict your future; we guide you toward your best life. Our personalized readings,
                                scientific approach, and deep insights help you understand your strengths, overcome
                                challenges, and unlock hidden opportunities. Whether it's personal growth, career
                                success, or relationship harmony, we are here to provide you with clarity and direction.
                                Trust in our expertise to help you make informed decisions and align with your true
                                path. Connect with us today and experience the difference astrology can make in your
                                life!

                            </p>

                        </div>


                        <button class="fill-button fill-button-body mb-5">Read More</button>
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

                    <div class="col-lg-5">
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
                    <div class="col-lg-7">
                        <div class="brown-cards-content mt-5 mb-lg-5 mb-3">
                            <p class="mb-2">Unlock the secrets of your life with Swrahan’s expert numerology guidance!
                                Our scientific approach to numerology helps you understand your unique numbers,
                                empowering you to make better decisions and embrace your true potential. Whether you’re
                                seeking clarity in your career, relationships, or personal growth, our personalized
                                readings provide deep insights into your strengths, challenges, and opportunities. At
                                Swrahan, we don’t just analyze your numbers; we help you navigate life’s journey with
                                confidence and purpose. Connect with us today to discover how numerology can bring
                                positive change and align you with your destiny!

                            </p>

                        </div>

                        <button class="fill-button fill-button-body mb-5">Read More</button>
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

                    <div class="col-lg-5">
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
                    <div class="col-lg-7">
                        <div class="brown-cards-content mt-5 mb-lg-5 mb-3">
                            <p class="mb-2">Transform your living and working spaces with Swrahan’s expert Vastu Shastra
                                guidance! At Swrahan, we blend ancient Vastu principles with modern insights to create
                                harmonious environments that promote health, prosperity, and happiness. Whether it’s
                                your home, office, or any other space, our customized Vastu consultations are designed
                                to balance energies, remove obstacles, and enhance your overall well-being. With
                                practical, easy-to-implement remedies, we help you attract positive vibrations and
                                success into your life. Trust Swrahan to turn your space into a powerful tool for
                                personal and professional growth. Reach out today and experience the benefits of
                                balanced living!

                            </p>

                        </div>

                        <button class="fill-button fill-button-body mb-5">Read More</button>
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

                    <div class="col-lg-5">
                        <div class="image-wrapper h-100">
                            <div class="animation-wrapper" id="globeanimate">
                                <img src="{{ asset('frontend/assests/images/hero-section/manifest-hands.png') }}" alt=""
                                    class="img-fluid web-2">
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="brown-cards-content mt-5 mb-lg-5 mb-3">
                            <p class="mb-2">Manifest your dreams into reality with Swrahan’s powerful manifestation
                                techniques! At Swrahan, we help you tap into your inner power and align your energy with
                                your desires, whether it’s wealth, health, love, or success. Our proven manifestation
                                methods combine ancient wisdom with modern practices to clear blocks, amplify
                                intentions, and attract the right opportunities into your life. With personalized
                                guidance, we empower you to visualize, believe, and achieve your goals with confidence
                                and clarity. Start your manifestation journey with Swrahan today, and turn your
                                aspirations into tangible outcomes that elevate your life!

                            </p>

                        </div>

                        <button class="fill-button fill-button-body mb-5">Read More</button>
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

                    <div class="col-lg-5">
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
                    <div class="col-lg-7">
                        <div class="brown-cards-content mt-5 mb-lg-5 mb-3">
                            <p class="mb-2">Gain clarity and insight into your future with Swrahan’s expert Event
                                Prediction services! Our tailored predictions provide you with a comprehensive
                                understanding of significant upcoming events in your life, from career shifts to
                                relationship milestones. Utilizing advanced astrological and numerological techniques,
                                we analyze your unique energies to offer precise forecasts that help you prepare for
                                opportunities and navigate challenges. At Swrahan, we empower you to make informed
                                decisions and seize the moment when it matters most. Don’t leave your future to
                                chance—connect with us today to discover what’s ahead and align yourself for success!
                            </p>

                        </div>

                        <button class="fill-button fill-button-body mb-5">Read More</button>
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

                    <div class="col-lg-5">
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
                    <div class="col-lg-7">
                        <div class="brown-cards-content mt-5 mb-lg-5 mb-3">
                            <p class="mb-2">At Swrahan, we specialize in creating scientific logo designs that embody
                                innovation, precision, and professionalism while ensuring a strong brand identity. Our
                                logos are tailored to reflect your unique vision and resonate with your audience.
                                Additionally, we design Vastu-compliant science visiting cards that not only convey your
                                credentials but also align with Vastu principles to enhance your networking potential.
                                Each card is thoughtfully crafted with attention to color, layout, and material,
                                ensuring it fosters positive connections. Trust Swrahan to create impactful logos and
                                visiting cards that attract opportunities and empower your brand in the scientific
                                community. Connect with us today to elevate your professional presence!
                            </p>

                        </div>

                        <button class="fill-button fill-button-body mb-5">Read More</button>
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

                    <div class="col-lg-5">
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
                    <div class="col-lg-7">
                        <div class="brown-cards-content mt-5 mb-lg-5 mb-3">
                            <p class="mb-2">Unlock the secrets of your success with Swrahan’s Signature Analysis! Your
                                signature isn’t just a name; it’s a powerful expression of your personality, energy, and
                                destiny. At Swrahan, our expert analysis reveals how the style, flow, and elements of
                                your signature influence your personal and professional life. Whether you’re seeking to
                                enhance your confidence, attract opportunities, or make a lasting impression, our
                                personalized insights can guide you to refine your signature for maximum impact. Let us
                                help you create a signature that aligns with your goals and propels you toward success.
                                Connect with Swrahan today for your signature transformation!

                            </p>

                        </div>

                        <button class="fill-button fill-button-body mb-5">Read More</button>
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

                    <div class="col-lg-5">
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
                    <div class="col-lg-7">
                        <div class="brown-cards-content mt-5 mb-lg-5 mb-3">
                            <p class="mb-2">Discover the impact of your watch with Swrahan’s unique Watch Analysis! At
                                Swrahan, we believe that your watch is more than just a timepiece—it’s an extension of
                                your energy and personal style. Our expert analysis delves into the type, design, and
                                color of your watch to reveal how it influences your personal and professional growth.
                                From boosting confidence to enhancing productivity, the right watch can unlock new
                                opportunities and align you with success. Let Swrahan guide you in choosing the perfect
                                watch that complements your energy and supports your ambitions. Connect with us today
                                for a personalized watch analysis!

                            </p>

                        </div>

                        <button class="fill-button fill-button-body mb-5">Read More</button>
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

                    <div class="col-lg-5">
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
                    <div class="col-lg-7">
                        <div class="brown-cards-content mt-5 mb-lg-5 mb-3">
                            <p class="mb-2">Experience the power of simple, effective remedies with Swrahan! Our
                                expertly curated remedies are designed to balance planetary influences and bring
                                positive changes into your life. Whether you’re facing personal challenges, career
                                obstacles, or health concerns, our practical solutions are tailored to address your
                                unique needs. At Swrahan, we combine ancient wisdom with a modern approach to provide
                                easy-to-follow remedies that help you align with the universe’s energies. Let us guide
                                you toward a life of harmony, success, and peace. Connect with us today to discover how
                                our remedies can transform your life for the better!

                            </p>

                        </div>

                        <button class="fill-button fill-button-body mb-5">Read More</button>
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

                    <div class="col-lg-5">
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
                    <div class="col-lg-7">
                        <div class="brown-cards-content mt-5 mb-lg-5 mb-3">
                            <p class="mb-2">Enhance your life with Swrahan’s powerful Energy Circles! Our expertly
                                crafted Energy Circles are designed to harness positive vibrations and align your energy
                                with your goals, whether for health, wealth, relationships, or overall well-being. By
                                combining ancient techniques with modern insights, Swrahan creates custom Energy Circles
                                that work uniquely for you, amplifying your intentions and removing energetic blockages.
                                Experience a renewed sense of balance, clarity, and success as these circles attract the
                                right opportunities and positive outcomes into your life. Partner with Swrahan and let
                                our Energy Circles guide you toward a life of abundance and joy!

                            </p>

                        </div>

                        <button class="fill-button fill-button-body mb-5">Read More</button>
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
                                <p class="mb-3 carousel-content-descriprtion">Ravi Mundra is a seasoned Astrology and Numerology expert with over 15 years of experience. His expertise spans Vedic Astrology, KP Astrology, Bhrigu Nadi, and Nandi systems, along with a keen proficiency in numerology, including mobile numbers, personal names, and business names. With over 500+ lucky SIMs provided across India, Ravi’s work in enhancing fortunes is proven and impactful.
                                    In addition to this, Ravi is a scientific logo designer, crafting logos that channel energy for success. As a visiting Vastu expert, he helps harmonize spaces to foster balance and positive energy flow. His hallmark is instant predictions for situational challenges, whether business or personal, offering practical remedies using Vedic traditions, Rudraksha therapy, Ravan Samhita, and more.
                                    With his comprehensive approach and personalized solutions, Ravi Mundra is a go-to professional for those seeking growth, balance, and success.</p>
                                <div class="experience-years d-flex gap-1 mb-4">
                                    <p class="years mb-0">15+</p>
                                    <div>
                                        <p class="mb-0 years-of">Years of</p>
                                        <p class="experience mt-0">Experience</p>
                                    </div>
                                </div>
                                <button class="fill-button fill-button-body">Read More</button>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row gy-4">
                            <!-- Image Section -->
                            <div class="col-lg-4 text-center">
                                <div class="unedited-image"> <img
                                        src="{{ asset('frontend/assests/images/hero-section/swati-mundra.png') }}"
                                        alt="swati Mundra" class="carousel-img"></div>
                                <h4 class="mt-3 person-title">Swati Mundra</h4>
                            </div> <!-- Text Section -->
                            <div class="col-lg-8 custom-carousel-content">
                                <h3 class="mb-2 carousel-content-title">What <span> We Do?</span></h3>
                                <p class="mb-3 carousel-content-descriprtion">Swati Mundra is a seasoned Vastu consultant with over 10 years of expertise, excelling in optimizing spaces for homes, offices, and shops. She has also mastered industrial Vastu, driving significant growth and success for businesses. In addition, Swati is a skilled numerologist, specializing in mobile numerology, name numerology, and advising parents on auspicious baby names. Her remedies have delivered results in financial growth, relationships, business expansion, marriage harmony, and career advancements.
                                    With a unique blend of Rudraksha and crystal therapies, Swati’s holistic approach ensures transformative changes, making her a trusted guide for those seeking personal and professional success.</p>
                                <div class="experience-years d-flex gap-1 mb-4">
                                    <p class="years mb-0">10+</p>
                                    <div>
                                        <p class="mb-0 years-of">Years of</p>
                                        <p class="experience mt-0">Experience</p>
                                    </div>
                                </div>
                                <button class="fill-button fill-button-body">Read More</button>
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
                <p>Are you <b>struggling with daily challenges</b> that feel overwhelming? Discover how <b>Astrology</b>
                    and
                    <b>Numerology</b> together can give you special insights and simple solutions for your everyday
                    problems.
                    This powerful combination helps you understand the obstacles you face in your personal and work
                    life. It also provides tailored strategies to make your daily life easier. <b>Common everyday
                        challenges</b> and their <b>easy-to-follow solutions can guide you toward better
                        experiences</b>.
                </p>
            </div>
        </div>
        <div class="row gx-2 align-items-center">
            <div class="col-lg-6">
                <div class="h-100">
                    <img src="{{ asset('frontend/assests/images/hero-section/work-life-balance.png') }}" alt=""
                        class="img-fluid">
                </div>

            </div>
            <div class="col-lg-6 ">
                <div class="h-100 d-flex justify-content-between flex-column">
                    <div id="dynamic-content " class="custom-para-padding-end">
                        <h3 id="dynamic-title" class="mb-3">Strengthen Your Marriage: Find Balance and Harmony Today!
                        </h3>
                        <p id="dynamic-issue" class="mb-2">
                            <strong>Daily Life Issue:</strong> Balancing work and home can be tough for married couples.
                            One partner may focus too much on work, leaving little time for each other. This can lead to
                            feelings of neglect, misunderstandings, and increased tension in the marriage.
                        </p>
                        <p id="dynamic-solution">
                            You can get solutions by booking a <b>10-minute session</b> with us to learn more about
                            improving your marital life.
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

<!------------------------------------------------------------ testing -->
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
            <div class="row mx-auto my-auto justify-content-center gx-1">
                <div id="recipeCarousel" class="carousel proin-wrap slide" data-bs-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        @foreach($article as $item)
                        <div class="carousel-item proin {{ $loop->first ? 'active' : '' }}" data-bs-interval="10000">
                            <div class="col-lg-4">
                                <div class="news-cards">
                                    <div>
                                        <img src="{{ asset($item->file) }}" class="img-fluid" alt="{{ $item->title }}">
                                    </div>
                                    <p class="news-title mt-3">{{ $item->title }}</p>
                                    <p class="news-content">{{ $item->description }}</p>
                                    <p class="d-none">
                                        <small class="text-muted">Category: {{ $item->category->name }}</small>
                                    </p>
                                    {{-- <a href="{{ route('articles.show', $item->id) }}" class="btn btn-primary">Read
                                    More</a> --}}
                                </div>
                            </div>
                        </div>
                        @endforeach


                    </div>

                </div>

            </div>
        </div>
        <!-- <a class="carousel-control-prev bg-transparent w-aut d-none" href="#recipeCarousel" role="button"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon d-none" aria-hidden="true"></span>
        </a> -->
        <!-- <a class="carousel-control-next bg-transparent w-aut d-none" href="#recipeCarousel" role="button"
            data-bs-slide="next">
            <span class="carousel-control-next-icon  d-none" aria-hidden="true"></span>
        </a> -->
    </div>


</section>



<!------------------------------------------------------------- testing -->
<section class="pre-footer">


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
                            <div class="col-lg-4">
                                <div class="client-card h-100">
                                    <div class="d-flex flex-column justify-content-between h-100">
                                        <div>
                                            <div class="client-profile"><img
                                                    src="{{ asset('frontend/assests/images/hero-section/rajendra-chipa.jpeg') }}"
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
                                                <p class="paragraph mb-2">I want to express my gratitude for the
                                                    remedies
                                                    that
                                                    have truly transformed my life and helped me develop a positive
                                                    mindset.
                                                    Thank you, Ravi Sir, for your suggestions and the pre-remedies you
                                                    provided,
                                                    which have made a significant difference in my life.</p>

                                                <p class="paragraph">I am now thinking very positively. Additionally, my
                                                    sister
                                                    had some personal relationship issues, and those are also being
                                                    resolved.
                                                    Your guidance has been invaluable!</p>
                                            </div>

                                        </div>
                                        <div>
                                            <p class="client-name">Rajendra Chippa</p>
                                            <p class="client-title">Private sector Employee</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item proin">
                            <div class="col-lg-4">
                                <div class="client-card h-100">
                                    <div class="d-flex flex-column justify-content-between h-100">

                                        <div class="">
                                            <div class="client-profile"><img
                                                    src="{{ asset('frontend/assests/images/hero-section/avnika.jpg') }}"
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
                                                <p class="paragraph mb-2">My name is Avnika, and I am a college friend
                                                    of
                                                    Ravi.
                                                    I reached out to him for job-related consultation because I was
                                                    facing
                                                    many
                                                    challenges in my last job, which was causing me a lot of stress.
                                                    Ravi
                                                    listened to all my problems and provided a detailed analysis. He
                                                    suggested
                                                    some remedies, specific numbers to write down for getting a good
                                                    job,
                                                    and
                                                    certain affirmations that I needed to repeat regularly.</p>
                                                <p class="paragraph">I followed all the remedies he gave me, and I saw
                                                    positive
                                                    results. I was able to secure a high-paying job, which was quite
                                                    unexpected!
                                                    Thank you so much, Ravi, for your invaluable predictions and for
                                                    taking
                                                    the
                                                    time to listen to me.</p>
                                            </div>

                                        </div>
                                        <div>
                                            <p class="client-name">Avnika M</p>
                                            <p class="client-title">Private Sector Employee</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item proin">
                            <div class="col-lg-4 ">
                                <div class="client-card h-100">
                                    <div class="d-flex flex-column justify-content-between h-100">
                                        <div>
                                            <div class="client-profile"><img
                                                    src="{{ asset('frontend/assests/images/hero-section/ankit-kabra.jpg') }}"
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
                                                <p class="paragraph mb-2">Welcome! I’m glad to share my feedback about
                                                    the
                                                    consultation I had with Ravi regarding numerology. He provided
                                                    valuable
                                                    insights into my business and suggested remedies that really helped.
                                                </p>
                                                <p class="paragraph mb-2">I work with the government on various
                                                    projects,
                                                    including banking, loan funding, and finance. The remedies Ravi
                                                    recommended
                                                    and that I implemented led to outstanding progress and growth. My
                                                    mindset
                                                    has shifted positively, and I’m committed to moving forward with a
                                                    positive
                                                    attitude.</p>
                                                <p class="paragraph">I’m very thankful to Ravi for his guidance.</p>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="client-name">Ankit Kabra</p>
                                            <p class="client-title">Govt Servant (Rajasthan)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="carousel-item proin">
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
                        </div> -->
                </div>

            </div>
        </div>
    </div>
    </div>
</section>
<!-- hs footer wrapper Start -->

<!-- hs testi slider wrapper End -->
@endsection('content')