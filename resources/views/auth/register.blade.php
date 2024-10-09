<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.css">
    <link rel="stylesheet" href="{{ URL::asset('frontend/assests/css/register.css') }}">
    <style>
    @media screen and (max-width:999px) {
        .eye-icon {
            right:14px!important;
        }
    }
    </style>
</head>

<body>
    <div class="custom-vh-100 custom-mobile-vh vw-100 register d-flex justify-content-center align-items-center">
        <div class="row h-100 g-0 m-0 justify-content-center align-items-center">
            <div class="col-lg-10 col-12">
                <div class="inner-wrapper d-flex flex-column align-items-start justify-content-center">
                    <a href="{{ url('/') }}" class="home-link text-decoration-none"> Home</a>
                    <div>
                        <h1 class="main-heading  mb-4 pb-xxl-2">
                            Register
                        </h1>
                    </div>

                    <div>
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
                        <form id="registrationForm" method="POST" action="{{ route('register') }}">

                            <div class="row">
                                @csrf
                                <div class="col-lg-6 col-12">
                                    <div class="form-group pe-lg-5   pb-2 pb-xxl-4 mb-xxl-2 input-wrapper">
                                        <label for="name" class="custom-label">First Name</label>
                                        <input type="text" id="name" name="name"
                                            class="form-control py-2 h-auto @error('name') is-invalid @enderror"
                                            placeholder="First Name" value="{{ old('name') }}" required minlength="2"
                                            maxlength="255" oninput="capitalizeFirstLetter(this)">
                                        @error('name')
                                        <div class="invalid-feedback error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="form-group ms-lg-5   pb-2 pb-xxl-4 mb-xxl-2 input-wrapper">
                                        <label for="middle_name" class="custom-label">Middle Name</label>
                                        <input type="text" id="middle_name" name="middle_name"
                                            class="form-control py-2 h-auto @error('middle_name') is-invalid @enderror"
                                            placeholder="Middle Name" value="{{ old('middle_name') }}" minlength="1"
                                            maxlength="255">
                                        @error('middle_name')
                                        <div class="invalid-feedback error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="form-group pe-lg-5   pb-2 pb-xxl-4 mb-xxl-2 input-wrapper">
                                        <label for="last_name" class="custom-label">Last Name</label>
                                        <input type="text" id="last_name" name="last_name"
                                            class="form-control py-2 h-auto @error('last_name') is-invalid @enderror"
                                            placeholder="Last Name" value="{{ old('last_name') }}" required
                                            minlength="2" maxlength="255" oninput="capitalizeFirstLetter(this)">
                                        @error('last_name')
                                        <div class="invalid-feedback error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="form-group ms-lg-5   pb-2 pb-xxl-4 mb-xxl-2 input-wrapper">
                                        <label for="email" class="custom-label">Email</label>
                                        <input type="text" id="email" name="email"
                                            class="form-control  py-2 h-auto @error('email') is-invalid @enderror"
                                            placeholder="Email" value="{{ old('email') }}" required>
                                        <div class="invalid-feedback email-error error">
                                            <!-- Dynamic error messages for email validation will be inserted here -->
                                        </div>
                                        @error('email')
                                        <div class="invalid-feedback error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <!-- Phone Number -->
                                    <div class="form-group pe-lg-5   pb-2 pb-xxl-4 mb-xxl-2 input-wrapper">
                                        <label for="phone_number" class="custom-label">Phone Number</label>
                                        <input type="tel" id="phone_number" name="phone_number"
                                            class="form-control py-2 h-auto @error('phone_number') is-invalid @enderror"
                                            placeholder="Phone Number" value="{{ old('phone_number') }}" required
                                            minlength="10" maxlength="10" pattern="\d{10}" inputmode="numeric"
                                            oninput="validatePhoneNumber(this)">
                                        @error('phone_number')
                                        <div class="invalid-feedback error">{{ $message }}</div>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-lg-6 col-12">
                                    <!-- Date of Birth (DOB) -->
                                    <div class="form-group ms-lg-5   pb-2 pb-xxl-4 mb-xxl-2 input-wrapper">
                                        <label for="dob" class="custom-label">Date of Birth</label>
                                        <input type="date" id="dob" name="dob"
                                            class="form-control py-2 h-auto @error('dob') is-invalid @enderror"
                                            value="{{ old('dob') }}" required>
                                        @error('dob')
                                        <div class="invalid-feedback error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div
                                        class="form-group position-relative pe-lg-5 pb-2 pb-xxl-4 mb-xxl-2 input-wrapper">
                                        <label for="password" class="custom-label">Password</label>
                                        <div class="position-relative">
                                            <input type="password" id="password" name="password"
                                                class="form-control py-2 h-auto password-input @error('password') is-invalid @enderror"
                                                placeholder="Password" required minlength="8">
                                            <div class="invalid-feedback password-error error error-position">
                                                <!-- Dynamic error messages for password validation will be inserted here -->
                                            </div>
                                            @error('password')
                                            <div class="invalid-feedback error">{{ $message }}</div>
                                            @enderror
                                            <!-- Eye Icon for Toggle -->
                                            <i class="eye-icon fas fa-eye position-absolute" id="toggle-password"
                                                style="cursor: pointer; right: 28px; top: 0; bottom:0; height:13px; margin:auto"></i>
                                        </div>

                                        <!-- Adjusted padding -->
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div
                                        class="form-group position-relative ms-lg-5 pb-2 pb-xxl-4 mb-xxl-2 input-wrapper">
                                        <label for="password_confirmation" class="custom-label">Confirm
                                            Password</label>
                                        <div class="position-relative">
                                            <input type="password" id="password_confirmation"
                                                name="password_confirmation"
                                                class="form-control py-2 h-auto password-input @error('password_confirmation') is-invalid @enderror"
                                                placeholder="Confirm Password" required>
                                            @error('password_confirmation')
                                            <div class="invalid-feedback error error-position">{{ $message }}</div>
                                            @enderror
                                            <!-- Eye Icon for Toggle -->
                                            <i class="eye-icon fas fa-eye position-absolute"
                                                id="toggle-password-confirm"
                                                style="cursor: pointer; right: 28px; top: 0; bottom:0; height:13px; margin:auto"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center pt-4 pt-xxl-0">
                                <button type="submit" class="btn register-button px-5 me-3">Register</button>
                                <div>
                                    <a href="{{ url('/') }}" class="btn back-btn px-5 d-inline ">Back</a>
                                </div>
                            </div>
                        </form>
                        <!-- Back button added here -->
                        <div class="text-start mt-3 already-account ">
                            <p class="mb-0">Already have an account? <a href="{{ route('login') }}">Login now</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>







            {{-- <div class="col-5 ">
                <div class="d-flex justify-content-center align-items-center h-100 ">
                    <div class="form-part w-75 ">
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

        <h2 class="mb-4 heading">Register</h2>
        <form id="registrationForm" method="POST" action="{{ route('register') }}">
            <div class="row">
                @csrf
                <div class="col-6">
                    <div class="form-group">
                        <label for="name">First Name</label>
                        <input type="text" id="name" name="name"
                            class="form-control @error('name') is-invalid @enderror" placeholder="First Name"
                            value="{{ old('name') }}" required minlength="2" maxlength="255">
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="middle_name">Middle Name</label>
                        <input type="text" id="middle_name" name="middle_name"
                            class="form-control @error('middle_name') is-invalid @enderror" placeholder="Middle Name"
                            value="{{ old('middle_name') }}" minlength="1" maxlength="255">
                        @error('middle_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" id="last_name" name="last_name"
                            class="form-control @error('last_name') is-invalid @enderror" placeholder="Last Name"
                            value="{{ old('last_name') }}" required minlength="2" maxlength="255">
                        @error('last_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email"
                            class="form-control @error('email') is-invalid @enderror" placeholder="Email"
                            value="{{ old('email') }}" required>
                        <div class="invalid-feedback email-error">
                            <!-- Dynamic error messages for email validation will be inserted here -->
                        </div>
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-6">
                    <!-- Phone Number -->
                    <div class="form-group">
                        <label for="phone_number">Phone Number</label>
                        <input type="tel" id="phone_number" name="phone_number"
                            class="form-control @error('phone_number') is-invalid @enderror" placeholder="Phone Number"
                            value="{{ old('phone_number') }}" required minlength="10" maxlength="10" pattern="\d{10}"
                            inputmode="numeric" oninput="validatePhoneNumber(this)">
                        @error('phone_number')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                </div>
                <div class="col-6">
                    <!-- Date of Birth (DOB) -->
                    <div class="form-group">
                        <label for="dob">Date of Birth</label>
                        <input type="date" id="dob" name="dob" class="form-control @error('dob') is-invalid @enderror"
                            value="{{ old('dob') }}" required>
                        @error('dob')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group position-relative">
                        <label for="password">Password</label>
                        <div class="position-relative">
                            <input type="password" id="password" name="password"
                                class="form-control @error('password') is-invalid @enderror" placeholder="Password"
                                required minlength="8">
                            <div class="invalid-feedback password-error">
                                <!-- Dynamic error messages for password validation will be inserted here -->
                            </div>
                            @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <!-- Eye Icon for Toggle -->
                            <i class="eye-icon fas fa-eye position-absolute" id="toggle-password"
                                style="cursor: pointer; right: 28px; top: 0; bottom:0; height:13px; margin:auto"></i>
                        </div>

                        <!-- Adjusted padding -->
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group position-relative">
                        <label for="password_confirmation">Confirm Password</label>
                        <div class="position-relative">
                            <input type="password" id="password_confirmation" name="password_confirmation"
                                class="form-control @error('password_confirmation') is-invalid @enderror"
                                placeholder="Confirm Password" required>
                            @error('password_confirmation')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <!-- Eye Icon for Toggle -->
                            <i class="eye-icon fas fa-eye position-absolute" id="toggle-password-confirm"
                                style="cursor: pointer; right: 28px; top: 0; bottom:0; height:13px; margin:auto"></i>
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn w-100 login-button mt-4">Register</button>

        </form>
        <!-- Back button added here -->
        <a href="{{ url('/') }}" class="btn btn-secondary text-white w-100 mt-3">Back</a>
        <div class="text-center mt-3">
            <p>Already have an account? <a href="{{ route('login') }}">Login now</a></p>
        </div>
    </div>
    </div>
    </div> --}}
    </div>
    </div>

    <!-- jQuery and jQuery Validation Plugin -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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
    $(document).ready(function() {
        // Toggle visibility for the main password field
        $('#toggle-password').on('click', function() {
            var passwordField = $('#password');
            var icon = $(this);

            if (passwordField.attr('type') === 'password') {
                passwordField.attr('type', 'text');
                icon.removeClass('fa-eye').addClass('fa-eye-slash');
            } else {
                passwordField.attr('type', 'password');
                icon.removeClass('fa-eye-slash').addClass('fa-eye');
            }
        });

        // Toggle visibility for the confirm password field
        $('#toggle-password-confirm').on('click', function() {
            var passwordField = $('#password_confirmation');
            var icon = $(this);

            if (passwordField.attr('type') === 'password') {
                passwordField.attr('type', 'text');
                icon.removeClass('fa-eye').addClass('fa-eye-slash');
            } else {
                passwordField.attr('type', 'password');
                icon.removeClass('fa-eye-slash').addClass('fa-eye');
            }
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        // Add custom regex method
        $.validator.addMethod("regex", function(value, element, regexp) {
            var regExp = new RegExp(regexp);
            return this.optional(element) || regExp.test(value);
        }, "Invalid input.");

        // Custom validation logic for password
        $.validator.addMethod("passwordStrength", function(value, element) {
            let errors = [];
            if (!/(?=.*\d)/.test(value)) errors.push("At least one digit.");
            if (!/(?=.*[a-z])/.test(value)) errors.push("At least one lowercase letter.");
            if (!/(?=.*[A-Z])/.test(value)) errors.push("At least one uppercase letter.");
            if (!/.{8,}/.test(value)) errors.push("At least 8 characters long.");

            if (errors.length > 0) {
                $('.password-error').html(errors.join(' '));
                return false;
            }
            return true;
        }, "Password does not meet the requirements.");

        // Custom validation logic for email
        $.validator.addMethod("emailValidation", function(value, element) {
            let errors = [];
            if (!/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/.test(value)) {
                errors.push("Invalid email format.");
            }
            if (!/@/.test(value)) {
                errors.push("Email must contain '@'.");
            }
            if (errors.length > 0) {
                $('.email-error').html(errors.join(' '));
                return false;
            }
            return true;
        }, "Email does not meet the requirements.");
        // Custom validation logic for phone number
        $.validator.addMethod("phoneNumber", function(value, element) {
            // Ensure only numeric characters and exactly 10 digits
            return this.optional(element) || /^\d{10}$/.test(value);
        }, "Phone number must be exactly 10 digits long and contain only numbers.");


        // Validate the registration form
        $('#registrationForm').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2,
                    maxlength: 255,
                    regex: /^[A-Za-z ]+$/
                },
                last_name: {
                    required: true,
                    minlength: 2,
                    maxlength: 255,
                    regex: /^[A-Za-z ]+$/
                },
                middle_name: {
                    minlength: 2,
                    maxlength: 255,
                    regex: /^[A-Za-z ]+$/
                },
                email: {
                    required: true,
                    emailValidation: true
                },
                password: {
                    required: true,
                    passwordStrength: true
                },
                password_confirmation: {
                    required: true,
                    equalTo: "#password"
                },
                phone_number: {
                    required: true,
                    phoneNumber: true
                },
            },
            messages: {
                name: {
                    required: "Please enter your name.",
                    minlength: "Name must be at least 2 characters long.",
                    maxlength: "Name can be at most 255 characters long.",
                    regex: "Name must contain only letters and spaces."
                },
                last_name: {
                    required: "Please enter your name.",
                    minlength: "Name must be at least 2 characters long.",
                    maxlength: "Name can be at most 255 characters long.",
                    regex: "Name must contain only letters and spaces."
                },
                middle_name: {
                    required: "Please enter your name.",
                    minlength: "Name must be at least 2 characters long.",
                    maxlength: "Name can be at most 255 characters long.",
                    regex: "Name must contain only letters and spaces."
                },
                email: {
                    required: "Please enter your email address.",
                    emailValidation: "Please enter a valid email address."
                },
                password: {
                    required: "Please provide a password.",
                    passwordStrength: "Password must be at least 8 characters long, including one uppercase letter, one lowercase letter, and one digit."
                },
                password_confirmation: {
                    required: "Please confirm your password.",
                    equalTo: "Passwords do not match."
                }
            },
            errorElement: 'div',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                if (element.attr('name') === 'password') {
                    error.addClass('password-error');
                } else if (element.attr('name') === 'email') {
                    error.addClass('email-error');
                } else {
                    element.closest('.form-group').append(error);
                }
            },
            highlight: function(element) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element) {
                $(element).removeClass('is-invalid');
            }
        });

        $('#phone_number').on('input', function() {

            this.value = this.value.replace(/[^0-9]/g, '');
        });
    });
    </script>
</body>

</html>