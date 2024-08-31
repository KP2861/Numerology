@extends("Website.layouts.app")
@section('content')
  
  <!-- hs About Title Start -->
  <div class="hs_indx_title_main_wrapper">
    <div class="hs_title_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 full_width">
                <div class="hs_indx_title_left_wrapper">
                    <h2>Contact Us</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- hs About Title End -->

<!-- hs contact form Start -->
<div class="hs_contact_indx_form_main_wrapper white-overlay-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="hs_about_heading_main_wrapper">
                    <div class="hs_about_heading_wrapper">
                        <h2>Send <span>A Message</span></h2>
                        <h4><span></span></h4>
                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum<br> auctor, nisi elit consequat hello Aenean world.</p>
                    </div>
                </div>
            </div>
            <form>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="hs_kd_six_sec_input_wrapper">
                        <label>Name</label>
                        <input type="text" class="require" name="first_name">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="hs_kd_six_sec_input_wrapper">
                        <label>Email</label>
                       <input type="email" class="require" name="email" data-valid="email" data-error="Email should be valid.">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="hs_kd_six_sec_input_wrapper">
                        <label>Message</label>
                       <textarea rows="6" class="require" name="message"></textarea>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="response"></div>
                    <div class="hs_contact_indx_form_btn">
                        <ul>
                            <li>
                                <input type="hidden" name="form_type" value="contact">
                                <button type="button" class="hs_btn_hover submitForm">Contact Us</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- hs contact form End -->

@endsection('content')