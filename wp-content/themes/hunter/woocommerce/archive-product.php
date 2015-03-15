<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive.
 *
 * Override this template by copying it to yourtheme/woocommerce/archive-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

<div class="container">

    <div class="headline row">
        The Shop
    </div>

    <?php do_action( 'woocommerce_archive_description' ); ?>

    <div class="row">

        <!-- Product Loop Content -->
        <div class="col-md-9">
            <?php do_action( 'woocommerce_before_main_content' );

            if ( have_posts() ) :

                do_action( 'woocommerce_before_shop_loop' );

                // Product loop
                woocommerce_product_loop_start();

                woocommerce_product_subcategories();

                while ( have_posts() ) : the_post(); ?>

                    <div class="col-md-4">
                        <?php wc_get_template_part( 'content', 'product' ); ?>
                    </div>

                <?php endwhile; // end of the loop.

                woocommerce_product_loop_end();

                do_action( 'woocommerce_after_shop_loop' );

            elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) :

                wc_get_template( 'loop/no-products-found.php' );

            endif;

            do_action( 'woocommerce_after_main_content' );
            ?>
        </div>

        <!-- Sidebar -->
        <div class="col-md-3">
            <?php do_action( 'woocommerce_sidebar' ); ?>
        </div>

    </div>

</div>

<?php get_footer( 'shop' ); ?>
