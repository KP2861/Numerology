@extends('Website.layouts.app')

@section('content')
<!-- Include Select2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

<!-- Bootstrap Bundle with Popper JS CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<section class="services-forms">
    <div class="container">
        <div class="services">
            <div class="intro-content">
                <h2 class="services-heading mb-2">Services</h2>
                <p class="services-para mb-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi, nobis
                    dolores. Voluptatibus explicabo exercitationem laudantium blanditiis voluptates molestias vel maxime
                    temporibus dicta!</p>
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
                <div>
                    <img src="{{ asset('frontend/assests/images/hero-section/gold-adorn.svg') }}" alt="icon">
                </div>
            </div>

            <!-- Tab Links -->
            <div class="services-tabs mb-5">
                <div class="row ">
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

<div id="NameNumerology" class="tabcontent-num" style="display: block;">
    <div class="numerology-form-wrapper pb-5">
        <div class="container">
            <div class="row ">
                <div class="col-md-4 col-12">
                    <div class="form-img-wrapper mb-md-0 mb-4">
                        <img src="{{ asset('frontend/assests/images/hero-section/name-numrology-dp.png') }}"
                            alt="Name Numerology" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-8 col-12">
                    <h3 class="form-heading mb-1">Name Numerology</h3>
                    <p class="tab-info-content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi,
                        nobis dolores. Voluptatibus explicabo exercitationem laudantium blanditiis voluptates molestias
                        vel maxime temporibus dicta!</p>
                    <form action="{{ route('name_numerology.store') }}" method="POST">
                        @csrf
                        <div class="form-container justify-content-between mt-2">
                            <div class="row">
                                <input type="text" class="form-control numerology_type" name="numerology_type"
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
    <div class="tab-info-description pb-4 pt-5">
        <div class="container">
            <div class="row gx-5 align-items-center">
                <h3 class="tab-info-heading mb-2">What is <span>Numerology</span>?</h3>
                <p class="tab-info-content pb-5">Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry...</p>
            </div>
        </div>
    </div>
</div>

<div id="MobileNumerology" class="tabcontent-num" style="display: none;">
    <div class="numerology-form-wrapper pb-5">
        <div class="container">
            <div class="row ">
                <div class="col-md-4 col-12 ">
                    <div class="form-img-wrapper mb-md-0 mb-4">
                        <img src="{{ asset('frontend/assests/images/hero-section/mobile-numerology-dp.png') }}"
                            alt="Mobile Numerology" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-8 col-12">
                    <h3 class="form-heading mb-1">Mobile Numerology</h3>
                    <p class="tab-info-content">Lorem ipsum dolor sit amet consectetur, adipisicing elit...</p>
                    <form action="{{ route('phone_numerology.store') }}" method="POST">
                        @csrf
                        <div class="form-container justify-content-between mt-2">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <label class="custom-form-label">Phone</label>
                                    <input class="numerology-service-labels" type="tel" required>
                                    <label class="custom-form-label" for="dob">D.O.B</label>
                                    <input class="numerology-service-labels" type="date" name="dob" required>
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
    <div class="tab-info-description pb-4 pt-5">
        <div class="container">
            <div class="row gx-5 align-items-center">
                <h3 class="tab-info-heading mb-2">What is <span>Mobile Numerology</span>?</h3>
                <p class="tab-info-content pb-5">Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry...</p>
            </div>
        </div>
    </div>
</div>

<div id="AdvancedNumerology" class="tabcontent-num" style="display: none;">
    <div class="numerology-form-wrapper pb-5">
        <div class="container">
            <div class="row ">
                <div class="col-md-4 col-12">
                    <div class="form-img-wrapper mb-md-0 mb-4">
                        <img src="{{ asset('frontend/assests/images/hero-section/advanced-numerology-dp.png') }}"
                            alt="Advanced Numerology" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-8 col-12">
                    <h3 class="form-heading mb-1">Advanced Numerology</h3>
                    <p class="tab-info-content">Lorem ipsum dolor sit amet consectetur, adipisicing elit...</p>
                    <form action="{{ route('advance_numerology.store') }}" method="POST">
                        @csrf
                        <div class="form-container justify-content-between mt-2">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <label class="custom-form-label" for="">Phone</label>
                                    <input class="numerology-service-labels" type="tel" name="mobile" required>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <label class="custom-form-label" for="">D.O.B</label>
                                    <input class="numerology-service-labels" type="date" name="dob" required>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <label class="custom-form-label" for="">Area Of Concern</label>
                                    <input class="numerology-service-labels" type="text" name="area_of_concern"
                                        required>
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
    <div class="tab-info-description pb-4 pt-5">
        <div class="container">
            <div class="row gx-5 align-items-center">
                <h3 class="tab-info-heading mb-2">What is <span>Advanced Numerology</span>?</h3>
                <p class="tab-info-content pb-5">Lorem Ipsum is dummy text of the printing and typesetting industry...
                </p>
            </div>
        </div>
    </div>
</div>

