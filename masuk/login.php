<?php

    include 'conf.php';

    session_start();

    if (isset($_POST['login'])){

        $username=$_POST['username'];
        $password=$_POST['password'];

        if ($username&&$password) {

                $password=md5($password);
                $sql_get = mysqli_query($conf, "SELECT * FROM user WHERE username='$username' AND password='$password'");
                $num_row = mysqli_num_rows($sql_get);
                $data = mysqli_fetch_assoc($sql_get);

                if ($num_row == 1) {
                    $password=md5($password);

                    $_SESSION['nama']=$data['nama'];
                    $_SESSION['login']=TRUE;

                    echo "
                    <script>
                    alert('login berhasil');
                    window.location='register2.php';
                    </script>
                    ";
                    
                }else{
                    echo "
                    <script>
                    alert('maaf, login gagal, silahkan coba lagi');
                    </script>
                    ";
                }

        }else {
            echo "
            <script>
            alert('maaf, form tidak boleh kosong');
            </script>
            ";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ZIFA | Login</title>

    <!-- for title img -->
    <link rel="shortcut icon" type="image/icon" href="../dist/img/Masjid.png" />
    <!-- Google Font: Source Sans Pro -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
    />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css" />
    <!-- icheck bootstrap -->
    <link
      rel="stylesheet"
      href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css"
    />
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css" />
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <!-- /.login-logo -->
      <div class="card card-outline card-primary">
        <div class="card-header text-center">
          <a href="#" class="h1"><b>ZIFA</b>pro</a>
        </div>
        <div class="card-body">
          <p class="login-box-msg">Sign in to start your session</p>

          <form action="#" method="post">
            <div class="input-group mb-3">
              <input
                type="text"
                name="username"
                class="form-control"
                placeholder="username"
              />
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input
                type="password"
                name="password"
                class="form-control"
                placeholder="Password"
              />
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-8">
                <a href="registrasi.php" class="text-center"
                  >Register a new membership</a
                >
              </div>
              <!-- /.col -->
              <div class="col-4">
                <button
                  type="submit"
                  name="login"
                  class="btn btn-primary btn-block"
                >
                  Sign In
                </button>
              </div>
              <!-- /.col -->
            </div>
          </form>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
  </body>
</html>
