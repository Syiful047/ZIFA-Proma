<?php

include 'konek_reg.php';

if (isset($_POST['kirim'])) {
    $nama_masjid    = $_POST['nama_masjid'];   
    $kecamatan      = $_POST['kecamatan'];
    $kelurahan      = $_POST['kelurahan'];
    $deskripsi_fasilitas = $_POST['deskripsi_fasilitas'];
    $nama_pengurus  = $_POST['nama_pengurus'];
    $no_hp          = $_POST['no_hp'];
    $email          = $_POST['email'];
    $alamat_web     = $_POST['alamat_web'];
    $alamat_lengkap = $_POST['alamat_lengkap'];
    $latitude       = $_POST['latitude'];

    $simpan = "INSERT INTO db_regis(nama_masjid,kecamatan,kelurahan,
        deskripsi_fasilitas,nama_pengurus,no_hp,email,alamat_web,alamat_lengkap,latitude)
        VALUES('$nama_masjid','$kecamatan','$kelurahan','$deskripsi_fasilitas',
        '$nama_pengurus','$no_hp','$email','$alamat_web','$alamat_lengkap','$latitude')";

    $result = mysqli_query($conn,$simpan);

    if ($result) {
        echo "<script>
        alert('Data Telah Berhasil Di Simpan');
        window.localhost='register.php'</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ZIFA</title>

    <!-- for title img -->
    <link rel="shortcut icon" type="image/icon" href="../dist/img/Masjid.png" />
    <!-- Google Font: Source Sans Pro -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
    />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css" />
    <!-- Ionicons -->
    <link
      rel="stylesheet"
      href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"
    />
    <!-- Tempusdominus Bootstrap 4 -->
    <link
      rel="stylesheet"
      href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"
    />
    <!-- iCheck -->
    <link
      rel="stylesheet"
      href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css"
    />
    <!-- JQVMap -->
    <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css" />
    <!-- overlayScrollbars -->
    <link
      rel="stylesheet"
      href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css"
    />
    <!-- Daterange picker -->
    <link
      rel="stylesheet"
      href="../plugins/daterangepicker/daterangepicker.css"
    />
    <!-- summernote -->
    <link
      rel="stylesheet"
      href="../plugins/summernote/summernote-bs4.min.css"
    />
    <!-- icon boostrap -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"
    />
  </head>
  <body class="hold-transition sidebar-mini layout-fixed" 
        style="font-family: 'Teko', sans-serif; background-color: aliceblue">
    <div class="wrapper">
      <!-- Preloader -->
      <div
        class="preloader flex-column justify-content-center align-items-center"
      >
        <img
          class="animation__shake"
          src="../dist/img/Masjid.png"
          alt="ZIFLogo"
          height="60"
          width="60"
        />
      </div>

      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"
              ><i class="fas fa-bars"></i
            ></a>
          </li>
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
            <a
              class="nav-link"
              data-widget="navbar-search"
              href="#"
              role="button"
            >
              <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
              <form class="form-inline">
                <div class="input-group input-group-sm">
                  <input
                    class="form-control form-control-navbar"
                    type="search"
                    placeholder="Search"
                    aria-label="Search"
                  />
                  <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                      <i class="fas fa-search"></i>
                    </button>
                    <button
                      class="btn btn-navbar"
                      type="button"
                      data-widget="navbar-search"
                    >
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

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
          <img
            src="../dist/img/Masjid.png"
            alt="ZIFA Logo"
            class="brand-image img-circle elevation-3"
            style="opacity: 0.8"
          />
          <span class="brand-text font-weight-light">ZIFA</span>
        </a>
        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img
                src="../dist/img/avatar5.png"
                class="img-circle elevation-2"
                alt="User Image"
              />
            </div>
            <div class="info">
              <a href="../masuk/register2.php" class="d-block">Admin ZIFA</a>
            </div>
          </div>

          <!-- SidebarSearch Form -->
          <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
              <input
                class="form-control form-control-sidebar"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <div class="input-group-append">
                <button class="btn btn-sidebar">
                  <i class="fas fa-search fa-fw"></i>
                </button>
              </div>
            </div>
          </div>
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul
              class="nav nav-pills nav-sidebar flex-column"
              data-widget="treeview"
              role="menu"
              data-accordion="false"
            >
              <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Masjid
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../berita_admin/admin1.php" class="nav-link">
                      <i class="nav-icon fas bi bi-info-square-fill"></i>
                      <p>Berita</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../daftar_masjid/admin.php" class="nav-link">
                    <i class="nav-icon fas bi bi-book-half"></i>
                      <p>Daftar</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas bi bi-r-square-fill"></i>
                      <p>Registrasi</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../masuk/login.php" class="nav-link">
                      <i class="nav-icon fas fa-sign-out-alt"></i>
                      <p>Logout</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <!-- Form Registrasi Masjid -->
          <div class="card card-active">
            <div class="col">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="../data/daftar.html">Home</a></li>
                <li class="breadcrumb-item"><a href="../masuk/register2.php">Admin</a></li>
                <li class="breadcrumb-item active">Kelola Masjid</li>
              </ol>
            </div>
            <!-- /.col -->
            <!-- form start -->
            <form
              class="form-horizontal"
              action="#"
              method="POST"
            >
              <div class="card-body">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Nama Masjid</label>
                  <div class="col-sm-10">
                    <input
                      type="text"
                      class="form-control"
                      name="nama_masjid"
                      id="inputEmail3"
                      placeholder="Enter Nama Masjid"
                    />
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Kecamatan</label>
                  <label class="col-sm-4 col-form-label">
                    <select
                      class="form-control select2"
                      name="kecamatan"
                      style="width: 100%"
                    >
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
                  <label class="col-sm-2 col-form-label">Kelurahan</label>
                  <label class="col-sm-4 col-form-label">
                    <select
                      class="form-control select2"
                      name="kelurahan"
                      style="width: 100%"
                    >
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
                  <label class="col-sm-2 col-form-label"
                    >Deskripsi Fasilitas</label
                  >
                  <div class="col-sm-10">
                    <textarea
                      class="form-control"
                      name="deskripsi_fasilitas"
                      id=""
                      cols="30"
                      rows="3"
                      placeholder="Enter Deskripsi Fasilitas"
                    ></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label"
                    >Nama Pengurus DKM</label
                  >
                  <div class="col-sm-10">
                    <input
                      type="text"
                      class="form-control"
                      name="nama_pengurus"
                      id="inputEmail3"
                      placeholder="Enter Nama Pengurus DKM"
                    />
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">No Hp</label>
                  <div class="col-sm-10">
                    <input
                      type="number"
                      class="form-control"
                      name="no_hp"
                      id="inputEmail3"
                      placeholder="Enter No Hp"
                    />
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input
                      type="email"
                      class="form-control"
                      name="email"
                      id="inputEmail3"
                      placeholder="Enter Email"
                    />
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Alamat Web</label>
                  <div class="col-sm-10">
                    <input
                      type="text"
                      class="form-control"
                      name="alamat_web"
                      id="inputEmail3"
                      placeholder="Enter Alamat Web. http//......"
                    />
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Alamat Lengkap</label>
                  <div class="col-sm-10">
                    <textarea
                      class="form-control"
                      name="alamat_lengkap"
                      id=""
                      cols="30"
                      rows="2"
                      placeholder="Enter Alamat Lengkap"
                    ></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label"
                    >Latitude, Longitude</label
                  >
                  <div class="col-sm-10">
                    <input
                      type="text"
                      class="form-control"
                      name="latitude"
                      id="inputEmail3"
                      placeholder="Enter Latitude, Longitude"
                    />
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" name="kirim" class="btn btn-primary">
                  Simpan
                </button>
                <button type="reset" name="reset" class="btn btn-primary">
                  Update
                </button>
              </div>
              <!-- /.card-footer -->
            </form>
          </div>
        </div>
      </div>
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
    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge("uibutton", $.ui.button);
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
