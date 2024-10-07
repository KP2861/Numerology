@extends('Admin.layouts.app')

@section('content')
    <h1>Articles List</h1>

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
        <a href="{{ route('admin.articles.create') }}" class="btn btn-primary">Add New Article</a>
    </div>

    <table id="articlesTable" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Description</th>
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
                    Are you sure you want to delete the article titled "<span id="articleTitle"></span>"?
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
            $("#articlesTable").DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.articles.list') }}", // Replace with your actual route
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
                    },
                    {
                        data: 'title',
                        name: 'title'
                    },
                    {
                        // data: 'description',
                        // name: 'description',
                        // render: function(data, type, row) {
                        //     return data.length > 50 ? data.substr(0, 50) + '...' : data;
                        // }

                        data: 'category.name', // Fetch the category name from the relationship
                        name: 'category.name',
                        defaultContent: 'N/A'
                    },
                    {
                        data: 'actions',
                        name: 'actions',
                        orderable: false,
                        searchable: false,
                        render: function(data, type, row) {
                            return `
                              <a href="{{ url('/admin/articles') }}/${row.id}/edit" class="btn btn-warning">
    <i class="fa fa-pencil-alt"></i>
</a>
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmDeleteModal"
        data-id="${row.id}" data-title="${row.title}">
    <i class="fa fa-trash"></i> 
</button>`;
                        }
                    }
                ],
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print', 'colvis'
                ],
                dom: 'Bfrtip'
            }).buttons().container().appendTo('#articlesTable_wrapper .col-md-6:eq(0)');
        });

        // Show delete confirmation modal with dynamic article title and delete action URL
        $('#confirmDeleteModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var id = button.data('id'); // Extract article ID from data-* attributes
            var title = button.data('title'); // Extract article title from data-* attributes

            var modal = $(this);
            modal.find('.modal-body #articleTitle').text(title); // Update the modal content
            modal.find('#deleteForm').attr('action', '{{ url('/admin/articles') }}/' + id); // Update form action
        });
    </script>
@endsection
