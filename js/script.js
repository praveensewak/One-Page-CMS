/* Author: Praveen Sewak */

$(document).ready(function(){
    $("#nav a").bind('click', function(){
        var offset = $($(this).attr('href')).offset();
        $.scrollTo(offset.top - 120, 500);
        return false;
    });
    $(window).scroll(function(){
        if($(this).scrollTop() != 0){
            $("#backToTop").fadeIn();
        }else{
            $("#backToTop").fadeOut();
        }
    });
    $("#backToTop a").click(function(){
        $('body,html').animate({scrollTop:0}, 800);
    });
    if($(window).scrollTop() != 0){
        $("#backToTop").fadeIn();
    }
});






















