<?php
require('../layout/header.php');
$id=$_GET['id'];
$sql="select * from product where id=".$id;
$phanloai=$db->exec_sql("select idloaisp from product where id=".$id);
$kq=$db->exec_sql($sql);
if(isset($_GET['page']))
{
$page=$_GET['page'];
}
else
{
    $page=0;
}
$sql2="select * from product where idloaisp=".$phanloai[0]['idloaisp']." limit 0,4";
$sql5="select * from product where idloaisp=".$phanloai[0]['idloaisp']." limit 4,4";
$lq1=$db->exec_sql($sql2);
$lq2=$db->exec_sql($sql5);
$sql3="select *from binhluan where id_sp=".$id." and check_cmt='Y' limit $page,6";
$bl=$db->exec_sql($sql3);
$sql4="select *from binhluan where id_sp=".$id." and check_cmt='Y'";
$countbt=$db->exec_sql($sql4);
$maxpage=count($countbt)-6;
if(isset($_SESSION['binhluan']))
{
if($_SESSION['binhluan']==="yes")
{
    echo('<script>   
    alert("Bình Luận Của Quý Khách Đã Được Gửi Và Đang Chờ Xét Duyệt!!")
    ');
    echo('</script>');
}
unset($_SESSION['binhluan']);
}
if(isset($_SESSION['reply']))
{
if($_SESSION['reply']==="yes")
{
    echo('<script>   
    alert("Trả lời Của Quý Khách Đã Được Gửi Và Đang Chờ Xét Duyệt!!")
    ');
    echo('</script>');
}
unset($_SESSION['reply']);
}



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
                <h4>Tên :&nbsp<?php echo($kq[0]['name']);?></h4>
                <h4>Giá :&nbsp<?php echo(number_format($kq[0]['gia']));?>đ</h4>
                <h4>Tình Trạng: <?php echo($kq[0]['tinhtrang']);?></h4>
                <div>
                 <p><h4>Chi Tiết:</h4><?php echo($kq[0]['chitiet']);?>
                </p>   
            </div>
            
<div class="row">
<form class="form-horizontal">
 
 <div class="form-group">
     <label  class="col-sm-2 control-label">Size</label>
     <div class="col-sm-10">
         <select name="" id="inputcolor" class="form-control" required="required" >
            <?php
            $armau=explode(",",$kq[0]['color']);
            ?>
             <?php  foreach ($armau as $value) :?>
             <option value="<?php echo($value);?>"><?php echo($value);?></option>
             <?php endforeach?>
         </select>
     </div>
 </div>

 <div class="form-group">
     <label  class="col-sm-2 control-label">Màu Sắc</label>
     <div class="col-sm-10">
         <select name="" id="inputsize" class="form-control" required="required">
         <?php
            $arsize=explode(",",$kq[0]['size']);
            ?>
             <?php  foreach ($arsize as $value) :?>
             <option value="<?php echo($value);?>"><?php echo($value);?></option>
             <?php endforeach?>
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
  
  <form action="../lib/thembinhluan.php" method="POST" class="form-horizontal" role="form" >
          <div class="form-group">
              <legend><i><b>Thêm Bình Luận</b></i></legend>
          </div>
            
          <div class="form-group" style="margin:0px;width:100%;">
                  <input type="hidden" value="<?php echo($id);?>" name="id">
                  <div class="row">
                  <label for="input" class="col-sm-2 col-md-1 col-xs-2  control-label">Tên</label>
                  <div class="col-sm-10 col-md-11 col-xs-10" >
                      <input type="text" name="name"  style="width:100%" id="input" class="form-control" value="" required="required" placeholder="Mời Điền Tên...">
                  </div>
                  </div>
                  
                  <div class="row"style="margin-top:20px">
                  <label for="input" class="col-sm-2 col-md-1 col-xs-2 control-label">Bình Luận</label>
                  <div class="col-sm-10 col-md-11 col-xs-10">
                    <textarea name="cmt" id="" cols="auto" rows="5" style="width:100%" required="required" placeholder="Comment...."></textarea>
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

    <?php  foreach ($bl as $val) :?>
    <?php
$rep=$db->exec_sql("select * from traloibinhluan where id_cmt=".$val['id_cmt']." and check_reply='Y'");
    ?>
    <div class="row allcmt " style=" margin-bottom:15px; border-bottom:1px solid #9494b8;">
        
        <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
            <img src="../img/<?php echo($kq[0]['img']);?>" width=100%>
        </div>
        
        <div class="col-xs-10 col-sm-10 col-md-11 col-lg-11">
       <span style="font-size:20px; color: #33adff"><i> <?php echo($val['name']);?></i></span> 
       <span style="font-size:15px; padding-left:10px;"><?php echo($val['date']);?></span>
       <span style="font-size:15px; color: #ff6600; padding-left:10px;" class="reply"> <b>Reply</b></span>
       <div>
       <?php echo($val['cmt']);?>
       </div>
        </div>
         
        <?php  foreach ($rep as $kqrep) :?>
<div class="row col-md-offset-1 col-xs-offset-1" style=" margin-bottom:15px; border-bottom:1px solid #9494b8;">
<div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
       <img src="../img/<?php echo($kq[0]['img']);?>" width="60%">    
        </div>
        
        <div class="col-xs-9 col-sm-9 col-md-10 col-lg-10" style="margin-left:-15px;">
       <span style="font-size:20px; color: #cc9900"><i> <?php echo($kqrep['ten']);?></i></span> 
       <span style="font-size:15px; padding-left:10px;"><?php echo($kqrep['create_at']);?></span>
       <div>
       <?php echo($kqrep['reply']);?>
       </div>
        </div>
</div>
<?php endforeach?>










         <div class="row col-md-offset-1 hidden repcmt">
          <form action="../lib/themreply.php" method="POST" class="form-horizontal" role="form" >
          <div class="form-group">
          </div>
            
          <div class="form-group" style="margin:0px;width:100%;">
          
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <p class="anreply" style="float:right"><u>Ẩn</u></p>
          </div>
          
                  <input type="hidden" value="<?php echo($val['id_cmt']);?>" name="id_cmt">
                  <div class="row">
                  <label for="input" class="col-sm-2 col-md-1 col-xs-2  control-label">Tên</label>
                  <div class="col-sm-10 col-md-11 col-xs-10" >
                      <input type="text" name="name"  style="width:100%" id="input" class="form-control" value="" required="required" placeholder="Mời Điền Tên...">
                  </div>
                  </div>
                  
                  <div class="row"style="margin-top:20px">
                  <label for="input" class="col-sm-2 col-md-1 col-xs-2 control-label">Bình Luận</label>
                  <div class="col-sm-10 col-md-11 col-xs-10">
                    <textarea name="reply" id="" cols="auto" rows="5" style="width:100%" required="required" placeholder="Reply...."></textarea>
                  </div>
                  
                  </div>
                  
                  <div class="row">
                  <div class="form-group">
                      <div class="col-sm-10 col-sm-offset-2 col-xs-offset-2 col-md-offset-1 " >
                          <button type="submit"  style="margin-left:8px;margin-top:15px;" class="btn btn-primary">Reply</button>
        
                      </div>
                  </div>
                  </div>
                       
        </div>
        </form>
         </div>
         
    </div>
    <?php endforeach?>
  
    <div class="row">
    <a href="" style="float:right;padding-right:25px;" class="xemthemcmt" data-page="<?php echo($page);?>"  data-id="<?php echo($id);?>" max="<?php echo($maxpage);?>">Xem Thêm >></a>
 </div>
              
  
   
    
</div>
<!-- hiện Cmt -->
<h3 class="my-4 hidden-xs">Sản Phẩm Liên Quan</h3>

<div class="row hidden-xs" style="margin-bottom:15px;">
<div id="imageCarousel" class="carousel slide" data-interval="3000"
     data-ride="carousel" data-pause="hover" data-wrap="true">

    <div class="carousel-inner">
        <div class="item active">
            <div class="row">
            <?php  foreach ($lq1 as $value) :?>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 ">
                   <a href="product.php?id=<?php echo($value['id']);?>"> <img src="../img/<?php echo($value['img']);?>"  class="img-responsive  imgcar "></a>
                    <div class="carousel-caption">
                        <h3><?php echo($value['name']) ?></h3>
                    </div>
            </div>
            <?php endforeach?>
            </div>
        </div>
        <div class="item">
            <div class="row">
            <?php  foreach ($lq2 as $value) :?>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 ">
                   <a href="product.php?id=<?php echo($value['id']);?>"> <img src="../img/<?php echo($value['img']);?>"  class="img-responsive  imgcar "></a>
                    <div class="carousel-caption">
                        <h3><?php echo($value['name']) ?></h3>
                    </div>
            </div>
            <?php endforeach?>
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
<?php
require('../layout/footer.php');
?>