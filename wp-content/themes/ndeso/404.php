<?php get_header(); ?>

<div class="contents"">
	<div <?php post_class('single clear'); ?> id="post_<?php the_ID(); ?>">
	    <div class="post-meta">
			<h1><?php _e("404, Tidak Ada !", 'ndeso'); ?></h1>
		</div>
		<div class="post-content">
			<p><?php _e("Halaman yang coba dibuka tidak ada. Kemungkinan memang tidak ada atau telah dihapus", 'ndeso'); ?></p>
		</div>
	</div>
</div>

<?php get_footer(); ?>
