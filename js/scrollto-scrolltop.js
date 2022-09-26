/*SCROLLTO*/

$(".scrollto").on("click", function() {
    var page = $(this).attr("href");
    var speed = 750;
    $("html, body").animate( {
        scrollTop:
        $(page).offset().top-40
    }, speed);
    return false;
});


/*SCROLLTOP*/

$(window).scroll(function() {
    if($(this).scrollTop()>300) {
        $("#scrolltop").fadeIn();
    }
    else{
        $("#scrolltop").fadeOut();
    }
});

//créer le retour haut de page au click//

$("#scrolltop").on("click", function() {
   $("html, body").animate( {
       scrollTop:0
   }, 750);
    return false;
});