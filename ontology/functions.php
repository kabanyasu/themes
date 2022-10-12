<?php
function theme_setup() {
    register_nav_menu('main-menu', 'メインメニュー');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('achive_thumbnail',360,203,true);
    add_theme_support('wp-block-styles');
    add_theme_support('responsive-embeds');
    add_theme_support('align-wide');
}
add_action('after_setup_theme', 'theme_setup');

function enqueue_scripts() {
    wp_enqueue_style(
        'googlefonts1',
        'https://fonts.googleapis.com',
        array(),
        '1.0.0'
    );

    wp_enqueue_style(
        'googlefonts2',
        'https://fonts.gstatic.com',
        array(),
        '1.0.0'
    );

    wp_enqueue_style(
        'googlefonts3',
        'https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap',
        array(),
        '1.0.0'
    );

    wp_enqueue_style(
        'theme-style',
        get_template_directory_uri().'/css/style.css',
        array(),
        '1.0.0'
    );

    wp_enqueue_style(
        'theme-common',
        get_template_directory_uri().'/css/common.css',
        array(),
        '1.0.0'
    );
}
add_action('wp_enqueue_scripts', 'enqueue_scripts' ); 