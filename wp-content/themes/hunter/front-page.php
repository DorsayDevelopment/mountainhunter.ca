<?php
/**
 * Created by PhpStorm.
 * User: Brycen
 * Date: 2015-03-03
 * Time: 12:13 AM
 */
?>

<?php get_header(); ?>

<div class="container">
    <div class="col-md-4 col-sm-12 hover-effect text-center">
        <figure class="effect-bubba">
            <img src="<?php bloginfo('template_directory'); echo '/' ?>img/forest-24.jpg" alt="coffee cup"/>
            <figcaption>
                <h2>New <span>Produts</span></h2>
                <p>The latest and greatest from Mountain Hunter Society</p>
                <a href="#">View more</a>
            </figcaption>
        </figure>
    </div>
    <div class="col-md-4 col-sm-12 hover-effect text-center">
        <figure class="effect-bubba">
            <img src="<?php bloginfo('template_directory'); echo '/' ?>img/forest-33.jpg" alt="coffee cup"/>
            <figcaption>
                <h2>Fresh <span>Bubba</span></h2>
                <p>Bubba likes to appear out of thin air.</p>
                <a href="#">View more</a>
            </figcaption>
        </figure>
    </div>
    <div class="col-md-4 col-sm-12 hover-effect text-center">
        <figure class="effect-bubba">
            <img src="<?php bloginfo('template_directory'); echo '/' ?>img/mountain-49.jpg" alt="coffee cup"/>
            <figcaption>
                <h2>Fresh <span>Bubba</span></h2>
                <p>Bubba likes to appear out of thin air.</p>
                <a href="#">View more</a>
            </figcaption>
        </figure>
    </div>
</div>

<?php get_footer(); ?>