<?php

/*
 * Register widget (sidebar).
 *
 */
function ndeso_widgets_init() {
	require get_template_directory().'/widgets/recent-posts.php';
	register_widget('Recentposts_thumbnail');

	register_sidebar(array(
		'name' => __('Sidebar', 'ndeso'),
		'before_widget' => '<div id="%1$s" class="%2$s widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
}
add_action('widgets_init', 'ndeso_widgets_init');

?>