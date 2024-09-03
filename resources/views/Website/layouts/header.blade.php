<div class="stars"></div>
<div class="twinkling"></div>
<!-- preloader Start -->
<div id="preloader">
    <div id="status"><img src="{{url('frontend/assests/images/header/horoscope.gif')}}" id="preloader_image" alt="loader">
    </div>
</div>
<!-- hs top header Start -->
<div class="hs_top_header_main_Wrapper">
    <div class="container">
        <div class="d-flex justify-content-space-between align-items-center">
            <div class="hs_header_logo_left hidden-xs">
                <div class="hs_logo_wrapper">
                    <a href="{{url('/')}}"><img src="{{url('frontend/assests/images/content/top_logo.png')}}" class="img-responsive" alt="logo"
                            title="Logo" /></a>
                </div>
            </div>
            <div class="hs_header_logo_right d-flex justify-content-end align-items-center">
                <div class="hs_header_add_wrapper hidden-xs hidden-sm">
                    <div class="hs_header_add_icon">
                        <i class="fa fa-home"></i>
                    </div>
                    <div class="hs_header_add_icon_cont">
                        <h5>Reach Us</h5>
                        <p>601 , Ram Nagar Dewas</p>
                    </div>
                </div>
                <div class="hs_header_add_wrapper hidden-xs hidden-sm">
                    <div class="hs_header_add_icon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="hs_header_add_icon_cont">
                        <h5>Contact Us</h5>
                        <p>+91-123456789</p>
                    </div>
                </div>
                <div class="hs_btn_wrapper">
                    <ul>
                        <li><a href="{{ url('/consultant') }}" class="hs_btn_hover">Consultation</a></li>
                    </ul>
                </div>

                <div class="hs_btn_wrapper">
                    <ul>
                        <li><a href="{{ url('/login') }}" class="hs_btn_hover outline-btn">Sign In</a></li>
                    </ul>
                </div>

                <div class="dropdown avtar ms-2">
                    <button class=" dropdown-toggle p-0 border-0 bg-transparent" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{url('frontend/assests/images/header/avtar-img.png')}}" alt="Logo" class="avtar">
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </div>




                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">LogIn</h4>
                            </div>
                            <div class="modal-body">
                                <input type="email" placeholder="Enter Your Email...">
                                <input type="password" placeholder="Enter Your Password...">
                                <button type="submit">Submit</button>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- hs top header End -->
