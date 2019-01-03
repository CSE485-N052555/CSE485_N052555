<?php
require('database.php');
require('checklogin.php');
$db=new Database;
if(isset($_POST['ten'],$_POST['birthday'],$_POST['sdt'],$_POST['quequan'],$_POST['email'],$_POST['quyenhan'],$_POST['id']))
{
    $id=$_POST['id'];
   $ten=$_POST['ten'];
    $birthday=$_POST['birthday'];
    $sdt=$_POST['sdt'];
    $quequan=$_POST['quequan'];
   $email=$_POST['email'];
   $quyenhan=$_POST['quyenhan'];
   $sql="UPDATE `taikhoan` SET `quequan` = '$quequan', `email` = '$email', `sdt` ='$sdt', `birthday` ='$birthday' , `ten` ='$ten', `quyenhan` ='$quyenhan'  WHERE id = $id";
   $db->exec_sql($sql);
   $sql2="select * from taikhoan where email='$email' and sdt='$sdt'";
   $kq=$db->exec_sql($sql2);
   if(count($kq)>0)
   {
       $_SESSION['suand']="true";
   }
   else
   {
    $_SESSION['suand']="false";
   }
}
 header("Location:../view/quanlinguoidung.php");
?>