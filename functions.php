<?php

/**
 * Enqueue styles.
 */
function DM_styles()
{
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), wp_get_theme()->get('Version'));
    wp_enqueue_style('swiper', get_template_directory_uri() . '/css/swiper-bundle.min.css', array(), wp_get_theme()->get('Version'));
    wp_enqueue_style('DM', get_template_directory_uri() . '/css/style.css', array(), wp_get_theme()->get('Version'));
}

add_action('wp_enqueue_scripts', 'DM_styles');



// load-js //
function load_js()
{

    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), wp_get_theme()->get('Version'));
    wp_enqueue_script('swiper-js', get_template_directory_uri() . '/js/swiper-bundle.min.js', array(), wp_get_theme()->get('Version'));
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.6.0.min.js', array(), wp_get_theme()->get('Version'));
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array('jquery', 'swiper-js'), wp_get_theme()->get('Version'), true);
}

add_action('wp_enqueue_scripts', 'load_js');

