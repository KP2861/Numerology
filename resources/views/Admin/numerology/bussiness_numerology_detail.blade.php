@extends('Admin.layouts.app')

@section('content')
<div class="container">
    <h1>Business Numerology Detail</h1>

    @if($numerologyDetail)
        <div class="card">
            <div class="card-header">
                Business Numerology Details
            </div>
            <div class="card-body">
                <h5 class="card-title">Numerology Type: {{ $numerologyDetail->numerology_type }}</h5>
                <p class="card-text">
                    <strong>First Name:</strong> {{ $numerologyDetail->first_name }}<br>
                    <strong>Last Name:</strong> {{ $numerologyDetail->last_name }}<br>
                    <strong>Date of Birth:</strong> {{ $numerologyDetail->dob }}<br>
                    <strong>Phone Number:</strong> {{ $numerologyDetail->phone_number }}<br>
                    <strong>Type of Business:</strong> {{ $numerologyDetail->type_of_business }}<br>
                </p>
                <hr>
                <h5 class="card-title">User Details</h5>
                <p class="card-text">
                    <strong>Name:</strong> {{ $numerologyDetail->user_name }}<br>
                    <strong>Email:</strong> {{ $numerologyDetail->user_email }}<br>
                </p>
            </div>
        </div>
    @else
        <p>No details found for the given ID.</p>
    @endif
</div>
@endsection
