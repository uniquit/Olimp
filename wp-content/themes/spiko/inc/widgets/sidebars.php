<?php

add_action('widgets_init', 'spiko_widgets_init');

function spiko_widgets_init() {

    /* sidebar */

    register_sidebar(array(
        'name' => esc_html__('Sidebar widget area', 'spiko' ),
        'id' => 'sidebar-1',
        'description' => esc_html__('Sidebar widget area', 'spiko' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer widget 1', 'spiko' ),
        'id' => 'footer-sidebar-1',
        'description' => esc_html__('Footer widget area 1', 'spiko' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer widget 2', 'spiko' ),
        'id' => 'footer-sidebar-2',
        'description' => esc_html__('Footer widget area 2', 'spiko' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer widget 3', 'spiko' ),
        'id' => 'footer-sidebar-3',
        'description' => esc_html__('Footer widget area 3', 'spiko' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer widget 4', 'spiko' ),
        'id' => 'footer-sidebar-4',
        'description' => esc_html__('Footer widget 4', 'spiko' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => esc_html__('WooCommerce sidebar widget area', 'spiko' ),
        'id' => 'woocommerce',
        'description' => esc_html__('WooCommerce sidebar widget area', 'spiko' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}