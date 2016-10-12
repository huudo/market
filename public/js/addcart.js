$(document).on("click",".action-buy", function(){
    var id = $(this).attr('tittle');
    $.ajax({
       type:'POST',
       url:'/addToCart',
       data: {'email':id, '_token': $('input[name=_token]').val()},
       success:function(data){
          console.log(data);
       }
    });
});
    



