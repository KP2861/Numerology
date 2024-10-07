@extends('Website.layouts.app')
@section('content')
    <section class="services-forms">
        <div class="container">
            <div class="services">
                <div class="intro-content">
                    <h2 class="services-heading mb-2">Products</h2>
                    <p class="services-para mb-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi, nobis
                        dolores.
                        Voluptatibus explicabo exercitationem laudantium blanditiis voluptates molestias vel maxime
                        temporibus
                        dicta!
                    </p>
                    <div><img src="{{ asset('frontend/assests/images/hero-section/gold-adorn.svg') }}" alt="icon"></div>
                </div>

                <!-- Tab Links -->
                <div class="services-tabs mb-5">
                    <div class="row">
                        <div class="col-3 p-1">
                            <button class="tablink-num active w-100 h-100" onclick="openService(event, 'NameNumerology')">
                                <img src="{{ asset('frontend/assests/images/hero-section/name-num-icon.svg') }}"
                                    alt="name icon">
                                <p class="tab-responsive-text">Name Numerology</p>
                            </button>
                        </div>
                        <div class="col-3 p-1">
                            <button class="tablink-num w-100 h-100" onclick="openService(event, 'MobileNumerology')">
                                <img src="{{ asset('frontend/assests/images/hero-section/mobile-num-icon.svg') }}"
                                    alt="mobile icon">
                                <p class="tab-responsive-text">Mobile Numerology</p>
                            </button>
                        </div>
                        <div class="col-3 p-1">
                            <button class="tablink-num w-100 h-100" onclick="openService(event, 'AdvancedNumerology')">
                                <img src="{{ asset('frontend/assests/images/hero-section/advanced-num-icon.svg') }}"
                                    alt="advanced icon">
                                <p class="tab-responsive-text">Advanced Numerology</p>
                            </button>
                        </div>
                        <div class="col-3 p-1">
                            <button class="tablink-num w-100 h-100" onclick="openService(event, 'BusinessNumerology')">
                                <img src="{{ asset('frontend/assests/images/hero-section/business-num-icon.svg') }}"
                                    alt="business icon">
                                <p class="tab-responsive-text">Business Numerology</p>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Name Numerology Tab -->
    <div id="NameNumerology" class="tabcontent-num">
        <div class="numerology-form-wrapper pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-12">
                        <div class="form-img-wrapper mb-md-0 mb-4">
                            <img src="{{ asset('frontend/assests/images/hero-section/name-numrology-dp.png') }}"
                                alt="business icon" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-8 col-12">
                        <h3 class="form-heading mb-1">Name Numerology</h3>
                        <p class="tab-info-content">Name Numerology focuses on the significance of names and their
                            vibrations. It can provide insights into personality, life purpose, and destiny based on the
                            letters in your name.</p>
                        <form action="{{ route('name_numerology.store') }}" method="POST">
                            @csrf
                            <div class="form-container justify-content-between mt-2">
                                <div class="row mt-4">
                                    <input type="hidden" class="form-control numerology_type" name="numerology_type"
                                        value="" readonly>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="name">First Name</label>
                                        <input class="numerology-service-labels" type="text" name="name"
                                            id="first_name" required onblur="capitalizeFirstLetter(this)">
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="name">Last Name</label>
                                        <input class="numerology-service-labels" type="text" name=""
                                            id="">
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="dob">D.O.B</label>
                                        <input class="numerology-service-labels" type="date" name="dob" required>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="birth-city">Birth Town/City</label>
                                        <select class="numerology-service-labels" name="birth-city" class="mb-4">
                                            <option value="">Select</option>
                                            <option value="city1">City 1</option>
                                            <option value="city2">City 2</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="email">Email</label>
                                        <input class="numerology-service-labels" type="email" name="email" required>
                                    </div>

                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label">Gender</label>
                                        <div class="radio-group-custom d-flex gap-4 custom-mb-gender">
                                            <input class="numerology-service-labels" type="radio" name="gender"
                                                value="male" checked>
                                            <label class="select-radio-custom">Male</label>
                                            <input class="numerology-service-labels" type="radio" name="gender"
                                                value="female">
                                            <label class="select-radio-custom">Female</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="time">Time</label>
                                        <div class="time-input d-flex align-items-start">
                                            <input class="numerology-service-labels" type="text" name="hours"
                                                placeholder="HH">
                                            <input class="numerology-service-labels" type="text" name="minutes"
                                                placeholder="MM">
                                            <div class="am-pm d-flex gap-2">
                                                <input class="numerology-service-labels" type="radio" name="ampm"
                                                    value="am" checked>
                                                <label class="select-radio-custom">AM</label>
                                                <input class="numerology-service-labels" type="radio" name="ampm"
                                                    value="pm">
                                                <label class="select-radio-custom">PM</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="language">Select Language</label>
                                        <select class="numerology-service-labels" name="language">
                                            <option value="">Select</option>
                                            <option value="english">English</option>
                                            <option value="spanish">Spanish</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="addons">ADD-ONS</label>
                                        <input class="numerology-service-labels" type="text" name="addons">
                                    </div>

                                    <div class="submit-btn-numerology mt-4">
                                        <button type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>

                    </form>
                </div>
            </div>

        </div>



        <div class="tab-info-description pb-5 pt-5">
            <div class="container">
                <div class="row gx-5 align-items-center">
                    <h3 class="tab-info-heading mb-2">
                        What is <span>Name</span> Numerology?
                    </h3>
                    <p class="tab-info-content pb-5">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type
                        and scrambled it to make a type specimen book. It has survived not only five centuries, but
                        also the
                        leap into electronic typesetting, remaining essentially unchanged. It was popularised in the
                        1960s
                        with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                        desktop
                        publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                    <div class="col-lg-4 col-md-5 col-12">
                        <div class="mb-md-0 mb-4">
                            <img src="{{ asset('frontend/assests/images/hero-section/name-numerology-info.png') }}"
                                alt="business icon" class="img-fluid">
                        </div>

                    </div>
                    <div class="col-lg-8 col-md-7 col-12">
                        <h3 class="tab-info-heading mb-2">
                            <span>Name</span> Numerology is an occult technology?
                        </h3>
                        <p class="tab-info-content">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley
                            of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries,
                            but also the leap into electronic typesetting, remaining essentially unchanged. It was
                            popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages,
                            and more recently with desktop publishing software like Aldus PageMaker including
                            versions of
                            Lorem Ipsum.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Numerology Tab -->
    <div id="MobileNumerology" class="tabcontent-num">
        <div class="numerology-form-wrapper pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-12">
                        <div class="form-img-wrapper mb-md-0 mb-4">
                            <img src="{{ asset('frontend/assests/images/hero-section/mobile-numerology-dp.png') }}"
                                alt="business icon" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-8 col-12">
                        <h3 class="form-heading mb-1">Mobile Numerology</h3>
                        <p class="tab-info-content">Mobile Numerology interprets the influence your mobile number has on
                            your life. Each digit has a specific significance that affects your destiny.</p>
                        <form>
                            <div class="form-container justify-content-between mt-2">
                                <div class="row mt-4">
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="">Phone</label>
                                        <input class="numerology-service-labels" type="tel" required>

                                    </div>
                                    <div class="col-lg-6 col-12">

                                        <label class="custom-form-label" for="dob">D.O.B</label>
                                        <input class="numerology-service-labels" type="date" name="dob">
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="email">Email</label>
                                        <input class="numerology-service-labels" type="email" name="email" required>
                                    </div>

                                    <div class="submit-btn-numerology mt-4">
                                        <button type="submit">Add Product</button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-info-description pb-5 pt-5">
            <div class="container">
                <div class="row gx-5 align-items-center">
                    <h3 class="tab-info-heading mb-2">
                        What is <span>Mobile</span> Numerology?
                    </h3>
                    <p class="tab-info-content pb-5">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type
                        and scrambled it to make a type specimen book. It has survived not only five centuries, but
                        also the
                        leap into electronic typesetting, remaining essentially unchanged. It was popularised in the
                        1960s
                        with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                        desktop
                        publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                    <div class="col-lg-4 col-md-5 col-12">
                        <div class="mb-md-0 mb-4">
                            <img src="{{ asset('frontend/assests/images/hero-section/name-numerology-info.png') }}"
                                alt="business icon" class="img-fluid">
                        </div>

                    </div>
                    <div class="col-lg-8 col-md-7 col-12">
                        <h3 class="tab-info-heading mb-2">
                            <span>Mobile</span> Numerology is an occult technology?
                        </h3>
                        <p class="tab-info-content">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley
                            of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries,
                            but also the leap into electronic typesetting, remaining essentially unchanged. It was
                            popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages,
                            and more recently with desktop publishing software like Aldus PageMaker including
                            versions of
                            Lorem Ipsum.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Advanced Numerology Tab -->
    <div id="AdvancedNumerology" class="tabcontent-num">
        <div class="numerology-form-wrapper pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-12">
                        <div class="form-img-wrapper mb-md-0 mb-4">
                            <img src="{{ asset('frontend/assests/images/hero-section/advanced-numerology-dp.png') }}"
                                alt="business icon" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-8 col-12">
                        <h3 class="form-heading mb-1">Advanced Numerology</h3>
                        <p class="tab-info-content">Advanced Numerology delves deeper into the numbers associated with your
                            life, revealing insights into various areas such as career, relationships, and personal growth.
                        </p>
                        <form>
                            <div class="form-container justify-content-between mt-2">
                                <div class="row mt-4">
                                    <div class="col-lg-6 col-12"> <label class="custom-form-label"
                                            for="">Phone</label>
                                        <input class="numerology-service-labels" type="tel" name="mobile" required>
                                    </div>
                                    <div class="col-lg-6 col-12"> <label class="custom-form-label"
                                            for="">D.O.B</label>
                                        <input class="numerology-service-labels" type="date" name="dob">
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="email">Email</label>
                                        <input class="numerology-service-labels" type="email" name="email" required>
                                    </div>
                                    <div class="col-12"> <label class="custom-form-label">Area Of Concern</label>
                                        <div
                                            class="radio-group-custom-2 gap-2 d-flex custom-mb-gender flex-column align-items-start mt-3">
                                            <label class="custom-form-label "> <input type="checkbox" name="option1"
                                                    class="me-1 checkbox-cutom">Health </label> <label
                                                class="custom-form-label"> <input type="checkbox" name="option2"
                                                    class="me-1 checkbox-cutom">Relationship </label> <label
                                                class="custom-form-label"> <input type="checkbox" name="option3"
                                                    class="me-1 checkbox-cutom">Career </label> <label
                                                class="custom-form-label"> <input type="checkbox" name="option4"
                                                    class="me-1 checkbox-cutom">Money </label> <label
                                                class="custom-form-label"> <input type="checkbox" name="option5"
                                                    class="me-1 checkbox-cutom">Job </label>
                                        </div>
                                    </div>
                                    <div class="submit-btn-numerology mt-4"> <button type="submit">Add Product</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-info-description pb-5 pt-5">
            <div class="container">
                <div class="row gx-5 align-items-center">
                    <h3 class="tab-info-heading mb-2">
                        What is <span>Advanced</span> Numerology?
                    </h3>
                    <p class="tab-info-content pb-5">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type
                        and scrambled it to make a type specimen book. It has survived not only five centuries, but
                        also the
                        leap into electronic typesetting, remaining essentially unchanged. It was popularised in the
                        1960s
                        with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                        desktop
                        publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                    <div class="col-lg-4 col-md-5 col-12">
                        <div class="mb-md-0 mb-4">
                            <img src="{{ asset('frontend/assests/images/hero-section/name-numerology-info.png') }}"
                                alt="business icon" class="img-fluid">
                        </div>

                    </div>
                    <div class="col-lg-8 col-md-7 col-12">
                        <h3 class="tab-info-heading mb-2">
                            <span>Advanced</span> Numerology is an occult technology?
                        </h3>
                        <p class="tab-info-content">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley
                            of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries,
                            but also the leap into electronic typesetting, remaining essentially unchanged. It was
                            popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages,
                            and more recently with desktop publishing software like Aldus PageMaker including
                            versions of
                            Lorem Ipsum.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Business Numerology Tab -->
    <div id="BusinessNumerology" class="tabcontent-num">
        <div class="numerology-form-wrapper pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-12">
                        <div class="form-img-wrapper mb-md-0 mb-4">
                            <img src="{{ asset('frontend/assests/images/hero-section/business-numerology-dp.png') }}"
                                alt="business icon" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-8 col-12">
                        <h3 class="form-heading mb-1">Business Numerology</h3>
                        <p class="tab-info-content">Business Numerology examines the vibrational energy of business names,
                            addresses, and critical numbers impacting your enterprise's success.</p>
                        <form>
                            <div class="form-container justify-content-between mt-2">
                                <div class="row mt-4">
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="first_name">First Name</label>
                                        <input class="numerology-service-labels" type="text" name="first_name">
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="last_name">Last Name</label>
                                        <input class="numerology-service-labels" type="text" name="last_name">
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="mobile">Phone</label>
                                        <input class="numerology-service-labels" type="tel" name="mobile" required>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="email">Email</label>
                                        <input class="numerology-service-labels" type="email" name="email" required>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="business_name">Business Name</label>
                                        <input class="numerology-service-labels" type="text" name="business_name">
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="business_type">Type Of Business</label>
                                        <select class="numerology-service-labels" id="business-type" name="business_type"
                                            class="mb-4">
                                            <option value="">Select</option>
                                            <option value="service">Service</option>
                                            <option value="retail">Retail</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="dob">D.O.B</label>
                                        <input class="numerology-service-labels" type="date" id="dob"
                                            name="dob">
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label">Do You Have A Partner?</label>
                                        <select class="numerology-service-labels" id="partner-selection"
                                            onchange="togglePartnerDetails()" class="mb-4">
                                            <option value="">Select</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                    </div>

                                    <div id="partner-details" style="display: none;" class="row">
                                        <h5 class="services-subheading mb-3">Partner Details</h5>
                                        <div class="col-lg-6 col-12">
                                            <label class="custom-form-label">Partner First Name</label>
                                            <input class="numerology-service-labels" type="text"
                                                name="partner_first_name">
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <label class="custom-form-label">Partner Last Name</label>
                                            <input class="numerology-service-labels" type="text"
                                                name="partner_last_name">
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <label class="custom-form-label">D.O.B</label>
                                            <input class="numerology-service-labels" type="date" name="partner_dob">
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <label class="custom-form-label">Phone Number</label>
                                            <input class="numerology-service-labels" type="tel" name="partner_mobile"
                                                required>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <label class="custom-form-label" for="email">Email</label>
                                            <input class="numerology-service-labels" type="email" name="email"
                                                required>
                                        </div>
                                    </div>

                                    <div class="submit-btn-numerology mt-4">
                                        <button type="submit">Add Product</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-info-description pb-5 pt-5">
            <div class="container">
                <div class="row gx-5 align-items-center">
                    <h3 class="tab-info-heading mb-2">
                        What is <span>Business</span> Numerology?
                    </h3>
                    <p class="tab-info-content pb-5">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type
                        and scrambled it to make a type specimen book. It has survived not only five centuries, but
                        also the
                        leap into electronic typesetting, remaining essentially unchanged. It was popularised in the
                        1960s
                        with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                        desktop
                        publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                    <div class="col-lg-4 col-md-5 col-12">
                        <div class="mb-md-0 mb-4">
                            <img src="{{ asset('frontend/assests/images/hero-section/name-numerology-info.png') }}"
                                alt="business icon" class="img-fluid">
                        </div>

                    </div>
                    <div class="col-lg-8 col-md-7 col-12">
                        <h3 class="tab-info-heading mb-2">
                            <span>Business</span> Numerology is an occult technology?
                        </h3>
                        <p class="tab-info-content">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley
                            of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries,
                            but also the leap into electronic typesetting, remaining essentially unchanged. It was
                            popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages,
                            and more recently with desktop publishing software like Aldus PageMaker including
                            versions of
                            Lorem Ipsum.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- js -->
    <script>
        function openService(evt, serviceName) {
            var i, tabcontent, tablinks;

            // Hide all content by default
            tabcontent = document.getElementsByClassName("tabcontent-num");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            // Remove active class from all tabs
            tablinks = document.getElementsByClassName("tablink-num");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            // Show the specific tab content
            document.getElementById(serviceName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Toggle Partner Details Visibility
        function togglePartnerDetails() {
            var select = document.getElementById("partner-selection");
            var partnerDetails = document.getElementById("partner-details");
            if (select.value === "yes") {
                partnerDetails.style.display = "block";
            } else {
                partnerDetails.style.display = "none";
            }
        }

        // Open the first tab by default
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelector('.tablink-num.active').click(); // Open the first tab by default
        });
    </script>
@endsection
