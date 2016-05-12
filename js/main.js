$j=jQuery.noConflict();

$j(document).ready(function() {
    $j('.button-collapse').sideNav();


    var navTop = $j('nav').offset().top;

    $j(window).scroll(function () {
        if ($j(window).scrollTop() > navTop) {
            $j('nav').addClass('nav-fixed');
        }
        if ($j(window).scrollTop() < navTop) {
            $j('nav').removeClass('nav-fixed');
        }
    });
    
});


