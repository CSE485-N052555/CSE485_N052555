

<?php

require_once('../layout/header.php');
include_once('../lib/database.php');
$db=new Database;
$sql="select * from loaisp";
$loaisp=$db->exec_sql($sql);
?>

 
 <div class="container">
     
 <div class="col-xs-9 col-sm-9 col-md-10 col-lg-10" style="margin-left:10%">
 <form action="" method="POST" enctype="multipart/form-data" >
     <legend>Thêm Mới Sản Phẩm</legend>
 
     <div class="form-group">
         
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
         <label for="">Tên Sản Phẩm</label>
         <input type="text" class="form-control" id="" placeholder="Tên Sản Phẩm" require="require" >
         </div>
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
         <label for="">Giá</label>
         <input type="text" class="form-control" id="" placeholder="Giá" require="require" >
         </div>
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
         <label for="">Ảnh</label>
         <input type="file" class="form-control" id=""  require="require" >
         </div>
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
         <p>Chi Tiết</p>
        <textarea name="" id="" cols="35" rows="5" require="require"></textarea>
         </div>
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
       <div class="checkbox">
       <h5> Sản Phẩm Có Mới Hay Không?</h5>
           <label>
               <input type="radio" name="new" value="1">
              Có
           </label>
           <label>
               <input type="radio" name="new" value="0">
           Không
           </label>
       </div>
       
         </div>
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
       <div class="radio">
       <h5> Sản Phẩm Có Hot  Hay Không?</h5>
           <label>
               <input type="radio" name="hot" value="1">
              Có
           </label>
           <label>
               <input type="radio"  name="hot" value="0">
           Không
           </label>
       </div>
       
         </div>

         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
       <div class="radio">
       <h5> Tình Trạng:</h5>
           <label>
               <input type="radio" name="hot" value="1">
              Còn Hàng
           </label>
           <label>
               <input type="radio"  name="hot" value="0">
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
 
     
 
     <button type="submit" class="btn btn-outline-success" style="margin-left:40%  ; margin-top:25px;">Thêm Sản Phẩm </button>
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





