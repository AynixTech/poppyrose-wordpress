<?php
/**
 * Poppyrose theme setup.
 */

if ( ! function_exists( 'poppyrose_setup' ) ) {
  function poppyrose_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
    register_nav_menus(
      array(
        'primary' => __( 'Primary Menu', 'poppyrose' ),
        'footer'  => __( 'Footer Menu', 'poppyrose' ),
      )
    );
  }
}
add_action( 'after_setup_theme', 'poppyrose_setup' );

function poppyrose_enqueue_assets() {
  wp_enqueue_style( 'poppyrose-style', get_stylesheet_uri(), array(), '1.0.0' );
  wp_enqueue_script(
    'poppyrose-theme-switcher',
    get_template_directory_uri() . '/assets/js/theme-switcher.js',
    array(),
    '1.0.0',
    true
  );
}
add_action( 'wp_enqueue_scripts', 'poppyrose_enqueue_assets' );
