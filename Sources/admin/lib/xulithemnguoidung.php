<?php
require('database.php');
require('checklogin.php');
$db=new Database;

if(isset($_POST['ten'],$_POST['birthday'],$_POST['sdt'],$_POST['quequan'],$_POST['email'],$_POST['quyenhan']))
{
   $ten=$_POST['ten'];
    $birthday=$_POST['birthday'];
    $sdt=$_POST['sdt'];
    $quequan=$_POST['quequan'];
   $email=$_POST['email'];
   $quyenhan=$_POST['quyenhan'];
   $sql="INSERT INTO `taikhoan` (`id`, `ten`, `birthday`, `sdt`, `quequan`, `email`, `matkhau`, `quyenhan`) VALUES (NULL, '$ten', '$birthday', '$sdt', '$quequan', '$email', 'c4ca4238a0b923820dcc509a6f75849b', '$quyenhan')";
   $db->exec_sql($sql);
   $sql2="select *from taikhoan where email='$email' and sdt='$sdt'";
   $kq=$db->exec_sql($sql2);
   if(count($kq)>0)
   {
       $_SESSION['themnd']="true";
   }
   else
   {
    $_SESSION['themnd']="false";
   }
}
header("Location:../view/quanlinguoidung.php");
?>