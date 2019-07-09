<?php 

/**
 * Template Name: Tema Homepage
 */

get_header(); ?>

    <div class="ndeleft clear">
	    <h3 class="homti"><?php echo (get_option('gtpengumuman')) ? get_option('gtpengumuman') : 'BERITA DARI DESA' ?></h3>
	    <div class="homhalf">
			<?php query_posts('post_type=berita&showposts=6'); ?>
				
				    <?php if (have_posts()) { ?>
					    <?php $count = 0; ?>
					    <?php while (have_posts()): the_post(); ?>
					    	<?php $count++; ?>
							<?php if ($count == 1) { ?>
							<div class="homloop">
							    <!-- first post -->
						    	<div class="slide-info">
							        <?php if (has_post_thumbnail()) { ?>
						        		<a href="<?php the_permalink() ?>" class="thumb"><?php the_post_thumbnail('thumb', array(
							        		'alt' => trim(strip_tags($post->post_title)),
									    	'title' => trim(strip_tags($post->post_title)),
									    	)); ?>
								    	</a>
							    	<?php } else { ?>
									<a href="<?php the_permalink() ?>" class="thumb">
								    	<img src="<?php echo get_template_directory_uri(); ?>/images/bantaeng.png"/>
									</a>
									<?php } ?>
							    	<div class="meta-info">
									    <span>DITERBITKAN : <?php echo get_the_time('l, j M Y'); ?></span>
								    	<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
							        	<?php if (function_exists('smart_excerpt')) smart_excerpt(get_the_excerpt(), 18); ?>
									</div>
						    	</div>
								<!-- first post -->
							</div>
						</div>
						<!-- 2nd - 4rd post -->
						<div class="halfleft">
						<?php } else { ?>
							<div class="slide-inforight">
						    	<?php if (has_post_thumbnail()) { ?>
						        		<a href="<?php the_permalink() ?>" class="thumb"><?php the_post_thumbnail('thumb', array(
							        		'alt' => trim(strip_tags($post->post_title)),
									    	'title' => trim(strip_tags($post->post_title)),
									    	)); ?>
								    	</a>
							    <?php } else { ?>
									<a href="<?php the_permalink() ?>" class="thumb">
			    	    		        <img src="<?php echo get_template_directory_uri(); ?>/images/bantaeng.png"/>
			        				</a>
								<?php } ?>
								<span><?php echo get_the_time('l, j M Y'); ?></span>
								<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
							</div>
						<?php } ?>
					<?php endwhile; ?>
				<?php } else { ?>
				    <div class="homloop">
			    		<div class="slide-info">
						    <a href="#" class="thumb">
			    			    <img src="<?php echo get_template_directory_uri(); ?>/images/bantaeng.png"/>
							</a>
					    	<div class="meta-info">
									    <span>SENIN, 29 Mei 2017</span>
								    	<h3><a href="#">Belum ada Berita</a></h3>
							        	Buat sebuah Berita terlebih dahulu<br/>
										Dashboard > Berita > Tambah Berita<br/><br/>
							</div>
						</div>
					</div>
				</div>
				<div class="halfleft">
				    		<div class="slide-inforight">
						    	<a href="#" class="thumb">
				    	    		<img src="<?php echo get_template_directory_uri(); ?>/images/bantaeng.png"/>
								</a>
								<span>SENIN, 29 Mei 2017</span>
								<h3><a href="#">Contoh Post Berita</a></h3>
							</div>
							<div class="slide-inforight">
						    	<a href="#" class="thumb">
				    	    		<img src="<?php echo get_template_directory_uri(); ?>/images/bantaeng.png"/>
								</a>
								<span>SENIN, 29 Mei 2017</span>
								<h3><a href="#">Contoh Post Berita</a></h3>
							</div>
							<div class="slide-inforight">
						    	<a href="#" class="thumb">
				    	    		<img src="<?php echo get_template_directory_uri(); ?>/images/bantaeng.png"/>
								</a>
								<span>SENIN, 29 Mei 2017</span>
								<h3><a href="#">Contoh Post Berita</a></h3>
							</div>
							<div class="slide-inforight">
						    	<a href="#" class="thumb">
				    	    		<img src="<?php echo get_template_directory_uri(); ?>/images/bantaeng.png"/>
								</a>
								<span>SENIN, 29 Mei 2017</span>
								<h3><a href="#">Contoh Post Berita</a></h3>
							</div>
							<div class="slide-inforight">
						    	<a href="#" class="thumb">
				    	    		<img src="<?php echo get_template_directory_uri(); ?>/images/bantaeng.png"/>
								</a>
								<span>SENIN, 29 Mei 2017</span>
								<h3><a href="#">Contoh Post Berita</a></h3>
							</div>
						
				<?php } ?>
			<?php wp_reset_query(); ?>
		</div>
	</div>
	
    <div class="ndeleft clear">
	    <div class="homhalf">
		<h3 class="homti"><?php echo (get_option('gtkokades')) ? get_option('gtkokades') : 'KOLOM KEPALA DESA' ?></h3>
		    	<?php query_posts('post_type=kades&showposts=1'); ?>
				
				    <?php if (have_posts()) { ?>
					    <?php while (have_posts()): the_post(); ?>
							<div class="homloop">
							
						    	<div class="slide-info">
									<?php if (has_post_thumbnail()) { ?>
						        		<a href="<?php the_permalink() ?>" class="thumb"><?php the_post_thumbnail('thumb', array(
							        		'alt' => trim(strip_tags($post->post_title)),
									    	'title' => trim(strip_tags($post->post_title)),
									    	)); ?>
								    	</a>
							    	<?php } else { ?>
									<a href="<?php the_permalink() ?>" class="thumb">
								    	<img src="<?php echo get_template_directory_uri(); ?>/images/kades.png"/>
									</a>
									<?php } ?>
							    	<div class="meta-info">
								    	<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
										<span class="grey"><?php
										printf(__('%s oleh %s', 'ndeso'),
										get_the_time('l, j M Y'),
										get_the_author()
										); ?></span><br/>
							        	<?php if (function_exists('smart_excerpt')) smart_excerpt(get_the_excerpt(), 18); ?>
									</div>
						    	</div>
								
							</div>
				    	<?php endwhile; ?>
		    		<?php } else { ?>
				        <div class="homloop">
							<div class="slide-info">
			    				<a href="#!" class="thumb">
			         			    <img src="<?php echo get_template_directory_uri(); ?>/images/lurah.jpg"/>
			    				</a>
			    		    	<div class="meta-info">
									    
								    	<h3><a href="#!">Belum Ada Tulisan Pak Kades</a></h3>
										<span class="grey">Senin, 29 Mei 2017</span><br/>
							        	Buat sebuah Tulisan terlebih dahulu<br/>
										Dashboard > Kolom Kades > Tambah Tulisan<br/><br/>
				    			</div>
							</div>
						</div>
					<?php } ?>	
		</div>
						
		<div class="halfleft">
		<h3 class="homti"><?php echo (get_option('gtprodes')) ? get_option('gtprodes') : 'POTENSI DESA' ?></h3>
	    	<?php query_posts('post_type=opini&showposts=6'); ?>
				
				    <?php if (have_posts()) { ?>
					    <?php while (have_posts()): the_post(); ?>
				    		<div class="slide-inforight">
								<?php if (has_post_thumbnail()) { ?>
						        		<a href="<?php the_permalink() ?>" class="thumb"><?php the_post_thumbnail('thumb', array(
							        		'alt' => trim(strip_tags($post->post_title)),
									    	'title' => trim(strip_tags($post->post_title)),
									    	)); ?>
								    	</a>
							    <?php } else { ?>
									<a href="#" class="thumb">
			    	    		        <img src="<?php echo get_template_directory_uri(); ?>/images/bantaeng.png"/>
			        				</a>
								<?php } ?>
						    	<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
									<p style="font: 11px/1.2 'Open Sans' ! important; text-transform: lowercase; color: #777;"><?php if (function_exists('smart_excerpt')) smart_excerpt(get_the_excerpt(), 10); ?></p>
							</div>
						<?php endwhile; ?>
		    		<?php } ?>
			<?php wp_reset_query(); ?>
		</div>
	</div>

	
	<div class="ndeleft clear">
    	<div class="homhalf">
    		<h3 class="homti"><?php echo (get_option('gtgaleri')) ? get_option('gtgaleri') : 'GALERI' ?></h3>
	    	<?php query_posts('post_type=galeri&showposts=9'); ?>
				<div class="homgal clear">
				    <?php if (have_posts()) { ?>
					    <ul>
					    <?php while (have_posts()): the_post(); ?>
						    	<li class="ndesogal">
						    	<?php if (has_post_thumbnail()) { ?>
						        		<?php the_post_thumbnail('thumbnail', array(
							        		'alt' => trim(strip_tags($post->post_title)),
									    	'title' => trim(strip_tags($post->post_title)),
									    	)); ?>
							    <?php } ?>
								</li>
						<?php endwhile; ?>
						</ul>
		    		<?php } ?>
				</div>
			<?php wp_reset_query(); ?>
		</div>
    	<div class="halfleft">
    		<h3 class="homti"><?php echo (get_option('gtvideo')) ? get_option('gtvideo') : 'VIDEO' ?></h3>
	    	<?php query_posts('post_type=video&showposts=1'); ?>
				<div class="homv clear">
				    <?php if (have_posts()) { ?>
					    <?php while (have_posts()): the_post(); ?>
				    		<div class="full">
						    	<iframe src="https://www.youtube.com/embed/<?php echo get_post_meta($post->ID, '_embed', true); ?>" frameborder="0" allowfullscreen></iframe>
							</div>
						<?php endwhile; ?>
		    		<?php } ?>
				</div>
			<?php wp_reset_query(); ?>
		</div>
	</div>

<?php get_footer(); ?>