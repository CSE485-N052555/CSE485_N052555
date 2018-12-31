<?php
include('../lib/database.php');
session_start();
$db=new Database;
$id=$_POST['id_cmt'];
$ten=$_POST['name'];
$reply=$_POST['reply'];
$sql="INSERT INTO `traloibinhluan` (`id`, `id_cmt`, `ten`, `reply`, `check_reply`, `create_at`) VALUES (NULL, '$id', '$ten', '$reply', 'N', CURRENT_TIMESTAMP)
";
$db->exec_sql($sql);
 header("Location:product.php?id=$idsp");
  $_SESSION['reply']="yes";
?>
