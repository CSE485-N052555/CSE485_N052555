<?php
require('database.php');
require('checklogin.php');
$db=new Database;
if(isset($_GET['id']))
{
    $id=$_GET['id'];
   $sql="delete from taikhoan  WHERE id =$id";
   $db->exec_sql($sql);
   $sql2="select * from taikhoan where id=$id";
   $kq=$db->exec_sql($sql2);
   if(count($kq)>0)
   {
       $_SESSION['xoand']="true";
   }
   else
   {
    $_SESSION['xoand']="false";
   }
}
else
   {
    $_SESSION['xoand']="false";
   }
?>