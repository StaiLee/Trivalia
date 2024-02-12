$(document).ready(function(){

    $('.radio-group .radio').click(function(){
        $('.radio').addClass('gray');
        $(this).removeClass('gray');
    });
    
    $('.plus-minus .plus').click(function(){
        var count = $(this).parent().prev().text();
        $(this).parent().prev().html(Number(count) + 1);
    });
    
    $('.plus-minus .minus').click(function(){
        var count = $(this).parent().prev().text();
        $(this).parent().prev().html(Number(count) - 1);
    });
    
    });