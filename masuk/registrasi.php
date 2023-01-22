<?php

include 'conf.php';

if (isset($_POST['registrasi'])){

    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $confirm=$_POST['confirm'];

    if ($fullname&&$email&&$username&&$password&&$confirm) {

        if ($password == $confirm) {

            $sql_get = mysqli_query($conf, "SELECT * FROM user WHERE username='$username'");
            $num_row = mysqli_num_rows($sql_get);

            if ($num_row == 0) {
                $password=md5($password);
                $sql_insert = mysqli_query($conf, "INSERT INTO user VALUES ('', '$fullname', '$email', '$username', '$password')");
                echo "
                <script>
                alert('pendaftaran berhasil');
                </script>
                ";
                
            }else{
                echo "
                <script>
                alert('maaf, username sudah terdaftar sebelumnya');
                </script>
                ";
            }

        }else {
        echo "
        <script>
        alert('maaf, password tidak sama');
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
    <title>ZIFA | Registration</title>

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
  <body class="hold-transition register-page" 
        style="font-family: 'Teko', sans-serif; background-color: aliceblue">
    <div class="register-box">
      <div class="card card-outline card-primary">
        <div class="card-header text-center">
          <a href="#" class="h1"><b>ZIFA</b>pro</a>
        </div>
        <div class="card-body">
          <p class="login-box-msg">Register a new membership</p>

          <form action="#" method="post">
            <div class="input-group mb-3">
              <input
                type="text"
                name="fullname"
                class="form-control"
                placeholder="Full name"
              />
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input
                type="email"
                name="email"
                class="form-control"
                placeholder="Email"
              />
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input
                type="text"
                name="username"
                class="form-control"
                placeholder="Username"
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
            <div class="input-group mb-3">
              <input
                type="password"
                name="confirm"
                class="form-control"
                placeholder="Retype password"
              />
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-8">
                <div class="icheck-primary">
                  <input
                    type="checkbox"
                    id="agreeTerms"
                    name="terms"
                    value="agree"
                    required
                  />
                  <label for="agreeTerms">
                    I agree to the <a href="#">terms</a>
                  </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-4">
                <button
                  type="submit"
                  name="registrasi"
                  class="btn btn-primary btn-block"
                >
                  Register
                </button>
              </div>
              <!-- /.col -->
            </div>
          </form>
          <a href="login.php" class="text-center"
            >I already have a membership</a
          >
        </div>
        <!-- /.form-box -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
  </body>
</html>
