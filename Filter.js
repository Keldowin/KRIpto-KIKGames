console.log('Всё работает')

$("#on-sale").on('click', function(){
    $('.on-sale').addClass("highlight");
    $('.on-sale').removeClass("display");
    $('.featured').removeClass("highlight");
    $('.featured').addClass("display");
    $('.need').removeClass("highlight");
    $('.need').addClass("display");
    $('.new').removeClass("highlight");
    $('.new').addClass("display");
    $('.top').removeClass("highlight");
    $('.top').addClass("display");
});
$("#need").on('click', function(){
    $('.need').addClass("highlight");
    $('.need').removeClass("display");
    $('.on-sale').removeClass("highlight");
    $('.on-sale').addClass("display");
    $('.featured').removeClass("highlight");
    $('.featured').addClass("display");
    $('.new').removeClass("highlight");
    $('.new').addClass("display");
    $('.top').removeClass("highlight");
    $('.top').addClass("display");
});
$("#featured").on('click', function(){
    $('.featured').addClass("highlight");
    $('.featured').removeClass("display");
    $('.on-sale').removeClass("highlight");
    $('.on-sale').addClass("display");
    $('.need').removeClass("highlight");
    $('.need').addClass("display");
    $('.new').removeClass("highlight");
    $('.new').addClass("display");
    $('.top').removeClass("highlight");
    $('.top').addClass("display");
});
$("#new").on('click', function(){
    $('.new').addClass("highlight");
    $('.new').removeClass("display");
    $('.on-sale').removeClass("highlight");
    $('.on-sale').addClass("display");
    $('.featured').removeClass("highlight");
    $('.featured').addClass("display");
    $('.need').removeClass("highlight");
    $('.need').addClass("display");
    $('.top').removeClass("highlight");
    $('.top').addClass("display");
});
/*$("#top").on('click', function(){
    $('.top').addClass("highlight");
    $('.new').removeClass("highlight");
    $('.on-sale').removeClass("highlight");
    $('.featured').removeClass("highlight");
    $('.need').removeClass("highlight");
    $('.on-sale').removeClass("highlight");
});*/
$("#remove").on('click', function(){
    $('.new').removeClass("display");
    $('.featured').removeClass("display");
    $('.need').removeClass("display");
    $('.on-sale').removeClass("display");
});