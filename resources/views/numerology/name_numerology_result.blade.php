<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name Numerology Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Name Numerology Result</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">First Name Total: {{ $first_name_total }}</h5>
                <p class="card-text">First Name Single Digit: {{ $first_name_single_digit }} ({{ $first_name_interpretation }})</p>
                <h5 class="card-title">Full Name Total: {{ $full_name_total }}</h5>
                <p class="card-text">Full Name Single Digit: {{ $full_name_single_digit }} ({{ $full_name_interpretation }})</p>
            </div>
        </div>

        <a href="{{ route('numerology.name_numerology_form') }}" class="btn btn-primary mt-3">Calculate Another Name</a>
    </div>
</body>
</html>
