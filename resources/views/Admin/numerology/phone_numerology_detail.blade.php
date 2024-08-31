@extends('Admin.layouts.app')

@section('content')
<div class="container">
    <h1>Phone Numerology Detail</h1>

    <div class="card">
        <div class="card-header">
            <h2>Details for Phone Number: {{ $phoneNumerology['phone_number'] }}</h2>
        </div>
        <div class="card-body">
            <ul>
                <li><strong>Numerology Type:</strong> {{ $phoneNumerology['numerology_type'] }}</li>
                <li><strong>Phone Number:</strong> {{ $phoneNumerology['phone_number'] }}</li>
                <li><strong>Date of Birth:</strong> {{ $phoneNumerology['dob'] }}</li>
                <li><strong>Area of Concern:</strong> {{ $phoneNumerology['area_of_concern'] }}</li>
                <li><strong>User Name:</strong> {{ $phoneNumerology['user_name'] }}</li>
                <li><strong>User Email:</strong> {{ $phoneNumerology['user_email'] }}</li>
            </ul>
        </div>
        <div class="card-footer">
            <a href="{{ route('phone_numerology.list') }}" class="btn btn-primary">Back to List</a>
        </div>
    </div>
</div>
@endsection
