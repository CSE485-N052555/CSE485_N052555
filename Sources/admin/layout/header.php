<?php
include('../lib/database.php');
$db=new Database;
session_start();
if(!isset($_SESSION['login'])||$_SESSION['login']!="true")
{
  header("Location:../view/index.php");
}
else
{
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Bootstrap core CSS-->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.0/dist/css/ionicons.min.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="../css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="../view/home.php">HT Shop</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
       
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Thông Tin Cá Nhân</a>
            <a class="dropdown-item" href="#">Đổi Mật Khẩu</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Đăng Xuất</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Điều Khiển</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Quản Lí Sản Phẩm</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="../view/danhmuc.php">Quản Lí Danh Mục</a>
            <a class="dropdown-item" href="../view/loaisanpham.php">Quản Lí Loại Sản Phẩm</a>
            <a class="dropdown-item" href="../view/sanpham.php">Quản Lí Sản Phẩm</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../view/hoadon.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Quản Lí Đơn Hàng</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../view/thongke.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Thống Kê</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../view/livechat.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Live Chat</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="../view/binhluan.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Bình Luận</span>
            <span style="color: #ff1a8c" >
            <?php
           $countcmt=$db->exec_sql("SELECT COUNT(id_cmt) as sl FROM `binhluan` WHERE check_cmt='N'");
           if($countcmt[0]['sl']>0)
           {
            echo ($countcmt[0]['sl']);
           }
         ?>


            </span>
          </a>
        </li>
      </ul>
      <?php
    }
      ?>