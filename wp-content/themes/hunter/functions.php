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
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'bootstrap' );
}
add_action( 'wp_enqueue_scripts', 'hunter_scripts' );

function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

if (function_exists('register_sidebar')) {

    register_sidebar(array(
        'name' => 'Widgetized Area',
        'id'   => 'widgetized-area',
        'description'   => 'This is a widgetized area.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>'
    ));

}