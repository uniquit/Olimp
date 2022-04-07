<?php
/**
 * Theme functions and definitions
 *
 * @package Coin Market
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

/**
 * After theme setup
 */
function architect_designs_theme_setup(){
	require get_stylesheet_directory() . '/inc/customizer/architect-designs-customizer-options.php';	
	
	remove_theme_support('custom-background');
}
add_action( 'after_setup_theme', 'architect_designs_theme_setup' );


/**
 * Load theme assets.
 */
function architect_designs_theme_css() {
	wp_enqueue_style('architect-designs-parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style('architect-designs-child-style', get_stylesheet_directory_uri() . '/style.css');
	wp_enqueue_style('architect-designs-custom-css', get_stylesheet_directory_uri() . "/assets/css/custom-css.css" );
	wp_enqueue_style('architect-designs-dark-theme', get_stylesheet_directory_uri() . "/assets/css/dark-theme.css" );
}
add_action( 'wp_enqueue_scripts', 'architect_designs_theme_css', 99);

/**
 * Import Options From Parent Theme
 *
 */
function architect_designs_parent_theme_options() {
	$awp_companion_mods = get_option( 'theme_mods_awp_companion' );
	if ( ! empty( $awp_companion_mods ) ) {
		foreach ( $awp_companion_mods as $awp_companion_mods_k => $awp_companion_mod_v ) {
			set_theme_mod( $awp_companion_mods_k, $awp_companion_mod_v );
		}
	}
}
add_action( 'after_switch_theme', 'architect_designs_parent_theme_options' );


/**
 * Page header
 *
 */
function architect_designs_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'architect_designs_custom_header_args', array(
		'default-image'      => get_stylesheet_directory_uri().'/assets/img/architect-designs-page-header.jpg',
		'default-text-color' => 'fff',
		'width'              => 1920,
		'height'             => 500,
		'flex-height'        => true,
		'flex-width'         => true,
		'wp-head-callback'   => 'architect_designs_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'architect_designs_custom_header_setup' );

if ( ! function_exists( 'architect_designs_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog.
	 *
	 * @see empresa_custom_header_setup().
	 */
	function architect_designs_header_style() {
		$header_text_color = get_header_textcolor();

		/*
		 * If no custom options for text are set, let's bail.
		 * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
		 */
		if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
			return;
		}

		// If we get this far, we have custom styles. Let's do this.
		?>
		<style type="text/css">
			<?php
			// Has the text been hidden?
			if ( ! display_header_text() ) :
				?>
			.site-title,
			.site-description {
				position: absolute;
				clip: rect(1px, 1px, 1px, 1px);
			}

			<?php
			// If the user has set a custom color for the text use that.
			else :
				?>
			.site-title a,
			.site-description {
				color: #<?php echo esc_attr( $header_text_color ); ?> !important;
			}

			<?php endif; ?>
		</style>
		<?php
	}
endif;