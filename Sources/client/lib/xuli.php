<?php
include('database.php');
$db=new Database;
$sql="select * from product where id=".$_GET['id'];
$kq=$db->exec_sql($sql);
$result = array();
foreach ($kq as $value) {
    $result[]=array(
        'id' => $value['id'],
        'ten' => $value['name'],
        'img' => $value['img'],
        'chitiet' => $value['chitiet'],
        'gia' => $value['gia'],
        'hot' => $value['hot'],
        'new' => $value['new'],
        'theomua' => $value['theomua']

    );
}
die(json_encode($result, JSON_UNESCAPED_UNICODE));

?>

  