<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<title><?php is_front_page() ? bloginfo('name') : wp_title(''); ?></title>
		<meta http-equiv="Content-language" content="<?php bloginfo('language'); ?>" />
		<meta name="viewport" content="width=device-width" />
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favico.ico" type="image/x-icon" />
		<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/jquery.min.js'></script>
		<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/newstickers.js'></script>
		<?php wp_head(); ?>
		<script>
        $(function(){
           $("ul#kampus-ticker").liScroll();
        });
        </script>
		<script type="text/javascript">
		(function($) {
			$(function() {
				$('#slideshow').cycle({
					fx: 'scrollHorz',
					timeout: <?php echo (get_option('ss_timeout')) ? get_option('ss_timeout') : '7000' ?>,
					next: '#rarr',
					prev: '#larr'
				});
			})
		})(jQuery)
		</script>
		<script type="text/javascript">
    		$("document").ready(function($){
	    		$(".accordion").slideUp();
				$(".open").click(function(){
		    		$(".accordion").slideToggle();
				});
			});
		</script>
		<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo (get_option('apikey')) ? get_option('apikey').'' : '' ?>&#038;callback=initMap" type="text/javascript"></script>
<script>

var myCenter=new google.maps.LatLng(<?php echo (get_option('maps')) ? get_option('maps').'' : '-5.932330,105.992419' ?>);

function initialize() {

	var mapProp = {

  		center:myCenter,

	  zoom:15,

	  mapTypeId:google.maps.MapTypeId.ROADMAP

  };

	var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

	var marker=new google.maps.Marker({

  		position:myCenter,

  		title: 'Click to zoom',
		
		icon:"<?php echo get_template_directory_uri(); ?>/images/maps.png"

	});

	marker.setMap(map);

}

google.maps.event.addDomListener(window, 'load', initialize);

</script>
		
	</head>
	
	<!-- Ndeso, tema wordpress khusus untuk webdesa -->
	
	<body>
		<div class="wrapper">
		    <div class="nav-ndeso">
			    <div class="nav-inn clear">
				    <div class="open">
					</div>
			    	<div class="inn">
		    			<?php wp_nav_menu(array('theme_location' => 'navigation', 'container' => 'div', 'container_class' => 'nav', 'menu_class' => 'dd', 'menu_id' => 'dd', 'fallback_cb' => false)); ?>
		    		</div>
	    			<div class="ndsearch">
	    	    		<?php get_search_form(); ?>
		    		</div>
				</div>
				<div class="mob">
		    			<?php wp_nav_menu(array('theme_location' => 'navigation', 'container' => 'div', 'container_class' => 'mobi', 'menu_class' => 'accordion', 'menu_id' => 'acc', 'fallback_cb' => false)); ?>
		    	</div>
				
			</div>
			<div class="header clear">
				<div class="logo">
					<a href="<?php echo home_url(); ?>"><img src="<?php echo (get_option('logo_url')) ? get_option('logo_url') : get_template_directory_uri().'/images/logo.png' ?>" alt="<?php bloginfo('name'); ?>"/></a>
				</div>
				<div class="headr">
				    <div class="kontak">
					    <div>
						<?php query_posts('post_type=layanan&showposts=4&order=ASC'); ?>
				    	<?php if (have_posts()): ?>
	    	                <?php while (have_posts()): the_post(); ?>
		    				    <div class="serv"><?php echo get_post_meta($post->ID, '_layanan', true); ?> <span><?php echo get_post_meta($post->ID, '_telepon', true); ?></span></div>
							<?php endwhile; ?>
						<?php endif; ?>
					    <?php wp_reset_query(); ?>
						</div>
					</div>
				</div>
			</div>
			


		            <div class="tickercontainer">
		                <div class="mask">
	    	            	<?php query_posts('post_type=sekilas-info&showposts=3'); ?>
				    	        <?php if (have_posts()): ?>
	    	                	<ul id="kampus-ticker" class="newstickers">
	    	                	    <?php while (have_posts()): the_post(); ?>
	                                <li><span><?php if (function_exists('smart_excerpt')) smart_excerpt(get_the_excerpt(), 55); ?></li>
	     	                		<?php endwhile; ?>
                                </ul>
	    		                <?php endif; ?>
					     	<?php wp_reset_query(); ?>
	    		        </div>
	    	        </div>
			

			<?php if (is_front_page()) { ?>
			<?php echo '<div id="ndeslide">'; 
			get_template_part('slidendeso'); 
			echo '</div>'; 
			} ?>
			
			<?php dimox_breadcrumbs(); ?>
			
			<!-- Container -->
			<div id="container" class="clear">
				<!-- Content -->
				<div id="content">
