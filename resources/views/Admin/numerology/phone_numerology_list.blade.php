@extends('Admin.layouts.app')

@section('content')
    <h1 class="mb-4">Phone Numerology List</h1>
    <table id="myTable" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Phone Number</th>
                <th>Date of Birth</th>
                <th>User Name</th>
                <th>User Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

    <!-- Hidden Form for PDF Download -->
    <form id="downloadForm" method="POST" class="d-none">
        @csrf
    </form>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- DataTables JavaScript -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
    <!-- DataTables Buttons Extension -->
    <script src="https://cdn.datatables.net/buttons/2.3.4/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.print.min.js"></script>

    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var table = $("#myTable").DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('phone_numerology.list') }}",
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
                        data: 'phone_number',
                        name: 'phone_number'
                    },
                    {
                        data: 'dob',
                        name: 'dob'
                    },
                    {
                        data: 'user_name',
                        name: 'user_name'
                    },
                    {
                        data: 'user_email',
                        name: 'user_email'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    }
                ],
                buttons: ['copy', 'csv', 'excel', 'pdf', 'print', 'colvis']
            }).buttons().container().appendTo('#myTable_wrapper .col-md-6:eq(0)');

            // Delete entry logic
            $('#myTable').on('click', '.delete-btn', function(e) {
                e.preventDefault(); // Prevent default button action
                var id = $(this).data('id'); // Get the ID from the button's data attribute
                confirmDelete(id); // Call the confirmDelete function
            });
        });

        function confirmDelete(id) {
            if (confirm('Are you sure you want to delete this entry?')) {
                var url = '{{ route('admin.phone_numerology.destroy', ':id') }}';
                url = url.replace(':id', id);

                $.ajax({
                    url: url,
                    type: 'DELETE',
                    success: function(result) {
                        if (result.success) {
                            alert(result.success); // Display success message
                            $('#myTable').DataTable().ajax.reload(); // Reload DataTable
                        }
                    },
                    error: function(xhr) {
                        alert('Error deleting entry: ' + xhr.responseText); // Handle error
                    }
                });
            }
        }
    </script>
    <script>
        $(document).ready(function() {
            // Handle the expired download button click
            $(document).on('click', '.expired-download-btn', function() {
                const id = $(this).data('id'); // Get the ID from the data attribute

                // Set the hidden form action with the ID
                $('#downloadForm').attr('action',
                    "{{ route('numerology.mobile_numerology_auto-download') }}");
                $('#downloadForm').append('<input type="hidden" name="id" value="' + id +
                    '">'); // Add ID as hidden input

                // Submit the form
                $('#downloadForm').submit();
            });
        });
    </script>
@endsection
