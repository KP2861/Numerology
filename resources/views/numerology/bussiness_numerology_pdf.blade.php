<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numerology Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            padding: 20px;
        }

        .card {
            border: 1px solid #ccc;
            padding: 15px;
            margin-bottom: 20px;
        }

        .card-title {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .card-text {
            font-size: 18px;
            margin-bottom: 5px;
        }

        .list-group-item {
            font-size: 16px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Business Numerology Report</h1>

        <div class="card">
            <div class="card-body">
                <!-- Display data sent from the form -->
                <h2 class="card-title">Name: {{ $data['name'] }}</h2>
                <p class="card-text"><strong>DOB:</strong> {{ $data['dob'] }}</p>
                <p class="card-text"><strong>Full Name Total:</strong> {{ $data['full_name_total'] }}</p>
                <p class="card-text"><strong>Single Digit:</strong> {{ $data['full_name_single_digit'] }}</p>
                <p class="card-text"><strong>Personal Year:</strong> {{ $data['personal_year'] }}</p>
                <p class="card-text"><strong>Personal Month:</strong> {{ $data['personal_month'] }}</p>
                <p class="card-text"><strong>Personal Day:</strong> {{ $data['personal_day'] }}</p>

                <h3 class="mt-4">Dasha Periods:</h3>
                <ul class="list-group">
                    @php
                        $dasha = json_decode($data['dasha'], true);
                    @endphp
                    @foreach ($dasha as $d)
                        <li class="list-group-item">
                            From {{ $d['start_year'] }} to {{ $d['end_year'] }}:
                            <span style="color: {{ $d['owner'] == 'Malefic' ? 'red' : 'black' }};">
                                {{ $d['owner'] }}
                            </span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</body>

</html>
