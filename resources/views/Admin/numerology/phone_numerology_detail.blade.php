@extends('Admin.layouts.app')

@section('content')
<div class="container">
    <h1>Phone Numerology Detail</h1>

    @if($phoneNumerologyDetail)
        <table class="table table-bordered">
            <tr>
                <th>Phone Number</th>
                <td>{{ $phoneNumerologyDetail->phone_number }}</td>
            </tr>
            <tr>
                <th>Numerology Type</th>
                <td>{{ $phoneNumerologyDetail->numerology_type }}</td>
            </tr>
            <tr>
                <th>Date of Birth</th>
                <td>{{ $phoneNumerologyDetail->dob }}</td>
            </tr>
            <tr>
                <th>Area of Concern</th>
                <td>{{ $phoneNumerologyDetail->area_of_concern }}</td>
            </tr>
            <tr>
                <th>User Name</th>
                <td>{{ $phoneNumerologyDetail->name }}</td>
            </tr>
            <tr>
                <th>User Email</th>
                <td>{{ $phoneNumerologyDetail->email }}</td>
            </tr>
        </table>
    @else
        <p>No details available.</p>
    @endif
</div>
@endsection