<div id="BusinessNumerology" class="tabcontent-num" style="display: none;">
    <div class="numerology-form-wrapper pb-5">
        <div class="container">
            <div class="row ">
                <div class="col-md-4 col-12 ">
                    <div class="form-img-wrapper mb-md-0 mb-4">
                        <img src="{{ asset('frontend/assests/images/hero-section/business-numerology-dp.png') }}"
                            alt="Business Numerology" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-8 col-12">
                    <h3 class="form-heading mb-1">Business Numerology</h3>
                    <p class="tab-info-content">Lorem ipsum dolor sit amet consectetur, adipisicing elit...</p>
                    <form action="{{ route('business_numerology.store') }}" method="POST">
                        @csrf
                        <div class="form-container justify-content-between mt-2">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <label class="custom-form-label" for="first_name">First Name</label>
                                    <input class="numerology-service-labels" type="text" name="first_name"
                                        id="first_name" required>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <label class="custom-form-label" for="last_name">Last Name</label>
                                    <input class="numerology-service-labels" type="text" name="last_name"
                                        id="last_name" required>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <label class="custom-form-label" for="mobile">Phone</label>
                                    <input class="numerology-service-labels" type="tel" name="mobile" required
                                        id="phone_number">
                                </div>
                                <div class="col-lg-6 col-12">
                                    <label class="custom-form-label" for="business_name">Business Name</label>
                                    <input class="numerology-service-labels" type="text" name="business_name"
                                        required id="business_name">
                                </div>
                                <div class="col-lg-6 col-12">
                                    <label class="custom-form-label" for="business_type">Type Of Business</label>
                                    <select class="numerology-service-labels" id="type_of_business"
                                        name="business_type" required>
                                        <option value="">Select</option>
                                        <option value="business_type1">Type 1</option>
                                        <option value="business_type2">Type 2</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <label class="custom-form-label" for="dob">D.O.B</label>
                                    <input class="numerology-service-labels" type="date" name="dob" required>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <label class="custom-form-label">Do You Have A Partner?</label>
                                    <select class="numerology-service-labels" name="have_partner" id="have_partner"
                                        required onchange="togglePartnerFields()">
                                        <option value="">Select</option>
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                                <h5 class="services-subheading mb-3">Partner Details</h5>
                                <div id="partner-fields-container" style="display: none;">
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="partner_first_name">Partner First
                                            Name</label>
                                        <input class="numerology-service-labels" type="text"
                                            id="partner_first_name" name="partner_first_name">
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="partner_last_name">Partner Last
                                            Name</label>
                                        <input class="numerology-service-labels" type="text"
                                            id="partner_last_name" name="partner_last_name">
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="partner_dob">Partner D.O.B</label>
                                        <input class="numerology-service-labels" type="date" id="partner_dob"
                                            name="partner_dob">
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="partner_phone">Partner Phone
                                            Number</label>
                                        <input class="numerology-service-labels" type="tel" id="partner_phone"
                                            name="partner_phone">
                                    </div>
                                </div>
                                <div class="submit-btn-numerology">
                                    <button type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-info-description pb-4 pt-5">
        <div class="container">
            <div class="row gx-5 align-items-center">
                <h3 class="tab-info-heading mb-2">What is <span>Business Numerology</span>?</h3>
                <p class="tab-info-content pb-5">Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry...</p>
            </div>
        </div>
    </div>
</div>

<script>
    function capitalizeFirstLetter(input) {
        let words = input.value.split(' ');
        for (let i = 0; i < words.length; i++) {
            if (words[i].length > 0) {
                words[i] = words[i][0].toUpperCase() + words[i].substr(1).toLowerCase();
            }
        }
        input.value = words.join(' ');
    }

    function openService(evt, serviceName) {
        let i, tabcontent, tablinks;

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

    // Handle toggling of partner fields
    function togglePartnerFields() {
        const havePartner = document.getElementById('have_partner').value;
        const partnerFieldsContainer = document.getElementById('partner-fields-container');
        const partnerFields = partnerFieldsContainer.querySelectorAll('input');

        if (havePartner === '1') {
            partnerFieldsContainer.style.display = 'block';
            partnerFields.forEach(input => {
                input.setAttribute('required', true);
            });
        } else {
            partnerFieldsContainer.style.display = 'none';
            partnerFields.forEach(input => {
                input.removeAttribute('required');
                input.value = ''; // Clear values when partner is "No"
            });
        }
    }

    $(document).ready(function() {
        // Load business types on page load
        $.ajax({
            url: '{{ route('
            search.business ') }}', // Ensure this route returns all businesses
            method: 'GET',
            success: function(response) {
                var $dropdown = $('#type_of_business');
                $dropdown.empty();
                $dropdown.append('<option value="">Select Business Type</option>');

                $.each(response, function(key, business) {
                    $dropdown.append('<option value="' + business.id + '">' + business
                        .business_name + '</option>');
                });
            },
            error: function() {
                $('#type_of_business').empty();
                $('#type_of_business').append(
                    '<option value="">Failed to load businesses</option>');
            }
        });
    });

    $(document).ready(function() {
        // Load area of struggles on page load
        $.ajax({
            url: '{{ route('
            get.area_of_struggles ') }}',
            type: 'GET',
            success: function(data) {
                let areaOfConcernSelect = $('#area_of_concern');
                areaOfConcernSelect.empty(); // Clear any existing options
                areaOfConcernSelect.append(
                    '<option value="" disabled selected>Select an option</option>');

                // Populate the dropdown with fetched data
                $.each(data, function(index, item) {
                    areaOfConcernSelect.append('<option value="' + item.id + '">' + item
                        .problem + '</option>');
                });
            },
            error: function(xhr, status, error) {
                console.error('Error fetching Area of Struggles:', error);
            }
        });
    });

    // Initially hide partner fields if no partner is selected
    if ($('#have_partner').val() != '1') {
        $('#partner-fields-container').hide();
    }
</script>
@endsection