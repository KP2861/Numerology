<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login</title>
     <!-- Add Bootstrap CSS -->
     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="{{ URL::asset('frontend/assests/css/app.css') }}">

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
     </style>
</head>

<body>

     <div class="vh-100 vw-100 signup">
          <div class="row h-100 g-0 m-0">
               <div class="col-7 ">
                   <div class="banner-img w-100 h-100">

                   </div>
               </div>
               <div class="col-5 ">
                    <div class=" d-flex justify-content-center align-items-center h-100">
                         <div class="form-part">
                              @if(session('error'))
                              <div class="alert alert-danger">
                                   {{ session('error') }}
                              </div>
                              @endif
                              <form id="loginForm" method="POST" action="{{ route('login') }}">
                            @csrf
                            <h2 class="mb-4 heading">Login</h2>

                            <!-- Email Field -->
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    placeholder="example@gmail.com"
                                    value="{{ old('email') }}"
                                    required
                                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                                @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Password Field -->
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input
                                    type="password"
                                    id="password"
                                    name="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    placeholder="Password"
                                    required>
                                @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn login-button mt-4">Login</button>
                        </form>
                        <div class="form-group mt-3 text-center">
                            <a href="{{ route('forget.password.get') }}" class="btn btn-link reset-btn w-100">Reset Password</a>

                            <div class="text-center mt-3">
                                <p>Already have an account? <a href="{{ route('register') }}">Register now</a></p>
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
            // Add custom regex method for email
            $.validator.addMethod("regex", function(value, element, regexp) {
                var regExp = new RegExp(regexp);
                return this.optional(element) || regExp.test(value);
            }, "Invalid input.");

            // Validate the login form
            $('#loginForm').validate({
                rules: {
                    email: {
                        required: true,
                        regex: /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/
                    },
                    password: {
                        required: true,
                        minlength: 8
                    }
                },
                messages: {
                    email: {
                        required: "Please enter your email address.",
                        regex: "Please enter a valid email address."
                    },
                    password: {
                        required: "Please provide a password.",
                        minlength: "Password must be at least 8 characters long."
                    }
                },
                errorElement: 'div',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
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