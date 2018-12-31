<?php
require_once("../layout/header.php");
require_once("../lib/database.php");
$db=new Database();
if(isset($_GET['id_cmt'])&&$_GET['id_cmt']!="")
{
$sql="SELECT * FROM `traloibinhluan` where id_cmt=".$_GET['id_cmt'];
$reply=$db->exec_sql($sql);
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
              <th width="5%">ID_Bình Luận</th>
              <th width="10%">Tên Khách</th>
              <th width="35%">Nội Dung</th>
              <th width="15%">Check</th>
              <th width="20%">Ngày Tạo</th>
              <th width="10%">Xóa</th>
            
              
              
            </tr>
          </thead>
          <tfoot>
            <tr>
            </tr>
          </tfoot>
          <tbody>
          <?php  foreach ($reply as $value) :?>
             <tr class="text-center">
             <td><?php echo($value['id']);?></td>
             <td><?php echo($value['id_cmt']);?></td>
             <td><?php echo($value['ten']);?></td>
             <td><?php echo($value['reply']);?></td>
             <?php 
             if($value['check_reply']=="Y")
             {
                ?>
                <td ><a href="../lib/xulibinhluan.php?id_reply_check=<?php echo($value['id']);?>&id_cmt=<?php echo($_GET['id_cmt']);?>"  style="color:#1a75ff">Đã Xác Nhận</a></td>
            <?php 
             }
             else
             {
            ?>
            <td ><a href="../lib/xulibinhluan.php?id_reply_check=<?php echo($value['id']);?>&id_cmt=<?php echo($_GET['id_cmt']);?>"  style="color:#ff3333">Chưa Xác Nhận</a></td>
            <?php
             }
            ?>
        
             <td><?php echo($value['create_at']);?></td>
             <td>
               <a href="../lib/xulibinhluan.php?id_reply=<?php echo($value['id']);?>&id_cmt=<?php echo($_GET['id_cmt']);?>"><button type="button" class="btn btn-outline-danger xoahoadon"><i class="far fa-trash-alt"></i>Xóa </button></a> 
               </td>
               
         <?php endforeach?>
            
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<?php
}
require_once("../layout/footer.php");
?>