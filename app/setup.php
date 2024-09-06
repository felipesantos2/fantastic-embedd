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
    // ...
}


