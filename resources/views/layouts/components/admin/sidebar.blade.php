<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">Admin Sumbing</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0" />

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
      <a class="nav-link" href="{{ url('/admin/dashboard') }}">
      {{-- <a class="nav-link" href="{{ route('dashboard') }}"> --}}
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a
      >
    </li>
    @can('admin')
    <li class="nav-item">
      <a class="nav-link" href="{{  url('/admin/account') }}">
        <i class="bi bi-person-fill"></i>
        <span>Account</span></a
      >
    </li>
    @endcan

    <!-- Divider -->
    <hr class="sidebar-divider" />

    <!-- Heading -->
    <div class="sidebar-heading">Desa</div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link" href="{{ url('admin/berita') }}">
        <i class="bi bi-newspaper"></i>
        <span>Berita Terbaru</span></a
      >

    <!-- Divider -->
    <hr class="sidebar-divider" />

    <!-- Heading -->
    <div class="sidebar-heading">Addons</div>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
      <a class="nav-link" href="tables.html">
        <i class="fas fa-fw fa-table"></i>
        <span>Tables</span></a
      >
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block" />

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
  </ul>