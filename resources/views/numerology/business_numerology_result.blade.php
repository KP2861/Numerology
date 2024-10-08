<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Numerology Result</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .brown-text {
            color: #BA9A63;
        }

        .blurred {
            filter: blur(4.4px);
            pointer-events: none;
            user-select: none;
        }

        .brown-border-table {
            border: 1px solid #BA9A63;
        }

        .brown-border-table table.table tbody tr td {
            width: 50%;
            background: #fff;
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

        .red-text {
            color: red;
        }

        .black-text {
            color: black;
        }
    </style>

</head>

<body>

    <div class="container mt-5">
        <h1 class="text-center brown-text fw-bold">Business Numerology Result</h1>

        @foreach ($results as $result)
            <div class="card mb-4 inner-wrapper">
                <div class="card-body">

                    <h2 class="brown-text">{{ $result['name'] }} (DOB: {{ $result['dob'] }})</h2>
                    <p class="card-text"><strong>Full Name Total:</strong> <span class="blurred">
                            {{ $result['full_name_total'] }}</span></p>
                    <p class="card-text"><strong>Single Digit:</strong> <span
                            class="blurred">{{ $result['full_name_single_digit'] }}</span></p>
                    <p class="card-text"><strong>Personal Year:</strong> <span
                            class="blurred">{{ $result['personal_year'] }}</span></p>
                    <p class="card-text"><strong>Personal Month:</strong> <span class="blurred">
                            {{ $result['personal_month'] }}</span></p>
                    <p class="card-text"><strong>Personal Day:</strong> <span
                            class="blurred">{{ $result['personal_day'] }}</span></p>

                    {{-- <h4 class="brown-text mt-4">Dasha Periods:</h4>
                    <ul class="list-unstyled">
                        @if (!empty($result['dasha']) && is_array($result['dasha']))
                            @foreach ($result['dasha'] as $dasha)
                                <li>From {{ $dasha['start_year'] }} to {{ $dasha['end_year'] }}:
                                    <span style="color: {{ $dasha['owner'] == 'Malefic' ? 'red' : 'black' }};">
                                        {{ $dasha['owner'] }}
                                    </span>
                                </li>
                            @endforeach
                        @endif
                    </ul> --}}

                    @if (isset($result['mobile_numerology']))
                        <h4 class="brown-text mt-4">Mobile Numerology:</h4>

                        <p class="card-text"><strong>Total:</strong> <span
                                class="blurred">{{ $result['mobile_numerology']['total'] }}</span></p>
                        <p class="card-text"><strong>Single Digit:</strong>
                            <span class="blurred"> {{ $result['mobile_numerology']['single_digit'] }}</span>
                        </p>
                        <p><strong>Detail:</strong> <span
                                class="blurred">{{ $result['mobile_numerology']['detail'] }}</span></p>

                        <p class="card-text"><strong>Combinations:</strong></p>

                        <!-- Table for Combinations and Type -->
                        <div class="brown-border-table">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Combination</th>
                                        <th>Type</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($result['mobile_numerology']['combination_data'] as $data)
                                        @php
                                            // Decode the JSON string
                                            $decodedData = json_decode($data, true);
                                        @endphp
                                        @if ($decodedData)
                                            <tr>
                                                <td
                                                    class="{{ $decodedData['behaviour_of_combination'] == 'Malefic' ? 'red-text' : 'black-text blurred' }}">
                                                    {{ $decodedData['combination_number'] }}
                                                </td>
                                                <td
                                                    class="{{ $decodedData['behaviour_of_combination'] == 'Malefic' ? 'red-text' : 'black-text blurred' }}">
                                                    {{ $decodedData['behaviour_of_combination'] }}
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!-- New table for the Max Count and Max Digit -->
                        <div class="brown-border-table mt-4">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Max Recurring Digit</th>
                                        <th>Count</th>
                                        <th style="width: 700px; min-width:700px; max-width:700px;">Message</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="blurred">
                                        <td>{{ $result['mobile_numerology']['max_digit'] }}</td>
                                        <td>{{ $result['mobile_numerology']['max_count'] }}</td>
                                        <td>{{ $result['mobile_numerology']['message_for_max_digit'] }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div>
                            <h1>Description:</h1>
                            <ul>
                                @foreach ($result['mobile_numerology']['combination_data'] as $data)
                                    <li>
                                        @php
                                            // Decode the JSON string
                                            $decodedData = json_decode($data, true);
                                        @endphp
                                        @if ($decodedData)
                                            <div class="message-box brown px-1 blurred">
                                                <span
                                                    class="{{ $decodedData['behaviour_of_combination'] == 'Malefic' ? 'red-text' : 'black-text blurred' }}">
                                                    {{ $decodedData['details'] }}
                                                </span>
                                            </div>
                                        @endif

                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        </span>
                    @endif
                </div>
            </div>
        @endforeach

        <!-- Action Buttons -->
        <div class="text-center my-4">
            <form action="{{ route('numerology.bussiness_numerology_pdf') }}" method="POST">
                @csrf
                <input type="hidden" name="results" value="{{ json_encode($results) }}">

                <div class="d-flex justify-content-center align-items-center">
                    <a href="{{ route('Website.pages.numerology') }}" class="btn filled-btn px-4 py-2">Calculate
                        Again</a>
                    <a href="{{ route('payment.get') }}" class="btn outline-btn px-4 py-2">Proceed to Payment</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
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

</html>
