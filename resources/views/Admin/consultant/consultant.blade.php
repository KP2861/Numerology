@extends('Admin.layouts.app')

@section('content')
    <h1>Consultants List</h1>

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

    <!-- Consultant Table -->
    <table id="consultantsTable" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>DOB</th>
                <th>Occupation</th>
                <th>Phone</th>
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
                    Are you sure you want to delete the consultant "<span id="consultantName"></span>"?
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
    <script>
        $(document).ready(function() {
            // Initialize DataTable
            $('#consultantsTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('admin.consultants.list') }}', // Adjust the route name as necessary
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
                        data: 'gender',
                        name: 'gender'
                    },
                    {
                        data: 'dob',
                        name: 'dob'
                    },
                    {
                        data: 'occupation',
                        name: 'occupation'
                    },
                    {
                        data: 'phone',
                        name: 'phone'
                    },
                    {
                        data: 'actions',
                        name: 'actions',
                        orderable: false,
                        searchable: false,
                        render: function(data, type, row) {
                            return `
                                <a href="{{ route('admin.consultants.show', '') }}/${row.id}" class="btn btn-primary">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmDeleteModal" data-id="${row.id}" data-name="${row.name}">
                                    <i class="fa fa-trash"></i>
                                </button>
                                <a href="" class="btn btn-success">
                                    <i class="fa fa-download"></i>
                                </a>
                            `;
                        }
                    }
                ],
                dom: 'Bfrtip',
                buttons: ['copy', 'csv', 'excel', 'pdf', 'print', 'colvis'],
            });

            // Show delete confirmation modal with dynamic consultant name and delete action URL
            $('#confirmDeleteModal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget); // Button that triggered the modal
                var id = button.data('id'); // Extract info from data-* attributes
                var name = button.data('name');

                var modal = $(this);
                modal.find('.modal-body #consultantName').text(
                    name); // Update the modal's body with the consultant's name
                modal.find('#deleteForm').attr('action', '{{ route('admin.consultants.destroy', ':id') }}'
                    .replace(':id', id)); // Update form action URL
            });
        });
    </script>
@endsection
