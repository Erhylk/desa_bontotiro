<?php get_header(); ?>

    <div class="contents">
	<?php if (have_posts()): ?>
		<?php while (have_posts()): the_post(); ?>

			<div <?php post_class('single clear'); ?> id="post_<?php the_ID(); ?>">
				<div class="post-meta">
					<h1><?php the_title(); ?></h1>
					<?php printf(__('Oleh Kades : <span class="post-date">%s</span> , Ditulis : <span class="post-date">%s</span>', 'ndeso'),
					    get_the_author(),
						get_the_time('l, j M Y')
					); ?>
					<?php if (comments_open()): ?>
						<a href="#comments" class="post-comms"><?php comments_number(__('0 komentar', 'ndeso'), __('1 komentar', 'ndeso'), __('% komentar', 'ndeso'), '', __('komentar ditutup', 'ndeso') ); ?></a>
					<?php endif; ?>
				</div>
				<div class="post-content">
				<?php if (has_post_thumbnail()) echo '<div class="post-img">'.get_the_post_thumbnail($post->ID, 'full',
					array(
						'alt' => trim(strip_tags($post->post_title)),
						'title' => trim(strip_tags($post->post_title)),
					)).'</div>'; ?>
				<?php the_content(); ?></div>
				<div class="post-footer"><?php the_tags(''.__('', 'ndeso').'', ' '); ?></div>
				<?php wp_link_pages(array(
					'before' => '<p class="page-links"><span class="page-links-title">'.__('Pages:', 'ndeso').'</span>',
					'after' => '</p>',
					'link_before' => '<span>',
					'link_after' => '</span>',
				)); ?>
			</div>
			<div class="post-navigation clear">
				<?php
					$prev_post = get_adjacent_post(false, '', true);
					$next_post = get_adjacent_post(false, '', false); ?>
					<?php if ($prev_post): $prev_post_url = get_permalink($prev_post->ID); $prev_post_title = $prev_post->post_title; ?>
						<a class="post-prev" href="<?php echo $prev_post_url; ?>"><em><?php _e('Tulisan sebelumnya', 'ndeso'); ?></em><span><?php echo $prev_post_title; ?></span></a>
					<?php endif; ?>
					<?php if ($next_post): $next_post_url = get_permalink($next_post->ID); $next_post_title = $next_post->post_title; ?>
						<a class="post-next" href="<?php echo $next_post_url; ?>"><em><?php _e('Tulisan setelahnya', 'ndeso'); ?></em><span><?php echo $next_post_title; ?></span></a>
					<?php endif; ?>
			</div>
		
		<?php endwhile; ?>
	<?php endif; ?>
	
	<?php comments_template(); ?>
	</div>

<?php get_footer(); ?>
