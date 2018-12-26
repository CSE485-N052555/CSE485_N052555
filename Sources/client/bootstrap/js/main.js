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
if(validatePhone(sdt.trim())&& validateEmail(email.trim()))
{
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
   
}

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

$('.xemthemcmt').click(function(){
  var page=parseInt($(this).attr('data-page')); 
  var id= $(this).attr('data-id');
  var max=parseInt($(this).attr('max'));
  page=page +6; 
   if(page<=max)
   {
    $(this).attr('data-page',page);
    $(this).attr('href','product.php?page='+page+'&id='+id);  
   }
   else
   {
     alert("Đã Hết Bình Luận");
   }

});



function validatePhone(txtPhone) {
    var filter = /^[0-9-+]+$/;
    if (filter.test(txtPhone + "") && txtPhone.length == 10 ) {
        return true;
    } else {
        return false;
    }
}

function validateEmail(sEmail) {
    var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    if (filter.test(sEmail)) {
        return true;
    } else {
        return false;
    }
}
$('#inputemail').keyup(function(){
if(!validateEmail($(this).val()))
{
$('#erroremail').css("color","red");
 $('#erroremail').html("Email Không Hợp Lệ!!!");
}
else{
    $('#erroremail').html("Email Hợp Lệ!!!");
    $('#erroremail').css("color","#1aff1a");
}

});
$('#inputsdt').keyup(function(){
    if(!validatePhone($(this).val()))
    {
    $('#errorsdt').css("color","red");
     $('#errorsdt').html("SDT Không Hợp Lệ!!!");
    }
    else{
        $('#errorsdt').html("SDT Hợp Lệ!!!");
        $('#errorsdt').css("color","#1aff1a");
    }
});

$('.tym').click(function(){

var idmau=$(this).attr('color');
if(idmau=="0")
{  
    $(this).children().css("color","red");
    $(this).attr('color',"1")

}
else
{
    $(this).children().css("color","hsl(0, 0%, 15%)");
    $(this).attr('color',"0");
   
}


});
});

