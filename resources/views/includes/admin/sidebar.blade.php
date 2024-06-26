<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Dashboard</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Heading -->
    <div class="sidebar-heading">
        Master
    </div>
    <!-- Nav Item - Charts -->

    <li class="nav-item">
        <a class="nav-link" href="{{route('dashboard')}}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{route('user')}}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>User</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('data.pendaftar')}}">
            <i class="fas fa-fw fa-table"></i>
            <span>Pendaftar</span></a>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>