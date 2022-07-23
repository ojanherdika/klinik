
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
            <h1 class="m-0">Data Wilayah</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ul class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Data Wilayah</li>
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
            <div class="card-tools">
                <a href="{{route('wilayah.create')}}"class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Nama Wilayah</th>
                    <th>Alanat Wilayah</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach ($dataWilayah as $data)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->nama_wilayah}}</td>
                    <td>{{$data->alamat_wilayah}}</td>
                    <td>
                        <a href="{{route('wilayah.edit',$data->id)}}"><i class="btn btn-primary">Edit</i></a>
                    </td>
                        <td> <form method='POST'action="{{ route('wilayah.destroy', $data->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form></td>
                </tr>
                @endforeach
            </table>
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
