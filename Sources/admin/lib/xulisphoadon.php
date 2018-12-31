<?php
include('database.php');
$db=new Database;
$mah=$_GET['mah'];
$mahd=$_GET['mahd'];
if (isset($mahd)&&!empty($mahd) ) {
  if(isset($mah)&&!empty($mah))
  {
    $kq=$db->exec_sql("delete from chitiethoadon where mahd=$mahd and mah=$mah");
  }
 else
 {
     echo("Mã Hàng Không Tồn Tại!!!")
 }
}
else
 {
     echo("Mã Hóa Đơn Không Tồn Tại!!!")
 }
?>