<!-- hs Navigation Start -->
<div class="hs_navigation_header_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="hs_main_menu hidden-xs">
                    <ul>
                        <li>
                            <div class="dropdown-wrapper menu-button">
                                <a class="menu-button" href="{{ url('/') }}">Home</a>
                            </div>
                        </li>
                        <li>
                            <a class="menu-button" href="{{ url('/#about') }}">About Us</a>
                        </li>

                        <li>
                            <div class="dropdown-wrapper menu-button">
                                <a class="menu-button" href="{{ url('/numrology') }}">Numerology</a>
                                {{-- <div class="drop-menu hs_mega_menu">
                                        <a class="menu-button" href="#">Name Numerology</a>
                                        <a class="menu-button" href="#">Phone Number Numerology</a>
                                        <a class="menu-button" href="#">Advanced Numerology</a>
                                        <a class="menu-button" href="#">Business Numerology</a>
                                    </div> --}}
                            </div>
                        </li>
                        <li>
                            {{-- <div class="dropdown-wrapper menu-button">
                                    <a class="menu-button" href="#">Consultant</a>
                                </div> --}}
                        </li>
                        <li>
                            <a class="menu-button" href="{{ url('/consultant') }}">Consultant </a>
                        </li>
                    </ul>
                </nav>
                <header class="mobail_menu visible-xs">
                    <div class="container-fluid">
                        <div class="row ">
                            <div class="col-xs-6 col-sm-6">
                                <div class="hs_logo">
                                    <a href="index.html"><img src="{{url('frontend/assests/images/content/top_logo.png')}}" alt="Logo"
                                            title="Logo"></a>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6">
                                <div class="cd-dropdown-wrapper">
                                    <a class="house_toggle" href="#0">
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            width="511.63px" height="511.631px" viewBox="0 0 511.63 511.631"
                                            style="enable-background:new 0 0 511.63 511.631;" xml:space="preserve">
                                            <g>
                                                <g>
                                                    <path
                                                        d="M493.356,274.088H18.274c-4.952,0-9.233,1.811-12.851,5.428C1.809,283.129,0,287.417,0,292.362v36.545
																	c0,4.948,1.809,9.236,5.424,12.847c3.621,3.617,7.904,5.432,12.851,5.432h475.082c4.944,0,9.232-1.814,12.85-5.432
																	c3.614-3.61,5.425-7.898,5.425-12.847v-36.545c0-4.945-1.811-9.233-5.425-12.847C502.588,275.895,498.3,274.088,493.356,274.088z" />
                                                    <path
                                                        d="M493.356,383.721H18.274c-4.952,0-9.233,1.81-12.851,5.427C1.809,392.762,0,397.046,0,401.994v36.546
																	c0,4.948,1.809,9.232,5.424,12.854c3.621,3.61,7.904,5.421,12.851,5.421h475.082c4.944,0,9.232-1.811,12.85-5.421
																	c3.614-3.621,5.425-7.905,5.425-12.854v-36.546c0-4.948-1.811-9.232-5.425-12.847C502.588,385.53,498.3,383.721,493.356,383.721z" />
                                                    <path
                                                        d="M506.206,60.241c-3.617-3.612-7.905-5.424-12.85-5.424H18.274c-4.952,0-9.233,1.812-12.851,5.424
																	C1.809,63.858,0,68.143,0,73.091v36.547c0,4.948,1.809,9.229,5.424,12.847c3.621,3.616,7.904,5.424,12.851,5.424h475.082
																	c4.944,0,9.232-1.809,12.85-5.424c3.614-3.617,5.425-7.898,5.425-12.847V73.091C511.63,68.143,509.82,63.861,506.206,60.241z" />
                                                    <path d="M493.356,164.456H18.274c-4.952,0-9.233,1.807-12.851,5.424C1.809,173.495,0,177.778,0,182.727v36.547
																	c0,4.947,1.809,9.233,5.424,12.845c3.621,3.617,7.904,5.429,12.851,5.429h475.082c4.944,0,9.232-1.812,12.85-5.429
																	c3.614-3.612,5.425-7.898,5.425-12.845v-36.547c0-4.952-1.811-9.231-5.425-12.847C502.588,166.263,498.3,164.456,493.356,164.456z
																	" />
                                                </g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                        </svg>
                                    </a>
                                    <nav class="cd-dropdown">
                                        <h2><a href="index.html">Numerology</a></h2>
                                        <a href="#0" class="cd-close">Close</a>
                                        <ul class="cd-dropdown-content">
                                            <li>
                                                <a href="#">Home</a>
                                            </li>

                                            <li>
                                                <a href="index.html">About US</a>
                                            </li>


                                            <li class="has-children">
                                                <a href="#">Numerology</a>

                                                <ul class="cd-secondary-dropdown is-hidden">
                                                    <li class="go-back"><a href="#0">Menu</a></li>
                                                    <li>
                                                        <a href="#">Name Numerology</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Phone Number Numerology</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Advanced Numerology</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Business Numerology</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- .has-children -->
                                            <li>
                                                <a href="#">Consultant</a>

                                            </li>


                                            <li>
                                                <a href="{{ url('/consultant') }}">Contact</a>
                                            </li>
                                        </ul>
                                        <!-- .cd-dropdown-content -->



                                    </nav>
                                    <!-- .cd-dropdown -->

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .cd-dropdown-wrapper -->
                </header>
            </div>
        </div>
    </div>
</div>
<!-- hs Navigation End -->