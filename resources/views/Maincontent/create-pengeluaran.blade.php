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
                <h4 class="card-title">FORM PENGELUARAN DANA</h4>
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
		<div class="card-header">
		<div class="card-body">
        <form action="{{ route('simpan-pengeluaran')}}" method="post">
          {{ csrf_field() }}          
          <div class="form-group">
          <label>Nomor Pengeluaran</label>
              <input type="int" id="id" name="id" class="form-control" placeholder="Nomor Pengeluaran">
          </div>
          <div class="form-group">
          <label>Tanggal Pengeluaran</label>
              <input type="date" id="tanggal" name="tanggal" class="form-control" placeholder="Tanggal Pengeluaran">
          </div>
          <div class="form-grup">
          <label>Pilih Jenis Barang</label>
            <select class="form-control select2" style="width:100%;" name="jenis_id" id="jenis_id">
              <option disabled value>Pilih</option>
              @foreach ($kategoripengeluaran as $item)
              <option value="{{ $item->id }}">{{ $item->nama_kp }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
          <label>Nama Barang</label>
              <input type="text" id="nama_brng" name="nama_brng" class="form-control" placeholder="Nama Barang">
          </div>
          <div class="form-group">
          <label>Jumlah Barang</label>
              <input type="int" id="jumlah_brng" name="jumlah_brng" class="form-control" placeholder="Jumlah Barang">
          </div>
          <div class="form-group">
          <label>Satuan Barang</label>
              <input type="text" id="satuan_brng" name="satuan_brng" class="form-control" placeholder="Satuan Barang">
          </div>
          <div class="form-group">
          <label>Harga Barang</label>
              <input type="int" id="harga_brng" name="harga_brng" class="form-control" placeholder="Harga Barang (Rp)">
          </div>
          <label>Sub Total</label>
          <div class="form-group">
              <input type="int" id="sub_total" name="sub_total" class="form-control" placeholder="Sub Total">
          </div>
          <div class="form-group">
          <label>Keterangan</label>
              <input type="text" id="ket" name="ket" class="form-control" placeholder="Keterangan">
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