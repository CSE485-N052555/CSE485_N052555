<?php
   require_once('../layout/header.php');
   if(isset($_GET['sotrang']))
   {
       $sotrang=$_GET['sotrang'];
   }
   else
   {
       $_GET['sotrang']=1;
       $sotrang=$_GET['sotrang'];
   }
   settype($sotrang,"int");
   $from=($sotrang -1)*8;
   if(empty($_GET['tk']))
   {
       echo(' <h1>Không Có Kết Quả Nào Phù Hợp!</h1>');
   }
   else {
     $sql="select * from product  join loaisp on product.idloaisp=loaisp.id_loaisp where name like '%".$_GET['tk']."%' or loaisp.loaisp like '%".$_GET['tk']."%'   limit ".$from.",8";
     $sql2="select * from product  join loaisp on product.idloaisp=loaisp.id_loaisp where name like '%".$_GET['tk']."%' or loaisp.loaisp like '%".$_GET['tk']."%'";
       $kq=$db->exec_sql($sql); 
       $st=count($db->exec_sql($sql2))/8; 
      if(!is_int($st))
      {
       settype($st,"int");
       $st++;
      }
       if(empty($kq))
       {
           echo(' <h1>Không Có Kết Quả Nào Phù Hợp!</h1>');
       }
       else{
   ?>
<main class="mo">
   <div class="container">
   <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-center style">
         <div class="panel panel-primary">
            <h4> Sản Phẩm Cần Tìm</h4>
         </div>
      </div>
   </div>
   <div class="row">
      <?php  foreach ($kq as $value) :?>
      <div class="col-xs-12 col-sm-12 col-md-3 styleproduct">
         <div class="thumbnail hove ">
            <a href="product.php?id=<?php echo($value['id']) ?>"><img src="../img/<?php echo($value['img']) ?>" idproduct="<?php echo($value['id']) ?>"></a>
            <div class="caption text-center">
               <h3> <?php echo($value['name']) ?></h3>
               <p style="color:red">
               <?php echo(number_format($value['gia'])." đ") ?>
               </p>
            </div>
            <div class="ct">
               <ul>
                  <li class="muangay text-center"  data-id="<?php echo($value['id'])?>"> <i class="fas fa-shopping-cart"></i></li>
                  <li class="text-center"> <a href="product.php?id=<?php echo($value['id']) ?>" style="text-decoration: none;color:hsl(0, 0%, 65%)"><i class="fas fa-eye"></a></i></li>
               </ul>
            </div>
         </div>
      </div>
      <?php endforeach?>
   </div>
   <nav aria-label="Page navigation" style="float:right">
      <ul class="pagination">
         <li>
         </li>
         <?php
            for ($i=0; $i <$st; $i++) { 
            ?>
         <li><a href="search.php?sotrang=<?php echo($i+1)?>&tk=<?php echo($_GET['tk']); ?>"><?php echo($i+1) ?></a></li>
         <?php
            }
            ?>
      </ul>
   </nav>
</main>
<div class=" wrap-modal1 js-modal1 ">
<div class="overlay-modal1 js-hide-modal1"></div>
<div class="container bg0">
   <div class="row ">
      <span class="glyphicon glyphicon-remove "  id="thoat" aria-hidden="true" style="float: right; font-size: 25px; cursor: pointer;"></span>
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
         <img  class="imgproduct" src="." alt="" width="100%" >
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 ">
         <h3 id="ten"></h3>
         <h4 id="gia"></h4>
         <h4 id="tinhtrang"></h4>
         <div>
            <p id="chitiet"> 
            </p>
         </div>
         <div class="row">
            <div class="form-group">
               <label for="input" class="col-sm-2 control-label" >
                  <h4>Size</h4>
               </label>
               <div class="col-sm-10">
                  <select name="size" id="inputsizeqick" class="form-control " required="required">
                  </select>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="form-group">
               <label for="input" class="col-sm-2 control-label ">
                  <h4>Color</h4>
               </label>
               <div class="col-sm-10">
                  <select name="color" id="inputcolorqick" class="form-control" required="required">
                  </select>
               </div>
            </div>
         </div>
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center " style="margin-top: 20px; margin-left:-10px">
            <div class="row">
               <div class="form-group">
                  <label for="input" class="col-sm-2 control-label ">
                     <h4>Số Lượng</h4>
                  </label>
                  <div class="col-sm-10">
                     <input type="number" name="sol" id="inputsol" class="form-control" value="1" min="1" max="" step="" required="required" title="">
                  </div>
               </div>
            </div>
            <div class="row">
               <a href="#" id="<?php echo($value['id']);?>" class="link"> <button type="button" class="btn btn-info them" >Thêm Vào Giỏ</button></a>
            </div>
         </div>
      </div>
   </div>
</div>
<?php
   }
   }
   require_once('../layout/footer.php');
   
   ?>