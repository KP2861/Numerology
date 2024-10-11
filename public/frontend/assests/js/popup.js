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