<?php


function enqueue_parent_styles() {
  wp_register_style('habitat-style',  get_stylesheet_directory_uri() .'/style.css', array(), null, 'all');
  wp_enqueue_script('jquery-script', 'https://code.jquery.com/jquery-3.3.1.min.js', false, null, true);
  wp_script_add_data('jquery-script', array( 'integrity', 'crossorigin' ) , array( 'sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=', 'anonymous' ) );
  wp_enqueue_script('popper-script', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', false, null, true);
  wp_enqueue_script('bootstrap-script', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', false, null, true);
  wp_enqueue_script('count-animation-script',  get_stylesheet_directory_uri() .'/js/count.js', false, null, true);
}
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );


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

function create_posttype() {
 
    register_post_type( 'families',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Families' ),
                'singular_name' => __( 'Family' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'families'),
        )
    );
}
add_action( 'init', 'create_posttype' );

?>