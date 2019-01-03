<?php
require('database.php');
require('checklogin.php');
$db=new Database;
$id=json_decode($_GET['id']);
foreach ($id as $value) {
   $idcmt=$db->exec_sql("select id_cmt from binhluan where id_sp='$value'");
   if(!empty($idcmt))
   {
      foreach ($idcmt as $key => $idrep) {
        $idxoa=$idcmt[$key]['id_cmt'];
        $db->exec_sql("delete from traloibinhluan where id_cmt=$idxoa");
      }
      $db->exec_sql("delete from binhluan where id_sp=$value");
   }
   $db->xoasanpham($value);
}
?>