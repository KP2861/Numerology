@extends("Website.layouts.app")
@section('content')

<!-- hs Slider Start -->
<!-- <div class="slider-area">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="carousel-captions caption-1">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                <div class="content">
                                    <h1 data-animation="animated bounceInLeft"><img
                                            src="{{url('frontend/assests/images/header/slider_logo.png')}}" alt="slider_logo" /></h1>
                                    <h2 data-animation="animated zoomInDown">the best <span>horoscope</span></h2>
                                    <p data-animation="animated bounceInUp">Proin gravida nibh vel velit auctor
                                        aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit<br>
                                        consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio.</p>
                                    <div class="hs_effect_btn">
                                        <ul>
                                            <li data-animation="animated flipInX"><a href="#"
                                                    class="hs_btn_hover">Read more</a></li>
                                        </ul>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                                <div class="content_tabs">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="hs_slider_right_tabs_wrapper"
                                                data-animation="animated bounceInLeft hs_slider_tab_one">
                                                <div class="hs_slider_tabs_icon_wrapper">
                                                    <div class="img-wrapper">
                                                        <img
                                                            src="{{url('frontend/assests/images/content/chinese-dark-icon.svg')}}" alt="slider_logo" class="img-fluid dark-icon" />
                                                        <img
                                                            src="{{url('frontend/assests/images/content/chinese-light-icon.svg')}}" alt="slider_logo" class="img-fluid light-icon" />
                                                    </div>

                                                </div>
                                                <div class="hs_slider_tabs_icon_cont_wrapper">
                                                    <ul>
                                                        <li><a href="#" class="hs_tabs_btn">Chinese Astrology</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="hs_slider_right_tabs_wrapper hs_slider_right_tabs_wrapper2"
                                                data-animation="animated bounceInRight hs_slider_tab_tow">
                                                <div class="hs_slider_tabs_icon_wrapper">
                                                <div class="img-wrapper">
                                                    <img
                                                        src="{{url('frontend/assests/images/content/vastu-dark-icon.svg')}}" alt="slider_logo" class="img-fluid dark-icon" />
                                                    <img
                                                        src="{{url('frontend/assests/images/content/vastu-light-icon.svg')}}" alt="slider_logo" class="img-fluid light-icon" />
                                                </div>
                                                </div>
                                                <div class="hs_slider_tabs_icon_cont_wrapper">
                                                    <ul>
                                                        <li><a href="#" class="hs_tabs_btn">Vasthusastra</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="hs_slider_right_tabs_wrapper hs_slider_right_tabs_wrapper2"
                                                data-animation="animated bounceInLeft hs_slider_tab_three">
                                                <div class="hs_slider_tabs_icon_wrapper">
                                                <div class="img-wrapper">
                                                    <img
                                                        src="{{url('frontend/assests/images/content/career-tarot-dark-icon.svg')}}" alt="slider_logo" class="dark-icon" />
                                                    <img
                                                        src="{{url('frontend/assests/images/content/career-tarot-light-icon.svg')}}" alt="slider_logo" class="light-icon" />
                                                </div>
                                                </div>
                                                <div class="hs_slider_tabs_icon_cont_wrapper">
                                                    <ul>
                                                        <li><a href="#" class="hs_tabs_btn">Carrer Tarot</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="hs_slider_right_tabs_wrapper hs_slider_right_tabs_wrapper2"
                                                data-animation="animated bounceInRight hs_slider_tab_four">
                                                <div class="hs_slider_tabs_icon_wrapper">
                                                <div class="img-wrapper">
                                                    <img
                                                        src="{{url('frontend/assests/images/content/love-tarot-dark-icon.svg')}}" alt="slider_logo" class="img-fluid dark-icon" />
                                                    <img
                                                        src="{{url('frontend/assests/images/content/love-tarot-light-icon.svg')}}" alt="slider_logo" class="img-fluid light-icon" />
                                                </div>
                                                </div>
                                                <div class="hs_slider_tabs_icon_cont_wrapper">
                                                    <ul>
                                                        <li><a href="#" class="hs_tabs_btn">Love Tarot</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="hs_slider_right_tabs_wrapper hs_slider_right_tabs_wrapper2"
                                                data-animation="animated bounceInLeft hs_slider_tab_fifth">
                                                <div class="hs_slider_tabs_icon_wrapper">
                                                <div class="img-wrapper">
                                                    <img
                                                        src="{{url('frontend/assests/images/content/numerology-dark-icon.svg')}}" alt="slider_logo" class="img-fluid dark-icon" />
                                                    <img
                                                        src="{{url('frontend/assests/images/content/numerology-light-icon.svg')}}" alt="slider_logo" class="img-fluid light-icon" />
                                                </div>
                                                </div>
                                                <div class="hs_slider_tabs_icon_cont_wrapper">
                                                    <ul>
                                                        <li><a href="#" class="hs_tabs_btn">Numerology</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class=" carousel-captions caption-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                <div class="content">
                                    <h1 data-animation="animated bounceInLeft"><img
                                            src="{{url('frontend/assests/images/header/slider_logo.png')}}" alt="slider_logo" /></h1>
                                    <h2 data-animation="animated zoomInDown">the best <span>horoscope</span></h2>
                                    <p data-animation="animated bounceInUp">Proin gravida nibh vel velit auctor
                                        aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit<br>
                                        consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio.</p>
                                    <div class="hs_effect_btn">
                                        <ul>
                                            <li data-animation="animated flipInX"><a href="#"
                                                    class="hs_btn_hover">Read more</a></li>
                                        </ul>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                                <div class="content_tabs">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="hs_slider_right_tabs_wrapper"
                                                data-animation="animated bounceInLeft hs_slider_tab_one">
                                                <div class="hs_slider_tabs_icon_wrapper">
                                                <div class="img-wrapper">
                                                    <img
                                                        src="{{url('frontend/assests/images/content/chinese-dark-icon.svg')}}" alt="slider_logo" class="img-fluid dark-icon" />
                                                    <img
                                                        src="{{url('frontend/assests/images/content/chinese-light-icon.svg')}}" alt="slider_logo" class="img-fluid light-icon" />
                                                </div>
                                                </div>
                                                <div class="hs_slider_tabs_icon_cont_wrapper">
                                                    <ul>
                                                        <li><a href="#" class="hs_tabs_btn">Chinese Astrology</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="hs_slider_right_tabs_wrapper hs_slider_right_tabs_wrapper2"
                                                data-animation="animated bounceInRight hs_slider_tab_tow">
                                                <div class="hs_slider_tabs_icon_wrapper">
                                                <div class="img-wrapper">
                                                    <img
                                                        src="{{url('frontend/assests/images/content/vastu-dark-icon.svg')}}" alt="slider_logo" class="img-fluid dark-icon" />
                                                    <img
                                                        src="{{url('frontend/assests/images/content/vastu-light-icon.svg')}}" alt="slider_logo" class="img-fluid light-icon" />
                                                </div>
                                                </div>
                                                <div class="hs_slider_tabs_icon_cont_wrapper">
                                                    <ul>
                                                        <li><a href="#" class="hs_tabs_btn">Vasthusastra</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="hs_slider_right_tabs_wrapper hs_slider_right_tabs_wrapper2"
                                                data-animation="animated bounceInLeft hs_slider_tab_three">
                                                <div class="hs_slider_tabs_icon_wrapper">
                                                <div class="img-wrapper">
                                                    <img
                                                        src="{{url('frontend/assests/images/content/career-tarot-dark-icon.svg')}}" alt="slider_logo" class="img-fluid dark-icon" />
                                                    <img
                                                        src="{{url('frontend/assests/images/content/career-tarot-light-icon.svg')}}" alt="slider_logo" class="img-fluid light-icon" />
                                                </div>
                                                </div>
                                                <div class="hs_slider_tabs_icon_cont_wrapper">
                                                    <ul>
                                                        <li><a href="#" class="hs_tabs_btn">Carrer Tarot</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="hs_slider_right_tabs_wrapper hs_slider_right_tabs_wrapper2"
                                                data-animation="animated bounceInRight hs_slider_tab_four">
                                                <div class="hs_slider_tabs_icon_wrapper">
                                                <div class="img-wrapper">
                                                    <img
                                                        src="{{url('frontend/assests/images/content/love-tarot-dark-icon.svg')}}" alt="slider_logo" class="img-fluid dark-icon" />
                                                    <img
                                                        src="{{url('frontend/assests/images/content/love-tarot-light-icon.svg')}}" alt="slider_logo" class="img-fluid light-icon" />
                                                </div>
                                                </div>
                                                <div class="hs_slider_tabs_icon_cont_wrapper">
                                                    <ul>
                                                        <li><a href="#" class="hs_tabs_btn">Love Tarot</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="hs_slider_right_tabs_wrapper hs_slider_right_tabs_wrapper2"
                                                data-animation="animated bounceInLeft hs_slider_tab_fifth">
                                                <div class="hs_slider_tabs_icon_wrapper">
                                                <div class="img-wrapper">
                                                    <img
                                                        src="{{url('frontend/assests/images/content/numerology-dark-icon.svg')}}" alt="slider_logo" class="img-fluid dark-icon" />
                                                    <img
                                                        src="{{url('frontend/assests/images/content/numerology-light-icon.svg')}}" alt="slider_logo" class="img-fluid light-icon" />
                                                </div>
                                                </div>
                                                <div class="hs_slider_tabs_icon_cont_wrapper">
                                                    <ul>
                                                        <li><a href="#" class="hs_tabs_btn">Numerology</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="carousel-captions caption-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                <div class="content">
                                    <h1 data-animation="animated bounceInLeft"><img
                                            src="{{url('frontend/assests/images/header/slider_logo.png')}}" alt="slider_logo" /></h1>
                                    <h2 data-animation="animated zoomInDown">the best <span>horoscope</span></h2>
                                    <p data-animation="animated bounceInUp">Proin gravida nibh vel velit auctor
                                        aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit<br>
                                        consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio.</p>
                                    <div class="hs_effect_btn">
                                        <ul>
                                            <li data-animation="animated flipInX"><a href="#"
                                                    class="hs_btn_hover">Read more</a></li>
                                        </ul>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                                <div class="content_tabs">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="hs_slider_right_tabs_wrapper"
                                                data-animation="animated bounceInLeft hs_slider_tab_one">
                                                <div class="hs_slider_tabs_icon_wrapper">
                                                <div class="img-wrapper">
                                                    <img
                                                        src="{{url('frontend/assests/images/content/chinese-dark-icon.svg')}}" alt="slider_logo" class="img-fluid dark-icon" />
                                                    <img
                                                        src="{{url('frontend/assests/images/content/chinese-light-icon.svg')}}" alt="slider_logo" class="img-fluid light-icon" />
                                                </div>
                                                </div>
                                                <div class="hs_slider_tabs_icon_cont_wrapper">
                                                    <ul>
                                                        <li><a href="#" class="hs_tabs_btn">Chinese Astrology</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="hs_slider_right_tabs_wrapper hs_slider_right_tabs_wrapper2"
                                                data-animation="animated bounceInRight hs_slider_tab_tow">
                                                <div class="hs_slider_tabs_icon_wrapper">
                                                <div class="img-wrapper">
                                                    <img
                                                        src="{{url('frontend/assests/images/content/vastu-dark-icon.svg')}}" alt="slider_logo" class="img-fluid dark-icon" />
                                                    <img
                                                        src="{{url('frontend/assests/images/content/vastu-light-icon.svg')}}" alt="slider_logo" class="img-fluid light-icon" />
                                                </div>
                                                </div>
                                                <div class="hs_slider_tabs_icon_cont_wrapper">
                                                    <ul>
                                                        <li><a href="#" class="hs_tabs_btn">Vasthusastra</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="hs_slider_right_tabs_wrapper hs_slider_right_tabs_wrapper2"
                                                data-animation="animated bounceInLeft hs_slider_tab_three">
                                                <div class="hs_slider_tabs_icon_wrapper">
                                                <div class="img-wrapper">
                                                    <img
                                                        src="{{url('frontend/assests/images/content/career-tarot-dark-icon.svg')}}" alt="slider_logo" class="img-fluid dark-icon" />
                                                    <img
                                                        src="{{url('frontend/assests/images/content/career-tarot-light-icon.svg')}}" alt="slider_logo" class="img-fluid light-icon" />
                                                </div>
                                                </div>
                                                <div class="hs_slider_tabs_icon_cont_wrapper">
                                                    <ul>
                                                        <li><a href="#" class="hs_tabs_btn">Carrer Tarot</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="hs_slider_right_tabs_wrapper hs_slider_right_tabs_wrapper2"
                                                data-animation="animated bounceInRight hs_slider_tab_four">
                                                <div class="hs_slider_tabs_icon_wrapper">
                                                <div class="img-wrapper">
                                                    <img
                                                        src="{{url('frontend/assests/images/content/love-tarot-dark-icon.svg')}}" alt="slider_logo" class="img-fluid dark-icon" />
                                                    <img
                                                        src="{{url('frontend/assests/images/content/love-tarot-light-icon.svg')}}" alt="slider_logo" class="img-fluid light-icon" />
                                                </div>
                                                </div>
                                                <div class="hs_slider_tabs_icon_cont_wrapper">
                                                    <ul>
                                                        <li><a href="#" class="hs_tabs_btn">Love Tarot</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="hs_slider_right_tabs_wrapper hs_slider_right_tabs_wrapper2"
                                                data-animation="animated bounceInLeft hs_slider_tab_fifth">
                                                <div class="hs_slider_tabs_icon_wrapper">
                                                <div class="img-wrapper">
                                                    <img
                                                        src="{{url('frontend/assests/images/content/numerology-dark-icon.svg')}}" alt="slider_logo" class="img-fluid dark-icon" />
                                                    <img
                                                        src="{{url('frontend/assests/images/content/numerology-light-icon.svg')}}" alt="slider_logo" class="img-fluid light-icon" />
                                                </div>
                                                </div>
                                                <div class="hs_slider_tabs_icon_cont_wrapper">
                                                    <ul>
                                                        <li><a href="#" class="hs_tabs_btn">Numerology</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"><span
                        class="number"></span></li>
                <li data-target="#carousel-example-generic" data-slide-to="1" class=""><span class="number"></span>
                </li>
                <li data-target="#carousel-example-generic" data-slide-to="2" class=""><span class="number"></span>
                </li>
            </ol>
            <div class="carousel-nevigation">
                <a class="prev" href="#carousel-example-generic" role="button" data-slide="prev">
                    <i class="fa fa-angle-left"></i>

                </a>
                <a class="next" href="#carousel-example-generic" role="button" data-slide="next">

                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>
