<?php
require_once("../layout/header.php");
require_once("../lib/database.php");
$db=new Database();
$sql="SELECT * FROM `hoadon` ";
$hoadon=$db->exec_sql($sql);
?>
<div id="content-wrapper">

<div class="container-fluid">
  <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Danh Mục
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead class="text-center">
            <tr>
              <th width="25%" >Mã Hóa Đơn</th>
              <th width="25%">ID Khách</th>
              <th width="25%">Ngày Tạo</th>
              <th width="25%">Chi Tiết</th>
              
              <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
              </div>
              
            </tr>
          </thead>
          <tfoot>
            <tr>
            </tr>
          </tfoot>
          <tbody>
          <?php  foreach ($hoadon as $value) :?>
             <tr class="text-center">
             <td><?php echo($value['mahd']);?></td>
             <td><?php echo($value['id_khach']);?></td>
             <td><?php echo($value['ngaylap']);?></td>
             <td>
             <?php
             
            if($value['xuli']==0)
            {
                ?>
               <div style="float:left;">
               <a href="../lib/xulihoadon.php?mahd=<?php echo($value["mahd"]);?>" style="padding-left:30px;"><button type="button" class="btn btn-outline-primary "><i class="fas fa-spinner"></i>Chờ Xử Lí</button></a></div>
               <a href="../lib/xulixoahoadon.php?mahd=<?php echo($value['mahd']);?>"><button type="button" class="btn btn-outline-info xoahoadon"><i class="far fa-trash-alt"></i>Xóa </button></a> 
              <?php
                   }
                   else
                   {      
            ?>
             <div style="float:left;">
               <a href="../lib/xulihoadon.php?mahd=<?php echo($value["mahd"]);?>" style="padding-left:30px;"><button type="button" class="btn btn-outline-danger "><i class="fas fa-check"></i>Đã Xử Lí</button></a></div>
               <a href="../lib/xulixoahoadon.php?mahd=<?php echo($value['mahd']);?>" style="padding-left:10px;"><button type="button" class="btn btn-outline-info xoahoadon"><i class="far fa-trash-alt"></i> Xóa </button></a> 
             <?php
                   }
             ?>
            </td>
            
          
             
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