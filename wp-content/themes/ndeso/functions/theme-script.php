<?php

/*
 * Memanggil script javascript dan css untuk tampilan.
 *
 */
 
function ndeso_scripts() {
	// Load our main stylesheet.
	wp_enqueue_style('ndeso-style', get_stylesheet_uri());

	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style('ndeso-ie', get_template_directory_uri().'/ie.css', array('ndeso-style'), '20131217');
	wp_style_add_data('ndeso-ie', 'conditional', 'IE');

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}

	wp_enqueue_script('cycle', get_template_directory_uri().'/js/jquery.cycle.all.min.js', array('jquery'), '20170529', false);
	wp_enqueue_script('cookie', get_template_directory_uri().'/js/jquery.cookie.js', array('jquery'), '20170529', false);
	wp_enqueue_script('script', get_template_directory_uri().'/js/script.js', array('jquery'), '20170529', true);
}
add_action('wp_enqueue_scripts', 'ndeso_scripts');

?>