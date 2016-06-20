<?php get_header(); ?>

  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="heading">
            <h3><?php the_title(); ?></h3>
          </div>
          <?php the_content(); ?>

        <?php endwhile; else: ?>
          <p><?php _e('Sorry, this page does not exist.'); ?></p>
        <?php endif; ?>
      </div>
      <div class="col-md-3">
        <?php do_action( 'woocommerce_sidebar' ); ?>
      </div>
    </div>
  </div>



<?php get_footer(); ?>