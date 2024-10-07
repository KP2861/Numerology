<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Add Bootstrap CSS -->
    <!-- Add Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{ URL::asset('frontend/assests/css/app.css') }}"> --}}
    <link rel="stylesheet" href="{{ URL::asset('frontend/assests/css/login.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('frontend/assests/css/reset.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<style>
    @media screen and (max-width:576px)
{
    .update-password-heading{
        font-size:20px;
    }
    .signup .form-part{
            width:auto;
    }
}   
</style>

<body>
    <div class="vh-100 vw-100 signup">
        <div class="row h-100 g-0 m-0">
            <div class="col-xl-6 col-lg-5 col-md-4 col-12 p-0 d-md-block d-none">
                <div class="banner-img w-100 h-100">
                </div>
            </div>
            <div class="col-xl-6 col-lg-7 col-md-8 col-12 p-0">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="form-part mx-auto">
                        <!-- Display error messages (if any) -->
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        @if (session('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif

                        <form action="{{ route('reset.password.post') }}" method="POST" id="resetPasswordForm">
                            @csrf
                            <h2 class="login-heading update-password-heading">Update Password</h2>
                            <div class="form-group mt-5 password-input">
                                <label for="email_address" class="col-form-label pb-0 text-md-right">New Password</label>
                                <div class="input-group position-relative">
                                    <input type="password" id="password" class="form-control pl-0" name="password"
                                        required autofocus pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                        title="Password must contain at least 8 characters, including one digit, one lowercase, and one uppercase letter.">

                                    <div
                                        class="position-absolute eye-absolute d-flex justify-content-center align-items-center">
                                        <span onclick="togglePassword('password', this)">
                                            <i class="fa fa-eye"></i>
                                        </span>
                                    </div>
                                </div>
                                <span id="passwordError" class="text-danger error"></span>
                                <!-- Display error in red -->
                                @error('password')
                                    <span class="text-danger error">{{ $message }}</span>
                                @enderror
                                <span id="passwordError" class="text-danger error"></span>
                                <!-- Display error in red -->
                                @error('password')
                                    <span class="text-danger error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group mt-3 password-input">
                                <label for="password-confirm" class="col-form-label pb-0 text-md-right">Confirmed
                                    Password</label>
                                <div class="input-group position-relative">
                                    <input type="password" id="password-confirm" class="form-control pl-0"
                                        name="password_confirmation" required autofocus>

                                    <div
                                        class="position-absolute eye-absolute d-flex justify-content-center align-items-center">
                                        <span onclick="togglePassword('password-confirm', this)">
                                            <i class="fa fa-eye"></i>
                                        </span>
                                    </div>
                                </div>
                                <span id="confirmPasswordError" class="text-danger error"></span>
                                <!-- Display error in red -->
                                @error('password_confirmation')
                                    <span class="text-danger error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class=" row gy-3 ">
                                <div class="col-12">
                                    <button type="submit" class="btn  login-btn  ">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    {{-- <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Reset Password</div>
                        <div class="card-body">
                            <!-- Display error messages (if any) -->
                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif

                            @if (session('message'))
                                <div class="alert alert-success">
                                    {{ session('message') }}
                                </div>
                            @endif

                            <form action="{{ route('reset.password.post') }}" method="POST" id="resetPasswordForm">
                                @csrf
                                <!-- Hidden token input -->
                                <input type="hidden" name="token" value="{{ $token }}">

                                <!-- Password field with eye icon and pattern validation -->
                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <input type="password" id="password" class="form-control" name="password"
                                                required autofocus pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                                title="Password must contain at least 8 characters, including one digit, one lowercase, and one uppercase letter.">
                                            <div class="input-group-append">
                                                <span class="input-group-text"
                                                    onclick="togglePassword('password', this)">
                                                    <i class="fa fa-eye"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <span id="passwordError" class="text-danger"></span>
                                        <!-- Display error in red -->
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Password confirmation field with eye icon -->
                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm
                                        Password</label>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <input type="password" id="password-confirm" class="form-control"
                                                name="password_confirmation" required autofocus>
                                            <div class="input-group-append">
                                                <span class="input-group-text"
                                                    onclick="togglePassword('password-confirm', this)">
                                                    <i class="fa fa-eye"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <span id="confirmPasswordError" class="text-danger"></span>
                                        <!-- Display error in red -->
                                        @error('password_confirmation')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Submit button -->
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Reset Password
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main> --}}

    <!-- Script for toggling password visibility and real-time validation -->
    <script>
        // Toggle password visibility
        function togglePassword(fieldId, eyeIcon) {
            var passwordField = document.getElementById(fieldId);
            var eyeIconElement = eyeIcon.querySelector('i');

            // Toggle between password and text input type
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                eyeIconElement.classList.remove('fa-eye');
                eyeIconElement.classList.add('fa-eye-slash');
            } else {
                passwordField.type = 'password';
                eyeIconElement.classList.remove('fa-eye-slash');
                eyeIconElement.classList.add('fa-eye');
            }
        }

        // Real-time validation for password fields
        document.getElementById('password').addEventListener('input', function() {
            var password = this.value;
            var pattern = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/;
            var errorElement = document.getElementById('passwordError');

            if (!pattern.test(password)) {
                errorElement.textContent =
                    'Password must contain at least 8 characters, including one digit, one lowercase, and one uppercase letter.';
            } else {
                errorElement.textContent = ''; // Clear error message if valid
            }
        });

        document.getElementById('password-confirm').addEventListener('input', function() {
            var confirmPassword = this.value;
            var password = document.getElementById('password').value;
            var errorElement = document.getElementById('confirmPasswordError');

            if (confirmPassword !== password) {
                errorElement.textContent = 'Passwords do not match.';
            } else {
                errorElement.textContent = ''; // Clear error message if valid
            }
        });
    </script>

    <!-- Include Font Awesome for the eye icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</body>

</html>
