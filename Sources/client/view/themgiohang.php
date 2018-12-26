<?php
session_start();
if(isset($_GET['id']))
{
include('../lib/database.php');
$db=new Database;
$size=isset($_GET['size']) ?$_GET['size']:"S";
$color=isset($_GET['color'])?$_GET['color']:"Đen";
$sol=isset($_GET['sol'])?$_GET['sol']:"1";
$id=$_GET['id'];
$sqll="select * from product where id=".$id;
$sp=$db->exec_sql($sqll);
$thanhtien= (int)$sp[0]['gia']* (int)$sol;
if(!empty($_SESSION['card']))
{
    $card=$_SESSION['card'];
    if(array_key_exists($id,$card))
    {
        echo("isset");
    }
    else
    {
     $card[$id]=array(
         "id"=>$id,
       "sl"=>$sol,
       "gia"=>$sp[0]['gia'],
       "img"=>$sp[0]['img'],
       "name"=>$sp[0]['name'],
        "size"=>$size,
        "color"=>$color,
        "thanhtien"=>$thanhtien
     );
    }
}
else
{
    $card[$id]=array(
        "id"=>$id,
        "sl"=>$sol,
        "gia"=>$sp[0]['gia'],
        "img"=>$sp[0]['img'],
        "name"=>$sp[0]['name'],
         "size"=>$size,
         "color"=>$color,
         "thanhtien"=>$thanhtien
    );
}

$_SESSION['card']=$card;
}

else
{
    echo("id không tồn Tại");
}





?>