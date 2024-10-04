<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{ URL::asset('frontend/assests/css/app.css') }}"> --}}
    <link rel="stylesheet" href="{{ URL::asset('frontend/assests/css/login.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
    .sub-heading {
        color: #251F14;
        font-size: 22px;
    }

    .para-data {
        color: #251F14;
        font-size: 18px;
    }

    .bordered-cols {
        border: 1px solid #dddddd;
        background: #f3f3f3;
        border-radius: 4px;
    }

    .border-bottom-col {
        border-bottom: 1px solid #dddddd;
    }

    .invalid-feedback {
        display: block;
    }

    .eye-password-icon {
        top: 0;
        bottom: 0;
        right: 8px;
    }

    .custom-gaping{
           gap:0;
           margin-top:0px;
        }

    @media screen and (max-width:767px) {
        .banner-img {
            display:none;
        }
    }

    @media screen and (max-width:575px) {
        .custom-gaping{
           gap:1.5rem;
           margin-top:20px;
        }
        .signup .form-part{
            width:auto;
        }
    }


    </style>
</head>

<body>

    <div class="vh-100 vw-100 signup">
        <div class="row h-100 g-0 m-0">
            <div class="col-xl-6 col-lg-5 col-md-4 col-12 p-0">
                <div class="banner-img w-100 h-100">
                    <!-- Optional banner image -->
                </div>
            </div>
            <div class="col-xl-6 col-lg-7 col-md-8 col-12 p-0">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="form-part mx-auto">
                        @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                        @endif
                        <form id="loginForm" method="POST" action="{{ route('login') }}">
                            @csrf
                            <h2 class="login-heading">Login</h2>
                            <!-- Email Field -->
                            <div class="form-group mt-5">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email"
                                    class="form-control pl-0  @error('email') is-invalid @enderror"
                                    placeholder="example@gmail.com" value="{{ old('email') }}" required
                                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                                <div class="invalid-feedback email-error">
                                    <!-- Dynamic error messages for email validation will be inserted here -->
                                </div>
                                @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Password Field -->
                            <div class="form-group position-relative">
                                <label for="password">Password</label>
                                <div class="position-relative">
                                    <input type="password" id="password" name="password"
                                        class="form-control pl-0  @error('password') is-invalid @enderror"
                                        placeholder="Password" required minlength="8"
                                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                        title="Password must be at least 8 characters long and include at least one uppercase letter, one lowercase letter, and one digit.">

                                    <div class="position-absolute eye-password-icon d-flex align-items-center"
                                        style="right: 13px;">

                                        <i class="eye-icon fas fa-eye m-auto" id="toggle-password"
                                            style="padding-right: 10px;"></i>

                                    </div>

                                </div>
                                <div class="invalid-feedback password-error">
                                    <!-- Dynamic error messages for password validation will be inserted here -->
                                </div>
                                @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <!-- Eye Icon for Toggle -->
                            </div>

                            <div class=" row gy-3 ">
                                <div class="col-12">
                                    <div class="d-flex justify-content-between align-items-center flex-sm-row flex-column custom-gaping">
                                        <div class="form-check custom-check ">
                                            <input class="form-check-input remember-checkbox" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Remember me
                                            </label>
                                        </div>
                                        <button type="submit" class="btn  login-btn ">Login</button>
                                    </div>
                                </div>

                                <div class="col-12 ">
                                    <div class="text-center py-4">
                                        <a href="{{ route('forget.password.get') }}" class="forgot-link ">Forgot
                                            Password?</a>
                                    </div>

                                </div>

                            </div>


                        </form>
                        {{-- <div class="form-group mt-3 text-center">

                            <!-- Back button added here -->
                            <a href="{{ url('/') }}" class="btn btn-secondary text-white w-100 mt-3">Back</a>


                    </div> --}}
                    <div>
                        <div class="text-center mt-2 register-link">
                            <p>Don't have an account? <a href="{{ route('register') }}">Register now</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>




    <!-- jQuery and jQuery Validation Plugin -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#toggle-password').on('click', function() {
            // Get the password input field
            var passwordField = $('#password');

            // Toggle the input type
            if (passwordField.attr('type') === 'password') {
                passwordField.attr('type', 'text');
                $(this).removeClass('fa-eye').addClass('fa-eye-slash');
            } else {
                passwordField.attr('type', 'password');
                $(this).removeClass('fa-eye-slash').addClass('fa-eye');
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

        // Validate the login form
        $('#loginForm').validate({
            rules: {
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    regex: "(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                }
            },
            messages: {
                email: {
                    required: "Please enter your email address.",
                    email: "Please enter a valid email address."
                },
                password: {
                    required: "Please provide a password.",
                    regex: "Password must be at least 8 characters long, including at least one uppercase letter, one lowercase letter, and one digit."
                }
            },
            errorElement: 'div',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                if (element.attr('name') === 'password') {
                    element.closest('.form-group').find('.password-error').html(error);
                } else if (element.attr('name') === 'email') {
                    element.closest('.form-group').find('.email-error').html(error);
                } else {
                    element.closest('.form-group').append(error);
                }
            },
            highlight: function(element) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element) {
                $(element).removeClass('is-invalid');
                $(element).siblings('.invalid-feedback').html('');
            }
        });
    });
    </script>
</body>

</html>