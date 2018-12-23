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


<!-- gửi CMT -->

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  
  <form action="" method="POST" class="form-horizontal" role="form" >
          <div class="form-group">
              <legend><i><b>Thêm Bình Luận</b></i></legend>
          </div>
            
          <div class="form-group" style="margin:0px;width:100%;">
                  
                  <div class="row">
                  <label for="input" class="col-sm-2 col-md-1 col-xs-2  control-label">Tên</label>
                  <div class="col-sm-10 col-md-11 col-xs-10" >
                      <input type="text" name=""  style="width:100%" id="input" class="form-control" value="" required="required" placeholder="Mời Điền Tên...">
                  </div>
                  </div>
                  
                  <div class="row"style="margin-top:20px">
                  <label for="input" class="col-sm-2 col-md-1 col-xs-2 control-label">Bình Luận</label>
                  <div class="col-sm-10 col-md-11 col-xs-10">
                    <textarea name="" id="" cols="auto" rows="5" style="width:100%" required="required" placeholder="Comment...."></textarea>
                  </div>
                  
                  </div>
                  
                  <div class="row">
                  <div class="form-group">
                      <div class="col-sm-10 col-sm-offset-2 col-xs-offset-2 col-md-offset-1 " >
                          <button type="submit"  style="margin-left:8px;margin-top:15px;" class="btn btn-primary">Gửi</button>
                      </div>
                  </div>
                  </div>
                  
                 
        </div>
  </form>
  
</div>

<!-- gửi CMT -->

<!-- hiện Cmt -->

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-bottom:15px">
    
    <div class="row">
      <legend>  <b><i>Bình Luận </i></b></legend>
    </div>

    
    <div class="row">
        
        <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
            <img src="../img/<?php echo($kq[0]['img']);?>" width=100%>
        </div>
        
        <div class="col-xs-10 col-sm-10 col-md-11 col-lg-11">
       <span style="font-size:20px; color: #33adff"> <b>Xuân Hùng</b></span> 
       <span style="font-size:15px; padding-left:10px;">11/11/1111 11:11:11</span>
       <div>
       As of 2017, text messages are used by youth and adults for personal, family, business and social purposes. Governmental and non-governmental organizations use text messaging for communication between colleagues. In the 2010s, the sending of short informal messages has become an accepted part of many cultures, as happened earlier with emailing.[1] This makes texting a quick and easy way to communicate with friends, family and colleagues, including in contexts where a call would be impolite or inappropriate (e.g., calling very late at night or when one knows the other person is busy with family or work activities). Like e-mail and voicemail, and unlike calls (in which the caller hopes to speak directly with the recipient), texting does not require the caller and recipient to both be free at the same moment; this permits communication even between busy individuals. Text messages can also be used to interact with automated systems, for example, to order products or services from e-commerce websites, or to participate in online contests. Advertisers and service providers use direct text marketing to send messages to mobile users about promotions, payment due dates, and other notifications instead of using postal mail, email, or voicemail.
       </div>
        </div>
        
    </div>
    
    
</div>


<!-- hiện Cmt -->
<?php
require('../layout/footer.php');
?>