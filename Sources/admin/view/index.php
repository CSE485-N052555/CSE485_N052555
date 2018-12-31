<?php
 session_start();
 unset($_SESSION['login']);
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HT Shop</title>

    <!-- Bootstrap core CSS-->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">
    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Đăng Nhập</div>
        <div class="card-body">
          <form action="../lib/xulidangnhap.php" method="POST">
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control"  name="taikhoan" placeholder="Email address" required="required" autofocus="autofocus">
                <label for="inputEmail">Email address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control"  name="matkhau" placeholder="Password" required="required">
                <label for="inputPassword">Password</label>
               <?php
               if(isset($_SESSION['login'])&&$_SESSION['login']=="false")
               {
               ?>
               <div style="margin: 10px 0px; color:red;" class="text-center">
               Tài Khoản Hoặc Mật Khẩu Không Chính Xác!!!
               </div>
               <?php
                unset($_SESSION['login']);
               }
               ?>
              </div>
            </div>
            <button class="btn btn-primary btn-block" type="submit"> Đăng Nhập</button>
          </form>
          <div class="text-center">
            <a class="d-block small" href="forgot-password.html">Quên Mật Khẩu</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
