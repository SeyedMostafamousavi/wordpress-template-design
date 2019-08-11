<?php


function theme_styles(){

    wp_enqueue_style('bootstrap_css' , get_template_directory_uri() . '/css/bootstrap.min.css');

    wp_enqueue_style('main_css' , get_template_directory_uri() . '/style.css');

}

add_action( 'wp_enqueue_scripts' , 'theme_styles' );

function theme_js(){

    wp_enqueue_script('bootstrap_jquery_js',  get_template_directory_uri() . '/js/jquery-3.3.1.slim.min.js' , array() ,'', true);

    wp_enqueue_script('bootstrap_js',  get_template_directory_uri() . '/js/bootstrap.min.js' , array() ,'', true);

    wp_enqueue_script('bootstrap_popper_js',  get_template_directory_uri() . '/js/popper.min.js' , array() ,'', true);
}

add_action('wp_enqueue_scripts' , 'theme_js');

// add_filter('show_admin_bar', '__return_false');

add_theme_support('menus');

function register_theme_menus(){

  register_nav_menus(

    array(
        'header menu' => __('Header Menu')
    )

  );
}

add_action('init' , 'register_theme_menus');

function create_widget($name , $id , $description){

    register_sidebar(
        array(
            'name' => __( $name ),
            'id' => $id,
            'description' => __($description),
            'befor_widget' => '<div class="widget">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        )
        );
}

create_widget('front page left' , 'front-left' , 'this widget shows on the left side');

create_widget('front page center' , 'front-center' , 'this widget shows on the center side');

create_widget('front page right' , 'front-right' , 'this widget shows on the right side');


?>