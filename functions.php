<?php

get_template_part('/template-parts/rana-options');
get_template_part('/inc/rana-activation');




function rana_theme_setup(){
	add_theme_support('title-tag');
	add_theme_support('automatic-feed-links');
	add_theme_support('post-thumbnails', array('post', 'sliders', 'teams', 'testimonials', 'portfolio'));
	load_theme_textdomain('rana', get_template_directory_uri().'/languages');

	/**
	 * Add post-formats support.
	 */
	add_theme_support(
		'post-formats',
		array(
			'link',
			'aside',
			'gallery',
			'image',
			'quote',
			'status',
			'video',
			'audio',
			'chat',
		)
	);

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
			'navigation-widgets',
		)
	);
	// Add support for Block Styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );

	// Add support for editor styles.
	add_theme_support( 'editor-styles' );

	// Custom background color.
	add_theme_support(
		'custom-background',
		array(
			'default-color' => 'd1e4dd',
		)
	);


	// Editor color palette.
	$black     = '#000000';
	$dark_gray = '#28303D';
	$gray      = '#39414D';
	$green     = '#D1E4DD';
	$blue      = '#D1DFE4';
	$purple    = '#D1D1E4';
	$red       = '#E4D1D1';
	$orange    = '#E4DAD1';
	$yellow    = '#EEEADD';
	$white     = '#FFFFFF';

	add_theme_support(
		'editor-color-palette',
		array(
			array(
				'name'  => esc_html__( 'Black', 'rana' ),
				'slug'  => 'black',
				'color' => $black,
			),
			array(
				'name'  => esc_html__( 'Dark gray', 'rana' ),
				'slug'  => 'dark-gray',
				'color' => $dark_gray,
			),
			array(
				'name'  => esc_html__( 'Gray', 'rana' ),
				'slug'  => 'gray',
				'color' => $gray,
			),
			array(
				'name'  => esc_html__( 'Green', 'rana' ),
				'slug'  => 'green',
				'color' => $green,
			),
			array(
				'name'  => esc_html__( 'Blue', 'rana' ),
				'slug'  => 'blue',
				'color' => $blue,
			),
			array(
				'name'  => esc_html__( 'Purple', 'rana' ),
				'slug'  => 'purple',
				'color' => $purple,
			),
			array(
				'name'  => esc_html__( 'Red', 'rana' ),
				'slug'  => 'red',
				'color' => $red,
			),
			array(
				'name'  => esc_html__( 'Orange', 'rana' ),
				'slug'  => 'orange',
				'color' => $orange,
			),
			array(
				'name'  => esc_html__( 'Yellow', 'rana' ),
				'slug'  => 'yellow',
				'color' => $yellow,
			),
			array(
				'name'  => esc_html__( 'White', 'rana' ),
				'slug'  => 'white',
				'color' => $white,
			),
		)
	);



	register_nav_menus(array(
		'main-menu' => __('Primary Menu', 'rana')
	));

}
add_action('after_setup_theme', 'rana_theme_setup');






function rana_theme_css_js_enqueue(){

	// load css
	wp_enqueue_style('Poppins-font', 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700');
	wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '1.0', 'all');
	wp_enqueue_style( 'fa5', 'https://use.fontawesome.com/releases/v5.13.0/css/all.css', array(), '5.13.0', 'all' );
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
