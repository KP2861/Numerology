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
    <!-- Bootstrap 4 -->
    <script src="{{ URL::asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ URL::asset('backend/dist/js/adminlte.msize:60in.js') }}"></script>
    <!-- jQuery -->
    <script src="{{ URL::asset('backend/plugins/jquery/jquery.min.js') }}"></script>

    <form action="{{ route('admin.pdfTemplates.update', $pdfTemplate->id) }}" method="POST" enctype="multipart/form-data"
        id="pdfTemplateForm">
        @csrf
        @method('PUT')

        <div class="form-group">
            {{-- <label for="header_name">Header Name</label> --}}
            <input type="hidden" name="header_name" class="form-control" id="header_name"
                value="{{ old('header_name', $pdfTemplate->header_name) }}" required>
        </div>

        <div class="form-group">
            <label for="footer_name">Footer Name</label>
            <input type="text" name="footer_name" class="form-control" id="footer_name"
                value="{{ old('footer_name', $pdfTemplate->footer_name) }}" required>
        </div>

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
            <div id="fileError" class="text-danger mt-2" style="display: none;"></div> <!-- For JavaScript error message -->
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('admin.pdfTemplates.index') }}" class="btn btn-secondary">Cancel</a>
    </form>

    <script>
        document.getElementById('footer_img').addEventListener('change', function() {
            const file = this.files[0];
            const fileError = document.getElementById('fileError');

            // Reset error message
            fileError.style.display = 'none';
            fileError.innerText = '';

            if (file) {
                // Check file size (in bytes)
                const maxSizeInKB = 50;
                const maxSizeInBytes = maxSizeInKB * 1024;

                if (file.size > maxSizeInBytes) {
                    fileError.style.display = 'block';
                    fileError.innerText = 'The uploaded file exceeds 50 KB. Please choose a smaller file.';
                    // Clear the input
                    this.value = '';
                }
            }
        });
    </script>
@endsection
