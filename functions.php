<?php

// Adding the theme stylesheet
add_action( 'wp_enqueue_scripts', 'theme_slug_enqueue_styles' );

function theme_slug_enqueue_styles() {
	wp_enqueue_style( 
		'theme-slug-style', 
		get_stylesheet_uri()
	);
}

// DESHABILITAR recursos de wordpress
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script' );
remove_action('admin_print_styles', 'print_emoji_styles' );
remove_action('wp_head', 'wp_resource_hints', 2 );
remove_action('wp_head', 'wp_generator');
?>