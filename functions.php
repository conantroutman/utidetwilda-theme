<?php

// Dynamic title support
function utidetwilda_theme_support() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo' );
}
add_action( 'after_setup_theme', 'utidetwilda_theme_support' );

// Dynamic navigation menu support
function utidetwilda_menus() {
    $locations = array(
        'primary' => "Navbar Menu",
        'footer' => "Footer Menu",
        'social' => "Social Links",
        'lang' => "Language Select"
    );

    register_nav_menus($locations);
}
add_action('init', 'utidetwilda_menus');

// CSS files
function utidetwilda_register_styles() {

    $version = wp_get_theme() -> get ( 'Version' );
    wp_enqueue_style( 'utidetwilda-style', get_template_directory_uri() . "/style.css", array('utidetwilda-fontawesome'), $version, 'all' );
    wp_enqueue_style( 'utidetwilda-sal', get_template_directory_uri() . "/assets/css/sal.css", array('utidetwilda-style'), $version, 'all' );
    wp_enqueue_style( 'utidetwilda-fontawesome', "https://use.fontawesome.com/releases/v5.15.2/css/all.css", array(), '5.15.2', 'all' );
}
add_action('wp_enqueue_scripts', 'utidetwilda_register_styles');

// Javascript files
function utidetwilda_register_scripts() {
    wp_enqueue_script( 'utidetwilda-salscript', get_template_directory_uri() . "/assets/javascript/sal.js", false, '1.0', true );
    wp_enqueue_script( 'utidetwilda-scrollreveal', 'https://cdnjs.cloudflare.com/ajax/libs/scrollReveal.js/2.0.0/scrollReveal.min.js', array(), '2.0.0', true );
    wp_enqueue_script( 'utidetwilda-rellax', "https://cdnjs.cloudflare.com/ajax/libs/rellax/1.12.1/rellax.min.js", array(), '1.12.1', true );
    wp_enqueue_script( 'utidetwilda-smoothscroll', "https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/16.1.3/smooth-scroll.min.js", array(), '16.1.3', true );
    wp_enqueue_script( 'utidetwilda-mainscript', get_template_directory_uri() . "/assets/javascript/main.js", array('utidetwilda-scrollreveal', 'utidetwilda-rellax', 'utidetwilda-smoothscroll', 'utidetwilda-salscript'), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'utidetwilda_register_scripts' );

?>