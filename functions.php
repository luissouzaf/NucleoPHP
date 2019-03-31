<?php

function load_scripts(){
	wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'style-main', get_template_directory_uri() . '/css/style.css' );
	wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.7.2/css/all.css' );


	wp_register_script( 'jquery-two', get_template_directory_uri() . '/js/jquery-3.3.1.slim.min.js', array(), '3.3.1', true );
	wp_enqueue_script( 'popper-min', get_template_directory_uri() . '/js/popper.min.js', array('jquery-two'), null, true );
	wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery-two'), null, true );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array('jquery-two'), null, true );
	wp_enqueue_script( 'parceiros', get_template_directory_uri() . '/js/parceiros.js', array('jquery-two'), null, true );
	wp_enqueue_script( 'fontawesome', 'https://use.fontawesome.com/releases/v5.7.2/js/all.js', array('jquery-two'), null, true );
}

add_action( 'wp_enqueue_scripts', 'load_scripts' );


// Register Custom Navigation Walker
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

// Menu principal do site
register_nav_menus( array(
	'primary' => __( 'Menu Principal', 'NucleoCulturalWPTheme' ),
) );

// Brand Image on navbar
require_once get_template_directory() . '/inc/brand-logo-customize.php';

// Definir as miniaturas dos posts
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 1920, 1080, true );

// Criar o tipo de post para o slider principal do site
function create_post_type() {
    register_post_type('Slider Home',
    // Definir as opções
    array(
        'labels' => array(
            'name' => __('Slider Home'),
            'singular_name' => __('Slider Home')
        ),
        'supports' => array(
            'title', 'editor', 'thumbnail'
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-images-alt2',
        'rewrite' => array('slug' => 'Slider Home'),
    ));
}
//Iniciar o tipo de post
add_action('init', 'create_post_type');


//Adeus barra maldita
add_filter('show_admin_bar', '__return_false');

// Services section
require_once get_template_directory() . '/inc/services-customize.php';


