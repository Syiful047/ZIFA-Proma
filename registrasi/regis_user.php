<?php

include 'konek_reg.php';

if (isset($_POST['kirim'])) {
    $nama_masjid    = $_POST['nama_masjid'];   
    $kecamatan      = $_POST['kecamatan'];
    $kelurahan      = $_POST['kelurahan'];
    $deskripsi      = $_POST['deskripsi'];
    $nama_pengurus  = $_POST['nama_pengurus'];
    $no_hp          = $_POST['no_hp'];
    $email          = $_POST['email'];
    $alamat_web     = $_POST['alamat_web'];
    $alamat_lengkap = $_POST['alamat_lengkap'];
    $latitude       = $_POST['latitude'];

    $simpan = "INSERT INTO db_regis_user(nama_masjid,kecamatan,kelurahan,
        deskripsi,nama_pengurus,no_hp,email,alamat_web,alamat_lengkap,latitude)
        VALUES('$nama_masjid','$kecamatan','$kelurahan','$deskripsi',
        '$nama_pengurus','$no_hp','$email','$alamat_web','$alamat_lengkap','$latitude')";

    $result = mysqli_query($conn,$simpan);

    if ($result) {
        echo "<script>
        alert('Data Telah Berhasil Di Simpan');
        window.localhost='regis_user.php'</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ZIFA</title>

  <!-- for title img -->
  <link rel="shortcut icon" type="image/icon" href="../dist/img/Masjid.png"/>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
  <!-- icon boostrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body class="hold-transition sidebar-mini layout-top-nav" 
      style="font-family: 'Teko', sans-serif; background-color: aliceblue">
<div class="wrapper">
  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../dist/img/Masjid.png" alt="ZIFLogo" height="60" width="60">
  </div>
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand ">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../data/daftar.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../berita/index.html" class="nav-link">Berita</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../daftar/index2.html" class="nav-link">Data Masjid</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../registrasi/regis_user.php" class="nav-link">Registrasi</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../tentang kami/index.html" class="nav-link">Tentang Kami</a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" href="../masuk/login.php">Login</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Daftar Masjid</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../berita/index.html">Home</a></li>
              <li class="breadcrumb-item"><a href="../masuk/register2.php">Admin</a></li>
              <li class="breadcrumb-item active">Kelola Masjid</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
        
        <fieldset style="border: 2px solid black">
        <div class="card-body">
            <h3 class="m-0">Form Registrasi Masjid</h3>
        </div>
        <!-- form start -->
        <form class="form-horizontal" action="#" method="POST">
            <div class="card-body">
                <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Masjid</label>
                <div class="col-sm-10">
                    <input type="text" name="nama_masjid" class="form-control" placeholder="Enter Nama Masjid">
                </div>
                </div>
                <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Kecamatan</label>
                    <label class="col-sm-2 col-form-label">
                    <select class="form-control select2" name="kecamatan" style="width: 100%;">
                    <option selected="selected">
                        <<<----Pilih Kecamatan---->>>
                      </option>
                      <option>Beji</option>
                      <option>Pancora</option>
                      <option>Cipayung</option>
                      <option>Sukma Jaya</option>
                      <option>Cilodong</option>
                      <option>Limo</option>
                      <option>Cinera</option>
                      <option>Cimanggis</option>
                      <option>Tapos</option>
                      <option>Sawangan</option>
                      <option>Bojong Sari</option>
                    </select>
                    </label>
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Kelurahan</label>
                    <label class="col-sm-2 col-form-label">
                    <select class="form-control select2" name="kelurahan" style="width: 100%;">
                      <option selected="selected">
                        <<<----Pilih Kelurahan---->>>
                      </option>
                      <option>Kelurahan Tapos</option>
                      <option>Kelurahan Sukatani</option>
                      <option>Kelurahan Sukamaju Baru</option>
                      <option>Kelurahan Leuwinanggung</option>
                      <option>Kelurahan Jatijajar</option>
                      <option>Kelurahan Cilangkap</option>
                      <option>Kelurahan Tirtajaya</option>
                      <option>Kelurahan Sukmajaya</option>
                      <option>Kelurahan Mekarjaya</option>
                      <option>Kelurahan Cisalak</option>
                      <option>Kelurahan Baktijaya</option>
                      <option>Kelurahan Abadijaya</option>
                      <option>Jika tidak ada di atas Silahkan tulis di Alamat Lengkap</option>
                    </select>
                </label>
                </div>
                <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Deskripsi Fasilitas</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="deskripsi" id="" cols="30" rows="4" placeholder="Enter Deskripsi Fasilitas"></textarea>
                </div>
                </div>
                <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Pengurus DKM</label>
                <div class="col-sm-10">
                    <input type="text" name="nama_pengurus" class="form-control" placeholder="Enter Nama Pengurus DKM">
                </div>
                </div>
                <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">No Hp</label>
                    <div class="col-sm-10">
                    <input type="text" name="no_hp" class="form-control" placeholder="Enter No Hp">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" name="email" class="form-control" placeholder="Enter Email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat Web</label>
                    <div class="col-sm-10">
                      <input type="text" name="alamat_web" class="form-control" placeholder="Enter Alamat Web. http//......">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat Lengkap</label>
                    <div class="col-sm-10">
                      <input type="text" name="alamat_lengkap" class="form-control" placeholder="Enter Alamat Lengkap">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Latitude, Longitude</label>
                    <div class="col-sm-10">
                      <input type="text" name="latitude" class="form-control" placeholder="Enter Latitude, Longitude">
                    </div>
                </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="kirim" class="btn btn-primary">Simpan</button>
                  <button type="submit" name="reset" class="btn btn-primary">Update</button>
                </div>
        </form>
        </fieldset>
      </div>
    </div><!-- /.container-fluid -->
  </div>
 <!-- /.content -->
</div>
  <!-- /.content-wrapper -->
  <footer class="main-footer pl-2 pr-2">
      <strong
        >Copyright &copy; 2022-2023
        <a href="https://adminlte.io">ZIFA.io</a>.</strong
      >
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
      </div>
    </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
</body>
</html>
