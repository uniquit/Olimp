<?php
/* Notifications in customizer */
 if ( ! function_exists( 'spiko_plus_activate' ) ):
require SPIKO_TEMPLATE_DIR . '/inc/customizer-notify/spiko-customizer-notify.php';
$spiko_config_customizer = array(
	'recommended_plugins'       => array(
		'spicebox' => array(
			'recommended' => true,
			'description' => sprintf( esc_html__( 'Install and activate the %s plugin to take full advantage of all the features this theme has to offer.', 'spiko'  ), sprintf( '<strong>%s</strong>', 'Spice Box' ) ),
		),
	),
	'recommended_actions'       => array(),
	'recommended_actions_title' => esc_html__( 'Recommended Actions', 'spiko'  ),
	'recommended_plugins_title' => esc_html__( 'Recommended Plugin', 'spiko'  ),
	'install_button_label'      => esc_html__( 'Install and Activate', 'spiko'  ),
	'activate_button_label'     => esc_html__( 'Activate', 'spiko'  ),
	'deactivate_button_label'   => esc_html__( 'Deactivate', 'spiko'  ),
);
Spiko_Customizer_Notify::init( apply_filters( 'spiko_customizer_notify_array', $spiko_config_customizer ) );
endif;