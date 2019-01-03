<?php
require('database.php');
require('checklogin.php');
$db=new Database;
$id=$_POST['idsp'];
if(isset($_POST['hot']) && !empty($_POST['hot']) )
{
    $hot=$_POST['hot'];
    $db->exec_sql("UPDATE `product` SET `hot` = '$hot' WHERE `product`.`id` = $id");
}
if(isset($_POST['new'])&& !empty($_POST['new']))
{
    $new=$_POST['new'];
    $db->exec_sql("UPDATE `product` SET `new` = '$new' WHERE `product`.`id` = $id");
}
if(isset($_POST['tinhtrang'])&& !empty($_POST['tinhtrang']))
{
    $tinhtrang=$_POST['tinhtrang'];
    $db->exec_sql("UPDATE `product` SET `tinhtrang` = '$tinhtrang' WHERE `product`.`id` = $id");
}
if(isset($_POST['tensp'])&& !empty($_POST['tensp']))
{
$tensp=$_POST['tensp'];
$db->exec_sql("UPDATE `product` SET `name` = '$tensp' WHERE `product`.`id` = $id");
}
if(isset($_POST['gia'])&& !empty($_POST['gia']))
{
$gia=$_POST['gia'];
$db->exec_sql("UPDATE `product` SET `gia` = '$gia' WHERE `product`.`id` = $id");
}
if(isset($_POST['chitiet'])&& !empty($_POST['chitiet']))
{
 $chitiet=$_POST['chitiet'];
 $db->exec_sql("UPDATE `product` SET `chitiet` = '$chitiet' WHERE `product`.`id` = $id");
}
if(isset($_POST['color'])&& !empty($_POST['color']))
{
 $color=$_POST['color'];
 $db->exec_sql("UPDATE `product` SET `color` = '$color' WHERE `product`.`id` = $id");
}
if(isset($_POST['size'])&& !empty($_POST['size']))
{
 $size=$_POST['size'];
 $db->exec_sql("UPDATE `product` SET `size` = '$size' WHERE `product`.`id` = $id");
}
if(isset($_POST['idloaisp'])&& !empty($_POST['idloaisp']))
{
$idloaisp=$_POST['idloaisp'];
$db->exec_sql("UPDATE `product` SET `idloaisp` = '$idloaisp' WHERE `product`.`id` = $id");
}

if(isset($_FILES['img'])&&$_FILES['img']['size']>0)
{

 $img=$db->exec_sql("select img from product where id=$id");
 if(!empty($img)){
 unlink("../../client/img/".$img[0]['img']);
 }
$filename=$_FILES['img']['name'];

$move="../../client/img/".$filename;
if(move_uploaded_file($_FILES['img']['tmp_name'],"$move"))
{
$sql="UPDATE `product` SET `img` = '$filename' WHERE `product`.`id` = $id";
$db->exec_sql($sql);
header('Location: ../view/sanpham.php');
}
else
{
    echo("Xuất Hiện Lỗi Khi Upload Ảnh");
}
}
header('Location: ../view/sanpham.php');

?>