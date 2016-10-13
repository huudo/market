$(document).on("click",".action-buy", function(){
    var id = $(this).attr('tittle');
    var count = parseInt($(".spanCartCount").text());
    count++;
    $(".spanCartCount").text(count.toString());
    $.ajax({
        type: "POST",
        url: "/addToCart",
        data: {'id':id, '_token': $('input[name=_token]').val()},
            success: function(msg){
                console.log(msg);  
            },
            error: function(){
            alert("failure");
        }
    });
});
    



