<div class="my_meta_control">

	 <p>
     	<label for="caption">Caption:</label>
		<?php $mb->the_field('caption'); ?>
		<input type="text" id="caption" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
	 </p> 
     
     <p>
     	<label for="text">Text:</label>
		<?php $mb->the_field('text'); ?>
		<input type="text" id="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
	 </p> 
     
     <p>
     	<label for="link">URL to page (leave blank if no button required):</label>
		<?php $mb->the_field('link'); ?>
		<input type="text" id="link" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
	 </p>
     
</div>
