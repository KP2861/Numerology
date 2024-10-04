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
        <h1 class="text-center">Mobile Numerology Report</h1>

        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Mobile Number: {{ $result['Mobile Number'] }}</h2>
                <p class="card-text"><strong>Total:</strong> {{ $result['Total'] }}</p>
                <p class="card-text"><strong>Single Digit:</strong> {{ $result['Single Digit'] }}</p>
                <p class="card-text"><strong>Personalized Message:</strong> {{ $result['Personalized Message'] }}</p>

                <h3 class="mt-4">Combinations:</h3>
                <ul class="list-group">
                    @foreach ($result['Combinations'] as $combination => $data)
                        <li class="list-group-item">
                            <strong>{{ $combination }}:</strong>
                            <span style="color: {{ $data['type'] == 'Melefic' ? 'red' : 'black' }};">
                                {{ $data['type'] }}
                            </span> 
                            - {{ $data['message'] }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
