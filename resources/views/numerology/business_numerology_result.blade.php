<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Numerology Result</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/frontend/assests/css/popup.css') }}" />
    <style>
        .brown-text {
            color: #674735;
        }

        .blurred {
            filter: blur(4.4px);
            pointer-events: none;
            user-select: none;
        }

        .brown-border-table {
            border: 1px solid #674735;
        }

        .brown-border-table table.table tbody tr td {
            width: 50%;
            background: #fff;
        }

        .brown-border-table table.table tbody tr td:first-child {
            border-right: 1px solid #674735;
        }

        .outline-btn {
            background: #fff;
            border: 1px solid #674735;
            color: #674735;
        }

        .filled-btn {
            background: #674735;
            border: 1px solid transparent;
            color: #fff;
            margin-right: 20px;
        }

        .inner-wrapper {
            background: #F1EBE0;
            border: 1px solid #674735;
        }

        .large-text {
            font-size: 18px;
            color: red;
            font-weight: bold;
        }

        .dialog-box {
            background: #F8E9D0;
            border: 1px solid #BA9A63;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            margin: 20px 40px 10px 40px;
            color: rgb(233, 71, 30);
            font-size: 20px;
            font-weight: 800;

        }
    </style>

</head>

<body>

    <div class="container mt-5">
        <h1 class="text-center brown-text fw-bold">Business Numerology Result</h1>

        @foreach ($results as $result)
            <div class="card mb-4 inner-wrapper">
                <div class="card-body">

                    @php
                        // Convert the date format using Carbon
                        $formattedDate = \Carbon\Carbon::parse($result['dob'])->format('d-m-Y');
                    @endphp

                    <h2 class="brown-text">{{ $result['name'] }} (DOB: {{ $formattedDate }})</h2>
                    <p class="card-text"><strong>Full Name Total:</strong> {{ $result['full_name_total'] }}</p>
                    <p class="card-text"><strong>Compound:</strong> {{ $result['full_name_single_digit'] }}</p>
                    <p class="card-text"><strong>Personal Year:</strong> {{ $result['personal_year'] }}</p>
                    <p class="card-text"><strong>Personal Month:</strong> {{ $result['personal_month'] }}</p>
                    <p class="card-text"><strong>Personal Day:</strong> {{ $result['personal_day'] }}</p>

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
                        <span class="blurred">
                            <h4 class="brown-text mt-4">Mobile Numerology:</h4>

                            <p class="card-text"><strong>Total:</strong> {{ $result['mobile_numerology']['total'] }}</p>
                            <p class="card-text"><strong>Single Digit:</strong>
                                {{ $result['mobile_numerology']['single_digit'] }}</p>
                            @php
                                // Split the detail text into words
                                $detailWords = explode(' ', $result['mobile_numerology']['detail']);
                                // Get the first 15 words
                                $limitedDetail = implode(' ', array_slice($detailWords, 0, 15));
                            @endphp

                            <p><strong>Detail:</strong>
                                {{ $limitedDetail }}{{ count($detailWords) > 15 ? '...' : '' }}
                            </p>
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
                                                        style="color: {{ $decodedData['behaviour_of_combination'] == 'Malefic' ? 'red' : 'black' }};">
                                                        {{ $decodedData['combination_number'] }}
                                                    </td>
                                                    <td
                                                        style="color: {{ $decodedData['behaviour_of_combination'] == 'Malefic' ? 'red' : 'black' }};">
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
                                        <tr>
                                            <td>{{ $result['mobile_numerology']['max_digit'] }}</td>
                                            <td>{{ $result['mobile_numerology']['max_count'] }}</td>
                                            @php
                                                // Split the message into words
                                                $messageWords = explode(
                                                    ' ',
                                                    $result['mobile_numerology']['message_for_max_digit'],
                                                );
                                                // Get the first 15 words
                                                $limitedMessage = implode(' ', array_slice($messageWords, 0, 15));
                                            @endphp

                                            <td>{{ $limitedMessage }}{{ count($messageWords) > 15 ? '...' : '' }}</td>
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
                                                <div class="message-box brown px-1"
                                                    style="font-size: 14px; color: {{ $decodedData['behaviour_of_combination'] == 'Malefic' ? 'red' : 'black' }};">
                                                    {{ $decodedData['details'] }}
                                                </div>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </span>
                    @endif
                </div>
                <!-- Added message box -->
                <div class="dialog-box">
                    <p>Unlock your business name and partner compatibility. Complete your payment to access the
                        complete report and discover all the insights waiting for you.</p>
                </div>
                 <a href="{{ route('payment.get') }}" class="text-decoration-none">
                    <p class="red-text text-center large-text">Pay and see full report</p>
                </a>
            </div>
        @endforeach

        <!-- Action Buttons -->
        <div class="text-center my-4">
            <form action="{{ route('numerology.bussiness_numerology_pdf') }}" method="POST">
                @csrf
                <input type="hidden" name="results" value="{{ json_encode($results) }}">

                <div class="d-flex justify-content-center align-items-center">
                    <a href="{{ url('products#BusinessNumerology') }}" class="btn outline-btn px-4 py-2">Calculate
                        Again</a>

                    <a href="{{ route('payment.get') }}" class="btn filled-btn px-4 py-2">Proceed to Payment</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Open Pop Button with an "X" icon -->
    <button id="openPop" class="open-pop-btn">
        <span id="buttonIcon"><img src="{{ asset('frontend/assests/images/hero-section/gift-modal-button.png') }}"
                alt="img" class=""></span>
    </button>

    <!-- Popup Modal -->
    <div id="popupModal" class="popup-modal">
        <!--   <span id="closePopup" class="close-btn">&times;</span>  Close "X" icon -->

        <div class="popup-content">

            <div class="content-start">
                <div class="modal-main-heading">
                    <p class="gift-modal-heading gift-modal-heading-1">Unlock Spiritual Wisdom: Get All These
                        Transformative 10 Tools Just Free
                        With This Report</p>
                    <p class="gift-modal-heading gift-modal-heading-2 ">Total Worth: 10,000+ INR</p>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="gift-bg-img">
                            <img src="{{ asset('frontend/assests/images/hero-section/astrology-gifts.png') }}"
                                alt="img" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 custom-col-p-0">
                        <div class="gift-right-section">
                            <div class="gift-list-outer">
                                <ul class="gift-list">
                                    <li>Planetary Remedies For Life Changes</li>
                                    <li>Creating Affirmations</li>
                                    <li>Lakshmi Beej Mantra</li>
                                    <li>Discover the Power of Rudraksha</li>
                                    <li>Crystals, Rudraksha, and Vedic Remedies</li>
                                    <li>Find Your Perfect Crystal</li>
                                    <li>Prosperity Cheque Ritual</li>
                                    <li>Harness Sanjeevni Cards</li>
                                    <li>Vastu for Harmonious Spaces</li>
                                    <li>Unlock Power of Switch Words</li>
                                </ul>
                            </div>
                            <div class="bottom-capsule">
                                <p>*This limited-time offer includes everything you need to transform your life</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- JavaScript to handle popup functionality -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var openPop = document.getElementById("openPop");
            var popupModal = document.getElementById("popupModal");
            var closePopup = document.getElementById("closePopup");
            var buttonIcon = document.getElementById("buttonIcon");

            // Open the popup when the button is clicked
            openPop.addEventListener('click', function() {
                popupModal.classList.toggle("show"); // Toggle show class to show/hide modal

                // Change button icon based on modal state
                buttonIcon.innerHTML = popupModal.classList.contains("show") ?
                    '&times;' :
                    '<img src="{{ asset('frontend/assests/images/hero-section/gift-modal-button.png') }}" alt="icon" class="your-class">';

                // Change button background color based on modal state
                openPop.style.backgroundColor = popupModal.classList.contains("show") ?
                    '#EC4400' :
                    '#674735'; // Adjust color or image as needed
            });


            // Close the popup when the 'X' button is clicked
            closePopup.addEventListener('click', function() {
                popupModal.classList.remove("show"); // Remove show class to hide it
                buttonIcon.innerHTML =
                    '<img src="{{ asset('frontend/assests/images/hero-section/gift-modal-button.png') }}" alt="img" class="">'; // Reset button icon to "+"
                openPop.style.backgroundColor = '#674735'; // Reset button background color to blue
            });

            // Close the popup when clicking outside the popup content
            window.addEventListener('click', function(event) {
                if (event.target == popupModal) {
                    popupModal.classList.remove("show"); // Remove show class to hide it
                    buttonIcon.innerHTML =
                        '<img src="{{ asset('frontend/assests/images/hero-section/gift-modal-button.png') }}" alt="img" class=""></span>'; // Reset button icon to "+"
                    openPop.style.backgroundColor = '#674735'; // Reset button background color to blue
                }
            });
        });
    </script>


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