</div> -->


<div class="slider-area">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="carousel-captions caption-1">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                <div class="content">
                                    <h1 data-animation="animated bounceInLeft"><img
                                            src="{{url('frontend/assests/images/header/slider_logo.png')}}" alt="slider_logo" /></h1>
                                    <h2 data-animation="animated zoomInDown">the best <span>horoscope</span></h2>
                                    <p data-animation="animated bounceInUp">Proin gravida nibh vel velit auctor
                                        aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit<br>
                                        consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio.</p>
                                    <div class="hs_effect_btn">
                                        <ul>
                                            <li data-animation="animated flipInX"><a href="#"
                                                    class="hs_btn_hover">Read more</a></li>
                                        </ul>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                                <div class="content_tabs">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="hs_slider_right_tabs_wrapper"
                                                data-animation="animated bounceInLeft hs_slider_tab_one">
                                                <div class="hs_slider_tabs_icon_wrapper">
                                                    <div class="img-wrapper">
                                                        <img
                                                            src="{{url('frontend/assests/images/content/chinese-dark-icon.svg')}}" alt="slider_logo" class="img-fluid dark-icon" />
                                                        <img
                                                            src="{{url('frontend/assests/images/content/chinese-light-icon.svg')}}" alt="slider_logo" class="img-fluid light-icon" />
                                                    </div>

                                                </div>
                                                <div class="hs_slider_tabs_icon_cont_wrapper">
                                                    <ul>
                                                        <li><a href="#" class="hs_tabs_btn">Chinese Astrology</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="hs_slider_right_tabs_wrapper hs_slider_right_tabs_wrapper2"
                                                data-animation="animated bounceInRight hs_slider_tab_tow">
                                                <div class="hs_slider_tabs_icon_wrapper">
                                                    <div class="img-wrapper">
                                                        <img
                                                            src="{{url('frontend/assests/images/content/vastu-dark-icon.svg')}}" alt="slider_logo" class="img-fluid dark-icon" />
                                                        <img
                                                            src="{{url('frontend/assests/images/content/vastu-light-icon.svg')}}" alt="slider_logo" class="img-fluid light-icon" />
                                                    </div>
                                                </div>
                                                <div class="hs_slider_tabs_icon_cont_wrapper">
                                                    <ul>
                                                        <li><a href="#" class="hs_tabs_btn">Vasthusastra</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="hs_slider_right_tabs_wrapper hs_slider_right_tabs_wrapper2"
                                                data-animation="animated bounceInLeft hs_slider_tab_three">
                                                <div class="hs_slider_tabs_icon_wrapper">
                                                    <div class="img-wrapper">
                                                        <img
                                                            src="{{url('frontend/assests/images/content/career-tarot-dark-icon.svg')}}" alt="slider_logo" class="dark-icon" />
                                                        <img
                                                            src="{{url('frontend/assests/images/content/career-tarot-light-icon.svg')}}" alt="slider_logo" class="light-icon" />
                                                    </div>
                                                </div>
                                                <div class="hs_slider_tabs_icon_cont_wrapper">
                                                    <ul>
                                                        <li><a href="#" class="hs_tabs_btn">Carrer Tarot</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="hs_slider_right_tabs_wrapper hs_slider_right_tabs_wrapper2"
                                                data-animation="animated bounceInRight hs_slider_tab_four">
                                                <div class="hs_slider_tabs_icon_wrapper">
                                                    <div class="img-wrapper">
                                                        <img
                                                            src="{{url('frontend/assests/images/content/love-tarot-dark-icon.svg')}}" alt="slider_logo" class="img-fluid dark-icon" />
                                                        <img
                                                            src="{{url('frontend/assests/images/content/love-tarot-light-icon.svg')}}" alt="slider_logo" class="img-fluid light-icon" />
                                                    </div>
                                                </div>
                                                <div class="hs_slider_tabs_icon_cont_wrapper">
                                                    <ul>
                                                        <li><a href="#" class="hs_tabs_btn">Love Tarot</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="hs_slider_right_tabs_wrapper hs_slider_right_tabs_wrapper2"
                                                data-animation="animated bounceInLeft hs_slider_tab_fifth">
                                                <div class="hs_slider_tabs_icon_wrapper">
                                                    <div class="img-wrapper">
                                                        <img
                                                            src="{{url('frontend/assests/images/content/numerology-dark-icon.svg')}}" alt="slider_logo" class="img-fluid dark-icon" />
                                                        <img
                                                            src="{{url('frontend/assests/images/content/numerology-light-icon.svg')}}" alt="slider_logo" class="img-fluid light-icon" />
                                                    </div>
                                                </div>
                                                <div class="hs_slider_tabs_icon_cont_wrapper">
                                                    <ul>
                                                        <li><a href="#" class="hs_tabs_btn">Numerology</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- hs about ind wrapper Start -->
