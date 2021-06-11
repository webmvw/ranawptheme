<?php

function rana_theme_setup(){
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails', array('post', 'sliders', 'teams', 'testimonials'));
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



// all custom posts
function rana_theme_custom_posts(){

	//custom post for slider
	register_post_type('sliders', array(
		'labels' => array(
			'name' => __('Sliders', 'rana'),
			'singular_name' => __('Slider', 'rana')
		),
		'public' => true,
		'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
	));

	//custom post for services
	register_post_type('services', array(
		'labels' => array(
			'name' => __('Services', 'rana'),
			'singular_name' => __('Service', 'rana')
		),
		'public' => true,
		'supports' => array('title', 'editor', 'custom-fields')
	));


	// custom post for teams
	register_post_type('teams', array(
		'labels' => array(
			'name' => __('Teams', 'rana'),
			'singular_name' => __('Team', 'rana')
		),
		'public' => true,
		'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes')
	));

	// custom post for teams
	register_post_type('testimonials', array(
		'labels' => array(
			'name' => __('Testimonials', 'rana'),
			'singular_name' => __('Testimonial', 'rana')
		),
		'public' => true,
		'supports' => array('thumbnail', 'custom-fields', 'page-attributes')
	));

	// custom post for gallery
	register_post_type('gallery', array(
		'labels' => array(
			'name' => __('Gallerys', 'rana'),
			'singular_name' => __('Gallery', 'rana')
		),
		'public' => true,
		'supports' => array('title', 'custom-fields', 'page-attributes')
	));
}
add_action('init', 'rana_theme_custom_posts');



// widgets
function rana_theme_widgets(){
	//sidebar
	register_sidebar(array(
		'name' => __('Main Sidebar', 'rana'),
		'id' => 'main_sidebar',
		'description' => __('Main Sidebar for Blog page', 'rana'),
		'before_widget' => '<div class="single-sidebar">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	));

	//footer widget 1
	register_sidebar(array(
		'name' => __('Footer Sidebar 1', 'rana'),
		'id' => 'footer_sidebar1',
		'description' => __('Footer widget 1 for showing widget', 'rana'),
		'before_widget' => '<div class="single-sidebarsingle-footer footer-logo">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));

	//footer widget 2
	register_sidebar(array(
		'name' => __('Footer Sidebar 2', 'rana'),
		'id' => 'footer_sidebar2',
		'description' => __('Footer widget 2 for showing widget', 'rana'),
		'before_widget' => '<div class="single-footer">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	));

	//footer widget 3
	register_sidebar(array(
		'name' => __('Footer Sidebar 3', 'rana'),
		'id' => 'footer_sidebar3',
		'description' => __('Footer widget 3 for showing widget', 'rana'),
		'before_widget' => '<div class="single-footer">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	));

	//footer widget 3
	register_sidebar(array(
		'name' => __('Footer Sidebar 4', 'rana'),
		'id' => 'footer_sidebar4',
		'description' => __('Footer widget 4 for showing widget', 'rana'),
		'before_widget' => '<div class="single-footer contact-box">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	));
}
add_action('widgets_init', 'rana_theme_widgets');




?>
