<?php
/**
 * Created by PhpStorm.
 * User: Brycen
 * Date: 2015-03-03
 * Time: 12:15 AM
 */
?>

<?php get_header(); ?>

<div class="container">
    <div class="headline-1 row">
        The Blog
    </div>
    <div class="row">
        <div class="col-md-9">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p><em><?php the_time('l, F jS, Y'); ?></em></p>
                <hr>

            <?php endwhile; else: ?>
                <p><?php _e('Sorry, there are no posts.'); ?></p>
            <?php endif; ?>
        </div>

        <div class="col-md-3">
            <?php do_action( 'woocommerce_sidebar' ); ?>
        </div>
    </div>

</div>

<?php get_footer(); ?>