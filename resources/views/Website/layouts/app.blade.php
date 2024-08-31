<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
    <title>Horoscope Responsive HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="Horoscope" />
    <meta name="keywords" content="Horoscope" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
    <!--srart theme style -->
    <link rel="stylesheet" type="text/css" href="{{ url('frontend/scss/animate.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ url('frontend/scss/bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('frontend/scss/font-awesome.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('frontend/scss/fonts.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('frontend/scss/flaticon.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('frontend/scss/sign_flaticon.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('frontend/scss/owl.carousel.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('frontend/scss/owl.theme.default') }}.css" />
    <link rel="stylesheet" type="text/css" href="{{ url('frontend/scss/magnific-popup.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('frontend/scss/reset.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('frontend/scss/numerology.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/scss/style.css') }}">
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />
   
    <!-- favicon links -->
    <link rel="shortcut icon" type="image/png" href="images/header/favicon.ico" />
 
</head>
<body>
<div class="wrapper">

  <!-- Navbar -->
  @include("Website.layouts.header")
  <!-- /.navbar -->

  <!-- Main content Container -->
  @yield('content')
  
  <!-- /.content-wrapper -->
  @include("Website.layouts.footer")
  
</div>
<!-- ./wrapper -->

</body>
</html>
