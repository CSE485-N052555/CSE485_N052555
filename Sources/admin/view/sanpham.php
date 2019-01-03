<?php
require_once('../layout/header.php');
include_once('../lib/database.php');
$db=new Database;
$sql="select * from product";
$sql2="select * from loaisp";
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
      <div>
      <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="icon ion-md-add"></i>Thêm </button>
      <button type="button" class="btn btn-outline-info sua" data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo"><i class="icon ion-md-clipboard"></i>Sửa</button>
      <button type="button" class="btn btn-outline-danger xoa"><i class="icon ion-md-trash"></i>Xóa</button>
      </div>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead class="text-center">
            <tr >
              <th width="5%"></th>
              <th width="5%">ID</th>
              <th width="15%">Tên </th>
              <th width="20%">Ảnh</th>
              <th width="5">Tình Trạng</th>
              <th width="10%">Giá</th>
              <th width="8%">Màu</th>
              <th width="7%">Size</th>
              <th  width="15%">Chi Tiết</th>
              <th width="5%">Hot</th>
              <th width="5%">New</th>
             
             
            </tr>
          </thead>
          <tfoot>
            <tr>
              
            </tr>
          </tfoot>
          <tbody>
            <tr class="">
            <?php  foreach ($kq as $value) :?>
              <td ><input type="checkbox"  class="idinput" value="<?php echo($value['id']);?>"  name="check"></td>
              <td><?php echo($value['id']);?></td>
              <td><?php echo($value['name']);?></td>
              <td><img src="../../client/img/<?php echo($value['img']);?>" width="200px" height="300px"></td>
              <td><?php echo($value['tinhtrang']);?></td>
              <td><?php echo($value['gia']);?></td>
              <td><?php echo($value['color']);?></td>
              <td><?php echo($value['size']);?></td>
              <td><?php echo($value['chitiet']);?></td>
              <td><?php if($value['hot']==1)
              {
               echo('<p style="color:#0099ff">Yes</p>');
              }
              
              else{
                echo('<p style="color:red">No</p>');
              }
              
              ?></td>
              <td><?php 
              if($value['new']==1)
              {
                echo('<p style="color:#0099ff">Yes</p>');

              }
              else{
                echo('<p style="color:red">No</p>');
              }
              
              
              ?></td> 
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





<!-- confirm -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title" id="exampleModalLabel">Thêm Sản Phẩm</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <form action="../lib/xulithemsp.php"  method="POST" enctype="multipart/form-data">
          <div class="form-group">
          <label for="message-text" class="control-label">Tên Loại Sản Phẩm</label>
          <input type="text" name="tensp" id="inputdanhmuc" class="form-control" value="" required="required" placeholder="Nhập Tên Sản Phẩm...">
          <label for="message-text" class="control-label">Chọn Ảnh</label>
          <input type="file" name="img"  required="required" accept="image/png, image/jpeg" >
          <label for="message-text" class="control-label" style="width:100%">Nhập Giá</label>
          <input type="number" name="gia" id="" required="required" class="form-control"  placeholder="Nhập Giá....">
          <label for="message-text" class="control-label">Tình Trạng</label>
           <select name="tinhtrang" id="input" class="form-control" required="required">
             <option value="Còn Hàng">Còn Hàng</option>
             <option value="Hết Hàng">Hết Hàng</option>
           </select>
           
          <label for="message-text" class="control-label">Nhập Size</label>
       <input type="text" name="size" class="form-control" >
       <label for="message-text" class="control-label">Nhập Màu</label>
       <input type="text" name="color" class="form-control" >
       <label for="message-text" class="control-label">Nhập Chi Tiết</label>
          <textarea name="chitiet" id="" cols="30" rows="5" placeholder="Nhập Chi Tiết.." style="width:100%"></textarea>
              <div class="col-sm-6" style="margin-left:-12px;">
                  <select name="idloaisp" id="input" class="form-control" required="required">
                  <?php  foreach ($loaisp as $value) :?>
                  <option value="<?php echo($value['id_loaisp']) ?>"><?php echo($value['loaisp']) ?></option>
                  <?php endforeach?>
                  </select>
              </div>
          </div>
      
      <div class="checkbox">
        <label>
          <input type="checkbox" value="1" name="hot">
          Sản Phẩm Có Hot Không?
        </label>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox" value="1" name="new">
          Sản Phẩm Có Mới Không?
        </label>
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

<!-- confirm -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title" id="exampleModalLabel">Chỉnh Sửa Sản Phẩm</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <form action="../lib/xulisuasp.php"  method="POST" enctype="multipart/form-data">
        <div class="form-group">
        
        <input type="hidden" name="idsp" id="idsp"  value="">
        
          <label for="message-text" class="control-label">Tên Loại Sản Phẩm</label>
          <input type="text" name="tensp" id="inputdanhmuc" class="form-control" value="" placeholder="Nhập Tên Sản Phẩm...">
          <label for="message-text" class="control-label">Chọn Ảnh</label>
          <input type="file" name="img"   accept="image/png, image/jpeg" >
          <label for="message-text" class="control-label" style="width:100%" >Nhập Giá</label>
          <input type="number" name="gia" id=""  class="form-control"  placeholder="Nhập Giá....">
          <label for="message-text" class="control-label">Tình Trạng</label>
           <select name="tinhtrang" id="input" class="form-control" >
             <option value="">--Chọn Tình Trạng--</option>
             <option value="Còn Hàng">Còn Hàng</option>
             <option value="Hết Hàng">Hết Hàng</option>
           </select>
          <label for="message-text" class="control-label">Nhập Size</label>
       <input type="text" name="size" class="form-control" >
       <label for="message-text" class="control-label">Nhập Màu</label>
       <input type="text" name="color" class="form-control" >
       <label for="message-text" class="control-label">Nhập Chi Tiết</label>
          <textarea name="chitiet" id="" cols="30" rows="5" placeholder="Nhập Chi Tiết.." style="width:100%"></textarea>
              <div class="col-sm-6" style="margin-left:-12px;">
                  <select name="idloaisp" id="input" class="form-control" >
                  <option value="">Mời Chọn Loại Sản Phẩm</option>
                  <?php  foreach ($loaisp as $value) :?>
                  <option value="<?php echo($value['id_loaisp']) ?>"><?php echo($value['loaisp']) ?></option>
                  <?php endforeach?>
                  </select>
              </div>
          </div>
      
      <div class="checkbox">
        <label>
          <input type="checkbox" value="1" name="hot">
          Sản Phẩm Có Hot Không?
        </label>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox" value="1" name="new">
          Sản Phẩm Có Mới Không?
        </label>
      </div>
      <p style="color:red"><i>Chú Ý: Nếu mục nào bạn để trống thì mục đó sẽ không bị thay đổi!!!</i></p>
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