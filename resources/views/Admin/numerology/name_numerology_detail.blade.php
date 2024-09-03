@extends('Admin.layouts.app')

@section('content')
<div class="container">
    <h1>Name Numerology Detail</h1>

    <div class="card">
        <div class="card-header">
            <h2>Details for ID: {{ $nameNumerology['id'] }}</h2>
        </div>
        <div class="card-body">
            <ul>
                <li><strong>Numerology Name:</strong> {{ $nameNumerology['numerology_name'] }}</li>
                <li><strong>First Name:</strong> {{ $nameNumerology['first_name'] }}</li>
                <li><strong>Last Name:</strong> {{ $nameNumerology['last_name'] }}</li>
                <li><strong>Date of Birth:</strong> {{ $nameNumerology['dob'] }}</li>
                <li><strong>Gender:</strong> {{ $nameNumerology['gender'] }}</li>
                <li><strong>User Name:</strong> {{ $nameNumerology['user_name'] }}</li>
                <li><strong>User Email:</strong> {{ $nameNumerology['user_email'] }}</li>
            </ul>
        </div>
        <div class="card-footer">
            <a href="{{ route('name_numerology.list') }}" class="btn btn-primary">Back to List</a>
        </div>
    </div>
</div>
@endsection
