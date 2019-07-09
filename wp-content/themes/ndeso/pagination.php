<?php if (get_option('paging_mode') == 'default'): ?>
	<div class="pagination">
		<?php previous_posts_link(__('Lebih baru', 'ndeso')); ?>
		<?php next_posts_link(__('Lebih lama', 'ndeso')); ?>
		<?php if (function_exists('wp_pagenavi')) wp_pagenavi(); ?>
	</div>
	<?php else: ?>
	<div id="pagination"><?php next_posts_link(__('Lihat lebih banyak', 'ndeso')); ?></div>
<?php endif; ?>