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
            if(result>1)
            {
            alert("Bạn Chỉ Được Chọn 1 Sản Phẩm");
                 e.preventDefault();
            }
            else
            {
            $('#exampleModal1').modal('show'); 
            }
          });
          
        
        
    });
});
  