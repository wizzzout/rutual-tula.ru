<?php
function ritual_tula_setup()
{
	load_theme_textdomain('ritual-tula', get_template_directory() . '/languages');
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');

	register_nav_menus(array(
		'primary' => __('Primary Menu', 'ritual-tula'),
	));

	// Поддержка WooCommerce
	add_theme_support('woocommerce');
	add_theme_support('wc-product-gallery-zoom');
	add_theme_support('wc-product-gallery-lightbox');
	add_theme_support('wc-product-gallery-slider');
}
add_action('after_setup_theme', 'ritual_tula_setup');

function ritual_tula_styles()
{
	wp_enqueue_style('ritual-tula-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'ritual_tula_styles');
