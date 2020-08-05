<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
 @include('menu.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
@include('menu.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('menu.sidebar-left')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- /.content-header -->

    <!-- Main content -->
   <!-- ISI CONTENT-->
   <!-- Main content -->
   <div class="content">
    <div class="card card-info card-outline">
      <div class="card-header">
       <h3> Edit Kategori</h3>
        </div>
      <div class="card-body">
        <form action="{{ url('update-kategori', $editkategori->id_kate)}}" method="post">
          {{ csrf_field() }}
          <div class="form-group">
              <input type="text" id="nama_kategori" name="nama_kategori" class="form-control" placeholder="Nama Kategori" value="{{ $editkategori->nama_kategori}}">
          </div>
          <div class="form-group">
              <button type="submit" class="btn btn-primary">Ubah Data</button>
          </div>
        </form>
        </div>
    </div> 
  </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  @include('menu.footer')
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
@include('menu.script')
</body>
</html>