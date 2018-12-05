<?php
function enqueue_parent_styles() {
  wp_register_style('habitat-style',  get_stylesheet_directory_uri() .'/style.css', array(), null, 'all');
}
add_action('wp_enqueue_scripts', 'enqueue_parent_styles');

?>