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
    $("a[rel*=leanModal]").leanModal();	
    
    $("textarea.editor").ckeditor();
    
    $("#form_login").submit(function(){
        $.ajax({
            type: 'POST',
            url: 'login.php',
            data: 'tb_username='+$('#tb_username').val()+'&tb_password='+$('#tb_password').val(),
            success: function(response){
                if(!response == ''){
                    window.location.reload();
                }else{
                    alert('You do not belong here!');
                }
            },
            error: function(){
                alert('Stupid Bugs!');
            }
        });
        return false;
    });
});






















