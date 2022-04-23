<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('Gambar/binus.png')}}" alt="AdminLTE Logo" class="brand-image elevation-3" style="">
      <span class="brand-text font-weight-light">SISFOM</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('Gambar/winwin.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <b><a href="#" class="d-block">{{auth()->user()->name}}</a></b>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Kepegawaian
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <!-- pengkondisian sidebar, user login = level admin -> semua dropdown muncul
              pengkondisian sidebar, user login = level user -> dropdown hanya muncul yang presensi -->  
              @if (auth()->user()->level=="admin")
              <li class="nav-item">
                <a href="{{route('halaman-satu')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Catatan Kehadiran</p>
                </a>
              </li>
              @endif
              <li class="nav-item">
                <a href="{{route('halaman-dua')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Presensi</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{route('logout')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>