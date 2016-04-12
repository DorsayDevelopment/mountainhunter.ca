<?php
function hunter_scripts()
{
  wp_register_script( 'actions', get_template_directory_uri() . '/js/main.js', array(), false, true);
  wp_enqueue_script( 'actions' );
}
add_action( 'wp_enqueue_scripts', 'hunter_scripts' );


function register_menus() {
  register_nav_menu('header-main-menu',__( 'Header Main Menu' ));
  register_nav_menu('header-secondary-menu',__( 'Header Secondary Menu' ));
  register_nav_menu('footer-nav-menu',__( 'Footer Navigation Menu' ));
  register_nav_menu('footer-store-menu',__( 'Footer Store Menu' ));
}
add_action( 'init', 'register_menus' );


add_theme_support( 'woocommerce' );
add_theme_support( 'post-thumbnails' );
add_filter( 'woocommerce_product_tabs', 'wcs_woo_remove_reviews_tab', 98 );


function wcs_woo_remove_reviews_tab($tabs) {
  unset($tabs['reviews']);
  return $tabs;
}
function wc_remove_related_products($args) {
  return array();
}
add_filter('woocommerce_related_products_args','wc_remove_related_products', 10);