<?php
include('../lib/database.php');
session_start();
$db=new Database;
$idsp=$_POST['id'];
$name=$_POST['name'];
$cmt=$_POST['cmt'];
$sql="INSERT INTO `binhluan` (`id_cmt`, `id_sp`, `name`, `cmt`, `check_cmt`, `date`) VALUES (NULL, '$idsp', '$name', '$cmt', 'N', CURRENT_TIMESTAMP)
";
$db->exec_sql($sql);
    header("Location:product.php?id=$idsp");
  $_SESSION['binhluan']="yes";
?>
