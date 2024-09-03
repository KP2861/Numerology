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
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>

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
        $("#userTable").DataTable({
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
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                { data: 'name', name: 'name' },
                { data: 'email', name: 'email' },
                { data: 'created_at', name: 'created_at' }
            ],
            buttons: [
                'copy', 
                'csv', 
                'excel', 
                'pdf', 
                'print', 
                'colvis'
            ],
            dom: 'Bfrtip' 
        }).buttons().container().appendTo('#userTable_wrapper .col-md-6:eq(0)');
    });
</script>
@endsection