<div id="about" class="hs_about_indx_main_wrapper white-overlay-section">
    <div class="white-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="hs_about_heading_main_wrapper">
                    <div class="hs_about_heading_wrapper">
                        <h2>About <span>Horoscope</span></h2>
                        <h4><span></span></h4>
                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum<br>
                            auctor, nisi elit consequat hello Aenean world.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="hs_about_left_img_wrapper">
                    <img src="{{url('frontend/assests/images/content/about_img.jpg')}}" alt="about_img" />
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="hs_about_right_cont_wrapper">
                    <h2>HoroScope Revels The Will Of God</h2>
                    <p class="about-para">Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.
                        Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat
                        auctor eu in elit. Class aptent taciti sociosqu
                        ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam
                        ac urna eu felis dapibus condimentum sit amet a augue.</p>
                    <h3>Contact Us</h3>
                    <h1>+1800-123-123</h1>
                    <div class="hs_effect_btn hs_about_btn">
                        <ul>
                            <li><a href="{{ url('/login') }}" class="hs_btn_hover">Get Your Report</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="hs_about_indx_main_wrapper white-overlay-section">
    <div class="white-overlay"></div>
    <div class="container">
        <div class="row ">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="hs_about_heading_main_wrapper">
                    <div class="hs_about_heading_wrapper">
                        <h2><span> Numerology Calculator </span></h2>

                        <h4><span></span></h4>
                        <p>Prediction for Expression,and Personality Numbers</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="hs_about_right_cont_wrapper find-lifepath">

                    <div class="accordion-wrapper">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Enter your birthdate to calculate your birth path number.
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="card">
                                            <div class="card-body">
                                                <form action="{{ route('numerology.calculate') }}" method="POST">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="dob">Name:</label>
                                                                <input type="text" id="dob" name="dob" class="form-control" placeholder="Name" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="gender">Gender:</label>
                                                                <select id="gender" name="gender" class="form-control" required>
                                                                    <option value="" disabled selected>Select your gender</option>
                                                                    <option value="male">Male</option>
                                                                    <option value="female">Female</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="dob">Date of Birth (dd-mm-yyyy):</label>
                                                                <input type="text" id="dob" name="dob" class="form-control" placeholder="21-05-1986" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary mt-4">Calculate</button>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="hs_about_left_img_wrapper">
                    <img src="{{url('frontend/assests/images/content/calculator-banner-img.png')}}" alt="about_img" />
                </div>
            </div>
        </div>
    </div>
    </a>
