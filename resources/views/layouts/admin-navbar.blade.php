<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="index3.html" class="nav-link">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link">Contact</a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Navbar Search -->
    <li class="nav-item">
      <a class="nav-link" data-widget="navbar-search" href="#" role="button">
        <i class="fas fa-search"></i>
      </a>
      <div class="navbar-search-block">
        <form class="form-inline">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
              <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </li>

    <!-- Messages Dropdown Menu -->
    
    <!-- Notifications Dropdown Menu -->
    
    <li class="nav-item">
      <a class="nav-link" data-widget="fullscreen" href="#" role="button">
        <i class="fas fa-expand-arrows-alt"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
        <i class="fas fa-th-large"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" role="button">
        <i class=""><img src="https://img.icons8.com/cotton/24/000000/shutdown--v1.png"/> Logout</i>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
      </a>
    </li>
  </ul>
</nav>
  <!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="https://img.icons8.com/office/80/000000/survey.png" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Survey Project</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ Auth::user()->avatar }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
      </div>
    </div>

    

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item {{ request()->is('admin/dashboard') ? 'menu-open' : '' }}{{ request()->is('admin/profile') ? 'menu-open' : '' }}">
          <a href="#" class="nav-link ">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Admin
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('admin_dashboard')}}" class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('admin_profile')}}" class="nav-link {{ request()->is('admin/profile') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Profile</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Update Profile</p>
              </a>
            </li>
          </ul>
        </li>
        
        <li class="nav-item {{ request()->is('admin/add-staff') ? 'menu-open' : '' }}
          {{ request()->is('admin/staffs') ? 'menu-open' : '' }}">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>
              Manage Staff
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            
            <li class="nav-item">
              <a href="{{route('add_staff')}}" class="nav-link {{ request()->is('admin/add-staff') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Staff</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('show_staffs')}}" class="nav-link {{ request()->is('admin/staffs') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Show Staffs</p>
              </a>
            </li>
          </ul>
        </li>



        <li class="nav-item {{ request()->is('admin/pollName') ? 'menu-open' : '' }}{{ request()->is('admin/surveyName') ? 'menu-open' : '' }}">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>
              Manage Survey
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            
            <li class="nav-item">
              <a href="{{route('surveyName')}}" class="nav-link  {{ request()->is('admin/surveyName') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Survey</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('pollName')}}" class="nav-link {{ request()->is('admin/pollName') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Poll</p>
              </a>
            </li>
          </ul>
        </li>
        {{-- <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Simple New Link
              <span class="right badge badge-danger">New</span>
            </p>
          </a>
        </li> --}}
        <li class="nav-item">
          <a href="{{route('checkout')}}" class="nav-link {{ request()->is('admin/checkout') ? 'active' : '' }}">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Checkout
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>