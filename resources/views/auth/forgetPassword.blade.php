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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<style>
     @media screen and (max-width:575px) {
        .forgot-password-heading {
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
                    <!-- Optional banner image -->
                </div>
            </div>
            <div class="col-xl-6 col-lg-7 col-md-8 col-12 p-0">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="form-part mx-auto">
                         @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('message') }}
                            </div>
                        @endif

                        {{-- @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif  --}}

                        <form id="forgetPasswordForm" action="{{ route('forget.password.post') }}" method="POST">
                            @csrf

                            <h2 class="login-heading forgot-password-heading">Forget Password</h2>


                            <div class="form-group mt-5">
                                <label for="email_address" class="col-form-label text-md-right">Email Address</label>
                                <input type="text" id="email_address" class="form-control pl-0" name="email"
                                    required autofocus>
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class=" row gy-3 ">
                                <div class="col-12">

                                    <button type="submit" class="btn  login-btn  w-auto">Send Password Reset
                                        Link</button>

                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>





    {{-- <div class="vh-100 vw-100 signup">
        <div class="row h-100 g-0 m-0">
            <div class="col-7 ">
                <div class="banner-img w-100 h-100">

                </div>
            </div>
            <div class="col-5 ">
                <div class=" d-flex justify-content-center align-items-center h-100">
                    <div class="form-part">

                        <h2 class="mb-4 heading">Forget Password</h2>
                        @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('message') }}
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                        <form id="forgetPasswordForm" action="{{ route('forget.password.post') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="email_address" class="col-form-label text-md-right">E-Mail Address</label>
                                <input type="text" id="email_address" class="form-control" name="email" required
                                    autofocus>
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <button type="submit" class="btn login-button w-100 mt-4">
                                Send Password Reset Link
                            </button>
                        </form>

                        <!-- Back button added here -->
                        <a href="{{ url('/') }}" class="btn btn-secondary w-100 mt-3">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


    <!-- jQuery and jQuery Validation Plugin -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            // Add custom regex method for email
            $.validator.addMethod("emailRegex", function(value, element, regexp) {
                var regExp = new RegExp(regexp);
                return this.optional(element) || regExp.test(value);
            }, "Please enter a valid email address.");

            // Validate the forget password form
            $('#forgetPasswordForm').validate({
                rules: {
                    email: {
                        required: true,
                        emailRegex: /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/ // Custom regex pattern
                    }
                },
                messages: {
                    email: {
                        required: "Please enter your email address.",
                        emailRegex: "Please enter a valid email address."
                    }
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('text-danger');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>
</body>

</html>















<!-- <main class="login-form">
     <div class="cotainer">
          <div class="row justify-content-center">
               <div class="col-md-8">
                   

               </div>
          </div>
     </div>
</main> -->
