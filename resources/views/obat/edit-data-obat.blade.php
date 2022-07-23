
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  @include('layout.header')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('layout.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
@include('layout.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Data Obat</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ul class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Data Obat</li>
            </ul>
          </div>

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="card card-info card-outline">
        <div class="card-header">
            <h3>Edit Data Obat</h3>
        </div>
        <div class="card-body">
            <form action="{{route('obat.update',$obat->id)}}" method="POST">
                {{ csrf_field() }}
                @method('PUT')
                <div class="form-group">
                    <input type="text" name="nama_obat" class="form-control" placeholder="Masukan Nama Obat" value="{{$obat->nama_obat}}">
                </div>
                <div class="form-group">
                    <input type="text" name="jenis_obat" class="form-control" placeholder="Masukan Jenis Obat"value="{{$obat->jenis_obat}}">
                </div>
                <div class="form-group">
                    <input type="text" name="kegunaan" class="form-control" placeholder="Masukan Kegunaan Obat" value="{{$obat->kegunaan}}">
                </div>
                <div class="form-group">
                    <input type="text" name="efek" class="form-control" placeholder="Masukan Efek Obat" value="{{$obat->efek}}">
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

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
   @include('layout.footer')
  </footer>
</div>
<!-- ./wrapper -->

@include('layout.script')
</body>
</html>
