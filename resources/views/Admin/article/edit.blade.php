@extends('Admin.layouts.app')

@section('content')
    <h1>Edit Article</h1>

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

    <!-- Form for editing the article -->
    <form action="{{ route('admin.articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title"
                value="{{ old('title', $article->title) }}" required>
        </div>

        <div class="form-group">
            <label for="category_id">Category</label>
            <select class="form-control" id="category_id" name="category_id" required>
                <option value="">Select a category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}"
                        {{ $category->id == old('category_id', $article->category_id) ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4" required>{{ old('description', $article->description) }}</textarea>
        </div>

        <div class="form-group">
            <label for="file">Upload Image</label>
            <input type="file" class="form-control-file" id="file" name="file" accept="image/*">
            <small class="form-text text-muted">Upload an image if you want to replace the existing one.</small>
        </div>

        <!-- Display existing image if it exists -->
        @if ($article->file)
            <div class="form-group">
                <label>Existing Image</label><br>
                <img src="{{ asset($article->file) }}" alt="Existing Image" class="img-fluid"
                    style="max-width: 300px; max-height: 300px;">
            </div>
        @endif


        <button type="submit" class="btn btn-primary">Update Article</button>
        <a href="{{ route('admin.articles.list') }}" class="btn btn-secondary">Cancel</a>
    </form>

    <!-- Bootstrap 4 -->
    <script src="{{ URL::asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ URL::asset('backend/dist/js/adminlte.min.js') }}"></script>
    <!-- jQuery -->
    <script src="{{ URL::asset('backend/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Script validation -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
