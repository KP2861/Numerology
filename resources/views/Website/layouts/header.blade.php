<!-- hs top header Start -->
<div class="hs_top_header_main_Wrapper">
    <div class="container">
        <div class="d-flex justify-content-space-between align-items-center">
            <div class="hs_header_logo_left hidden-xs">
                <div class="hs_logo_wrapper">
                    <a href="{{ url('/') }}"><img src="{{ url('frontend/assests/images/content/top_logo.png') }}" class="img-responsive" alt="logo" title="Logo" /></a>
                </div>
            </div>
            <div class="hs_header_logo_right d-flex justify-content-end align-items-center">
                <div class="hs_header_add_wrapper hidden-xs hidden-sm">
                    <div class="hs_header_add_icon">
                        <i class="fa fa-home"></i>
                    </div>
                    <div class="hs_header_add_icon_cont">
                        <h5 class="fw-bold">Reach Us</h5>
                        <p>601, Ram Nagar Dewas</p>
                    </div>
                </div>
                <div class="hs_header_add_wrapper hidden-xs hidden-sm">
                    <div class="hs_header_add_icon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="hs_header_add_icon_cont">
                        <h5 class="fw-bold">Contact Us</h5>
                        <p>+91-123456789</p>
                    </div>
                </div>
                
                @if(Auth::check())
                <div class="hs_btn_wrapper">
                    <ul>
                        <li><a href="{{ url('/consultant') }}" class="hs_btn_hover">Consultation</a></li>
                    </ul>
                </div>
                <div class="dropdown avtar ms-2">
                    <button class=" dropdown-toggle p-0 border-0 bg-transparent" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ url('frontend/assests/images/header/avtar-img.png') }}" alt="Logo" class="avtar">
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="{{ url('/profile') }}">Profile</a></li>
                        <li><a class="dropdown-item" href="">Logout</a></li>
                    </ul>
                </div>
                @else
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
                @endif
                
                <!-- Modal for Login -->
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
