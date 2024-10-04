@extends('Admin.layouts.app')

@section('content')
    <div class="container">
        <h1>Products</h1>

        <!-- Display Flash Messages -->
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

        <table class="table table-bordered" id="productsTable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>

                    <th>Packages Amount</th>
                    <th>Expiry Day</th>
                    <th>Actions</th> <!-- Add Actions Column -->
                </tr>
            </thead>
            <tbody>
                <!-- DataTables will populate this section -->
            </tbody>
        </table>
    </div>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- DataTables JavaScript -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function() {
            var table = $('#productsTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('admin.products.list') }}',
                columns: [{
                        data: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'name'
                    },

                    {
                        data: 'packages_amount'
                    },
                    {
                        data: 'expiry_day'
                    },
                    {
                        data: null,
                        orderable: false,
                        render: function(data, type, row) {
                            return `
                                <button class="btn btn-warning edit-btn" data-id="${row.id}"><i class="fas fa-edit"></i></button>
                               
                            `;
                        }
                    }
                ]
            });



            // Edit button click event
            $('#productsTable tbody').on('click', '.edit-btn', function() {
                var id = $(this).data('id');
                // Redirect to edit page for the selected product
                window.location.href = '{{ url('admin/products') }}/' + id + '/edit';
            });

        });
    </script>
@endsection
