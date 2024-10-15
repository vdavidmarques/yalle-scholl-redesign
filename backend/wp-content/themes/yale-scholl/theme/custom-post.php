<?php

function custom_post_types()
{


    register_post_type('events', array(
        'labels' => array(
            'name' => __('Events'),
            'singular_name' => __('Event')
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'events'),
        'menu_icon' => 'dashicons-calendar-alt',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'show_in_rest' => true
    ));


    register_post_type('publications', array(
        'labels' => array(
            'name' => __('Publications'),
            'singular_name' => __('Publication')
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'publications'),
        'menu_icon' => 'dashicons-book',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'show_in_rest' => true
    ));


    register_post_type('exhibitions', array(
        'labels' => array(
            'name' => __('Exhibitions'),
            'singular_name' => __('Exhibition')
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'exhibitions'),
        'menu_icon' => 'dashicons-art',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'show_in_rest' => true
    ));


    register_post_type('courses', array(
        'labels' => array(
            'name' => __('Courses'),
            'singular_name' => __('Course')
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'courses'),
        'menu_icon' => 'dashicons-welcome-learn-more',
        'supports' => array('title', 'thumbnail',  'custom-fields'),
        'show_in_rest' => true
    ));
}

add_action('init', 'custom_post_types');
