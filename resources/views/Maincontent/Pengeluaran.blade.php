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
                <h4 class="card-title">KATEGORI PEMASUKAN</h4>
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
			<div class="card-tools">
				<a href="{{ route('create-pengeluaran')}}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
			</div>
		</div>
		<div class="card-body">
          <table class="table table-bordered">                  
                  <tr>
                      <th><center>NO.</center></th>
                      <th><center>NO. Pengeluaran</center></th>
                      <th><center>Tanggal</center></th>
                      <th><center>Jenis Barang</center></th>
                      <th><center>Nama Barang</center></th>
                      <th><center>Jumlah Barang </center></th>
                      <th><center>Satuan Barang</center></th>
                      <th><center>Harga Barang (Rp)</center></th>
                      <th><center>Sub Total (Rp)</center></th>
                      <th><center>Keterangan</center></th>
                  </tr>
                  @foreach ($pengeluaran as $item)
                  
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$item->id}}</td>
                      <td>{{$item->tanggal}}</td>
                      <td>{{$item->kategoripengeluaran->nama_kp}}</td>
                      <td>{{$item->nama_brng}}</td>
                      <td>{{$item->jumlah_brng}}</td>
                      <td>{{$item->satuan_brng}}</td>
                      <td>{{$item->harga_brng}}</td>
                      <!-- <td>{{$item->sub_total}}</td> -->
                      <td>{{$item->ket}}</td>
                    </tr>
                    @endforeach
            </table>
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