@extends('Website.layouts.app')
@section('content')
    <section class="consultant-header">
        <div class="container h-100">

            <div class=" h-100 d-flex justify-content-center align-items-center ">
                <h1>
                    Consultant
                </h1>
            </div>
        </div>
    </section>

    <section class="consultant-form-sec bg-white py-xxl-5 pt-2 pb-5">
        <div class="container ">
            <div class="py-xxl-5">
                <div class="row justify-content-center">
                    <div class="col-11 col-md-8 col-xxl-10">
                        <div class="text-center">
                            <h2>
                                Send A Message
                            </h2>
                            <p class="para" style="font-weight: 500">
                                Get your happiness and fortune with our Numerology and
                                Astrology Science!
                            </p>
                        </div>

                        <form id="contactForm" method="POST" action="{{ route('consultant.store') }}" class="bg-white">
                            @csrf
                            <!-- Display Success and Error Messages -->
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

                            <!-- Form Fields -->

                            <!-- Name Field -->
                            <div class="row gy-lg-4 gy-2">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                    <label for="name">Name</label>
                                    <input type="text" id="name" class="form-control" name="name"
                                        value="{{ old('name') }}" required pattern="[A-Za-z\s]+"
                                        oninput="capitalizeFirstLetter(this)" title="Only letters and spaces are allowed" />
                                    <div class="invalid-feedback text-danger small-error" id="nameError"></div>

                                </div>


                                <!-- Email Field -->
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                    <label for="email">Email</label>
                                    <input type="email" id="email" class="form-control" name="email"
                                        value="{{ old('email') }}" required
                                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                                        title="Please enter a valid email address (e.g., user@example.com)">
                                    <div class="invalid-feedback text-danger small-error" id="emailError"></div>

                                </div>

                                <!-- Gender Field -->
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                    <label for="gender">Gender</label>
                                    <select id="gender" class="form-select" name="gender" required>
                                        <option value="">Select Gender</option>
                                        <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                                        <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female
                                        </option>
                                    </select>
                                    <div class="invalid-feedback text-danger small-error" id="genderError"></div>

                                </div>

                                <!-- DOB Field -->
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                    <label for="dob">Date of Birth</label>
                                    <input type="date" id="dob" class="form-control" name="dob"
                                        value="{{ old('dob') }}" required>
                                    <div class="invalid-feedback text-danger small-error" id="dobError"></div>

                                </div>



                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                    <label for="occupation">Occupation</label>
                                    <select id="occupation" name="occupation" class="form-select" required>
                                        {!! $options !!} <!-- Insert the options directly -->
                                    </select>
                                    <div class="invalid-feedback text-danger" id="occupationError"></div>

                                </div>


                                <!-- Phone Field -->
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                    <label for="phone">Phone</label>
                                    <input type="tel" id="phone" class="form-control" name="phone"
                                        value="{{ old('phone') }}" required pattern="\d{10}"
                                        title="Please enter a 10-digit phone number.">
                                    <div class="invalid-feedback text-danger" id="phoneError"></div>

                                </div>


                                <!-- Message Field -->
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                    <label for="message">Message</label>
                                    <textarea id="message" rows="3" class="form-control" name="message" required>{{ old('message') }}</textarea>
                                    <div class="invalid-feedback text-danger" id="messageError"></div>

                                </div>


                                <!-- Submit Button -->
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="response"></div>
                                    <div class="text-center mt-4 mt-xxl-5 pt-xxl-2">
                                        <button type="submit" class="submit-button-contactus text-center">Submit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>

        </div>
    </section>

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
            const nameField = document.getElementById('name');
            const emailField = document.getElementById('email');
            const phoneField = document.getElementById('phone');
            const genderField = document.getElementById('gender');
            const dobField = document.getElementById('dob');
            const occupationField = document.getElementById('occupation');
            const messageField = document.getElementById('message');

            const nameError = document.getElementById('nameError');
            const emailError = document.getElementById('emailError');
            const phoneError = document.getElementById('phoneError');
            const genderError = document.getElementById('genderError');
            const dobError = document.getElementById('dobError');
            const occupationError = document.getElementById('occupationError');
            const messageError = document.getElementById('messageError');

            function validateName() {
                const value = nameField.value;
                if (/^[A-Za-z\s]+$/.test(value)) {
                    nameField.classList.remove('is-invalid');
                    nameError.textContent = '';
                } else {
                    nameField.classList.add('is-invalid');
                    nameError.textContent = 'Only letters and spaces are allowed.';
                }
            }

            function validateEmail() {
                const value = emailField.value;
                const emailRegex = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/i;
                if (emailRegex.test(value)) {
                    emailField.classList.remove('is-invalid');
                    emailError.textContent = '';
                } else {
                    emailField.classList.add('is-invalid');
                    emailError.textContent = 'Please enter a valid email address.';
                }
            }

            function validatePhone() {
                const value = phoneField.value;
                const phoneRegex = /^\d{10}$/;
                if (phoneRegex.test(value)) {
                    phoneField.classList.remove('is-invalid');
                    phoneError.textContent = '';
                } else {
                    phoneField.classList.add('is-invalid');
                    phoneError.textContent = 'Please enter a valid 10-digit phone number.';
                }
            }

            function validateGender() {
                if (genderField.value) {
                    genderField.classList.remove('is-invalid');
                    genderError.textContent = '';
                } else {
                    genderField.classList.add('is-invalid');
                    genderError.textContent = 'Please select a gender.';
                }
            }

            function validateDOB() {
                if (dobField.value) {
                    dobField.classList.remove('is-invalid');
                    dobError.textContent = '';
                } else {
                    dobField.classList.add('is-invalid');
                    dobError.textContent = 'Please select a date of birth.';
                }
            }

            function validateOccupation() {
                if (occupationField.value) {
                    occupationField.classList.remove('is-invalid');
                    occupationError.textContent = '';
                } else {
                    occupationField.classList.add('is-invalid');
                    occupationError.textContent = 'Please select an occupation.';
                }
            }

            function validateMessage() {
                if (messageField.value.trim()) {
                    messageField.classList.remove('is-invalid');
                    messageError.textContent = '';
                } else {
                    messageField.classList.add('is-invalid');
                    messageError.textContent = 'Please enter a message.';
                }
            } // Event listeners for real-time validation         
            nameField.addEventListener('input', validateName);
            emailField.addEventListener('input', validateEmail);
            phoneField.addEventListener('input', validatePhone);
            genderField.addEventListener('change', validateGender);
            dobField.addEventListener('change', validateDOB);
            occupationField.addEventListener('change', validateOccupation);
            messageField.addEventListener('input', validateMessage);

            // Form submission validation   
            document.getElementById('contactForm').addEventListener('submit', function(event) {
                validateName();
                validateEmail();
                validatePhone();
                validateGender();
                validateDOB();
                validateOccupation();
                validateMessage();

                // Prevent form submission if any field is invalid 
                if (document.querySelectorAll('.is-invalid').length > 0) {
                    event.preventDefault();
                    // Scroll to the first invalid field    
                    document.querySelector('.is-invalid').scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
@endsection
