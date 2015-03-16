<?php
/**
 * Created by PhpStorm.
 * User: Brycen
 * Date: 2015-03-02
 * Time: 7:01 PM
 */

function hunter_scripts()
{
    wp_register_script( 'jquery', get_template_directory_uri() . '/vendor/jquery/jquery-2.1.3.min.js', array(), false, true);
    wp_register_script( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', array('jquery'), false, true);
    wp_register_script( 'actions', get_template_directory_uri() . '/js/main.js', array(), false, true);
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'bootstrap' );
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