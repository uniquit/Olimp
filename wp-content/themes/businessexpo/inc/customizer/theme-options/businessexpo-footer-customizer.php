<?php
	// Footer copyright
	$wp_customize->add_setting(
		'businessexpo_footer_copyright_text',
		array(
			'sanitize_callback' => 'sanitize_text_field',
			'default'           => __( 'Copyright &copy; 2021 | Powered by <a href="//wordpress.org/">WordPress</a> <span class="sep"> | </span> BusinessExpo theme by <a target="_blank" href="//wpfrank.com/">WP Frank</a>', 'businessexpo' ),
			'transport'         => $selective_refresh,
		)
	);

	$wp_customize->add_control(
		'businessexpo_footer_copyright_text',
		array(
			'label'    => esc_html__( 'Footer Copyright', 'businessexpo' ),
			'section'  => 'businessexpo_footer_copyright',
			'priority' => 10,
			'type'     => 'textarea',
		)
	);
