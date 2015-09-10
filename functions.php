<?php
/**
 * The Client Name theme functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage The_Client_Name
 * @since The Client Name 1.0
 */



 // MENU SUPPORT --

 // Main Nav
 function register_my_menu() {
   register_nav_menu('main-nav',__( 'Main Nav' ));
 }
 add_action( 'init', 'register_my_menu' );

 // -- END MENU SUPPORT



 // WIDGETS SUPPORT --

// Name of Widget
/* register_sidebar( array(
  'name' => 'Name of Widget',
  'id' => 'name-of-widget',
  'description' => 'Where widget is located',
  'before_widget' => '<aside id="%1$s" class="widget %2$s">',
  'after_widget' => '</aside>',
  'before_title' => '<h3 class="widget-title">',
  'after_title' => '</h3>',
) ); */

// -- END WIDGETS SUPPORT



// ENQUEUE SCRIPTS AND STYLES --

// Enqueue all CSS and JS files
function load_my_scripts() {
    // Google Fonts CSS
    wp_register_style('my-google-fonts', 'https://fonts.googleapis.com/css?family=Raleway:400,700');

    // Name of JS File
    // wp_register_script('name-of-js-file', get_template_directory_uri().'/js/name-of-js-file.min.js', array('jquery'), '', TRUE);

    wp_enqueue_style( 'my-google-fonts');
    // wp_enqueue_script('name-of-js-file');
}

add_action( 'wp_enqueue_scripts', 'load_my_scripts' );

// -- END ENQUEUE SCRIPTS AND STYLES
