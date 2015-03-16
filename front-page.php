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

    <!--3 tabs-->
    <div class="teaser col-md-4 col-sm-12 hover-effect text-center">
        <figure class="effect-bubba">
            <img src="<?php bloginfo('template_directory'); echo '/' ?>img/forest-24.jpg" alt="coffee cup"/>
            <figcaption>
                <h2>New <span>Products</span></h2>
                <p>The latest and greatest from MHS</p>
                <a href="<?php echo esc_url( home_url( 'shop/?orderby=date' ) ); ?>"></a>
            </figcaption>
        </figure>
    </div>
    <div class="teaser col-md-4 col-sm-12 hover-effect text-center">
        <figure class="effect-bubba">
            <img src="<?php bloginfo('template_directory'); echo '/' ?>img/forest-33.jpg" alt="coffee cup"/>
            <figcaption>
                <h2>Join <span>MHS</span></h2>
                <p>Become a member of the Society</p>
                <a href="#"></a>
            </figcaption>
        </figure>
    </div>
    <div class="teaser col-md-4 col-sm-12 hover-effect text-center">
        <figure class="effect-bubba">
            <img src="<?php bloginfo('template_directory'); echo '/' ?>img/mountain-49.jpg" alt="coffee cup"/>
            <figcaption>
                <h2>About <span>Us</span></h2>
                <p>Get to know the MHS crew.</p>
                <a href="<?php echo esc_url( home_url( 'about' ) ); ?>"></a>
            </figcaption>
        </figure>
    </div>


    <div class="headline-1 col-md-12">
        Featured Products
    </div>

    <?php
    $args = array( 'post_type' => 'product', 'product_cat' => 'featured', 'numberposts' => 4);
    $loop = new WP_Query($args);
    while ( $loop->have_posts() ) : $loop->the_post(); ?>

        <div class="col-md-3 col-sm-12 home-products">
            <a href="<?php echo get_permalink( $loop->post->ID ) ?>">
                <?php
                if(has_post_thumbnail()) {
                    the_post_thumbnail();
                } ?>
                <p><?php the_title(); ?></p>

            </a>
        </div>

    <?php endwhile; wp_reset_query(); ?>

</div>

<?php get_footer(); ?>