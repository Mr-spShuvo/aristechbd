<?php
function aris_enqueue_scripts() {

    //Enqueuing Stylesheet
    wp_enqueue_style('wp-style', get_stylesheet_uri(), NULL, '1.0.1', 'all');
    wp_enqueue_style('aris-fonts', '//fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet', NULL, '1.0.1', 'all');
    wp_enqueue_style('aris-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', NULL, '1.0.1', 'all');
    wp_enqueue_style('aris-style', get_template_directory_uri() . '/assets/css/aris-style.css', array('aris-fonts', 'aris-bootstrap'), '1.0.1', 'all');


    //Enqueuing Scripts
    wp_enqueue_script('aris-feather-icon', '//cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js', NULL, '1.0.1', false);
    wp_enqueue_script('aris-popperjs', get_template_directory_uri() . '/assets/js/popper.min.js', NULL, '1.0.1', true);
    wp_enqueue_script('aris-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', NULL, '1.0.1', true);
    wp_enqueue_script('aris-js', get_template_directory_uri() . '/assets/js/aris-scripts.js', array('jquery', 'aris-bootstrap'), '1.0.1', true);

    ///
}
add_action('wp_enqueue_scripts', 'aris_enqueue_scripts');



function aris_theme_features() {
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('comment-list'));
}
add_action('after_setup_theme', 'aris_theme_features');


function aris_widgets_init()
{
    register_sidebar(array(
        'name'          => __('Main Sidebar', 'aris'),
        'id'            => 'main-sidebar',
        'description'   => __('Widgets in this area will be shown on all posts and pages.', 'aris'),
        'before_widget' => '<div class="card my-4">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="card-header">',
        'after_title'   => '</h5>',
    ));
}
add_action('widgets_init', 'aris_widgets_init');
