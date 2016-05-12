<div id="headliner">
  <a href="#"><img src="<?php bloginfo('template_directory') ?>/img/MHS.png" alt=""></a>
</div>

<?php get_header(); ?>

<div class="heading">
  <h3>Featured</h3>
</div>

<div class="product-list">
  <?php
  $args = array( 'post_type' => 'product', 'product_cat' => 'featured', 'numberposts' => 3);
  $loop = new WP_Query($args);
  while ( $loop->have_posts() ) : $loop->the_post(); ?>

    <div class="product-thumbnail">
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
