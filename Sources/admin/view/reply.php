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
            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Trả Lời</button></td>
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
                <td ><a href="../lib/xulitraloi.php?id_reply_check=<?php echo($value['id']);?>&id_cmt=<?php echo($_GET['id_cmt']);?>"  style="color:#1a75ff">Đã Xác Nhận</a></td>
            <?php 
             }
             else
             {
            ?>
            <td ><a href="../lib/xulitraloi.php?id_reply_check=<?php echo($value['id']);?>&id_cmt=<?php echo($_GET['id_cmt']);?>"  style="color:#ff3333">Chưa Xác Nhận</a></td>
            <?php
             }
            ?>
        
             <td><?php echo($value['create_at']);?></td>
             <td>
               <a href="../lib/xulitraloi.php?id_reply=<?php echo($value['id']);?>&id_cmt=<?php echo($_GET['id_cmt']);?>"><button type="button" class="btn btn-outline-danger xoahoadon"><i class="far fa-trash-alt"></i>Xóa </button></a> 
               </td>
               
         <?php endforeach?>
            
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


<!-- trả lời cmt -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title" id="exampleModalLabel" >Trả Lời Bình Luận</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <form action="../lib/xulitraloi.php" method="GET">
          <input type="hidden" value="<?php echo($_GET['id_cmt']);?>" name="id_cmt">
          <div class="form-group">
            <label for="message-text" class="control-label">Trả Lời:</label>
            <textarea class="form-control" id="message-text" name="noidung" required="required"></textarea>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
        <button type="submit" class="btn btn-primary" >Gửi Trả Lời</button>
      </div>
      </form>
    </div>
  </div>
</div>

<?php
}
require_once("../layout/footer.php");
?>