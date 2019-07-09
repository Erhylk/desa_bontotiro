<div class="sidebar">
	<?php if (dynamic_sidebar('Sidebar')):
		$widget_args = array(
    		'before_widget' => '<div id="%1$s" class="%2$s widget">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		);
	?>	
	<?php endif; ?>
</div>
