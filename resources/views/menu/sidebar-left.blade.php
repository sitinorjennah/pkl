<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="" class="brand-link">
  <img src="img/logo-umb.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">UMBJM</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
      <img src="{{asset('img/user.png')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">ADMIN</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open">
        <a href="#" class="nav-link active">
              <i class=" "></i>
              <p>
                Menu
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{route('Inventaris')}}" class="nav-link active">
                  <i class="fas fa-th-list nav-icon"></i>
                  <p>INVENTARIS </p>
                </a>
              </li>
              <li class="nav-item">
              <a href="{{route('Kategori-Pemasukan')}}" class="nav-link active">
                  <i class="fas fa-clipboard-list nav-icon"></i>
                  <p>SUMBER DANA</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="{{route('Kategori-Pengeluaran')}}" class="nav-link active">
                  <i class="fas fa-clipboard-list nav-icon"></i>
                  <p>JENIS BARANG</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="{{route('danamasuk')}}" class="nav-link active">
                  <i class="fa fa-plus-circle nav-icon"></i>
                  <p>TRANSAKSI PEMASUKAN</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="{{route('pengeluaran')}}" class="nav-link active">
                  <i class="fa fa-minus-circle nav-icon"></i>
                  <p>TRANSAKSI PENGELUARAN</p>
                </a>
              </li>
              
           </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  <!-- /.sidebar -->
</aside>