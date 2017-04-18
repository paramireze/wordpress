<?php

function twentyfourteen_child_theme_scripts() {

    wp_enqueue_script( 'extra js', get_stylesheet_directory_uri() . '/js/extra.js' );

}

add_action( 'wp_enqueue_scripts', 'twentyfourteen_child_theme_scripts' );

function twentyfourteen_child_widgets_init() {

    register_sidebar( array(
        'name' => 'Tutorial Widget Area',
        'id' => 'tutorial_widget_area',
        'brefore_widget' => '<aside>',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));

}

add_action( 'widgets_init', 'twentyfourteen_child_widgets_init' );

function twentyfourteen_child_register_menu() {

    register_nav_menu( 'new-menu', __( 'Our New Menu' ) );

}

add_action( 'init', 'twentyfourteen_child_register_menu' );