@extends('Admin.layouts.app')

@section('content')
    <h1>Add New Article</h1>

    <!-- Display validation errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Display flash messages for success or error -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <!-- Form for adding a new article -->
    <form action="{{ route('admin.articles.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
        </div>

        <div class="form-group">
            <label for="category_id">Category</label>
            <select class="form-control" id="category_id" name="category_id" required>
                <option value="">Select a category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4" required>{{ old('description') }}</textarea>
        </div>

        <!-- File input for image upload -->
        <div class="form-group">
            <label for="file">Upload Image</label>
            <input type="file" class="form-control-file" id="file" name="file" accept="image/*" required>
        </div>

        <!-- Image preview -->
        <div class="form-group">
            <label>Image Preview</label>
            <img id="imagePreview" src="#" alt="Image Preview"
                style="display: none; max-width: 300px; max-height: 300px;">
        </div>

        <button type="submit" class="btn btn-primary">Add Article</button>
        <a href="{{ route('admin.articles.list') }}" class="btn btn-secondary">Cancel</a>
    </form>

    <!-- Scripts -->
    <script src="{{ URL::asset('backend/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::asset('backend/dist/js/adminlte.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            // Listen for file input changes
            $('#file').change(function() {
                let file = this.files[0];
                if (file) {
                    let reader = new FileReader();
                    reader.onload = function(e) {
                        // Display the image preview and set the src
                        $('#imagePreview').attr('src', e.target.result).css('display', 'block');
                    };
                    reader.readAsDataURL(file);
                } else {
                    $('#imagePreview').hide(); // Hide preview if no file selected
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            // Listen for file input changes
            $('#file').change(function() {
                let file = this.files[0];
                if (file) {
                    // Check if the file size exceeds 2MB
                    if (file.size > 2 * 1024 * 1024) { // 2 MB in bytes
                        alert('File size must be less than 2 MB');
                        $('#file').val(''); // Clear the input
                        $('#imagePreview').hide(); // Hide preview
                        return;
                    }

                    let reader = new FileReader();
                    reader.onload = function(e) {
                        // Display the image preview and set the src
                        $('#imagePreview').attr('src', e.target.result).css('display', 'block');
                    };
                    reader.readAsDataURL(file);
                } else {
                    $('#imagePreview').hide(); // Hide preview if no file selected
                }
            });
        });
    </script>

@endsection
