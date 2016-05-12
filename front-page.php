  <img id="headliner-background" src="<?php bloginfo('template_directory') ?>/img/mountain.jpg" alt="">

<div id="headliner">
  <a href="#"><img src="<?php bloginfo('template_directory') ?>/img/MHS.png" alt=""></a>
</div>



<?php get_header(); ?>

<div class="heading">
  <h3>Welcome</h3>
</div>

<div class="teaser-list">
  <div class="teaser">
    <a href="#">
      <span>New Products</span>
      <img src="<?php bloginfo('template_directory'); echo '/' ?>img/forest-24.jpg" alt="">
    </a>
  </div>
  <div class="teaser">
    <a href="#">
      <span>Join MHS</span>
      <img src="<?php bloginfo('template_directory'); echo '/' ?>img/forest-33.jpg" alt="">
    </a>
  </div>
  <div class="teaser">
    <a href="#">
      <span>About Us</span>
      <img src="<?php bloginfo('template_directory'); echo '/' ?>img/mountain-49.jpg" alt="">
    </a>
  </div>
</div>


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
