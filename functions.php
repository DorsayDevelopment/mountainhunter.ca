<?php
function mountainhunter_scripts()
{
  wp_register_script( 'actions', get_template_directory_uri() . '/js/main.js', array(), false, true);
  wp_enqueue_script( 'actions' );
  wp_enqueue_style('font-awesome', get_template_directory_uri() . '/vendor/font-awesome/css/font-awesome.min.css');
  wp_enqueue_style('roboto-font', 'https://fonts.googleapis.com/css?family=Roboto:400,300,500', false);
}
add_action( 'wp_enqueue_scripts', 'mountainhunter_scripts' );


function register_menus() {
  register_nav_menu('header-main-menu',__( 'Header Main Menu' ));
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