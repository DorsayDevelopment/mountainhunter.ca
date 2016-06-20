<?php get_header(); ?>
<div class="page-container">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
  <?php the_content(); ?>

  <?php comments_template(); ?>

  <?php endwhile; else: ?>
    <p><?php _e('Sorry, this post does not exist.'); ?></p>
  <?php endif; ?>
  </div>
<div class="col-md-3">
<?php do_action( 'woocommerce_sidebar' ); ?>
</div>
<?php get_footer(); ?>