<?php
require_once('../layout/header.php');
include_once('../lib/database.php');
$db=new Database;
$sql="select * from danhmuc";
$kq=$db->exec_sql($sql);
$loaisp=$db->exec_sql($sql2);
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
              <th  width="20%">ID Danh Mục</th>
              <th>Tên Danh Mục</th>
              <th width="20%">Sửa / Xóa</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Thêm Danh Mục</button></th>
            </tr>
          </tfoot>
          <tbody>
          <?php  foreach ($kq as $value) :?>

            <tr class="text-center">
              <td id="id"><?php echo ($value['id']); ?></td>
              <td><?php echo ($value['danhmuc']); ?></td>
              <td >
              <button type="button" class="btn btn-outline-info them " data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo"><i class="icon ion-md-copy"></i>Sửa</button>
              <a href="../lib/xuli.php?xoa=<?php echo ($value['id']); ?>"><button type="button" class="btn btn-outline-danger"><i class="icon ion-md-trash"></i>Xóa</button></a>
              </td>
             
            </tr>
            <?php endforeach?>
            
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

<!-- Sticky Footer -->
<footer class="sticky-footer">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright © Your Website HT Shop</span>
    </div>
  </div>
</footer>

</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title" id="exampleModalLabel">Thêm Danh Mục</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <form action="../lib/xulidanhmuc.php"  method="GET">
          <div class="form-group">
            <label for="message-text" class="control-label">Tên Danh Mục</label>
          
          <input type="text" name="danhmuc" id="inputdanhmuc" class="form-control" value="" required="required" placeholder="Nhập Tên Danh Mục...">
          
          </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        <button type="submit" class="btn btn-primary">Lưu</button>
      </div>
    </form>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title" id="exampleModalLabel">Sửa Danh Mục</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <form action="../lib/xulidanhmuc.php"  method="GET">
          <div class="form-group">
            <label for="message-text" class="control-label">Chỉnh Sửa Danh Mục</label>
           <input type="text" name="id" id="iddanhmuc"  value="" style="visibility: hidden" >
          <input type="text" name="tendanhmuc" id="inputdanhmuc" class="form-control" value="" required="required" placeholder="Nhập Tên Danh Mục...">
          
          </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        <button type="submit" class="btn btn-primary">Lưu</button>
      </div>
    </form>
    </div>
  </div>
</div>


<?php
require_once('../layout/footer.php');
?>