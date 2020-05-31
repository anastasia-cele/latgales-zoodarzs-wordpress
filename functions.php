<?php

//Register Menus
function wpb_custom_new_menu() {
    register_nav_menus(
      array(
        'main-menu' => __( 'Main Menu' ),
      )
    );
  }
  add_action( 'init', 'wpb_custom_new_menu' );

//Excerpt Length
function custom_excerpt_length( $length ) {
    return 50;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

//Replace [...] With ...
function new_excerpt_more( $more ) {
  return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

//Add Thumbnails
add_theme_support( 'post-thumbnails' );

?>

