<?php get_header(); ?>

    <div class="contents">
	<?php if (have_posts()): ?>
		<?php while (have_posts()): the_post(); ?>

			<div <?php post_class('single clear'); ?> id="post_<?php the_ID(); ?>">
				<div class="post-meta">
					<h1><?php the_title(); ?></h1>
					<?php printf(__('Diterbitkan : <span class="post-date">%s</span>', 'ndeso'),
						get_the_time('l, j M Y')
					); ?>
					<?php if (comments_open()): ?>
						<a href="#comments" class="post-comms"><?php comments_number(__('0 komentar', 'ndeso'), __('1 komentar', 'ndeso'), __('% komentar', 'ndeso'), '', __('komentar ditutup', 'ndeso') ); ?></a>
					<?php endif; ?>
				</div>
				<div class="post-content"><?php the_content(); ?></div>
			</div>

		<?php endwhile; ?>
	<?php endif; ?>
	<?php comments_template(); ?>
    </div>

<?php get_footer(); ?>