@extends('Admin.layouts.app')

@section('content')
<h1>Name Numerology List</h1>

<!-- Main content -->
<section class="content mt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Total Neumorologies: {{ $nameNumerologyCount }}</h3>
                        <!-- PDF Download Form -->
                        <form action="{{ route('numerology.downloadPdf', ['type' => 'name']) }}" method="POST" style="float: right;">
                            @csrf
                            <button type="submit" class="btn btn-success">Download PDF</button>
                        </form>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Numerology Name</th>
                                    <th>User Name</th>
                                    <th>User Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($nameNumerologies as $index => $numerology)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $numerology['numerology_name'] }}</td>
                                    <td>{{ $numerology['user_name'] }}</td>
                                    <td>{{ $numerology['user_email'] }}</td>
                                    <td>
                                        @php
                                            $encryptedId = Crypt::encryptString($numerology['id']);
                                        @endphp
                                        
                                        <a href="{{ url('admin/name-numerology/detail/' . $encryptedId) }}" class="btn btn-primary">View More</a>
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