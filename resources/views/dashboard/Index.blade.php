
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin KP2MB</title>
  <link rel="icon" type="image/png" href="img/logo-umb.PNG">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('Admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('Admin/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <a class="nav-link active"  href="{{('/login')}}" role="button"><i 
        class="fa fa-sign-out nav-icon">Logout</i>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
  
      <!-- Sidebar Menu -->
      @include('menu.sidebar-left')
      <!-- /.sidebar-menu -->
  
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-12">
          <div class="col-sm-12">
            <h4 class="m-0 text-dark">SISTEM INFORMASI KEUANGAN INVENTARIS 
                KANTOR PROMOSI DAN PENERIMAAN MAHASISWA BARU</h4>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    
    <section class="content">
      <div class="card card-info card-outline">
        <div class="card-body">
          <div class="container-fluid">
            <img src="{{asset('img/001.jpg')}}" height="500" width="1030">
          </div>
        </div>
      </div>
    
    <!-- /.content -->

  <!-- Main Footer -->
  <!-- Main Footer -->
  @include('menu.footer')

<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
@include('menu.script')
</body>
</html>
