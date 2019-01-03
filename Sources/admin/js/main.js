$(document).ready(function() {
    $('.them').click(function(){
   var id=$(this).parents('tr').find('#id').text();
   $(document).find('#iddanhmuc').val(id);
    });

    $('.changeloaisp').click(function(){
        var id=$(this).parents('tr').find('#id').text();
        $(document).find('#idloaisp').val(id);
    });

$('.xacnhanxoa').click(function(){

    var r= confirm("Bạn Có Chắc Chắn Muốn Xóa Không?");
    return r;

});



    $('.sua').click(function() {
        var checkbox = document.getElementsByName('check');
                var result = 0;
                
                // Lặp qua từng checkbox để lấy giá trị
                for (var i = 0; i < checkbox.length; i++){
                    if (checkbox[i].checked === true){
                        result ++;
                    }
                }
             
          $('#exampleModal1').on('show.bs.modal', function (e) {
            for (var i = 0; i < checkbox.length; i++){
                if (checkbox[i].checked === true){;
               $('#idsp').val(checkbox[i].value);
                }
            }
            if(result==0)
            {
                alert("Bạn Phải Chọn 1 Sản Phẩm!!!");
                e.preventDefault();
                location.reload();
            }
            if(result>1)
            {
                e.preventDefault();
                alert("Bạn Chỉ Được Chọn 1 Sản Phẩm!!!");
                location.reload();
            }
            
          });
          
        
        
    });
   $('.xoa').click(function(){
 var arrayid=Array();
 var countcb=0;
 var checkbox = document.getElementsByName('check');
 for (var i = 0; i < checkbox.length; i++)
 {
   if (checkbox[i].checked === true)
   {
   arrayid.push(checkbox[i].value);
   countcb++;
   }
 } 
 console.log(arrayid);
 if(countcb>0)
 {
    var result=confirm("Bạn Có Chắc Chắn Muốn Xóa Không?");
    if(result)
    {
   
      id=JSON.stringify(arrayid);
     
       $.ajax({
         url:'../lib/xulixoasp.php',
         data: 
         {
            id:id
           
         },
         contentType:"application/json; charset=utf-8",
         error: function() {
             alert('Có Lỗi Mời Thử Lại');
         },
         dataType:'text',
         success: function(data)
         {
      
           alert('Bạn Đã Xóa Thành Công!!!');
        //    location.reload();
         },
         type: 'GET'
      });
    }
 }
 else
 {
     alert("Bạn  Phải Chọn Ít Nhất 1 Sản Phẩm");
 }

   });
$('.xoahoadon').click(function(){
   var link= $(this).parent().attr('href');
    if(confirm("Bạn Có thật Sự Muốn Xóa"))
    {
        window.location(link);
    }

    else
    {
        return false;
    }
});

function exsistclass()
{

    if(!$('#inputngay').hasClass("d-none"))
    {
        $('#inputngay').addClass("d-none");
    }
    if(!$('#inputthang').hasClass("d-none"))
    {
        $('#inputthang').addClass("d-none");
    }
    if(!$('#inputnam').hasClass("d-none"))
    {
        $('#inputnam').addClass("d-none");
    }
    if(!$('.inputtimenho').hasClass("d-none"))
    {
        $('.inputtimenho').addClass("d-none");
    }
    if(!$('.inputtimelon').hasClass("d-none"))
    {
        $('.inputtimelon').addClass("d-none");
    }
}

$('#inputselect').change(function()
{
if($(this).val()=="ngay")
{
    exsistclass();
$('#inputngay').removeClass("d-none");
}
if($(this).val()=="thang")
{
    exsistclass();
$('#inputthang').removeClass("d-none");
}

if($(this).val()=="nam")
{
    exsistclass();
$('#inputnam').removeClass("d-none");
}

if($(this).val()=="chinhxac")
{
    exsistclass();
$('.inputtimenho').removeClass("d-none");
$('.inputtimelon').removeClass("d-none");
}
if($(this).val()=="")
{
 exsistclass();
}

});
$('#inputngay').change(function(){
    thongke();
});
$('#inputthang').change(function(){
    thongke();
});
$('#inputnam').change(function(){
    thongke();
});
$('#inputtimelon').change(function(){
    thongke();
});
$('#inputtimenho').change(function(){
    thongke();
});

function thongke()
{  
    var d=new Date();
    var sohd;
    var doanhthu;
    var sohangban;
    var sanpham;
    var inputngay=$("#inputngay").val();
    var inputthang=$("#inputthang").val();
    var inputnam=$("#inputnam").val();
    var inputtimenho=$("#inputtimenho").val();
    var inputtimelon=$("#inputtimelon").val();
    var select=$('#inputselect').val();
    if(select=="ngay"&&inputngay!=null)
    {
        sohd="SELECT COUNT(mahd) as sohd FROM `hoadon` WHERE ngaylap = '"+inputngay+"'";
        doanhthu="SELECT SUM(thanhtien) as doanhthu FROM `chitiethoadon` JOIN hoadon ON chitiethoadon.mahd=hoadon.mahd WHERE ngaylap='"+inputngay+"'";
        sohangban="SELECT SUM(soluong) as sohangban FROM `chitiethoadon` JOIN hoadon ON chitiethoadon.mahd=hoadon.mahd WHERE ngaylap='"+inputngay+"'";
        sanpham="SELECT mah, tenhang , SUM(soluong) AS soluong ,hoadon.ngaylap FROM `chitiethoadon` JOIN hoadon ON chitiethoadon.mahd=hoadon.mahd GROUP BY mah,ngaylap HAVING hoadon.ngaylap ='"+inputngay+"'"+" ORDER BY( soluong) DESC LIMIT 1";
    }
    if(select=="thang"&&inputthang!=null)
    {
        sohd="SELECT COUNT(mahd) as sohd FROM `hoadon` WHERE MONTH(ngaylap)="+inputthang+" and YEAR(ngaylap)="+d.getFullYear();
        doanhthu="SELECT SUM(thanhtien) as doanhthu FROM `chitiethoadon` JOIN hoadon ON chitiethoadon.mahd=hoadon.mahd WHERE MONTH(ngaylap)="+inputthang+" and YEAR(ngaylap)="+d.getFullYear();
        sohangban="SELECT SUM(soluong) as sohangban  FROM `chitiethoadon` JOIN hoadon ON chitiethoadon.mahd=hoadon.mahd WHERE MONTH(ngaylap)="+inputthang+" and YEAR(ngaylap)="+d.getFullYear();
        sanpham="SELECT mah, tenhang , SUM(soluong) AS soluong ,hoadon.ngaylap FROM `chitiethoadon` JOIN hoadon ON chitiethoadon.mahd=hoadon.mahd GROUP BY mah,ngaylap HAVING MONTH(hoadon.ngaylap)="+inputthang+" and YEAR(hoadon.ngaylap)="+d.getFullYear()+" ORDER BY( soluong) DESC LIMIT 1";
    }
    if(select=="nam"&&inputnam!=null)
    {
       
        sohd="SELECT COUNT(mahd) as sohd FROM `hoadon` WHERE YEAR(ngaylap) ="+inputnam;
        doanhthu="SELECT SUM(thanhtien) as doanhthu FROM `chitiethoadon` JOIN hoadon ON chitiethoadon.mahd=hoadon.mahd WHERE YEAR(ngaylap) ="+inputnam;
         sohangban="SELECT SUM(soluong) as sohangban  FROM `chitiethoadon` JOIN hoadon ON chitiethoadon.mahd=hoadon.mahd WHERE YEAR(ngaylap) ="+inputnam;
        sanpham="SELECT mah, tenhang , SUM(soluong) AS soluong ,hoadon.ngaylap FROM `chitiethoadon` JOIN hoadon ON chitiethoadon.mahd=hoadon.mahd GROUP BY mah,ngaylap HAVING YEAR(hoadon.ngaylap )="+inputnam+" ORDER BY( soluong) DESC LIMIT 1";
    }
    if(select=="chinhxac"&&inputtimelon!=null&&inputtimenho!=null)
    {
        sohd="SELECT COUNT(mahd) as sohd FROM `hoadon` WHERE ngaylap<="+"'"+inputtimelon+"'"+" and ngaylap >="+"'"+inputtimenho+"'";
        doanhthu="SELECT SUM(thanhtien)   as doanhthu FROM `chitiethoadon` JOIN hoadon ON chitiethoadon.mahd=hoadon.mahd WHERE ngaylap<="+"'"+inputtimelon+"'"+" and ngaylap>="+"'"+inputtimenho+"'";
        sohangban="SELECT SUM(soluong) as sohangban  FROM `chitiethoadon` JOIN hoadon ON chitiethoadon.mahd=hoadon.mahd WHERE ngaylap<="+"'"+inputtimelon+"'"+" and ngaylap>="+"'"+inputtimenho+"'";
        sanpham="SELECT mah, tenhang , SUM(soluong) AS soluong ,hoadon.ngaylap FROM `chitiethoadon` JOIN hoadon ON chitiethoadon.mahd=hoadon.mahd GROUP BY mah,ngaylap HAVING hoadon.ngaylap>="+"'"+inputtimenho+"'"+"  and hoadon.ngaylap<="+"'"+inputtimelon+"'"+" ORDER BY( soluong) DESC LIMIT 1";
    
    }
   
    $.ajax({
        url:'../lib/xulithongke.php',
        data: 
        {
            sohd:sohd,
            doanhthu:doanhthu,
            sohangban:sohangban,
            sanpham:sanpham

        },
        error: function() {
            alert('Có Lỗi Mời Thử Lại');
        },
        dataType:'json',
        success: function(data)
        {
            if(data==null)
            {
                $('#sohd').text("null");
                $('#doanhthu').text("null");
                $('#sohangban').text("null");
                $('#sanpham').text("null");
            }
            else
            {
                $('#sohd').text(data[0].sohd);
                $('#doanhthu').text(data[0].doanhthu +"  VNĐ");
                $('#sohangban').text(data[0].sohangban);
                $('#sanpham').text(data[0].sanpham);
            }
       
        },
        type: 'POST'
     });
}


});
