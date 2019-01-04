<?php
include('../lib/database.php');
session_start();
$db=new Database;
$sql="select * from danhmuc";
$danhmuc=$db->exec_sql($sql);
$i=0;
if(isset($_SESSION['card']))
{
    foreach ($_SESSION['card'] as $key => $value) {
    $i++;
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HT Shop</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/styletrangchu.css">
    <link rel="shortcut icon" href="../img/favicon.jpg" type="img/png">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5c2853d482491369ba9fea63/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<header class="mo">

        <div class="container-fiuld ">
            
            <div class="row">
          
          <nav class="navbar navbar-default bartop navbar-inverse " role="navigation">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                  <img src="../img/logo.png"  class="anhlogo">
              </div>
          
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse navbar-ex1-collapse text-nav  ">
                  <ul class="nav navbar-nav navbar-left">
                      <li ><a href="../view/home.php" >Trang Chủ</a></li>
                      <?php  foreach ($danhmuc as $value) :?>
                      <?php
                      
                      $sql2="select * from loaisp where id_danhmuc=".$value['id'];
                      $loaisp=$db->exec_sql($sql2);
                      ?>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo($value['danhmuc']) ?> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                        <?php  foreach ($loaisp as $valueloaisp) :?>
                            <li><a href="../view/danhmuc.php?id=<?php echo($valueloaisp['id_loaisp']) ?>"><?php echo($valueloaisp['loaisp']) ?> </a></li>
                        <?php endforeach?>
                        </ul>
                    </li>
                      <?php endforeach?>
                  </ul>
                  <form class="navbar-form navbar-right" role="search" action='search.php' method="GET">
                      <div class="form-group">
                          <input type="text" name="tk" class="form-control" placeholder="Search">
                      </div>
                      <button type="submit" class="btn btn-primary tk">Tìm Kiếm</button>
                  </form>
                  <a href="../view/giohang.php"> <button  class="buttongiohang navbar-right"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"><span class=""><?php echo($i)?></span></span> </button></a>
              </div><!-- /.navbar-collapse -->
          </nav>
        </div>
        </div>
           
           <div class="container-fiuld carosel-kc">
               
               <div class="row">
                   
                   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                       
                       <div id="carousel-id" class="carousel slide " data-ride="carousel">
                           <ol class="carousel-indicators">
                               <li data-target="#carousel-id" data-slide-to="0" class=""></li>
                               <li data-target="#carousel-id" data-slide-to="1" class=""></li>
                               <li data-target="#carousel-id" data-slide-to="2" class="active"></li>
                           </ol>
                           <div class="carousel-inner banner">
                               <div class="item active">
                                   <img  src="../img/banner1.jpg " >
                                   <div class="container">
                                       <div class="carousel-caption">
                                           <h1>Example headline.</h1>
                                           <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
                                           <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                                       </div>
                                   </div>
                               </div>
                               <div class="item">
                                   <img src="../img/banner2.jpg" >
                                   <div class="container">
                                       <div class="carousel-caption">
                                           <h1>Another example headline.</h1>
                                           <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                           <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                                       </div>
                                   </div>
                               </div>
                               <div class="item ">
                                   <img  src="../img/banner3.jpg" >
                                   <div class="container">
                                       <div class="carousel-caption">
                                           <h1>One more for good measure.</h1>
                                           <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                           <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <a  style="padding-top:350px;"class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-refresh"></span></a>
                           <a   style="padding-top:350px;"class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-refresh"></span></a>
                       </div>
                       
                   </div>
                   
               </div>
               
               
           </div>
           
 </header>