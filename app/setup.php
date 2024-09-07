<?php

add_action('wp_enqueue_scripts', 'fantastic_embedd_enqueue');

function fantastic_embedd_enqueue(): void
{
    wp_enqueue_style(
        'app-css',
        plugin_dir_url(__DIR__, 2) . '/../public/app.css',
        [],
        '1.' . rand(),
    );

    wp_enqueue_script(
        'alpine-js',
        'https://cdn.jsdelivr.net/npm/alpinejs@3.14.1/dist/cdn.min.js',
        [],
        '1.0',
        true,
    );

    wp_enqueue_script(
        'app-js',
        plugin_dir_url(__DIR__, 2) . '/../public/app.js',
        ['jquery'],
        '1.' . rand(),
        true,
    );
}

add_action('init', 'fantastic_embedd_files_post_type');

function fantastic_embedd_files_post_type(): void
{
    register_post_type(
        'fan-files',
        array(
            'labels' => array(
                'name' => __('Files'),
                'singular_name' => __('File')
            ),
            'public' => true,
            'show_in_rest' => true,
            'supports' => array('title', 'editor'),
            'has_archive' => true,
            'rewrite'   => array('slug' => 'fan-files'),
            'menu_position' => 5,
            'menu_icon' => 'dashicons-buddicons-replies',
        ),
    );
}

add_shortcode('fembed', 'fantastic_embedd_shortcode');

function fantastic_embedd_shortcode(): void
{
    require_once plugin_dir_path(__DIR__) . 'app/functions/get-posts.php';
    require_once plugin_dir_path(__DIR__) . 'app/templates/template.php';
}

