<?php
// Theme Support
function wpnews_theme_support() {
	// Nav menus
	register_nav_menus([
		'primary' => __('Primary menu')
	]);
}

add_action('after_setup_theme', 'wpnews_theme_support');