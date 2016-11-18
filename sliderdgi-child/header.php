<?php 
/**
 * Default Header
 *
 * @package WordPress
 * @subpackage SliderDGI
 * @since SliderDGI 1.0
 *
 */?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
 
  <?php 
  // Fires the 'wp_head' action and gets all the scripts included by wordpress, wordpress plugins or functions.php 
  // using wp_enqueue_script if it has $in_footer set to false (which is the default)
  wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <nav class="navbar navbar-default" role="navigation">
      <!-- Mobile display -->
      <div class="navbar-header">
        <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php echo get_bloginfo('title'); ?></a>
        <!--<a class="navbar-brand" href="#">
          <img alt="Brand" src="...">
        </a>-->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
     
      <!-- Collect the nav links for toggling -->
      <?php // Loading WordPress Custom Menu
         wp_nav_menu( array(
            'container_class' => 'collapse navbar-collapse navbar-ex1-collapse',
            'menu_class'      => 'nav navbar-nav',
            'menu_id'         => 'main-menu',
            //'walker'          => new Cwd_wp_bootstrapwp_Walker_Nav_Menu()
        ) );
      ?>
    </nav>

    <div class="container">
      <h3 class="testomio">Welcome to my shitting theme</h3>
    </div>


