$j=jQuery.noConflict();

$j(document).ready(function() {
    $j('.button-collapse').sideNav();
    
    
    $j(window).scroll(function () {
        if ($j(window).scrollTop() > 50) {
            $j('nav').addClass('nav-fixed');
        }
        if ($j(window).scrollTop() < 51) {
            $j('nav').removeClass('nav-fixed');
        }
    });
    
});


