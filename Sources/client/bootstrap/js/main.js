$(document).ready(function(){
   
   $('.cong').click(function(){
       var gt= $('.soluong').val();
       gt++;
       $('.soluong').val(gt);
   });
   $('.tru').click(function(){
    var gt= $('.soluong').val();
    if(gt==0)
    {
        gt=0;
        $('.soluong').val(gt);
    }
   else
   {
    gt--;
    $('.soluong').val(gt);
   }
});
$('.muangay').click(function(){
    var dataid=$(this).attr('data-id');
    $.ajax({
        url: '../lib/xuli.php',
        data: {
           id:dataid
        },
        error: function() {
          alert('lỗi');
        },
        dataType: 'json',
        success: function(data) {
       $('#ten').text(data[0].ten);
       $('#gia').text(data[0].gia);
       $('#chitiet').text(data[0].chitiet);
       $('.imgproduct').attr('src',"../img/"+data[0].img);
       $('.link').attr('id',dataid);
        },
        type: 'GET'
     });
  $('.js-modal1').addClass('show-modal1');
});
$('#thoat,.js-hide-modal1').click(function(){
    $('.js-modal1').removeClass('show-modal1');

});
 $('.themgio').click(function(){
  var size=$(document).find('#inputsize').val();
  var color=$(document).find('#inputcolor').val();
var sol=$(document).find('#inputsoluong').val();
var id=$(this).attr('data-id');
$.ajax({
    url:'themgiohang.php',
    data: {
       id: id,
       size: size,
       color:color,
       sol:sol
    },
    error: function() {
       alert('Xuất Hiện Lỗi Mời Thử Lại!')
    },
    dataType:'text',
    success: function(data) {
      if(data=="isset")
      {
          alert('Hàng Đã Tồn Tại Trong Giỏ!');
      }
      else{
          alert('Thêm Thành Công!');
      }
    },
    type: 'GET'
 });
 });
 $('.update-card').click(function(){
     var id= $(this).attr('id');
     var qty=$(this).parents('tr').find('.qty').val();
     $.ajax({
        url:'update-card.php',
        data: 
        {
           id: id,
           sol:qty
        },
        error: function() {
            alert('Có Lỗi Mời Thử Lại');
        },
        dataType:'text',
        success: function(data)
        {
       alert('Chỉnh Sửa Thành Công');
        },
        type: 'GET'
     });
   
 });
 $('.thanhtoan').click(function(){
  var cha=$(this).parents('.container-fluid');
var tenk=cha.find('#inputhoten').val();
var email=cha.find('#inputemail').val();
var sdt=cha.find('#inputsdt').val();
var diachi=cha.find('#inputdiachi').val();
    $.ajax({
        url:'thanhtoan.php',
        data: 
        {
           tenk:tenk,
           email:email,
           sdt:sdt,
           diachi:diachi
        },
        error: function() {
            alert('Có Lỗi Mời Thử Lại');
        },
        dataType:'text',
        success: function(data)
        {
       alert('Đơn Hàng Đã được Gửi');
        },
        type: 'POST'
     });
 });
$('.them').click(function(){
var id=$('.link').attr('id');
var sol=$(document).find("#inputsol").val();
var size=$(document).find('#inputsizeqick').val();
var color=$(document).find('#inputcolorqick').val();
$.ajax({
    url:'themgiohang.php',
    data: {
       id: id,
       size: size,
       color:color,
       sol:sol
    },
    error: function() {
       alert('Xuất Hiện Lỗi Mời Thử Lại!')
    },
    dataType:'text',
    success: function(data) {
      if(data=="isset")
      {
          alert('Hàng Đã Tồn Tại Trong Giỏ!');
      }
      else{
          location.reload();
          alert('Thêm Thành Công!');
      }
    },
    type: 'GET'
 });
});
});

