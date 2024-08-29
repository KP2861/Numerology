<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Numerology Result</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Business Numerology Result</h1>

        @foreach($results as $result)
            <div class="card mb-3">
                <div class="card-body">
                    <h4 class="card-title">{{ $result['name'] }} (DOB: {{ $result['dob'] }})</h4>
                    <p><strong>Full Name Total:</strong> {{ $result['full_name_total'] }}</p>
                    <p><strong>Single Digit:</strong> {{ $result['full_name_single_digit'] }}</p>
                    <p><strong>Personal Year:</strong> {{ $result['personal_year'] }}</p>
                    <p><strong>Personal Month:</strong> {{ $result['personal_month'] }}</p>
                    <p><strong>Personal Day:</strong> {{ $result['personal_day'] }}</p>
                    <p><strong>Dasha:</strong></p>
                    <ul>
                        @foreach($result['dasha'] as $dasha)
                            <li>From {{ $dasha['start_year'] }} to {{ $dasha['end_year'] }}: {{ $dasha['owner'] }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endforeach

        <a href="{{ route('business_numerology.form') }}" class="btn btn-primary">Calculate Again</a>
    </div>
</body>
</html>
