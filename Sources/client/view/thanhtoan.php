<?php
include('../lib/database.php');
session_start();
$db=new Database;
    $tenk=$_POST['tenk'];
    $email=$_POST['email'];
    $sdt=$_POST['sdt'];
    $diachi=$_POST['diachi'];
    $id_hd=null;
   if(($tenk!=null &$sdt!=null)&$diachi!=null)
   {
    $idk=$db->exec_sql("select id from khach where sdt=".$sdt);
     if(isset($idk[0]))
     {
      $db->themhoadon($idk[0]['id'],date('Y/m/d'));
      $id_hd=$db->exec_sql("SELECT mahd FROM `hoadon` ORDER BY mahd DESC LIMIT 1");
     }
      else
      {
        $db->themkhach($tenk,$email,$sdt,$diachi);
        $idk2=$db->exec_sql("select id from khach where sdt=".$sdt);
        $db->themhoadon($idk2[0]['id'],date('Y/m/d'));
        $id_hd=$db->exec_sql("SELECT mahd FROM `hoadon` ORDER BY mahd DESC LIMIT 1");
      }
     if(isset($_SESSION['card']))
     {
       if(!empty($_SESSION['card']))
       {
        foreach ($_SESSION['card'] as $key => $value)
         {
          $mahd=$id_hd[0]['mahd'];
          $mah=$_SESSION['card'][$key]['id'];
          $tenhang=$_SESSION['card'][$key]['name'];
          $soluong=$_SESSION['card'][$key]['sl'];
          $dongia=$_SESSION['card'][$key]['gia'];
          $thanhtien=$_SESSION['card'][$key]['thanhtien'];
          $db->themcthoadon($mahd,$mah,$tenhang,$soluong,$dongia,$thanhtien);
        }
        unset($_SESSION['card']);
        header('Location:giohang.php');
       }
     }
   }
  



?>