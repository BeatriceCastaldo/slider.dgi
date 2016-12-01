<?php

function enqueue_parent_theme_style() {
    // Loads my stylesheet and js.
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
    wp_enqueue_script( 'script.js', get_template_directory_uri().'/js/script.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_parent_theme_style');

function enqueue_bootstrap_scripts_styles() {
  // Loads Bootstrap min JavaScript file.
  wp_enqueue_script('bootstrapjs', '//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js', array('jquery'),'3.0.0', true );
  // Loads Bootstrap min CSS file.
  wp_enqueue_style('bootstrapwp', '//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css', false ,'3.0.0');
}
add_action('wp_enqueue_scripts', 'enqueue_bootstrap_scripts_styles');


if ( ! function_exists( 'bootstrap_theme_setup' ) ):
  function bootstrap_theme_setup() {
    // Adds the main menu
    register_nav_menus( array(
      'main-menu' => __( 'Main Menu', 'bootstrap' ),
    ) );
  }
endif;
add_action( 'after_setup_theme', 'bootstrap_theme_setup' );


// WPT Slider Set-up
if ( ! function_exists( 'wpt_setup' ) ) {
    function wpt_setup() {
        //include the wpt-slider.php
        get_template_part( 'wpt-slider');
 
    }
}
add_action( 'after_setup_theme', 'wpt_setup' );

?>