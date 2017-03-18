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

function add_slug_body_class( $classes ) {
  global $post;
  if ( isset( $post ) ) {
    $classes[] = $post->post_type . '-' . $post->post_name;
  }
  return $classes;
}



function ajax_enqueue_scripts(){
  $ajaxurl = '';
  if( in_array('sitepress-multilingual-cms/sitepress.php', get_option('active_plugins')) ){
    $ajaxurl .= admin_url( 'admin-ajax.php?lang=' . ICL_LANGUAGE_CODE );
  } else{
    $ajaxurl .= admin_url( 'admin-ajax.php');
  }

  wp_localize_script( 'twentysixteen-script', 'screenReaderText', array(
    // 'expand'   => __( 'expand child menu', 'twentysixteen' ),
    // 'collapse' => __( 'collapse child menu', 'twentysixteen' ),
    'ajaxurl'  => $ajaxurl,
    // 'noposts'  => esc_html__('No older posts found', 'twentysixteen'),
    // 'loadmore' => esc_html__('Load more', 'twentysixteen')
  ) );
}

add_filter( 'body_class', 'add_slug_body_class' );
add_action( 'wp_enqueue_scripts', 'ajax_enqueue_scripts' );

  // function remove_all_theme_styles() {
  //   // if ( is_page_template('.php') ) {
  //     global $wp_styles;
  //     $wp_styles->queue = array();
  //   // }
  // }
  //
  // add_action('wp_print_styles', 'remove_all_theme_styles', 100);

  ?>
