<?php
function umesh_patwari_enqueue_styles() {
    // Enqueue Bootstrap CSS from CDN
    wp_enqueue_style('open_font','https://fonts.googleapis.com/css?family=Open+Sans:300,400,700');
    wp_enqueue_style('icomoon-css', get_template_directory_uri() .'/assets/fonts/icomoon/style.css');
    wp_enqueue_style('carousel-css', get_template_directory_uri() .'/assets/css/owl.carousel.min.css');
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() .'/assets/css/bootstrap.min.css');
    wp_enqueue_style('style-css', get_template_directory_uri() . '/assets/css/style.css');
}
add_action('wp_enqueue_scripts', 'umesh_patwari_enqueue_styles');

function umesh_patwari_enqueue_scripts() {
        wp_enqueue_script('jquery');
    wp_enqueue_script('proper-js', get_template_directory_uri() .'/assets/js/popper.min.js', array('jquery'), '', true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() .'/assets/js/bootstrap.min.js', array('jquery'), '', true);
    wp_enqueue_script('sticky-js', get_template_directory_uri() .'/assets/js/jquery.sticky.js', array('jquery'), '', true);
    wp_enqueue_script('main-js', get_template_directory_uri() .'/assets/js/main.js', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'umesh_patwari_enqueue_scripts');


function theme_setup() {
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'umesh-patwari'),
        'top-header-left-utility' => __( 'Header Left Utility Menu' ),
        'top-header-right-utility' => __( 'Header Right Utility Menu' ),
    ));
    add_theme_support('custom-logo', array( 
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'theme_setup');

add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {
  $filetype = wp_check_filetype( $filename, $mimes );
  return [
      'ext'             => $filetype['ext'],
      'type'            => $filetype['type'],
      'proper_filename' => $data['proper_filename']
  ];

}, 10, 4 );

function cc_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

function fix_svg() {
  echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
             width: 100% !important;
             height: auto !important;
        }
        </style>';
}
add_action( 'admin_head', 'fix_svg' );
