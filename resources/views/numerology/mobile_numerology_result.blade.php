<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numerology Result</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Existing Styles */
        .brown-border-table {
            border: 1px solid #BA9A63;
        }

        .brown-text {
            color: #BA9A63;
        }

        .brown-border-table table.table tbody tr td {
            width: 50%;
        }

        .brown-border-table table.table tbody tr td:first-child {
            border-right: 1px solid #BA9A63;
        }

        .outline-btn {
            background: #fff;
            border: 1px solid #BA9A63;
            color: #BA9A63;
        }

        .filled-btn {
            background: #BA9A63;
            border: 1px solid transparent;
            color: #fff;
            margin-right: 20px;
        }

        .inner-wrapper {
            background: #F1EBE0;
            border: 1px solid #BA9A63;
        }

        .blurred {
            filter: blur(4.3px);
            pointer-events: none;
            user-select: none;
        }

        .red-text {
            color: #dc3545;
            font-weight: bold;
            margin-top: 20px;
        }

        .malefic-bg {
            color: #fff;
            background-color: rgb(180, 5, 5);
            filter: blur(0.2px);
            font: 14px;
        }

        .malefic-message {
            background-color: rgba(255, 0, 0, 0.2);
        }
    </style>
</head>

<body>
    @php
    $hasMalefic = collect($result['Combinations'])->contains('behaviour_of_combination', 'Malefic');
    $containsSix = strpos($result['Mobile Number'], '6') !== false;

    $recommendationMessage = $containsSix || $hasMalefic
        ? 'Recommendation: Change your mobile number as it has multiple Malefic combinations which create routine life issues with Health, Wealth & Relationship.'
        : 'Your Number is suitable for you. If you want to check compatibility with your business and job, please book a consultation.';
@endphp
    <div class="container mt-5">
        <h1 class="text-center brown-text fw-bold">Mobile Numerology Result</h1>

        <div class="card mt-4 inner-wrapper">
            <div class="card-body">
                <!-- Displaying Mobile Number, Total, Single Digit, and Personalized Message -->
                <h2 class="card-title">Mobile Number: {{ $result['Mobile Number'] }}</h2>
                <p class="card-text"><strong>Total:</strong> {{ $result['Total'] }}</p>
                <p class="card-text"><strong>Single Digit:</strong> {{ $result['Single Digit'] }}</p>
                <p class="card-text"><strong>Personalized Message:</strong> {{ $result['Personalized Message'] }}</p>
                
             
                {{-- <p class="card-text"><strong>Largest Recurring Digit:</strong> {{ $result['Largest Recurring Digit'] }}</p>
                <p class="card-text"><strong>Occurrence Count:</strong> {{ $result['Occurrence Count'] }}</p>
                <p class="card-text"><strong>Message for Max Digit:</strong> {{ $result['Message for Max Digit'] }}</p> --}}

                   {{-- <!-- New: Displaying Date of Birth (DOB) -->
                   <p class="card-text"><strong>Date of Birth:</strong> {{ $result['DOB'] }}</p> <!-- Ensure DOB is passed here from backend -->
                   <h4 class="mt-4">Largest Digit Details:</h4>
                   <p><strong>Trait:</strong> {{ $result['MultiDate Count']['largestDigitDetails']['trate'] }}</p>
                   <p><strong>Behavior:</strong> {{ $result['MultiDate Count']['largestDigitDetails']['behaviour'] }}</p>
                    --}}
                <!-- Conditional Recommendation -->
                @if ($hasMalefic)
                <div class="alert alert-danger">
                    <mark style="background: transparent">{{ $recommendationMessage }}</mark>
                </div>
            @else
                <div class="alert alert-success">
                    <mark style="background: transparent">{{ $recommendationMessage }}</mark>
                </div>
            @endif

                <!-- Combinations Table -->
                <h3 class="mt-4 blurred">Combinations:</h3>
                <div class="table-responsive w-50 mx-auto brown-border-table">
                    <table class="table m-0">
                        <tbody>
                            @foreach ($result['Combinations'] as $combination => $data)
                                <tr class="{{ $data->behaviour_of_combination == 'Malefic' ? 'malefic-bg' : 'malefic-text blurred' }}">
                                    <td scope="row" class="py-2 px-5">{{ $combination }}</td>
                                    <td class="py-2 px-5 {{ $data->behaviour_of_combination == 'Malefic' ? 'malefic-bg' : 'malefic-text' }}">
                                        {{ $data->behaviour_of_combination }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Messages Section -->
                <div class="message-section mt-4">
                    <h4 class="blurred">Messages</h4>
                    <ul>
                        @foreach ($result['Combinations'] as $data)
                            <li>
                                <div class="message-box brown px-1 {{ $data->behaviour_of_combination == 'Malefic' ? 'malefic-bg' : 'malefic-text blurred' }}" style="font-size: 14px">
                                    {{ $data->details }}
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    <p class="red-text text-center">Pay and see full report</p>
                </div>
            </div>
        </div>

        <!-- Download PDF Button -->
        <div class="text-center my-2">
            <form action="{{ route('numerology.mobile_numerology_pdf') }}" method="POST">
                @csrf
                <input type="hidden" name="mobile_number" value="{{ $result['Mobile Number'] }}">
                <input type="hidden" name="total" value="{{ $result['Total'] }}">
                <input type="hidden" name="single_digit" value="{{ $result['Single Digit'] }}">
                <input type="hidden" name="personalized_message" value="{{ $result['Personalized Message'] }}">
                <input type="hidden" name="dob" value="{{ $result['DOB'] }}"> <!-- New: Passing DOB to backend -->
                <input type="hidden" name="combinations" value="{{ json_encode($result['Combinations']) }}">
                
                <div class="d-flex justify-content-center align-items-center">
                    <a href="{{ url('/') }}" class="btn filled-btn px-4 py-2 d-inline-block">Calculate Another Number</a>
                    <a href="{{ route('payment.get') }}" class="btn outline-btn px-4 py-2">Proceed to Payment</a>
                </div>
            </form>
        </div>
    </div>

    <!-- JavaScript to handle shortcuts and disabling right-click -->
    <script>
        // Disable common developer tools shortcuts
        document.addEventListener('keydown', function(e) {
            if (['F12', 'I', 'J', 'u', 'U', 'C'].some(key => e.key === key && (e.ctrlKey || e.shiftKey))) {
                e.preventDefault();
            }
        });

        // Disable right-click
        document.addEventListener('contextmenu', function(e) {
            e.preventDefault();
        });

        // Prevent text selection when content is blurred
        document.addEventListener('selectstart', function(e) {
            if (document.querySelector('.blurred')) {
                e.preventDefault();
            }
        });
    </script>
</body>

</html>