</div>
<!-- hs about ind wrapper End -->
<!-- hs sign wrapper Start -->
<div class="hs_sign_main_wrapper choose-path-sec">
    <div class="hs_news_slider_bg_overlay"></div>
    <div class="container">
        <div class="hs_sign_heading_wrapper">
            <div class="hs_about_heading_main_wrapper">
                <div class="hs_about_heading_wrapper">
                    <h2>Choose Your <span>Number</span></h2>
                    <h4><span></span></h4>
                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum<br>
                        auctor, nisi elit consequat hello Aenean world.</p>
                </div>
            </div>
        </div>
        <div class="hs_sign_center_wrapper visible-xs visible-sm">
            <div class="hs_cycle_main_wrapper">
                <div class="hs_cycle_img">
                    <img src="{{url('frontend/assests/images/content/cycle.png')}}" alt="circle_img">
                    <span class="pulse"></span>
                    <div class="hs_tab_shap1">
                        <a href="#">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="68.811px"
                                height="64.729px" viewBox="0 0 68.811 64.729"
                                enable-background="new 0 0 68.811 64.729" xml:space="preserve">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0,52.763c0,0,26.125,0.367,42.664,11.967l26.147-46.796
                        c0,0-30.278-18.234-68.054-17.929L0,52.763z" />
                            </svg>
                            <p><i class="flaticon-taurus-astrological-sign-symbol"></i></p>
                        </a>
                    </div>
                    <div class="hs_tab_shap2">
                        <a href="#">
                            <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="68.811px"
                                height="64.729px" viewBox="0 0 68.811 64.729"
                                enable-background="new 0 0 68.811 64.729" xml:space="preserve">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0,52.763c0,0,26.125,0.367,42.664,11.967l26.147-46.796
                        c0,0-30.278-18.234-68.054-17.929L0,52.763z" />
                            </svg>
                            <p><i class="flaticon-aries-sign"></i></p>
                        </a>
                    </div>
                    <div class="hs_tab_shap3">
                        <a href="#">
                            <svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="68.811px"
                                height="64.729px" viewBox="0 0 68.811 64.729"
                                enable-background="new 0 0 68.811 64.729" xml:space="preserve">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0,52.763c0,0,26.125,0.367,42.664,11.967l26.147-46.796
                        c0,0-30.278-18.234-68.054-17.929L0,52.763z" />
                            </svg>
                            <p><i class="flaticon-libra"></i></p>
                        </a>
                    </div>
                    <div class="hs_tab_shap4">
                        <a href="#">
                            <svg version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="68.811px"
                                height="64.729px" viewBox="0 0 68.811 64.729"
                                enable-background="new 0 0 68.811 64.729" xml:space="preserve">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0,52.763c0,0,26.125,0.367,42.664,11.967l26.147-46.796
                        c0,0-30.278-18.234-68.054-17.929L0,52.763z" />
                            </svg>
                            <p><i class="flaticon-scorpio"></i></p>
                        </a>
                    </div>
                    <div class="hs_tab_shap5">
                        <a href="#">
                            <svg version="1.1" id="Layer_5" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="68.811px"
                                height="64.729px" viewBox="0 0 68.811 64.729"
                                enable-background="new 0 0 68.811 64.729" xml:space="preserve">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0,52.763c0,0,26.125,0.367,42.664,11.967l26.147-46.796
                        c0,0-30.278-18.234-68.054-17.929L0,52.763z" />
                            </svg>
                            <p><i class="flaticon-leo"></i></p>
                        </a>
                    </div>
                    <div class="hs_tab_shap6">
                        <a href="#">
                            <svg version="1.1" id="Layer_6" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="68.811px"
                                height="64.729px" viewBox="0 0 68.811 64.729"
                                enable-background="new 0 0 68.811 64.729" xml:space="preserve">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0,52.763c0,0,26.125,0.367,42.664,11.967l26.147-46.796
                        c0,0-30.278-18.234-68.054-17.929L0,52.763z" />
                            </svg>
                            <p><i class="flaticon-capricorn"></i></p>
                        </a>
                    </div>
                    <div class="hs_tab_shap7">
                        <a href="#">
                            <svg version="1.1" id="Layer_7" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="68.811px"
                                height="64.729px" viewBox="0 0 68.811 64.729"
                                enable-background="new 0 0 68.811 64.729" xml:space="preserve">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0,52.763c0,0,26.125,0.367,42.664,11.967l26.147-46.796
                        c0,0-30.278-18.234-68.054-17.929L0,52.763z" />
                            </svg>
                            <p><i class="flaticon-aquarius-zodiac-sign-symbol"></i></p>
                        </a>
                    </div>
                    <div class="hs_tab_shap8">
                        <a href="#">
                            <svg version="1.1" id="Layer_8" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="68.811px"
                                height="64.729px" viewBox="0 0 68.811 64.729"
                                enable-background="new 0 0 68.811 64.729" xml:space="preserve">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0,52.763c0,0,26.125,0.367,42.664,11.967l26.147-46.796
                        c0,0-30.278-18.234-68.054-17.929L0,52.763z" />
                            </svg>
                            <p><i class="flaticon-gemini-zodiac-sign-symbol"></i></p>
                        </a>
                    </div>
                    <div class="hs_tab_shap9">
                        <a href="#">
                            <svg version="1.1" id="Layer_9" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="68.811px"
                                height="64.729px" viewBox="0 0 68.811 64.729"
                                enable-background="new 0 0 68.811 64.729" xml:space="preserve">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0,52.763c0,0,26.125,0.367,42.664,11.967l26.147-46.796
                        c0,0-30.278-18.234-68.054-17.929L0,52.763z" />
                            </svg>
                            <p><i class="flaticon-virgo-astrological-symbol-sign"></i></p>
                        </a>
                    </div>
                    <div class="hs_tab_shap10">
                        <a href="#">
                            <svg version="1.1" id="Layer_10" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="68.811px"
                                height="64.729px" viewBox="0 0 68.811 64.729"
                                enable-background="new 0 0 68.811 64.729" xml:space="preserve">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0,52.763c0,0,26.125,0.367,42.664,11.967l26.147-46.796
                        c0,0-30.278-18.234-68.054-17.929L0,52.763z" />
                            </svg>
                            <p><i class="flaticon-leo"></i></p>
                        </a>
                    </div>
                    <div class="hs_tab_shap11">
                        <a href="#">
                            <svg version="1.1" id="Layer_11" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="68.811px"
                                height="64.729px" viewBox="0 0 68.811 64.729"
                                enable-background="new 0 0 68.811 64.729" xml:space="preserve">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0,52.763c0,0,26.125,0.367,42.664,11.967l26.147-46.796
                        c0,0-30.278-18.234-68.054-17.929L0,52.763z" />
                            </svg>
                            <p><i class="flaticon-cancer"></i></p>
                        </a>
                    </div>
                    <div class="hs_tab_shap12">
                        <a href="#">
                            <svg version="1.1" id="Layer_12" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="68.811px"
                                height="64.729px" viewBox="0 0 68.811 64.729"
                                enable-background="new 0 0 68.811 64.729" xml:space="preserve">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0,52.763c0,0,26.125,0.367,42.664,11.967l26.147-46.796
                        c0,0-30.278-18.234-68.054-17.929L0,52.763z" />
                            </svg>
                            <p><i class="flaticon-gemini-zodiac-sign-symbol"></i></p>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <div class="hs_sign_left_wrapper">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="hs_sign_left_tabs_wrapper hs_sign_left_tabs_border_wrapper1">
                        <div class="hs_slider_tabs_icon_wrapper ">
                            <img src="{{url('frontend/assests/images/content/life-one.svg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="hs_slider_tabs_icon_cont_wrapper">
                            <ul>
                                <li>Life Path:</li>
                                <li><a href="#" class="hs_tabs_btn"> The Leader</a></li>
                            </ul>
                        </div>
                        <span></span>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div
                        class="hs_sign_left_tabs_wrapper hs_sign_left_tabs_wrapper_2 hs_sign_left_tabs_border_wrapper2">
                        <div class="hs_slider_tabs_icon_wrapper ">
                            <img src="{{url('frontend/assests/images/content/life-two.svg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="hs_slider_tabs_icon_cont_wrapper">
                            <ul>
                                <li>Life Path:</li>
                                <li><a href="#" class="hs_tabs_btn">The Mediator</a></li>
                            </ul>
                        </div>
                        <span></span>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div
                        class="hs_sign_left_tabs_wrapper hs_sign_left_tabs_wrapper_2 hs_sign_left_tabs_border_wrapper3">
                        <div class="hs_slider_tabs_icon_wrapper ">
                            <img src="{{url('frontend/assests/images/content/life-three.svg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="hs_slider_tabs_icon_cont_wrapper">
                            <ul>
                                <li>Life Path:</li>
                                <li><a href="#" class="hs_tabs_btn">The Communicator</a></li>
                            </ul>
                        </div>
                        <span></span>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div
                        class="hs_sign_left_tabs_wrapper hs_sign_left_tabs_wrapper_2 hs_sign_left_tabs_border_wrapper4">
                        <div class="hs_slider_tabs_icon_wrapper ">
                            <img src="{{url('frontend/assests/images/content/life-four.svg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="hs_slider_tabs_icon_cont_wrapper">
                            <ul>
                                <li>Life Path:</li>
                                <li><a href="#" class="hs_tabs_btn">The Teacher</a></li>
                            </ul>
                        </div>
                        <span></span>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div
                        class="hs_sign_left_tabs_wrapper hs_sign_left_tabs_wrapper_2 hs_sign_left_tabs_border_wrapper5">
                        <div class="hs_slider_tabs_icon_wrapper ">
                            <img src="{{url('frontend/assests/images/content/life-five.svg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="hs_slider_tabs_icon_cont_wrapper">
                            <ul>
                                <li>Life Path:</li>
                                <li><a href="#" class="hs_tabs_btn">The Freedom Seeker</a></li>
                            </ul>
                        </div>
                        <span></span>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div
                        class="hs_sign_left_tabs_wrapper hs_sign_left_tabs_wrapper_2 hs_sign_left_tabs_border_wrapper6">
                        <div class="hs_slider_tabs_icon_wrapper ">
                            <img src="{{url('frontend/assests/images/content/life-six.svg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="hs_slider_tabs_icon_cont_wrapper">
                            <ul>
                                <li>Life Path:</li>
                                <li><a href="#" class="hs_tabs_btn"> The Nurturer</a></li>
                            </ul>
                        </div>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="hs_sign_right_wrapper visible-xs">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="hs_sign_left_tabs_wrapper hs_sign_right_tabs_border_wrapper1">
                        <span></span>

                        <div class="hs_slider_tabs_icon_wrapper">
                            <img src="{{url('frontend/assests/images/content/life-1.svg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="hs_slider_tabs_icon_cont_wrapper">
                            <ul>
                                <li><a href="#" class="hs_tabs_btn">Libra</a></li>
                                <li>31 March - 12 October</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div
                        class="hs_sign_left_tabs_wrapper hs_sign_left_tabs_wrapper_2 hs_sign_right_tabs_border_wrapper2">
                        <span></span>
                        <div class="hs_slider_tabs_icon_wrapper">
                            <img src="{{url('frontend/assests/images/content/life-1.svg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="hs_slider_tabs_icon_cont_wrapper">
                            <ul>
                                <li><a href="#" class="hs_tabs_btn">Scorpio</a></li>
                                <li>31 March - 12 October</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div
                        class="hs_sign_left_tabs_wrapper hs_sign_left_tabs_wrapper_2 hs_sign_right_tabs_border_wrapper3">
                        <span></span>
                        <div class="hs_slider_tabs_icon_wrapper">
                            <img src="{{url('frontend/assests/images/content/life-1.svg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="hs_slider_tabs_icon_cont_wrapper">
                            <ul>
                                <li><a href="#" class="hs_tabs_btn">Sagittarius
                                    </a></li>
                                <li>31 March - 12 October</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div
                        class="hs_sign_left_tabs_wrapper hs_sign_left_tabs_wrapper_2 hs_sign_right_tabs_border_wrapper4">
                        <span></span>
                        <div class="hs_slider_tabs_icon_wrapper">
                            <img src="{{url('frontend/assests/images/content/life-1.svg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="hs_slider_tabs_icon_cont_wrapper">
                            <ul>
                                <li><a href="#" class="hs_tabs_btn">
                                        Capricorn
                                    </a></li>
                                <li>31 March - 12 October</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div
                        class="hs_sign_left_tabs_wrapper hs_sign_left_tabs_wrapper_2 hs_sign_right_tabs_border_wrapper5">
                        <span></span>
                        <div class="hs_slider_tabs_icon_wrapper">
                            <img src="{{url('frontend/assests/images/content/life-1.svg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="hs_slider_tabs_icon_cont_wrapper">
                            <ul>
                                <li><a href="#" class="hs_tabs_btn">
                                        Aquarius
                                    </a></li>
                                <li>31 March - 12 October</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div
                        class="hs_sign_left_tabs_wrapper hs_sign_left_tabs_wrapper_2 hs_sign_right_tabs_border_wrapper6">
                        <span></span>
                        <div class="hs_slider_tabs_icon_wrapper">
                            <img src="{{url('frontend/assests/ages/content/life-1.svg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="hs_slider_tabs_icon_cont_wrapper">
                            <ul>
                                <li><a href="#" class="hs_tabs_btn">Pisces
                                    </a></li>
                                <li>31 March - 12 October</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hs_sign_center_wrapper hidden-sm hidden-xs">
            <div class="hs_cycle_main_wrapper">
                <div class="hs_cycle_img">
                    <img src="{{url('frontend/assests/images/content/cycle.png')}}" alt="circle_img">
                    <span class="pulse"></span>

                </div>

            </div>
        </div>
        <div class="hs_sign_right_wrapper hidden-xs">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="hs_sign_left_tabs_wrapper hs_sign_right_tabs_border_wrapper1">
                        <span></span>
                        <div class="hs_slider_tabs_icon_cont_wrapper">
                            <ul>
                                <li>Life Path:</li>
                                <li><a href="#" class="hs_tabs_btn">The Seeker</a></li>
                            </ul>
                        </div>
                        <div class="hs_slider_tabs_icon_wrapper ">
                            <img src="{{url('frontend/assests/images/content/life-seven.svg')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div
                        class="hs_sign_left_tabs_wrapper hs_sign_left_tabs_wrapper_2 hs_sign_right_tabs_border_wrapper2">
                        <span></span>
                        <div class="hs_slider_tabs_icon_cont_wrapper">
                            <ul>
                                <li>Life Path:</li>
                                <li><a href="#" class="hs_tabs_btn">The Powerhouse</a></li>
                            </ul>
                        </div>
                        <div class="hs_slider_tabs_icon_wrapper ">
                            <img src="{{url('frontend/assests/images/content/life-eight.svg')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div
                        class="hs_sign_left_tabs_wrapper hs_sign_left_tabs_wrapper_2 hs_sign_right_tabs_border_wrapper3">
                        <span></span>
                        <div class="hs_slider_tabs_icon_cont_wrapper">
                            <ul>
                                <li>Life Path:</li>
                                <li><a href="#" class="hs_tabs_btn"> The Leader</a></li>
                            </ul>
                        </div>
                        <div class="hs_slider_tabs_icon_wrapper ">
                            <img src="{{url('frontend/assests/images/content/life-nine.svg')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div
                        class="hs_sign_left_tabs_wrapper hs_sign_left_tabs_wrapper_2 hs_sign_right_tabs_border_wrapper4">
                        <span></span>
                        <div class="hs_slider_tabs_icon_cont_wrapper">
                            <ul>
                                <li>Life Path:</li>
                                <li><a href="#" class="hs_tabs_btn"> The Leader</a></li>
                            </ul>
                        </div>
                        <div class="hs_slider_tabs_icon_wrapper ">
                            <img src="{{url('frontend/assests/images/content/life-eleven.svg')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div
                        class="hs_sign_left_tabs_wrapper hs_sign_left_tabs_wrapper_2 hs_sign_right_tabs_border_wrapper5">
                        <span></span>
                        <div class="hs_slider_tabs_icon_cont_wrapper">
                            <ul>
                                <li>Life Path:</li>
                                <li><a href="#" class="hs_tabs_btn"> The Leader</a></li>
                            </ul>
                        </div>
                        <div class="hs_slider_tabs_icon_wrapper ">
                            <img src="{{url('frontend/assests/images/content/life-twenty-two.svg')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div
                        class="hs_sign_left_tabs_wrapper hs_sign_left_tabs_wrapper_2 hs_sign_right_tabs_border_wrapper6">
                        <span></span>
                        <div class="hs_slider_tabs_icon_cont_wrapper">
                            <ul>
                                <li>Life Path:</li>
                                <li><a href="#" class="hs_tabs_btn"> The Leader</a></li>
                            </ul>
                        </div>
                        <div class="hs_slider_tabs_icon_wrapper ">
                            <img src="{{url('frontend/assests/images/content/life-thirty-three.svg')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- hs sign wrapper End -->
