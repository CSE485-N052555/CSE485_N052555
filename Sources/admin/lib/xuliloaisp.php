<?php
include('database.php');
$db=new Database;
if(isset($_GET['loaisp'])&isset($_GET['danhmuc']))
{
    try
{
$danhmuc=$_GET['danhmuc'];
$loaisp=$_GET['loaisp'];
$sql="INSERT INTO `loaisp` (`id_danhmuc`, `id_loaisp`, `loaisp`) VALUES ('$danhmuc',NULL, '$loaisp')";
$db->exec_sql($sql);
header('Location:../view/loaisanpham.php');
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
$sql="DELETE FROM `loaisp` WHERE `id_loaisp`=$xoa";
$db->exec_sql($sql);
header('Location:../view/loaisanpham.php');
}
catch(Exception $e)
{
echo(' Xuất Hiện Lỗi Mời Thử Lại!');
}
}

if(isset($_GET['idloaisp'])&isset($_GET['iddanhmuc']))
{
    try
{
$tenloaisp=$_GET['tenloaisp'];
$iddanhmuc=$_GET['iddanhmuc'];
$id=$_GET['idloaisp'];
if($tenloaisp!="")
{
$sql="UPDATE `loaisp` SET `id_danhmuc`=$iddanhmuc,`loaisp`='$tenloaisp' WHERE id_loaisp=$id";
}
else
{
$sql="UPDATE `loaisp` SET `id_danhmuc`=$iddanhmuc WHERE id_loaisp=$id";
}
$db->exec_sql($sql);
header('Location:../view/loaisanpham.php');
}
catch(Exception $e)
{
echo(' Xuất Hiện Lỗi Mời Thử Lại!');
}
}


?>

  