<?php get_header(); ?>

    <div class="contents">
	    <div class="clear">
	        <div class="post-meta">
			<h1>
		    	<?php $post = $posts[0]; 
			    if (is_category()) { 
		    		printf('%s', single_cat_title('', false)); 
				} elseif (is_tag()) { 
		    		printf(__('Tag &quot;%s&quot;', 'ndeso'), single_tag_title('', false));
				} elseif (is_day()) { 
	    			printf(_c('Arsip hari %s'), get_the_time('j M Y')); 
				} elseif (is_month()) { 
	    			printf(_c('Arsip bulan %s'), get_the_time('F Y')); 
				} elseif (is_year()) { 
	    			printf(_c('Arsip tahun %s'), get_the_time('Y')); 
				} elseif (is_author()) { 
	    			_e('Arsip Penulis', 'ndeso'); 
				} elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { 
		    		_e('Arsip Tulisan', 'ndeso'); 
				} ?>
			</h1>
			</div>
			
			<?php get_template_part('loop'); ?>
			
			<?php get_template_part('pagination'); ?>
		</div>
	</div>
	
<?php get_footer(); ?>
