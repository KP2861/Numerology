<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{URL::asset('backend/dist/img/android-chrome-192x192.png')}}">
    <title>Admin Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ URL::asset('backend/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ URL::asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ URL::asset('backend/dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('backend/dist/css/login.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="hold-transition login-file">
    <div class="login-container">
        <div class="admin-logo">
            <img src="{{ URL::asset('backend/dist/img/admin-logo.png') }}" alt="" height="380" width="391">
        </div>
        <div class="login-box">
            <div class="login-logo">
                <h1>Admin Login</h1>

            </div>
            <!-- /.login-logo -->
            <div class="card">

                <div class="card-body login-card-body">
                    <p class="login-box-msg ">Sign in to start your session</p>

                    <form action="{{ url('admin/loginsubmit') }}" name="form" method="post" class="form">
                        @csrf

                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Email" id="email" name="email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope">

                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <!-- Inside your login-card-body div -->
                        <a href="{{ url('admin/forgot-password') }}">Forgot Password?</a>

                        <!-- /.col -->
                        <div class="col-18 mt-2">
                            <button type="submit" class=" submit-button btn btn-success btn-block">Sign In</button>
                        </div>

                        <!-- /.col -->
                    </form>

                </div>
                <!-- /.login-card-body -->
            </div>
        </div>
        <!-- /.login-box -->
    </div>

    <!-- jQuery -->
    <script src="{{ URL::asset('backend/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ URL::asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ URL::asset('backend/dist/js/adminlte.min.js') }}"></script>


    <!--script validation-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).ready(function() {

            $('.form').validate({ // initialize the plugin
                rules: {
                    email: {
                        required: true,
                        email: true

                    },
                    password: {
                        required: true,
                        minlength: 8

                    }
                },
                messages: {
                    email: {
                        required: "Email is required",
                        email: "Email must be a valid email add",

                    },
                    password: {
                        required: "Password is required",
                        minlength: "Password must be at least 8 char"

                    },
                }

            });
        });
    </script>
    <script>

    </script>

</body>

</html>