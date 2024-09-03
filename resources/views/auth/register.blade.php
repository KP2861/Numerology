<!DOCTYPE html>
<html lang="en">

<head>
     <title>Register</title>
     <!-- Add Bootstrap CSS -->
     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.css">
     <link rel="stylesheet" href="{{ URL::asset('frontend/assests/css/app.css') }}">
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
                              @if(session('success'))
                              <div class="alert alert-success">
                                   {{ session('success') }}
                              </div>
                              @endif

                              <!-- Display error message -->
                              @if(session('error'))
                              <div class="alert alert-danger">
                                   {{ session('error') }}
                              </div>
                              @endif

                              <!-- Registration Form -->
                              <h2 class=" mb-4 heading ">Register</h2>
                              <form id="registrationForm" method="POST" action="{{ route('register') }}">
                                   @csrf

                                   <!-- Name Field -->
                                   <div class="form-group">
                                        <label for="name">Name</label>
                                        <input
                                             type="text"
                                             id="name"
                                             name="name"
                                             class="form-control @error('name') is-invalid @enderror"
                                             placeholder="Name"
                                             value="{{ old('name') }}"
                                             required
                                             minlength="2"
                                             maxlength="255"
                                             pattern="[A-Za-z ]+"
                                             title="Name must contain only letters and spaces">
                                        @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                   </div>

                                   <!-- Email Field -->
                                   <div class="form-group">
                                        <label for="email">Email</label>
                                        <input
                                             type="text"
                                             id="email"
                                             name="email"
                                             class="form-control @error('email') is-invalid @enderror"
                                             placeholder="Email"
                                             value="{{ old('email') }}"
                                             required>
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
                                             required
                                             minlength="6">
                                        @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                   </div>

                                   <!-- Confirm Password Field -->
                                   <div class="form-group">
                                        <label for="password_confirmation">Confirm Password</label>
                                        <input
                                             type="password"
                                             id="password_confirmation"
                                             name="password_confirmation"
                                             class="form-control @error('password_confirmation') is-invalid @enderror"
                                             placeholder="Confirm Password"
                                             required>
                                        @error('password_confirmation')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                   </div>
                                   <button type="submit" class="btn w-100 login-button mt-4">Register</button>
                              </form>
                              <div class="text-center mt-3">
                                   <p>Already have an account? <a href="{{ route('login') }}">Login now</a></p>
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
               $('#registrationForm').validate({
                    rules: {
                         name: {
                              required: true,
                              minlength: 2,
                              maxlength: 255,
                              pattern: /^[A-Za-z ]+$/
                         },
                         email: {
                              required: true,
                              email: true
                         },
                         password: {
                              required: true,
                              minlength: 6
                         },
                         password_confirmation: {
                              required: true,
                              equalTo: "#password"
                         }
                    },
                    messages: {
                         name: {
                              required: "Please enter your name.",
                              minlength: "Name must be at least 2 characters long.",
                              maxlength: "Name can be at most 255 characters long.",
                              pattern: "Name must contain only letters and spaces."
                         },
                         email: {
                              required: "Please enter your email address.",
                              email: "Please enter a valid email address."
                         },
                         password: {
                              required: "Please provide a password.",
                              minlength: "Password must be at least 6 characters long."
                         },
                         password_confirmation: {
                              required: "Please confirm your password.",
                              equalTo: "Passwords do not match."
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