<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intent Popup Example</title>

    <!-- Include Font Awesome for icons (Optional) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-k6RqeWeci5ZR/Lv4MR0sA0FfDOMo2R1e6fQn0u8iHGjW7Evuvb6mKmr06okvAxWIMDQ3jUBZAnCTlYj2ngRhw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/scss/animate.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/scss/bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/scss/font-awesome.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/scss/fonts.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/scss/flaticon.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/scss/sign_flaticon.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/scss/owl.carousel.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/scss/owl.theme.default') }}.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/scss/magnific-popup.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/scss/reset.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/scss/numerology.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/scss/new-homepage.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/scss/style.css') }}">
    <link rel="stylesheet" type="text/css" href="css/responsive.css" /> <!-- favicon links -->
    <link rel="shortcut icon" type="image/png" href="images/header/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!--srart theme style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/scss/animate.css') }}" />
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('frontend/scss/bootstrap.css') }}" /> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/scss/font-awesome.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/scss/fonts.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/scss/flaticon.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/scss/sign_flaticon.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/scss/owl.carousel.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/scss/owl.theme.default') }}.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/scss/magnific-popup.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/scss/reset.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/scss/numerology.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/scss/order-confirm.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/scss/consultant.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assests/css/comingsoon.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assests/css/error404.css') }}" />
    {{-- public/frontend/assests/css/youtube.css --}}
    <link rel="stylesheet" href="{{ asset('/frontend/assests/css/youtube.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/scss/style.css') }}">
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />
    <link rel="shortcut icon" type="image/png" href="images/header/favicon.ico" />

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/scss/termcondition.css') }}" />


    <!-- CSS in the header -->
    <style>
        .body{
            font-family:poppins;
        }
    /* Open Pop Button styles - circular and centered */
    .open-pop-btn {
        position: fixed;
        right: 20px;
        top: 50%;
        transform: translateY(-50%);
        /* Center vertically */
        width: 70px;
        /* Diameter of the circle */
        height: 70px;
        /* Diameter of the circle */
        background-color: #007BFF;
        /* Blue background */
        color: white;
        border: none;
        border-radius: 50%;
        /* Make the button circular */
        cursor: pointer;
        display: flex;
        /* Center text horizontally and vertically */
        justify-content: center;
        align-items: center;
        z-index: 1000;
        /* Ensures the button is on top */
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        font-size: 24px;
        /* Font size for the icon */
        transition: background-color 0.3s, transform 0.2s;
        /* Transition for hover effect */
    }

    .open-pop-btn:hover {
        background-color: #0056b3;
        /* Slightly darker blue on hover */
        transform: scale(1.05);
        /* Slightly enlarge button on hover */
    }

    /* Modal background */
    .popup-modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        z-index: 999;
        /* Sits on top of the page content */
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color:#ffffff;
        /* Black background with opacity */
        backdrop-filter: blur(5px);
        /* Blurs the background */
        justify-content: center;
        align-items: center;
        display: flex;
        /* Centers the popup content */
        opacity: 0;
        /* Start invisible */
        transition: opacity 0.3s ease;
        /* Smooth transition for fade-in */
        
    }

    /* Show the modal */
    .popup-modal.show {
        display: flex;
        /* Show modal */
        opacity: 1;
        overflow-y: auto;
        /* Fully visible */
    }

    /* Popup content */
    .popup-content {
        background-color: #fff;
        padding: 30px;
        border-radius: 10px;
        width: 80%;
        height:auto;
        /* Adjusted width */
        max-width: 999px;
        /* Max width for larger screens */
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.2);
        text-align: center;
        position: relative;
        position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  /* overflow-y:auto; */
 
      
    }

    /* Popup title */
    .popup-title {
        font-size: 24px;
        /* Larger font size for title */
        margin-bottom: 15px;
        /* Space below title */
        color: #333;
        /* Dark text color */
    }

    /* Popup message */
    .popup-message {
        font-size: 16px;
        /* Regular font size for message */
        color: #555;
        /* Gray text color */
        margin-bottom: 20px;
        /* Space below message */
    }

    /* Close button */
    .close-btn {
        position: fixed;
        top: 10px;
    right: 10px;
    font-size: 30px;
        color: #aaa;
        cursor: pointer;
    }

    .close-btn:hover {
        color: #000;
    }

    .gift-modal-heading {
        font-size: 22px;
        line-height: 32px;
        font-weight: 500;
        color: #674735;
        text-align:center;
    }

    .gift-list {
       padding-left:30px;
    }

    .gift-list li {
        font-size: 18px;
        line-height: 32px;
        font-weight: 500;
        color: #674735;
        list-style-type: disc!important;
        text-align:left;
    }

    li.gift-list{
        list-style-type: disc!important;
    }

    .bottom-capsule {
        border-radius: 100px;
        padding:20px;
        background-color:#EC4400;
        margin-top:25px;
        margin-left:auto;
        margin-right:auto;
    }
    .bottom-capsule p{
        color:#ffffff;
        font-size: 16px;
        line-height: 22px;
        font-weight: 300;
    }

    .gift-bg-img img{
        
        max-width:100%!important;
        border-radius:20px;
    }
    .custom-col-p-0{
padding:0;
    }
    .gift-right-section{
        display:flex;
        justify-content:center;
        flex-direction:column;
    }
    .gift-modal-heading-2{
        margin-bottom:20px;
    }
    .gift-modal-heading-1{
        width:75%;
    }
    .modal-main-heading{
        display:flex;
        align-items:center;
        justify-content:center;
        flex-direction:column;
        width:100%;
    }
    .gift-bg-img {
    max-height: 460px;
    overflow: hidden;
    border-radius: 20px;
}
    @media screen and (max-width: 480px) {
        .popup-content{
           width: 99%;
           height: 80vh;
           overflow-y: scroll;
        }
        .gift-bg-img {
    max-height:260px;
   
}
}
    </style>
