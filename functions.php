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


// header-menu //

add_theme_support('menus');
add_theme_support('post-thumbnails');


// Menu //

register_nav_menus(
    array(
        'nav-menu' => __('Navbar', 'theme'),
    )
);

register_nav_menus(
    array(
        'footer' => __('Footer', 'theme'),
    )
);


// Add Li Class
function add_additional_class_on_li($classes, $item, $args)
{
    if (isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);


// Add a Class
function add_additional_class_on_a($classes, $item, $args)
{
    if (isset($args->add_a_class)) {
        $classes['class'] = $args->add_a_class;
    }
    return $classes;
}

add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);


class Quick_Links_Walker extends Walker_Nav_Menu
{
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $output .= '<a href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a>';
    }
}
