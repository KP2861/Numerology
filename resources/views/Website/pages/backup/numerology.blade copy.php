@extends('Website.layouts.app')
@section('content')
<!-- hs Navigation End -->
<!-- hs About Title Start -->
<div class="hs_indx_title_main_wrapper py-3">
    <div class="hs_title_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 full_width">
                <div class="hs_indx_title_left_wrapper text-center">
                    <h2>Numerology</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- hs About Title End -->
    <!-- hs sidebar Start -->
    <div class="hs_kd_sidebar_main_wrapper hs_num_sidebar_main_wrapper numero-tabs-sec">
        <div class="container">
            <div class="row py-5 gy-5 m-0">
                <div class="col-12">
                    <ul class="tabs">
                        <li data-tab-target="#home" data-type="1" class="active tab"
                            onclick="fetchNumerologyType(1)">
                            Name
                            Numerology</li>
                        <li data-tab-target="#about" data-type="2" class="tab"
                            onclick="document.getElementById('name').src='{{url('frontend/assests/images/content/numerology/number-numerology.png') }}'">
                            Mobile Numerology
                        </li>

                        <li data-tab-target="#pricing" data-type="3" class="tab"
                            onclick="document.getElementById('name').src='{{url('frontend/assests/images/content/numerology/advance-numerology.png') }}'">
                            Advance
                            Numerology</li>

                        <li data-tab-target="#news" class="tab" data-type="4"
                            onclick="document.getElementById('name').src='{{url('frontend/assests/images/content/numerology/business-numerology.png') }}'">
                            Business
                            Numerology</li>

                    </ul>

                    <div class="form-group">
                        <label for="package_amount">Package Amount:</label>
                        <input type="text" class="form-control" id="package_amount" name="package_amount" value="" readonly>
                    </div>
                    <div class="form-group">
                        <label for="numerology_type">numerology type:</label>
                        <input type="text" class="form-control" id="numerology_type" name="numerology_type" value="" readonly>
                    </div>
                </div>
                <div class="col-4">
                    <div class="numerology-img">
                        <img id="name" src="{{url('frontend/assests/images/content/numerology/name-numerology.png')}}" class="img-fluid">
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

                    <div class="tab-content m-0">
                        <div id="home" data-tab-content class="active">
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
                                <div class="form-group">
                                    <label for="package_amount">Package Amount:</label>
                                    <input type="text" class="form-control" id="package_amount" name="package_amount" value="" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="numerology_type">numerology type:</label>
                                    <input type="text" class="form-control" id="numerology_type" name="numerology_type" value="" readonly>
                                </div>


                                <div class="form-group">
                                    <label for="first_name">First Name:</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" required>
                                </div>
                                <div class="form-group">
                                    <label for="last_name">Last Name:</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" required>
                                </div>
                                <div class="form-group">
                                    <label for="dob">Date of Birth:</label>
                                    <input type="date" class="form-control" id="dob" name="dob" required>
                                </div>
                                <div class="form-group">
                                    <label>Gender:</label><br>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="gender_male" name="gender" value="Male" required>
                                        <label class="form-check-label" for="gender_male">Male</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="gender_female" name="gender" value="Female" required>
                                        <label class="form-check-label" for="gender_female">Female</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>



                        </div>
                        <div id="pricing" data-tab-content>
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
                            <!-- {{-- <form>
                                <div class="tabs-content">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="exampleInputEmail1" class="form-label">Name</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp">
                                        </div>
                                        <div class="col-6">
                                            <label for="exampleInputPassword1" class="form-label">Phone
                                                Number</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1">
                                        </div>
                                        <div class="col-6">
                                            <label for="exampleInputPassword1" class="form-label">Address</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                                </div>
                            </form> --}} -->
                            <form id="numerologyForm" action="{{ route('advance_numerology.store') }}" method="POST" class="mt-4">
                                @csrf
                                <div class="form-group">
                                    <label for="package_amount">Package Amount:</label>
                                    <input type="text" class="form-control" id="package_amount" name="package_amount" value="" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="numerology_type">numerology type:</label>
                                    <input type="text" class="form-control" id="numerology_type" name="numerology_type" value="" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="phone_number">Phone Number:</label>
                                    <input type="tel"
                                        class="form-control @error('phone_number') is-invalid @enderror"
                                        id="phone_number"
                                        name="phone_number"
                                        value="{{ old('phone_number') }}"
                                        required
                                        pattern="\d{10}"
                                        maxlength="10"
                                        minlength="10"
                                        title="Phone number must be exactly 10 digits">
                                    @error('phone_number')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="dob">Date of Birth:</label>
                                    <input type="date" class="form-control @error('dob') is-invalid @enderror" id="dob" name="dob" value="{{ old('dob') }}" required>
                                    @error('dob')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="area_of_concern">Area of Concern:</label>
                                    <input type="text" class="form-control @error('area_of_concern') is-invalid @enderror" id="area_of_concern" name="area_of_concern" value="{{ old('area_of_concern') }}" required>
                                    @error('area_of_concern')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>

                            </form>
                        </div>
                        <div id="about" data-tab-content>
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
                            <form id="numerologyForm" action="{{ route('phone_numerology.store') }}" method="POST" class="mt-4">
                                @csrf
                                <div class="form-group">
                                    <label for="package_amount">Package Amount:</label>
                                    <input type="text" class="form-control" id="package_amount" name="package_amount" value="" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="numerology_type">numerology type:</label>
                                    <input type="text" class="form-control" id="numerology_type" name="numerology_type" value="" readonly>
                                </div>


                                <div class="form-group">
                                    <label for="phone_number">Phone Number:</label>
                                    <input type="tel"
                                        class="form-control @error('phone_number') is-invalid @enderror"
                                        id="phone_number"
                                        name="phone_number"
                                        value="{{ old('phone_number') }}"
                                        required
                                        pattern="\d{10}"
                                        maxlength="10"
                                        minlength="10"
                                        title="Phone number must be exactly 10 digits">
                                    @error('phone_number')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="dob">Date of Birth:</label>
                                    <input type="date" class="form-control @error('dob') is-invalid @enderror" id="dob" name="dob" value="{{ old('dob') }}" required>
                                    @error('dob')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- <div class="form-group">
                                <label for="area_of_concern">Area of Concern:</label>
                                <input type="text" class="form-control @error('area_of_concern') is-invalid @enderror" id="area_of_concern" name="area_of_concern" value="{{ old('area_of_concern') }}" required>
                                @error('area_of_concern')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div> -->
                                <button type="submit" class="btn btn-primary">Submit</button>

                            </form>
                        </div>
                        <div id="news" data-tab-content>
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
                                    <label for="package_amount">Package Amount:</label>
                                    <input type="text" class="form-control" id="package_amount" name="package_amount" value="" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="numerology_type">numerology type:</label>
                                    <input type="text" class="form-control" id="numerology_type" name="numerology_type" value="" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="first_name">First Name:</label>
                                    <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name" required>
                                    @error('first_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="last_name">Last Name:</label>
                                    <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name" required>
                                    @error('last_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="dob">Date of Birth:</label>
                                    <input type="date" class="form-control @error('dob') is-invalid @enderror" id="dob" name="dob" required>
                                    @error('dob')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="phone_number">Phone Number:</label>
                                    <input type="tel"
                                        class="form-control @error('phone_number') is-invalid @enderror"
                                        id="phone_number"
                                        name="phone_number"
                                        required
                                        pattern="\d{10}"
                                        maxlength="10"
                                        minlength="10"
                                        title="Phone number must be exactly 10 digits">
                                    @error('phone_number')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="business_name">Business Name:</label>
                                    <input type="text" class="form-control @error('business_name') is-invalid @enderror" id="business_name" name="business_name" required>
                                    @error('business_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="type_of_business">Type of Business:</label>
                                    <input type="text" class="form-control @error('type_of_business') is-invalid @enderror" id="type_of_business" name="type_of_business" required>
                                    @error('type_of_business')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="have_partner">Do You Have a Partner?</label>
                                    <select class="form-control @error('have_partner') is-invalid @enderror" id="have_partner" name="have_partner" required onchange="togglePartnerFields()">
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                    @error('have_partner')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Partner Fields Container -->
                                <div id="partner-fields-container" style="display: none;">
                                    <div id="partner-fields">
                                        <div class="form-group">
                                            <label for="partner_first_name_0">Partner First Name:</label>
                                            <input type="text" class="form-control" id="partner_first_name_0" name="partner_first_names[]">
                                        </div>
                                        <div class="form-group">
                                            <label for="partner_last_name_0">Partner Last Name:</label>
                                            <input type="text" class="form-control" id="partner_last_name_0" name="partner_last_names[]">
                                        </div>
                                        <div class="form-group">
                                            <label for="dob_0">Partner Date of Birth:</label>
                                            <input type="date" class="form-control" id="dob_0" name="partner_dobs[]">
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-secondary mb-3" onclick="addPartner()">Add Another Partner</button>
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>

                    </div>
                </div>

            </div>


        </div>

    </div>
</div>

<!-- 
<script>
    document.addEventListener('DOMContentLoaded', () => {
        document.querySelectorAll('.tabs li').forEach(tab => {
            tab.addEventListener('click', function() {
                const type = this.dataset.type;
                console.log('Setting numerology_type to:', type);

                fetch(`/numerology/type/${type}`)
                    .then(response => response.json())
                    .then(data => {
                        console.log('Fetched data:', data);
                        document.getElementById('numerology_type').value = data.numerology_type;
                    })
                    .catch(error => {
                        console.error('Error fetching numerology type:', error);
                    });
            });
        });
    });

    // Handle tab switching
    const tabs = document.querySelectorAll('[data-tab-target]')
    const tabContents = document.querySelectorAll('[data-tab-content]')

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            const target = document.querySelector(tab.dataset.tabTarget)
            tabContents.forEach(tabContent => {
                tabContent.classList.remove('active')
            })
            tabs.forEach(tab => {
                tab.classList.remove('active')
            })
            tab.classList.add('active')
            target.classList.add('active')
        })
    })
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
        firstNameGroup.innerHTML = `<label for="partner_first_name_${partnerIndex}">Partner First Name:</label><input type="text" class="form-control" id="partner_first_name_${partnerIndex}" name="partner_first_names[]" required>`;

        const lastNameGroup = document.createElement('div');
        lastNameGroup.classList.add('form-group');
        lastNameGroup.innerHTML = `<label for="partner_last_name_${partnerIndex}">Partner Last Name:</label><input type="text" class="form-control" id="partner_last_name_${partnerIndex}" name="partner_last_names[]" required>`;

        const dobGroup = document.createElement('div');
        dobGroup.classList.add('form-group');
        dobGroup.innerHTML = `<label for="dob_${partnerIndex}">Partner Date of Birth:</label><input type="date" class="form-control" id="dob_${partnerIndex}" name="partner_dobs[]" required>`;

        container.appendChild(firstNameGroup);
        container.appendChild(lastNameGroup);
        container.appendChild(dobGroup);

        partnerIndex++;
    }
