<?php
include('database.php');
$db=new Database;
$mahd=$_GET['mahd'];
if(isset($mahd)&&!empty($mahd))
{
$sql1="delete from hoadon where mahd=$mahd";
$sql2="delete from chitiethoadon where mahd=$mahd";
$db->exec_sql($sql1);
$db->exec_sql($sql2);
header('Location:../view/hoadon.php');
}
else
{
    echo("Mã Hóa Đơn Trống Hoặc Kgoong Tồn Tại!!");
}
?>