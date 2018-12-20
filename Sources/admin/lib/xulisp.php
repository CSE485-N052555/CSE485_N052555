<?php
require_once('database.php');
$db=new Database;
$hot=isset($_GET['hot'])? $hot:0;
$new=isset($_GET['new'])? $new:0;
if(isset($_GET['tensp'],$_GET['gia'],$_GET['chitiet'],$_GET['idloaisp'],$_GET['img']))
{
if(!empty($_GET['tensp']&$_GET['gia']&$_GET['chitiet']&$_GET['idloaisp']&$_GET['img']))
{
$tensp=$_GET['tensp'];
$gia=$_GET['gia'];
$img=$_GET['img'];
$chitiet=$_GET['chitiet'];
$idloaisp=$_GET['idloaisp'];
$move="C:\xampp\htdocs\BTL01\client\img";
move_uploaded_file($_FILES["img"]["tmp_name"],$move);
// $sql="INSERT INTO `product` (`id`, `name`, `gia`, `img`, `chitiet`, `hot`, `new`, `idloaisp`, `create_at`, `update_at`) VALUES (NULL, '$tensp', '$gia', '$img', '$chitiet', '$hot', '$new', '$idloaisp', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)";
// $db->exec_sql($sql);
}
}

?>