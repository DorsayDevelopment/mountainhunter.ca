<?php get_header(); ?>

<div class="page-container">
  <div class="heading">
    <h3>Blog</h3>
  </div>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <a href="<?php the_permalink(); ?>" class="post-list-post">
      <h3><?php the_title(); ?></h3>
      <p><em><?php the_time('l, F jS, Y'); ?></em></p>
    </a>

  <?php endwhile; else: ?>
  <p><?php _e('Sorry, there are no posts.'); ?></p>
  <?php endif; ?>
</div>

<div>
<?php do_action( 'woocommerce_sidebar' ); ?>
</div>


<?php get_footer(); ?>