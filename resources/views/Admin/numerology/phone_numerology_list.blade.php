@extends('Admin.layouts.app')

@section('content')
<h1>Phone Numerology List</h1>

<!-- Main content -->
<section class="content mt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Phone Numerology</h3>
                        <!-- PDF Download Form -->

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Numerology Type</th>
                                    <th>Phone Number</th>
                                    <th>Date of Birth</th>
                                    <th>Area of Concern</th>
                                    <th>View More</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($phoneNumerologies as $index => $numerology)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $numerology['numerology_type'] }}</td>
                                    <td>{{ $numerology['phone_number'] }}</td>
                                    <td>{{ $numerology['dob'] }}</td>
                                    <td>{{ $numerology['area_of_concern'] }}</td>
                                    <td>
                                        @php
                                        $encryptedId = Crypt::encryptString($numerology['id']);
                                        @endphp
                                        <a href="{{ url('admin/phone-numerology/detail/' . $encryptedId) }}" class="btn btn-primary">View More</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
@endsection