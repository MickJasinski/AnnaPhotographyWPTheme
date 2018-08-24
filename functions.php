<?php

// HTML5 support for galleries
add_theme_support( 'html5', array( 'gallery', 'caption' ) );

// Get stylesheet
// function micksResources() {
//     wp_enqueue_style('style', get_stylesheet_uri());
// }
// add_action('wp_enqueue_scripts', 'micksResources');

// Navigation 
register_nav_menus(array(
    'primary' => __('Primary Menu')
));


?>