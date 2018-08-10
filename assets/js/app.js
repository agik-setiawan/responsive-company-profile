var $=jQuery;
$(function(){
    $("#openMenu").click(function(){
        $("#sideMenu").css({
            'width':'250px'
        });
    })
    $("#closeMenu").click(function(){
        $("#sideMenu").css({
            'width':'0'
        });
    });

    $(window).scroll(function(event) {
        event.preventDefault();
        var scroll_y=$(this).scrollTop();
        console.log($(this));
        if(scroll_y>1000){
            $("#media-sosial").css(
            {
                'display':'none',
                'transition': 'all 0.5s'
            }
            );
        }else if(scroll_y<1000){
            $("#media-sosial").css(
            {
                'display':'block',
                'transition': 'all 0.5s'
            }
            );
        }
    });
});
