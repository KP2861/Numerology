

  <!-- hs footer wrapper End -->
  <!-- hs bottom footer wrapper Start -->
  <div class="primary-bg">
      <!-- <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a> -->
      <div class="container-fluid ">
          <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="footer-content-wrapper">
                      <p class="copyright-text mb-0">© 2024 All rights reserved</p>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- hs bottom footer wrapper End -->



  <!-- SweetAlert2 JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!--main js file start-->
  <!-- form validation -->
  <script src="{{ asset('frontend/assests/js/form.js') }}"></script> <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- form validation end -->
  <script src="{{ asset('frontend/assests/js/jquery_min.js') }}"></script>
  <script src="{{ asset('frontend/assests/js/jquery_min.js') }}"></script>
  <script src="{{ asset('frontend/assests/js/bootstrap.js') }}"></script>
  <script src="{{ asset('frontend/assests/js/modernizr.js') }}"></script>
  <script src="{{ asset('frontend/assests/js/jquery.menu-aim.js') }}"></script>
  <script src="{{ asset('frontend/assests/js/parallax.min.js') }}"></script>
  <script src="{{ asset('frontend/assests/js/owl.carousel.js') }}"></script>
  <script src="{{ asset('frontend/assests/js/jquery.shuffle.min.js') }}"></script>
  <script src="{{ asset('frontend/assests/js/jquery.countTo.js') }}"></script>
  <script src="{{ asset('frontend/assests/js/jquery.inview.min.js') }}"></script>
  <script src="{{ asset('frontend/assests/js/jquery.magnific-popup.js') }}"></script>
  <script src="{{ asset('frontend/assests/js/custom.js') }}"></script>
  <!--main js file end-->


  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
  <script>
      function confirmLogout() {
          Swal.fire({
              title: 'Are you sure?',
              text: 'You will be logged out of your account.',
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, log out!',
              cancelButtonText: 'No, cancel'
          }).then((result) => {
              if (result.isConfirmed) {
                  // If user confirms, submit the form
                  document.getElementById('logout-form').submit();
              }
          });
      }

      //language
      document.getElementById('languageSwitcher').addEventListener('change', function() {
          var selectedLanguage = this.value;
          if (selectedLanguage) {
              window.location.href = "{{ url('lang') }}/" + selectedLanguage;
          }
      });
  </script>
  <script>
      let items = document.querySelectorAll('.proin-wrap .proin')

      items.forEach((el) => {
          const minPerSlide = 3
          let next = el.nextElementSibling
          for (var i = 1; i < minPerSlide; i++) {
              if (!next) {
                  // wrap carousel by using first child
                  next = items[0]
              }
              let cloneChild = next.cloneNode(true)
              el.appendChild(cloneChild.children[0])
              next = next.nextElementSibling
          }
      })
  </script>
  <script>
      const content = [{
              title: "Career Problems",
              issue: "Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit onsequat hello Aenean world.nibh vel velit auctor aliquet lorem quis bibendum auctor auctor aliquet.",
              solution: "Use your Capricorn's ambition to set clear boundaries and use your life path 8's organizational skills to create a well-structured routine. Integrate relaxation practices like meditation and time management strategies aligned with your numerology to achieve a healthier balance."
          },
          {
              title: "Marital Life Problems",
              issue: "Balancing career demands with personal life can be tough. For instance, a driven Capricorn (Astrology) with a Life Path 8 (Numerology) may find it challenging to switch off from work, leading to burnout.",
              solution: "Use your Capricorn's ambition to set clear boundaries and use your life path 8's organizational skills to create a well-structured routine. Integrate relaxation practices like meditation and time management strategies aligned with your numerology to achieve a healthier balance."
          },
          {
              title: "Work-Life Balance Struggles",
              issue: "Balancing career demands with personal life can be tough. For instance, a driven Capricorn (Astrology) with a Life Path 8 (Numerology) may find it challenging to switch off from work, leading to burnout.",
              solution: "Use your Capricorn's ambition to set clear boundaries and use your life path 8's organizational skills to create a well-structured routine. Integrate relaxation practices like meditation and time management strategies aligned with your numerology to achieve a healthier balance."
          }
      ];

      let currentIndex = 0;

      function changeContent(direction) {
          currentIndex += direction;
          if (currentIndex < 0) currentIndex = content.length - 1;
          if (currentIndex >= content.length) currentIndex = 0;

          // Change title, issue, and solution separately
          document.getElementById("dynamic-title").innerHTML = content[currentIndex].title;
          document.getElementById("dynamic-issue").innerHTML = `<strong>Issue :</strong> ${content[currentIndex].issue}`;
          document.getElementById("dynamic-solution").innerHTML =
              `<strong>Solution :</strong> ${content[currentIndex].solution}`;
      }
  </script>

  <script>
      function openTab(evt, tabName) {
          // Get all tab content elements and hide them
          var tabContent = document.getElementsByClassName("tab-content-n");
          for (var i = 0; i < tabContent.length; i++) {
              tabContent[i].style.display = "none";
          }

          // Get all tab links and remove the active class
          var tabLinks = document.getElementsByClassName("tab-link");
          for (var i = 0; i < tabLinks.length; i++) {
              tabLinks[i].classList.remove("active");
          }

          // Show the clicked tab's content and add active class to the button
          document.getElementById(tabName).style.display = "block";
          evt.currentTarget.classList.add("active");
      }
  </script>

  <script>
      const track = document.querySelector('.carousel-track');
      const slides = Array.from(track.children);
      const prevButton = document.getElementById('prevButton');
      const nextButton = document.getElementById('nextButton');
      const indicators = document.querySelectorAll('.indicator');
      const slideWidth = slides[0].getBoundingClientRect().width;
      let slideInterval;
      const intervalTime = 3000; // Change slide every 3 seconds  // Arrange slides next to each other  
      slides.forEach((slide, index) => {
          slide.style.left = slideWidth * index + 'px';
      });
      const moveToSlide = (track, currentSlide, targetSlide) => {
          track.style.transform = 'translateX(-' + targetSlide.style.left + ')';
          currentSlide.classList.remove('current-slide');
          targetSlide.classList.add('current-slide');
      };
      const updateIndicators = (targetIndex) => {
          indicators.forEach((indicator, index) => {
              indicator.classList.remove('active');
              if (index === targetIndex) {
                  indicator.classList.add('active');
              }
          });
      };
      const findIndexOfSlide = (targetSlide) => {
          return slides.findIndex(slide => slide === targetSlide);
      };
      const autoSlide = () => {
          const currentSlide = track.querySelector('.current-slide');
          const nextSlide = currentSlide.nextElementSibling ? currentSlide.nextElementSibling : slides[0];
          moveToSlide(track, currentSlide, nextSlide);
          updateIndicators(findIndexOfSlide(nextSlide));
      }; // When I click next, move slides to the right  
      nextButton.addEventListener('click', () => {
          const currentSlide = track.querySelector('.current-slide');
          const nextSlide = currentSlide.nextElementSibling ? currentSlide.nextElementSibling : slides[0];
          moveToSlide(track, currentSlide, nextSlide);
          updateIndicators(findIndexOfSlide(nextSlide));
      }); // When I click prev, move slides to the left  
      prevButton.addEventListener('click', () => {
          const currentSlide = track.querySelector('.current-slide');
          const prevSlide = currentSlide.previousElementSibling ? currentSlide.previousElementSibling : slides[
              slides
              .length - 1];
          moveToSlide(track, currentSlide, prevSlide);
          updateIndicators(findIndexOfSlide(prevSlide));
      }); // Add click events to indicators  
      indicators.forEach((indicator, index) => {
          indicator.addEventListener('click', () => {
              const currentSlide = track.querySelector('.current-slide');
              const targetSlide = slides[index];
              moveToSlide(track, currentSlide, targetSlide);
              updateIndicators(index);
          });
      }); // Start auto sliding  
      slideInterval = setInterval(autoSlide, intervalTime); // Optional: pause auto-slide when hovering over carousel  
      track.addEventListener('mouseenter', () => clearInterval(slideInterval));
      track.addEventListener('mouseleave', () => slideInterval = setInterval(autoSlide, intervalTime));
  </script>

  <script>
      function showContent(section) {
          const contents = document.querySelectorAll('.content-section');
          const indicators = document.querySelectorAll('.indicator');

          contents.forEach(content => {
              content.classList.remove('active');
              if (content.id === section) {
                  content.classList.add('active');
              }
          });

          // Update indicators based on the section
          const index = Array.from(contents).findIndex(content => content.id === section);
          indicators.forEach((indicator, i) => {
              if (i === index) {
                  indicator.classList.add('active');
              } else {
                  indicator.classList.remove('active');
              }
          });
      }

      // Set the default active content
      document.addEventListener("DOMContentLoaded", function() {
          showContent('numerology');
      });
  </script>

  <script>
      let brownCurrentSlide = 0;
      const brownSlides = document.querySelectorAll('.brown-carousel-slide');
      const brownTotalSlides = brownSlides.length;

      function brownShowSlide(index) {
          brownSlides.forEach((slide, i) => {
              slide.classList.remove('brown-slide-active');
              slide.style.left = '100%';
              if (i === index) {
                  slide.classList.add('brown-slide-active');
                  slide.style.left = '0';
              }
          });
      }

      function brownNextSlide() {
          brownCurrentSlide = (brownCurrentSlide + 1) % brownTotalSlides;
          brownShowSlide(brownCurrentSlide);
      }

      setInterval(brownNextSlide, 3000); // Automatically switch slides every 3 seconds
  </script>

  <script>
      var container = document.getElementById('container')
      var slider = document.getElementById('slider');
      var slides = document.getElementsByClassName('slide').length;
      var buttons = document.getElementsByClassName('btn');


      var currentPosition = 0;
      var currentMargin = 0;
      var slidesPerPage = 0;
      var slidesCount = slides - slidesPerPage;
      var containerWidth = container.offsetWidth;
      var prevKeyActive = false;
      var nextKeyActive = true;

      window.addEventListener("resize", checkWidth);

      function checkWidth() {
          containerWidth = container.offsetWidth;
          setParams(containerWidth);
      }

      function setParams(w) {
          if (w < 551) {
              slidesPerPage = 1;
          } else {
              if (w < 901) {
                  slidesPerPage = 2;
              } else {
                  if (w < 1101) {
                      slidesPerPage = 3;
                  } else {
                      slidesPerPage = 4;
                  }
              }
          }
          slidesCount = slides - slidesPerPage;
          if (currentPosition > slidesCount) {
              currentPosition -= slidesPerPage;
          };
          currentMargin = -currentPosition * (100 / slidesPerPage);
          slider.style.marginLeft = currentMargin + '%';
          if (currentPosition > 0) {
              buttons[0].classList.remove('inactive');
          }
          if (currentPosition < slidesCount) {
              buttons[1].classList.remove('inactive');
          }
          if (currentPosition >= slidesCount) {
              buttons[1].classList.add('inactive');
          }
      }

      setParams();

      function slideRight() {
          if (currentPosition != 0) {
              slider.style.marginLeft = currentMargin + (100 / slidesPerPage) + '%';
              currentMargin += (100 / slidesPerPage);
              currentPosition--;
          };
          if (currentPosition === 0) {
              buttons[0].classList.add('inactive');
          }
          if (currentPosition < slidesCount) {
              buttons[1].classList.remove('inactive');
          }
      };

      function slideLeft() {
          if (currentPosition != slidesCount) {
              slider.style.marginLeft = currentMargin - (100 / slidesPerPage) + '%';
              currentMargin -= (100 / slidesPerPage);
              currentPosition++;
          };
          if (currentPosition == slidesCount) {
              buttons[1].classList.add('inactive');
          }
          if (currentPosition > 0) {
              buttons[0].classList.remove('inactive');
          }
      };
  </script>
