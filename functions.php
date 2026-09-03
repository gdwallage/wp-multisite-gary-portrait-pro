<?php
/**
 * Child Theme Functions
 * Inherits all parent templates and advanced widgets from gary-wedding-pro
 */

add_action( 'wp_enqueue_scripts', function() {
    $parent_theme = wp_get_theme('gary-wedding-pro');
    $parent_ver = $parent_theme->exists() ? $parent_theme->get('Version') : time();
    $child_ver = wp_get_theme()->get('Version');
    
    // Ensure clean handle and cache-busting version
    wp_dequeue_style( 'parent-style' );
    wp_enqueue_style( 'gary-wedding-v3-editorial', get_template_directory_uri() . '/style.css', array(), $parent_ver );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('gary-wedding-v3-editorial'), $child_ver );
}, 20 );