</script> -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Handle tab switching
        $('[data-tab-target]').on('click', function() {
            var target = $(this).data('tab-target');
            var type = $(this).data('type');
            console.log('Setting numerology_type to:', type);

            // Set the numerology_type based on the type
            $('#numerology_type').val(type);

            // Fetch packages from the server
            $.ajax({
                url: '/numerology/type/' + type,
                method: 'GET',
                success: function(data) {
                    console.log('Fetched data:', data); // Log fetched data for debugging

                    // Update form fields based on fetched data
                    if (data && data.numerology) {
                        // Update the package_amount field
                        $('#package_amount').val(data.numerology.packages_amount || ''); // Correct key to match expected data structure
                        console.warn('Package Amount (from data):', data.numerology.packages_amount);
                    } else {
                        console.warn('No numerology data found or data structure is incorrect');
                        $('#package_amount').text(''); // Clear the package_amount field if no data is found
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching numerology type:', error); // Enhanced error logging
                }
            });

            // Show the selected tab content
            $('[data-tab-content]').removeClass('active');
            $('[data-tab-target]').removeClass('active');
            $(this).addClass('active');
            $(target).addClass('active');
        });

        // Toggle partner fields visibility based on the selection
        $('#have_partner').on('change', function() {
            var havePartner = $(this).val();
            var partnerFieldsContainer = $('#partner-fields-container');

            if (havePartner === '1') {
                partnerFieldsContainer.show();
                partnerFieldsContainer.find('input').prop('required', true);
            } else {
                partnerFieldsContainer.hide();
                partnerFieldsContainer.find('input').prop('required', false).val('');
            }
        });

        // Add new partner fields
        $('#add-partner').on('click', function() {
            var partnerIndex = $('#partner-fields .form-group').length / 3; // Calculate the new partner index
            var newFields = `
            <div class="form-group">
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
        `;
            $('#partner-fields').append(newFields);
        });
    });
</script>


@endsection('content')