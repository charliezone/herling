<?php

function is_blog () {
    return ( is_archive() || is_author() || is_category() || is_home() || is_single() || is_tag()) && 'post' == get_post_type();
}

function herling_setup(){
    add_theme_support( 'post-thumbnails' );
}

function herling_styles_scripts() {
    wp_enqueue_style( 'font-poppins', 'https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=devanagari,latin-ext');
    wp_enqueue_style( 'font-roboto', 'https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese');

    //wp_enqueue_style( 'style-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array('font-roboto') );
    //wp_enqueue_style( 'style-font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array('style-bootstrap') );
    //wp_enqueue_style( 'style-fancybox', get_template_directory_uri() . '/css/jquery.fancybox.min.css', array('style-font-awesome') );
    //wp_enqueue_style( 'style-animsition', get_template_directory_uri() . '/css/animsition.min.css', array('style-fancybox') );
    //wp_enqueue_style( 'style-theme', get_template_directory_uri() . '/css/style.css', array('style-animsition') );
    wp_enqueue_style( 'style-app', get_template_directory_uri() . '/css/app.css', array('font-roboto') );
    wp_enqueue_style( 'herling-custom-style', get_stylesheet_uri(), array('style-app'), '1.0.3' );

    //wp_enqueue_script( 'script-popper', get_template_directory_uri() . '/js/popper.min.js', array('jquery'), '', true );
    //wp_enqueue_script( 'script-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('script-popper'), '', true );
    //wp_enqueue_script( 'script-plugins', get_template_directory_uri() . '/js/plugins.js', array('script-bootstrap'), '', true );
    wp_register_script( 'script-app', get_template_directory_uri() . '/js/app.js', array('jquery'), '', true );
    wp_register_script( 'script-custom', get_template_directory_uri() . '/js/custom.js', array('script-app'), '', true );
    $site_info = array('theme_url' => get_template_directory_uri());
    wp_localize_script( 'script-custom', 'site_info', $site_info );
    wp_enqueue_script('script-custom');
}


add_action( 'after_setup_theme', 'herling_setup' );
add_action( 'wp_enqueue_scripts', 'herling_styles_scripts' );
?>