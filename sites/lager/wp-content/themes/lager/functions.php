<?php
add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/style.css');

    wp_enqueue_script('script-name', get_template_directory_uri() . '/assets/script.js', array(), 'null', true);
});

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');
?>
