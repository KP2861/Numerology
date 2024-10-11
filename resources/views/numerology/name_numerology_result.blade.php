<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name Numerology Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/frontend/assests/css/popup.css') }}" />
    <style>
        .brown-border-table {
            border: 1px solid #BA9A63;
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
            filter: blur(3.2px);
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

        .malefic-text {
            background-color: rgb(248, 244, 244);
        }

        .partition {
            border: 2px solid #674735;
            padding: 15px;
            border-radius: 10px;
            background-color: #F1EBE0;
            margin-bottom: 20px;
        }

        .partition-header {
            background-color: #674735;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            margin-bottom: 10px;
        }

        .border-primary {
            border-color: #674735 !important;
        }

        .border-success {
            border-color: #674735 !important;
        }

        .border-secondary {
            border-color: rgb(68, 56, 56) !important;
        }

        .large-text {
            font-size: 18px;

        }
    </style>
</head>

<body>
    <div class="container mt-5 border-secondary">
        <h1 class="text-center mb-4 brown-text fw-bold">Name Numerology Result</h1>

        <div class="row">
            <div class="col-12">
                <div class="partition border-primary inner-wrapper">
                    <div class="partition-header">
                        <h5 class="mb-0"> Name Analysis</h5>
                    </div>
                    @php
                        $firstNameInterpretation = $result['first_name_interpretation'];
                        $firstNameWords = explode(' ', $firstNameInterpretation);
                    @endphp
                    <div class="first-name">
                        <h5 class="brown-text">First Name Total: <span
                                class="fw-bold">{{ $result['first_name_total'] }}</span></h5>
                        <p>First Name Single Digit: <span
                                class="fw-bold ">{{ $result['first_name_single_digit'] }}</span>
                            <span class="text-muted ">
                                {{ count($firstNameWords) > 15 ? implode(' ', array_slice($firstNameWords, 0, 15)) . ' ...' : $firstNameInterpretation }}</span>
                        </p>
                    </div>

                    @php
                        $fullNameInterpretation = $result['full_name_interpretation'];
                        $fullNameWords = explode(' ', $fullNameInterpretation);
                    @endphp
                    <div class="full-name">
                        <h5 class="brown-text">Full Name Total: <span
                                class="fw-bold">{{ $result['full_name_total'] }}</span></h5>
                        <p>Full Name Single Digit: <span class="fw-bold ">{{ $result['full_name_single_digit'] }}</span>
                            <span class="text-muted ">
                                {{ count($fullNameWords) > 15 ? implode(' ', array_slice($fullNameWords, 0, 15)) . ' ...' : $fullNameInterpretation }}</span>
                        </p>
                    </div>
                    <!-- First Name Letters Details -->
                </div>
            </div>
            <div class="col-12">
                <div class="partition border-primary inner-wrapper">
                    <div class="partition-header">
                        <h5 class="mb-0"> Letter Analysis</h5>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div>
                                <h5 class="brown-text mt-3">First Name Letter Breakdown:</h5>
                                @if (count($result['first_name_details']) > 0)
                                    @php
                                        $detail = $result['first_name_details'][0]; // Get the first detail directly
                                    @endphp
                                    <div class="partition border-secondary">
                                        <p><strong>Letter:</strong> <span class="blurred">{{ $detail['letter'] }}</span>
                                        </p>
                                        <p><strong>Strengths:</strong><span
                                                class="blurred">{{ $detail['strengths'] }}</span></p>
                                        <p><strong>Weaknesses:</strong> <span
                                                class="blurred">{{ $detail['weaknesses'] }}</span></p>
                                        <p><strong>Best Jobs:</strong> <span
                                                class="blurred">{{ $detail['best_jobs'] }}</span></p>
                                        <p><strong>Nature:</strong> <span
                                                class="blurred">{{ $detail['nature'] }}</span></p>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <h5 class="brown-text mt-3">Last Name Letter Breakdown:</h5>
                                @if (count($result['last_name_details']) > 0)
                                    @php
                                        $detail = $result['last_name_details'][0]; // Get the first detail directly
                                    @endphp
                                    <div class="partition border-secondary">
                                        <p><strong>Letter:</strong> <span
                                                class="blurred">{{ $detail['letter'] }}</span></p>
                                        <p><strong>Strengths:</strong> <span
                                                class="blurred">{{ $detail['strengths'] }}</span></p>
                                        <p><strong>Weaknesses:</strong> <span
                                                class="blurred">{{ $detail['weaknesses'] }}</span></p>
                                        <p><strong>Best Jobs:</strong> <span
                                                class="blurred">{{ $detail['best_jobs'] }}</span></p>
                                        <p><strong>Nature:</strong> <span
                                                class="blurred">{{ $detail['nature'] }}</span></p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('payment.get') }}" class="text-decoration-none">
                        <p class="text-center red-text large-text">Pay and see full report for additional detail</p>
                    </a>
                </div>
            </div>
        </div>

        {{-- <div class="col-12"> 
            <div class="partition border-secondary mt-3">
                <p class="text-center red-text">Pay and see full report for additional detail</p>
            </div>
        </div> --}}
        <!-- Special Message Display -->
        <div class="row">
            <div class="col-12">
                <div class="partition border-secondary">
                    <div class="partition-header bg-secondary">
                        <h5 class="mb-0">Special Message</h5>
                    </div>
                    @php
                        // Limit first name interpretation to 15 words
                        $firstNameWords = explode(' ', $result['first_name_interpretation']);
                        $limitedFirstName = implode(' ', array_slice($firstNameWords, 0, 15));

                        // Limit full name interpretation to 15 words
                        $fullNameWords = explode(' ', $result['full_name_interpretation']);
                        $limitedFullName = implode(' ', array_slice($fullNameWords, 0, 15));
                    @endphp

                    <span class='blurred'>
                        <p class="text-muted">{{ $limitedFirstName }}{{ count($firstNameWords) > 15 ? '...' : '' }}
                        </p>
                        <p class="text-muted">{{ $limitedFullName }}{{ count($fullNameWords) > 15 ? '...' : '' }}</p>
                    </span>
                    <a href="{{ route('payment.get') }}" class="text-decoration-none">
                        <p class="red-text text-center large-text">Pay and see full report</p>
                    </a>
                </div>
            </div>
        </div>

        <div class="text-center mt-2">
            <div class="text-center my-4">
                <a href="{{ url('products#NameNumerology') }}" class="btn outline-btn px-4 py-2">Calculate Again</a>

                <a href="{{ route('payment.get') }}" class="btn  filled-btn px-4 py-2">Proceed to Payment</a>
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
