<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-user"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ 'admin' ==request()->path()? 'active' :''}}">
        <a class="nav-link" href="/admin">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ '/admin/home' ==request()->path()? 'active' :''}}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Settings</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Setting Komponen:</h6>
                <a class="collapse-item" href="/admin/home">Home</a>
                <a class="collapse-item" href="/admin/about/1/edit">About</a>
            </div>
        </div>
    </li>


    <!-- Nav Item - Galeri -->
    <li class="nav-item {{ '/admin/galeri' ==request()->path()? 'active' :''}}">
        <a class="nav-link" href="/admin/galeri">
            <i class="fas fa-fw fa-images"></i>
            <span>Galeri</span></a>
    </li>

    <!-- Nav Item - Team -->
    <li class="nav-item {{ '/admin/penghuni' ==request()->path()? 'active' :''}}">
        <a class="nav-link" href="/admin/penghuni">
            <i class="fas fa-fw fa-users"></i>
            <span>Data Penghuni</span></a>
    </li>

    <!-- Nav Item - Team -->
    <li class="nav-item {{ '/admin/team' ==request()->path()? 'active' :''}}">
        <a class="nav-link" href="/admin/contact">
            <i class="fas fa-fw fa-comment"></i>
            <span>Pesan</span></a>
    </li>

    <!-- Nav Item - Team -->
    <li class="nav-item {{ '/admin/agenda' ==request()->path()? 'active' :''}}">
        <a class="nav-link" href="/admin/agenda">
            <i class="fas fa-fw fa-folder"></i>
            <span>Agenda</span></a>
    </li>
    <!-- Nav Item - Team -->
    <li class="nav-item {{ '/admin/agenda' ==request()->path()? 'active' :''}}">
        <a class="nav-link" href="/admin/user">
            <i class="fas fa-fw fa-user"></i>
            <span>Data Admin</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->