<?php
require_once('../layout/header.php');
$sql="select * from taikhoan";
$kq=$db->exec_sql($sql);
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
              <th width="15%">Tên</th>
              <th width="10%">Ngày Sinh</th>
              <th width="15%">SĐT</th>
              <th width="15%">Quê Quán</th>
              <th width="15%">Email</th>
              <th width="10%">Kích Hoạt</th>
              <th width="10%">Quyền Hạn</th>
              <th width="5%">Sửa/Xóa</th>
            </tr>
          </thead>
          <tfoot>
          
          <tbody>
          <?php  foreach ($kq as $value) :?>
            <tr class="text-center">
            <form action="../lib/xulisuanguoidung.php" method="post">
             <td>
             <input type="text" name="id"  class="form-control" value="<?php echo($value['id']);?>" style="width:100%" required="required" readonly>
             </td>
             <td>
             <input type="text" name="ten"  class="form-control" value="<?php echo($value['ten']);?>" style="width:100%" required="required"  >
             </td>
             <td>
             <input type="date" name="birthday"  class="form-control" value="<?php echo($value['birthday']);?>" style="width:100%" required="required"  >
             </td>
             <td>
             <input type="text" name="sdt"  class="form-control" value="<?php echo($value['sdt']);?>" style="width:100%" required="required"  >
             </td>
             <td>
             <input type="text" name="quequan"  class="form-control" value="<?php echo($value['quequan']);?>" style="width:100%" required="required"  >
             </td>
             <td>
             <input type="email" name="email"  class="form-control" value="<?php echo($value['email']);?>" style="width:100%" required="required"  >
             </td>
             <td>
              <a href="">Đã Kích Hoạt</a>
             </td>
             <td>

        <select name="quyenhan" id="input" class="form-control" required="required">
        <?php
        if($value['quyenhan']=="Admin")
        {
            echo(' <option value="Admin">Admin</option>');
            echo('<option value="Nhân Viên">Nhân Viên</option>');
        }
      else
        {
            echo('<option value="Nhân Viên">Nhân Viên</option>');
            echo(' <option value="Admin">Admin</option>');
         
        }
        ?>
           </select>

             </td>
            <td>
            <button type="submit" class="btn btn-outline-success">Sửa</button>
           <a href="../lib/xulixoanguoidung.php?id=<?php echo($value['id']);?>" class="btn btn-outline-danger xacnhanxoa">Xóa</a>
            </td>
            </form>
            </tr>
            
         <?php endforeach?>
         
         <tr class="text-center">
          <form action="../lib/xulithemnguoidung.php" method="post">
             <td>
             <input type="text" name="id"  class="form-control" value="" style="width:100%" disabled="disabled" required="required"  >
             </td>
             <td>
             <input type="text" name="ten"  class="form-control" value="" style="width:100%" required="required"  >
             </td>
             <td>
             <input type="date" name="birthday"  class="form-control" value="" style="width:100%" required="required"  >
             </td>
             <td>
             <input type="text" name="sdt"  class="form-control" value="" style="width:100%" required="required"  >
             </td>
             <td>
             <input type="text" name="quequan"  class="form-control" value="" style="width:100%" required="required"  >
             </td>
             <td>
             <input type="email" name="email"  class="form-control" value="" style="width:100%" required="required"  >
             </td>
             <td>
             <p>Đã Kích Hoạt</p>
             </td>
             <td>

        <select name="quyenhan" id="input" class="form-control" required="required">
         <option value="Admin">Admin</option>
         <option value="Nhân Viên">Nhân Viên</option>
           </select>
             </td>
            <td>
            <button type="submit" class="btn btn-outline-success">Thêm</button>
            </td>
            </form>
            </tr>
          </tfoot>
          </tbody>
        </table>
        <?php
if(isset($_SESSION['themnd'])&&$_SESSION['themnd']=="false")
{
  echo('<p style="color:red">Thêm Thất Bại Vui Lòng Kiểm Tra Lại!</p>');
  unset($_SESSION['themnd']);
}
if(isset($_SESSION['themnd'])&&$_SESSION['themnd']=="true")
{
  echo('<p style="color:#33ccff">Thêm Thành Viên Thành Công!</p>');
  unset($_SESSION['themnd']);
}
if(isset($_SESSION['suand'])&&$_SESSION['suand']=="false")
{
  echo('<p style="color:red">Sửa Người Dùng Bại Vui Lòng Kiểm Tra Lại!</p>');
  unset($_SESSION['suand']);
}
if(isset($_SESSION['suand'])&&$_SESSION['suand']=="true")
{
  echo('<p style="color:#33ccff">Sửa Người Dùng Thành Công!</p>');
  unset($_SESSION['suand']);
}
if(isset($_SESSION['xoand'])&&$_SESSION['xoand']=="false")
{
  echo('<p style="color:red">Xóa Người Dùng Bại Vui Lòng Kiểm Tra Lại!</p>');
  unset($_SESSION['xoand']);
}
if(isset($_SESSION['xoand'])&&$_SESSION['xoand']=="true")
{
  echo('<p style="color:#33ccff">Xóa Người Dùng Thành Công!</p>');
  unset($_SESSION['xoand']);
}
?>
      </div>
    </div>
  </div>
</div>
<?php
require_once('../layout/footer.php');
?>