<?php
/* Custom Post Type for Slider
 *
 * 
 */

/* Register the slider) */
add_action('init', 'wpt_slider_init');
function wpt_slider_init() {
    $labels = array(
        'name' => _x('Slides', 'post type general name'),
        'singular_name' => _x('Slide', 'post type singular name'),
        'add_new' => _x('Add New', 'wpt_slider'),
        'add_new_item' => __('Add New Slide'),
        'edit_item' => __('Edit Slide'),
        'new_item' => __('New Slide'),
        'view_item' => __('View Slide'),
        'search_items' => __('Search Slides'),
        'not_found' => __('No slides found'),
        'not_found_in_trash' => __('No slides found in Trash'),
        'parent_item_colon' => '',
        'menu_name' => 'Featured Slider'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_icon' => '/wp/wp-content/uploads/2016/11/three-slides.png',
        'menu_position' => 5,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'supports' => array('title', 'thumbnail')
    );
    register_post_type('wpt_slider', $args);
}

add_image_size('wpt_slider_image', 1200, 400, true);

/* Display the slider! */
function new_wpt_slider() {
     
    $fits = array('post_type' => 'wpt_slider', 'posts_per_page' => 1);
        //if there is 1 slide show the slider
        if($fits){
            echo '<div id="containermio">';

            echo '<a class="prev" onclick="plusSlides(-1)">&#10094;</a>';
            echo '<a class="next" onclick="plusSlides(1)">&#10095;</a>';

            echo '<ul id="slidermio">';

                $args = array('post_type' => 'wpt_slider');
                $loop = new WP_Query($args);
            while ($loop->have_posts()) : $loop->the_post();
             
                echo '<li class="mySlides">';
                echo '<div id="heightimg">';
                    echo '<h3 class="text">';
                    the_title();
                    echo '</h3>';
                the_post_thumbnail('wpt_slider_image');
                echo '</div>';
                echo '</li>';

            endwhile;

            echo '</ul>';
            echo '</div>';
             
        };
};