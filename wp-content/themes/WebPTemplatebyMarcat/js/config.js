//(function () {
//    function logEvent(eventName, element) {
//        console.log(Date.now(), eventName, element.getAttribute('data-src'), element.getAttribute('src'));
//    }
//
//    var callback_enter = function (element) {
//        logEvent("ENTERED", element);
//    };
//    var callback_load = function (element) {
//        logEvent("LOADED", element);
//    };
//    var callback_set = function (element) {
//        logEvent("SET", element);
//    };
//    var callback_error = function (element) {
//        logEvent("ERROR", element);
//        element.src = "https://placehold.it/220x280?text=Placeholder";
//    };
//
//    var llWebp = new LazyLoad({
//        elements_selector: ".lazy.has-webp",
//        to_webp: true,
//        callback_enter: callback_enter,
//        callback_load: callback_load,
//        callback_set: callback_set,
//        callback_error: callback_error
//    });
//    var llStandard = new LazyLoad({
//        elements_selector: ".lazy:not(.has-webp)",
//        callback_enter: callback_enter,
//        callback_load: callback_load,
//        callback_set: callback_set,
//        callback_error: callback_error
//    });
//}());
//
////フォントchange
//$(function(){
//    $(".botton_wapper button").click(function(){
//        $(".botton_wapper button").removeClass("current");
//        var fontCss = $(this).attr("class");
//        $(this).addClass("current");
//        if(fontCss == "large"){
//          $("body").css("fontSize","1.15em"); 
//        }else if(fontCss == "middle"){
//          $("body").css("fontSize","1.05em");
//        }else{
//          $("body").css("fontSize","1em");
//        }
//    });
//});

$(function () {
    //ハンバーガー
    $('.sp_menu_button').on('click',function(){
        console.log('---');
        $('.spHeaderNav').slideToggle();
        if($(this).hasClass('off')){
            $(this).removeClass('off').addClass('on');
        }else {
            $(this).removeClass('on').addClass('off');
        }
    });
    $('.jsbtnSubNavi').on('click',function(){
        $(this).next('.spHeaderNavUlSub').slideToggle();
        if($(this).hasClass('off')){
            $(this).removeClass('off').addClass('on');
        }else {
            $(this).removeClass('on').addClass('off');
        }
    });
    //沿革
    $('.jsBtnCompanyOutlineMain').on('click',function(){
         $(this).next('.trigerCompanyOutline').slideToggle();
        if($(this).hasClass('off')){
            $(this).removeClass('off').addClass('on');
        }else {
            $(this).removeClass('on').addClass('off');
        }
    });
});
            

    
jQuery(function($){
   $(window).ready( function() {
        $('#num1').jpostal({
           postcode : [
              '#num1',
              '#num2'
           ],
           address : {
              '#address'  : '%3%4%5',
           }
        });
     });
});
jQuery(function($){
    var headerHeight = 0;
    var urlHash = location.hash;
    if (urlHash) {
        $('body,html').stop().scrollTop(0);
        setTimeout(function () {
            var target = $(urlHash);
            var position = target.offset().top - headerHeight;
            $('body,html').stop().animate({scrollTop: position}, 500);
        }, 100);
    }
    $('a[href^="#"]').click(function () {
        var href = $(this).attr("href");
        var target = $(href);
        var position = target.offset().top - headerHeight;
        $('body,html').stop().animate({scrollTop: position}, 500);
    });
});