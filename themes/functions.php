<?php
if ( ! function_exists( 'LapisMoKinabukasanKo_setup' ) ) :

function LapisMoKinabukasanKo_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'LapisMoKinabukasanKo', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'LapisMoKinabukasanKo' ),
        'social'  => __( 'Social Links Menu', 'LapisMoKinabukasanKo' ),
    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );
}
endif; // LapisMoKinabukasanKo_setup

add_action( 'after_setup_theme', 'LapisMoKinabukasanKo_setup' );


if ( ! function_exists( 'LapisMoKinabukasanKo_init' ) ) :

function LapisMoKinabukasanKo_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // LapisMoKinabukasanKo_setup

add_action( 'init', 'LapisMoKinabukasanKo_init' );


if ( ! function_exists( 'LapisMoKinabukasanKo_widgets_init' ) ) :

function LapisMoKinabukasanKo_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'LapisMoKinabukasanKo_widgets_init' );
endif;// LapisMoKinabukasanKo_widgets_init



if ( ! function_exists( 'LapisMoKinabukasanKo_customize_register' ) ) :

function LapisMoKinabukasanKo_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'LapisMoKinabukasanKo_customize_register' );
endif;// LapisMoKinabukasanKo_customize_register


if ( ! function_exists( 'LapisMoKinabukasanKo_enqueue_scripts' ) ) :
    function LapisMoKinabukasanKo_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', false, null, true);

    wp_deregister_script( 'bootstrap' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', false, null, true);

    wp_deregister_script( 'ieviewportbugworkaround' );
    wp_enqueue_script( 'ieviewportbugworkaround', get_template_directory_uri() . '/assets/js/ie10-viewport-bug-workaround.js', false, null, true);

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'bootstrap' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.css', false, null, 'all');

    wp_deregister_style( 'style' );
    wp_enqueue_style( 'style', get_bloginfo('stylesheet_url'), false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'LapisMoKinabukasanKo_enqueue_scripts' );
endif;

/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */

    /* Pinegrow generated Include Resources End */
?>