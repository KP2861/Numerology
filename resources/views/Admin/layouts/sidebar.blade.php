<!-- resources/views/Admin/layouts/sidebar.blade.php -->
<div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-dark text-white p-3" id="sidebar">
        <h4>Sidebar</h4>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ url('admin/user/list') }}">Users</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('numerology.list') }}">Numerology</a>
            </li>
        </ul>
    </div>
    <!-- /#sidebar -->
</div>
