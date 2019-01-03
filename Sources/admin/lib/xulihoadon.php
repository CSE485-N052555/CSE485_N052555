<?php
require('database.php');
require('checklogin.php');
$db=new Database;
if(isset($_GET['mahd'])&&!empty($_GET['mahd']))
$mahd=$_GET['mahd'];
$sql="select xuli from hoadon where mahd=$mahd";
$xuli=$db->exec_sql($sql);
if($xuli[0]['xuli']==1)
{
    $db->exec_sql("update hoadon set xuli=0 where mahd=$mahd");
    header("Location:../view/hoadon.php");
}
else
{
    $db->exec_sql("update hoadon set xuli=1 where mahd=$mahd"); 
    header("Location:../view/chitiethoadon.php?mahd=$mahd");
}

?>