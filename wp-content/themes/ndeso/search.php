<?php get_header(); ?>

    <div class="contents">
    <?php if (have_posts()): ?>
	
    	<div class="clear">
    	    <div class="post-meta">
     	    	<h1><?php _e('Hasil pencarian', 'ndeso'); ?> "<?php the_search_query(); ?>"</h1>
        	</div>

         	<?php get_template_part('loop'); ?>
			
			<?php get_template_part('pagination'); ?>
		
    	</div>

    <?php else: ?>
	
    	<div class="clear">
    	    <div class="post-meta">
		    	<h1><?php _e('Tidak ada hasil pencarian', 'ndeso'); ?> "<?php the_search_query(); ?>"</h1>
			</div>
		</div>
		
	<?php endif; ?>
	</div>

<?php get_footer(); ?>