<!-- hs service wrapper Start -->
<div class="hs_service_main_wrapper  white-overlay-section">
    <div class="white-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="hs_about_heading_main_wrapper">
                    <div class="hs_about_heading_wrapper">
                        <h2>Our <span> services</span></h2>
                        <h4><span></span></h4>
                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum<br>
                            auctor, nisi elit consequat hello Aenean world.</p>
                    </div>
                    <div class="row">
                        <div class="clearfix row">
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 portfolio-wrapper III_column"
                                data-groups='[ "all"]'>
                                <div class="hs_service_main_box_wrapper">
                                    <div class="hs_service_icon_main_wrapper">
                                        <div class="hs_service_icon_wrapper">
                                            <!-- <i class="flaticon-success"></i> -->
                                            <svg width="40" height="40" viewBox="0 0 512 512" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M466.824 184.36V429.177C466.824 445.81 453.34 459.295 436.706 459.295H30.118C13.484 459.295 0 445.811 0 429.177V143.059C0 126.425 13.484 112.941 30.118 112.941H365.288L301.555 176.674C291.671 186.558 286.118 199.964 286.118 213.943V233.412C286.118 258.362 306.344 278.588 331.294 278.588H350.764C364.742 278.588 378.148 273.035 388.032 263.151L466.824 184.36ZM97.882 414.152C97.882 389.647 98.715 366.489 100.359 345.18C134.493 330.858 163.339 310.368 182.075 287.135C212.255 249.712 211.161 209.25 172.382 189.86C133.564 170.451 103.915 193.842 87.329 244.785C80.392 266.092 75.311 292.854 72.068 323.674C62.465 326.89 52.475 329.572 42.224 331.622C34.069 333.253 28.78 341.186 30.411 349.342C32.042 357.497 39.976 362.786 48.131 361.155C55.347 359.712 62.455 357.989 69.425 356.009C68.318 374.381 67.766 393.841 67.766 414.154C67.766 422.471 74.508 429.213 82.825 429.213C91.14 429.211 97.882 422.469 97.882 414.152ZM184.509 363.834L215.105 328.868L216.493 339.973C218.04 352.352 229.33 361.132 241.709 359.585C246.901 358.936 251.706 356.505 255.305 352.707L269.315 337.92L278.244 350.652C283.767 358.527 293.671 362.04 302.921 359.407L358.006 343.726C366.005 341.449 370.644 333.118 368.367 325.12C366.09 317.121 357.76 312.482 349.761 314.759L299.827 328.973L288.681 313.081C287.812 311.843 286.822 310.695 285.724 309.654C276.668 301.074 262.371 301.46 253.791 310.516L244.403 320.425L242.909 308.475C242.222 302.978 239.539 297.925 235.37 294.277C225.981 286.062 211.711 287.013 203.496 296.402L161.846 344.003C156.369 350.262 157.004 359.776 163.262 365.252C169.519 370.727 179.033 370.093 184.509 363.834ZM439.824 80.9958L463.704 57.1158C469.584 51.2348 479.119 51.2348 485 57.1158L507.588 79.7038C513.469 85.5848 513.469 95.1198 507.588 101L483.708 124.88L439.824 80.9958ZM158.631 268.229C145.866 284.058 126.848 298.712 103.998 310.335C106.947 288.521 110.947 269.525 115.966 254.109C127.648 218.229 140.886 207.785 158.913 216.798C177.635 226.159 178.119 244.064 158.631 268.229ZM366.736 241.854C362.5 246.09 356.754 248.47 350.764 248.47H331.294C322.977 248.47 316.235 241.728 316.235 233.411V213.942C316.235 207.951 318.615 202.206 322.851 197.97L418.528 102.293L462.412 146.178L366.736 241.854Z"
                                                    fill="black" />
                                            </svg>
                                            <div class="btc_step_overlay"></div>
                                        </div>
                                    </div>
                                    <div class="hs_service_icon_cont_wrapper">
                                        <h2 class="margin-x">Name Numerology</h2>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean .</p>
                                        <h5><a href="#">Read More <i class="fa fa-long-arrow-right"></i></a></h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 portfolio-wrapper III_column"
                                data-groups='[ "website"]'>
                                <div class="hs_service_main_box_wrapper">
                                    <div class="hs_service_icon_main_wrapper">
                                        <div class="hs_service_icon_wrapper">
                                            <!-- <i class="flaticon-marry-me"></i> -->
                                            <svg width="40" height="40" viewBox="0 0 175 175" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_762_16744)">
                                                    <path
                                                        d="M141.107 0H33.8933L0 33.8933V141.107L33.8933 175H141.107L175 141.107V33.8933L141.107 0ZM106.384 62.571L121.022 49.391C124.807 45.983 126.978 41.1076 126.978 36.0148C126.978 33.1642 124.658 30.8451 121.808 30.8451C118.957 30.8451 116.638 33.1642 116.638 36.0148V41.1417H106.384V36.0148C106.384 27.5102 113.303 20.5912 121.808 20.5912C130.312 20.5912 137.231 27.5099 137.231 36.0145C137.231 44.0087 133.824 51.6619 127.883 57.011L122.59 61.7774H137.231V72.0313H106.384V62.571ZM37.7686 20.5909H58.3191V72.0313H48.0652V30.8448H37.7686V20.5909ZM68.6157 138.983C68.6157 147.488 61.6967 154.407 53.1921 154.407C44.6875 154.407 37.7686 147.488 37.7686 138.983V133.856H48.0225V138.983C48.0225 141.834 50.3416 144.153 53.1921 144.153C56.0427 144.153 58.3618 141.834 58.3618 138.983C58.3618 136.133 56.0427 133.813 53.1921 133.813H48.0652V123.56H53.1921C56.0427 123.56 58.3618 121.24 58.3618 118.39C58.3618 115.539 56.0427 113.22 53.1921 113.22C50.3416 113.22 48.0225 115.539 48.0225 118.39V123.517H37.7686V118.39C37.7686 109.885 44.6875 102.966 53.1921 102.966C61.6967 102.966 68.6157 109.885 68.6157 118.39C68.6157 122.344 67.1187 125.954 64.6635 128.687C67.1187 131.419 68.6157 135.029 68.6157 138.983ZM137.231 144.11V154.407H126.978V144.11H106.384V135.981L118.862 103.519L128.433 107.198L118.186 133.856H126.978V121.509H137.231V144.11ZM154.407 92.627H92.627V154.407H82.373V92.627H20.5933V82.373H82.373V20.5933H92.627V82.373H154.407V92.627Z"
                                                        fill="black" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_762_16744">
                                                        <rect width="175" height="175" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>

                                            <div class="btc_step_overlay"></div>
                                        </div>
                                    </div>
                                    <div class="hs_service_icon_cont_wrapper">
                                        <h2>Phone Number Numerology</h2>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean .</p>
                                        <h5><a href="#">Read More <i class="fa fa-long-arrow-right"></i></a></h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 portfolio-wrapper III_column"
                                data-groups='["all", "business"]'>
                                <div class="hs_service_main_box_wrapper">
                                    <div class="hs_service_icon_main_wrapper">
                                        <div class="hs_service_icon_wrapper">
                                            <!-- <i class="flaticon-islamic-temple"></i> -->
                                            <svg width="40" height="40" viewBox="0 0 165 165" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M53.3134 19.4941C37.1654 26.9624 25.1976 39.888 18.6585 55.1469C19.0301 55.0886 19.4127 55.0907 19.787 55.2391L41.6981 63.9467C41.7339 63.9604 41.7561 63.9901 41.7906 64.006C45.9565 54.8395 53.1987 47.0638 62.8577 42.3464C62.8383 42.3072 62.7951 42.2923 62.7776 42.252L53.4422 20.603C53.2848 20.2383 53.2697 19.863 53.3134 19.4941ZM43.7335 49.7638C41.8915 50.4192 40.6798 47.6704 42.6723 46.9927C44.6716 46.3267 46.8022 44.3807 45.3164 42.8966C44.284 41.8649 42.9504 42.4931 42.2032 43.769C41.8515 44.3674 41.944 44.6949 41.6239 45.3878C41.3658 45.9231 40.7989 46.5209 40.2084 46.5327C39.3984 46.5598 39.1542 45.8296 35.0495 41.8609C34.3574 41.1692 34.3677 40.3881 35.0622 39.6919L39.4552 35.3C40.7772 33.975 42.083 35.4871 42.0781 36.3134C42.0623 37.2104 41.2282 37.5592 38.4768 40.4499L40.2781 42.251C40.3256 42.0845 40.3014 41.916 40.3783 41.7485C41.1732 39.9866 43.3229 38.4785 45.6347 39.1195C47.0787 39.5174 48.6011 40.9426 48.9857 42.6231C49.7344 45.8233 46.5678 48.8946 43.7335 49.7638Z"
                                                    fill="black" />
                                                <path
                                                    d="M17.2971 58.5684C11.574 74.1452 11.3964 91.7554 18.0206 108.286C18.2416 107.986 18.5119 107.72 18.8787 107.563L40.5288 98.2304C40.5646 98.2145 40.6025 98.2198 40.6386 98.207C36.8517 88.1564 36.9264 77.5333 40.1989 68.0042C40.1642 67.9925 40.1284 67.9978 40.0939 67.9851L18.1828 59.2776C17.8073 59.1291 17.5271 58.8662 17.2971 58.5684ZM25.3238 77.5736C28.2818 77.5736 31.0561 78.5772 32.1889 81.2828C33.3044 83.9472 32.3081 87.3506 31.2298 87.8511C30.4154 88.2261 29.3886 87.908 29.1032 87.0189C28.8887 86.3704 29.3472 85.9366 29.5766 84.9327C29.9308 83.4225 29.5769 81.9132 28.0442 81.3019C27.1253 80.9389 26.1809 81.0083 25.6561 80.9775C25.906 81.0877 26.196 81.1503 26.4019 81.3125C29.0183 83.3629 27.5872 88.1373 23.1082 88.1373C20.2249 88.1373 18.2612 86.0172 18.2612 83.3118C18.2612 79.3463 21.2723 77.5736 25.3238 77.5736Z"
                                                    fill="black" />
                                                <path
                                                    d="M42.2478 102.219L20.5977 111.553C20.3175 111.674 20.0268 111.731 19.7382 111.731C19.6423 111.731 19.563 111.663 19.4684 111.651C26.9362 127.835 39.8724 139.816 55.145 146.351C55.0833 145.975 55.083 145.587 55.2333 145.208L63.9405 123.299C63.9556 123.261 63.9877 123.236 64.0047 123.2C54.8379 119.038 47.0635 111.803 42.3432 102.152C42.3077 102.17 42.2851 102.202 42.2478 102.219ZM44.51 115.243C49.0788 119.969 49.9687 120.299 49.9578 121.251C49.9412 122.171 48.622 123.536 47.3494 122.25L46.1144 121.02L41.1174 126.016C42.1586 126.313 43.6257 126.292 43.606 127.658C43.5921 128.619 42.7376 129.454 41.6133 129.133C38.6555 128.417 37.6914 128.427 36.7472 127.484C36.3929 127.129 36.2061 126.756 36.1912 126.368C36.1577 125.358 36.7333 125.415 43.5297 118.431C42.6578 117.466 41.0758 116.55 42.3964 115.231C42.7317 114.896 43.7946 114.537 44.51 115.243Z"
                                                    fill="black" />
                                                <path
                                                    d="M109.85 18.6562C109.91 19.0294 109.909 19.4153 109.76 19.7927L101.05 41.7014C101.036 41.7385 100.996 41.7523 100.979 41.7884C110.154 45.9502 117.931 53.1906 122.65 62.8459C122.686 62.8289 122.708 62.796 122.745 62.7812L144.395 53.4482C144.771 53.2839 145.159 53.2733 145.537 53.3242C138.049 37.1579 125.114 25.1906 109.85 18.6562ZM127.736 41.7714C127.596 41.3686 127.431 41.024 127.24 40.7314C125.934 38.702 124.063 38.3165 121.92 40.4579L121.662 40.7145C121.922 40.6148 122.182 40.4516 122.44 40.4219C124.79 40.132 127.14 42.5729 126.217 45.5273C125.23 48.7093 121.031 50.5377 118.085 47.5902C115.261 44.769 116.19 41.3701 119.021 38.5392C122.088 35.4747 125.734 34.8444 128.757 37.8692C129.546 38.6575 130.146 39.645 130.451 40.7378C131.037 42.2441 128.603 43.7289 127.736 41.7714Z"
                                                    fill="black" />
                                                <path
                                                    d="M24.8886 83.1128C24.8886 81.1482 22.0237 80.9562 21.279 82.2128C20.9775 82.7257 20.9718 83.489 21.279 84.0117C22.0536 85.3242 24.8886 85.0813 24.8886 83.1128Z"
                                                    fill="black" />
                                                <path
                                                    d="M120.086 42.9325C118.516 44.5006 120.115 46.4645 121.625 45.8975C122.254 45.6579 122.844 45.0372 123.057 44.4654C123.62 42.9262 121.677 41.343 120.086 42.9325Z"
                                                    fill="black" />
                                                <path
                                                    d="M111.551 144.398C111.707 144.759 111.723 145.132 111.681 145.497C127.856 138.02 139.827 125.082 146.359 109.808C146.236 109.829 146.133 109.915 146.006 109.915C145.215 109.915 146.225 110.107 123.295 101.056C123.265 101.043 123.246 101.017 123.217 101.004C119.076 110.187 111.822 117.944 102.154 122.66C102.17 122.694 102.201 122.715 102.216 122.749L111.551 144.398ZM119.121 119.186L119.634 119.705L122.446 116.892C123.231 116.108 124.098 115.914 124.893 116.708C125.697 117.511 125.605 118.203 127.285 127.1C127.488 128.104 127.26 128.776 126.669 129.366C125.903 130.134 125.02 130.038 124.235 129.254L119.116 124.136L118.781 124.471C117.461 125.79 116.238 124.389 116.273 123.571C116.283 123.221 116.468 122.87 116.824 122.514L117.16 122.179C116.794 121.745 116.046 121.304 116.024 120.402C116.007 119.236 117.657 117.724 119.121 119.186Z"
                                                    fill="black" />
                                                <path
                                                    d="M146.114 57.4368L124.464 66.7698C124.427 66.7857 124.388 66.7793 124.35 66.7931C128.118 76.8459 128.035 87.4701 124.797 96.996C124.831 97.0076 124.865 97.0013 124.899 97.0151C147.978 106.342 146.934 105.441 147.698 106.436C153.426 90.8517 153.603 73.2278 146.988 56.6895C146.766 56.999 146.491 57.2746 146.114 57.4368ZM146.492 85.8821C146.492 87.3948 145.251 87.9487 143.89 87.3948C142.871 86.9834 142.729 86.8127 133.515 81.8643C131.766 80.9396 132.107 78.4011 133.494 78.2463C134.395 78.1406 134.407 78.5125 143.523 83.4237C143.628 78.673 143.267 77.9816 143.909 77.306C144.573 76.6048 146.492 76.6545 146.492 78.4445V85.8821Z"
                                                    fill="black" />
                                                <path
                                                    d="M108.277 146.965C107.984 146.746 107.717 146.478 107.561 146.117L98.2258 124.469C98.2107 124.433 98.2162 124.397 98.203 124.361C88.1444 128.135 77.5242 128.058 68.0014 124.79C67.989 124.828 67.9959 124.866 67.981 124.904L59.2738 146.814C59.1232 147.191 58.8529 147.475 58.5516 147.706C74.1309 153.425 91.745 153.593 108.277 146.965ZM78.1462 142.656C78.1462 139.603 80.5093 137.926 82.8869 135.496C79.3955 135.406 78.4494 135.738 77.8279 135.12C77.5796 134.87 77.4521 134.507 77.4521 134.031C77.4521 133.098 77.9403 132.548 78.9569 132.548C85.4315 132.66 86.4374 132.265 87.0973 132.954C87.5782 133.459 87.5898 134.501 87.246 135.14C86.6087 136.302 82.8355 139.584 82.0317 141.034C81.0662 142.8 82.2 144.229 84.6336 143.607C85.5977 143.355 86.0516 142.858 86.7302 143.012C87.609 143.211 88.082 144.214 87.6809 145.08C86.7701 147.048 78.1462 148.37 78.1462 142.656Z"
                                                    fill="black" />
                                                <path
                                                    d="M56.7137 18.0292C57.0108 18.2487 57.2742 18.519 57.4319 18.8837L66.7672 40.5316C66.7839 40.5698 66.7778 40.6101 66.7922 40.6483C76.8542 36.8669 87.472 36.9401 96.9905 40.2041C97.0027 40.1691 96.9958 40.132 97.0099 40.097L105.719 18.1872C105.87 17.8098 106.134 17.5289 106.435 17.2988C90.8542 11.5786 73.2441 11.4069 56.7137 18.0292ZM85.6776 24.6919C85.3919 24.9187 85.0243 25.0502 84.6572 25.1795C86.4307 25.6309 87.2799 26.856 87.2799 28.5697C87.2799 32.9817 81.0686 33.4454 78.0632 31.892C76.0122 30.9958 77.1466 28.2857 79.0905 29.123C80.895 29.8792 83.8187 30.1701 83.8187 28.2124C83.8187 26.6083 81.96 26.9233 80.8518 26.8672C78.9923 26.8672 79.0732 24.9495 79.7037 24.3654C80.2486 23.8646 81.0889 24.0377 81.584 24.0007C82.5715 24.0007 83.4026 23.582 83.4026 22.6141C83.4026 20.8454 80.8074 21.0432 79.1901 21.8233C77.4548 22.4976 76.2854 20.0351 78.142 19.1338C80.1959 18.0797 82.893 18.0259 84.5698 18.7289C87.4744 19.9462 87.3876 23.3427 85.6776 24.6919Z"
                                                    fill="black" />
                                                <path
                                                    d="M123.428 119.824L121.591 121.662L124.303 124.374L123.428 119.824Z"
                                                    fill="black" />
                                                <path
                                                    d="M97.5113 49.7054C96.9574 49.4277 96.4035 50.0743 96.7268 50.5811C99.4038 54.7811 101.527 60.1833 102.912 66.4134C103.096 67.3378 103.927 68.0756 104.943 68.0756H115.005C115.467 68.0756 115.79 67.5679 115.605 67.1523C111.82 59.4444 105.404 53.2133 97.5113 49.7054Z"
                                                    fill="black" />
                                                <path
                                                    d="M89.0182 47.2118C88.9259 47.1195 88.7873 47.0729 88.6948 47.0273C87.264 46.7962 85.787 46.6118 84.3101 46.5195V63.6908C87.6358 64.7339 88.3396 67.6348 88.649 68.0753H96.8188C98.2035 68.0753 99.2191 66.7364 98.896 65.4442C96.7727 57.1819 93.2187 50.5807 89.0182 47.2118Z"
                                                    fill="black" />
                                                <path
                                                    d="M98.296 71.6777H90.449L90.4951 71.8155L95.8957 72.6C97.9727 72.9233 99.7269 74.2156 100.65 76.0156C100.604 75.1856 100.512 74.3544 100.419 73.5233C100.281 72.4622 99.3574 71.6777 98.296 71.6777Z"
                                                    fill="black" />
                                                <path
                                                    d="M95.4804 87.0931C96.1573 91.9553 96.9151 93.0588 96.2188 95.2632H98.2496C99.3116 95.2632 100.235 94.5254 100.373 93.4632C101.116 88.2639 101.171 82.6166 100.973 80.6309C100.331 82.8801 98.9064 83.4856 95.4804 87.0931Z"
                                                    fill="black" />
                                                <path
                                                    d="M67.4621 49.7065C59.569 53.2143 53.1531 59.3988 49.4145 67.1533C49.1834 67.5689 49.5064 68.0767 49.9684 68.0767H60.0307C60.9999 68.0767 61.8307 67.3389 62.0618 66.4145C63.4465 60.1843 65.5699 54.8299 68.2005 50.6287C68.5238 50.122 68.016 49.4754 67.4621 49.7065Z"
                                                    fill="black" />
                                                <path
                                                    d="M47.0603 73.2011C46.0908 76.4312 45.6294 79.8467 45.6294 83.3556C45.6294 86.9557 46.1369 90.4645 47.1525 93.7869C47.3833 94.6646 48.2606 95.2636 49.1834 95.2636H58.7382C60.0307 95.2636 60.954 94.1568 60.8154 92.9102C60.1227 87.1973 60.0489 80.7153 60.7693 74.0311C60.954 72.7389 59.9846 71.6777 58.7382 71.6777H49.0911C48.1681 71.6777 47.2911 72.3244 47.0603 73.2011Z"
                                                    fill="black" />
                                                <path
                                                    d="M60.0771 98.9102H50.0603C49.5989 98.9102 49.322 99.4179 49.5064 99.7868C53.2915 107.45 59.6615 113.543 67.4621 117.005C68.016 117.236 68.5238 116.589 68.2005 116.082C65.5699 111.927 63.4927 106.666 62.1079 100.572C61.8768 99.6035 61.0462 98.9102 60.0771 98.9102Z"
                                                    fill="black" />
                                                <path
                                                    d="M75.9555 119.497C76.0475 119.589 76.14 119.636 76.2783 119.681C77.7092 119.913 79.14 120.097 80.6634 120.189V100.988C80.6634 99.8345 79.7403 98.9102 78.5403 98.9102C74.8009 98.9102 72.0255 98.9102 68.2005 98.9102C66.8621 98.9102 65.8004 100.202 66.1238 101.541C68.293 109.666 71.8011 116.175 75.9555 119.497Z"
                                                    fill="black" />
                                                <path
                                                    d="M64.6004 93.4619C64.7388 94.5241 65.6618 95.2619 66.6777 95.2619H68.8008C68.1056 93.0613 68.8667 91.9229 69.5394 87.0918C66.4991 83.8922 64.6898 82.9985 64.0004 80.584C63.8017 82.5673 63.8531 88.2333 64.6004 93.4619Z"
                                                    fill="black" />
                                                <path
                                                    d="M74.4783 71.8155L74.5242 71.6777H66.6313C65.5699 71.6777 64.6929 72.4622 64.5543 73.5233C64.416 74.4 64.3235 75.2778 64.2774 76.2001C65.1543 74.2622 66.9546 72.9233 69.0777 72.6L74.4783 71.8155Z"
                                                    fill="black" />
                                                <path
                                                    d="M75.9555 47.2118C71.7086 50.5807 68.2005 57.1819 66.0774 65.4442C65.7082 66.7364 66.7696 68.0753 68.1546 68.0753H76.3244C76.6514 67.6155 77.2965 64.797 80.6634 63.7364V46.5195C79.14 46.6118 77.7092 46.7962 76.2783 47.0273C76.14 47.0729 76.0475 47.1195 75.9555 47.2118Z"
                                                    fill="black" />
                                                <path
                                                    d="M97.5113 117.005C105.312 113.543 111.682 107.45 115.467 99.7868C115.698 99.4179 115.374 98.9102 114.913 98.9102H104.897C103.927 98.9102 103.096 99.6035 102.866 100.572C101.481 106.666 99.3574 111.974 96.7268 116.127C96.4035 116.636 96.9574 117.281 97.5113 117.005Z"
                                                    fill="black" />
                                                <path
                                                    d="M115.882 71.6777H106.235C104.943 71.6777 104.02 72.7389 104.158 74.0311C104.924 80.2581 104.868 87.0457 104.158 92.9102C104.02 94.1568 104.943 95.2636 106.235 95.2636H115.79C116.713 95.2636 117.59 94.6646 117.867 93.7869C118.836 90.4645 119.39 86.9557 119.39 83.3556C119.39 79.8467 118.883 76.4312 117.96 73.2011C117.683 72.3244 116.852 71.6777 115.882 71.6777Z"
                                                    fill="black" />
                                                <path
                                                    d="M86.387 98.9102C85.2331 98.9102 84.3101 99.8345 84.3101 100.988V120.189C85.787 120.097 87.264 119.913 88.6948 119.681C88.7873 119.636 88.9259 119.589 89.0182 119.544C93.1724 116.175 96.6804 109.666 98.8035 101.541C99.173 100.202 98.1113 98.9102 96.7727 98.9102C95.8219 98.9102 85.9498 98.9102 86.387 98.9102Z"
                                                    fill="black" />
                                                <path
                                                    d="M100.973 76.8478C100.881 76.57 100.742 76.2934 100.65 76.0156C100.835 77.54 100.973 79.0634 100.973 80.6312C101.389 79.4312 101.389 78.139 100.973 76.8478Z"
                                                    fill="black" />
                                                <path
                                                    d="M80.9027 67.8886C80.6884 68.3254 77.3449 75.1428 77.5592 74.706C77.2987 75.2265 76.7776 75.6177 76.1697 75.6612L68.6579 76.7902C67.2249 76.964 66.617 78.7874 67.6593 79.8294L73.1301 85.1701C73.521 85.5613 73.7381 86.1687 73.608 86.7338L72.3051 94.2455C72.0881 95.7222 73.608 96.8077 74.954 96.1123C75.3898 95.8803 82.0765 92.3195 81.6408 92.5515C82.9515 91.9485 83.7852 92.8993 84.4632 93.16L90.1079 96.1123C91.4105 96.8077 92.8869 95.7222 92.6264 94.2455L91.4105 86.7338C91.2801 86.1687 91.454 85.5613 91.8881 85.1701L97.3157 79.8294C98.4012 78.7874 97.8367 76.964 96.3606 76.7902L88.8485 75.6612C88.2408 75.6177 87.7198 75.2265 87.4593 74.706C87.2451 74.2692 83.9016 67.4518 84.1158 67.8886C83.4644 66.5423 81.5538 66.5423 80.9027 67.8886Z"
                                                    fill="black" />
                                            </svg>

                                            <div class="btc_step_overlay"></div>
                                        </div>
                                    </div>
                                    <div class="hs_service_icon_cont_wrapper">
                                        <h2>Advanced Numerology</h2>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean .</p>
                                        <h5><a href="#">Read More <i class="fa fa-long-arrow-right"></i></a></h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 portfolio-wrapper III_column"
                                data-groups='["all", "website", "business"]'>
                                <div class="hs_service_main_box_wrapper">
                                    <div class="hs_service_icon_main_wrapper">
                                        <div class="hs_service_icon_wrapper">
                                            <!-- <i class="flaticon-pregnancy"></i> -->
                                            <svg width="40" height="40" viewBox="0 0 175 175" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M162.381 96.0128V106.147L149.972 110.923C148.399 117.535 145.777 123.849 142.214 129.636L147.615 141.796L133.283 156.128L121.127 150.728C115.34 154.293 109.023 156.915 102.41 158.488L97.6343 170.894H77.3664L72.5901 158.485C65.9784 156.911 59.6641 154.29 53.8771 150.727L41.7173 156.128L27.3855 141.796L32.7845 129.64C29.2195 123.853 26.599 117.535 25.0253 110.922L12.6191 106.147V96.0128H47.7439C47.7439 117.969 65.5437 135.769 87.5 135.769C109.456 135.769 127.256 117.969 127.256 96.0128H162.381ZM37.2969 35.2126C44.2278 35.2126 49.8463 40.8314 49.8463 47.7621C49.8463 54.693 44.2278 60.3115 37.2969 60.3115C30.3659 60.3115 24.7475 54.693 24.7475 47.7621C24.7475 40.8311 30.3659 35.2126 37.2969 35.2126ZM15.8771 85.8792H58.7163C60.5059 85.8792 61.8047 84.214 61.3683 82.478C58.6595 71.7053 48.9098 63.7291 37.2969 63.7291C25.6836 63.7291 15.9342 71.7053 13.2255 82.478C12.7887 84.214 14.0875 85.8792 15.8771 85.8792ZM77.7554 39.7886C76.5581 40.6971 74.8508 40.4626 73.9423 39.2653C73.0338 38.068 73.2683 36.3607 74.4656 35.4522L101.135 15.2018C101.944 14.5886 102.984 14.4963 103.855 14.8692L103.859 14.86L128.916 25.6348L146.563 9.58062L143.677 9.59121C142.173 9.59121 140.953 8.37168 140.953 6.86743C140.953 5.36318 142.173 4.14365 143.677 4.14365L153.641 4.10742C155.363 4.10742 156.64 5.67969 156.315 7.35312L154.39 17.1295C154.1 18.6102 152.666 19.5761 151.185 19.287C149.705 18.9978 148.739 17.5633 149.028 16.0826L149.357 14.4187L131.384 30.7696C130.617 31.5373 129.43 31.8029 128.372 31.3483L103.153 20.5041L77.7554 39.7886ZM98.5701 40.7316H106.99C108.12 40.7316 109.041 41.6528 109.041 42.7824V83.8285C109.041 84.9581 108.12 85.8792 106.99 85.8792H98.5701C97.4405 85.8792 96.5193 84.9581 96.5193 83.8285V42.7824C96.5197 41.6531 97.4408 40.7316 98.5701 40.7316ZM71.9007 61.8574H80.3206C81.4502 61.8574 82.3713 62.7786 82.3713 63.9082V83.8285C82.3713 84.9581 81.4502 85.8792 80.3206 85.8792H71.9007C70.7711 85.8792 69.8499 84.9581 69.8499 83.8285V63.9082C69.8499 62.7786 70.7711 61.8574 71.9007 61.8574ZM151.91 24.3066C150.78 24.3066 149.859 25.2277 149.859 26.3574V83.8285C149.859 84.9581 150.78 85.8792 151.91 85.8792H160.33C161.46 85.8792 162.381 84.9581 162.381 83.8285V26.3574C162.381 25.2277 161.46 24.3066 160.33 24.3066H151.91ZM125.24 49.2714H133.66C134.79 49.2714 135.711 50.1926 135.711 51.3222V83.8288C135.711 84.9584 134.79 85.8796 133.66 85.8796C130.854 85.8796 128.047 85.8796 125.24 85.8796C124.111 85.8796 123.189 84.9584 123.189 83.8288C123.189 72.3342 123.189 62.8172 123.189 51.3222C123.189 50.1926 124.111 49.2714 125.24 49.2714ZM53.2126 96.0128C53.2126 114.95 68.5631 130.3 87.5 130.3C106.437 130.3 121.787 114.95 121.787 96.0128H53.2126Z"
                                                    fill="black" />
                                            </svg>

                                            <div class="btc_step_overlay"></div>
                                        </div>
                                    </div>
                                    <div class="hs_service_icon_cont_wrapper">
                                        <h2>Business Numerology</h2>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean .</p>
                                        <h5><a href="#">Read More <i class="fa fa-long-arrow-right"></i></a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.portfolio-area-->
        </div>
    </div>
