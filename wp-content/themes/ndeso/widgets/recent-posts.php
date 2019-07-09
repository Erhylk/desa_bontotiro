<?php
class Recentposts_thumbnail extends WP_Widget {
	function __construct() {
		parent::__construct(
			'recentposts_thumbnail',
			__('Berita Terbaru', 'ndeso')
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget($args, $instance) {
		extract($args);

		$title = apply_filters('widget_title', $instance['title']);

		global $post;
		if (get_option('rpthumb_qty')) $rpthumb_qty = get_option('rpthumb_qty');
		else $rpthumb_qty = 5;
		$q_args = array(
			'numberposts' => $rpthumb_qty,
		);
		$rpthumb_posts = get_posts($q_args);

		echo $before_widget;

		if ($title) echo $before_title.$title.$after_title;
		else echo '<div class="widget-body clear">';

		foreach ($rpthumb_posts as $post):
			setup_postdata($post);
		?>

		<a href="<?php the_permalink(); ?>" class="rpthumb clear">
			<?php if (has_post_thumbnail() && !get_option('rpthumb_thumb')) {
				the_post_thumbnail('mini-thumbnail');
				$offset = ' style="padding-left: 65px;"';
			}
			else $offset = '';
			?>
			<span class="rpthumb-title"<?php echo $offset; ?>><?php the_title(); ?></span>
			<span class="rpthumb-date"<?php echo $offset; ?>><?php the_time('M j, Y'); ?></span>
		</a>

		<?php
		endforeach;

		echo $after_widget;
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form($instance) {
		if (isset($instance['title'])) $title = esc_attr($instance['title']);
		else $title = __('Berita Terbaru', 'ndeso');
		?>

		<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Judul:', 'ndeso'); ?> <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></label></p>
		<p><label for="rpthumb_qty"><?php _e('Jumlah pos:', 'ndeso'); ?> </label><input type="text" name="rpthumb_qty" id="rpthumb_qty" size="2" value="<?php echo get_option('rpthumb_qty'); ?>"/></p>
		<p><label for="rpthumb_thumb"><?php _e('Sembunyikan thumbnail:', 'ndeso'); ?> </label><input type="checkbox" name="rpthumb_thumb" id="rpthumb_thumb" <?php echo (get_option('rpthumb_thumb')) ? 'checked="checked"' : ''; ?>/></p>

		<?php
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update($new_instance, $old_instance) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		update_option('rpthumb_qty', $_POST['rpthumb_qty']);
		update_option('rpthumb_thumb', $_POST['rpthumb_thumb']);
		return $instance;
	}
}
