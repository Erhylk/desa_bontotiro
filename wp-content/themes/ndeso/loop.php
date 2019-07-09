<?php if (have_posts()): ?>

	<div id="loop" class="list archives clear">

	<?php while (have_posts()): the_post(); ?>

		<div <?php post_class('post clear'); ?> id="post_<?php the_ID(); ?>">
			<?php if (has_post_thumbnail()): ?>
			<a href="<?php the_permalink() ?>" class="ndesothumb"><?php the_post_thumbnail('thumb', array(
					'alt' => trim(strip_tags($post->post_title)),
					'title' => trim(strip_tags($post->post_title)),
				)); ?></a>
			<?php endif; ?>
			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

			<div class="post-meta">
			    <?php printf(__('Diterbitkan : <span class="post-date">%s</span>', 'ndeso'),
						get_the_time('l, j M Y')
				); ?>
			</div>
			<div class="post-content"><?php if (function_exists('smart_excerpt')) smart_excerpt(get_the_excerpt(), 30); ?></div>
		</div>

	<?php endwhile; ?>

	</div>

<?php endif; ?>
