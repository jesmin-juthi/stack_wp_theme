<?php 

require_once(get_theme_file_path('inc/customizer.php'));

function stack_setup() {
	add_theme_support('title-tag');
}
add_action( 'after_setup_theme', 'stack_setup' );

function stack_assets() {
	wp_enqueue_style('stylesheet', get_stylesheet_uri());
	wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0', 'all');
	wp_enqueue_style('line-icons', get_template_directory_uri() . '/assets/fonts/line-icons.css', array(), '1.0', 'all');
	wp_enqueue_style('slicknav', get_template_directory_uri() . '/assets/css/slicknav.css', array(), '1.0', 'all');
	wp_enqueue_style('carousel-css', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1.0', 'all');
	wp_enqueue_style('owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.css', array(), '1.0', 'all');
	wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.0', 'all');
	wp_enqueue_style('nivo-lightbox', get_template_directory_uri() . '/assets/css/nivo-lightbox.css', array(), '1.0', 'all');
	wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css', array(), '1.0', 'all');
	wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0', 'all');
	wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0', 'all');

	wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script('carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script('mixitup', get_template_directory_uri() . '/assets/js/jquery.mixitup.js', array('jquery'), '1.0', true);
	wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.js', array('jquery'), '1.0', true);
	wp_enqueue_script('jquery-nav', get_template_directory_uri() . '/assets/js/jquery.nav.js', array('jquery'), '1.0', true);
	wp_enqueue_script('scrolling-nav', get_template_directory_uri() . '/assets/js/scrolling-nav.js', array('jquery'), '1.0', true);
	wp_enqueue_script('easing', get_template_directory_uri() . '/assets/js/jquery.easing.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script('counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script('scrolling-nav', get_template_directory_uri() . '/assets/js/scrolling-nav.js', array('jquery'), '1.0', true);
	wp_enqueue_script('nivo-lightbox', get_template_directory_uri() . '/assets/js/nivo-lightbox.js', array('jquery'), '1.0', true);
	wp_enqueue_script('magnific-popup-js', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script('slicknav-js', get_template_directory_uri() . '/assets/js/jquery.slicknav.js', array('jquery'), '1.0', true);
	wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'stack_assets');












 ?>