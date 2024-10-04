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
                            <input type="hidden" class="form-control numerology_type" name="numerology_type" value=""
                                readonly>
                            <div class="form-container justify-content-between mt-2">
                                <div class="row">
                                    <input type="hidden" class="form-control numerology_type" name="numerology_type"
                                        value="" readonly>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="name">First Name</label>
                                        <input class="numerology-service-labels" type="text" name="first_name"
                                            id="first_name" required onblur="capitalizeFirstLetter(this)">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="name">Last Name</label>
                                        <input class="numerology-service-labels" type="text" name="last_name"
                                            id="last_name">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="dob">D.O.B</label>
                                        <input class="numerology-service-labels" type="date" name="dob" required>
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="birth-city">Birth Town/City</label>
                                        <select class="numerology-service-labels" name="birth-city" class="mb-4">
                                            <option value="">Select</option>
                                            <option value="city1">City 1</option>
                                            <option value="city2">City 2</option>
                                        </select>
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="email">Email</label>
                                        <input class="numerology-service-labels" type="email" name="email" required>
                                        <div class="invalid-feedback"></div>
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
                                        <div class="invalid-feedback"></div>
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
                                            <div class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="language">Select Language</label>
                                        <select class="numerology-service-labels" name="language">
                                            <option value="">Select</option>
                                            <option value="english">English</option>
                                            <option value="spanish">Spanish</option>
                                        </select>
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="addons">ADD-ONS</label>
                                        <input class="numerology-service-labels" type="text" name="addons">
                                        <div class="invalid-feedback"></div>
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
                        <form id="numerologyForm" action="{{ route('phone_numerology.store') }}" method="POST">
                            @csrf
                            <input type="hidden" class="form-control numerology_type" name="numerology_type"
                                value="" readonly>
                            <div class="form-container justify-content-between mt-2">
                                <div class="row mt-4 gy-3">
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="">Phone</label>
                                        <input type="tel" class="form-control" id="phone_number" name="phone_number"
                                            value="{{ old('phone_number') }}" required pattern="[0-9]{10}"
                                            maxlength="10" minlength="10"
                                            title="Phone number must be exactly 10 digits and can only contain numbers."
                                            oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="col-lg-6 col-12">

                                        <label class="custom-form-label" for="dob">D.O.B</label>
                                        <input type="date" class="form-control" id="dob" name="dob"
                                            value="{{ old('dob') }}" required>
                                        <div class="invalid-feedback"></div>
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
                                            <div class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="email">Email</label>
                                        <input class="numerology-service-labels" type="email" name="email" required>
                                        <div class="invalid-feedback"></div>
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
                        <form id="numerologyForm" action="{{ route('advance_numerology.store') }}" method="POST">
                            @csrf
                            <input type="hidden" class="form-control numerology_type" name="numerology_type"
                                value="" readonly>
                            <div class="form-container justify-content-between mt-2">
                                <div class="row mt-4">
                                    <div class="col-lg-6 col-12"> <label class="custom-form-label"
                                            for="">Phone</label>
                                        <input type="tel" class="form-control" id="phone_number" name="phone_number"
                                            value="{{ old('phone_number') }}" required pattern="[0-9]{10}"
                                            maxlength="10" minlength="10"
                                            title="Phone number must be exactly 10 digits and can only contain numbers."
                                            oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="col-lg-6 col-12"> <label class="custom-form-label"
                                            for="">D.O.B</label>
                                        <input type="date" class="form-control" id="dob" name="dob"
                                            value="{{ old('dob') }}" required>
                                        <div class="invalid-feedback"></div>
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
                                            <div class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="email">Email</label>
                                        <input class="numerology-service-labels" type="email" name="email" required>
                                        <div class="invalid-feedback"></div>
                                    </div>

                                    <div id="area_of_concern_container">
                                        <label class="custom-form-label">Select Areas of Concern:</label><br>
                                    </div>
                                    <div id="error-message" style="color: red; display: none;"></div>


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
                        <form action="{{ route('business_numerology.store') }}" method="POST">
                            @csrf
                            <input type="hidden" class="form-control numerology_type" name="numerology_type"
                                value="" readonly>
                            <div class="form-container justify-content-between mt-2">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="first_name">First Name</label>
                                        <input type="text" pattern="[A-Za-z\s]+"
                                            class="form-control @error('first_name') is-invalid @enderror" id="first_name"
                                            name="first_name" required oninput="capitalizeFirstLetter(this)">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="last_name">Last Name</label>
                                        <input type="text" pattern="[A-Za-z\s]+"
                                            class="form-control @error('last_name') is-invalid @enderror" id="last_name"
                                            name="last_name" required oninput="capitalizeFirstLetter(this)">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="mobile">Phone</label>
                                        <input type="tel"
                                            class="form-control @error('phone_number') is-invalid @enderror"
                                            id="phone_number" name="phone_number" required pattern="[0-9]{10}"
                                            maxlength="10" minlength="10"
                                            title="Phone number must be exactly 10 digits and can only contain numbers."
                                            oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="business_name">Business Name</label>
                                        <input type="text" pattern="[A-Za-z\s]+"
                                            class="form-control @error('business_name') is-invalid @enderror"
                                            id="business_name" name="business_name" required
                                            oninput="capitalizeFirstLetter(this)">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="business_type">Type Of Business</label>
                                        <select class="form-control" id="type_of_business" name="type_of_business"
                                            required>
                                            <option value="">Select Business Type</option>
                                            <!-- Options will be populated dynamically via jQuery -->
                                        </select>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="dob">D.O.B</label>
                                        <input type="date" class="form-control @error('dob') is-invalid @enderror"
                                            id="dob" name="dob" required>
                                        <div class="invalid-feedback"></div>
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
                                            <div class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                    {{-- <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label for="partner-selection" class="custom-form-label">Do You Have a
                                                Partner?</label>
                                            <select
                                                class="numerology-service-labels form-control @error('have_partner') is-invalid @enderror"
                                                id="partner-selection" name="have_partner" required
                                                onchange="togglePartnerDetails();">
                                                <option value="" disabled selected>Select an option</option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                            @error('have_partner')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div> --}}

                                    <!-- Have Partner -->
                                    <div class="col-6">
                                        <div class="form-group ">
                                            <label for="have_partner" class="custom-form-label">Do You Have a
                                                Partner?</label>
                                            <select class="form-control @error('have_partner') is-invalid @enderror"
                                                id="have_partner" name="have_partner" required
                                                onchange="togglePartnerFields()">
                                                <option value="" disabled selected>Select an option</option>
                                                <option value="0">No</option>
                                                <option value="1">Yes</option>
                                            </select>
                                            @error('have_partner')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Partner Fields Container -->
                                    <div id="partner-fields-container" style="display: none;">
                                        <h5 class="services-subheading mb-3">Partner Details</h5>
                                        <div id="partner-fields">
                                            <!-- Partner Fields -->
                                            <div class="row partner-details mb-2" id="partner-0">
                                                <div class="col-lg-6 col-12">
                                                    <div class="form-group">
                                                        <label for="partner_first_name_0"
                                                            class="custom-form-label">Partner First Name:</label>
                                                        <input type="text" pattern="[A-Za-z\s]+" class="form-control"
                                                            id="partner_first_name_0" name="partner_first_names[]"
                                                            required oninput="capitalizeFirstLetter(this)">
                                                        <div class="invalid-feedback">Please enter a valid first name (only
                                                            letters).</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <div class="form-group">
                                                        <label for="partner_last_name_0" class="custom-form-label">Partner
                                                            Last Name:</label>
                                                        <input type="text" pattern="[A-Za-z\s]+" class="form-control"
                                                            id="partner_last_name_0" name="partner_last_names[]" required
                                                            oninput="capitalizeFirstLetter(this)">
                                                        <div class="invalid-feedback">Please enter a valid last name (only
                                                            letters).</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <div class="form-group">
                                                        <label for="dob_0" class="custom-form-label">Partner Date of
                                                            Birth:</label>
                                                        <input type="date" class="form-control" id="dob_0"
                                                            name="partner_dobs[]" required>
                                                        <div class="invalid-feedback">Please enter a valid date of birth.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <div class="form-group">
                                                        <label for="partner_phone_number_0"
                                                            class="custom-form-label">Partner Phone Number:</label>
                                                        <input type="tel" class="form-control" required
                                                            id="partner_phone_number_0" name="partner_phone_numbers[]"
                                                            pattern="[0-9]{10}" maxlength="10" minlength="10"
                                                            title="Phone number must be exactly 10 digits and can only contain numbers."
                                                            oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                                                        <div class="invalid-feedback">Phone number must be exactly 10
                                                            digits.</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <div class="form-group">
                                                        <label for="partner_email_0" class="custom-form-label">Partner
                                                            Email:</label>
                                                        <input type="email" class="form-control" id="partner_email_0"
                                                            name="partner_emails[]" required>
                                                        <div class="invalid-feedback">Please enter a valid email address.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <label class="custom-form-label" for="time">Time</label>
                                                    <div class="time-input d-flex align-items-start">
                                                        <input class="numerology-service-labels" type="text"
                                                            name="partner_hours[]" placeholder="HH" required
                                                            pattern="[0-1][0-9]|[2][0-3]">
                                                        <input class="numerology-service-labels" type="text"
                                                            name="partner_minutes[]" placeholder="MM" required
                                                            pattern="[0-5][0-9]">
                                                        <div class="am-pm d-flex gap-2">
                                                            <input class="numerology-service-labels" type="radio"
                                                                name="partner_ampm_0" value="am" checked>
                                                            <label class="select-radio-custom">AM</label>
                                                            <input class="numerology-service-labels" type="radio"
                                                                name="partner_ampm_0" value="pm">
                                                            <label class="select-radio-custom">PM</label>
                                                        </div>
                                                        <div class="invalid-feedback"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="error-message" style="color: red; display: none;">You can only add up to
                                            5 partners.</div>
                                        <button type="button" class="btn btn-secondary mb-3" onclick="addPartner()">Add
                                            Another Partner</button>
                                    </div>


                                </div>
                            </div>
                            <div class="submit-btn-numerology mt-4">
                                <button type="submit">Add Product</button>
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

    {{-- <script>
        let partnerCount = 0; // Track the number of partners added

        function togglePartnerDetails() {
            const select = document.getElementById("partner-selection");
            const partnerDetails = document.getElementById("partner-details");
            const addButton = document.getElementById("add-partner-btn"); // Get Add Partner button

            // Show partner details based on selection
            partnerDetails.style.display = select.value === "1" ? "block" : "none";

            // If "No" is selected, reset and clear partner details
            if (select.value === "0") {
                partnerCount = 0;
                document.getElementById("partners-container").innerHTML = ''; // Clear container
                document.getElementById("partner-warning").style.display = "none"; // Hide warning
                addButton.style.display = "none"; // Hide Add Partner button
            } else if (select.value === "1" && partnerCount === 0) {
                // Automatically add the first partner details if first time Yes is selected
                addPartnerFields();
                addButton.style.display = "block"; // Show Add Partner button
            }
        }

        function addPartnerFields() {
            if (partnerCount < 5) { // Limit to 5 partners
                partnerCount++;
                const partnerHtml = `
                <div class="row partner-details mb-1" id="partner-${partnerCount}">
                    <h6>Partner ${partnerCount}</h6>
                    <div class="col-lg-6 col-12">
                        <label class="custom-form-label">Partner First Name</label>
                        <input class="numerology-service-labels" type="text" name="partner_first_name_${partnerCount}" required>
                    </div>
                    <div class="col-lg-6 col-12">
                        <label class="custom-form-label">Partner Last Name</label>
                        <input class="numerology-service-labels" type="text" name="partner_last_name_${partnerCount}" required>
                    </div>
                    <div class="col-lg-6 col-12">
                        <label class="custom-form-label">D.O.B</label>
                        <input class="numerology-service-labels" type="date" name="partner_dob_${partnerCount}" required>
                    </div>
                    <div class="col-lg-6 col-12">
                        <label class="custom-form-label">Phone Number</label>
                        <input class="numerology-service-labels" type="tel" name="partner_mobile_${partnerCount}" required>
                    </div>
                    <div class="col-lg-6 col-12">
                        <label class="custom-form-label">Email</label>
                        <input class="numerology-service-labels" type="email" name="partner_email_${partnerCount}" required>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-danger btn-sm float-end" onclick="removePartner(${partnerCount})" ${partnerCount === 1 ? 'style="display:none;"' : ''}>Delete</button>
                    </div>
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
    </script> --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('form').reset(); // This will reset the form fields on page load
        });
    </script>

    <script>
        function togglePartnerFields() {
            const havePartner = document.getElementById('have_partner').value;
            const partnerFieldsContainer = document.getElementById('partner-fields-container');
            const timeInputContainer = document.getElementById('time-input-container');

            if (havePartner === '1') {
                partnerFieldsContainer.style.display = 'block';
                timeInputContainer.style.display = 'block'; // Show time input
            } else {
                partnerFieldsContainer.style.display = 'none';
                timeInputContainer.style.display = 'none'; // Hide time input
                resetPartnerFields(); // Clear partner fields if "No" is selected
            }
        }

        let partnerIndex = 0; // Start from 0 for the first partner
        const maxPartners = 5;

        function addPartner() {
            const container = document.getElementById('partner-fields');
            const errorMessage = document.getElementById('error-message');

            // Show error message if the maximum number of partners is reached
            if (partnerIndex >= maxPartners) {
                errorMessage.style.display = 'block';
                return;
            } else {
                errorMessage.style.display = 'none';
            }

            // Create a new partner field section
            const partnerField = document.createElement('div');
            partnerField.classList.add('row', 'partner-details', 'mb-2');

            partnerField.innerHTML = `
            <div class="col-lg-6 col-12">
                <div class="form-group">
                    <label for="partner_first_name_${partnerIndex}" class="custom-form-label">Partner First Name:</label>
                    <input type="text" pattern="[A-Za-z\s]+" class="form-control" id="partner_first_name_${partnerIndex}" name="partner_first_names[]" required oninput="capitalizeFirstLetter(this)">
                    <div class="invalid-feedback">Please enter a valid first name (only letters).</div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="form-group">
                    <label for="partner_last_name_${partnerIndex}" class="custom-form-label">Partner Last Name:</label>
                    <input type="text" pattern="[A-Za-z\s]+" class="form-control" id="partner_last_name_${partnerIndex}" name="partner_last_names[]" required oninput="capitalizeFirstLetter(this)">
                    <div class="invalid-feedback">Please enter a valid last name (only letters).</div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="form-group">
                    <label for="dob_${partnerIndex}" class="custom-form-label">Partner Date of Birth:</label>
                    <input type="date" class="form-control" id="dob_${partnerIndex}" name="partner_dobs[]" required>
                    <div class="invalid-feedback">Please enter a valid date of birth.</div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="form-group">
                    <label for="partner_phone_number_${partnerIndex}" class="custom-form-label">Partner Phone Number:</label>
                    <input type="tel" class="form-control" id="partner_phone_number_${partnerIndex}" name="partner_phone_numbers[]" required pattern="[0-9]{10}" maxlength="10" minlength="10" title="Phone number must be exactly 10 digits and can only contain numbers." oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                    <div class="invalid-feedback">Phone number must be exactly 10 digits.</div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="form-group">
                    <label for="partner_email_${partnerIndex}" class="custom-form-label">Partner Email:</label>
                    <input type="email" class="form-control" id="partner_email_${partnerIndex}" name="partner_emails[]" required>
                    <div class="invalid-feedback">Please enter a valid email address.</div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <label class="custom-form-label" for="time">Time</label>
                <div class="time-input d-flex align-items-start">
                    <input class="numerology-service-labels" type="text" name="partner_hours[]" placeholder="HH" required pattern="[0-1][0-9]|[2][0-3]">
                    <input class="numerology-service-labels" type="text" name="partner_minutes[]" placeholder="MM" required pattern="[0-5][0-9]">
                    <div class="am-pm d-flex gap-2">
                        <input class="numerology-service-labels" type="radio" name="partner_ampm_${partnerIndex}" value="am" checked> 
                        <label class="select-radio-custom">AM</label>
                        <input class="numerology-service-labels" type="radio" name="partner_ampm_${partnerIndex}" value="pm"> 
                        <label class="select-radio-custom">PM</label>
                    </div>
                    <div class="invalid-feedback"></div>
                </div>
            </div>
            <div class="col-12">
                <button type="button" class="btn btn-danger btn-sm float-end" onclick="removePartner(this)">Remove</button>
            </div>
        `;

            // Bind real-time validation events
            bindRealTimeValidation(partnerField);

            // Append the newly created partner fields to the container
            container.appendChild(partnerField);
            partnerIndex++; // Increment the partner index for the next partner
        }

        function bindRealTimeValidation(partnerField) {
            const firstNameInput = partnerField.querySelector(`input[id^='partner_first_name_']`);
            const lastNameInput = partnerField.querySelector(`input[id^='partner_last_name_']`);
            const phoneNumberInput = partnerField.querySelector(`input[id^='partner_phone_number_']`);
            const emailInput = partnerField.querySelector(`input[id^='partner_email_']`);
            const hourInput = partnerField.querySelector(`input[name='partner_hours[]']`);
            const minuteInput = partnerField.querySelector(`input[name='partner_minutes[]']`);

            // Validate name fields
            firstNameInput.addEventListener('input', function() {
                validateName(this);
            });
            lastNameInput.addEventListener('input', function() {
                validateName(this);
            });

            // Validate phone number field
            phoneNumberInput.addEventListener('input', function() {
                validatePhoneNumber(this);
            });

            // Validate email field
            emailInput.addEventListener('input', function() {
                validateEmail(this);
            });

            // Validate time fields
            hourInput.addEventListener('input', function() {
                validateTime(this);
            });
            minuteInput.addEventListener('input', function() {
                validateTime(this);
            });
        }

        function validateName(input) {
            const re = /^[A-Za-z\s]+$/; // Only allow letters and spaces
            if (!re.test(input.value)) {
                input.classList.add('is-invalid');
                input.nextElementSibling.style.display = 'block';
            } else {
                input.classList.remove('is-invalid');
                input.nextElementSibling.style.display = 'none';
            }
        }

        function validatePhoneNumber(input) {
            const re = /^[0-9]{10}$/; // Ensure exactly 10 digits
            if (!re.test(input.value)) {
                input.classList.add('is-invalid');
                input.nextElementSibling.style.display = 'block';
            } else {
                input.classList.remove('is-invalid');
                input.nextElementSibling.style.display = 'none';
            }
        }

        function validateEmail(input) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Basic email validation
            if (!re.test(input.value)) {
                input.classList.add('is-invalid');
                input.nextElementSibling.style.display = 'block';
            } else {
                input.classList.remove('is-invalid');
                input.nextElementSibling.style.display = 'none';
            }
        }

        function validateTime(input) {
            const isValidTime = input.placeholder === "HH" ? /^(0[0-9]|1[0-9]|2[0-3])$/.test(input.value) :
                /^(0[0-9]|[1-5][0-9])$/.test(input.value);
            if (!isValidTime) {
                input.classList.add('is-invalid');
                input.nextElementSibling.style.display = 'block';
            } else {
                input.classList.remove('is-invalid');
                input.nextElementSibling.style.display = 'none';
            }
        }

        function removePartner(button) {
            // Remove the corresponding partner field
            const partnerField = button.closest('.partner-details');
            partnerField.remove();
            partnerIndex--; // Decrease the partner index
        }

        function resetPartnerFields() {
            const partnerFields = document.getElementById('partner-fields');
            while (partnerFields.firstChild) {
                partnerFields.removeChild(partnerFields.firstChild);
            }
            partnerIndex = 0; // Reset partner index to allow adding partners from scratch
        }

        function capitalizeFirstLetter(input) {
            const words = input.value.split(' ');
            for (let i = 0; i < words.length; i++) {
                if (words[i].length > 0) {
                    words[i] = words[i].charAt(0).toUpperCase() + words[i].slice(1).toLowerCase();
                }
            }
            input.value = words.join(' ');
        }
    </script>

    <script>
        $(document).ready(function() {
            // Real-time validation for name fields
            function validateName(field) {
                const re = /^[A-Za-z\s]*$/; // Regex to only allow letters and spaces
                if (!re.test($(field).val())) {
                    $(field).addClass('is-invalid');
                    $(field).next('.invalid-feedback').text('Only letters and spaces are allowed.').show();
                } else {
                    $(field).removeClass('is-invalid');
                    $(field).next('.invalid-feedback').hide();
                }
            }

            // Real-time validation for phone number fields
            function validatePhoneNumber(field) {
                const re = /^[0-9]*$/; // Regex to only allow numbers
                if (!re.test($(field).val())) {
                    $(field).addClass('is-invalid');
                    $(field).next('.invalid-feedback').text('Only numbers are allowed.').show();
                } else {
                    $(field).removeClass('is-invalid');
                    $(field).next('.invalid-feedback').hide();
                }
            }

            // Toggle partner fields based on the 'Have a Partner?' dropdown
            $('#have_partner').on('change', function() {
                if ($(this).val() == '1') {
                    // Show partner fields and make them required
                    $('.partner-fields').show();
                    $('.partner-fields input').prop('required', true);
                } else {
                    // Hide partner fields and remove required attribute
                    $('.partner-fields').hide();
                    $('.partner-fields input').prop('required', false);
                }
            });

            // Attach input validation for name fields
            $('#first_name, #last_name, #business_name, #partner_first_name_0, #partner_last_name_0')
                .on('input', function() {
                    validateName(this);
                });

            // Attach input validation for phone number fields
            $('#phone_number, #partner_phone_number_0').on('input', function() {
                validatePhoneNumber(this);
            });

            // Tab navigation
            $('[data-tab-target]').on('click', function() {
                var target = $(this).data('tab-target');
                var type = $(this).data('type');

                $('.numerology_type').val(type);

                // Show the selected tab content
                $('[data-tab-content]').removeClass('active');
                $('[data-tab-target]').removeClass('active');

                $(this).addClass('active');
                $(target).addClass('active');
            });

            // Trigger click on the first tab on page load
            $('[data-tab-target]').first().trigger('click');

            // Initially hide partner fields if no partner is selected
            if ($('#have_partner').val() != '1') {
                $('.partner-fields').hide();
                $('.partner-fields input').prop('required', false);
            }
        });
    </script>

    {{-- aoc --}}

    <script>
        $(document).ready(function() {
            // Fetching areas of concern from the server
            $.ajax({
                url: '{{ route('get.area_of_struggles') }}',
                type: 'GET',
                success: function(data) {
                    let areaOfConcernContainer = $('#area_of_concern_container');
                    areaOfConcernContainer.empty(); // Clear any existing checkboxes

                    // Create a label for better accessibility
                    areaOfConcernContainer.append(
                        '<label class="custom-form-label">Select Areas of Concern:</label><br>'
                    );

                    // Populate the container with fetched data as checkboxes
                    $.each(data, function(index, item) {
                        areaOfConcernContainer.append(
                            '<div class="form-check">' +
                            '<input class="form-check-input" type="checkbox" id="area_' +
                            item.id +
                            '" name="area_of_concern[]" value="' + item.id + '">' +
                            '<label class="form-check-label custom-form-label" for="area_' +
                            item.id + '">' +
                            item.problem + '</label>' +
                            '</div>'
                        );
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching Area of Struggles:', error);
                }
            });

            // Handle form submission to concatenate checked values
            $('form').on('submit', function(event) {
                const checkedBoxes = $('input[name="area_of_concern[]"]:checked');
                const errorMessageDiv = $('#error-message');

                // Clear any previous error messages
                errorMessageDiv.hide(); // Hide error message initially

                // if (checkedBoxes.length === 0) {
                //     // If no checkboxes are checked, prevent the form submission
                //     event.preventDefault(); // Prevent the default form submission
                //     errorMessageDiv.text(
                //         'Please select at least one Area of Concern.'); // Set the error message
                //     errorMessageDiv.show(); // Show the error message
                //     return; // Exit the function
                // } else {
                //     errorMessageDiv.hide(); // Hide error message if a checkbox is checked
                // }

                // Create a string from checked checkboxes
                let areasOfConcern = checkedBoxes.map(function() {
                    return $(this).val(); // Get the value (ID) of checked checkboxes
                }).get().join(','); // Join them into a single string

                // Set it to a hidden input field to submit with the form
                $('<input>').attr({
                    type: 'hidden',
                    name: 'area_of_concern', // Use the same name to replace the array
                    value: areasOfConcern // This will now be a string
                }).appendTo('form');

                // Now submit the form
                this.submit(); // Submit the form
            });
        });
    </script>

    {{-- type of bussiness --}}
    <script>
        $(document).ready(function() {
            function populateDropdown(data) {
                var $dropdown = $('#type_of_business');
                $dropdown.empty();
                $dropdown.append('<option value="">Select Business Type</option>');

                $.each(data, function(key, business) {
                    $dropdown.append('<option value="' + business.id + '">' + business.bussiness_name +
                        '</option>');
                });
            }

            // Load all businesses
            $.ajax({
                url: '{{ route('search.business') }}', // Ensure this route returns all businesses
                method: 'GET',
                success: function(response) {
                    populateDropdown(response);
                },
                error: function() {
                    $('#type_of_business').empty();
                    $('#type_of_business').append(
                        '<option value="">Failed to load businesses</option>');
                }
            });
        });
    </script>

    {{-- alpha --}}
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
    </script>

    {{-- validation --}}

    <script>
        $(document).ready(function() {
            // Function to validate names
            function validateName(input) {
                const re = /^[A-Za-z\s]*$/; // Regex to only allow letters and spaces
                if (!re.test($(input).val())) {
                    $(input).addClass('is-invalid');
                    $(input).next('.invalid-feedback').text('Only letters and spaces are allowed.').show();
                    return false;
                } else {
                    $(input).removeClass('is-invalid');
                    $(input).next('.invalid-feedback').hide();
                    return true;
                }
            }

            // Function to validate phone numbers
            function validatePhoneNumber(input) {
                const re = /^\d{10}$/; // Regex to check for exactly 10 digits
                if (!re.test($(input).val())) {
                    $(input).addClass('is-invalid');
                    $(input).next('.invalid-feedback').text('Phone number must be exactly 10 digits.').show();
                    return false;
                } else {
                    $(input).removeClass('is-invalid');
                    $(input).next('.invalid-feedback').hide();
                    return true;
                }
            }

            // Function to validate emails
            function validateEmail(input) {
                const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Simple regex for validating email format
                if (!re.test($(input).val())) {
                    $(input).addClass('is-invalid');
                    $(input).next('.invalid-feedback').text('Please enter a valid email address.').show();
                    return false;
                } else {
                    $(input).removeClass('is-invalid');
                    $(input).next('.invalid-feedback').hide();
                    return true;
                }
            }

            // Validate form fields on input change
            $('#first_name, #last_name, #business_name, #partner_first_name_0, #partner_last_name_0').on('input',
                function() {
                    validateName(this);
                });

            $('#phone_number, #partner_phone_number_0').on('input', function() {
                validatePhoneNumber(this);
            });

            $('input[type=email]').on('input', function() {
                validateEmail(this);
            });

            // Validate D.O.B - Ensure date is in the past
            $('input[type=date]').on('change', function() {
                const selectedDate = new Date($(this).val());
                const today = new Date();
                if (selectedDate >= today) {
                    $(this).addClass('is-invalid');
                    $(this).next('.invalid-feedback').text('Date of birth must be in the past.').show();
                } else {
                    $(this).removeClass('is-invalid');
                    $(this).next('.invalid-feedback').hide();
                }
            });
        });
    </script>
@endsection
