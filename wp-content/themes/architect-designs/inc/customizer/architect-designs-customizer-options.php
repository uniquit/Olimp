<?php
/**
 * Customizer section options.
 *
 * @package architect-designs
 *
 */

function architect_designs_customizer_theme_settings( $wp_customize ){
	
	$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';	
		
		$wp_customize->add_setting('businessexpo_footer_copright_text',array(
				'sanitize_callback'	=>  'architect_designs_sanitize_text',
				'default'			=> __('Copyright &copy; 2021 | Powered by <a href="//wordpress.org/">WordPress</a> <span class="sep"> | </span> Architect Designs theme by <a target="_blank" href="http://wpfrank.com/">WP Frank</a>', 'architect-designs'),
				'transport'			=> $selective_refresh,
		));
		
		$wp_customize->add_control('businessexpo_footer_copright_text', array(
			'label'			=> esc_html__('Footer Copyright','architect-designs'),
			'section'		=> 'businessexpo_footer_copyright',
			'priority'		=> 10,
			'type'			=> 'textarea'
		));

}
add_action( 'customize_register', 'architect_designs_customizer_theme_settings' );

function architect_designs_sanitize_text( $input ) {
		return wp_kses_post( force_balance_tags( $input ) );
}