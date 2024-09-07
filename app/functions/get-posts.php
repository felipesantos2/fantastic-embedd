<?php

$posts = new WP_Query(
    array(
        'post_type' => 'fan-files',
        'post_status' => 'publish',
        'post_per_page' => -1,
    )
);
