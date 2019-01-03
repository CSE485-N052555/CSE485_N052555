<?php
require_once('../layout/header.php');
$id=$_SESSION['idnhanvien'];
$profile=$db->exec_sql("select * from taikhoan where id=$id");
?>
<div id="content-wrapper">

<div class="container-fluid">
  <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Thông Tin Cá Nhân

      <button type="button"  style="float:right"class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Đổi Mật Khẩu</button>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered"  width="100%" cellspacing="0">
          <thead class="text-center">
            <tr>
              <th width="5%" >ID</th>
              <th width="20%">Tên </th>
              <th width="10%">Ngày Sinh</th>
              <th width="10%">SĐT</th>
              <th width="30%">Quê Quán</th>
              <th width="15%">Email</th>
              <th width="10%">Quyền</th>
            </tr>
          </thead>
          <tfoot>
          </tfoot>
          <tbody>
          <?php  foreach ($profile as $value) :?>
             <tr class="text-center">
             <td><?php echo($value['id']);?></td>
             <td><?php echo($value['ten']);?></td>
             <td><?php echo($value['birthday']);?></td>
             <td><?php echo($value['sdt']);?></td>
             <td><?php echo($value['quequan']);?></td>
             <td><?php echo($value['email']);?></td>
             <td><?php echo($value['quyenhan']);?></td>
             </tr>
         <?php endforeach?>
            
          </tbody>
        </table>
      </div>
    </div>
    <?php
               if(isset($_SESSION['loi'])&&$_SESSION['loi']=="1")
               {
               ?>
               <div style="margin: 10px 0px; color:red;" class="text-center">
               Password Không Trùng Khớp!!!
               </div>
               <?php
                unset($_SESSION['loi']);
               }
    ?>
     <?php
               if(isset($_SESSION['loi'])&&$_SESSION['loi']=="2")
               {
               ?>
               <div style="margin: 10px 0px; color:red;" class="text-center">
               Tài Khoản Hoặc Mật Khẩu Không Chính Xác!!!
               </div>
               <?php
                unset($_SESSION['loi']);
               }
               ?>
  </div>

</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title" id="exampleModalLabel">Đổi Mật Khẩu</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <div class="modal-body">
        <form action="../lib/xulidoimatkhau.php" method="POST">
          <div class="form-group">
            <label for="recipient-name" class="control-label">Email:</label>
            <input type="text" class="form-control" id="recipient-name" name="email" placeholder="Email" required="required">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Mật Khẩu Hiện Tại:</label>
            <input type="password" class="form-control" id="recipient-name" name="mkht" placeholder="Password Hiện Tại..." required="required">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Mật Khẩu Mới:</label>
            <input type="password" class="form-control" id="recipient-name" name="mknew" placeholder="Password Mới..." required="required">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Nhập Lại Mật Khẩu:</label>
            <input type="password" class="form-control" id="recipient-name" name="mkconfrim" placeholder="Nhập Lại Password..." required="required">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        <button type="submit" class="btn btn-primary">Đổi Mật Khẩu</button>
      </div>
      </form>
    </div>
  </div>
</div>

<?php
require_once('../layout/footer.php');
?>