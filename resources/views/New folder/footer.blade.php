    <!-- hs footer wrapper Start -->

    <div class="footer-main-wrapper">
        <div class="footer-ellipse">
            <img src="{{ asset('frontend/assests/images/hero-section/footer-ellipse.png') }}" alt="" class="img-fluid">
        </div>
       


        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="footer-subsection text-start">
                        <a href="index.html"><img
                                src="{{asset('frontend/assests/images/hero-section/ravi-mundra-logo.svg')}}"
                                alt="footer_logo" /></a>
                        <p class="me-lg-5 me-md-3 me-0 footer-text">Donec id elit non mi porta gravida at eget metus.
                            Donec id elit non Vestibulum id ligula porta felis euism od semper. Nulla vitae elit libero
                        </p>
                        <!-- <h4><a href="#">Read More <i class="fa fa-long-arrow-right"></i></a></h4> -->
                        <ul class="social-links">
                            <li><a href="https://www.facebook.com/RaviMundrraNumerology?mibextid=ZbWKwL"><i
                                        class="fa fa-facebook"></i></a></li>
                            <li><a
                                    href="https://www.linkedin.com/in/ravimundra?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i
                                        class="fa fa-linkedin"></i></a></li>
                            <li><a href="https://youtube.com/@ravimundrranumerology?si=UOYgOKu1uI6pejlU"><i
                                        class="fa fa-youtube-play"></i></a></li>
                            <li><a href="https://www.instagram.com/ravimundrranumerology?igsh=MWF0cmN2MnhpamJ5Zw=="><i
                                        class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-7 col-md-8 col-sm-12 col-xs-12">
                    <div class="row justify-content-between">
                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                            <div class=" text-start">
                                <h2 class="footer-heading mb-1">Services</h2>
                                <!-- <div class="services-border-bottom"> <img
                                        src="{{asset('frontend/assests/images/hero-section/service-border.svg')}}"
                                        alt="footer_logo" /></div> -->
                                <div class="services-bullet-list">
                                    <ul>
                                        <li><a href="">Home</a></li>
                                        <li><a href="">About us</a></li>
                                        <li><a href="">Services</a></li>
                                        <li><a href="">Gallery</a></li>
                                        <li><a href="">Contact Us</a></li>
                                        <li><a href="">Privacy Policy</a></li>
                                    </ul>
                                    <ul>
                                        <li><a href="">Husband wife Dispute</a></li>
                                        <li><a href="">Powerful Mantras for Love Spell</a></li>
                                        <li><a href="">Business Back</a></li>
                                        <li><a href="">Extra-Marital Affairs</a></li>
                                        <li><a href="">Divorce Problem Soluions</a></li>
                                    </ul>

                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="whatsapp-qr-outer-wrapper">
                                <div class="hs_footer_qr_wrapper text-end">
                                    <div class="qr-wrapper p-3 text-center mx-auto rounded">
                                        <img src="{{asset('frontend/assests/images/content/whatsaap-qr-img.png')}}"
                                            alt="footer_logo" class="img-responsive" class="img-fluid rounded-pills" />
                                        <p class="text-dark mt-3 fw-bold mb-0">
                                            Connect on WhatsApp
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- hs footer wrapper End -->
    <!-- hs bottom footer wrapper Start -->
    <div class="primary-bg">
        <!-- <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a> -->
        <div class="container">
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



    <!-- logout  -->

    <!-- SweetAlert2 JavaScript -->
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
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!--main js file start-->
    <!-- form validation -->

    <script src="{{asset('frontend/assests/js/form.js')}}"></script>





    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- form validation end -->
    <script src="{{asset('frontend/assests/js/jquery_min.js')}}"></script>
    <script src="{{asset('frontend/assests/js/jquery_min.js')}}"></script>
    <script src="{{asset('frontend/assests/js/bootstrap.js')}}"></script>
    <script src="{{asset('frontend/assests/js/modernizr.js')}}"></script>
    <script src="{{asset('frontend/assests/js/jquery.menu-aim.js')}}"></script>
    <script src="{{asset('frontend/assests/js/parallax.min.js')}}"></script>
    <script src="{{asset('frontend/assests/js/owl.carousel.js')}}"></script>
    <script src="{{asset('frontend/assests/js/jquery.shuffle.min.js')}}"></script>
    <script src="{{asset('frontend/assests/js/jquery.countTo.js')}}"></script>
    <script src="{{asset('frontend/assests/js/jquery.inview.min.js')}}"></script>
    <script src="{{asset('frontend/assests/js/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('frontend/assests/js/custom.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


    <!--main js file end-->