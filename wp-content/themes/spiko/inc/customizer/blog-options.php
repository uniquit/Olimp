<?php
/**
 * Blog Options Customizer
 *
 * @package spiko
 */

function spiko_blog_customizer ( $wp_customize )
{

$wp_customize->add_section('spiko_blog_section', 
	array(
	'title' => esc_html__('Blog Page' , 'spiko' ),
	'panel' => 'spiko_theme_panel',
	'priority' => 4,
));



/******************** Blog Content *******************************/
$wp_customize->add_setting('spiko_blog_content', 
	array(
		'default' 			=> esc_html__('excerpt','spiko' ),
		'sanitize_callback' => 'spiko_sanitize_radio'
		)
	);

$wp_customize->add_control('spiko_blog_content', 
	array(		
		'label' 	=> esc_html__('Choose Options', 'spiko' ),		
		'section' 	=> 'spiko_blog_section',
		'type' 		=> 'radio',
		'priority' => 2,
		'choices' 	=>  array(
			'excerpt' 	=> esc_html__('Excerpt', 'spiko' ),
			'content' 	=> esc_html__('Full Content', 'spiko' ),
			)
		)
	);

/******************** Blog Length *******************************/
$wp_customize->add_setting( 'spiko_blog_content_length',
	array(
		'default'           => 30,
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'spiko_sanitize_number_range',
		)
);
$wp_customize->add_control( 'spiko_blog_content_length',
	array(
		'label'       => esc_html__( 'Excerpt Length', 'spiko'  ),
		'section'     => 'spiko_blog_section',
		'type'        => 'number',
		'priority' => 2,
		'input_attrs' => array( 'min' => 10, 'max' => 200, 'step' => 1, 'style' => 'width: 200px;' ),
	)
);

/************************* Blog Meta Rearrange*********************************/
$default = array( 'blog_author', 'blog_category','blog_tag');

$choices = array(
        'blog_author' => esc_html__( 'Author', 'spiko'  ),
        'blog_category' => esc_html__( 'Category', 'spiko'  ),
        'blog_tag' => esc_html__( 'Tag', 'spiko'  ),
    );
    
$wp_customize->add_setting( 'spiko_blog_meta_sort', 
    array(
        'capability'  => 'edit_theme_options',
        'sanitize_callback' => 'spiko_sanitize_array',
        'default'     => $default
    ) );

$wp_customize->add_control( new Spiko_Control_Sortable( $wp_customize, 'spiko_blog_meta_sort', 
    array(
        'label' => esc_html__( 'Drag And Drop To Rearrange', 'spiko'  ),
        'section' => 'spiko_blog_section',
        'settings' => 'spiko_blog_meta_sort',
        'type'=> 'sortable',
        'choices'     => $choices
    ) ) );
}
add_action( 'customize_register', 'spiko_blog_customizer' );