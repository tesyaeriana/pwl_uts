
<div class="sidebar" >
  <style>
    .main-sidebar { background-color: #89375F !important }
  </style>
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Admin</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
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
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="{{url('/home')}}" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Home</p>
          </a>
         
        <li class="nav-item">
          <a href="{{url('/karyawan')}}" class="nav-link">
            <i class="nav-icon fas fa-solid fa-user"></i>
            <p>
              Karyawan 
            </p>
          </a>
        </li>
       <li class="nav-item">
          <a href="{{url('/produk')}}" class="nav-link">
            <i class="nav-icon fas fa-solid fa-list"></i>
            <p>
              Produk 
            </p>
          </a>
        </li> 
        </li>
        <li class="nav-item">
          <a href="{{url('/pelanggan')}}" class="nav-link">
            <i class="nav-icon fas fa-sharp fa-solid fa-users"></i>
            <p>
              Pelanggan 
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('/jadwal')}}" class="nav-link">
            <i class="nav-icon fas fa-sharp fa-regular fa-calendar-week"></i>
            <p>
              Jadwal 
            </p>
          </a>
        </li>
       
        
        
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>