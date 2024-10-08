<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Swrahan Numerology</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="Horoscope" />
    <meta name="keywords" content="Horoscope" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"
        integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!--srart theme style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/scss/animate.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/scss/bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/scss/font-awesome.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/scss/fonts.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/scss/flaticon.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/scss/sign_flaticon.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/scss/owl.carousel.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/scss/owl.theme.default') }}.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/scss/magnific-popup.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/scss/reset.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/scss/numerology.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/scss/new-homepage.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/scss/style.css') }}">
    <link rel="stylesheet" type="text/css" href="css/responsive.css" /> <!-- favicon links -->
    <link rel="shortcut icon" type="image/png" href="images/header/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!--srart theme style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/scss/animate.css') }}" />
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('frontend/scss/bootstrap.css') }}" /> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/scss/font-awesome.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/scss/fonts.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/scss/flaticon.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/scss/sign_flaticon.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/scss/owl.carousel.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/scss/owl.theme.default') }}.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/scss/magnific-popup.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/scss/reset.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/scss/numerology.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/scss/order-confirm.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/scss/consultant.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assests/css/comingsoon.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assests/css/error404.css') }}" />
    {{-- public/frontend/assests/css/youtube.css --}}
    <link rel="stylesheet" href="{{ asset('/frontend/assests/css/youtube.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/scss/style.css') }}">
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />
    <link rel="shortcut icon" type="image/png" href="images/header/favicon.ico" />

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/scss/termcondition.css') }}" />

</head>

<body>
    <div class="wrapper">

        @include('Website.layouts.header')
        @yield('content')
        @include('Website.layouts.footer')

    </div>
</body>

</html>
