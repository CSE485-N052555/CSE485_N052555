<?php
require('database.php');
require('checklogin.php');
$db=new Database();
$result = array();
if(isset($_POST['sohd'])&&isset($_POST['doanhthu'])&&isset($_POST['sohangban'])&&isset($_POST['sanpham']))
{
$sohoadon=$db->exec_sql($_POST['sohd']);
 $doanhthu=$db->exec_sql($_POST['doanhthu']);
$sohangban=$db->exec_sql($_POST['sohangban']);
$sanpham=$db->exec_sql($_POST['sanpham']);

 
}

if(!empty($sohangban)&&!empty($doanhthu)&&!empty($sohoadon)&&!empty($sanpham))
{
$result[]=array(

    "sohd"=>$sohoadon[0]['sohd'],
    "doanhthu"=>$doanhthu[0]['doanhthu'],
    "sohangban"=>$sohangban[0]['sohangban'],
    "sanpham"=>$sanpham[0]['tenhang'],
 );
}
else{
    $result=null;
}
 die(json_encode($result, JSON_UNESCAPED_UNICODE));
?>