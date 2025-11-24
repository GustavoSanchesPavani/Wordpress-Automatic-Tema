<?php

function automatic_tema_enqueue_assets() {
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', array(), '6.5.1');
    wp_enqueue_style('automatic-style', get_template_directory_uri() . '/style.css', array(), '1.0.0');
    wp_enqueue_script('automatic-script', get_template_directory_uri() . '/script.js', array(), '1.0.0', true);
}

function automatic_tema_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

function automatic_trustindex_shortcode() {
    return do_shortcode('[trustindex no-registration=google]');
}
add_shortcode('automatic_reviews', 'automatic_trustindex_shortcode');
add_action('wp_enqueue_scripts', 'automatic_tema_enqueue_assets');
add_action('after_setup_theme', 'automatic_tema_setup');