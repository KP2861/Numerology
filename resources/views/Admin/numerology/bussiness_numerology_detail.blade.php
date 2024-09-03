{{-- resources/views/Admin/numerology/business_numerology_detail.blade.php --}}
@extends('Admin.layouts.app')

@section('content')
<div class="container">
    <h1>Business Numerology Detail</h1>

    <div class="card">
        <div class="card-header">
            <h2>Details for ID: {{ $businessNumerology['id'] }}</h2>
        </div>
        <div class="card-body">
            <ul>
                <li><strong>Numerology Name:</strong> {{ $businessNumerology['numerology_name'] }}</li>
                <li><strong>First Name:</strong> {{ $businessNumerology['first_name'] }}</li>
                <li><strong>Last Name:</strong> {{ $businessNumerology['last_name'] }}</li>
                <li><strong>Date of Birth:</strong> {{ $businessNumerology['dob'] }}</li>
                <li><strong>Phone Number:</strong> {{ $businessNumerology['phone_number'] }}</li>
                <li><strong>Type of Business:</strong> {{ $businessNumerology['type_of_business'] }}</li>
                <li><strong>User Name:</strong> {{ $businessNumerology['user_name'] }}</li>
                <li><strong>User Email:</strong> {{ $businessNumerology['user_email'] }}</li>
            </ul>
        </div>
        <div class="card-footer">
            <a href="{{ route('business_numerology.list') }}" class="btn btn-primary">Back to List</a>
        </div>
    </div>
</div>
@endsection
