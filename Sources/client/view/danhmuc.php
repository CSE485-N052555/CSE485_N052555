<?php
require('../layout/header.php');
if(!isset($_GET['id']))
{
    $_GET['id']=0;
}
 $sql="select * from product where idloaisp=".$_GET['id'];
 $kq=$db->exec_sql($sql);
$sql2="select * from loaisp where id_loaisp=".$_GET['id'];
$loaisp=$db->exec_sql($sql2);
?>
<main class="mo">
        <div class="container">   
       
       <div class="row">
       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center style">
       <h3> <i><h4><?php echo($loaisp[0]['loaisp']) ?></i></h3>
       <span style="color:#a3c2c2">____________</span>
       <span style="font-size:30px;color: #a3a375;"><i class="fas fa-anchor"></i></span>
       <span style="color:#a3c2c2">____________</span>
       
         </div> 
       </div>
             <div class="row">
                 <?php  foreach ($kq as $value) :?>
                 <div class="col-xs-12 col-sm-12 col-md-3 styleproduct">
                <div class="thumbnail hove ">
                   <a href="product.php?id=<?php echo($value['id']) ?>"><img src="../img/<?php echo($value['img']) ?>" idproduct="<?php echo($value['id']) ?>"></a>
                        <div class="caption text-center">
                           <h3> <?php echo($value['name']) ?></h3>
                           <p>
                           <?php echo($value['gia']) ?>
                           </p>
                           
                       </div>
                        <div class="ct">
                      <ul>
                    <li class="muangay"  data-id="<?php echo($value['id'])?>"> <i class="fas fa-shopping-cart"></i></li>
                  <li> <a href="product.php?id=<?php echo($value['id']) ?>" style="text-decoration: none;color:hsl(0, 0%, 65%)"><i class="fas fa-eye"></a></i></li>
                  <li class="tym" color="0"  style="color:#667d99"><i class="fas fa-heart hert"></i></li>
                      </ul>
                     </div>  
                   </div>
               </div>
               <?php endforeach?>
          </div>
         
     
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
                      <div>
                       <p id="chitiet"> 
                       </p>   
                  </div>
                   
                      <div class="row">
                       
                       <div class="form-group">
                           <label for="input" class="col-sm-2 control-label" ><h4>Size</h4></label>
                           <div class="col-sm-10">
                               <select name="size" id="inputsizeqick" class="form-control " required="required">
                                  
                               </select>
                           </div>
                       </div>  
                   </div>

                   
                   <div class="row">
                       
                          <div class="form-group">
                              <label for="input" class="col-sm-2 control-label "><h4>Color</h4></label>
                              <div class="col-sm-10">
                                  <select name="color" id="inputcolorqick" class="form-control" required="required">
                            
                                  </select>
                              </div>
                          </div>  
                      </div>
                   
                 
                 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center " style="margin-top: 20px; margin-left:-10px">
                      
                      <div class="row">
                             <div class="form-group">
                             <label for="input" class="col-sm-2 control-label "><h4>Số Lượng</h4></label>
                                 <div class="col-sm-10">
                                     <input type="number" name="sol" id="inputsol" class="form-control" value="1" min="1" max="" step="" required="required" title="">
                                 </div>
                             </div>
                             
                      </div>
                      
                      <div class="row">
                             <a href="#" id="link" class="link"> <button type="button" class="btn btn-info them">Thêm Vào Giỏ</button></a>
                      </div>
                      
                      
                 </div>
              </div>
              
             </div>
             </div>
  
    <?php
require('../layout/footer.php');
?>