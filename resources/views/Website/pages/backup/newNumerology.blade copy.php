<!-- {{-- @extends('Website.layouts.app')
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
                <!-- <div class="services-tabs mb-5">
                    <div class="row">
                        <div class="col-3 p-1">
                            <button data-tab-target=".tab-content.home" data-type="1"
                                class="tablink-num active w-100 h-100"
                                onclick="openService(event, 'NameNumerology'); fetchNumerologyType(1)">
                                <img src="{{ asset('frontend/assests/images/hero-section/name-num-icon.svg') }}"
                                    alt="name icon">
                                <p class="tab-responsive-text">Name Numerology</p>
                            </button>
                        </div>
                        <div class="col-3 p-1">
                            <button data-tab-target=".tab-content.mobile" data-type="2" class="tablink-num w-100 h-100"
                                onclick="openService(event, 'MobileNumerology');document.getElementById('name');">
                                <img src="{{ asset('frontend/assests/images/hero-section/mobile-num-icon.svg') }}"
                                    alt="mobile icon">
                                <p class="tab-responsive-text">Mobile Numerology</p>
                            </button>
                        </div>

                        <div class="col-3 p-1">
                            <button data-tab-target=".tab-content.advance" data-type="3" class="tablink-num w-100 h-100"
                                onclick="openService(event, 'AdvancedNumerology'); document.getElementById('name');">
                                <img src="{{ asset('frontend/assests/images/hero-section/advanced-num-icon.svg') }}"
                                    alt="advanced icon">
                                <p class="tab-responsive-text">Advanced Numerology</p>
                            </button>
                        </div>

                        <div class="col-3 p-1">
                            <button data-tab-target=".tab-content.business" data-type="4" class="tablink-num w-100 h-100"
                                onclick="openService(event, 'BusinessNumerology'); document.getElementById('name');">
                                <img src="{{ asset('frontend/assests/images/hero-section/business-num-icon.svg') }}"
                                    alt="business icon">
                                <p class="tab-responsive-text">Business Numerology</p>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> -->

    <!-- Name Numerology Tab -->
    <!-- <div id="NameNumerology" class="tabcontent-num">
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
                            <input type="text" class="form-control numerology_type" name="numerology_type" value=""
                                readonly>
                            <div class="form-container justify-content-between mt-2">
                                <div class="row">
                                    <input type="hidden" class="form-control numerology_type" name="numerology_type"
                                        value="" readonly>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="name">Name</label>
                                        <input class="numerology-service-labels" type="text" name="name"
                                            id="first_name" required onblur="capitalizeFirstLetter(this)">
                                        <label class="custom-form-label" for="dob">D.O.B</label>
                                        <input class="numerology-service-labels" type="date" name="dob" required>
                                        <label class="custom-form-label" for="birth-city">Birth Town/City</label>
                                        <select class="numerology-service-labels" name="birth-city" class="mb-4">
                                            <option value="">Select</option>
                                            <option value="city1">City 1</option>
                                            <option value="city2">City 2</option>
                                        </select>
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
                                        <label class="custom-form-label" for="language">Select Language</label>
                                        <select class="numerology-service-labels" name="language">
                                            <option value="">Select</option>
                                            <option value="english">English</option>
                                            <option value="spanish">Spanish</option>
                                        </select>
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
                    <div class="col-md-4 col-12">
                        <div class="mb-md-0 mb-4">
                            <img src="{{ asset('frontend/assests/images/hero-section/name-numerology-info.png') }}"
                                alt="business icon" class="img-fluid">
                        </div>

                    </div>
                    <div class="col-md-8 col-12">
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
    </div> -->

    <!-- Mobile Numerology Tab -->
    <!-- <div id="MobileNumerology" class="tabcontent-num">
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
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="">Phone</label>
                                        <input class="numerology-service-labels" type="tel" required>

                                    </div>
                                    <div class="col-lg-6 col-12">

                                        <label class="custom-form-label" for="dob">D.O.B</label>
                                        <input class="numerology-service-labels" type="date" name="dob">
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
                    <div class="col-md-4 col-12">
                        <div class="mb-md-0 mb-4">
                            <img src="{{ asset('frontend/assests/images/hero-section/name-numerology-info.png') }}"
                                alt="business icon" class="img-fluid">
                        </div>

                    </div>
                    <div class="col-md-8 col-12">
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
    </div> -->

    <!-- Advanced Numerology Tab -->
    <!-- <div id="AdvancedNumerology" class="tabcontent-num">
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
                                <div class="row">
                                    <div class="col-lg-6 col-12"> <label class="custom-form-label"
                                            for="">Phone</label> <input class="numerology-service-labels"
                                            type="tel" name="mobile" required> </div>
                                    <div class="col-lg-6 col-12"> <label class="custom-form-label"
                                            for="">D.O.B</label> <input class="numerology-service-labels"
                                            type="date" name="dob"> </div>
                                    <div class="col-12"> <label class="custom-form-label">Area Of Concern</label>
                                        <div class="radio-group-custom-2 gap-4 d-flex custom-mb-gender"> <label
                                                class="custom-form-label "> <input type="checkbox" name="option1"
                                                    class="me-1 checkbox-cutom">Health </label> <label
                                                class="custom-form-label"> <input type="checkbox" name="option2"
                                                    class="me-1 checkbox-cutom">Relationship </label> <label
                                                class="custom-form-label"> <input type="checkbox" name="option3"
                                                    class="me-1 checkbox-cutom">Career </label> <label
                                                class="custom-form-label"> <input type="checkbox" name="option4"
                                                    class="me-1 checkbox-cutom">Money </label> <label
                                                class="custom-form-label"> <input type="checkbox" name="option5"
                                                    class="me-1 checkbox-cutom">Job </label> </div>
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
                    <div class="col-md-4 col-12">
                        <div class="mb-md-0 mb-4">
                            <img src="{{ asset('frontend/assests/images/hero-section/name-numerology-info.png') }}"
                                alt="business icon" class="img-fluid">
                        </div>

                    </div>
                    <div class="col-md-8 col-12">
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
    </div> -->

    <!-- Business Numerology Tab -->
    <!-- <div id="BusinessNumerology" class="tabcontent-num">
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
                                <div class="row">
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

                                    <div id="partner-details" style="display: none;" class="col-12">
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
                    <div class="col-md-4 col-12">
                        <div class="mb-md-0 mb-4">
                            <img src="{{ asset('frontend/assests/images/hero-section/name-numerology-info.png') }}"
                                alt="business icon" class="img-fluid">
                        </div>

                    </div>
                    <div class="col-md-8 col-12">
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
    </div> -->

    <!-- js -->
    <!-- <script>
        $(document).ready(function() {
            $('[data-tab-target]').on('click', function() {
                var target = $(this).data('tab-target');
                var type = $(this).data('type');
                console.log('Setting numerology_type to:', type);

                $('.numerology_type').val(type);
                $.ajax({
                    url: '/numerology/type/' + type,
                    method: 'GET',
                    success: function(data) {
                        console.log('Fetched data:', data);

                        if (data && data.numerology) {
                            $('.package_amount').val(data.numerology.packages_amount || '');
                            console.warn('Package Amount (from data):', data.numerology
                                .packages_amount);
                        } else {
                            console.warn(
                                'No numerology data found or data structure is incorrect');
                            $('.package_amount').text('');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching numerology type:', error);
                    }
                });

                // Show the selected tab content
                $('[data-tab-content]').removeClass('active');
                $('[data-tab-target]').removeClass('active');
                $(this).addClass('active');
                $(target).addClass('active');
            });

            // Trigger click on the first tab on page load
            $('[data-tab-target]').first().trigger('click');
        });
    </script>

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
@endsection --}} --> 
@extends('Website.layouts.app')
@section('content')
    <section class="services-forms">
        <div class="container">
            <div class="services">
                <div class="intro-content">
                    <h2 class="services-heading mb-2">Products</h2>
                    <p class="services-para mb-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi, nobis
                        dolores. Voluptatibus explicabo exercitationem laudantium blanditiis voluptates molestias vel maxime
                        temporibus dicta!</p>
                    <div><img src="{{ asset('frontend/assests/images/hero-section/gold-adorn.svg') }}" alt="icon"></div>
                </div>

                <!-- Display success message if available -->
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
                <!-- Tab Links -->
                <div class="services-tabs mb-5">
                    <div class="row">
                        <div class="col-3 p-1">
                            <button data-tab-target="#NameNumerology" data-type="1" class="tablink-num active w-100 h-100">
                                <img src="{{ asset('frontend/assests/images/hero-section/name-num-icon.svg') }}"
                                    alt="name icon">
                                <p class="tab-responsive-text">Name Numerology</p>
                            </button>
                        </div>
                        <div class="col-3 p-1">
                            <button data-tab-target="#MobileNumerology" data-type="2" class="tablink-num w-100 h-100">
                                <img src="{{ asset('frontend/assests/images/hero-section/mobile-num-icon.svg') }}"
                                    alt="mobile icon">
                                <p class="tab-responsive-text">Mobile Numerology</p>
                            </button>
                        </div>
                        <div class="col-3 p-1">
                            <button data-tab-target="#AdvancedNumerology" data-type="3" class="tablink-num w-100 h-100">
                                <img src="{{ asset('frontend/assests/images/hero-section/advanced-num-icon.svg') }}"
                                    alt="advanced icon">
                                <p class="tab-responsive-text">Advanced Numerology</p>
                            </button>
                        </div>
                        <div class="col-3 p-1">
                            <button data-tab-target="#BusinessNumerology" data-type="4" class="tablink-num w-100 h-100">
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
    {{-- <div id="NameNumerology" class="tabcontent-num">
        <div class="numerology-form-wrapper pb-5">
            <div class="container">
                <!-- Form Content -->
                <h3 class="form-heading mb-1">Name Numerology</h3>
                <form action="{{ route('name_numerology.store') }}" method="POST">
                    @csrf
                    <input type="text" class="form-control numerology_type" name="numerology_type" value=""
                        readonly>
                    <!-- Other form inputs -->
                    <div class="submit-btn-numerology mt-4">
                        <button type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}

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
                            <input type="text" class="form-control numerology_type" name="numerology_type" value=""
                                readonly>
                            <div class="form-container justify-content-between mt-2">
                                <div class="row">
                                    <input type="hidden" class="form-control numerology_type" name="numerology_type"
                                        value="" readonly>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="first_name">Name</label>
                                        <input class="numerology-service-labels" type="text" id="first_name"
                                            name="first_name" required oninput="capitalizeFirstLetter(this)">
                                        <label class="custom-form-label" for="dob">D.O.B</label>
                                        <input class="numerology-service-labels" type="date" name="dob" required>
                                        <label class="custom-form-label" for="birth-city">Birth Town/City</label>
                                        <select class="numerology-service-labels" name="birth-city" class="mb-4">
                                            <option value="">Select</option>
                                            <option value="city1">City 1</option>
                                            <option value="city2">City 2</option>
                                        </select>
                                        <label class="custom-form-label" for="email">Email</label>
                                        <input class="numerology-service-labels" type="email" name="email" required>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label">Gender</label>
                                        <div class="radio-group-custom d-flex gap-4 custom-mb-gender">
                                            <input class="numerology-service-labels" type="radio" id="gender_male"
                                                name="gender" value="Male" required>
                                            <label class="select-radio-custom">Male</label>
                                            <input class="numerology-service-labels" type="radio" id="gender_female"
                                                name="gender" value="Female" required>
                                            <label class="select-radio-custom">Female</label>
                                        </div>
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
                                        <label class="custom-form-label" for="language">Select Language</label>
                                        <select class="numerology-service-labels" name="language">
                                            <option value="">Select</option>
                                            <option value="english">English</option>
                                            <option value="spanish">Spanish</option>
                                        </select>
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
                    <div class="col-md-4 col-12">
                        <div class="mb-md-0 mb-4">
                            <img src="{{ asset('frontend/assests/images/hero-section/name-numerology-info.png') }}"
                                alt="business icon" class="img-fluid">
                        </div>

                    </div>
                    <div class="col-md-8 col-12">
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
                            <input type="text" class="form-control numerology_type" name="numerology_type"
                                value="" readonly>
                            <div class="form-container justify-content-between mt-2">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="">Phone</label>
                                        <input class="numerology-service-labels" type="tel" required>

                                    </div>
                                    <div class="col-lg-6 col-12">

                                        <label class="custom-form-label" for="dob">D.O.B</label>
                                        <input class="numerology-service-labels" type="date" name="dob">
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
                    <div class="col-md-4 col-12">
                        <div class="mb-md-0 mb-4">
                            <img src="{{ asset('frontend/assests/images/hero-section/name-numerology-info.png') }}"
                                alt="business icon" class="img-fluid">
                        </div>

                    </div>
                    <div class="col-md-8 col-12">
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
                            <input type="text" class="form-control numerology_type" name="numerology_type"
                                value="" readonly>
                            <div class="form-container justify-content-between mt-2">
                                <div class="row">
                                    <div class="col-lg-6 col-12"> <label class="custom-form-label"
                                            for="">Phone</label> <input class="numerology-service-labels"
                                            type="tel" name="mobile" required> </div>
                                    <div class="col-lg-6 col-12"> <label class="custom-form-label"
                                            for="">D.O.B</label> <input class="numerology-service-labels"
                                            type="date" name="dob"> </div>
                                    <div class="col-12"> <label class="custom-form-label">Area Of Concern</label>
                                        <div class="radio-group-custom-2 gap-4 d-flex custom-mb-gender"> <label
                                                class="custom-form-label "> <input type="checkbox" name="option1"
                                                    class="me-1 checkbox-cutom">Health </label> <label
                                                class="custom-form-label"> <input type="checkbox" name="option2"
                                                    class="me-1 checkbox-cutom">Relationship </label> <label
                                                class="custom-form-label"> <input type="checkbox" name="option3"
                                                    class="me-1 checkbox-cutom">Career </label> <label
                                                class="custom-form-label"> <input type="checkbox" name="option4"
                                                    class="me-1 checkbox-cutom">Money </label> <label
                                                class="custom-form-label"> <input type="checkbox" name="option5"
                                                    class="me-1 checkbox-cutom">Job </label> </div>
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
                    <div class="col-md-4 col-12">
                        <div class="mb-md-0 mb-4">
                            <img src="{{ asset('frontend/assests/images/hero-section/name-numerology-info.png') }}"
                                alt="business icon" class="img-fluid">
                        </div>

                    </div>
                    <div class="col-md-8 col-12">
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
                            <input type="text" class="form-control numerology_type" name="numerology_type"
                                value="" readonly>
                            <div class="form-container justify-content-between mt-2">
                                <div class="row">
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
                                            onchange="togglePartnerDetails();" class="mb-4">
                                            <option value="">Select</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                    </div>

                                    <div id="partner-details" style="display: none;" class="col-12">
                                        <h5 class="services-subheading mb-3">Partner Details</h5>
                                        <div id="partners-container">
                                            <!-- Partner fields will be added here dynamically -->
                                        </div>
                                        <button id="add-partner-btn" class="btn btn-primary mt-2"
                                            style="display: none;">Add More Partner</button>
                                        <div id="partner-warning" style="color: red; display: none;" class="mt-2">
                                            You can only add up to 5 partners.
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
                    <div class="col-md-4 col-12">
                        <div class="mb-md-0 mb-4">
                            <img src="{{ asset('frontend/assests/images/hero-section/name-numerology-info.png') }}"
                                alt="business icon" class="img-fluid">
                        </div>

                    </div>
                    <div class="col-md-8 col-12">
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function openService(evt, serviceName) {
            // Hide all tab content by default
            $('.tabcontent-num').hide();

            // Remove active class from all tabs
            $('[data-tab-target]').removeClass('active');

            // Show the specific tab content
            $('#' + serviceName).show();
            $(evt.currentTarget).addClass('active');
        }

        $(document).ready(function() {
            // Hide all tab content except for the first tab
            $('.tabcontent-num').hide();
            $('.tabcontent-num').first().show();

            // Event listener for tab button clicks
            $('[data-tab-target]').on('click', function(evt) {
                var target = $(this).data('tab-target');
                var type = $(this).data('type');
                openService(evt, target.substring(1)); // Open the service tab

                // Set value for numerology_type to type
                $('.numerology_type').val(type);
                $.ajax({
                    url: '/numerology/type/' + type,
                    method: 'GET',
                    success: function(data) {
                        console.log('Fetched data:', data);
                        if (data && data.numerology) {
                            $('.package_amount').val(data.numerology.packages_amount || '');
                            console.warn('Package Amount (from data):', data.numerology
                                .packages_amount);
                        } else {
                            console.warn(
                                'No numerology data found or data structure is incorrect');
                            $('.package_amount').text('');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching numerology type:', error);
                    }
                });
            });

            // Trigger click on the first tab on page load
            $('[data-tab-target]').first().trigger('click');
        });

        // Toggle Partner Details Visibility
        // function togglePartnerDetails() {
        //     var select = document.getElementById("partner-selection");
        //     var partnerDetails = document.getElementById("partner-details");
        //     partnerDetails.style.display = select.value === "yes" ? "block" : "none";
        // }
    </script>

    {{-- partner section --}}
    <script>
        let partnerCount = 0; // Track the number of partners added

        function togglePartnerDetails() {
            const select = document.getElementById("partner-selection");
            const partnerDetails = document.getElementById("partner-details");
            const addButton = document.getElementById("add-partner-btn"); // Get Add Partner button

            partnerDetails.style.display = select.value === "yes" ? "block" : "none";

            // If "No" is selected, reset and clear partner details
            if (select.value === "no") {
                partnerCount = 0;
                document.getElementById("partners-container").innerHTML = ''; // Clear container
                document.getElementById("partner-warning").style.display = "none"; // Hide warning
                addButton.style.display = "none"; // Hide Add Partner button
            } else if (select.value === "yes" && partnerCount === 0) {
                // Automatically add the first partner details if first time Yes is selected
                addPartnerFields();
                addButton.style.display = "block"; // Show Add Partner button after first partner
            }
        }

        function addPartnerFields() {
            if (partnerCount < 5) { // Limit to 5 partners
                partnerCount++;
                const partnerHtml = `
                    <div class="partner-details mb-3" id="partner-${partnerCount}">
                        <h5 class="my-2">Partner ${partnerCount}</h5>
                        <div class="col-lg-6 col-12">
                            <label class="custom-form-label">Partner First Name</label>
                            <input class="numerology-service-labels" type="text" name="partner_first_name_${partnerCount}">
                        </div>
                        <div class="col-lg-6 col-12">
                            <label class="custom-form-label">Partner Last Name</label>
                            <input class="numerology-service-labels" type="text" name="partner_last_name_${partnerCount}">
                        </div>
                        <div class="col-lg-6 col-12">
                            <label class="custom-form-label">D.O.B</label>
                            <input class="numerology-service-labels" type="date" name="partner_dob_${partnerCount}">
                        </div>
                        <div class="col-lg-6 col-12">
                            <label class="custom-form-label">Phone Number</label>
                            <input class="numerology-service-labels" type="tel" name="partner_mobile_${partnerCount}" required>
                        </div>
                        <button class="btn btn-danger btn-sm float-end" onclick="removePartner(${partnerCount})" ${partnerCount === 1 ? 'style="display:none;"' : ''}>Delete</button>
                    </div>
                `;
                document.getElementById("partners-container").insertAdjacentHTML('beforeend', partnerHtml);
                document.getElementById("partner-warning").style.display = "none"; // Hide warning if under limit
                // If the partner is the first entry, hide the delete button
                if (partnerCount === 1) {
                    document.querySelector(`#partner-${partnerCount} .btn-danger`).style.display = 'none';
                }
            } else {
                document.getElementById("partner-warning").style.display = "block"; // Show warning
            }
        }

        function removePartner(partnerId) {
            const partnerDiv = document.getElementById(`partner-${partnerId}`);
            if (partnerDiv) {
                partnerDiv.remove();
                partnerCount--; // Decrease count when a partner is removed
                adjustDeleteButtons(); // Update visibility of delete buttons
                checkForPartnerFields(); // Update warning visibility
            }
        }

        function adjustDeleteButtons() {
            // Hide the delete button for the first partner if it's still there
            if (partnerCount === 1) {
                document.querySelector(`#partner-1 .btn-danger`).style.display = 'none';
            } else if (partnerCount === 0) {
                document.getElementById("add-partner-btn").style.display =
                    "none"; // Hide the Add Partner button if no partners left
            }
        }

        function checkForPartnerFields() {
            // Hide warning if the partner count is less than the maximum
            if (partnerCount < 5) {
                document.getElementById("partner-warning").style.display = "none";
            }
        }

        // Attach event listener to the "Add More Partner" button
        document.getElementById('add-partner-btn').addEventListener('click', function() {
            addPartnerFields(); // Add more partner fields when the button is clicked
        });
    </script>
@endsection
