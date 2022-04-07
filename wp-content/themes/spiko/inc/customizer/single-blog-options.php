<?php

/**
 * Single Blog Options Customizer
 *
 * @package spiko
 */
function spiko_single_blog_customizer($wp_customize) {
    $wp_customize->add_section('spiko_single_blog_section',
            array(
                'title' => esc_html__('Single Post', 'spiko' ),
                'panel' => 'spiko_theme_panel',
                'priority' => 5
    ));

/*     * *********************** Meta Hide Show ******************************** */
    
    $wp_customize->add_setting('spiko_enable_single_post_admin',
            array(
                'default' => true,
                'sanitize_callback' => 'spiko_sanitize_checkbox',
            )
    );
    $wp_customize->add_control(new Spiko_Toggle_Control($wp_customize, 'spiko_enable_single_post_admin',
                    array(
                'label' => esc_html__('Hide/Show Author', 'spiko' ),
                'type' => 'toggle',
                'section' => 'spiko_single_blog_section',
                'priority' => 4,
                    )
    ));

    $wp_customize->add_setting('spiko_enable_single_post_date',
            array(
                'default' => true,
                'sanitize_callback' => 'spiko_sanitize_checkbox',
            )
    );
    $wp_customize->add_control(new Spiko_Toggle_Control($wp_customize, 'spiko_enable_single_post_date',
                    array(
                'label' => esc_html__('Hide/Show Date', 'spiko' ),
                'type' => 'toggle',
                'section' => 'spiko_single_blog_section',
                'priority' => 5,
                    )
    ));

    $wp_customize->add_setting('spiko_enable_single_post_category',
            array(
                'default' => true,
                'sanitize_callback' => 'spiko_sanitize_checkbox',
            )
    );
    $wp_customize->add_control(new Spiko_Toggle_Control($wp_customize, 'spiko_enable_single_post_category',
                    array(
                'label' => esc_html__('Hide/Show Category', 'spiko' ),
                'type' => 'toggle',
                'section' => 'spiko_single_blog_section',
                'priority' => 6,
                    )
    ));  


    $wp_customize->add_setting('spiko_enable_single_post_tag',
            array(
                'default' => true,
                'sanitize_callback' => 'spiko_sanitize_checkbox',
            )
    );
    $wp_customize->add_control(new Spiko_Toggle_Control($wp_customize, 'spiko_enable_single_post_tag',
                    array(
                'label' => esc_html__('Hide/Show Tag', 'spiko' ),
                'type' => 'toggle',
                'section' => 'spiko_single_blog_section',
                'priority' => 8,
                    )
    ));
    $wp_customize->add_setting('spiko_enable_single_post_admin_details',
            array(
                'default' => true,
                'sanitize_callback' => 'spiko_sanitize_checkbox',
            )
    );
    $wp_customize->add_control(new Spiko_Toggle_Control($wp_customize, 'spiko_enable_single_post_admin_details',
                    array(
                'label' => esc_html__('Hide/Show Author Details', 'spiko' ),
                'type' => 'toggle',
                'section' => 'spiko_single_blog_section',
                'priority' => 9,
                    )
    ));
}

add_action('customize_register', 'spiko_single_blog_customizer');