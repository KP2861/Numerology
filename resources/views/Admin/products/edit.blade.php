@extends('Admin.layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Product</h1>

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
        <form action="{{ route('admin.products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <span class="form-control"><strong>{{ $product->name }}</strong></span>
            </div>


            <div class="form-group">
                <label for="packages_amount">Packages Amount(INR)</label>
                <input type="number" step="0.01" name="packages_amount" class="form-control" id="packages_amount"
                    value="{{ $product->packages_amount }}" required>
            </div>
            <div class="form-group">
                <label for="expiry_day">Expiry Day <small class="form-text text-muted">Expiry Day is calculated from the
                        report generation date.</small></label>

                <input type="number" name="expiry_day" class="form-control" id="expiry_day"
                    value="{{ $product->expiry_day }}" required>
            </div>

            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
