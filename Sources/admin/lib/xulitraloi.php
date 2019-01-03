<?php
require('database.php');
require('checklogin.php');
$db=new Database;
if((isset($_GET['id_cmt'])&&$_GET['id_cmt']!="")&&(isset($_GET['noidung'])&&$_GET['noidung']!=null))
{
    $idcmt=$_GET['id_cmt'];
    $noidung=$_GET['noidung'];
    $db->exec_sql("INSERT INTO `traloibinhluan` (`id`, `id_cmt`, `ten`, `reply`, `check_reply`, `create_at`) VALUES (NULL, '$idcmt', 'Admin', '$noidung', 'Y', CURRENT_TIMESTAMP)");
    header("Location:../view/reply.php?id_cmt=$idcmt");
}
if((isset($_GET['id_reply'])&&$_GET['id_reply']!="")&&(isset($_GET['id_cmt'])&&$_GET['id_cmt']!=""))
{
    $id=$_GET['id_cmt'];
    $db->exec_sql("delete from traloibinhluan where id=".$_GET['id_reply']);
    header("Location:../view/reply.php?id_cmt=$id");
}
if((isset($_GET['id_reply_check'])&&$_GET['id_reply_check']!="")&&(isset($_GET['id_cmt'])&&$_GET['id_cmt']!=""))
{   $id=$_GET['id_cmt'];
    $check=$db->exec_sql("select check_reply from traloibinhluan where id=".$_GET['id_reply_check']);
    if($check[0]['check_reply']=="Y")
    {
        $db->exec_sql("update traloibinhluan set check_reply='N' where id=".$_GET['id_reply_check']);
    }
    else
    {
        $db->exec_sql("update traloibinhluan set check_reply='Y' where id=".$_GET['id_reply_check']);
    }
    header("Location:../view/reply.php?id_cmt=$id");
}
?>