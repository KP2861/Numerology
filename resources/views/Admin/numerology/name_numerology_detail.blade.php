@extends('Admin.layouts.app')

@section('content')
<div class="container">
    <h1>Name Numerology Detail</h1>

    @if ($details)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Numerology Details</h5>
                <p><strong>Numerology Type:</strong> {{ $details->numerology_type }}</p>
                <p><strong>First Name:</strong> {{ $details->first_name }}</p>
                <p><strong>Last Name:</strong> {{ $details->last_name }}</p>
                <p><strong>Date of Birth:</strong> {{ $details->dob }}</p>
                <p><strong>Gender:</strong> {{ $details->gender }}</p>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">User Information</h5>
                <p><strong>Name:</strong> {{ $details->user_name }}</p>
                <p><strong>Email:</strong> {{ $details->user_email }}</p>
            </div>
        </div>
    @else
        <p>No details found.</p>
    @endif
</div>
@endsection
