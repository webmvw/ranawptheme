<?php

function rana_theme_setup(){
	add_theme_support('title-tag');
	load_theme_textdomain('rana', get_template_directory_uri().'/languages');

	register_nav_menus(array(
		'main-menu' => __('Primary Menu', 'rana')
	));

}
add_action('after_setup_theme', 'rana_theme_setup');






function rana_theme_css_js_enqueue(){

	// load css
	wp_enqueue_style('Poppins-font', 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700');
	wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '1.0', 'all');
	wp_enqueue_style('font-awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css', array(), '1.0', 'all');
	wp_enqueue_style('magnific-popup-css', get_template_directory_uri().'/assets/css/magnific-popup.css', array(), '1.0', 'all');
	wp_enqueue_style('owl.carousel-css', get_template_directory_uri().'/assets/css/owl.carousel.css', array(), '1.0', 'all');
	wp_enqueue_style('main-css', get_template_directory_uri().'/assets/css/style.css', array(), '1.0', 'all');
	wp_enqueue_style('responsive-css', get_template_directory_uri().'/assets/css/responsive.css', array(), '1.0', 'all');
	wp_enqueue_style('style-css', get_stylesheet_uri());

	// load js
	wp_enqueue_script('jquery', get_template_directory_uri().'/assets/js/jquery.min.js', true);
	wp_enqueue_script('popper-js', get_template_directory_uri().'/assets/js/popper.min.js', true);
	wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap.min.js', true);
	wp_enqueue_script('owl-carousel-js', get_template_directory_uri().'/assets/js/owl.carousel.min.js', true);
	wp_enqueue_script('magnific-popup-js', get_template_directory_uri().'/assets/js/jquery.magnific-popup.min.js', true);
	wp_enqueue_script('isotope-js', get_template_directory_uri().'/assets/js/isotope.min.js', true);
	wp_enqueue_script('imageload-js', get_template_directory_uri().'/assets/js/imageloaded.min.js', true);
	wp_enqueue_script('counterup-js', get_template_directory_uri().'/assets/js/jquery.counterup.min.js', true);
	wp_enqueue_script('waypoint-js', get_template_directory_uri().'/assets/js/waypoint.min.js', true);
	wp_enqueue_script('main-js', get_template_directory_uri().'/assets/js/main.js', true);
}
add_action('wp_enqueue_scripts', 'rana_theme_css_js_enqueue');

?>
