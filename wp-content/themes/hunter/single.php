<?php
/**
 * Created by PhpStorm.
 * User: Brycen
 * Date: 2015-03-03
 * Time: 12:26 AM
 */
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>

    <?php comments_template(); ?>

<?php endwhile; else: ?>
    <p><?php _e('Sorry, this page does not exist.'); ?></p>
<?php endif; ?>


<?php get_footer(); ?>