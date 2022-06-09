<?php

add_theme_support('menus');
add_theme_support( 'title-tag');

function load_theme_scripts(){
    wp_enqueue_style( 'style', get_stylesheet_uri());
    wp_enqueue_style( 'BS-style', get_template_directory_uri().'/bootstrap-5.0.1/css/bootstrap.min.css');
}

add_action( 'wp_enqueue_scripts', 'load_theme_scripts');



function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
  }

add_action( 'init', 'register_my_menu' );
