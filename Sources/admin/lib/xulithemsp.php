<?php
require_once('database.php');
$db=new Database;
$hot=0;
$new=0;
if(isset($_POST['hot']))
{
    $hot=$_POST['hot'];
}
if(isset($_POST['new']))
{
    $new=$_POST['new'];
}

if(isset($_POST['tensp'],$_POST['gia'],$_POST['chitiet'],$_POST['idloaisp'],$_POST['size'],$_POST['color'],$_POST['soluong']))
{
$tensp=$_POST['tensp'];
$gia=$_POST['gia'];
$chitiet=$_POST['chitiet'];
$idloaisp=$_POST['idloaisp'];
$size=$_POST['size'];
$color=$_POST['color'];
$soluong=$_POST['soluong'];
if(!empty($idloaisp&$chitiet&$gia&$tensp&$color&$size&$soluong))
{
$filename=$_FILES['img']['name'];

$move="../../client/img/".$filename;
if(move_uploaded_file($_FILES['img']['tmp_name'],"$move"))
{
$sql="INSERT INTO `product` (`id`, `name`, `gia`,`soluong`, `img`,`size`, `color`, `chitiet`, `hot`, `new`, `idloaisp`, `create_at`, `update_at`) VALUES (NULL, '$tensp', '$gia','$soluong', '$filename','$size','$color', '$chitiet', '$hot', '$new', '$idloaisp', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)";
$db->exec_sql($sql);
header('Location: ../view/sanpham.php');
$_SESSION['upload']="true";
}
else
{
    echo("Xuất Hiện Lỗi Khi Upload Ảnh");
}
}
}

?>