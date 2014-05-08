jQuery(document).ready(function($){
    $(".section").height($(window).height());
    $(window).resize(function(){
        $(".section").height($(window).height());
    });
});
