$(document).ready(function() {
    $('.them').click(function(){
   var id=$(this).parents('tr').find('#id').text();
   $(document).find('#iddanhmuc').val(id);
    });

    $('.changeloaisp').click(function(){
        var id=$(this).parents('tr').find('#id').text();
        $(document).find('#idloaisp').val(id);
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
           location.reload();
         },
         type: 'GET'
      });
    }
    else
    {
        alert(" Bạn Đã Hủy Thao Tác");
    }
 }
 else
 {
     alert("Bạn  Phải Chọn Ít Nhất 1 Sản Phẩm");
 }

   });
});
  