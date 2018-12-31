<?php
require_once('../layout/header.php');
$tongtien=0;
if(isset($_SESSION['card']))
{
  foreach ($_SESSION['card'] as $key=>$value)
  {
   $tongtien=$tongtien +(int)$_SESSION['card'][$key]['thanhtien'];

  }
}
?>

<div class="container-fluid">
    
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="panel panel-danger text-center" style="margin-top:15px; width:100%; height: 40px;padding-top: 5px; font-size: 20px;color: orangered;">Thông Tin Giỏ Hàng</div>
    </div>
    
    <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <form class="form-horizontal">
                            <div class="form-group">
                                    <label  class="col-sm-2 control-label">Họ Tên</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="inputhoten" placeholder="Bắt Buộc">
                                    </div>
                                  </div>
                            <div class="form-group">
                              <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                              <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputemail" placeholder="Không Bắt Buộc">
                                <p id="erroremail"></p>
                              </div>
                            </div>
                            <div class="form-group">
                                    <label  class="col-sm-2 control-label">SDT</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="inputsdt" placeholder="Bắt Buộc">
                                      <p id="errorsdt"></p>
                                    </div>
                                  </div>
                            <div class="form-group">
                              <label  class="col-sm-2 control-label">Địa Chỉ</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputdiachi" placeholder="Địa Chỉ Nhận Hàng">
                              </div>
                            </div>
                          </form>
               </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">      
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                    <th style="width:50%">Tên sản phẩm</th> 
                                    <th style="width:10%">Giá</th> 
                                    <th style="width:10%">Số lượng</th> 
                                    <th style="width:20%" class="text-center">Thành tiền</th> 
                                    <th style="width:10%"> </th> 
                            </tr>
                        </thead> 
                        <tbody >
                        <?php
                        if(!empty($_SESSION['card']))
                        {
                          foreach ($_SESSION['card'] as $key=>$value) {
                        ?>
                        <tr> 
                         <td data-th="Product"> 
                          <div class="row"> 
                           <div class="col-sm-2"><img src="../img/<?php echo($_SESSION['card'][$key]['img']);?>"  class="img-responsive" width="100">
                           </div> 
                           <div class="col-sm-10 hidden-xs" > 
                            <h4 class="nomargin"><?php echo($_SESSION['card'][$key]['name']); ?></h4> 
                            <span>Màu:<?php echo($_SESSION['card'][$key]['color']); ?></span>
                             <span>Size:<?php echo($_SESSION['card'][$key]['size']); ?></span>
                           </div> 
                          </div> 
                         </td> 
                         <td data-th="Price" style="padding-top:30px"><?php echo($_SESSION['card'][$key]['gia']); ?></td> 
                         <td data-th="Quantity"><input class="form-control text-center qty" value="<?php echo($_SESSION['card'][$key]['sl']); ?>"  min="1"  type="number"style="margin-top:20px">
                         </td> 
                         <td data-th="Subtotal" class="text-center" style="padding-top:30px"><?php echo($_SESSION['card'][$key]['thanhtien']); ?></td> 
                         <td class="col-md-2" data-th="">
                               <a href="" class="update-card" id="<?php echo($_SESSION['card'][$key]['id']);?>"> <button class="btn btn-info btn-md"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                                </button> 
                                 <a href="delete-card.php?id=<?php echo($_SESSION['card'][$key]['id']); ?>"  class="xoacard"><button class="btn btn-danger btn-md"><span class="glyphicon glyphicon-trash" aria-hidden="true" ></span></a>
                                </button>
                         </td> 
                        </tr> 
                        <?php
                            }
                          }
                        ?>
                    </tbody>
                    <tfoot> 
                            <tr class="visible-xs"> 
                             <td class="text-center"><strong><?php echo($tongtien." VNĐ")?> </strong>
                             </td> 
                            </tr> 
                            <tr> 
                             <td><a href="home.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
                             </td> 
                             <td colspan="2" class="hidden-xs"> </td> 
                             <td class="hidden-xs text-center"><strong>  <?php echo($tongtien." VNĐ")?>  </strong>
                             </td> 
                             <td><a href="" class="btn btn-success btn-block thanhtoan">Thanh toán <i class="fa fa-angle-right"></i></a>
                             </td> 
                            </tr> 
                           </tfoot> 
                    </table>
              
           </div> 
    </div>  
</div>

<?php
require_once('../layout/footer.php');
?>