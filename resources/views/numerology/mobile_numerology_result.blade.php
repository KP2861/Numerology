<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numerology Result</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/frontend/assests/css/popup.css') }}" />
    <style>
        /* Existing Styles */
        .brown-border-table {
            border: 1px solid #674735;
        }

        .brown-text {
            color: #674735;
        }

        .brown-border-table table.table tbody tr td {
            width: 50%;
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

            font: 14px;
        }

        .malefic-message {
            background-color: rgba(255, 0, 0, 0.2);
        }

        .large-text {
            font-size: 18px;

        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <h1 class="text-center brown-text fw-bold">Mobile Numerology Result</h1>

        <div class="card mt-4 inner-wrapper">
            <div class="card-body">
                <!-- Displaying Mobile Number, Total, Single Digit, and Personalized Message -->
                <h2 class="card-title">Mobile Number: {{ $result['Mobile Number'] }}</h2>

                <p class="card-text"><strong>Total:</strong> {{ $result['Total'] }}</p>
                <p class="card-text"><strong>Compound:</strong> <span> {{ $result['Single Digit'] }}</span></p>
                @php
                    // Split the message into words
                    $messageWords = explode(' ', $result['Personalized Message']);
                    // Get the first 15 words
                    $limitedMessage = implode(' ', array_slice($messageWords, 0, 15));
                @endphp

                <p class="card-text">
                    <strong>Personalized Message:</strong> <span
                        class="blurred">{{ $limitedMessage }}{{ count($messageWords) > 15 ? '...' : '' }}</span>
                </p>

                @if (isset($result['Largest Recurring Digit']) &&
                        isset($result['Occurrence Count']) &&
                        isset($result['Message for Max Digit']))
                    <p class="card-text"><strong>Largest Recurring Digit:</strong>
                        {{ $result['Largest Recurring Digit'] }}</p>
                    <p class="card-text"><strong>Occurrence Count:</strong> {{ $result['Occurrence Count'] }}</p>
                    <p class="card-text">
                        <strong>Message for Max Digit:</strong>
                        <span
                            class="mt-4 blurred">{{ implode(' ', array_slice(explode(' ', $result['Message for Max Digit']), 0, 15)) }}...</span>
                    </p>
                @endif


                <!-- Combinations Table -->
                <h3 class="mt-4 blurred">Combinations:</h3>
                <div class="table-responsive w-50 mx-auto brown-border-table blurred">
                    <table class="table m-0">
                        <tbody>
                            @foreach ($result['Combinations'] as $combination => $data)
                                <tr
                                    class="{{ $data->behaviour_of_combination == 'Malefic' ? 'malefic-bg' : 'malefic-text blurred' }}">
                                    <td scope="row" class="py-2 px-5">{{ $combination }}</td>
                                    <td
                                        class="py-2 px-5 {{ $data->behaviour_of_combination == 'Malefic' ? 'malefic-bg' : 'malefic-text' }}">
                                        {{ $data->behaviour_of_combination }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Messages Section -->
                <div class="message-section mt-4 ">
                    <h4 class="blurred">Messages</h4>
                    <ul>
                        @foreach ($result['Combinations'] as $data)
                            <li>
                                <div class="message-box brown px-1 {{ $data->behaviour_of_combination == 'Malefic' ? 'malefic-bg blurred' : 'malefic-text blurred' }}"
                                    style="font-size: 14px">
                                    {{ $data->details }}
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    <a href="{{ route('payment.get') }}" class="text-decoration-none">
                        <p class="red-text large-text text-center">Pay and see full report</p>
                    </a>

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
                    <a href="{{ url('products#MobileNumerology') }}"
                        class="btn outline-btn px-4 py-2 d-inline-block">Calculate Another Number</a>

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
                    '#BA9A63'; // Adjust color or image as needed
            });


            // Close the popup when the 'X' button is clicked
            closePopup.addEventListener('click', function() {
                popupModal.classList.remove("show"); // Remove show class to hide it
                buttonIcon.innerHTML =
                    '<img src="{{ asset('frontend/assests/images/hero-section/gift-modal-button.png') }}" alt="img" class="">'; // Reset button icon to "+"
                openPop.style.backgroundColor = '#BA9A63'; // Reset button background color to blue
            });

            // Close the popup when clicking outside the popup content
            window.addEventListener('click', function(event) {
                if (event.target == popupModal) {
                    popupModal.classList.remove("show"); // Remove show class to hide it
                    buttonIcon.innerHTML =
                        '<img src="{{ asset('frontend/assests/images/hero-section/gift-modal-button.png') }}" alt="img" class=""></span>'; // Reset button icon to "+"
                    openPop.style.backgroundColor = '#BA9A63'; // Reset button background color to blue
                }
            });
        });
    </script>

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