</div>
<!-- hs service wrapper End -->

<!-- hs latest news wrapper Start -->
<div class="hs_latest_news_main_wrapper white-overlay-section">
    <!-- <div class="hs_news_slider_bg_overlay"></div> -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="hs_about_heading_main_wrapper">
                    <div class="hs_about_heading_wrapper">
                        <h2>Latest <span> News</span></h2>
                        <h4><span></span></h4>
                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum<br>
                            auctor, nisi elit consequat hello Aenean world.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="hs_lest_news_box_wrapper">
                    <div class="hs_lest_news_img_wrapper">
                        <img src="{{url('frontend/assests/images/content/news_img1.jpg')}}" alt="blog_img">
                        <div class="hs_lest_news_date_wrapper">
                            <ul>
                                <li>25</li>
                                <li>DEC</li>
                            </ul>
                        </div>
                    </div>
                    <div class="hs_lest_news_cont_wrapper">
                        <h5>Proin gravida nibh vel velit auctor aliquet.</h5>
                        <p>Lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.
                            Duis sed odio sit amet.</p>
                       
                    </div>
                   
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="hs_lest_news_box_wrapper">
                    <div class="hs_lest_news_img_wrapper">
                        <img src="{{url('frontend/assests/images/content/news_img2.jpg')}}" alt="blog_img">
                        <div class="hs_lest_news_date_wrapper">
                            <ul>
                                <li>25</li>
                                <li>DEC</li>
                            </ul>
                        </div>
                    </div>
                    <div class="hs_lest_news_cont_wrapper">
                        <h5>Proin gravida nibh vel velit auctor aliquet.</h5>
                        <p>Lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.
                            Duis sed odio sit amet.</p>
                       
                    </div>
                   
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="hs_lest_news_box_wrapper">
                    <div class="hs_lest_news_img_wrapper">
                        <img src="{{url('frontend/assests/images/content/news_img3.jpg')}}" alt="blog_img">
                        <div class="hs_lest_news_date_wrapper">
                            <ul>
                                <li>25</li>
                                <li>DEC</li>
                            </ul>
                        </div>
                    </div>
                    <div class="hs_lest_news_cont_wrapper">
                        <h5>Proin gravida nibh vel velit auctor aliquet.</h5>
                        <p>Lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.
                            Duis sed odio sit amet.</p>
                  
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
<!-- hs latest news wrapper End -->
<!-- hs Counter wrapper Start -->
<div class="hs_counter_main_wrapper counter_2  white-overlay-section">
    <div class="white-overlay"></div>

    <div class="hs_counter_cont_wrapper hs_counter_cont_wrapper1">
        <div class="count-description">
            <div class="hs_main_cycle_main">
                <span class="timer">25</span>
            </div>
            <h5 class="con1">Trusted by<br> Million Clients</h5>
        </div>
    </div>
    <div class="hs_counter_cont_wrapper">
        <div class="count-description">
            <div class="hs_main_cycle_main">
                <span class="timer">73</span>
            </div>
            <h5 class="con2">Years of<br> Experience
            </h5>
        </div>
    </div>
    <div class="hs_counter_cont_wrapper">
        <div class="count-description">
            <div class="hs_main_cycle_main">
                <span class="timer">45</span>
            </div>
            <h5 class="con3">Types of <br> Horoscopes
            </h5>
        </div>
    </div>
    <div class="hs_counter_cont_wrapper">
        <div class="count-description">
            <div class="hs_main_cycle_main">
                <span class="timer">99</span>
            </div>
            <h5 class="con4">Qualified <br> Astrologers
            </h5>
        </div>
    </div>
    <div class="hs_counter_cont_wrapper hs_counter_cont_wrapper5">
        <div class="count-description">
            <div class="hs_main_cycle_main">
                <span class="timer">89</span>
            </div>
            <h5 class="con4">Sucess<br> Horoscope
            </h5>
        </div>
    </div>
