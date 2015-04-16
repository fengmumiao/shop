//查询订单收入


    $("#end").live('keyup',function(event) {
       if($("#end").val().length>=8){
      $.post(
        'totalorders',
       
        {'start':$("#start").val(),'end':$("#end").val()},
        function (data){

            $("b[name=money]").text(data)
        }
        
        )}
    })


