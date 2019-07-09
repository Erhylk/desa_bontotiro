<?php

// Menampilkan slide berita terbaru di halaman home

?>

<?php query_posts('post_type=post&showposts=5'); ?>

<div class="slideshow">
	<div id="slideshow">
	
	<?php if (have_posts()) { ?>
		<?php while (have_posts()): the_post(); ?>
		<div class="slide clear">
			<div class="post">
				<?php if (has_post_thumbnail()) echo '<a href="'.get_permalink().'">'.get_the_post_thumbnail($post->ID, 'slide',
					array(
						'alt' => trim(strip_tags($post->post_title)),
						'title' => trim(strip_tags($post->post_title)),
					)).'</a>'; ?>
				<div class="post-category"><?php the_category(' / '); ?></div>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

				<div class="post-meta"><?php
					printf(__('oleh <span class="post-author"><a href="%s" title="Posts by %s">%s</a></span> pada <span class="post-date">%s</span>', 'ndeso'),
						get_author_posts_url(get_the_author_meta('ID')),
						get_the_author(),
						get_the_author(),
						get_the_time('l, j M Y')
					); ?>
				</div>
				<div class="post-content"><?php if (function_exists('smart_excerpt')) smart_excerpt(get_the_excerpt(), 20); ?></div>
			</div>
		</div>
        <?php endwhile; ?>
	<?php } ?>

	</div>

	<a href="javascript: void(0);" id="larr"></a>
	<a href="javascript: void(0);" id="rarr"></a>
</div>

<?php wp_reset_query(); ?>
