<?php
function enqueue_parent_styles() {
  wp_register_style('habitat-style',  get_stylesheet_directory_uri() .'/style.css', array(), null, 'all');
}
add_action('wp_enqueue_scripts', 'enqueue_parent_styles');

function register_menus() {
  register_nav_menus(
    array(
      'primary-menu' => __('Primary'),
      'top-menu' => __('Top Menu'),
      'footer-whoweare' => __('Footer - Who We Are'),
      'footer-waystogive' => __('Footer - Ways to Give'),
      'footer-volunteer' => __('Footer - Volunteer'),
      'footer-apply' => __('Footer - Apply')
    )
  );
}
add_action('init', 'register_menus');

?>