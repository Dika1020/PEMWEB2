<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('admin') }}" class="brand-link">
        <img src="{{ asset('assets/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Perpustakaan-app</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
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
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ url('/admin') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            DASHBOARD
                        </p>
                    </a>
                </li>
                <li class="nav-header">INFORMATION</li>
                <li class="nav-item">
                    <a href="{{ url('admin/jabatan') }}" class="nav-link">
                        <i class="nav-icon fas fa-briefcase"></i>
                        <p>
                            POSITIONS
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/employees') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            EMPLOYEES
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/users') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            USERS
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/members') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            MEMBERS
                        </p>
                    </a>
                </li>
                <li class="nav-header">BOOKS</li>
                <li class="nav-item">
                    <a href="{{ url('admin/books') }}" class="nav-link">
                        <i class="nav-icon fas fa-book-open"></i>
                        <p>
                            BOOKS
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/genres') }}" class="nav-link">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            GENRES
                        </p>
                    </a>
                </li>
                <li class="nav-header">LOG OUT</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa bi-box-arrow-right"></i>
                        <p>
                            LOG OUT
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
