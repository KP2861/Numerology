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
                <div class="services-tabs mb-md-5 mb-3 px-2">
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
                    <div class="col-md-4 col-12 d-md-block d-none">
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
                                <div class="row mt-4">
                                    <input type="hidden" class="form-control numerology_type" name="numerology_type"
                                        value="" readonly>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="name">First Name</label>
                                        <input class="numerology-service-labels" type="text" name="first_name"
                                            id="first_name" required onblur="capitalizeFirstLetter(this)"
                                            pattern="[A-Za-z]+"
                                            title="First name must contain only letters (no numbers or special characters)."
                                            oninput="this.value = this.value.replace(/[^A-Za-z]/g, '');">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="name">Last Name</label>
                                        <input class="numerology-service-labels" type="text" name="last_name"
                                            id="last_name" pattern="[A-Za-z]+"
                                            title="Last name must contain only letters (no numbers or special characters)."
                                            oninput="this.value = this.value.replace(/[^A-Za-z]/g, '');"
                                            onblur="capitalizeFirstLetter(this)">
                                        <div class="invalid-feedback"></div>
                                    </div>

                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="email">Email</label>
                                        <input class="numerology-service-labels" type="email" name="email" required>
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label for="phone_number" class="custom-form-label">Phone Number:</label>
                                            <input type="tel" class="numerology-service-labels" id="phone_number"
                                                name="phone_number" value="{{ old('phone_number') }}" required
                                                pattern="[0-9]{10}" maxlength="10" minlength="10"
                                                title="Phone number must be exactly 10 digits">
                                            <div class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="dob">D.O.B</label>
                                        <input class="numerology-service-labels" type="date" name="dob" required>
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="birth-city">Birth Town/City</label>
                                        <input type="text" name="town_city" id="town_city"
                                            class="numerology-service-labels mb-4" required
                                            placeholder="Enter your birth town/city" />
                                        <div class="invalid-feedback">Please enter a valid town/city name.</div>
                                    </div>

                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="time">Time</label>
                                        <div class="time-input d-flex align-items-start">
                                            <input class="numerology-service-labels hoursInput" type="text"
                                                name="hours" placeholder="HH">
                                            <input class="numerology-service-labels minutesInput" type="text"
                                                name="minutes" placeholder="MM">
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
                                        <select class="numerology-service-labels" name="language" required>
                                            <option value="" disabled>Select</option>
                                            <option value="en" selected>English</option>
                                            {{-- <option value="hi">Hindi</option> --}}
                                        </select>
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label">Gender</label>
                                        <div class="radio-group-custom d-flex gap-1 custom-mb-gender">
                                            <input class="numerology-service-labels" type="radio" id="gender_male"
                                                name="gender" value="Male" required>
                                            <label class="select-radio-custom">Male</label>
                                            <input class="numerology-service-labels" type="radio" id="gender_female"
                                                name="gender" value="Female" required>
                                            <label class="select-radio-custom">Female</label>
                                        </div>
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
        <div class="tab-info-description pb-md-5 pt-md-5 pt-4 pb-2">
            <div class="container">
                <div class="row gx-5 align-items-start">
                    <h3 class="tab-info-heading mb-2">
                        Why Check Your <span>Name</span> with Numerology?
                    </h3>
                    <p class="tab-info-content pb-5">
                        Unlock the secrets hidden in your name! Understanding your name through numerology can reveal the
                        hidden strengths and challenges that shape your journey. Discover your unique personality traits,
                        enhance your decision-making, and pave your way toward success in both personal and professional
                        realms.
                    </p>
                    <div class="col-md-4 col-12">
                        <div class="mb-md-0 mb-4">
                            <img src="{{ asset('frontend/assests/images/hero-section/name-numerology-info.png') }}"
                                alt="business icon" class="img-fluid">
                        </div>

                    </div>
                    <div class="col-md-8 col-12">
                        <!-- <h3 class="tab-info-heading mb-2">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <span>Name</span> Numerology is an occult technology?
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </h3> -->
                        <p class="tab-info-content mb-1">
                            <strong>Empower Yourself:</strong> Knowing your name's vibrational frequency can help you align
                            with your true path.
                        </p>
                        <p class="tab-info-content mb-1">
                            <strong>Attract Good Fortune:</strong> Tap into the cosmic energy that can turn obstacles into
                            opportunities!
                        </p>
                        <p class="tab-info-content mb-1">
                            <strong>Reveal Your Potential:</strong> Every letter resonates with energy that can guide you to
                            make the right choices.
                        </p>
                        <p class="tab-info-content mb-1">
                            Don't leave your destiny to chance — check your name today and start manifesting your best life!
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
                    <div class="col-md-4 col-12 d-md-block d-none">
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
                                <div class="row mt-4 ">
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="name">First Name</label>
                                        <input class="numerology-service-labels" type="text" name="first_name"
                                            id="first_name" required onblur="capitalizeFirstLetter(this)"
                                            pattern="[A-Za-z]+"
                                            title="First name must contain only letters (no numbers or special characters)."
                                            oninput="this.value = this.value.replace(/[^A-Za-z]/g, '');">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="name">Last Name</label>
                                        <input class="numerology-service-labels" type="text" name="last_name"
                                            id="last_name" pattern="[A-Za-z]+"
                                            title="Last name must contain only letters (no numbers or special characters)."
                                            oninput="this.value = this.value.replace(/[^A-Za-z]/g, '');"
                                            onblur="capitalizeFirstLetter(this)">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="email">Email</label>
                                        <input class="numerology-service-labels" type="email" name="email" required>
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="">Phone</label>
                                        <input type="tel" class=" numerology-service-labels" id="phone_number"
                                            name="phone_number" value="{{ old('phone_number') }}" required
                                            pattern="[0-9]{10}" maxlength="10" minlength="10"
                                            title="Phone number must be exactly 10 digits and can only contain numbers."
                                            oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="col-lg-6 col-12">

                                        <label class="custom-form-label" for="dob">D.O.B</label>
                                        <input type="date" class="numerology-service-labels" id="dob"
                                            name="dob" value="dob" required>
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="birth-city">Birth Town/City</label>
                                        <input type="text" name="town_city" id="town_city"
                                            class="numerology-service-labels mb-4" required
                                            placeholder="Enter your birth town/city" />
                                        <div class="invalid-feedback">Please enter a valid town/city name.</div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="time">Time</label>
                                        <div class="time-input d-flex align-items-start">
                                            <input class="numerology-service-labels hoursInput" type="text"
                                                name="hours" placeholder="HH">
                                            <input class="numerology-service-labels minutesInput" type="text"
                                                name="minutes" placeholder="MM">
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
                                        <select class="numerology-service-labels" name="language" required>
                                            <option value=""disabled>Select</option>
                                            <option value="en" selected>English</option>
                                            {{-- <option value="hi">Hindi</option> --}}
                                        </select>
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label">Gender</label>
                                        <div class="radio-group-custom d-flex gap-1 custom-mb-gender">
                                            <input class="numerology-service-labels" type="radio" id="gender_male"
                                                name="gender" value="Male" required>
                                            <label class="select-radio-custom">Male</label>
                                            <input class="numerology-service-labels" type="radio" id="gender_female"
                                                name="gender" value="Female" required>
                                            <label class="select-radio-custom">Female</label>
                                        </div>
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
        <div class="tab-info-description pb-md-5 pt-md-5 pt-4 pb-2">
            <div class="container">
                <div class="row gx-5 align-items-start">
                    <h3 class="tab-info-heading mb-2">
                        Unlock the Secrets of Your <span>Mobile</span> Numerology!

                    </h3>
                    <p class="tab-info-content pb-5">
                        Your mobile number isn’t just a series of digits; it’s a powerful tool that can influence your
                        life’s journey. Mobile Numerology helps you understand the vibrational energy of your phone number,
                        revealing its impact on your health, wealth, relationships, and overall well-being.
                    </p>
                    <div class="col-lg-4 col-md-5 col-12">
                        <div class="mb-md-0 mb-4">
                            <img src="{{ asset('frontend/assests/images/hero-section/name-numerology-info.png') }}"
                                alt="business icon" class="img-fluid">
                        </div>

                    </div>
                    <div class="col-lg-8 col-md-7 col-12">
                        <!-- <h3 class="tab-info-heading mb-2">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <span>Mobile</span> Numerology is an occult technology?
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </h3> -->
                        <p class="tab-info-content mb-1">
                            <strong>Discover Your Life Path:</strong> Each digit in your mobile number carries unique
                            vibrations and characteristics that can shape your experiences and opportunities.
                        </p>
                        <p class="tab-info-content mb-1">
                            <strong>Enhance Prosperity:</strong> Learn how your number can attract abundance or reveal
                            obstacles, allowing you to make informed decisions for a prosperous life.
                        </p>
                        <p class="tab-info-content mb-1">
                            <strong>Strengthen Relationships:</strong> Uncover how your number influences your connections
                            with others, helping you foster stronger, more fulfilling relationships.
                        </p>
                        <p class="tab-info-content mb-1">
                            <strong>Make the Right Choice:</strong> Whether you’re considering a new number or looking to
                            understand your current one, our Mobile Numerology insights will guide you toward a more
                            harmonious and successful life.
                        </p>
                        <p class="tab-info-content mb-1">
                            Don’t let your number just be a number — discover its true power today!
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
                    <div class="col-md-4 col-12 d-md-block d-none">
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
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="name">First Name </label>
                                        <input class="numerology-service-labels" type="text" name="first_name"
                                            id="first_name" required onblur="capitalizeFirstLetter(this)">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="name">Last Name</label>
                                        <input class="numerology-service-labels" type="text" name="last_name"
                                            id="last_name" onblur="capitalizeFirstLetter(this)">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="email">Email</label>
                                        <input class="numerology-service-labels" type="email" name="email" required>
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="col-lg-6 col-12"> <label class="custom-form-label"
                                            for="">Phone</label>
                                        <input type="tel" class="numerology-service-labels" id="phone_number"
                                            name="phone_number" value="{{ old('phone_number') }}" required
                                            pattern="[0-9]{10}" maxlength="10" minlength="10"
                                            title="Phone number must be exactly 10 digits and can only contain numbers."
                                            oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="col-lg-6 col-12"> <label class="custom-form-label"
                                            for="">D.O.B</label>
                                        <input type="date" class="numerology-service-labels" id="dob"
                                            name="dob" value="{{ old('dob') }}" required>
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="birth-city">Birth Town/City</label>
                                        <input type="text" name="town_city" id="town_city"
                                            class="numerology-service-labels mb-4" required
                                            placeholder="Enter your birth town/city" />
                                        <div class="invalid-feedback">Please enter a valid town/city name.</div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="time">Time</label>
                                        <div class="time-input d-flex align-items-start">
                                            <input class="numerology-service-labels hoursInput" type="text"
                                                name="hours" placeholder="HH">
                                            <input class="numerology-service-labels minutesInput" type="text"
                                                name="minutes" placeholder="MM">
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
                                        <select class="numerology-service-labels" name="language" required>
                                            <option value="" disabled>Select</option>
                                            <option value="en" selected>English</option>
                                            {{-- <option value="hi">Hindi</option> --}}
                                        </select>
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label">Gender</label>
                                        <div class="radio-group-custom d-flex gap-1 custom-mb-gender">
                                            <input class="numerology-service-labels" type="radio" id="gender_male"
                                                name="gender" value="Male" required>
                                            <label class="select-radio-custom">Male</label>
                                            <input class="numerology-service-labels" type="radio" id="gender_female"
                                                name="gender" value="Female" required>
                                            <label class="select-radio-custom">Female</label>
                                        </div>
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
        <div class="tab-info-description pb-md-5 pt-md-5 pt-4 pb-2">
            <div class="container">
                <div class="row gx-5 align-items-start">
                    <h3 class="tab-info-heading mb-2">
                        Unlock the Mysteries of <span>Advanced</span> Numerology!
                    </h3>
                    <p class="tab-info-content pb-5">
                        Dive deeper into the enchanting world of Advanced Numerology, where numbers reveal profound insights
                        about your life’s purpose, challenges, and destiny. This isn’t just basic numerology; it’s a
                        comprehensive exploration of how numerical vibrations influence every aspect of your existence.
                    </p>
                    <div class="col-lg-4 col-md-5 col-12">
                        <div class="mb-md-0 mb-4">
                            <img src="{{ asset('frontend/assests/images/hero-section/name-numerology-info.png') }}"
                                alt="business icon" class="img-fluid">
                        </div>

                    </div>
                    <div class="col-lg-8 col-md-7 col-12">
                        <!-- <h3 class="tab-info-heading mb-2">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <span>Advanced</span> Numerology is an occult technology?
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </h3> -->
                        <p class="tab-info-content mb-1">
                            <strong>Explore the Depths of Your Soul:</strong> Advanced Numerology delves into your core
                            numbers, including Life Path, Expression, and Soul Urge numbers, providing a complete picture of
                            who you are and your potential.
                        </p>
                        <p class="tab-info-content mb-1">
                            <strong>Illuminate Your Journey:</strong> Gain clarity on your life’s direction, uncover hidden
                            talents, and identify opportunities that align with your unique path.
                        </p>
                        <p class="tab-info-content mb-1">
                            <strong>Navigate Challenges:</strong> Understand the obstacles in your path and learn effective
                            strategies to overcome them. Knowledge is power, and with Advanced Numerology, you’ll be
                            equipped to face life’s challenges head-on.
                        </p>
                        <p class="tab-info-content mb-1">
                            <strong>Enhance Relationships:</strong> Discover compatibility insights with loved ones,
                            friends, and colleagues, ensuring you nurture harmonious connections that uplift and support
                            you.
                        </p>
                        <p class="tab-info-content mb-1">
                            <strong>Unlock Success:</strong> Use Advanced Numerology to make informed decisions in your
                            career, finances, and personal growth, setting the stage for a prosperous future.
                        </p>
                        <p class="tab-info-content mb-1">
                            Transform your understanding of life with Advanced Numerology — where numbers become the keys to
                            unlocking your true potential!
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
                    <div class="col-md-4 col-12 d-md-block d-none">
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
                                <div class="row mt-4">
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="first_name">First Name</label>
                                        <input type="text" pattern="[A-Za-z\s]+"
                                            class="numerology-service-labels @error('first_name') is-invalid @enderror"
                                            id="first_name" name="first_name" required
                                            oninput="capitalizeFirstLetter(this)">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="last_name">Last Name</label>
                                        <input type="text" pattern="[A-Za-z\s]+"
                                            class="numerology-service-labels @error('last_name') is-invalid @enderror"
                                            id="last_name" name="last_name" oninput="capitalizeFirstLetter(this)">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="email">Email</label>
                                        <input class="numerology-service-labels" type="email" name="email" required>
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="mobile">Phone</label>
                                        <input type="tel"
                                            class="numerology-service-labels @error('phone_number') is-invalid @enderror"
                                            id="phone_number" name="phone_number" required pattern="[0-9]{10}"
                                            maxlength="10" minlength="10"
                                            title="Phone number must be exactly 10 digits and can only contain numbers."
                                            oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                                        <div class="invalid-feedback"></div>
                                    </div>

                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="dob">D.O.B</label>
                                        <input type="date"
                                            class="numerology-service-labels @error('dob') is-invalid @enderror"
                                            id="dob" name="dob" required>
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="birth-city">Birth Town/City</label>
                                        <input type="text" name="town_city" id="town_city"
                                            class="numerology-service-labels mb-4" required
                                            placeholder="Enter your birth town/city" />
                                        <div class="invalid-feedback">Please enter a valid town/city name.</div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="time">Time</label>
                                        <div class="time-input d-flex align-items-start">
                                            <input class="numerology-service-labels hoursInput" type="text"
                                                name="hours" placeholder="HH">
                                            <input class="numerology-service-labels minutesInput" type="text"
                                                name="minutes" placeholder="MM">
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
                                        <select class="numerology-service-labels" name="language" required>
                                            <option value=""disabled>Select</option>
                                            <option value="en" selected>English</option>
                                            {{-- <option value="hi">Hindi</option> --}}
                                        </select>
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label">Gender</label>
                                        <div class="radio-group-custom d-flex gap-1 custom-mb-gender">
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
                                        <label class="custom-form-label" for="business_name">Business Name</label>
                                        <input type="text" pattern="[A-Za-z\s]+"
                                            class="numerology-service-labels @error('business_name') is-invalid @enderror"
                                            id="business_name" name="business_name" required
                                            oninput="capitalizeFirstLetter(this)">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="custom-form-label" for="business_type">Type Of Business</label>
                                        <select class="numerology-service-labels" id="type_of_business"
                                            name="type_of_business" required>
                                            <option value="">Select Business Type</option>
                                            <!-- Options will be populated dynamically via jQuery -->
                                        </select>
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
                                            <select
                                                class="numerology-service-labels @error('have_partner') is-invalid @enderror"
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
                                                        <input type="text" pattern="[A-Za-z\s]+"
                                                            class="numerology-service-labels" id="partner_first_name_0"
                                                            name="partner_first_names[]" required
                                                            oninput="capitalizeFirstLetter(this)">
                                                        <div class="invalid-feedback">Please enter a valid first name (only
                                                            letters).</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <div class="form-group">
                                                        <label for="partner_last_name_0" class="custom-form-label">Partner
                                                            Last Name:</label>
                                                        <input type="text" pattern="[A-Za-z\s]+"
                                                            class="numerology-service-labels" id="partner_last_name_0"
                                                            name="partner_last_names[]"
                                                            oninput="capitalizeFirstLetter(this)">
                                                        <div class="invalid-feedback">Please enter a valid last name (only
                                                            letters).</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <div class="form-group">
                                                        <label for="dob_0" class="custom-form-label">Partner Date of
                                                            Birth:</label>
                                                        <input type="date" class="numerology-service-labels"
                                                            id="dob_0" name="partner_dobs[]" required>
                                                        <div class="invalid-feedback">Please enter a valid date of birth.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <div class="form-group">
                                                        <label for="partner_phone_number_0"
                                                            class="custom-form-label">Partner Phone Number:</label>
                                                        <input type="tel" class="numerology-service-labels" required
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
                                                        <input type="email" class="numerology-service-labels"
                                                            id="partner_email_0" name="partner_emails[]" required>
                                                        <div class="invalid-feedback">Please enter a valid email address.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <label class="custom-form-label" for="time">Time</label>
                                                    <div class="time-input d-flex align-items-start">
                                                        <input class="numerology-service-labels hoursInput" type="text"
                                                            name="partner_hours[]" placeholder="HH"
                                                            pattern="^(0[0-9]|1[0-9]|2[0-3]|[0-9])$"
                                                            title="Hours must be between 00 and 23.">
                                                        <input class="numerology-service-labels minutesInput"
                                                            type="text" name="partner_minutes[]" placeholder="MM"
                                                            pattern="^(0[0-9]|[1-5][0-9])$"
                                                            title="Minutes must be between 00 and 59.">
                                                        <!-- AM/PM Selection -->
                                                        <div class="am-pm d-flex gap-2">
                                                            <input class="numerology-service-labels" type="radio"
                                                                name="partner_ampm[]" value="am" checked>
                                                            <label class="select-radio-custom">AM</label>
                                                            <input class="numerology-service-labels" type="radio"
                                                                name="partner_ampm[]" value="pm">
                                                            <label class="select-radio-custom">PM</label>
                                                        </div>
                                                        <div class="invalid-feedback"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="error-msg" style="color: red; display: none;">You can only add up to
                                            5 partners.</div>
                                        <button type="button" id="add_partner_button" class="btn btn-secondary mb-3">Add
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

        <div class="tab-info-description pb-md-5 pt-md-5 pt-4 pb-2">
            <div class="container">
                <div class="row gx-5 align-items-start">
                    <h3 class="tab-info-heading mb-2">
                        Discover the Power of <span>Business</span> Name Numerology!
                    </h3>
                    <p class="tab-info-content pb-5">
                        Unlock the potential of your business with Business Name Numerology—a unique approach that aligns
                        your company's identity with universal energies. The right name can pave the way for success,
                        prosperity, and harmony in your entrepreneurial journey.
                    </p>
                    <div class="col-md-4 col-12">
                        <div class="mb-md-0 mb-4">
                            <img src="{{ asset('frontend/assests/images/hero-section/name-numerology-info.png') }}"
                                alt="business icon" class="img-fluid">
                        </div>

                    </div>
                    <div class="col-md-8 col-12">
                        <!-- <h3 class="tab-info-heading mb-2">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <span>Business</span> Numerology is an occult technology?
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </h3> -->
                        <p class="tab-info-content mb-1">
                            <strong>Align with Universal Energies:</strong> Every name carries a vibrational frequency that
                            can influence your business's growth and success. Our Business Name Numerology analyses these
                            energies, helping you choose a name that resonates positively with your goals.
                        </p>
                        <p class="tab-info-content mb-1">
                            <strong>Foster Growth and Prosperity:</strong> A well-chosen business name can attract
                            customers, enhance brand recognition, and promote financial success. Let numerology guide you to
                            a name that embodies your vision and mission.
                        </p>
                        <p class="tab-info-content mb-1">
                            <strong>Ensure Compatibility:</strong> Just like people, business names can have compatibility
                            factors. Our analysis ensures that your business name aligns with the essential numbers of your
                            industry and target market, maximizing your potential for success.
                        </p>
                        <p class="tab-info-content mb-1">
                            <strong>Mitigate Risks:</strong> Identify potential challenges associated with your current
                            business name. We provide insights on how to adjust your name or branding strategy to overcome
                            obstacles and enhance your overall impact.
                        </p>
                        <p class="tab-info-content mb-1">
                            <strong>Transform Your Brand Identity:</strong> Whether you’re starting a new venture or
                            rebranding an existing business, Business Name Numerology offers tailored recommendations that
                            resonate with your brand’s essence and attract the right audience.
                        </p>
                        <p class="tab-info-content mb-1">
                            Elevate your business journey with Business Name Numerology — where the right name can be the
                            difference between ordinary and extraordinary success!
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
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

    {{-- <script>
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
    </script> --}}

    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Handle partner fields visibility
            document.getElementById('have_partner').addEventListener('change', togglePartnerFields);

            // Initialize partner index for dynamic fields
            let partnerIndex = 1; // Start from 1 for the first additional partner
            const maxPartners = 5; // Set maximum partners

            // Add event listener for the Add Partner button
            document.getElementById('add_partner_button').addEventListener('click', addPartner);

            // Form submission event
            document.querySelector('form').addEventListener('submit', function(event) {
                let isValid = true;

                if (document.getElementById('have_partner').value === '1') {
                    // Validate partner fields only if "Yes" is selected
                    const partnerFields = document.querySelectorAll('.partner-details');

                    partnerFields.forEach(partnerField => {
                        const firstName = partnerField.querySelector(
                            `input[id^='partner_first_name_']`);
                        const lastName = partnerField.querySelector(
                            `input[id^='partner_last_name_']`);
                        const dob = partnerField.querySelector(`input[id^='dob_']`);
                        const phone = partnerField.querySelector(
                            `input[id^='partner_phone_number_']`);
                        const email = partnerField.querySelector(`input[id^='partner_email_']`);
                        const hourInput = partnerField.querySelector('.hoursInput');
                        const minuteInput = partnerField.querySelector('.minutesInput');

                        // Reset custom error messages
                        firstName.setCustomValidity('');
                        lastName.setCustomValidity('');
                        dob.setCustomValidity('');
                        phone.setCustomValidity('');
                        email.setCustomValidity('');
                        hourInput.setCustomValidity('');
                        minuteInput.setCustomValidity('');

                        // Validate each input field and set custom validity message if there's an error
                        // Validate each input field and set custom validity message if there's an error
                        if (!validateNameInput(firstName.value)) {
                            firstName.setCustomValidity(
                                'Please enter a valid first name (only letters).');
                            isValid = false;
                            firstName.reportValidity(); // Show the error if invalid
                        }
                        if (!validateNameInput(lastName.value)) {
                            lastName.setCustomValidity(
                                'Please enter a valid last name (only letters).');
                            isValid = false;
                            lastName.reportValidity(); // Show the error if invalid
                        }
                        if (!dob.value) {
                            dob.setCustomValidity('Please enter a valid date of birth.');
                            isValid = false;
                            dob.reportValidity(); // Show the error if invalid
                        }
                        if (!validatePhoneNumberInput(phone.value)) {
                            phone.setCustomValidity(
                                'Please enter a valid phone number (exactly 10 digits).');
                            isValid = false;
                            phone.reportValidity(); // Show the error if invalid
                        }
                        if (!validateEmailInput(email.value)) {
                            email.setCustomValidity('Please enter a valid email address.');
                            isValid = false;
                            email.reportValidity(); // Show the error if invalid
                        }
                        if (!hourInput.checkValidity()) {
                            hourInput.setCustomValidity('Enter valid hours (1-12)');
                            isValid = false;
                            hourInput.reportValidity(); // Show the error if invalid
                        }
                        if (!minuteInput.checkValidity()) {
                            minuteInput.setCustomValidity('Enter valid minutes (0-59)');
                            isValid = false;
                            minuteInput.reportValidity(); // Show the error if invalid
                        }
                    });
                }

                // Prevent default form submission if there is a validation error
                if (!isValid) {
                    event.preventDefault();
                    alert("Please fill out all required fields correctly.");
                    // Optionally show validation messages for visibility
                    partnerFields.forEach(partnerField => {
                        partnerField.querySelectorAll('input').forEach(input => {
                            input
                                .reportValidity(); // This will show the error message if any field is invalid
                        });
                    });
                }
            });

            // Event listener for partner fields container to handle clicks on remove buttons
            document.getElementById('partner-fields').addEventListener('click', function(event) {
                if (event.target.classList.contains('btn-danger')) {
                    removePartner(event.target);
                }
            });

            // Toggle partner fields visibility based on selection
            function togglePartnerFields() {
                const havePartnerValue = document.getElementById('have_partner').value;
                const partnerFieldsContainer = document.getElementById('partner-fields-container');
                if (havePartnerValue === '1') {
                    partnerFieldsContainer.style.display = 'block';
                } else {
                    partnerFieldsContainer.style.display = 'none';
                    resetPartnerFields(); // Clear partner fields if "No" is selected
                }
            }

            function addPartner() {
                const container = document.getElementById('partner-fields');
                const errorMessage = document.getElementById('error-msg');

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
                            <input type="text" pattern="[A-Za-z\s]+" class="form-control" id="partner_last_name_${partnerIndex}" name="partner_last_names[]" oninput="capitalizeFirstLetter(this)">
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
                            <input type="tel" class="form-control" required id="partner_phone_number_${partnerIndex}" name="partner_phone_numbers[]" pattern="[0-9]{10}" maxlength="10" minlength="10" title="Phone number must be exactly 10 digits and can only contain numbers." oninput="this.value = this.value.replace(/[^0-9]/g, '');">
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
                            <input class="numerology-service-labels hoursInput" type="text" name="partner_hours[]" 
                                   placeholder="HH" pattern="^(0?[1-9]|1[0-2])$" title="Enter hours (1-12)">
                            <input class="numerology-service-labels minutesInput" type="text" name="partner_minutes[]" 
                                   placeholder="MM"  pattern="^(0?[0-9]|[1-5][0-9])$" title="Enter minutes (0-59)">
                            <div class="am-pm d-flex gap-2">
                                <input class="numerology-service-labels" type="radio" name="partner_ampm[${partnerIndex}]" value="am" checked> 
                                <label class="select-radio-custom">AM</label>
                                <input class="numerology-service-labels" type="radio" name="partner_ampm[${partnerIndex}]" value="pm"> 
                                <label class="select-radio-custom">PM</label>
                            </div>
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="button" class="btn btn-danger btn-sm float-end">Remove</button>
                    </div>
                `;

                // Append the newly created partner fields to the container
                container.appendChild(partnerField);
                partnerIndex++; // Increment the partner index for the next partner
            }

            function removePartner(button) {
                const partnerField = button.closest('.partner-details');
                if (partnerField) {
                    partnerField.remove();
                    partnerIndex--; // Decrease the partner index
                }
            }

            function resetPartnerFields() {
                const partnerFields = document.getElementById('partner-fields');
                while (partnerFields.firstChild) {
                    partnerFields.removeChild(partnerFields.firstChild);
                }
                partnerIndex = 1; // Reset partner index to allow adding partners from scratch
            }

            function validateNameInput(value) {
                const re = /^[A-Za-z\s]+$/; // Regex to validate names
                return re.test(value);
            }

            function validatePhoneNumberInput(value) {
                const re = /^[0-9]{10}$/; // Validate phone must be exactly 10 digits
                return re.test(value);
            }

            function validateEmailInput(value) {
                const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Basic email validation
                return re.test(value);
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
        });
    </script> --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Handle partner fields visibility
            document.getElementById('have_partner').addEventListener('change', togglePartnerFields);

            // Initialize partner index for dynamic fields
            let partnerIndex = 1; // Start from 1 for the first additional partner
            const maxPartners = 5; // Set maximum partners

            // Add event listener for the Add Partner button
            document.getElementById('add_partner_button').addEventListener('click', addPartner);

            // Function to validate input fields
            // Validate input function
            function validateInput(input) {
                if (input.id.startsWith("partner_first_name_")) {
                    if (!validateNameInput(input.value)) {
                        input.setCustomValidity('Please enter a valid first name (only letters).');
                        input.style.borderColor = 'red'; // Inline CSS for border color
                        // input.style.backgroundColor = 'rgba(255, 0, 0, 0.1)'; // Light red background
                    } else {
                        input.setCustomValidity('');
                        input.style.borderColor = ''; // Reset border color
                        input.style.backgroundColor = ''; // Reset background color
                    }
                } else if (input.id.startsWith("partner_phone_number_")) {
                    if (!validatePhoneNumberInput(input.value)) {
                        input.setCustomValidity('Please enter a valid phone number (exactly 10 digits).');
                        input.style.borderColor = 'red';
                    } else {
                        input.setCustomValidity('');
                        input.style.borderColor = '';
                    }
                } else if (input.id.startsWith("partner_email_")) {
                    if (!validateEmailInput(input.value)) {
                        input.setCustomValidity('Please enter a valid email address.');
                        input.style.borderColor = 'red';
                    } else {
                        input.setCustomValidity('');
                        input.style.borderColor = '';
                    }
                } else if (input.id.startsWith("dob_")) {
                    if (!input.value) {
                        input.setCustomValidity('Please enter a valid date of birth.');
                        input.style.borderColor = 'red';
                    } else {
                        input.setCustomValidity('');
                        input.style.borderColor = '';
                    }
                } else if (input.id.startsWith("partner_hours") || input.id.startsWith("partner_minutes")) {
                    input.setCustomValidity(''); // Clear custom error
                    // input.style.borderColor = '';
                }
                input.reportValidity(); // Shows the error message if invalid
                // input.style.borderColor = 'red';
            }


            // Adding event listeners for real-time validation
            document.getElementById('partner-fields').addEventListener('input', function(event) {
                if (event.target.matches('input')) {
                    validateInput(event.target);
                }
            });

            // Form submission event
            document.querySelector('form').addEventListener('submit', function(event) {
                let isValid = true;

                if (document.getElementById('have_partner').value === '1') {
                    // Validate partner fields only if "Yes" is selected
                    const partnerFields = document.querySelectorAll('.partner-details');

                    partnerFields.forEach(partnerField => {
                        const firstName = partnerField.querySelector(
                            `input[id^='partner_first_name_']`);
                        const lastName = partnerField.querySelector(
                            `input[id^='partner_last_name_']`);
                        const dob = partnerField.querySelector(`input[id^='dob_']`);
                        const phone = partnerField.querySelector(
                            `input[id^='partner_phone_number_']`);
                        const email = partnerField.querySelector(`input[id^='partner_email_']`);

                        // Validate each input before submitting
                        validateInput(firstName);
                        validateInput(lastName);
                        validateInput(phone);
                        validateInput(email);
                        validateInput(dob);
                    });
                }

                // Prevent default form submission if there is a validation error
                if (!isValid) {
                    event.preventDefault();
                    alert("Please fill out all required fields correctly.");
                }
            });

            // Event listener for partner fields container to handle clicks on remove buttons
            document.getElementById('partner-fields').addEventListener('click', function(event) {
                if (event.target.classList.contains('btn-danger')) {
                    removePartner(event.target);
                }
            });

            // Toggle partner fields visibility based on selection
            function togglePartnerFields() {
                const havePartnerValue = document.getElementById('have_partner').value;
                const partnerFieldsContainer = document.getElementById('partner-fields-container');
                if (havePartnerValue === '1') {
                    partnerFieldsContainer.style.display = 'block';
                } else {
                    partnerFieldsContainer.style.display = 'none';
                    resetPartnerFields(); // Clear partner fields if "No" is selected
                }
            }

            function addPartner() {
                const container = document.getElementById('partner-fields');
                const errorMessage = document.getElementById('error-msg');

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
                            <label for="partner_first_name_${partnerIndex}" class="custom-form-label partner-name-field">Partner First Name:</label>
                            <input type="text" pattern="[A-Za-z\s]+" class="numerology-service-labels" id="partner_first_name_${partnerIndex}" name="partner_first_names[]" required oninput="capitalizeFirstLetter(this)">
                            <div class="invalid-feedback">Please enter a valid first name (only letters).</div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="form-group">
                            <label for="partner_last_name_${partnerIndex}" class="custom-form-label partner-name-field">Partner Last Name:</label>
                            <input type="text" pattern="[A-Za-z\s]+" class="numerology-service-labels" id="partner_last_name_${partnerIndex}" name="partner_last_names[]"  oninput="capitalizeFirstLetter(this)">
                            <div class="invalid-feedback">Please enter a valid last name (only letters).</div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="form-group">
                            <label for="dob_${partnerIndex}" class="custom-form-label">Partner Date of Birth:</label>
                            <input type="date" class="numerology-service-labels" id="dob_${partnerIndex}" name="partner_dobs[]" required>
                            <div class="invalid-feedback">Please enter a valid date of birth.</div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="form-group">
                            <label for="partner_phone_number_${partnerIndex}" class="custom-form-label">Partner Phone Number:</label>
                            <input type="tel" class="numerology-service-labels" required id="partner_phone_number_${partnerIndex}" name="partner_phone_numbers[]" pattern="[0-9]{10}" maxlength="10" minlength="10" title="Phone number must be exactly 10 digits and can only contain numbers." oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                            <div class="invalid-feedback">Phone number must be exactly 10 digits.</div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="form-group">
                            <label for="partner_email_${partnerIndex}" class="custom-form-label">Partner Email:</label>
                            <input type="email" class="numerology-service-labels" id="partner_email_${partnerIndex}" name="partner_emails[]" required>
                            <div class="invalid-feedback">Please enter a valid email address.</div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <label class="custom-form-label" for="time">Time</label>
                        <div class="time-input d-flex align-items-start">
                            <input class="numerology-service-labels hoursInput" type="text" name="partner_hours[]" 
                                   placeholder="HH"  pattern="^(0?[1-9]|1[0-2])$" title="Enter hours (1-12)">
                            <input class="numerology-service-labels minutesInput" type="text" name="partner_minutes[]" 
                                   placeholder="MM"  pattern="^(0?[0-9]|[1-5][0-9])$" title="Enter minutes (0-59)">
                            <div class="am-pm d-flex gap-2">
                                <input class="numerology-service-labels" type="radio" name="partner_ampm[${partnerIndex}]" value="am" checked> 
                                <label class="select-radio-custom">AM</label>
                                <input class="numerology-service-labels" type="radio" name="partner_ampm[${partnerIndex}]" value="pm"> 
                                <label class="select-radio-custom">PM</label>
                            </div>
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="button" class="btn btn-danger btn-sm float-end">Remove</button>
                    </div>
                `;

                // Append the newly created partner fields to the container
                container.appendChild(partnerField);
                partnerIndex++; // Increment the partner index for the next partner
            }

            function removePartner(button) {
                const partnerField = button.closest('.partner-details');
                if (partnerField) {
                    partnerField.remove();
                    partnerIndex--; // Decrease the partner index
                }
            }

            function resetPartnerFields() {
                const partnerFields = document.getElementById('partner-fields');
                while (partnerFields.firstChild) {
                    partnerFields.removeChild(partnerFields.firstChild);
                }
                partnerIndex = 1; // Reset partner index to allow adding partners from scratch
            }

            function validateNameInput(value) {
                const re = /^[A-Za-z\s]+$/; // Regex to validate names
                return re.test(value);
            }

            function validatePhoneNumberInput(value) {
                const re = /^[0-9]{10}$/; // Validate phone must be exactly 10 digits
                return re.test(value);
            }

            function validateEmailInput(value) {
                const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Basic email validation
                return re.test(value);
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
        });
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
            $('.partner-name-field,#first_name, #last_name, #business_name, #partner_first_name_0, #partner_last_name_0,')
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
    {{-- time --}}
    <script>
        // Function to validate hour inputs
        function validateHoursInput() {
            const hourInputs = document.querySelectorAll('.hoursInput');
            hourInputs.forEach(input => {
                input.addEventListener('input', function() {
                    let hours = parseInt(this.value, 10);
                    if (isNaN(hours) || hours < 1) {
                        this.value = ''; // Clear the field if input is invalid
                    } else if (hours > 12) {
                        this.value = 12; // Set to max value if input exceeds 12
                    }
                });
            });
        }

        // Function to validate minute inputs
        function validateMinutesInput() {
            const minuteInputs = document.querySelectorAll('.minutesInput');
            minuteInputs.forEach(input => {
                input.addEventListener('input', function() {
                    let minutes = parseInt(this.value, 10);
                    if (isNaN(minutes) || minutes < 0) {
                        this.value = ''; // Clear the field if input is invalid
                    } else if (minutes > 59) {
                        this.value = 59; // Set to max value if input exceeds 59
                    }
                });
            });
        }

        // Initialize validations when the document is ready
        document.addEventListener('DOMContentLoaded', function() {
            validateHoursInput();
            validateMinutesInput();
        });
    </script>
    {{-- city --}}
    {{-- <script>
        $(document).ready(function() {
            // Function to populate the city dropdown
            function populateCities(selectElement) {
                $.ajax({
                    url: '{{ route('get.cities') }}',
                    method: 'GET',
                    success: function(data) {
                        var select = $(selectElement);
                        select.empty(); // Clear existing options
                        select.append('<option value="">Select</option>'); // Default option

                        $.each(data, function(index, city) {
                            select.append('<option value="' + city.name + '">' + city.name +
                                '</option>');
                        });
                    },
                    error: function(xhr) {
                        console.error('Error fetching cities:', xhr);
                    }
                });
            }

            // Event listener for tab button clicks
            $('[data-tab-target]').on('click', function(evt) {
                var target = $(this).data('tab-target');
                openService(evt, target.substring(1)); // Open the service tab

                // Populate cities when the tab is shown
                var selectElement = $(target).find(
                    '#town_city'); // Look for the town_city select in the target tab
                if (selectElement.length) {
                    populateCities(selectElement); // Call the function to populate cities
                }
            });

            // Trigger click on the first tab on page load
            $('[data-tab-target]').first().trigger('click');
        });
    </script> --}}

    {{-- validation --}}
    <script>
        $(document).ready(function() {
            // Allow only numbers in the phone number field
            $('#phone_number').on('input', function() {
                this.value = this.value.replace(/[^0-9]/g, '');
            });
            $('#town_city').on('input', function() {
                // Remove non-letter characters
                this.value = this.value.replace(/[^a-zA-Z\s]/g, '');
            });
        });
    </script>
@endsection
