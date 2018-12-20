<?php
include('database.php');
$db=new Database;
if(isset($_GET['danhmuc']))
{
    try
{
$danhmuc=$_GET['danhmuc'];
$sql="INSERT INTO `danhmuc` (`id`, `danhmuc`) VALUES (NULL, '$danhmuc')";
$db->exec_sql($sql);
header('Location:../view/danhmuc.php');
}
catch(Exception $e)
{
echo(' Xuất Hiện Lỗi Mời Thử Lại!');
}
}
if(isset($_GET['xoa']))
{
try
{
 $xoa=$_GET['xoa'];
$sql="DELETE FROM `danhmuc` WHERE `id`=$xoa";
$db->exec_sql($sql);
header('Location:../view/danhmuc.php');
}
catch(Exception $e)
{
echo(' Xuất Hiện Lỗi Mời Thử Lại!');
}
}
if(isset($_GET['id'])&isset($_GET['tendanhmuc']))
{
    try
{
$tendanhmuc=$_GET['tendanhmuc'];
$id=$_GET['id'];
$sql="UPDATE `danhmuc` SET `danhmuc`='$tendanhmuc' WHERE id =$id";
$db->exec_sql($sql);
header('Location:../view/danhmuc.php');
}
catch(Exception $e)
{
echo(' Xuất Hiện Lỗi Mời Thử Lại!');
}
}


?>

  