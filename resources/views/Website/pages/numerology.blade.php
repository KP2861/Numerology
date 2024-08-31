@extends('Website.layouts.app')
@section('content')
    <!-- hs Navigation End -->
    <!-- hs About Title Start -->
    <div class="hs_indx_title_main_wrapper py-3">
        <div class="hs_title_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 full_width">
                    <div class="hs_indx_title_left_wrapper text-center">
                        <h2>Numerology</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hs About Title End -->
    <!-- hs sidebar Start -->
    <div class="hs_kd_sidebar_main_wrapper hs_num_sidebar_main_wrapper">
        <div class="container">
            <div class="row py-5 gy-5">
                <div class="col-12">
                    <ul class="tabs">
                        <li data-tab-target="#home" class="active tab"
                            onclick="document.getElementById('name').src='./images/content/numerology/name-numerology.png'">
                            Name
                            Numerology</li>
                        <li data-tab-target="#pricing" class="tab"
                            onclick="document.getElementById('name').src='./images/content/numerology/advance-numerology.png'">
                            Advance
                            Numerology</li>
                        <li data-tab-target="#about" class="tab"
                            onclick="document.getElementById('name').src='./images/content/numerology/number-numerology.png'">
                            phone
                            numerology</li>
                        <li data-tab-target="#news" class="tab"
                            onclick="document.getElementById('name').src='./images/content/numerology/business-numerology.png'">
                            Business
                            numerology</li>
                    </ul>
                </div>
                <div class="col-4">
                    <div class="numerology-img">
                        <img id="name" src="./images/content/numerology/name-numerology.png" class="img-fluid">
                    </div>

                </div>
                <div class="col-8">

                    <div class="tab-content m-0">
                        <div id="home" data-tab-content class="active">
                            <div>
                                <h2>
                                    Name Numerology
                                </h2>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Eligendi, nobis dolores. Voluptatibus explicabo
                                    exercitationem
                                    laudantium blanditiis voluptates molestias vel maxime
                                    temporibus
                                    dicta! Fugit officia, excepturi exercitationem cupiditate
                                    sed
                                    unde maiores.</p>
                            </div>
                            <form>
                                <div class="tabs-content">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="exampleInputEmail1" class="form-label">First
                                                Name</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp">

                                        </div>
                                        <div class="col-6">
                                            <label for="exampleInputPassword1" class="form-label">Last
                                                Name</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1">
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                                </div>
                            </form>
                        </div>
                        <div id="pricing" data-tab-content>
                            <div>
                                <h2>
                                    Advance Numerology
                                </h2>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Eligendi, nobis dolores. Voluptatibus explicabo
                                    exercitationem
                                    laudantium blanditiis voluptates molestias vel maxime
                                    temporibus
                                    dicta! Fugit officia, excepturi exercitationem cupiditate
                                    sed
                                    unde maiores.</p>
                            </div>
                            <form>
                                <div class="tabs-content">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="exampleInputEmail1" class="form-label">Name</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp">
                                        </div>
                                        <div class="col-6">
                                            <label for="exampleInputPassword1" class="form-label">Phone
                                                Number</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1">
                                        </div>
                                        <div class="col-6">
                                            <label for="exampleInputPassword1" class="form-label">Address</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                                </div>
                            </form>
                        </div>
                        <div id="about" data-tab-content>
                            <div>
                                <h2>
                                    Phone Numerology
                                </h2>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Eligendi, nobis dolores. Voluptatibus explicabo
                                    exercitationem
                                    laudantium blanditiis voluptates molestias vel maxime
                                    temporibus
                                    dicta! Fugit officia, excepturi exercitationem cupiditate
                                    sed
                                    unde maiores.</p>
                            </div>
                            <form>
                                <div class="tabs-content">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="exampleInputEmail1" class="form-label">Name</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp">
                                        </div>
                                        <div class="col-6">
                                            <label for="exampleInputPassword1" class="form-label">Phone
                                                Number</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1">
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        <div id="news" data-tab-content>
                            <div>
                                <h2>
                                    Business Numerology
                                </h2>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Eligendi, nobis dolores. Voluptatibus explicabo
                                    exercitationem
                                    laudantium blanditiis voluptates molestias vel maxime
                                    temporibus
                                    dicta! Fugit officia, excepturi exercitationem cupiditate
                                    sed
                                    unde maiores.</p>
                            </div>
                            <form>
                                <div class="tabs-content">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="exampleInputEmail1" class="form-label">Name</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp">
                                        </div>
                                        <div class="col-6">
                                            <label for="exampleInputPassword1" class="form-label">Phone
                                                Number</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1">
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>


    <script>
        const tabs = document.querySelectorAll('[data-tab-target]')
        const tabContents = document.querySelectorAll('[data-tab-content]')

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                const target = document.querySelector(tab.dataset.tabTarget)
                tabContents.forEach(tabContent => {
                    tabContent.classList.remove('active')
                })
                tabs.forEach(tab => {
                    tab.classList.remove('active')
                })
                tab.classList.add('active')
                target.classList.add('active')
            })
        })
    </script>
@endsection('content')
