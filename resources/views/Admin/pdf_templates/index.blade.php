@extends('Admin.layouts.app')

@section('content')
    <div class="container">
        <h1>PDF Templates</h1>

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

        <!-- Error message if DataTables fetch fails -->
        <div id="fetchError" class="alert alert-danger d-none">
            Error fetching data. Please try again later.
        </div>

        <!-- Add New PDF Template Button -->
        <div id="addNewTemplateButton" class="mb-3 d-none">
            <a href="{{ route('admin.pdfTemplates.create') }}" class="btn btn-primary">Add New PDF Template</a>
        </div>

        <table class="table table-bordered" id="pdfTemplatesTable">
            <thead>
                <tr>
                    <th>#</th>
                    {{-- <th>Header Name</th> --}}
                    <th>Footer Name</th>
                    <th>Created At</th>
                    <th>Last Update</th> <!-- New column for Updated At -->
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- DataTables will populate this section -->
            </tbody>
        </table>

        <!-- Confirm Delete Modal -->
        {{-- <div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog"
            aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="confirmDeleteModalLabel">Confirm Delete</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete the template "<span id="templateName"></span>"?
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
        </div> --}}
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- DataTables JavaScript -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function() {
            let table = $('#pdfTemplatesTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route('admin.pdfTemplates.list') }}',
                    error: function(xhr, error, thrown) {
                        $('#fetchError').removeClass('d-none');
                        $('#addNewTemplateButton').removeClass('d-none'); // Show button on error
                    }
                },
                columns: [{
                        data: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    // {
                    //     data: 'header_name'
                    // },
                    {
                        data: 'footer_name'
                    },
                    {
                        data: 'created_at'
                    },
                    {
                        data: 'updated_at'
                    },
                    {
                        data: null,
                        render: function(data, type, row) {
                            return `
                               <a href="{{ url('/admin/pdf-templates') }}/${row.id}/edit" class="btn btn-warning" title="Edit">
                                    <i class="fas fa-edit"></i>
                               </a>
                            `;
                        },
                        orderable: false,
                        searchable: false
                    }
                ],
                // Callback function after data load
                drawCallback: function(settings) {
                    const api = this.api();
                    const rowCount = api.rows().count(); // Get the number of rows
                    if (rowCount === 0) {
                        $('#addNewTemplateButton').removeClass('d-none'); // Show button if no data
                    } else {
                        $('#addNewTemplateButton').addClass('d-none'); // Hide button if there is data
                    }
                }
            });

            // Optional: Delete Modal logic
            $('#confirmDeleteModal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget);
                var id = button.data('id');
                var header = button.data('header');

                var modal = $(this);
                modal.find('.modal-body #templateName').text(header);
                modal.find('#deleteForm').attr('action', '{{ route('admin.pdfTemplates.destroy', ':id') }}'
                    .replace(':id', id));
            });
        });
    </script>
@endsection
