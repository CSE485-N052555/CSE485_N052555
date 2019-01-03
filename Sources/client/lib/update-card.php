<?php
session_start();
$sl=$_GET['sol'];
if(!empty($_SESSION['card'])&isset($_SESSION['card']))
{
    if(isset($_GET['id']))
    {
        $id=$_GET['id'];
        $gia=$_SESSION['card'][$id]['gia'];
     $_SESSION['card'][$id]['sl']=$sl;
     $_SESSION['card'][$id]['thanhtien']=(int)$sl * (int)$gia;
    }
    
}
?>