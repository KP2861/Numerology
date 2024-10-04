<div class="wrapper">
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ url('admin/dashboard') }}" class="brand-link">
            <img src="{{ URL::asset('backend/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="logo brand-text font-weight-heavy"><b>Numerology </b><small>Dashboard</small></span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ URL::asset('backend/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                        alt="User Image">
                </div>
                <div class="info">
                    <a href="{{ route('admin.profile') }}" class="d-block">Welcome,
                        {{ Auth::user()->name ?? 'Guest' }}</a>
                </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline" style="background-color:#383B44">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" style="color:#F2F2E3" type="search"
                        aria-label="Search" value="{{ request()->get('search') }}" placeholder="Search..."
                        aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
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
                                <a href="{{ route('name_numerology.list') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Name Numerology</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('phone_numerology.list') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Phone Numerology</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('advance_numerology.list') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Advance Numerology</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('bussiness_numerology.list') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Business Numerology</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    {{-- Articles --}}
                    <li class="nav-item">
                        <a class="nav-link active" id="active" style="background-color:#EFEFDF;">
                            <i class="fas fa-newspaper" aria-hidden="true" style="color:#0C0800"></i>
                            <p style="color:#0C0800">
                                Article Management
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.articles.list') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Articles List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.articles.create') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add Article</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    {{-- Article Category --}}
                    <li class="nav-item">
                        <a class="nav-link active" id="active" style="background-color:#EFEFDF;">
                            <i class="fas fa-tags" aria-hidden="true" style="color:#0C0800"></i>
                            <p style="color:#0C0800">
                                Article Category Management
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.articles.category.list') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Article Category List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.articles.category.create') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add Article Category</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    {{-- Settings --}}
                    <li class="nav-item">
                        <a class="nav-link active" id="active" style="background-color:#EFEFDF;">
                            <i class="fas fa-cog" aria-hidden="true" style="color:#0C0800"></i>
                            <p style="color:#0C0800">
                                Settings
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.pdfTemplates.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>PDF Templates</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('admin.products.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Products</p>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" id="active" style="background-color:#EFEFDF;">
                            <i class="fas fa-user-tie" aria-hidden="true" style="color:#0C0800"></i>
                            <p style="color:#0C0800">
                                Consultant Management
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.consultants.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Consultants List</p>
                                </a>
                            </li>
                            {{-- <li class="nav-item">
                                <a href="{{ route('admin.consultants.create') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add Consultant</p>
                                </a>
                            </li> --}}
                        </ul>
                    </li>


                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
</div>