</head>

<body>

    <!-- Open Pop Button with an "X" icon -->
    <button id="openPop" class="open-pop-btn">
        <span id="buttonIcon"><img src="{{ asset('frontend/assests/images/hero-section/gift-modal-button.png') }}" alt="img" class=""></span> 
    </button>

    <!-- Popup Modal -->
    <div id="popupModal" class="popup-modal"> 
        <!--   <span id="closePopup" class="close-btn">&times;</span>  Close "X" icon -->

        <div class="popup-content">
         
            <div class="content-start">
                <div class="modal-main-heading">
                <p class="gift-modal-heading gift-modal-heading-1">Unlock Spiritual Wisdom: Get All These Transformative 10 Tools Just Free
                    With This Report</p>
                <p class="gift-modal-heading gift-modal-heading-2 ">Total Worth: 10,000+ INR</p>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="gift-bg-img">
                        <img src="{{ asset('frontend/assests/images/hero-section/astrology-gifts.png') }}" alt="img" class="img-fluid">
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
    buttonIcon.innerHTML = popupModal.classList.contains("show") 
        ? '&times;' 
        : '<img src="{{ asset('frontend/assests/images/hero-section/gift-modal-button.png') }}" alt="icon" class="your-class">';
    
    // Change button background color based on modal state
    openPop.style.backgroundColor = popupModal.classList.contains("show") 
        ? '#EC4400' 
        : '#007BFF'; // Adjust color or image as needed
});


        // Close the popup when the 'X' button is clicked
        closePopup.addEventListener('click', function() {
            popupModal.classList.remove("show"); // Remove show class to hide it
            buttonIcon.innerHTML = '<img src="{{ asset('frontend/assests/images/hero-section/gift-modal-button.png') }}" alt="img" class="">'; // Reset button icon to "+"
            openPop.style.backgroundColor = '#007BFF'; // Reset button background color to blue
        });

        // Close the popup when clicking outside the popup content
        window.addEventListener('click', function(event) {
            if (event.target == popupModal) {
                popupModal.classList.remove("show"); // Remove show class to hide it
                buttonIcon.innerHTML = '<img src="{{ asset('frontend/assests/images/hero-section/gift-modal-button.png') }}" alt="img" class=""></span>'; // Reset button icon to "+"
                openPop.style.backgroundColor = '#007BFF'; // Reset button background color to blue
            }
        });
    });
    </script>

</body>

</html>