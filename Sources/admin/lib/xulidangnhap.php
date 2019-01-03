<?php
include('database.php');
session_start();
$db=new Database;
$tk=$_POST['taikhoan'];
$mk=$_POST['matkhau'];
$mk=md5($mk);
$check=$db->exec_sql("SELECT * FROM `taikhoan` WHERE email='$tk' and matkhau='$mk'");
if(count($check)>0)
{
$_SESSION['login']="true";
$_SESSION['idnhanvien']=$check[0]['id'];
$_SESSION['quyen']=$check[0]['quyenhan'];
header("Location:../view/home.php");
}
else
{
    $_SESSION['login']="false";
    header("Location:../view/index.php");
}

if(isset($_GET['dangxuat']))
{
    unset($_SESSION['login']);
    header("Location:../view/index.php");
}

?>