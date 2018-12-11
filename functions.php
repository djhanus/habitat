<?php
function enqueue_parent_styles() {
  wp_register_style('habitat-style',  get_stylesheet_directory_uri() .'/style.css', array(), null, 'all');
}
add_action('wp_enqueue_scripts', 'enqueue_parent_styles');

function register_menus() {
  register_nav_menus(
    array(
      'primary-menu' => __('Primary'),
      'top-menu' => __('Top Menu')
    )
  );
}
add_action('init', 'register_menus');

?>