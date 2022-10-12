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