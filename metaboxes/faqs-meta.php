<div class="my_meta_control">

     <p>
     	<label for="url">FAQ Information Heading:</label>
		<?php $mb->the_field('faq-info-heading'); ?>
		<input type="text" id="faq-info-heading" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
	 </p>

     <p>
     	<label for="url">FAQ Information No Results Heading:</label>
		<?php $mb->the_field('faq-info-no-heading'); ?>
		<input type="text" id="faq-info-no-heading" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
	 </p>


     <p>
     	<label for="details">FAQ Information Details:</label>
        <div class="wp_editor">
		<?php
		$content = html_entity_decode($metabox->get_the_value('faq-info-details')); /* Please note the use of html_entity_decode */
        $id = $metabox->get_the_name('faq-info-details'); 
        $settings = array();
 
        wp_editor( $content, $id, $settings );
		?>
        </div>
	 </p>

     <p>
     	<label for="url">FAQ Button 1:</label>
		<?php $mb->the_field('faq-button-1'); ?>
		<input type="text" id="faq-button-1" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
	 </p>

     <p>
     	<label for="url">FAQ Button 1 Hyperlink:</label>
		<?php $mb->the_field('faq-button-1-hyperlink'); ?>
		<input type="text" id="faq-button-1-hyperlink" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
	 </p>

     <p>
     	<label for="url">FAQ Button 2:</label>
		<?php $mb->the_field('faq-button-2'); ?>
		<input type="text" id="faq-button-2" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
	 </p>

     <p>
     	<label for="url">FAQ Button 2 Hyperlink:</label>
		<?php $mb->the_field('faq-button-2-hyperlink'); ?>
		<input type="text" id="faq-button-2-hyperlink" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
	 </p>

     <p>
     	<label for="url">FAQ Button 3:</label>
		<?php $mb->the_field('faq-button-3'); ?>
		<input type="text" id="faq-button-3" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
	 </p>

     <p>
     	<label for="url">FAQ Button 3 Hyperlink:</label>
		<?php $mb->the_field('faq-button-3-hyperlink'); ?>
		<input type="text" id="faq-button-3-hyperlink" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
	 </p>

</div>
