<?php
require_once("../layout/header.php");
require_once("../lib/database.php");
$db=new Database();
$sql="SELECT * FROM `binhluan` ";
$binhluan=$db->exec_sql($sql);
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
              <th width="5%" >ID</th>
              <th width="5%">ID_Sản Phẩm </th>
              <th width="10%">Tên Khách</th>
              <th width="30%">Nội Dung</th>
              <th width="20%">Check</th>
              <th width="10%">Ngày Tạo</th>
              <th width="20%">Xem/Xóa</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
            </tr>
          </tfoot>
          <tbody>
          <?php  foreach ($binhluan as $value) :?>
             <tr class="text-center">
             <td><?php echo($value['id_cmt']);?></td>
             <td><?php echo($value['id_sp']);?></td>
             <td><?php echo($value['name']);?></td>
             <td><?php echo($value['cmt']);?></td>
             <?php 
             if($value['check_cmt']=="Y")
             {
                ?>
                <td ><a href="../lib/xulibinhluan.php?id_set=<?php echo($value['id_cmt']);?>"  style="color:#1a75ff">Đã Xác Nhận</a></td>
            <?php 
             }
             else
             {
            ?>
            <td ><a href="../lib/xulibinhluan.php?id_set=<?php echo($value['id_cmt']);?>"  style="color:#ff3333">Chưa Xác Nhận</a></td>
            <?php
             }
            ?>
        
             <td><?php echo($value['date']);?></td>
             <td>
            
          <a href="../view/reply.php?id_cmt=<?php echo($value['id_cmt']);?>" ><button type="button" class="btn btn-outline-primary "><i class="far fa-eye"></i>Xem <span style="color:red">
         <?php
         $id=$value['id_cmt'];
           $countreply=$db->exec_sql("SELECT COUNT(id) as sl FROM `traloibinhluan` WHERE check_reply='N' and id_cmt=$id");
           if($countreply[0]['sl']>0)
           {
            echo ($countreply[0]['sl']);
           }
         ?>


          </span></button></a>
           
               <a href="../lib/xulibinhluan.php?id_delete=<?php echo($value['id_cmt']);?>"><button type="button" class="btn btn-outline-danger xoahoadon"><i class="far fa-trash-alt"></i>Xóa </button></a> 
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