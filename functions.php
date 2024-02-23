<?php
// Theme Support
function wpnews_theme_support() {
	// Nav menus
	register_nav_menus([
		'primary' => __('Primary menu')
	]);

	// Post Thumbnails
	add_theme_support('post-thumbnails');
	add_image_size( 'news-thumb', 400, 200);
}

add_action('after_setup_theme', 'wpnews_theme_support');