@extends('Website.layouts.app')
@section('content')
    <!-- Include Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Include Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

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
                                    <input type="hidden" class="form-control numerology_type" name="numerology_type"
                                        value="" readonly>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="first_name">First Name:</label>
                                                <input type="text" pattern="[A-Za-z\s]+" class="form-control"
                                                    id="first_name" name="first_name" required
                                                    oninput="capitalizeFirstLetter(this)">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="last_name">Last Name:</label>
                                                <input type="text" pattern="[A-Za-z\s]+" class="form-control"
                                                    id="last_name" name="last_name" required
                                                    oninput="capitalizeFirstLetter(this)">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="dob">Date of Birth:</label>
                                                <input type="date" class="form-control" id="dob" name="dob"
                                                    required>
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>Gender:</label><br>
                                                <div class="d-flex align-items-center ">
                                                    <div class="form-check">
                                                        <input class="form-check-input numerology-checkbox" type="radio" id="gender_male"
                                                            name="gender" value="Male" required>
                                                        <label class="form-check-label" for="gender_male">Male</label>
                                                    </div>
                                                    <div class="form-check ms-3">
                                                        <input class="form-check-input numerology-checkbox" type="radio" id="gender_female"
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
                                    <input type="hidden" class="form-control numerology_type" name="numerology_type"
                                        value="" readonly>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="phone_number">Phone Number:</label>
                                                <input type="tel" class="form-control" id="phone_number"
                                                    name="phone_number" value="{{ old('phone_number') }}" required
                                                    pattern="\d{10}" maxlength="10" minlength="10"
                                                    title="Phone number must be exactly 10 digits">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="dob">Date of Birth:</label>
                                                <input type="date" class="form-control" id="dob" name="dob"
                                                    value="{{ old('dob') }}" required>
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <div class="form-group" id="area_of_concern_container" required>
                                                    <label>Select Areas of Concern:</label>
                                                    <!-- Checkboxes will be populated here dynamically -->
                                                </div>


                                                <div class="invalid-feedback"></div>
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
                                    <input type="hidden" class="form-control numerology_type" name="numerology_type"
                                        value="" readonly>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="phone_number">Phone Number:</label>
                                                <input type="tel" class="form-control" id="phone_number"
                                                    name="phone_number" value="{{ old('phone_number') }}" required
                                                    pattern="\d{10}" maxlength="10" minlength="10"
                                                    title="Phone number must be exactly 10 digits">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="dob">Date of Birth:</label>
                                                <input type="date" class="form-control" id="dob" name="dob"
                                                    value="{{ old('dob') }}" required>
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn submit-btn mt-4 px-4">Submit</button>
                                </form>
                            </div>
                            {{-- <div id="news" data-tab-content> --}}
                            {{-- <div class="tab-content business" data-tab-content>
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
                                    <div class="form-group">
                                        <input type="hidden" class="form-control numerology_type" name="numerology_type"
                                            value="" readonly>
                                    </div>
                                    <div class="row">
                                        <!-- First Name -->
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="first_name">First Name:</label>
                                                <input type="text" pattern="[A-Za-z\s]+"
                                                    class="form-control @error('first_name') is-invalid @enderror"
                                                    id="first_name" name="first_name" required>
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <!-- Last Name -->
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="last_name">Last Name:</label>
                                                <input type="text" pattern="[A-Za-z\s]+"
                                                    class="form-control @error('last_name') is-invalid @enderror"
                                                    id="last_name" name="last_name" required>
                                                <div class="invalid-feedback"></div>
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
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <!-- Business Name -->
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="business_name">Business Name:</label>
                                                <input type="text" pattern="[A-Za-z\s]+"
                                                    class="form-control @error('business_name') is-invalid @enderror"
                                                    id="business_name" name="business_name" required>
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <!-- Type of Business -->
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="type_of_business">Type of Business:</label>
                                                <input type="text"
                                                    class="form-control @error('type_of_business') is-invalid @enderror"
                                                    id="type_of_business" name="type_of_business" required>
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <!-- Date of Birth -->
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="dob">Date of Birth:</label>
                                                <input type="date"
                                                    class="form-control @error('dob') is-invalid @enderror" id="dob"
                                                    name="dob" required>
                                                <div class="invalid-feedback"></div>
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
                                            <!-- Partner Fields -->
                                            <div class="form-group">
                                                <label for="partner_first_name_0">Partner First Name:</label>
                                                <input type="text" pattern="[A-Za-z\s]+" class="form-control"
                                                    id="partner_first_name_0" name="partner_first_names[]">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="partner_last_name_0">Partner Last Name:</label>
                                                <input type="text" pattern="[A-Za-z\s]+" class="form-control"
                                                    id="partner_last_name_0" name="partner_last_names[]">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="dob_0">Partner Date of Birth:</label>
                                                <input type="date" class="form-control" id="dob_0"
                                                    name="partner_dobs[]">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <!-- New Partner Phone Number Field -->
                                            <div class="form-group">
                                                <label for="partner_phone_number_0">Partner Phone Number:</label>
                                                <input type="tel" class="form-control" id="partner_phone_number_0"
                                                    name="partner_phone_numbers[]" pattern="\d{10}" maxlength="10"
                                                    minlength="10" title="Phone number must be exactly 10 digits">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                                </div>
                                           
                                        </div>
                                        <div id="error-message" style="color: red; display: none;">You can only add up to
                                            5 partners.</div>
                                        <button type="button" class="btn btn-secondary mb-3" onclick="addPartner()">Add
                                            Another Partner</button>
                                    </div>

                                    <button type="submit" class="btn submit-btn mt-4 px-4">Submit</button>
                                </form>

                            </div> --}}
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
                                {{-- <form action="{{ route('business_numerology.store') }}" method="POST" class="mt-4">
                                    @csrf
                                    <div class="form-group">
                                        <input type="hidden" class="form-control numerology_type" name="numerology_type"
                                            value="" readonly>
                                    </div>
                                    <div class="row">
                                        <!-- First Name -->
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="first_name">First Name:</label>
                                                <input type="text" pattern="[A-Za-z\s]+"
                                                    class="form-control @error('first_name') is-invalid @enderror"
                                                    id="first_name" name="first_name" required
                                                    oninput="capitalizeFirstLetter(this)">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <!-- Last Name -->
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="last_name">Last Name:</label>
                                                <input type="text" pattern="[A-Za-z\s]+"
                                                    class="form-control @error('last_name') is-invalid @enderror"
                                                    id="last_name" name="last_name" required>
                                                <div class="invalid-feedback"></div>
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
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <!-- Business Name -->
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="business_name">Business Name:</label>
                                                <input type="text" pattern="[A-Za-z\s]+"
                                                    class="form-control @error('business_name') is-invalid @enderror"
                                                    id="business_name" name="business_name" required>
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <!-- Type of Business -->
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="type_of_business">Type of Business:</label>
                                                <!-- Dropdown for business options -->
                                                <select class="form-control" id="type_of_business"
                                                    name="type_of_business" required>
                                                    <option value="">Select Business Type</option>
                                                    <!-- Options will be populated dynamically via jQuery -->
                                                </select>
                                            </div>
                                        </div>






                                        <!-- Date of Birth -->
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="dob">Date of Birth:</label>
                                                <input type="date"
                                                    class="form-control @error('dob') is-invalid @enderror" id="dob"
                                                    name="dob" required>
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <!-- Have Partner -->
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="have_partner">Do You Have a Partner?</label>
                                                <select class="form-control @error('have_partner') is-invalid @enderror"
                                                    id="have_partner" name="have_partner" required
                                                    onchange="togglePartnerFields()">
                                                    <option value="" disabled selected>Select an option</option>
                                                    <!-- Default option -->
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
                                            <!-- Partner Fields -->
                                            <div class="form-group">
                                                <label for="partner_first_name_0">Partner First Name:</label>
                                                <input type="text" pattern="[A-Za-z\s]+" class="form-control"
                                                    id="partner_first_name_0" name="partner_first_names[]" required
                                                    oninput="capitalizeFirstLetter(this)">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="partner_last_name_0">Partner Last Name:</label>
                                                <input type="text" pattern="[A-Za-z\s]+" class="form-control"
                                                    id="partner_last_name_0" name="partner_last_names[]" required>
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="dob_0">Partner Date of Birth:</label>
                                                <input type="date" class="form-control" id="dob_0"
                                                    name="partner_dobs[]" required>
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <!-- New Partner Phone Number Field -->
                                            <div class="form-group">
                                                <label for="partner_phone_number_0">Partner Phone Number:</label>
                                                <input type="tel" class="form-control" id="partner_phone_number_0"
                                                    name="partner_phone_numbers[]" pattern="\d{10}" maxlength="10"
                                                    minlength="10" title="Phone number must be exactly 10 digits"
                                                    required>
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <div id="error-message" style="color: red; display: none;">You can only add up to
                                            5 partners.</div>
                                        <button type="button" class="btn btn-secondary mb-3" onclick="addPartner()">Add
                                            Another Partner</button>
                                    </div>

                                    <button type="submit" class="btn submit-btn mt-4 px-4">Submit</button>
                                </form> --}}

                                <form action="{{ route('business_numerology.store') }}" method="POST" class="mt-4">
                                    @csrf
                                    <div class="form-group">
                                        <input type="hidden" class="form-control numerology_type" name="numerology_type"
                                            value="" readonly>
                                    </div>
                                    <div class="row">
                                        <!-- First Name -->
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="first_name">First Name:</label>
                                                <input type="text" pattern="[A-Za-z\s]+"
                                                    class="form-control @error('first_name') is-invalid @enderror"
                                                    id="first_name" name="first_name" required
                                                    oninput="capitalizeFirstLetter(this)">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <!-- Last Name -->
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="last_name">Last Name:</label>
                                                <input type="text" pattern="[A-Za-z\s]+"
                                                    class="form-control @error('last_name') is-invalid @enderror"
                                                    id="last_name" name="last_name" required
                                                    oninput="capitalizeFirstLetter(this)">
                                                <div class="invalid-feedback"></div>
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
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <!-- Business Name -->
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="business_name">Business Name:</label>
                                                <input type="text" pattern="[A-Za-z\s]+"
                                                    class="form-control @error('business_name') is-invalid @enderror"
                                                    id="business_name" name="business_name" required
                                                    oninput="capitalizeFirstLetter(this)">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <!-- Type of Business -->
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="type_of_business">Type of Business:</label>
                                                <select class="form-control" id="type_of_business"
                                                    name="type_of_business" required>
                                                    <option value="">Select Business Type</option>
                                                    <!-- Options will be populated dynamically via jQuery -->
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Date of Birth -->
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="dob">Date of Birth:</label>
                                                <input type="date"
                                                    class="form-control @error('dob') is-invalid @enderror" id="dob"
                                                    name="dob" required>
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <!-- Have Partner -->
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="have_partner">Do You Have a Partner?</label>
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
                                    </div>

                                    <!-- Partner Fields Container -->
                                    <div id="partner-fields-container" style="display: none;">
                                        <div id="partner-fields">
                                            <!-- Partner Fields -->
                                            <div class="form-group">
                                                <label for="partner_first_name_0">Partner First Name:</label>
                                                <input type="text" pattern="[A-Za-z\s]+" class="form-control"
                                                    id="partner_first_name_0" name="partner_first_names[]" required
                                                    oninput="capitalizeFirstLetter(this)">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="partner_last_name_0">Partner Last Name:</label>
                                                <input type="text" pattern="[A-Za-z\s]+" class="form-control"
                                                    id="partner_last_name_0" name="partner_last_names[]" required
                                                    oninput="capitalizeFirstLetter(this)">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="dob_0">Partner Date of Birth:</label>
                                                <input type="date" class="form-control" id="dob_0"
                                                    name="partner_dobs[]" required>
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="partner_phone_number_0">Partner Phone Number:</label>
                                                <input type="tel" class="form-control" id="partner_phone_number_0"
                                                    name="partner_phone_numbers[]" pattern="\d{10}" maxlength="10"
                                                    minlength="10" title="Phone number must be exactly 10 digits"
                                                    required>
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <div id="error-message" style="color: red; display: none;">You can only add up to
                                            5 partners.</div>
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
    <div class="carousel-item">
        er44444444444444444444444444444444
    </div>
    <div class="carousel-item">
        777777777777777777777777777777777777777
    </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
  </div>
  <button class="carousel-control-prev d-none" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon d-none" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next d-none" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon d-none" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    <!-- Bootstrap Bundle with Popper JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>




    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('form').reset(); // This will reset the form fields on page load
        });
    </script>
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
    {{-- <script>
        $(document).ready(function() {
            $.ajax({
                url: '{{ route('get.area_of_struggles') }}',
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
    </script> --}}

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
                    areaOfConcernContainer.append('<label>Select Areas of Concern:</label><br>');

                    // Populate the container with fetched data as checkboxes
                    $.each(data, function(index, item) {
                        areaOfConcernContainer.append(
                            '<div class="form-check">' +
                            '<input class="form-check-input" type="checkbox" id="area_' +
                            item.id +
                            '" name="area_of_concern[]" value="' + item.id + '">' +
                            // Store the problem ID
                            '<label class="form-check-label" for="area_' + item.id + '">' +
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
                event.preventDefault(); // Prevent the default form submission

                // Create a string from checked checkboxes
                let areasOfConcern = $('input[name="area_of_concern[]"]:checked').map(function() {
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




    {{-- 
    <script>
        function togglePartnerFields() {
            const havePartner = document.getElementById('have_partner').value;
            const partnerFieldsContainer = document.getElementById('partner-fields-container');
            const partnerFields = document.querySelectorAll('#partner-fields-container input');


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

        let partnerIndex = 1;
        const maxPartners = 5;

        function addPartner() {
            const container = document.getElementById('partner-fields');
            const errorMessage = document.getElementById('error-message');

            if (partnerIndex >= maxPartners) {
                errorMessage.style.display = 'block';
                return;
            } else {
                errorMessage.style.display = 'none';
            }

            const partnerField = document.createElement('div');
            partnerField.classList.add('partner-field');
            partnerField.innerHTML = `
        <div class="form-group">
            <label for="partner_first_name_${partnerIndex}">Partner First Name:</label>
            <input type="text" class="form-control" id="partner_first_name_${partnerIndex}" name="partner_first_names[]" required>
            <button type="button" class="btn btn-danger btn-sm mt-2" onclick="removePartner(this)">Remove</button>
        </div>
        <div class="form-group">
            <label for="partner_last_name_${partnerIndex}">Partner Last Name:</label>
            <input type="text" class="form-control" id="partner_last_name_${partnerIndex}" name="partner_last_names[]" required>
        </div>
        <div class="form-group">
            <label for="dob_${partnerIndex}">Partner Date of Birth:</label>
            <input type="date" class="form-control" id="dob_${partnerIndex}" name="partner_dobs[]" required>
        </div>
        <div class="form-group">
            <label for="partner_phone_number_${partnerIndex}">Partner Phone Number:</label>
            <input type="tel" class="form-control" id="partner_phone_number_${partnerIndex}" name="partner_phone_numbers[]" required pattern="\\d{10}" maxlength="10" minlength="10" title="Phone number must be exactly 10 digits">
        </div>
        `;

            container.appendChild(partnerField);
            partnerIndex++;
        }

        function removePartner(button) {
            const partnerField = button.closest('.partner-field');
            partnerField.remove();
            partnerIndex--;
        }
    </script> --}}
    <script>
        function togglePartnerFields() {
            const havePartner = document.getElementById('have_partner').value;
            const partnerFieldsContainer = document.getElementById('partner-fields-container');
            const partnerFields = document.querySelectorAll('#partner-fields-container input');

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

        let partnerIndex = 1;
        const maxPartners = 5;

        function addPartner() {
            const container = document.getElementById('partner-fields');
            const errorMessage = document.getElementById('error-message');

            if (partnerIndex >= maxPartners) {
                errorMessage.style.display = 'block';
                return;
            } else {
                errorMessage.style.display = 'none';
            }

            const partnerField = document.createElement('div');
            partnerField.classList.add('partner-field');
            partnerField.innerHTML = `
            <div class="form-group" style="position: relative;">
                <button type="button" class="btn btn-danger btn-sm" style="position: absolute; top: 0; right: 0;" onclick="removePartner(this)">Remove</button>
                <label for="partner_first_name_${partnerIndex}">Partner First Name:</label>
                <input type="text" class="form-control" id="partner_first_name_${partnerIndex}" name="partner_first_names[]" required>
            </div>
            <div class="form-group">
                <label for="partner_last_name_${partnerIndex}">Partner Last Name:</label>
                <input type="text" class="form-control" id="partner_last_name_${partnerIndex}" name="partner_last_names[]" required>
            </div>
            <div class="form-group">
                <label for="dob_${partnerIndex}">Partner Date of Birth:</label>
                <input type="date" class="form-control" id="dob_${partnerIndex}" name="partner_dobs[]" required>
            </div>
            <div class="form-group">
                <label for="partner_phone_number_${partnerIndex}">Partner Phone Number:</label>
                <input type="tel" class="form-control" id="partner_phone_number_${partnerIndex}" name="partner_phone_numbers[]" required pattern="\\d{10}" maxlength="10" minlength="10" title="Phone number must be exactly 10 digits">
            </div>
            `;
            container.appendChild(partnerField);
            partnerIndex++;
        }

        function removePartner(button) {
            const partnerField = button.closest('.partner-field');
            partnerField.remove();
            partnerIndex--;
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
@endsection('content')
