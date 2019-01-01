<?php
require('../layout/header.php');
 $sql="select * from product where new=1 limit 8";
 $sql2="select * from product where hot=1 limit 8";
 $kq=$db->exec_sql($sql);
 $hot=$db->exec_sql($sql2);

?>
<main class="mo">
  <img src="../img/" alt="" srcset="">
        <div class="container">   
       
       <div class="row">
       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center ">
       <h3> <i>Thời Trang Mới Nhất</i></h3>
       <span style="color:#a3c2c2">____________</span>
       <span style="font-size:30px;color: #ff6666;"><i class="fas fa-tree"></i></span>
       <span style="color:#a3c2c2">____________</span>
       <p style="color:#666666"><i>Sản phảm thời trang nam mới nhất, trong bộ sưu tập thời trang tại HT Shop</i></p>
         </div> 
       </div>
             <div class="row">
                 <?php  foreach ($kq as $value) :?>
               <div class="col-xs-6 col-sm-6 col-md-3 styleproduct">
                <div class="thumbnail hove ">
                   <a href="product.php?id=<?php echo($value['id']) ?>"><img src="../img/<?php echo($value['img']) ?>" idproduct="<?php echo($value['id']) ?>"></a>
                        <div class="caption text-center">
                           <h4> <?php echo($value['name']) ?></h4>
                           <p style="color:salmon">
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
                   <div class="logonew">
                    <img src="../img/logonew.PNG" alt="" width="80px" height="50px">
                   </div>
               </div>
               <?php endforeach?>
          </div>
         

<!-- yêuthicsh -->
 
 <div class="row">
     
     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
     <h3> <i>Thời Trang Yêu Thích Nhất</i></h3>
       <span style="color:#a3c2c2">____________</span>
       <span style="font-size:30px;color: #ff0000;"><i class="fas fa-heart"></i></span>
       <span style="color:#a3c2c2">____________</span>
       <p style="color:#666666"><i>Sản phảm thời trang nam được yêu thích nhất, trong bộ sưu tập thời trang tại HT Shop</i></p>
     </div>
     
 </div>
 
 
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

<div id="imageCarousel" class="carousel slide" data-interval="3000"
     data-ride="carousel" data-pause="hover" data-wrap="true">

    <div class="carousel-inner">
        <div class="item active">
            <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 ">
                   <a href=""> <img src="../img/aodalong.jpg"  class="img-responsive  imgcar "></a>
                    <div class="carousel-caption">
                        <h3>Desert</h3>
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                   <a href=""> <img src="../img/aodanau.jpg"  class="img-responsive imgcar "></a>
                    <div class="carousel-caption">
                        <h3>Jellyfish</h3>
                      
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                   <a href=""> <img src="../img/aodacomu.jpg"  class="img-responsive imgcar"></a>
                    <div class="carousel-caption">
                        <h3>Penguins</h3>
    
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                   <a href=""> <img src="../img/dongho1.jpg"  class="img-responsive imgcar"></a>
                    <div class="carousel-caption">
                        <h3>Koala</h3>
                    
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <a href=""><img src="../img/anhdemo.jpg"  class="img-responsive imgcar"></a>
                    <div class="carousel-caption">
                        <h3>Lighthouse</h3>
               
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                 <a href="">   <img src="../img/quanjeanr1.jpg"  class="img-responsive imgcar"></a>
                    <div class="carousel-caption">
                        <h3>Hydrangeas</h3>
                     
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                   <a href=""> <img src="../img/dongho1.jpg"  class="img-responsive imgcar"></a>
                    <div class="carousel-caption">
                        <h3>Koala</h3>
           
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                   <a href=""> <img src="../img/aodacomu.jpg"  class="img-responsive imgcar"></a>
                    <div class="carousel-caption">
                        <h3>Penguins</h3>
                    
                    </div>
                </div>
            </div>
        </div>

        <div class="item">
            <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                   <a href=""> <img src="../img/dongho1.jpg"  class="img-responsive imgcar"></a>
                    <div class="carousel-caption">
                        <h3>Tulips</h3>
                 
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                   <a href=""> <img src="../img/dongho2.jpg"  class="img-responsive imgcar"></a>
                    <div class="carousel-caption">
                        <h3>Chrysanthemum</h3>
                    
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <a href=""><img src="../img/dongho3.jpg"    class="img-responsive imgcar"></a>
                    <div class="carousel-caption">
                        <h3>Stripes</h3>

                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                   <a href=""> <img src="../img/dongho1.jpg"  class="img-responsive imgcar"></a>
                    <div class="carousel-caption">
                        <h3>Koala</h3>
            
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a href="#imageCarousel" class="carousel-control left" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a href="#imageCarousel" class="carousel-control right" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>

</div>
</div>




<!-- yêuthisch -->

       <div class="row">
       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center ">
       <h3> <i>Thời Trang Hot</i></h3>
       <span style="color:#a3c2c2">____________</span>
       <span style="font-size:30px;color: #ff2424;"><i class="fas fa-fire"></i></span>
       <span style="color:#a3c2c2">____________</span>
       <p style="color:#666666"><i>Sản phảm thời trang nam bán chạy nhất, trong bộ sưu tập thời trang tại HT Shop</i></p>
         </div> 
       </div>
             <div class="row">
                 <?php  foreach ($hot as $value) :?>
                 <div class="col-xs-6 col-sm-6 col-md-3 styleproduct">
                <div class="thumbnail hove ">
                   <a href="product.php?id=<?php echo($value['id']) ?>"><img src="../img/<?php echo($value['img']) ?>" idproduct="<?php echo($value['id']) ?>"></a>
                        <div class="caption text-center">
                           <h4> <?php echo($value['name']) ?></h4>
                           <p style="color:salmon">
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
                             <a href="" id="<?php echo($value['id']);?>" class="link"> <button type="button" class="btn btn-info them">Thêm Vào Giỏ</button></a>
                      </div>
                      
                      
                 </div>
              </div>
              
             </div>
             </div>
  

    <?php
require('../layout/footer.php');
?>
