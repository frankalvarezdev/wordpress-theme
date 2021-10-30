<?php
function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri());
}

if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');
