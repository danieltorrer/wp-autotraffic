<?php


if (function_exists('add_theme_support'))
{
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 1024, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size', 653, 271, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');
}

function remove_all_theme_styles() {
  // if ( is_page_template('.php') ) {
    global $wp_styles;
    $wp_styles->queue = array();
  // }
}

add_action('wp_print_styles', 'remove_all_theme_styles', 100);

?>
