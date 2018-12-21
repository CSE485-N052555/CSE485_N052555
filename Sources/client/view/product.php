<?php
require('../layout/header.php');
$sql="select * from product where id=".$_GET['id'];
$phanloai=$db->exec_sql("select idloaisp from product where id=".$_GET['id']);
$kq=$db->exec_sql($sql);
$sql2="select * from product where idloaisp=".$phanloai[0]['idloaisp']." limit 4";
$lq=$db->exec_sql($sql2);
?>
 <div class="container">
     
     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " style="margin-top:20px; margin-left: -15px;">
     <div class="panel panel-success" style="height:40px; font-size: 20px;color: darkgreen;"><u>Chi Tiết Sản Phẩm</u></div>
     </div>
     
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <img src="../img/<?php echo($kq[0]['img']);?>" alt="" width="100%">
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <h3><?php echo($kq[0]['name']);?></h3>
                <h4><?php echo($kq[0]['gia']);?> VNĐ</h4>
                <div>
                 <p><?php echo($kq[0]['chitiet']);?>
                         </p>   
            </div>
            
<div class="row">
<form class="form-horizontal">
 
 <div class="form-group">
     <label  class="col-sm-2 control-label">Size</label>
     <div class="col-sm-10">
         <select name="" id="inputcolor" class="form-control" required="required" >
             <option value="Xanh">Xanh</option>
             <option value="Đỏ">Đỏ</option>
             <option value="Tím">Tím</option>
             <option value="Vàng">Vàng</option>
         </select>
     </div>
 </div>

 <div class="form-group">
     <label  class="col-sm-2 control-label">Màu Sắc</label>
     <div class="col-sm-10">
         <select name="" id="inputsize" class="form-control" required="required">
             <option value="S">S</option>
             <option value="M">M</option>
             <option value="L">L</option>
             <option value="XL">XL</option>
         </select>
     </div>
 </div>
  <div class="form-group">
    <label  class="col-sm-2 control-label">Số Lượng</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="inputsoluong"  value=1 min="1"  placeholder="Số Lượng">
    </div>
  </div>
</form>
  <div class="col-sm-offset-2 col-sm-10">
      <a href=""><button  class="btn btn-success themgio" data-id="<?php echo($kq[0]['id']);?>">THÊM VÀO GIỎ</button></a>
  </div>         
</div>
</div>
</div>


<h3 class="my-4">Sản Phẩm Liên Quan</h3>

<div class="row">
<?php  foreach ($lq as $value) :?>
  <div class="col-md-3 col-sm-4 col-xs-6" style="padding-bottom:10px">
    <a href="?id=<?php echo($value['id']);?>">
      <img class="img-fluid" src="../img/<?php echo($value['img']);?>" alt="" width="250px" height="150px"  >
    </a>
  </div>
  <?php endforeach?>

</div>
<?php
require('../layout/footer.php');
?>