@extends('Website.layouts.app')
@section('content')
<!-- hs Navigation End -->
<!-- hs About Title Start -->
<div class="hs_indx_title_main_wrapper py-0">
    <div class="hs_title_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 full_width">
                <div class="hs_indx_title_left_wrapper text-center py-3 py-xxl-5">
                    <h2>Numerology</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- hs About Title End -->
    <!-- hs sidebar Start -->
    <div class="hs_kd_sidebar_main_wrapper hs_num_sidebar_main_wrapper numero-tabs-sec">
        <div class="container">
            <div class="row py-xxl-5 gy-4 gy-xxl-5 m-0">
                <div class="col-12">
                    {{-- <ul class="tabs">
                            <li data-tab-target="#home" data-type="1" class="active tab" onclick="fetchNumerologyType(1)">
                                Name
                                Numerology</li>
                            <li data-tab-target="#about" data-type="2" class="tab"
                                onclick="document.getElementById('name').src='{{ asset('frontend/assests/images/content/numerology/number-numerology.png') }}'">
                    Mobile Numerology
                    </li>

                    <li data-tab-target="#pricing" data-type="3" class="tab"
                        onclick="document.getElementById('name').src='{{ asset('frontend/assests/images/content/numerology/advance-numerology.png') }}'">
                        Advance
                        Numerology</li>

                    <li data-tab-target="#news" class="tab" data-type="4"
                        onclick="document.getElementById('name').src='{{ asset('frontend/assests/images/content/numerology/business-numerology.png') }}'">
                        Business
                        Numerology</li>

                    </ul> --}}
                    <ul class="tabs">
                        <li data-tab-target=".tab-content.home" data-type="1" class="active tab"
                            onclick="fetchNumerologyType(1)">Name Numerology</li>
                        <li data-tab-target=".tab-content.mobile" data-type="2" class="tab"
                            onclick="document.getElementById('name').src='{{ asset('frontend/assests/images/content/numerology/number-numerology.png') }}'">
                            Mobile Numerology</li>
                        <li data-tab-target=".tab-content.advance" data-type="3" class="tab"
                            onclick="document.getElementById('name').src='{{ asset('frontend/assests/images/content/numerology/advance-numerology.png') }}'">
                            Advance Numerology</li>
                        <li data-tab-target=".tab-content.business" data-type="4" class="tab"
                            onclick="document.getElementById('name').src='{{ asset('frontend/assests/images/content/numerology/business-numerology.png') }}'">
                            Business Numerology
                        </li>
                    </ul>

                </div>
                <div class="col-4">
                    <div class="numerology-img">
                        <img id="name"
                            src="{{ asset('frontend/assests/images/content/numerology/name-numerology.png') }}"
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-8">
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

                    <div class="tab-content  right-content-part m-0">
                        {{-- <div id="home" data-tab-content class="active"> --}}
                        <div class="tab-content home active" data-tab-content>
                            <div>
                                <h2 class="mb-3 fw-bold">
                                    Name Numerology
                                </h2>
                                <p class=" mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Eligendi, nobis dolores. Voluptatibus explicabo
                                    exercitationem
                                    laudantium blanditiis voluptates molestias vel maxime
                                    temporibus
                                    dicta! Fugit officia, excepturi exercitationem cupiditate
                                    sed
                                    unde maiores.</p>
                            </div>


                            <form action="{{ route('name_numerology.store') }}" method="POST" class="mt-4">
                                @csrf
                                <!-- data.numerology_type -->
                                <!-- <div class="form-group">
                                                                                                                                                                                                                            <label for="package_amount">Package Amount:</label>
                                                                                                                                                                                                                            <input type="text" class="form-control package_amount" name="package_amount" value="" readonly>
                                                                                                                                                                                                                        </div> -->
                                <div class="form-group">
                                    <input type="hidden" class="form-control numerology_type" name="numerology_type"
                                        value="" readonly>
                                </div>


                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="first_name">First Name:</label>
                                            <input type="text" class="form-control" id="first_name" name="first_name"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="last_name">Last Name:</label>
                                            <input type="text" class="form-control" id="last_name" name="last_name"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="dob">Date of Birth:</label>
                                            <input type="date" class="form-control" id="dob" name="dob"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Gender:</label><br>
                                            <div class="d-flex align-items-center jus">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="gender_male"
                                                        name="gender" value="Male" required>
                                                    <label class="form-check-label" for="gender_male">Male</label>
                                                </div>
                                                <div class="form-check ms-3">
                                                    <input class="form-check-input" type="radio" id="gender_female"
                                                        name="gender" value="Female" required>
                                                    <label class="form-check-label" for="gender_female">Female</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <button type="submit" class="btn submit-btn mt-4 px-4">Submit</button>
                            </form>



                        </div>
                        {{-- <div id="pricing" data-tab-content> --}}
                        <div class="tab-content advance" data-tab-content>
                            <div>
                                <h2 class="mb-3 fw-bold">
                                    Advance Numerology
                                </h2>
                                <p class=" mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Eligendi, nobis dolores. Voluptatibus explicabo
                                    exercitationem
                                    laudantium blanditiis voluptates molestias vel maxime
                                    temporibus
                                    dicta! Fugit officia, excepturi exercitationem cupiditate
                                    sed
                                    unde maiores.</p>
                            </div>

                            <form id="numerologyForm" action="{{ route('advance_numerology.store') }}" method="POST"
                                class="mt-4">
                                @csrf
                                <!-- <div class="form-group">
                                                                                                                                                                                        =======
                                                                                                                                                                                                                  
                                                                                                                                                                                                                    <form id="numerologyForm" action="{{ route('advance_numerology.store') }}" method="POST" class="mt-4">
                                                                                                                                                                                                                        @csrf
                                                                                                                                                                                                                        <!-- <div class="form-group">
                                                                                                                                                                                        >>>>>>> b3f5d268acf0472b9398425983c975f3210314b3
                                                                                                                                                                                                                            <label for="package_amount">Package Amount:</label>
                                                                                                                                                                                                                            <input type="text" class="form-control package_amount" name="package_amount" value="" readonly>
                                                                                                                                                                                                                        </div> -->
                                <div class="form-group">
                                    <input type="hidden" class="form-control numerology_type" name="numerology_type"
                                        value="" readonly>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="phone_number">Phone Number:</label>
                                            <input type="tel"
                                                class="form-control @error('phone_number') is-invalid @enderror"
                                                id="phone_number" name="phone_number"
                                                value="{{ old('phone_number') }}" required pattern="\d{10}"
                                                maxlength="10" minlength="10"
                                                title="Phone number must be exactly 10 digits">
                                            @error('phone_number')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="dob">Date of Birth:</label>
                                            <input type="date"
                                                class="form-control @error('dob') is-invalid @enderror" id="dob"
                                                name="dob" value="{{ old('dob') }}" required>
                                            @error('dob')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="area_of_concern">Area of Concern:</label>
                                            <input type="text"
                                                class="form-control @error('area_of_concern') is-invalid @enderror"
                                                id="area_of_concern" name="area_of_concern"
                                                value="{{ old('area_of_concern') }}" required>
                                            @error('area_of_concern')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn submit-btn mt-4 px-4">Submit</button>

                            </form>
                        </div>
                        {{-- <div id="about" data-tab-content> --}}
                        <div class="tab-content mobile" data-tab-content>
                            <div>
                                <h2 class="mb-3 fw-bold">
                                    Mobile Numerology
                                </h2>
                                <p class=" mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Eligendi, nobis dolores. Voluptatibus explicabo
                                    exercitationem
                                    laudantium blanditiis voluptates molestias vel maxime
                                    temporibus
                                    dicta! Fugit officia, excepturi exercitationem cupiditate
                                    sed
                                    unde maiores.</p>
                            </div>
                            <form id="numerologyForm" action="{{ route('phone_numerology.store') }}" method="POST"
                                class="mt-4">
                                @csrf
                                <!-- <div class="form-group">
                                                                                                                                                                                                                            <label for="package_amount">Package Amount:</label>
                                                                                                                                                                                                                            <input type="text" class="form-control package_amount" name="package_amount" value="" readonly>
                                                                                                                                                                                                                        </div> -->
                                <div class="form-group">
                                    <input type="hidden" class="form-control numerology_type" name="numerology_type"
                                        value="" readonly>
                                </div>



                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="phone_number">Phone Number:</label>
                                            <input type="tel"
                                                class="form-control @error('phone_number') is-invalid @enderror"
                                                id="phone_number" name="phone_number"
                                                value="{{ old('phone_number') }}" required pattern="\d{10}"
                                                maxlength="10" minlength="10"
                                                title="Phone number must be exactly 10 digits">
                                            @error('phone_number')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="dob">Date of Birth:</label>
                                            <input type="date"
                                                class="form-control @error('dob') is-invalid @enderror" id="dob"
                                                name="dob" value="{{ old('dob') }}" required>
                                            @error('dob')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="form-group">
                                                                                                                                                                                                                        <label for="area_of_concern">Area of Concern:</label>
                                                                                                                                                                                                                        <input type="text" class="form-control @error('area_of_concern') is-invalid @enderror" id="area_of_concern" name="area_of_concern" value="{{ old('area_of_concern') }}" required>
                                                                                                                                                                                                                        @error('area_of_concern')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
                                                                                                                                                                                                                    </div> -->

                                <button type="submit" class="btn submit-btn mt-4 px-4">Submit</button>

                            </form>
                        </div>
                        {{-- <div id="news" data-tab-content> --}}
                        <div class="tab-content business" data-tab-content>
                            <div>
                                <h2 class="mb-3 fw-bold">
                                    Business Numerology
                                </h2>
                                <p class=" mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Eligendi, nobis dolores. Voluptatibus explicabo
                                    exercitationem
                                    laudantium blanditiis voluptates molestias vel maxime
                                    temporibus
                                    dicta! Fugit officia, excepturi exercitationem cupiditate
                                    sed
                                    unde maiores.</p>
                            </div>
                            <form action="{{ route('business_numerology.store') }}" method="POST" class="mt-4">
                                @csrf
                                <!-- <div class="form-group">
                                                                                                                                                                                                                            <label for="package_amount">Package Amount:</label>
                                                                                                                                                                                                                            <input type="text" class="form-control package_amount" name="package_amount" value="" readonly>
                                                                                                                                                                                                                        </div> -->
                                <div class="form-group">
                                    <input type="hidden" class="form-control numerology_type" name="numerology_type"
                                        value="" readonly>
                                </div>
                                <div class="row">
                                    <!-- First Name -->
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="first_name">First Name:</label>
                                            <input type="text"
                                                class="form-control @error('first_name') is-invalid @enderror"
                                                id="first_name" name="first_name" required>
                                            @error('first_name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- Last Name -->
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="last_name">Last Name:</label>
                                            <input type="text"
                                                class="form-control @error('last_name') is-invalid @enderror"
                                                id="last_name" name="last_name" required>
                                            @error('last_name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- Phone Number -->
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="phone_number">Phone Number:</label>
                                            <input type="tel"
                                                class="form-control @error('phone_number') is-invalid @enderror"
                                                id="phone_number" name="phone_number" required pattern="\d{10}"
                                                maxlength="10" minlength="10"
                                                title="Phone number must be exactly 10 digits">
                                            @error('phone_number')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- Business Name -->
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="business_name">Business Name:</label>
                                            <input type="text"
                                                class="form-control @error('business_name') is-invalid @enderror"
                                                id="business_name" name="business_name" required>
                                            @error('business_name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- Type of Business -->
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="type_of_business">Type of Business:</label>
                                            <input type="text"
                                                class="form-control @error('type_of_business') is-invalid @enderror"
                                                id="type_of_business" name="type_of_business" required>
                                            @error('type_of_business')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- Date of Birth -->
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="dob">Date of Birth:</label>
                                            <input type="date"
                                                class="form-control @error('dob') is-invalid @enderror"
                                                id="dob" name="dob" required>
                                            @error('dob')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- Have Partner -->
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="have_partner">Do You Have a Partner?</label>
                                            <select class="form-control @error('have_partner') is-invalid @enderror"
                                                id="have_partner" name="have_partner" required
                                                onchange="togglePartnerFields()">
                                                <option value="0">No</option>
                                                <option value="1">Yes</option>
                                            </select>
                                            @error('have_partner')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <!-- Partner Fields Container -->
                                <div id="partner-fields-container" style="display: none;">
                                    <div id="partner-fields">
                                        <div class="form-group">
                                            <label for="partner_first_name_0">Partner First Name:</label>
                                            <input type="text" class="form-control" id="partner_first_name_0"
                                                name="partner_first_names[]">
                                        </div>
                                        <div class="form-group">
                                            <label for="partner_last_name_0">Partner Last Name:</label>
                                            <input type="text" class="form-control" id="partner_last_name_0"
                                                name="partner_last_names[]">
                                        </div>
                                        <div class="form-group">
                                            <label for="dob_0">Partner Date of Birth:</label>
                                            <input type="date" class="form-control" id="dob_0"
                                                name="partner_dobs[]">
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-secondary mb-3" onclick="addPartner()">Add
                                        Another Partner</button>
                                </div>

                                <button type="submit" class="btn submit-btn mt-4 px-4">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="tab-content mobile" data-tab-content=".tab-content.mobile">
    <!-- mobile-numerology -->

    <div class="hs_about_indx_main_wrapper white-overlay-section wht-mobile-n">
        <div class="white-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="hs_about_heading_main_wrapper text-start">
                        <div class="">
                            <h2 class="subheading mb-3 fw-bold">What is <span>Mobile Numeroscope?</span></h2>

                            <p class="para">The mobile you use has significance because of your mobile number. Every
                                feature of your smartphone works on your mobile number. People can contact you only
                                because
                                of your mobile number. Hence, the worthiness of your phone number cannot be undermined.
                                Mobile phone numerology report assists you in choosing a mobile number compatible with
                                your
                                birth number (psychic number) or mot. Mobile numerology calculation adds up all the
                                digits
                                of the mobile number, reduces it to a single number, and then checks the compatibility
                                of
                                the single number obtained with the psychic number. A compatible mobile number, as per
                                numerology, is a lucky mobile number. A lucky number vibrates with positive frequency
                                and
                                attracts goodness.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5 pt-5">
                <div class="col-7">
                    <h2 class="subheading fw-bold">
                        Mobile Number as per Numerology
                    </h2>
                    <p class="para mt-3">
                        A mobile phone is no longer a luxury; it is a necessity. In the present scenario, a smartphone
                        is
                        everything. From connecting with dear ones to tracking the whereabouts of your close ones to
                        meeting
                        expenses at a click to monitoring health, there is nothing you can’t do with a mobile phone.
                    </p>
                    <p class="para mt-2">
                        You have invested a sum of money on your new phone, but did you think about your mobile number?
                        What
                        if your mobile number is not lucky for you and becomes the cause of concern? You may think what
                        a
                        lucky mobile number is.
                    </p>
                    <p class="para mt-2">
                        Numerology can help you find a lucky mobile phone number. Mobile numerology suggests a mobile
                        number
                        compatible with your date of birth. Selecting favourable numbers as per mobile numerology can
                        enhance the positive vibrations of your number and its ruling planet, attracting goodness into
                        your
                        life.
                    </p>


                </div>
                <div class="col-5">
                    <img id="name"
                        src="{{ url('frontend/assests/images/content/numerology/mobile-numerology-section.png') }}"
                        class="img-fluid">
                </div>

            </div>
        </div>
    </div>
</div>

<div class="tab-content advance" data-tab-content=".tab-content.advance">
    <!-- advance-numerology -->
    <div class="hs_about_indx_main_wrapper white-overlay-section wht-mobile-n">
        <div class="white-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="hs_about_heading_main_wrapper text-start">
                        <div class="">
                            <h2 class="subheading mb-3 fw-bold">What is <span>Advanced Numerology?</span></h2>

                            <p class="para">Advanced Numerology is the study of the
                                secretive and occult side of the numbers
                                . It has its base in Cheiro„s
                                numerological principles and a time tested centuries-old predictive principle of
                                Vedic Astrology
                                . It reveals the occultsecrets that are inherent in the numbers. In this present world
                                of
                                stress and strife where unhappiness and a lack ofmental peace have become the order of
                                the
                                day, it helps us identify our strengths and weaknesses and makes ourlives harmonious and
                                happier by avoiding the weak fields and harnessing the strengths inherent in us. To put
                                itsimply, advanced numerology is an
                                occult technology
                                which helps us choose the right path at the right moment.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5 pt-5">
                <div class="col-7">
                    <h2 class="subheading fw-bold">
                        Advanced Numerology is an
                        occult technology
                    </h2>
                    <p class="para mt-3">
                        One may think that the numbers are used in mathematical calculations only and they do not
                        reflect
                        anything beyondthat. But the popular notion of mankind since time immemorial is that the numbers
                        have an occult and secretivereflection attained from planets and that they always act at the
                        behest
                        of planets. This notion gradually gainedcredence as the science of numerology proved its worth
                        time
                        and again.
                    </p>
                    <p class="para mt-2">
                        Advanced numerology helps us to identify the possible good and bad periods in our lives so that
                        we
                        can choose to becareful and cautious. It also works as an effective instrument in predicting the
                        various events in our lives. Advancednumerology has a clear-cut method for discerning such
                        events.
                    </p>

                </div>
                <div class="col-5">
                    <img id="name"
                        src="{{ asset('frontend/assests/images/content/numerology/mobile-numerology-section.png') }}"
                        class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="tab-content business" data-tab-content=".tab-content.business">
    <!-- business-numerology -->
    <div class="hs_about_indx_main_wrapper white-overlay-section wht-mobile-n">
        <div class="white-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="hs_about_heading_main_wrapper text-start">
                        <div class="">
                            <h2 class="subheading mb-3 fw-bold">What is <span>Business Numerology?</span></h2>
                            <p class="para">Business numerology revolves around comparing one’s good or bad
                                numbers
                                to
                                the names of their companies, brands or businesses. Choosing a suitable company name
                                as
                                per
                                numerology calculations may bring people luck. One must also consider other suitable
                                variables when determining the business numerology. This includes figuring out the
                                ideal
                                time to establish a firm, the optimal period to close deals, vetting potential
                                business
                                partners and much more.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5 pt-5">
                <div class="col-7">
                    <h2 class="subheading fw-bold">
                        Business Name as per Numerology
                    </h2>
                    <p class="para mt-3">
                        Numerologists say that many people who don’t get their numbers verified, often start their
                        businesses on the dates they choose or don’t choose their business name, as per numerology
                        and
                        often
                        run into several problems later on, such as financial losses and legal problems with
                        business
                        partners.
                    </p>
                    <p class="para mt-2">
                        When launching a new firm, one must get rid of all concerns about how things will turn out
                        in
                        the
                        future and want to be sure of their future prosperity. Before they establish a business, the
                        first
                        thing people will need to do is choose a name for it. So, one must choose their business
                        name as
                        per
                        numerology.
                    </p>

                </div>
                <div class="col-5">
                    <img id="name"
                        src="{{ asset('frontend/assests/images/content/numerology/mobile-numerology-section.png') }}"
                        class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
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
    function togglePartnerFields() {
        const havePartner = document.getElementById('have_partner').value;
        const partnerFieldsContainer = document.getElementById('partner-fields-container');

        if (havePartner === '1') {
            partnerFieldsContainer.style.display = 'block';
            document.querySelectorAll('#partner-fields-container input').forEach(input => {
                input.setAttribute('required', true);
            });
        } else {
            partnerFieldsContainer.style.display = 'none';
            document.querySelectorAll('#partner-fields-container input').forEach(input => {
                input.removeAttribute('required');
                input.value = '';
            });
        }
    }

    let partnerIndex = 1;

    function addPartner() {
        const container = document.getElementById('partner-fields');

        const firstNameGroup = document.createElement('div');
        firstNameGroup.classList.add('form-group');
        firstNameGroup.innerHTML =
            `<label for="partner_first_name_${partnerIndex}">Partner First Name:</label><input type="text" class="form-control" id="partner_first_name_${partnerIndex}" name="partner_first_names[]" required>`;

        const lastNameGroup = document.createElement('div');
        lastNameGroup.classList.add('form-group');
        lastNameGroup.innerHTML =
            `<label for="partner_last_name_${partnerIndex}">Partner Last Name:</label><input type="text" class="form-control" id="partner_last_name_${partnerIndex}" name="partner_last_names[]" required>`;

        const dobGroup = document.createElement('div');
        dobGroup.classList.add('form-group');
        dobGroup.innerHTML =
            `<label for="dob_${partnerIndex}">Partner Date of Birth:</label><input type="date" class="form-control" id="dob_${partnerIndex}" name="partner_dobs[]" required>`;

        container.appendChild(firstNameGroup);
        container.appendChild(lastNameGroup);
        container.appendChild(dobGroup);

        partnerIndex++;
    }
</script>
@endsection('content')