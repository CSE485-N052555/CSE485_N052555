<?php
include('database.php');
$db=new Database;
$id=json_decode($_GET['id']);
foreach ($id as $value) {
   $db->xoasanpham($value);
}

?>