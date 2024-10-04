@extends('Admin.layouts.app')

@section('content')
<h1>Edit PDF Template</h1>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- DataTables JavaScript -->
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>

<form action="{{ route('admin.pdfTemplates.update', $pdfTemplate->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group">
        <!-- <label for="header_name">Header Name</label> -->
        <input type="hidden" name="header_name" class="form-control" id="header_name"
            value="{{ old('header_name', $pdfTemplate->header_name) }}" required>
    </div>

    <div class="form-group">
        <label for="footer_name">Footer Name</label>
        <input type="text" name="footer_name" class="form-control" id="footer_name"
            value="{{ old('footer_name', $pdfTemplate->footer_name) }}" required>
    </div>

    {{-- <div class="form-group">
            <label for="header_img">Header Image</label>
            <input type="file" name="header_img" class="form-control" id="header_img" accept="image/jpeg,image/png">
            @if ($pdfTemplate->header_img)
                <div class="pt-2">
                    <img src="{{ asset('storage/' . $pdfTemplate->header_img) }}" alt="Header Image"
    style="max-width: 200px; max-height: 200px;">
    </div>
    @endif
    </div> --}}

    <div class="form-group">
        <label for="footer_img">Footer Image (up to 50kb)</label>
        <input type="file" name="footer_img" class="form-control" id="footer_img" accept="image/jpeg,image/png">
        @if ($pdfTemplate->footer_img)
        <div class="mt-2">
            <img src="{{ asset('storage/' . $pdfTemplate->footer_img) }}" alt="Footer Image"
                style="max-width: 200px; max-height: 200px;">
        </div>
        @endif
        @error('footer_img')
        <div class="text-danger mt-2">{{ $message }}</div> <!-- Display validation error -->
        @enderror
    </div>

    <button type="submit" class="btn btn-success">Update</button>
    <a href="{{ route('admin.pdfTemplates.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection