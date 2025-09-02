<?php 
/*---------------------------------------
基本のセットアップ
---------------------------------------*/
function setup_my_theme() {
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
}
add_action('after_setup_theme', 'setup_my_theme');

/*---------------------------------------
script / css 読み込み
---------------------------------------*/
function my_theme_scripts() {
    wp_enqueue_style('all', get_theme_file_uri('./assets/css/style.css'), [], '20250902');
    wp_enqueue_script('all', get_theme_file_uri('./assets/js/main.js'), ['jquery'], '20250902', true);
}
add_action('wp_enqueue_scripts', 'my_theme_scripts');

/*---------------------------------------
google fonts 読み込み
---------------------------------------*/
function my_theme_enqueue_styles() {
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Itim&family=Noto+Sans+JP:wght@100..900&display=swap',
        array(),
        null
    );
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
