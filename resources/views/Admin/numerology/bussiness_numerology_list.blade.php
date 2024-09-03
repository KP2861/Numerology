@extends('Admin.layouts.app')

@section('content')
<h1>Business Numerology List</h1>

<!-- Main content -->
<section class="content mt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Business Numerology</h3>
                    
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Numerology Type</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Date of Birth</th>
                                    <th>Phone Number</th>
                                    <th>Type of Business</th>
                                    <th>View More</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($businessNumerologies as $index => $numerology)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $numerology['numerology_type'] }}</td>
                                        <td>{{ $numerology['first_name'] }}</td>
                                        <td>{{ $numerology['last_name'] }}</td>
                                        <td>{{ $numerology['dob'] }}</td>
                                        <td>{{ $numerology['phone_number'] }}</td>
                                        <td>{{ $numerology['type_of_business'] }}</td>
                                        <td>
                                        @php
                                            $encryptedId = Crypt::encryptString($numerology['id']);
                                        @endphp
                                        <a href="{{ url('admin/bussiness-numerology/detail/' . $encryptedId) }}" class="btn btn-primary">View More</a>
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
