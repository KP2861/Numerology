<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numerology Results</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #e9ecef;
            color: #495057;
        }

        .card-header {
            background-color: #28a745;
            color: white;
        }

        .list-group-item {
            background-color: #fff;
            border: none;
        }

        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }

        .container {
            margin-top: 50px;
        }

        .card-title {
            font-size: 1.5rem;
        }

        /* Blur effect */
        .blurred {
            filter: blur(2.6px);
            pointer-events: none;
        }

        /* Red text message */
        .red-text {
            color: #dc3545;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h1 class="card-title">Numerology Results</h1>
                    </div>
                    <div class="card-body">
                        <p><strong>King:</strong> {{ $king }}</p>
                        <p><strong>Queen:</strong> {{ $queen }}</p>
                        <p><strong>Kua:</strong> {{ $kua }}</p>
                        <p><strong>Concatenated Value:</strong> {{ $concatenated }}</p>

                        <h2 class="mt-4">Loshu Grid Digit Count</h2>
                        <ul class="list-group blurred">
                            @foreach ($loshuGrid as $digit => $count)
                                <li class="list-group-item">
                                    Digit {{ $digit }}: {{ $count }} times</li>
                            @endforeach
                        </ul>
                        {{-- @if ($showPaymentButton) --}}
                        <p class="red-text text-center">Pay and see full report</p>
                        {{-- @endif --}}

                    </div>
                </div>
                <div class="text-center my-4">
                    {{-- <p>Payment Status: {{ $dbPaymentStatus }}</p> --}}

                    {{-- @if ($showDownloadButton) --}}
                    {{-- <button type="submit" name="download" class="btn btn-success">Download Report</button> --}}
                    {{-- @elseif ($showPaymentButton) --}}
                    <a href="{{ route('payment.get') }}" class="btn btn-warning">Proceed to Payment</a>
                    {{-- @else
                        <p>Payment status is not recognized. Please contact support.</p>
                    @endif --}}

                    <a href=" {{ url('/') }}" class="btn btn-primary">Calculate Again</a>
                    <!-- <a type="submit" class="btn btn-danger mx-2">Download Report</a> -->
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
