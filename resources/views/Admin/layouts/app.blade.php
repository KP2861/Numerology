<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numerology</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">
    <!-- Navbar -->
    @include("Admin.layouts.header")
    <!-- /.navbar -->

    <div class="container-fluid">
        <div class="row flex-grow-1">
            <!-- Main Sidebar Container -->
            <div class="col-md-3 col-lg-2 bg-dark text-white p-3">
                @include("Admin.layouts.sidebar")
            </div>
            <!-- Content Wrapper -->
            <main class="col-md-9 col-lg-10 p-4">
                @yield('content')
            </main>
        </div>
    </div>

    <!-- /.content-wrapper -->
    @include("Admin.layouts.footer")

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom scripts -->
    <script src="{{ asset('js/custom.js') }}"></script>

    <!-- Toastr for notifications -->
    @if(count($errors) > 0)
        @foreach($errors->all() as $error)
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    toastr.error("{{ $error }}");
                });
            </script>
        @endforeach
    @endif
</body>
</html>
