<?php

require_once('../layout/header.php');
include_once('../lib/database.php');
$db=new Database;
$sql="select * from loaisp";
$loaisp=$db->exec_sql($sql);
if(isset($_GET['id']))
{
    $sql2="select *from product where id=".$_GET['id'];
    $kq=$db->exec_sql($sql2);
}
?>

 
 <div class="container">
     
 <div class="col-xs-9 col-sm-9 col-md-10 col-lg-10" style="margin-top:10px" >
 <form action="" method="POST" enctype="multipart/form-data" >
     <legend>Chỉnh Sửa Sản Phẩm</legend>
 
     <div class="form-group">
          <input type="hidden" value="<?php echo($kq[0]['id']) ?>">
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
         <label for="">Tên Sản Phẩm</label>
         <input type="text" class="form-control" id="" value="<?php echo($kq[0]['name']) ?>" require="require" >
         </div>
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
         <label for="">Giá</label>
         <input type="text" class="form-control" id="" value="<?php echo($kq[0]['gia']) ?>" require="require" >
         </div>
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
         <label for="">Ảnh</label>
         <input type="file" class="form-control" id=""   require="require" >
         </div>
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
         <p>Chi Tiết</p>
        <textarea name="" id="" cols="35" rows="5"   require="require"><?php echo($kq[0]['chitiet']) ?>"</textarea>
         </div>
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
       <div class="checkbox">
       <h5> Sản Phẩm Có Mới Hay Không?</h5>
           <?php
         if($kq[0]['new']==1)
         {
             echo('  <label>
             <input type="radio" name="new" value="1" checked="checked">
            Có
         </label>
         <label>
             <input type="radio"  name="new" value="0">
         Không
         </label>');
         }
      else
         {
             echo('  <label>
             <input type="radio" name="new" value="1" >
            Có
         </label>
         <label>
             <input type="radio"  name="new" value="0" checked="checked">
         Không
         </label>');
         }
           ?>
           </label>
       </div>
       
         </div>
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
       <div class="radio">
       <h5> Sản Phẩm Có Hot  Hay Không?</h5>
         <?php if($kq[0]['hot']==1)
         {
             echo('  <label>
             <input type="radio" name="hot" value="1" checked="checked">
            Có
         </label>
         <label>
             <input type="radio"  name="hot" value="0">
         Không
         </label>');
         }
      else
         {
             echo('  <label>
             <input type="radio" name="hot" value="1" >
            Có
         </label>
         <label>
             <input type="radio"  name="hot" value="0" checked="checked">
         Không
         </label>');
         }
         ?>
       </div>
       
         </div>

         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
       <div class="radio">
       <h5> Tình Trạng:</h5>
           <label>
               <input type="radio" name="hang" value="1">
              Còn Hàng
           </label>
           <label>
               <input type="radio"  name="hang" value="0">
          Hết Hàng
           </label>
       </div>
       
         </div>
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
             <select name="" id="" style="width:100%">
             <?php  foreach ($loaisp as $value) :?>
                  <option value="<?php echo($value['id_loaisp']) ?>"><?php echo($value['loaisp']) ?></option>
            <?php endforeach?>
             
             </select>
         <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
         
     </div>
 
     
 
     <button type="submit" class="btn btn-outline-success" style="margin-left:40%  ; margin-top:25px;">Sửa Sản Phẩm </button>
 </form>
 </div>
 </div>
 
 
 
  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="../vendor/datatables/jquery.dataTables.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin.min.js"></script>
    <script src="../js/main.js"></script>

    <!-- Demo scripts for this page-->
    <script src="../js/demo/datatables-demo.js"></script>

  </body>

</html>
