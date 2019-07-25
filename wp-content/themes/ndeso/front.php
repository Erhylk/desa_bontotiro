<div class="sidebar">
                
		    	<iframe width="100%" height="220" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJr6a9WFmyvi0RlLvPQTWLuTU&key=AIzaSyCbQI7v2nNuBP6xzBywvgoU8Jg9UZFfExU" allowfullscreen></iframe>
				<div class="nopadd">
	    			<div class="pro">
				    <?php echo (get_option('alamat')) ? get_option('alamat').'<br/>' : 'Alamat kantor desa / kelurahan belum di atur<br/>' ?>
					<?php echo (get_option('desa')) ? get_option('desa').'<br/>' : 'Desa Kelurahan<br/>' ?>
					<?php echo (get_option('kecamatan')) ? get_option('kecamatan').' - ' : 'Kecamatan - ' ?>
					<?php echo (get_option('kabupaten')) ? get_option('kabupaten').'<br/>' : 'Kabupaten<br/>' ?>
					<?php echo (get_option('provinsi')) ? get_option('provinsi').' - ' : 'Provinsi - ' ?>
					<?php echo (get_option('kodepos')) ? get_option('kodepos').'<br/>' : '11111<br/>' ?>
					Luas : <?php echo (get_option('luas')) ? get_option('luas').'<br/>' : '1.456.736 m2<br/>' ?>
					Populasi : <?php echo (get_option('warga')) ? get_option('warga').'<br/>' : '1.967 jiwa<br/>' ?>
					</div>
			    </div>
				
		    	<?php $args = array( 
		    	'post_type' => 'agenda', 
				'posts_per_page' => 3, 
				'order' => 'ASC', 
				'meta_key' => 'hasp_expire_date', 
				'orderby' => 'meta_value' );
		    	$eventloop = new WP_Query( $args ); 
				
				
				?>
				    <h3 class="sititle"><?php echo (get_option('gtagenda')) ? get_option('gtagenda') : 'AGENDA WARGA / DESA' ?></h3>
				    <?php if ($eventloop->have_posts()) : ?>
					    <?php while ($eventloop->have_posts()) : $eventloop->the_post(); 
						
						
						$date = get_post_meta($post->ID, 'hasp_expire_date', true);
						?>
							<div class="nopadd">
							    <!-- first post -->
						    	<div class="widg">
							    	<div class="meta-info">
									    <span>WAKTU : <?php echo date_i18n("H:i", strtotime($date)); ?> - <?php echo date_i18n("j M Y", strtotime($date)); ?></span>
								    	<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
										<strong>LOKASI</strong> : <?php echo get_post_meta($post->ID, '_lokasi', true); ?><br/>
										<strong>KOORDINATOR</strong> : <?php echo get_post_meta($post->ID, '_koordinator', true); ?><br/>
							        	<p><?php if (function_exists('smart_excerpt')) smart_excerpt(get_the_excerpt(), 18); ?></p>
									</div>
						    	</div>
								<!-- first post -->
							</div>
					<?php endwhile; ?>
				<?php endif; ?>
			<?php wp_reset_query(); ?>
			
			<h3 class="sititle"><?php echo (get_option('gtlapub')) ? get_option('gtlapub') : 'LAYANAN PUBLIK' ?></h3>
			<div class="nopadd">
	    		
    			<?php query_posts('post_type=layanan&showposts=10&order=ASC'); ?>
        			<?php if (have_posts()) { ?>
	         			<?php while (have_posts()): the_post(); ?>
					 
			    		     <div class="lay">
				    			 <?php echo get_post_meta($post->ID, '_layanan', true); ?> <span><?php echo get_post_meta($post->ID, '_telepon', true); ?></span>
					    	 </div>
					
			    		<?php endwhile; ?>
			    	<?php } ?>
		    	<?php wp_reset_query(); ?>
			</div>
			
			<h3 class="sititle"><?php echo (get_option('gtpropem')) ? get_option('gtpropem') : 'PROYEK PEMBANGUNAN' ?></h3>
			<div class="nopadd">
	    		
    			<?php query_posts('post_type=pembangunan&showposts=4'); ?>
        			<?php if (have_posts()) { ?>
	         			<?php while (have_posts()): the_post(); ?>
					 
			    		     <div class="pro">
     							 <div class="pem"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
				    			 
								 <div class="kett">KOORDINATOR : <span><?php echo get_post_meta($post->ID, '_kopro', true); ?></span></div>
								 <div class="kett">ANGGARAN : <span><?php echo get_post_meta($post->ID, '_anpro', true); ?></span></div>
								 <div class="kett">MULAI : <span><?php echo get_post_meta($post->ID, '_mupro', true); ?></span></div>
					    	 </div>
					
			    		<?php endwhile; ?>
			    	<?php } ?>
		    	<?php wp_reset_query(); ?>
			</div>
			
			
						
						

</div>
