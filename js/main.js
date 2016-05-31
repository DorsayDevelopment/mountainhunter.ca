$j=jQuery.noConflict();

$j(document).ready(function() {
    $j('.button-collapse').sideNav();


    var navTop = $j('#main-nav').offset().top;

    $j(window).scroll(function () {
        if ($j(window).scrollTop() > navTop) {
            $j('#main-nav').addClass('nav-fixed');
            $j('body').css("margin-top", "64px");
        }
        if ($j(window).scrollTop() < navTop) {
            $j('#main-nav').removeClass('nav-fixed');
            $j('body').css("margin-top", "0px");
        }
    });
    
});


