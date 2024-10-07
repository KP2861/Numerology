@extends('Admin.layouts.app')

@section('content')
    <h1>Edit Category</h1>

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

    <!-- Form for editing a category -->
    <form action="{{ route('admin.articles.category.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Category Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $category->name) }}"
                required>
        </div>

        <button type="submit" class="btn btn-primary">Update Category</button>
        <a href="{{ route('admin.articles.category.list') }}" class="btn btn-secondary">Cancel</a>
    </form>

    <!-- Bootstrap 4 -->
    <script src="{{ URL::asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ URL::asset('backend/dist/js/adminlte.msize:60in.js') }}"></script>
    <!-- jQuery -->
    <script src="{{ URL::asset('backend/plugins/jquery/jquery.min.js') }}"></script>

    <!--script validation-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


@endsection
