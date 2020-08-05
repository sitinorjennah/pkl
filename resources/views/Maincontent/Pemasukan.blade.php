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
                <h4 class="card-title">PEMASUKAN DANA</h4>
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
				<a href="{{ route('create-pemasukan')}}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
			</div>
		</div>
		<div class="card-body">
          <table class="table table-bordered">                  
                  <tr>
                      <th><center>NO.</center></th>
                      <th><center>No.Pemasukan</center></th>
                      <th><center>Kategori</center></th>
                      <th><center>Jumlah Dana (Rp) </center></th>
                      <th><center>Pengeluaran (Rp)</center></th>
                      <th><center>Saldo</center></th>
                  </tr>
                  @foreach ($danamasuk as $item)
                  
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$item->id_dana}}</td>
                      <td>{{$item->kategoripemasukan->nama_kategori}}</td>
                      <td>{{$item->jumlah_dana}}</td>
                      <td>{{$item->pengeluaran}}</td>               
                      
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