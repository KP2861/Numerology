<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numerology Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    {{-- <div class="container mt-5">
        <h1 class="text-center">Numerology Calculator</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form id="redirectForm"  action="{{ route('numerology.mobile_numerology_result') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="mobile_number">Enter Mobile Number:</label>
                        <input type="text" class="form-control" id="mobile_number" name="mobile_number" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Calculate</button>
                </form>
            </div>
        </div>
    </div> --}}
    <form id="redirectForm" action="{{ route('numerology.mobile_numerology_result') }}" method="POST">
        @csrf
    </form>

    <script type="text/javascript">
        document.getElementById('redirectForm').submit();
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
