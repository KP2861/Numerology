@extends('Admin.layouts.app')

@section('content')
    <h1>Create PDF Template</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Bootstrap 4 -->
    <script src="{{ URL::asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ URL::asset('backend/dist/js/adminlte.msize:60in.js') }}"></script>
    <!-- jQuery -->
    <script src="{{ URL::asset('backend/plugins/jquery/jquery.min.js') }}"></script>

    <form action="{{ route('admin.pdfTemplates.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            {{-- <label for="header_name">Header Name</label> --}}
            <input type="hidden" name="header_name" class="form-control" id="header_name" value="Dummy Header Name">
        </div>

        <div class="form-group">
            <label for="footer_name">Footer Name</label>
            <input type="text" name="footer_name" class="form-control" id="footer_name" required>
        </div>

        <div class="form-group">
            {{-- <label for="header_img">Header Image</label> --}}
            <input type="hidden" name="header_img" class="form-control" id="header_img" accept="image/jpeg,image/png">
        </div>

        <div class="form-group">
            <label for="footer_img">Footer Image</label>
            <input type="file" name="footer_img" class="form-control" id="footer_img" accept="image/jpeg,image/png">
        </div>

        <button type="submit" class="btn btn-success">Create</button>
        <a href="{{ route('admin.pdfTemplates.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
