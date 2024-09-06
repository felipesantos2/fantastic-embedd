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

add_shortcode('fembed', 'fantastic_embedd_shortcode');

function fantastic_embedd_shortcode(): void
{
    require_once plugin_dir_path(__DIR__) . 'app/templates/index.php';
}
