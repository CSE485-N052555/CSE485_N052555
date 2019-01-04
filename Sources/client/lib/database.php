<?php
class Database
{
public $con;
function __construct(){
   $this->con = new PDO('mysql:host=localhost;dbname=quanliweb;charset=utf8','root' ,'');
}
function exec_sql($sql)
{
$stmt= $this->con->prepare($sql);
 $stmt->execute();
 $results = $stmt->fetchAll();
 return $results;
}

function themkhach($tenk,$email,$sdt,$diachi){
$sql3="INSERT INTO `khach` (`id`, `tenk`, `email`, `sdt`, `diachi`) VALUES (NULL, '$tenk', '$email', '$sdt', '$diachi')";
   $stmt= $this->con->prepare($sql3);
   $stmt->execute();
}

function themhoadon($idk,$date)
{
$sql4="INSERT INTO `hoadon` (`mahd`, `id_khach`, `ngaylap`) VALUES (NULL,'$idk','$date')";
$stmt= $this->con->prepare($sql4);
$stmt->execute();
}

function themcthoadon($mahd,$mah,$tenhang,$soluong,$size,$color,$dongia,$thanhtien)
{
   $sql5="INSERT INTO `chitiethoadon` (`mahd`, `mah`, `tenhang`,`soluong`,`size`,`color`, `dongia`, `thanhtien` ) VALUES ('$mahd','$mah','$tenhang','$soluong','$size','$color','$dongia','$thanhtien')";
   $stmt= $this->con->prepare($sql5);
   $stmt->execute();
}
}
?>
