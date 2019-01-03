<?php
session_start();
if(!empty($_SESSION['card'])&isset($_SESSION['card']))
{
    if(isset($_GET['id']))
    {
        $id=$_GET['id'];
        unset($_SESSION['card'][$id]);
        header('Location:../view/giohang.php');
    }
}

?>