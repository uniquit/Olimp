<?php
/*
 * This is the child theme for WEN Travel theme.
 */

/**
 * Enqueue default CSS styles
 */
function wen_travel_dark_enqueue_styles() {
	// Include parent theme CSS.
    wp_enqueue_style( 'wen-travel-style', get_template_directory_uri() . '/style.css', null, date( 'Ymd-Gis', filemtime( get_template_directory() . '/style.css' ) ) );
   
    // Include child theme CSS.
    wp_enqueue_style( 'wen-travel-dark-style', get_stylesheet_directory_uri() . '/style.css', array( 'wen-travel-style' ), date( 'Ymd-Gis', filemtime( get_stylesheet_directory() . '/style.css' ) ) );
	
	// Load rtl css.
	if ( is_rtl() ) {
		wp_enqueue_style( 'wen-travel-rtl', get_template_directory_uri() . '/rtl.css', array( 'wen-travel-style' ), filemtime( get_stylesheet_directory() . '/rtl.css' ) );
	}

	// Enqueue child block styles after parent block style.
	wp_enqueue_style( 'wen-travel-dark-block-style', get_stylesheet_directory_uri() . '/css/child-blocks.css', array( 'wen-travel-block-style' ), date( 'Ymd-Gis', filemtime( get_stylesheet_directory() . '/css/child-blocks.css' ) ) );
}
add_action( 'wp_enqueue_scripts', 'wen_travel_dark_enqueue_styles' );

/**
 * Add child theme editor styles
 */
function wen_travel_dark_editor_style() {
	add_editor_style( array(
			'css/child-editor-style.css',
			wen_travel_fonts_url(),
			get_theme_file_uri( 'css/font-awesome/css/font-awesome.css' ),
		)
	);
}
add_action( 'after_setup_theme', 'wen_travel_dark_editor_style', 11 );

/**
 * Enqueue editor styles for Gutenberg
 */
function wen_travel_dark_block_editor_styles() {
	// Enqueue child block editor style after parent editor block css.
	wp_enqueue_style( 'wen-travel-dark-block-editor-style', get_stylesheet_directory_uri() . '/css/child-editor-blocks.css', array( 'wen-travel-block-editor-style' ), date( 'Ymd-Gis', filemtime( get_stylesheet_directory() . '/css/child-editor-blocks.css' ) ) );
}
add_action( 'enqueue_block_editor_assets', 'wen_travel_dark_block_editor_styles', 11 );

/**
 * Enqueue scripts and styles.
 */
function wen_travel_dark_scripts() {
    //Slider Scripts
    $enable_logo_slider      = wen_travel_check_section( get_theme_mod( 'wen_travel_logo_slider_option', 'disabled' ) );

    if ( $enable_logo_slider ) {
        // Enqueue owl carousel css. Must load CSS before JS.
        wp_enqueue_style( 'owl-carousel-core', get_theme_file_uri( 'css/owl-carousel/owl.carousel.min.css' ), null, '2.3.4' );
        wp_enqueue_style( 'owl-carousel-default', get_theme_file_uri( 'css/owl-carousel/owl.theme.default.min.css' ), null, '2.3.4' );

        // Enqueue script
        wp_enqueue_script( 'owl-carousel', get_theme_file_uri( '/js/owl.carousel.min.js'), array( 'jquery' ), '2.3.4', true );

        $deps[] = 'owl-carousel';

        wp_enqueue_script( 'wen-travel-dark-script',  get_stylesheet_directory_uri() . '/js/custom.min.js', array( 'jquery', 'owl-carousel' ) );
    }
}
add_action( 'wp_enqueue_scripts', 'wen_travel_dark_scripts' );

/**
 * Loads the child theme textdomain and update notifier.
 */
function wen_travel_dark_setup() {
    load_child_theme_textdomain( 'wen-travel-dark', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'wen_travel_dark_setup', 11 );

/**
 * Change default background color
 */
function wen_travel_dark_background_default_color( $args ) {
    $args['default-color'] = '#000000';

    return $args;
}
add_filter( 'wen_travel_custom_bg_args', 'wen_travel_dark_background_default_color' );

/**
 * Change default header text color
 */
function wen_travel_dark_header_default_color( $args ) {
	$args['default-image'] =  get_theme_file_uri( 'images/header-image.jpg' );
	$args['default-text-color'] = '#ffffff';

	return $args;
}
add_filter( 'wen_travel_custom_header_args', 'wen_travel_dark_header_default_color' );

/**
 * Remove color-scheme-default and add color-scheme-dark to body class
 *
 * @since 1.0.0
 *
 * @param array $classes Classes for the body element.
 * @return array (Maybe) filtered body classes.
 */
function wen_travel_dark_body_classes( $classes ) {
	// Added color scheme to body class.
	$classes['color-scheme'] = 'color-scheme-dark';

	return $classes;
}
add_filter( 'body_class', 'wen_travel_dark_body_classes', 100 );

function wen_travel_sections( $selector = 'header' ) {
		get_template_part( 'template-parts/header/header-media' );
		get_template_part( 'template-parts/slider/display-slider' );
		get_template_part( 'third-party/wp-travel/template-parts/trip-filter' );
		get_template_part( 'third-party/wp-travel/template-parts/featured-trips' );
		get_template_part( 'template-parts/hero-content/content-hero' );
        get_template_part( 'template-parts/collection/display-collection' );
		get_template_part( 'template-parts/service/display-service' );
		get_template_part( 'template-parts/portfolio/display-portfolio' );
		get_template_part( 'template-parts/testimonial/display-testimonial' );
		get_template_part( 'third-party/wp-travel/template-parts/latest-trips' );
		get_template_part( 'template-parts/featured-content/display-featured' );	
}

/** 
 * Load Customizer Options for Collection section
 */
require trailingslashit( get_stylesheet_directory() ) . 'inc/customizer/collection.php';

/**
 * Include Logo Slider Section
 */
require trailingslashit( get_stylesheet_directory() ) . 'inc/customizer/logo-slider.php';
