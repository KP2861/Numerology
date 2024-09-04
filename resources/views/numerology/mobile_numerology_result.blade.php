<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numerology Result</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Mobile Numerology Result</h1>
    
        <div class="card mt-4">
            <div class="card-body">
                <h2 class="card-title">Mobile Number: {{ $result['Mobile Number'] }}</h2>
                <p class="card-text"><strong>Total:</strong> {{ $result['Total'] }}</p>
                <p class="card-text"><strong>Single Digit:</strong> {{ $result['Single Digit'] }}</p>
                <p class="card-text"><strong>Personalized Message:</strong> {{ $result['Personalized Message'] }}</p>
    
                <h3 class="mt-4">Combinations:</h3>
                <ul class="list-group">
                    @foreach ($result['Combinations'] as $combination => $data)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <strong>{{ $combination }}:</strong>
                            <span style="color: {{ $data->type == 'Malefic' ? 'red' : 'black' }};">
                                {{ $data->type }}
                            </span>
                            - {{ $data->message }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    
        <div class="text-center mt-4">
            <a href="{{ route('numerology.mobile_numerology_form') }}" class="btn btn-primary">Calculate Another Number</a>
        </div>
    
        <!-- Download PDF Button -->
        <div class="text-center mt-2">
            <form action="{{ route('numerology.mobile_numerology_pdf') }}" method="POST">
                @csrf
                <input type="hidden" name="mobile_number" value="{{ $result['Mobile Number'] }}">
                <button type="submit" name="download" class="btn btn-success">Download Report as PDF</button>
            </form>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