</div>
<!-- hs Counter wrapper End -->
<!-- hs testi slider wrapper Start -->
<div class="hs_testi_slider_main_wrapper  white-overlay-section">
    <div class="white-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="hs_about_heading_main_wrapper">
                    <div class="hs_about_heading_wrapper">
                        <h2>What clients <span> are saying</span></h2>
                        <h4><span></span></h4>
                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum<br>
                            auctor, nisi elit consequat hello Aenean world.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="hs_testi_slider_wrapper">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="hs_testi_cont_main_wrapper">
                                        <div class="hs_testi_cont_inner_wrapper">
                                            <div class="hs_testi_quote_wrapper">
                                                <i class="fa fa-quote-left"></i>
                                            </div>
                                            <div class="hs_testi_quote_cont_wrapper">
                                                <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit
                                                    consequat ipsum, nec sagittis sem nibh id elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hs_testi_client_main_wrapper">
                                        <div class="hs_testi_client_cont_sec">
                                            <h2>Joan doe</h2>
                                            <p>Designer</p>
                                        </div>
                                        <div class="hs_testi_client_cont_img_sec">
                                            <img src="{{url('frontend/assests/images/content/testi_client_img1.jpg')}}" alt="testi_img" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 hidden-xs">
                                    <div class="hs_testi_cont_main_wrapper hs_testi_cont_main_right_wrapper">
                                        <div class="hs_testi_cont_inner_wrapper">
                                            <div class="hs_testi_quote_wrapper">
                                                <i class="fa fa-quote-left"></i>
                                            </div>
                                            <div class="hs_testi_quote_cont_wrapper">
                                                <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit
                                                    consequat ipsum, nec sagittis sem nibh id elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hs_testi_client_main_wrapper hs_testi_client_main_right_wrapper">
                                        <div class="hs_testi_client_cont_img_sec">
                                            <img src="{{url('frontend/assests/images/content/testi_client_img2.jpg')}}" alt="testi_img" />
                                        </div>
                                        <div class="hs_testi_client_cont_sec">
                                            <h2>Joan doe</h2>
                                            <p>Designer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 hidden-xs">
                                    <div class="hs_testi_cont_main_wrapper">
                                        <div class="hs_testi_cont_inner_wrapper">
                                            <div class="hs_testi_quote_wrapper">
                                                <i class="fa fa-quote-left"></i>
                                            </div>
                                            <div class="hs_testi_quote_cont_wrapper">
                                                <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit
                                                    consequat ipsum, nec sagittis sem nibh id elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hs_testi_client_main_wrapper">
                                        <div class="hs_testi_client_cont_sec">
                                            <h2>Joan doe</h2>
                                            <p>Designer</p>
                                        </div>
                                        <div class="hs_testi_client_cont_img_sec">
                                            <img src="{{url('frontend/assests/images/content/testi_client_img3.jpg')}}" alt="testi_img" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="hs_testi_cont_main_wrapper hs_testi_cont_main_right_wrapper">
                                        <div class="hs_testi_cont_inner_wrapper">
                                            <div class="hs_testi_quote_wrapper">
                                                <i class="fa fa-quote-left"></i>
                                            </div>
                                            <div class="hs_testi_quote_cont_wrapper">
                                                <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit
                                                    consequat ipsum, nec sagittis sem nibh id elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hs_testi_client_main_wrapper hs_testi_client_main_right_wrapper">
                                        <div class="hs_testi_client_cont_img_sec">
                                            <img src="{{url('frontend/assests/images/content/testi_client_img4.jpg')}}" alt="testi_img" />
                                        </div>
                                        <div class="hs_testi_client_cont_sec">
                                            <h2>Joan doe</h2>
                                            <p>Designer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12  hidden-xs">
                                    <div class="hs_testi_cont_main_wrapper">
                                        <div class="hs_testi_cont_inner_wrapper">
                                            <div class="hs_testi_quote_wrapper">
                                                <i class="fa fa-quote-left"></i>
                                            </div>
                                            <div class="hs_testi_quote_cont_wrapper">
                                                <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit
                                                    consequat ipsum, nec sagittis sem nibh id elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hs_testi_client_main_wrapper">
                                        <div class="hs_testi_client_cont_sec">
                                            <h2>Joan doe</h2>
                                            <p>Designer</p>
                                        </div>
                                        <div class="hs_testi_client_cont_img_sec">
                                            <img src="{{url('frontend/assests/images/content/testi_client_img5.jpg')}}" alt="testi_img" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="hs_testi_cont_main_wrapper hs_testi_cont_main_right_wrapper">
                                        <div class="hs_testi_cont_inner_wrapper">
                                            <div class="hs_testi_quote_wrapper">
                                                <i class="fa fa-quote-left"></i>
                                            </div>
                                            <div class="hs_testi_quote_cont_wrapper">
                                                <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit
                                                    consequat ipsum, nec sagittis sem nibh id elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hs_testi_client_main_wrapper hs_testi_client_main_right_wrapper">
                                        <div class="hs_testi_client_cont_img_sec">
                                            <img src="{{url('frontend/assests/images/content/testi_client_img6.jpg')}}" alt="testi_img" />
                                        </div>
                                        <div class="hs_testi_client_cont_sec">
                                            <h2>Joan doe</h2>
                                            <p>Designer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- hs testi slider wrapper End -->

@endsection('content')