<?php
add_filter('all_plugins', 'add_custom_plugins');
function add_custom_plugins(){
    $plugins = get_plugins();
    $my_plugins_folder_name = 'plugins';
    $my_plugins_path = '../themes/'.get_template().'/'.$my_plugins_folder_name;
    $my_plugins_temp = get_plugins('/'.$my_plugins_path);
    $my_plugins = array();
    if(!empty($my_plugins_temp)) :
        foreach($my_plugins_temp as $key => $value) :
            $my_plugins[$my_plugins_path.'/'.$key] = $value;
        endforeach;
    endif;
    $plugins = array_merge((array)$my_plugins, (array)$plugins);
    return $plugins;
}
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

