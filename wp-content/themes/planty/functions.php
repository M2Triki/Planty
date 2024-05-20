<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {
	wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );
}
add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );






function filter_admin( $items, $args ) {
    if ( $args->theme_location === 'primary' ) {
        if ( is_user_logged_in() && current_user_can('manage_options') ) {
            $items .= "<li class='adminurl'><a href='" . admin_url() . "'>Admin</a></li>";
        }
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'filter_admin', 10, 2);














