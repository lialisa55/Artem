<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package geum
 * @subpackage geum
 * @since 1.0.0
 */
if ( ! function_exists( 'geum_setup' ) ) {
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     *
     * @since 1.0.0
     *
     * @return void
     */
    function geum_setup() {
        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );
        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 1568, 9999 );
        // Add support for Block Styles.
        add_theme_support( 'wp-block-styles' );
        // Add support for editor styles.
        add_theme_support( 'editor-styles' );
        // Add support for responsive embedded content.
        add_theme_support( 'responsive-embeds' );
        // Add support for experimental link color control.
        add_theme_support( 'experimental-link-color' );
        // Add support for custom units.
        add_theme_support( 'custom-units' );
    }
}
add_action( 'after_setup_theme', 'geum_setup' );

if ( ! function_exists( 'geum_styles' ) ) :
    /**
     * Enqueue styles.
     *
     * @since geum 1.0
     *
     * @return void
     */
    function geum_styles() {
        // Register theme stylesheet.
        wp_register_style(
            'geum-style',
            get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' )
        );
        
        // Enqueue theme stylesheet.
        wp_enqueue_style( 'geum-style' );
    }
endif;
add_action( 'wp_enqueue_scripts', 'geum_styles' );



/**
 * Show '(no title)' in frontend if post has no title to make it selectable
 */
add_filter(
    'the_title',
    function( $title ) {
        if ( ! is_admin() && empty( $title ) ) {
            $title = __( '(no title)', 'geum' );
        }
        return $title;
    }
);
