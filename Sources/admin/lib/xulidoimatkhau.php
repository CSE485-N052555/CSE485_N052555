<?php
include('database.php');
session_start();
$db=new Database;
if(isset($_POST['email'],$_POST['mkht'],$_POST['mknew'],$_POST['mkconfrim']))
{
    $email=$_POST['email'];
    $mkht=md5($_POST['mkht']);
    $mknew=$_POST['mknew'];
    $mkconfrim=$_POST['mkconfrim'];
    if($mkconfrim===$mknew)
    {
      
        $kq=$db->exec_sql("select * from taikhoan where email='$email' and matkhau='$mkht'");
        if(count($kq)>0)
        {
           $mknew=md5($mknew);
            $db->exec_sql("update taikhoan set matkhau='$mknew' where email='$email' and matkhau='$mkht'");
            $_SESSION['changepass']="yes";
            header("Location:../view/index.php");
        }
        else
        {
            $_SESSION['loi']="2"; 
            header("Location:../view/profile.php");
        }
    }
    else
    {
        $_SESSION['loi']="1"; 
        header("Location:../view/profile.php");
    }
  
}


?>