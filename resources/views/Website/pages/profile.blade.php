@extends('Website.layouts.app')
@section('content')
<div id="about" class="hs_about_indx_main_wrapper white-overlay-section  profile-sec">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="text-center left-part">
                    <img src="{{url('frontend/assests/images/header/avtar-img.png')}}" alt="Logo" class="profile-img">
                    <h2 class="user-name mt-3">
                        UserName
                    </h2>
                    <button class="logout-btn px-4 py-2 border-0 rounded mt-5" type=button>
                        Logout
                    </button>
                </div>
            </div>
            <div class="col-9">
                <ul class="tabs justify-content-start">
                    <li data-tab-target="#home" class="active tab">
                        Profile Detail</li>
                    <li data-tab-target="#pricing" class="tab">
                        History</li>
                    <li data-tab-target="#news" class="tab">
                        Change Passowrd</li>
                </ul>
                <div class="tab-content m-0 mt-4">
                    <div id="home" data-tab-content class="active">
                        <div>
                            <h3 class="mb-4 fw-bold">
                                Personal Details
                            </h3>
                            <div class="profile-detail-sec mt-3">
                                <div class="row g-3">
                                    <div class="col-4">
                                        <label for="exampleFormControlInput1" class="form-label">
                                            First Name
                                        </label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tanisha" value="Tanisha">
                                    </div>

                                    <div class="col-4">
                                        <label for="exampleFormControlInput1" class="form-label">
                                            Middle Name
                                        </label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tanisha" value="Tanisha">
                                    </div>
                                    <div class="col-4">
                                        <label for="exampleFormControlInput1" class="form-label">
                                            Last Name
                                        </label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tanisha" value="Tanisha">
                                    </div>
                                    <div class="col-6">
                                        <label for="exampleFormControlInput1" class="form-label">
                                            Email
                                        </label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Tanisha" value="Tanisha">
                                    </div>
                                    <div class="col-6">
                                        <label for="exampleFormControlInput1" class="form-label">
                                            Phone Number
                                        </label>
                                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Tanisha" value="Tanisha">
                                    </div>
                                    <div class="col-6">
                                        <label for="exampleFormControlInput1" class="form-label">
                                            Date of Birth
                                        </label>
                                        <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Tanisha" value="Tanisha">
                                    </div>
                                </div>
                                <button type='button' class="logout-btn px-4 py-2 border-0 rounded mt-5">
                                    Update
                                </button>
                            </div>
                        </div>
                    </div>
                    <div id="pricing" data-tab-content>
                        <div>
                            <h3 class="mb-4 fw-bold">
                                History
                            </h3>
                            <div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">S.No</th>
                                            <th scope="col">Numerology</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Gaurav</td>
                                            <td>paid</td>
                                            <td><a href="#" class="text-dark"> download</a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Gaurav</td>
                                            <td>paid</td>
                                            <td><a href="#" class="text-dark"> download</a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Gaurav</td>
                                            <td>paid</td>
                                            <td><a href="#" class="text-dark"> download</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div id="news" data-tab-content>
                        <div>
                            <div >
                                <h3 class="mb-4 fw-bold">
                                    Change Password
                                </h3>
                                <div class="row">
                                    <div class="col-6">
                                        <div>
                                            <label for="exampleFormControlInput1" class="form-label">
                                                old password
                                            </label>
                                            <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div>
                                            <label for="exampleFormControlInput1" class="form-label">New Password</label>
                                            <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div>
                                            <label for="exampleFormControlInput1" class="form-label"> Confirm New Password</label>
                                            <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                        </div>
                                    </div>
                                </div>
                                <button type='button' class="logout-btn px-4 py-2 border-0 rounded mt-5">
                                  Save
                                </button>
                            </div>
                        </div>
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