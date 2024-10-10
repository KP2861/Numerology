@extends('Website.layouts.app')
@section('content')
    <div id="about" class="hs_about_indx_main_wrapper white-overlay-section  profile-sec">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="text-center left-part">
                        <img src="{{ asset('frontend/assests/images/user_profile/avatar.png') }}" alt="Logo"
                            class="profile-img">
                        <h2 class="user-name mt-3">
                            {{ Auth::user()->name }}
                        </h2>
                        <button class="logout-btn px-4 py-2 border-0 rounded mt-5" type="button" onclick="confirmLogout()">
                            Logout
                        </button>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
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
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div id="home" data-tab-content class="active">
                            <div>
                                <h3 class="mb-4 fw-bold">
                                    Personal Details
                                </h3>
                                <div class="profile-detail-sec mt-3">

                                    <form action="{{ route('user.profile.update') }}" method="POST"
                                        enctype="multipart/form-data" id="profileForm" novalidate>
                                        @csrf
                                        <div class="container">
                                            <div class="row g-3">
                                                <!-- First Row: First Name, Middle Name, Last Name -->
                                                <div class="col-md-3">
                                                    <label for="name" class="form-label">First Name</label>
                                                    <input type="text" class="form-control" id="name" name="name"
                                                        placeholder="First Name"
                                                        value="{{ old('name', Auth::user()->name) }}" required
                                                        pattern="[A-Za-z\s]+" title="Please enter letters only."
                                                        oninput="capitalizeFirstLetter(this)">
                                                    <div class="invalid-feedback">Please enter a valid first name (letters
                                                        only).</div>
                                                </div>

                                                <div class="col-md-3">
                                                    <label for="middle_name" class="form-label">Middle Name</label>
                                                    <input type="text" class="form-control" id="middle_name"
                                                        name="middle_name" placeholder="Middle Name"
                                                        value="{{ old('middle_name', Auth::user()->middle_name) }}"
                                                        pattern="[A-Za-z\s]*" title="Please enter letters only.">
                                                    <div class="invalid-feedback">Please enter a valid middle name (letters
                                                        only).</div>
                                                </div>

                                                <div class="col-md-3">
                                                    <label for="last_name" class="form-label">Last Name</label>
                                                    <input type="text" class="form-control" id="last_name"
                                                        name="last_name" placeholder="Last Name"
                                                        value="{{ old('last_name', Auth::user()->last_name) }}" required
                                                        pattern="[A-Za-z\s]+" title="Please enter letters only."
                                                        oninput="capitalizeFirstLetter(this)">
                                                    <div class="invalid-feedback">Please enter a valid last name (letters
                                                        only).</div>
                                                </div>
                                            </div>

                                            <div class="row g-3 mt-3">
                                                <!-- Second Row: Email, Phone Number -->
                                                <div class="col-md-4">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="email" class="form-control" id="email" name="email"
                                                        placeholder="Email" value="{{ old('email', Auth::user()->email) }}"
                                                        required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                                                        title="Please enter a valid email address.">
                                                    <div class="invalid-feedback">Please enter a valid email address (e.g.,
                                                        example@domain.com).</div>
                                                </div>

                                                <div class="col-md-5">
                                                    <label for="phone_number" class="form-label">Phone Number</label>
                                                    <input type="tel" class="form-control" id="phone_number"
                                                        name="phone_number" placeholder="Phone Number"
                                                        value="{{ old('phone_number', Auth::user()->phone_number) }}"
                                                        required pattern="\d{10}"
                                                        title="Phone number must be exactly 10 digits" maxlength="10"
                                                        minlength="10">
                                                    <div class="invalid-feedback">Phone number must be exactly 10 digits.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row g-3 mt-3">
                                                <!-- Third Row: Date of Birth -->
                                                <div class="col-md-4">
                                                    <label for="dob" class="form-label">Date of Birth</label>
                                                    <input type="date" class="form-control" id="dob"
                                                        name="dob" placeholder="Date of Birth"
                                                        value="{{ old('dob', Auth::user()->dob) }}" required>
                                                    <div class="invalid-feedback">Please enter a valid date of birth.</div>
                                                </div>
                                            </div>

                                            <button type="submit"
                                                class="logout-btn px-4 py-2 border-0 rounded mt-5">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                        <div id="pricing" data-tab-content>
                            <div>
                                <h3 class="mb-4 fw-bold">
                                    History
                                </h3>
                                <div id="historyTableContainer">
                                    <!-- The table will be injected here -->
                                </div>
                                <div id="paginationContainer" class="mt-4">
                                    <!-- Pagination buttons will be injected here -->
                                </div>
                            </div>
                        </div>


                        <div id="news" data-tab-content>
                            <div>
                                <h3 class="mb-4 fw-bold">Change Password</h3>

                                <!-- Form starts here -->
                                <form id="changePasswordForm" method="POST" action="{{ route('password.change') }}">
                                    @csrf
                                    <div class="row gy-3">
                                        <div class="col-6 position-relative">
                                            <div class="input-group">
                                                <label for="current_password" class="form-label">Old Password</label>
                                                <input type="password" class="form-control" id="current_password"
                                                    name="current_password" placeholder="Current Password" required
                                                    style="padding-right: 2.5rem;">
                                                <span class="input-group-text" id="toggleOldPassword"
                                                    style="position: absolute; right: 0; top: 50%; border-left: 0; background-color: transparent; cursor: pointer; z-index: 10;">
                                                    <i class="fas fa-eye" id="eyeIconOld"></i>
                                                </span>
                                            </div>
                                            <small id="passwordErrorOld" class="form-text text-danger"
                                                style="margin-top: 0.5rem;"></small>
                                        </div>
                                        <div class="col-6 position-relative">
                                            <div class="input-group">
                                                <label for="new_password" class="form-label">New Password</label>
                                                <input type="password" class="form-control" id="new_password"
                                                    name="new_password" placeholder="New Password" required
                                                    minlength="8" style="padding-right: 2.5rem;">
                                                <span class="input-group-text" id="toggleNewPassword"
                                                    style="position: absolute; right: 0; top: 50%; border-left: 0; background-color: transparent; cursor: pointer; z-index: 10;">
                                                    <i class="fas fa-eye" id="eyeIconNew"></i>
                                                </span>
                                            </div>
                                            <small id="passwordStrength" class="form-text text-danger"
                                                style="margin-top: 0.5rem;"></small>
                                        </div>
                                        <div class="col-6 position-relative">
                                            <div class="input-group">
                                                <label for="new_password_confirmation" class="form-label">Confirm New
                                                    Password</label>
                                                <input type="password" class="form-control"
                                                    id="new_password_confirmation" name="new_password_confirmation"
                                                    placeholder="Confirm New Password" required
                                                    style="padding-right: 2.5rem;">
                                                <span class="input-group-text" id="toggleConfirmPassword"
                                                    style="position: absolute; right: 0; top: 50%; border-left: 0; background-color: transparent; cursor: pointer; z-index: 10;">
                                                    <i class="fas fa-eye" id="eyeIconConfirm"></i>
                                                </span>
                                            </div>
                                            <small id="passwordConfirmationError" class="form-text text-danger"
                                                style="margin-top: 0.5rem;"></small>
                                        </div>
                                    </div>
                                    <button type="submit"
                                        class="logout-btn px-4 py-2 border-0 rounded mt-5">Save</button>
                                </form>




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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function capitalizeFirstLetter(input) {
            let words = input.value.split(' ');
            for (let i = 0; i < words.length; i++) {
                if (words[i].length > 0) {
                    words[i] = words[i][0].toUpperCase() + words[i].substr(1).toLowerCase();
                }
            }
            input.value = words.join(' ');
        }
    </script>
    <script>
        $(document).ready(function() {
            const $newPasswordField = $('#new_password');
            const $newPasswordConfirmationField = $('#new_password_confirmation');
            const $currentPasswordField = $('#current_password');
            const $passwordStrengthMessage = $('#passwordStrength');
            const $passwordConfirmationError = $('#passwordConfirmationError');
            const $eyeIconNew = $('#eyeIconNew');
            const $eyeIconConfirm = $('#eyeIconConfirm');
            const $eyeIconOld = $('#eyeIconOld');

            // Validate password strength
            function validatePassword(password) {
                const minLength = /.{8,}/;
                const uppercase = /[A-Z]/;
                const number = /[0-9]/;
                const specialChar = /[@$!%*?&]/;

                let messages = [];

                if (!minLength.test(password)) messages.push('At least 8 characters.');
                if (!uppercase.test(password)) messages.push('One uppercase letter.');
                if (!number.test(password)) messages.push('One number.');
                if (!specialChar.test(password)) messages.push('One special character.');

                return messages;
            }

            // Show password strength feedback
            function showPasswordStrength() {
                const password = $newPasswordField.val();
                const strengthMessages = validatePassword(password);

                if (strengthMessages.length > 0) {
                    $passwordStrengthMessage.text('Password must contain: ' + strengthMessages.join(', '));
                } else {
                    $passwordStrengthMessage.text('');
                }
            }

            // Validate if passwords match
            function validatePasswordConfirmation() {
                if ($newPasswordField.val() !== $newPasswordConfirmationField.val()) {
                    $passwordConfirmationError.text('Passwords do not match.');
                } else {
                    $passwordConfirmationError.text('');
                }
            }

            // Toggle password visibility
            function togglePasswordVisibility(field, icon) {
                const isPasswordVisible = field.attr('type') === 'text';
                field.attr('type', isPasswordVisible ? 'password' : 'text');
                icon.toggleClass('fa-eye', isPasswordVisible);
                icon.toggleClass('fa-eye-slash', !isPasswordVisible);
            }

            // Event listeners for real-time validation
            $newPasswordField.on('input', function() {
                showPasswordStrength();
                validatePasswordConfirmation();
            });

            $newPasswordConfirmationField.on('input', validatePasswordConfirmation);

            // Event listeners for toggling password visibility
            $('#toggleNewPassword').on('click', function() {
                togglePasswordVisibility($newPasswordField, $eyeIconNew);
            });

            $('#toggleConfirmPassword').on('click', function() {
                togglePasswordVisibility($newPasswordConfirmationField, $eyeIconConfirm);
            });

            $('#toggleOldPassword').on('click', function() {
                togglePasswordVisibility($currentPasswordField, $eyeIconOld);
            });
        });
    </script>


    {{-- <script>
        $(document).ready(function() {
            let currentPage = 1;
            const perPage = 10;


            function fetchHistory(page) {
                $.ajax({
                    url: '{{ route('numerologyHistory') }}',
                    method: 'GET',
                    data: {
                        page: page,
                        perPage: perPage
                    },
                    success: function(data) {
                        console.log(data);
                        if (data.error) {
                            alert(data.error);
                        } else {
                            let tableHtml = `
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Numerology</th>
                                <th scope="col">Status</th>
                                <th scope="col">Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        `;

                            $.each(data.data, function(index, item) {
                                let createdAt = new Date(item.created_at);
                                let expirationDate = new Date(createdAt);
                                expirationDate.setDate(expirationDate.getDate() + 7);
                                let isExpired = new Date() > expirationDate;

                                let daysLeft = Math.ceil((expirationDate - new Date()) / (1000 *
                                    60 * 60 * 24));
                                let daysLeftText = isExpired ? '' :
                                    `<span class="text-danger small">(Expires in ${daysLeft} days)</span>`;

                                let type = '';
                                switch (item.numerology_type) {
                                    case 1:
                                        type = 'nameNumerology';
                                        break;
                                    case 2:
                                        type = 'bussinessNumerology';
                                        break;
                                    case 3:
                                        type = 'phoneNumerology';
                                        break;
                                    case 4:
                                        type = 'advanceNumerology';
                                        break;
                                }
                                let downloadUrl = isExpired ? 'Expired' :
                                    `{{ asset('storage/uploads/${type}/${item.first_name}-${item.id}.pdf') }}`;

                                let formattedDate = createdAt.toLocaleDateString('en-GB', {
                                    day: '2-digit',
                                    month: 'short',
                                    year: 'numeric'
                                });

                                tableHtml += `
                        <tr>
                       <th scope="row"># </th>
                         <td>
                                        ${item.first_name}
                                        <small>[${item.numerology_type_name}]</small>
                                        ${daysLeftText}
                                    </td>

                            <td>${item.payment_status}</td>
                            <td>${formattedDate}</td>
                            <td>
                                ${isExpired ? `<span class="text-danger">Expired</span>` : `<a href="${downloadUrl}" class="text-dark">Download</a>`}
                            </td>
                        </tr>
                        `;
                            });

                            tableHtml += `
                        </tbody>
                    </table>`;

                            // Update the table container
                            $('#historyTableContainer').html(tableHtml);

                            // Update pagination controls
                            let paginationHtml = '';
                            for (let i = 1; i <= data.last_page; i++) {
                                paginationHtml +=
                                    `<button class="pagination-btn" data-page="${i}">${i}</button>`;
                            }
                            $('#paginationContainer').html(paginationHtml);
                        }
                    },
                    error: function(xhr) {
                        console.error('Error fetching data:', xhr);
                        alert('An error occurred while fetching the data.');
                    }
                });
            }

            // Initial load
            fetchHistory(currentPage);

            // Handle pagination button clicks
            $(document).on('click', '.pagination-btn', function() {
                currentPage = $(this).data('page');
                fetchHistory(currentPage);
            });
        });
    </script> --}}

    {{-- <script>
        $(document).ready(function() {
            let currentPage = 1;
            const perPage = 10;

            function fetchHistory(page) {
                $.ajax({
                    url: '{{ route('numerologyHistory') }}',
                    method: 'GET',
                    data: {
                        page: page,
                        perPage: perPage
                    },
                    success: function(data) {
                        console.log(data);
                        if (data.error) {
                            alert(data.error);
                        } else {
                            let tableHtml = `
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Numerology</th>
                                <th scope="col">Status</th>
                                <th scope="col">Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        `;

                            $.each(data.data, function(index, item) {
                                let createdAt = new Date(item.created_at);
                                let isExpired = item.is_expired;
                                let daysLeft = item.days_left;

                                let daysLeftText = isExpired ? '' :
                                    (daysLeft === 0 ?
                                        `<span class="text-danger small">(Expired Today)</span>` :
                                        `<span class="text-danger small">(Expires in ${daysLeft} days)</span>`
                                    );

                                let type = '';
                                switch (item.numerology_type) {
                                    case 1:
                                        type = 'nameNumerology';
                                        break;
                                    case 2:
                                        type = 'mobileNumerology';
                                        break;
                                    case 3:
                                        type = 'mobileNumerology';
                                        break;
                                    case 4:
                                        type = 'bussinessNumerology';

                                        break;
                                }
                                // Generate the download URL based on availability of first_name
                                let fileName = item.first_name ?
                                    `/${item.first_name}-${item.id}.pdf` :
                                    `/${item.phone_number}-${item.id}.pdf`;

                                let downloadUrl = isExpired ? '' :
                                    `{{ asset('storage/uploads/${type}/') }}${fileName}`;

                                // Determine the display value based on availability of first_name
                                let displayValue = item.first_name ? item.first_name : item
                                    .phone_number;


                                let downloadButton = isExpired ?
                                    `<span class="text-danger">Expired</span>` :
                                    `<a href="${downloadUrl}" class="btn" style="background-color: #BA9A63; color: white;" target="_blank">Download</a>`;

                                // Format the date and time
                                let formattedDate = createdAt.toLocaleDateString('en-GB', {
                                    day: '2-digit',
                                    month: 'short',
                                    year: '2-digit'
                                });

                                tableHtml += `
                        <tr>
                           <th scope="row">#</th>
                             <td>
                                    <b>${displayValue}</b>
                                    <small>[${item.numerology_type_name}]</small>
                                    ${daysLeftText}
                                </td>
            
                            <td>${item.payment_status}</td>
                            <td>${formattedDate}</td>
                            <td>
                                ${downloadButton}
                            </td>
                        </tr>
                        `;
                            });

                            tableHtml += `
                        </tbody>
                    </table>`;

                            // Update the table container
                            $('#historyTableContainer').html(tableHtml);

                            // Update pagination controls
                            let paginationHtml = '';
                            for (let i = 1; i <= data.last_page; i++) {
                                paginationHtml +=
                                    `<button class="pagination-btn" 
                data-page="${i}" 
                style="
                    background-color: black; 
                    color: white; 
                    border: none; 
                    border-radius: 50%; 
                    padding: 8px 8px; 
                    font-size: 0.90rem; 
                    margin: 3px;
                    cursor: pointer;">
                ${i}
        </button>`;
                            }
                            $('#paginationContainer').html(paginationHtml);
                        }
                    },
                    error: function(xhr) {
                        console.error('Error fetching data:', xhr);
                        alert('An error occurred while fetching the data.');
                    }
                });
            }

            // Initial load
            fetchHistory(currentPage);

            // Handle pagination button clicks
            $(document).on('click', '.pagination-btn', function() {
                currentPage = $(this).data('page');
                fetchHistory(currentPage);
            });
        });
    </script> --}}

    <script>
        $(document).ready(function() {
            let currentPage = 1;
            const perPage = 10;

            function fetchHistory(page) {
                $.ajax({
                    url: '{{ route('numerologyHistory') }}',
                    method: 'GET',
                    data: {
                        page: page,
                        perPage: perPage
                    },
                    success: function(data) {
                        console.log(data);
                        if (data.error) {
                            alert(data.error);
                        } else if (!data.data || data.data.length === 0) {
                            // Show a message if no data is found
                            $('#historyTableContainer').html('<p>No history records found.</p>');
                            $('#paginationContainer').html('');
                        } else {
                            let tableHtml = `
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">Numerology</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                            `;

                            $.each(data.data, function(index, item) {
                                let createdAt = new Date(item.created_at);
                                let isExpired = item.is_expired;
                                let daysLeft = item.days_left;

                                let daysLeftText = isExpired ? '' :
                                    (daysLeft === 0 ?
                                        `<span class="text-danger small">(Expired Today)</span>` :
                                        `<span class="text-danger small">(Expires in ${daysLeft} days)</span>`
                                    );

                                let type = '';
                                switch (item.numerology_type) {
                                    case 1:
                                        type = 'nameNumerology';
                                        break;
                                    case 2:
                                        type = 'mobileNumerology';
                                        break;
                                    case 3:
                                        type = 'mobileNumerology';
                                        break;
                                    case 4:
                                        type = 'bussinessNumerology';
                                        break;
                                }

                                let fileName = item.first_name ?
                                    `/${item.first_name}_${item.id}.pdf` :
                                    `/mobile_${item.phone_number}_${item.id}.pdf`;

                                let downloadUrl = isExpired ? '' :
                                    `{{ asset('storage/uploads/${type}/') }}${fileName}`;

                                let displayValue = item.first_name ? item.first_name : item
                                    .phone_number;

                                let downloadButton = isExpired ?
                                    `<span class="text-danger">Expired</span>` :
                                    `<a href="${downloadUrl}" class="btn" style="background-color: #BA9A63; color: white;" target="_blank">Download</a>`;

                                let formattedDate = createdAt.toLocaleDateString('en-GB', {
                                    day: '2-digit',
                                    month: 'short',
                                    year: '2-digit'
                                });

                                tableHtml += `
                                <tr>
                                   <th scope="row">#</th>
                                     <td>
                                            <b>${displayValue}</b>
                                            <small>[${item.numerology_type_name}]</small>
                                            ${daysLeftText}
                                        </td>
                    
                                    <td>${item.payment_status}</td>
                                    <td>${formattedDate}</td>
                                    <td>
                                        ${downloadButton}
                                    </td>
                                </tr>
                                `;
                            });

                            tableHtml += `
                                </tbody>
                            </table>`;

                            // Update the table container
                            $('#historyTableContainer').html(tableHtml);

                            // Update pagination controls
                            let paginationHtml = '';
                            for (let i = 1; i <= data.last_page; i++) {
                                paginationHtml +=
                                    `<button class="pagination-btn" 
                        data-page="${i}" 
                        style="
                            background-color: black; 
                            color: white; 
                            border: none; 
                            border-radius: 50%; 
                            padding: 8px 8px; 
                            font-size: 0.90rem; 
                            margin: 3px;
                            cursor: pointer;">
                        ${i}
                </button>`;
                            }
                            $('#paginationContainer').html(paginationHtml);
                        }
                    },
                    error: function(xhr) {
                        console.error('Error fetching data:', xhr);
                        alert('An error occurred while fetching the data.');
                    }
                });
            }

            // Initial load
            fetchHistory(currentPage);

            // Handle pagination button clicks
            $(document).on('click', '.pagination-btn', function() {
                currentPage = $(this).data('page');
                fetchHistory(currentPage);
            });
        });
    </script>


    {{-- //validated --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('profileForm');
            const inputs = form.querySelectorAll('input');

            // Real-time validation for all input fields
            inputs.forEach(input => {
                input.addEventListener('input', function() {
                    validateField(input);
                });
            });

            form.addEventListener('submit', function(event) {
                let isValid = true;

                inputs.forEach(input => {
                    if (!validateField(input)) {
                        isValid = false;
                    }
                });

                if (!isValid) {
                    event.preventDefault();
                }
            });

            function validateField(input) {
                if (input.checkValidity()) {
                    input.classList.remove('is-invalid');
                    input.classList.add('is-valid');
                    return true;
                } else {
                    input.classList.remove('is-valid');
                    input.classList.add('is-invalid');
                    return false;
                }
            }

            // Real-time validation for email field
            const emailField = document.getElementById('email');
            emailField.addEventListener('input', function() {
                if (!validateEmail(emailField.value)) {
                    emailField.classList.add('is-invalid');
                } else {
                    emailField.classList.remove('is-invalid');
                    emailField.classList.add('is-valid');
                }
            });

            // Custom email validation
            function validateEmail(email) {
                const pattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/i;
                return pattern.test(email);
            }

            // Real-time validation for phone number
            const phoneField = document.getElementById('phone_number');
            phoneField.addEventListener('input', function() {
                if (!/^\d{10}$/.test(phoneField.value)) {
                    phoneField.classList.add('is-invalid');
                } else {
                    phoneField.classList.remove('is-invalid');
                    phoneField.classList.add('is-valid');
                }
            });
        });
    </script>


@endsection('content')
