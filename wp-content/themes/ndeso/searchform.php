<div class="search_form">
	<form method="get" id="searchform" action="<?php echo home_url(); ?>">
		<fieldset>
            <?php $button = __('Ketik sesuatu..', 'ndeso'); ?>
			<input name="s" type="text" onfocus="if(this.value=='<?php echo $button; ?>') this.value='';" onblur="if(this.value=='') this.value='<?php echo $button; ?>';" value="<?php echo $button; ?>" />
			<button type="submit"></button>
		</fieldset>
	</form>
</div>
