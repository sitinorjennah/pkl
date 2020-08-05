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
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <div class="card-header">
                <h4 class="card-title">FORM PEMASUKAN DANA</h4>
              </div>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
   <!-- ISI CONTENT-->
   <!-- Main content -->
   <div class="content">
    <div class="card card-info card-outline">
		<div class="card-header">		</div>
		<div class="card-body">
        <div class="card-body">
        <form action="{{ route('simpan-pemasukan')}}" method="post">
          {{ csrf_field() }}
          <div class="form-group">
          <label>Nomor Pemasukan</label>
              <input type="int" id="id_dana" name="id_dana" class="form-control" placeholder="No. Pemasukan">
          </div>
          <div class="form-grup">
          <label>Pilih Kategori</label>
            <select class="form-control select2" style="width:100%;" name="kategoripemasukan_id" id="kategoripemasukan_id">
              <option disabled value>Pilih Kategori</option>
              @foreach ($kategoripemasukan as $item)
              <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
          <label>Jumlah Dana</label>
              <input type="int" id="jumlah_dana" name="jumlah_dana" class="form-control" placeholder="Jumlah Dana (Rp)">
          </div>
          <div class="form-group">
          <div class="form-group">
          <label>Keterangan</label>
              <input type="text" id="ket" name="ket" class="form-control" placeholder="Keterangan">
          </div>
          <label>Pengeluaran</label>
              <input type="int" id="pengeluaran" name="pengeluaran" class="form-control" placeholder="Pengeluaran">
          </div>
          <div class="form-group">
              <button type="submit" class="btn btn-success">Tambah Data</button>
          </div>
        </form>
        </div>
        </div>
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