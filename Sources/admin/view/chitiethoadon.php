<?php
require_once("../layout/header.php");
require_once("../lib/database.php");
$db=new Database();

if(isset($_GET['mahd'])&&!empty($_GET['mahd']))
{
    $mahd=$_GET['mahd'];
}
else
{
$mahd="Không Tồn Tại!";
}
$sql="select * from chitiethoadon where mahd=$mahd";
$sql2="SELECT SUM(thanhtien) as thanhtien from chitiethoadon WHERE mahd=$mahd";
$cthoadon=$db->exec_sql($sql);
$thanhtien=$db->exec_sql($sql2);
$sql3="select * from khach join hoadon on hoadon.id_khach=khach.id where hoadon.mahd=$mahd";
$khach=$db->exec_sql($sql3);
?>
<div id="content-wrapper">

<div class="container-fluid">
  <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
     Mã Hóa Đơn: <?php echo($mahd); ?>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead class="text-center">
            <tr>
              <th width="10%" >Mã Hàng</th>
              <th width="25%">Tên Hàng</th>
              <th width="10%">Số Lượng</th>
              <th width="10%">Size</th>
              <th width="10%">Màu Sắc</th>
              <th width="15%">Đơn Giá </th>
              <th width="15%">Thành Tiền</th>
              <th width="5%"> Xóa</th>
              
            </tr>
          </thead>
          <tfoot>
            <tr class="text-center">
           <th > Tổng Tiền: </th>
           <td></td>
           <td></td>
           <td></td>
           <td></td>
           <td></td>
           <th><?php echo($thanhtien[0]['thanhtien'])." VNĐ"; ?></th>
            </tr>
          </tfoot>
          <tbody>
          <?php  foreach ($cthoadon as $value) :?>
            <tr class="text-center">
            <td><?php echo($value['mah']); ?></td>
            <td><?php echo($value['tenhang']); ?></td>
            <td><?php echo($value['soluong']); ?></td>
            <td><?php echo($value['size']); ?></td>
            <td><?php echo($value['color']); ?></td>
            <td><?php echo($value['dongia'])." VNĐ"; ?></td>
            <td><?php echo($value['thanhtien'])." VNĐ"; ?></td>
            <td><a href="../lib/xulisphoadon.php?mahd=<?php echo($mahd);?>&mah=<?php echo($value['mah']);?>"><button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Xóa</button></a></td>
            </tr>
            <?php endforeach?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>

<div id="content-wrapper">

<div class="container-fluid">
  <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
    Thông Tin Khách Hàng !!! 
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead class="text-center">
            <tr>
              <th width="10%" >ID</th>
              <th width="20%">Tên Khách</th>
              <th width="20%">Email</th>
              <th width="10%">SDT</th>
              <th width="40%">Địa Chỉ</th>
              
            </tr>
          </thead>
          <tfoot>
          </tfoot>
          <tbody>
          <?php  foreach ($khach as $value) :?>
            <tr class="text-center">
            <td><?php echo($value['id']); ?></td>
            <td><?php echo($value['tenk']); ?></td>
            <td><?php echo($value['email']); ?></td>
            <td><?php echo($value['sdt']); ?></td>
            <td><?php echo($value['diachi']); ?></td>
            </tr>
            <?php endforeach?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<?php
require_once("../layout/footer.php");

?>