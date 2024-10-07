@extends('Admin.layouts.app')

@section('content')
    <h1>Articles Categories</h1>

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

    <!-- Add New Category Button -->
    <div>
        <a href="{{ route('admin.articles.category.create') }}" class="btn btn-primary">Add New Category</a>
    </div>

    <table id="articlesTable" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

    <!-- Confirm Delete Modal -->
    <div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmDeleteModalLabel">Confirm Delete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete the category named "<span id="categoryName"></span>"?
                </div>
                <div class="modal-footer">
                    <form id="deleteForm" method="POST" action="">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- DataTables JavaScript -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
    <!-- Optional DataTables Buttons JavaScript -->
    <script src="https://cdn.datatables.net/buttons/1.7.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.2.2/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.2/js/buttons.colVis.min.js"></script>
    <!-- Optional DataTables Buttons CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.2/css/buttons.dataTables.min.css">

    <script>
        $(document).ready(function() {
            // Initialize DataTable
            $("#articlesTable").DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.articles.category.list') }}", // Ensure this route matches your controller method
                responsive: true,
                lengthChange: true,
                autoWidth: false,
                paging: true,
                searching: true,
                ordering: true,
                info: true,
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    }, // Index column
                    {
                        data: 'name',
                        name: 'name'
                    }, // Category name column
                    { // Actions column
                        data: 'id',
                        name: 'actions',
                        orderable: false,
                        searchable: false,
                        render: function(data, type, row) {
                            return `
                                <a href="{{ url('admin/articles-category') }}/${row.id}/edit" class="btn btn-warning" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button type="button" class="btn btn-danger" title="Delete" data-toggle="modal" data-target="#confirmDeleteModal"
                                    data-id="${row.id}" data-name="${row.name}">
                                    <i class="fas fa-trash"></i>
                                </button>`;
                        }
                    }
                ],
                buttons: ['copy', 'csv', 'excel', 'pdf', 'print', 'colvis'], // DataTables buttons
                dom: 'Bfrtip' // Buttons on the table
            }).buttons().container().appendTo('#articlesTable_wrapper .col-md-6:eq(0)');
        });

        // Delete confirmation modal
        $('#confirmDeleteModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var id = button.data('id'); // Extract article ID from data-* attributes
            var name = button.data('name'); // Extract article name from data-* attributes

            var modal = $(this);
            modal.find('.modal-body #categoryName').text(name); // Update modal content
            modal.find('#deleteForm').attr('action', '{{ route('admin.articles.category.destroy', ':id') }}'
                .replace(':id', id)); // Update form action

        });
    </script>
@endsection
