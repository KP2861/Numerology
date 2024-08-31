<div class="wrapper">
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('admin/dashboard')}}" class="brand-link">
      <img src="{{ URL::asset('backend/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="logo brand-text font-weight-heavy"><b>Numerology </b><small>Dashboard</small></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ URL::asset('backend/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ route('admin.profile') }}" class="d-block">Welcome, {{ Auth::user()->name ?? 'Guest' }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline" style="background-color:#383B44">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" style="color:#F2F2E3" type="search" aria-label="Search" value="{{ request()->get('search') }}" placeholder="Search..." aria-describedby="button-addon2">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="#" class="nav-link active" id="active" style="background-color:#EFEFDF;">
              <i class="fa fa-user" aria-hidden="true" style="color:#0C0800"></i>
              <p style="color:#0C0800">
                User Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.userList') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User List</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Categories List -->
          <li class="nav-item">
            <a href="#" class="nav-link active" id="active" style="background-color:#EFEFDF;">
              <i class="fa fa-list-alt" aria-hidden="true" style="color:#0C0800"></i>
              <p style="color:#0C0800">
                Numerology Management
                <i class="right fas fa-angle-left" style="color:#0C0800"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('numerology.list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Numerology List</p>
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
</div>
