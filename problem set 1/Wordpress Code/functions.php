<?php
// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

  // Theme support
  function wpb_theme_setup(){

    //Nav Menus
    register_nav_menus(array(
      'primary' => __( 'Primary Menu', 'THEMENAME')
    ));
  }

  add_action('after_setup_theme','wpb_theme_setup');

// Widget Locations
 function wpb_init_widgets($id){
  register_sidebar(array(
     'name' => 'Sidebar',
     'id'   => 'sidebar',
     'before_widget'  => '<div class="sidebar-module">',
     'after_widget'   => '</div>',
     'before_title'   => '<h4>',
     'after_title'    => '</h4>'
  ));
}

add_action('widgets_init', 'wpb_init_widgets');
