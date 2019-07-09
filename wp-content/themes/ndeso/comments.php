<?php if (comments_open()): ?>

    <!-- jika komentar dibuka -->

    	<?php if (post_password_required()): ?>
        	<p class="nopassword"><?php _e('Post ini dilindungi kata sandi. Masukkan kata sandi untuk melihat.', 'ndeso'); ?></p>
        	<?php return; ?>
		<?php endif; ?>
		
    <!-- Penampil komentar post -->
	<div id="comments">
    	<?php if (have_comments()): ?>
    		<h3><?php printf(_n('1 komentar', '%1$s komentar', get_comments_number()), number_format_i18n( get_comments_number() ), '' ); ?></h3>
    		<div class="comment_list">

     			<?php wp_list_comments(array('callback' => 'commentslist')); ?>

    		</div>
    	<?php endif; ?>
 
        <!-- jika komentar dibuka, form muncul -->
    	<?php if ('open' == $post->comment_status): ?>

		<?php comment_form(array(
			'must_log_in' => '<p class="comment_message">'.sprintf('Silahkan <a href="%s">masuk</a> untuk bisa menulis komentar.',
					get_option('siteurl').'/wp-login.php?redirect_to='.urlencode(get_permalink())).'</p>',
			'logged_in_as' => '<p class="comment_message">'.sprintf('Masuk sebagai <a href="%s">%s</a>. 
	        		<a href="%s" title="Keluar dari akun ini">Keluar &raquo;</a>',
					get_option('siteurl').'/wp-admin/profile.php',
					$user_identity,
					wp_logout_url(get_permalink())).'</p>',
			'comment_notes_before' => '',
			'comment_notes_after' => '',
			'title_reply' => __('TINGGALKAN KOMENTAR', 'ndeso'),
			'label_submit' => __('KIRIM', 'ndeso'),
			'comment_field' => '<div class="commform-textarea">
			                        <div>
									     <textarea  placeholder="tulis komentar..." name="comment" id="comment" cols="50" rows="7" tabindex="1"></textarea>
									</div>
								</div>',
			'fields' => apply_filters('comment_form_default_fields', 
			            array(
				    	'author' => '<div class="commform-author">
										 <div>
									    	 <input placeholder="Nama (wajib diisi)" type="text" name="author" id="author" tabindex="2" />
										 </div>
									 </div>',
		             	'email' => '<div class="commform-email">
										 <div>
									    	 <input placeholder="Email (wajib diisi)" type="text" name="email" id="email" tabindex="3" />
										 </div>
									</div>',
	            		'url' => '<div class="commform-url">
										 <div>
									    	 <input placeholder="Website" type="text" name="url" id="url" tabindex="4" />
										 </div>
								  </div>'
					))
	    	)); ?>

    	<?php endif; ?>
		<!-- jika komentar dibuka, form muncul -->
		
    </div>
	<!-- Penampil komentar post -->
	
<?php endif; ?>
