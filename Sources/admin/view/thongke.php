<?php
require_once('../layout/header.php');
?>
<div id="content-wrapper">

<div class="container-fluid">
  <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
    Thống Kê


<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    
    
    <div class="row">
    
    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
    <select name="" id="inputselect" class="form-control" >
        <option value="">--Mời Chọn --</option>
        <option value="ngay">Theo Ngày</option>
        <option value="thang">Theo Tháng</option>
        <option value="nam">Theo Năm </option>
        <option value="chinhxac">Chính Xác</option>
    </select>
    </div>
    
   
   <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 selecttk">
  
      <input type="date" name="" id="inputngay" class="form-control d-none" value="" required="required" title="">
  
    <select name="" id="inputthang" class="form-control d-none  ">
        <option value="">-- Chọn Tháng --</option>
        <?php
       for ( $i=1; $i < 13 ; $i++) { 
         
        ?>
   <option value="<?php echo($i); ?>">Tháng <?php echo($i); ?></option>
       <?php
       } 
        ?>

    </select>
    
    <input type="text" name="" id="inputnam" class="form-control d-none " value="" required="required" placeholder="Mời Nhập Năm" >
    
   </div>
   
   <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
   <span class="d-none inputtimenho">Từ:<input type="date" name="" id="inputtimenho" class="form-control " value="" required="required" title="" style="width:85%;float:right;" ></span>
   </div>

   <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
   <span class="d-none inputtimelon ">Đến:<input type="date" name="" id="inputtimelon" class="form-control" value="" required="required" title="" style="width:85%;float:right;" ></span>
   </div>
    </div>
    
    
</div>

  
    
</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered"  width="100%" cellspacing="0">
          <thead class="text-center">
            <tr>
              <th width="25%" >Số Hóa Đơn</th>
              <th width="25%">Doanh Thu</th>
              <th width="25%">Số Hàng Bán</th>
              <th width="25%">Sản Phẩm Bán Chạy Nhất</th>
              
              <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
              </div>
              
            </tr>
          </thead>
          <tfoot>
            <tr>
            </tr>
          </tfoot>
          <tbody>
          <tr class="text-center">
          <td id="sohd"></td>
          <td id="doanhthu"></td>
          <td id="sohangban"></td>
          <td id="sanpham"></td> 
          </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<?php
require_once('../layout/footer.php');
?>