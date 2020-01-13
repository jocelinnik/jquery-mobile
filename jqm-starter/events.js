$(document).on("mobileinit", function(){
    console.log("mobileinit");
    //$.mobile.page.prototype.option.theme = "b";
    $.event.special.swipe.horizontalDistanceThreshold = 100;
});