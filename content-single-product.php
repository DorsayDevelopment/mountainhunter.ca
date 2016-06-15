<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php
	 do_action( 'woocommerce_before_single_product' );

	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
?>

<div itemscope itemtype="<?php echo woocommerce_get_product_schema(); ?>" class="page-container" id="product-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php do_action( 'woocommerce_before_single_product_summary' ); ?>

	<div class="summary entry-summary">

		<?php do_action( 'woocommerce_single_product_summary' ); ?>

	</div><!-- .summary -->

	<meta itemprop="url" content="<?php the_permalink(); ?>" />

</div><!-- #product-<?php the_ID(); ?> -->

<?php do_action( 'woocommerce_after_single_product' ); ?>