
$(".submenu").click(function(){
    $(this).children("ul").slideToggle();
})

$(".minmenu").click(function(p){
    p.stopPropagation();
})

$('.mill').click(function(){
    $(this).children('.children').slideToggle();
});