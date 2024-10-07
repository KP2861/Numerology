@extends('Admin.layouts.app')

@section('content')
    <h1 style="margin-bottom: 1.5rem; color: #333; font-size: 28px;">Consultant Details</h1>

    <div class="row" style="display: flex;">

        <!-- Left Column -->
        <div class="col-md-6 d-flex flex-column">
            <div class="card"
                style="flex: 1; padding: 1rem; border: 1px solid #dddddd; background: #f3f3f3; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                <div style="border-bottom: 1px solid #dddddd; padding-bottom: 10px; margin-bottom: 10px;">
                    <h6 style="color: #251F14; font-size: 22px; font-weight: bold; margin-bottom: 0;">Name</h6>
                    <p style="color: #251F14; font-size: 18px; line-height: 1.5; margin-bottom: 0;">{{ $consultant->name }}
                    </p>
                </div>

                <div style="border-bottom: 1px solid #dddddd; padding-bottom: 10px; margin-bottom: 10px;">
                    <h6 style="color: #251F14; font-size: 22px; font-weight: bold; margin-bottom: 0;">Mobile</h6>
                    <p style="color: #251F14; font-size: 18px; line-height: 1.5; margin-bottom: 0;">{{ $consultant->phone }}
                    </p>
                </div>

                <div style="border-bottom: 1px solid #dddddd; padding-bottom: 10px; margin-bottom: 10px;">
                    <h6 style="color: #251F14; font-size: 22px; font-weight: bold; margin-bottom: 0;">Message</h6>
                    <p style="color: #251F14; font-size: 18px; line-height: 1.5; margin-bottom: 0;">
                        {{ $consultant->message }}</p>
                </div>
            </div>
        </div>

        <!-- Right Column -->
        <div class="col-md-6 d-flex flex-column">
            <div class="card"
                style="flex: 1; padding: 1rem; border: 1px solid #dddddd; background: #f3f3f3; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                <div style="border-bottom: 1px solid #dddddd; padding-bottom: 5px; margin-bottom: 5px;">
                    <h6 style="color: #251F14; font-size: 22px; font-weight: bold; margin-bottom: 0;">Email</h6>
                    <p style="color: #251F14; font-size: 18px; line-height: 1.5; margin-bottom: 0;">{{ $consultant->email }}
                    </p>
                </div>

                <div style="border-bottom: 1px solid #dddddd; padding-bottom: 5px; margin-bottom: 5px;">
                    <h6 style="color: #251F14; font-size: 22px; font-weight: bold; margin-bottom: 0;">Gender</h6>
                    <p style="color: #251F14; font-size: 18px; line-height: 1.5; margin-bottom: 0;">
                        {{ $consultant->gender }}</p>
                </div>

                <div style="border-bottom: 1px solid #dddddd; padding-bottom: 5px; margin-bottom: 5px;">
                    <h6 style="color: #251F14; font-size: 22px; font-weight: bold; margin-bottom: 0;">Date of Birth</h6>
                    <p style="color: #251F14; font-size: 18px; line-height: 1.5; margin-bottom: 0;">{{ $consultant->dob }}
                    </p>
                </div>

                <div style="border-bottom: 1px solid #dddddd; padding-bottom: 5px; margin-bottom: 5px;">
                    <h6 style="color: #251F14; font-size: 22px; font-weight: bold; margin-bottom: 0;">Occupation</h6>
                    <p style="color: #251F14; font-size: 18px; line-height: 1.5; margin-bottom: 0;">
                        {{ $consultant->occupation }}</p>
                </div>

                <div style="border-bottom: 1px solid #dddddd; padding-bottom: 5px; margin-bottom: 5px;">
                    <h6 style="color: #251F14; font-size: 22px; font-weight: bold; margin-bottom: 0;">Message Date</h6>
                    <p style="color: #251F14; font-size: 18px; line-height: 1.5; margin-bottom: 0;">
                        {{ \Carbon\Carbon::parse($consultant->created_at)->format('d M y (h:i A)') }}</p>
                </div>
            </div>
        </div>
    </div>

    <a href="{{ route('admin.consultants.index') }}" class="btn btn-primary mt-3">Back to List</a>

    <!-- Bootstrap 4 -->
    <script src="{{ URL::asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ URL::asset('backend/dist/js/adminlte.min.js') }}"></script>
    <!-- jQuery -->
    <script src="{{ URL::asset('backend/plugins/jquery/jquery.min.js') }}"></script>
@endsection
