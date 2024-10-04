@extends('Admin.layouts.app')

@section('content')
    <h1>User List</h1>

    <table id="userTable" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created At</th>
                {{-- <th>Actions</th> --}}
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
                    Are you sure you want to delete the user "<span id="userName"></span>"?
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
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- DataTables JavaScript -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
    <!-- Optional DataTables Buttons JavaScript -->
    <script src="https://cdn.datatables.net/buttons/1.7.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.2/js/buttons.colVis.min.js"></script>
    <!-- Optional DataTables Buttons CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.2/css/buttons.dataTables.min.css">

    <script>
        $(document).ready(function() {
            var table = $("#userTable").DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.userList') }}",
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
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at'
                    },
                    // {
                    //     data: null,
                    //     render: function(data, type, row) {
                    //         return `
                //             <button class="btn btn-danger delete-button" data-id="${row.id}" data-name="${row.name}" title="Delete">
                //                 <i class="fas fa-trash"></i>
                //             </button>
                //         `;
                    //     },
                    //     orderable: false,
                    //     searchable: false
                    // }
                ],
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print', 'colvis'
                ],
                dom: 'Bfrtip'
            }).buttons().container().appendTo('#userTable_wrapper .col-md-6:eq(0)');

            // Delete User Confirmation
            $('#userTable').on('click', '.delete-button', function() {
                var id = $(this).data('id');
                var name = $(this).data('name');
                $('#userName').text(name);
                $('#deleteForm').attr('action', `{{ url('/admin/users') }}/${id}`);
                $('#confirmDeleteModal').modal('show');
            });

            // Handle the delete form submission
            $('#deleteForm').on('submit', function(e) {
                e.preventDefault(); // Prevent the default form submission

                var form = $(this);
                $.ajax({
                    type: form.attr('method'),
                    url: form.attr('action'),
                    data: form.serialize(),
                    success: function(response) {
                        // Close the modal
                        $('#confirmDeleteModal').modal('hide');
                        // Reload the DataTable
                        table.ajax.reload();
                        // Optionally show a success message
                        alert(response.success);
                    },
                    error: function(xhr) {
                        // Optionally show an error message
                        alert(xhr.responseJSON.error ||
                            'An error occurred while deleting the user.');
                    }
                });
            });
        });
    </script>
@endsection
