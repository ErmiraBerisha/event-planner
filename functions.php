<?php



function load_css()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/dist/css/app.css', array(), false, 'all' );
    wp_enqueue_style('bootstrap');

}

add_action('wp_enqueue_scripts', 'load_css');

function load_css2()
{
    wp_register_style('services', get_template_directory_uri() . '/dist/css/services.css', array(), false, 'all' );
    wp_enqueue_style('services');

}

add_action('wp_enqueue_scripts', 'load_css2');

function load_css3()
{
    wp_register_style('blog', get_template_directory_uri() . '/dist/css/blog.css', array(), false, 'all' );
    wp_enqueue_style('blog');

}

add_action('wp_enqueue_scripts', 'load_css3');

function load_css4()
{
    wp_register_style('contactus', get_template_directory_uri() . '/dist/css/contactus.css', array(), false, 'all' );
    wp_enqueue_style('contactus');

}

add_action('wp_enqueue_scripts', 'load_css4');

function load_css5()
{
    wp_register_style('mediaq', get_template_directory_uri() . '/dist/css/media-queries.css', array(), false, 'all' );
    wp_enqueue_style('mediaq');

}

add_action('wp_enqueue_scripts', 'load_css5');

function load_js()
{
    wp_enqueue_script('jquery');
    
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/app.js', 'jquery', false, true);
    wp_enqueue_script('bootstrap');
}

add_action('wp_enqueue_scripts', 'load_js');


//Add menu



add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');





register_nav_menus(
    array(
        'top-menu'=> 'Top Menu Location',
        'mobile-menu'=> 'Mobile Menu Location',
    )


);


//register sidebars

function my_sidebars()
{
    register_sidebar(
        array(
            'name'=> 'Page Sidebar',
            'id'=> 'page-sidebar',
            'before-title'=> '<h4 class="widget-title">',
            'after_title'=> '</h4>'

        )

    );

    register_sidebar(
        array(
            'name'=> 'Blog Sidebar',
            'id'=> 'blog-sidebar',
            'before-title'=> '<h4 class="widget-title">',
            'after_title'=> '</h4>'

        )

    );

}
add_action('widgets_init', 'my_sidebars');