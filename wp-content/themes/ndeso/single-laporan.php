<?php 

/**
 * Template Name: Tema Laporan
 */

get_header(); ?>

    <div class="ndeleft clear">

<?php
// List posts by the terms for a custom taxonomy of any post type

$post_type = 'dana-desa';
$tax = 'tahun';
$tahun = get_post_meta($post->ID, '_tahun');
$tax_args = array(
'order' => 'DESC',
'slug' => $tahun,
);

    // get all the first level terms only
    $tax_terms = get_terms( $tax, $tax_args );
    if ($tax_terms) {
    	foreach ($tax_terms as $tax_term) { // foreach first level term
        // print the parent heading
		?>
		<h3 class="homti">LAPORAN TAHUN <?php echo $tax_term->name; ?></h4>
		<div>
		<?php
		// get all its children
		$child_terms = ""; // first ensure this var is empty
		$child_terms = get_terms ( $tax, array('order' => 'DESC', 'parent' => $tax_term->term_id) );
		// store an array of child terms slug
		$child_terms_array = array();
    		foreach ($child_terms as $child_term){
    			$child_terms_array[] = $child_term->slug;
			}
			
			// first of all, print the posts of the parent, but excluding the one which are also into a child term
			$parent_args="";
			$parent_args = array(
    			'post_type' => $post_type,
				'tax_query' => array(
    				'relation' => 'AND',
    					array(
    						'taxonomy' => $tax,
							'field' => 'slug',
							'terms' => $tax_term->slug,
							'include_children' => false,
							'operator' => 'IN'
							),
						array(
    						'taxonomy' => $tax,
							'field' => 'slug',
							'terms' => $child_terms_array,
							'include_children' => false,
							'operator' => 'NOT IN'
							)
						),
				'post_status' => 'publish',
				'posts_per_page' => 1116,
				'order' => 'ASC',
				);
				
			// query the posts
			$parent_query = null;
			$parent_query = new WP_Query($parent_args);

    			if( $parent_query->have_posts() ) : ?>
    				<ul>
					<?php while ( $parent_query->have_posts() ) : $parent_query->the_post(); ?>
    					<li>
				    		<a href="<?php the_permalink() ?>">
						    	<?php the_title(); ?>
							</a>
						</li>
					<?php endwhile; // end of loop ?>
					</ul>
				<?php endif; // if have_posts()
				
			wp_reset_query();
			
			// if any, foreach child term, query the posts
			if ( !empty($child_terms) ){
    			foreach ($child_terms as $child_term){
    				$child_args="";
					$child_args = array(
    					'post_type' => $post_type,
						'tax_query' => array(
    						array(
    							'taxonomy' => $tax,
								'field' => 'slug',
								'terms' => $child_term->slug,
								'include_children' => false,
								'operator' => 'IN'
							)
						),
						'post_status' => 'publish',
						'posts_per_page' => 1116,
						'order' => 'ASC',
					);
					
					// query the posts
					$child_query = null;
					$child_query = new WP_Query($child_args);
					
					if( $child_query->have_posts() ) : ?>
					<h4 style="background:#eee; text-transform: uppercase; font: 700 14px/2.0 'Open Sans'; padding: 0 10px;"><?php echo $child_term->name; ?></h4>
    					<ul>
						<?php $count = 0; ?>
						<?php while ( $child_query->have_posts() ) : $child_query->the_post(); ?>
						<?php $count++; ?>
    						<li style="margin:0 0 -1px; border-top: 1px solid #eee; border-bottom: 1px solid #eee; padding: 4px 10px;">
				    			<?php echo $count; ?>. <a href="<?php the_permalink() ?>">
    								<?php the_title(); ?>
								</a>
								<span style="float: right; font-weight: bold;"><?php echo get_post_meta($post->ID, '_jumlah', true); ?></span>
							</li>
							
						<?php endwhile; // end of loop ?>
						
    					</ul>

					<?php endif; // if have_posts()
					
					wp_reset_query();
				} // end foreach #child_terms
			}
		
		?>
		
		</div>
		<?php
		} // end foreach #parent_term
	} else {
	echo 'Tidak ada data';
	}
	
	?>		
		
	
	
	<?php if (have_posts()): ?>
		<?php while (have_posts()): the_post(); ?>
            <h4 style="background:#eee; text-transform: uppercase; font: 700 14px/2.0 'Open Sans'; margin:40px 0 0; padding: 0 10px;">RINGKASAN LAPORAN</h4>
			<div>
				<ul>
		    		<li style="border-bottom: 1px solid #eee; padding: 4px 10px;">
				    	Dana Terpakai <span style="float: right; font-weight: bold;"><?php echo get_post_meta($post->ID, '_pakai', true); ?></span>
					</li>
					<li style="border-bottom: 1px solid #eee; padding: 4px 10px;">
				    	Dana Tersisa <span style="float: right; font-weight: bold;"><?php echo get_post_meta($post->ID, '_sisa', true); ?></span>
					</li>
					<li style="border-bottom: 1px solid #eee; padding: 4px 10px;">
				    	Total Dana Anggaran <span style="float: right; font-weight: bold;"><?php echo get_post_meta($post->ID, '_total', true); ?></span>
					</li>
				</ul>
			</div>
			<div class="post-navigation clear">
				<?php
					$prev_post = get_adjacent_post(false, '', true);
					$next_post = get_adjacent_post(false, '', false); ?>
					<?php if ($prev_post): $prev_post_url = get_permalink($prev_post->ID); $prev_post_title = $prev_post->post_title; ?>
						<a class="post-prev" href="<?php echo $prev_post_url; ?>"><em><?php _e('Previous post', 'ndeso'); ?></em><span><?php echo $prev_post_title; ?></span></a>
					<?php endif; ?>
					<?php if ($next_post): $next_post_url = get_permalink($next_post->ID); $next_post_title = $next_post->post_title; ?>
						<a class="post-next" href="<?php echo $next_post_url; ?>"><em><?php _e('Next post', 'ndeso'); ?></em><span><?php echo $next_post_title; ?></span></a>
					<?php endif; ?>
			</div>
		
		<?php endwhile; ?>
	<?php endif; ?>
	
</div>

<?php get_footer(); ?>