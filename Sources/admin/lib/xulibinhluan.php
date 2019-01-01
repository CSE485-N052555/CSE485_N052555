<?php
include('database.php');
$db=new Database;
if(isset($_GET['id_set'])&&$_GET['id_set']!="")
{
    $check=$db->exec_sql("select check_cmt from binhluan where id_cmt=".$_GET['id_set']);
    if($check[0]['check_cmt']=="Y")
    {
        $db->exec_sql("update binhluan set check_cmt='N' where id_cmt=".$_GET['id_set']);
    }
    else
    {
        $db->exec_sql("update binhluan set check_cmt='Y' where id_cmt=".$_GET['id_set']);
    }
    header("Location:../view/binhluan.php");
}
if(isset($_GET['id_delete'])&&$_GET['id_delete']!="")
{
    $db->exec_sql("delete from binhluan where id_cmt=".$_GET['id_delete']);
    $db->exec_sql("delete from traloibinhluan where id_cmt=".$_GET['id_delete']);
    header("Location:../view/binhluan.php");
   
}

?>