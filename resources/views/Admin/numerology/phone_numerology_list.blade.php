@extends('Admin.layouts.app')

@section('content')
<h1 class="mb-4">Phone Numerology List</h1>
<table id="myTable" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>#</th> <!-- Index column -->
            <th>Phone Number</th>
            <th>Date of Birth</th>
            <th>Area of Concern</th>
            <th>User Name</th>
            <th>User Email</th>
            <th>Action</th>
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
        $("#myTable").DataTable({
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
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                { data: 'phone_number', name: 'phone_number' },
                { data: 'dob', name: 'dob' },
                { data: 'area_of_concern', name: 'area_of_concern' },
                { data: 'user_name', name: 'user_name' },
                { data: 'user_email', name: 'user_email' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ],
            buttons: [
                'copy', 
                'csv', 
                'excel', 
                'pdf', 
                'print', 
                'colvis'
            ]
        }).buttons().container().appendTo('#myTable_wrapper .col-md-6:eq(0)');
    });
</script>
@endsection
