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