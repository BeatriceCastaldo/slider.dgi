<?php 
/**
 * Default Header
 *
 * @package WordPress
 * @subpackage SliderDGI
 * @since SliderDGI 1.0
 *
 */?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
  <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="/wp/wp-content/themes/sliderdgi-child/script.js" type="text/javascript"></script>

  <?php 
  wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <nav class="navbarmia navbar-default" role="navigation">
      <!-- Mobile -->
      <div class="navbar-header">
        <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php echo get_bloginfo('title'); ?></a>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
     
      <!-- Toggling -->
      <?php
         wp_nav_menu( array(
            'container_class' => 'collapse navbar-collapse navbar-ex1-collapse',
            'menu_class'      => 'nav navbar-nav',
            'menu_id'         => 'main-menu',
        ) );
      ?>
    </nav>

<!-- Slider statico -->
    <div id="containermio">
      <ul id="slidermio">
        <li class="mySlides">
          <div id="heightimg">
          <div id="slide1" class="text">alicè</div>
            <img src="wp-content/uploads/2016/11/8.jpg"/>
          </div>
          
        </li>

        <li class="mySlides">
          <div id="heightimg">
            <div id="slide2" class="text">halo halo</div>
            <img src="wp-content/uploads/2016/11/9.jpg"/>
          </div>
        </li>

        <li class="mySlides">
          <div id="heightimg">
            <div id="slide3" class="text">artist unknown</div>
            <img src="wp-content/uploads/2016/11/10.jpg"/>
          </div>
        </li>

        <li class="mySlides">
          <div id="heightimg">
            <div id="slide4" class="text">artist unknown</div>
            <img src="wp-content/uploads/2016/11/11.jpg"/>
          </div>
        </li>

        <li class="mySlides">
          <div id="heightimg">
            <div id="slide5" class="text">insa</div>
            <img src="wp-content/uploads/2016/11/12.jpg"/>
          </div>
        </li>

        <li class="mySlides">
          <div id="heightimg">
            <div id="slide6" class="text">red lights</div>
            <img src="wp-content/uploads/2016/11/13.png"/>
          </div>
        </li>

        <li class="mySlides">
          <div id="heightimg">
            <div id="slide7" class="text">outdoor festival</div>
            <img src="wp-content/uploads/2016/11/14.jpg"/>
          </div>
        </li>
      </ul>

      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>

      <div class="dotdiv">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
        <span class="dot" onclick="currentSlide(6)"></span>
        <span class="dot" onclick="currentSlide(7)"></span>
      </div>
    </div>