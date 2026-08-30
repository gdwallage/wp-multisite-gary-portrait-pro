<?php
/**
 * Child Theme Functions
 * Inherits all parent templates and advanced widgets from gary-wedding-pro
 */

add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'), wp_get_theme()->get('Version') );
}, 20 );
