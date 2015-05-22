<div class="my_meta_control">
     <p>
     	<label for="overview">Overview:</label>
        <div class="wp_editor">
        <?php
		$content = html_entity_decode($metabox->get_the_value('overview')); /* Please note the use of html_entity_decode */
        $id = $metabox->get_the_name('overview'); 
        $settings = array();
 
        wp_editor( $content, $id, $settings );
		?>
        </div>
	 	</p>
    <p>
     	<label for="details">Course Details:</label>
      <div class="wp_editor">
      <?php
        $content = html_entity_decode($metabox->get_the_value('details')); /* Please note the use of html_entity_decode */
        $id = $metabox->get_the_name('details'); 
        $settings = array();
    
        wp_editor( $content, $id, $settings );
      ?>
      </div>
	 	</p>
    <p>
     	<label for="content">Course Content:</label>
      <div class="wp_editor">
				<?php
        $content = html_entity_decode($metabox->get_the_value('content')); /* Please note the use of html_entity_decode */
        $id = $metabox->get_the_name('content'); 
        $settings = array();
 
        wp_editor( $content, $id, $settings );
				?>
      </div>
	 </p>
     <p>
     	<label for="content">Extra tab (Open Courses Only):</label>
        <div class="wp_editor">
		<?php
		$content = html_entity_decode($metabox->get_the_value('extra')); /* Please note the use of html_entity_decode */
        $id = $metabox->get_the_name('extra'); 
        $settings = array();
 
        wp_editor( $content, $id, $settings );
		?>
        </div>
	 </p> 
     <p>
     	<label for="link">Extra tab label (Open Courses Only):</label>
		<?php $mb->the_field('extra-label'); ?>
		<input type="text" id="link" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
	 </p>
     <?php /*<p>
     	<label for="downloads">Downloads (to be deleted later):</label>
        <div class="wp_editor">
		<?php
		$content = html_entity_decode($metabox->get_the_value('downloads')); 
        $id = $metabox->get_the_name('downloads'); 
        $settings = array();
 
        wp_editor( $content, $id, $settings );
		?>
        </div>
	 </p>*/ ?>
     
     <p>
     	<label for="content">E-learning Steps</label>
      <div class="wp_editor">
			<?php
				$content = html_entity_decode($metabox->get_the_value('elearning-steps')); /* Please note the use of html_entity_decode */
        $id = $metabox->get_the_name('elearning-steps'); 
        $settings = array();
        wp_editor( $content, $id, $settings );
			?>
      </div>
	 </p> 
   
   <p>
     	<label for="content">Open courses text</label>
      <div class="wp_editor">
			<?php
				$content = html_entity_decode($metabox->get_the_value('open-courses-text')); /* Please note the use of html_entity_decode */
        $id = $metabox->get_the_name('open-courses-text'); 
        $settings = array();
        wp_editor( $content, $id, $settings );
			?>
      </div>
	 </p> 
     
     <p>
        <label for="ihtraining">Locations:</label>
        <div class="wp_editor">
        <?php
        $content = html_entity_decode($metabox->get_the_value('locations')); /* Please note the use of html_entity_decode */
        $id = $metabox->get_the_name('locations'); 
        $settings = array();
 
        wp_editor( $content, $id, $settings );
        ?>
        </div>
     </p>
     
     <p>
     	<label for="details">E-Learning Course Details:</label>
        <div class="wp_editor">
		<?php
		$content = html_entity_decode($metabox->get_the_value('elearning-details')); /* Please note the use of html_entity_decode */
        $id = $metabox->get_the_name('elearning-details'); 
        $settings = array();
 
        wp_editor( $content, $id, $settings );
		?>
        </div>
	 </p>
     <p>
        <label for="modules">Modules:</label>
        <div class="wp_editor">
        <?php
        $content = html_entity_decode($metabox->get_the_value('modules')); /* Please note the use of html_entity_decode */
        $id = $metabox->get_the_name('modules'); 
        $settings = array();
 
        wp_editor( $content, $id, $settings );
        ?>
        </div>
     </p>
     <p>
        <label for="ihtraining">In House Training:</label>
        <div class="wp_editor">
        <?php
        $content = html_entity_decode($metabox->get_the_value('ihtraining')); /* Please note the use of html_entity_decode */
        $id = $metabox->get_the_name('ihtraining'); 
        $settings = array();
 
        wp_editor( $content, $id, $settings );
        ?>
        </div>
     </p>
     <p>
        <label for="benefits">Benefits:</label>
        <div class="wp_editor">
        <?php
        $content = html_entity_decode($metabox->get_the_value('benefits')); /* Please note the use of html_entity_decode */
        $id = $metabox->get_the_name('benefits'); 
        $settings = array();
 
        wp_editor( $content, $id, $settings );
        ?>
        </div>
     </p>
     <p>
        <label for="benefits">Brochure Text:</label>
        <div class="wp_editor">
        <?php
        $content = html_entity_decode($metabox->get_the_value('brochure-text')); /* Please note the use of html_entity_decode */
        $id = $metabox->get_the_name('brochure-text'); 
        $settings = array();
 
        wp_editor( $content, $id, $settings );
        ?>
        </div>
     </p>
	 <p>
     	<label for="qualification">Qualification:</label>
		<?php $mb->the_field('qualification'); ?>
		<input type="text" id="qualification" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
	 </p>
   
   <div style="width:50%; float: left;">
   
			<?php //Contact PSS Control Panel for data 
    $courses = PSSCourses::allCourses(); ?>
      <p>
          <?php $selected = ' selected="selected"'; ?>
          <label for="type">Get dates from course (PSS Control Panel):</label>
          <?php $mb->the_field('courseId'); ?>
          <select name="<?php $metabox->the_name(); ?>">
            <option value=""></option>
            <?php foreach($courses as $course): ?>
              <option value="<?php print $course->getID(); ?>"<?php if ($metabox->get_the_value() == $course->getID()) echo $selected; ?>><?php print $course->getCourseName(); ?></option>
            <?php endforeach; ?>
          </select>
      </p>
      <p>
          <?php $selected = ' selected="selected"'; ?>
          <label for="type">Get dates from course (PSS Control Panel):</label>
          <?php $mb->the_field('courseId2'); ?>
          <select name="<?php $metabox->the_name(); ?>2">
            <option value=""></option>
            <?php foreach($courses as $course): ?>
              <option value="<?php print $course->getID(); ?>"<?php if ($metabox->get_the_value() == $course->getID()) echo $selected; ?>><?php print $course->getCourseName(); ?></option>
            <?php endforeach; ?>
          </select>
      </p>
      <p>
          <?php $selected = ' selected="selected"'; ?>
          <label for="type">Get dates from course (PSS Control Panel):</label>
          <?php $mb->the_field('courseId3'); ?>
          <select name="<?php $metabox->the_name(); ?>3">
            <option value=""></option>
            <?php foreach($courses as $course): ?>
              <option value="<?php print $course->getID(); ?>"<?php if ($metabox->get_the_value() == $course->getID()) echo $selected; ?>><?php print $course->getCourseName(); ?></option>
            <?php endforeach; ?>
          </select>
      </p>
      
      <?php //Contact PSS Control Panel for data 
      $itemCategories = PSSItemCategories::allCategories(); ?>
      
      <p>
          <?php $selected = ' selected="selected"'; ?>
          <label for="type">Select category for E-Learning (Group 1):</label>
          <?php $mb->the_field('elearning1'); ?>
          <select name="<?php $metabox->the_name(); ?>">
            <option value=""></option>
            <?php foreach($itemCategories as $categories): ?>
              <option value="<?php print $categories->getID(); ?>"<?php if ($metabox->get_the_value() == $categories->getID()) echo $selected; ?>><?php print $categories->getCategoryName(); ?></option>
            <?php endforeach; ?>
          </select>
      </p>
      <p>
          <?php $selected = ' selected="selected"'; ?>
          <label for="type">Select category for E-Learning (Group 2):</label>
          <?php $mb->the_field('elearning2'); ?>
          <select name="<?php $metabox->the_name(); ?>">
            <option value=""></option>
            <?php foreach($itemCategories as $categories): ?>
              <option value="<?php print $categories->getID(); ?>"<?php if ($metabox->get_the_value() == $categories->getID()) echo $selected; ?>><?php print $categories->getCategoryName(); ?></option>
            <?php endforeach; ?>
          </select>
      </p>
      
    </div>
    
    <?php $items = PSSItems::allProductsByCat(13); ?>
    
    <div style="width:50%; float: left;">
    
      <p>
          <?php $selected = ' checked="checked"'; ?>
          <label for="type">Online Purchases (ctrl + click for multiple products):</label>
          <?php $metabox->the_field('online_purchases'); ?>
          <?php foreach($items as $item): ?>
          <label><input type="checkbox" name="<?php $metabox->the_name(); ?>[]" value="<?php print $item->getID(); ?>"<?php if (in_array($item->getID(), $metabox->get_the_value())) echo $selected; ?>><?php print $item->getName(); ?></label>
          <?php endforeach; ?>
      </p>
     
    </div>
    
     <?php /*while($mb->have_fields_and_multi('tabs')): ?>
     <?php $mb->the_group_open(); ?>
     <div style="width: 100%; border-top: 1px dotted grey;">
        <?php $mb->the_field('tab-title'); ?>
        <div style="width: 33%; float: left;">	
	        <label>Extra tab name (to be deleted):</label>
            <input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
        </div>
	    <?php $mb->the_field('tab'); ?>
        <div style="width: 57%; float: left;">
        	<div class="wp_editor">	
                <label>Extra tab:</label>
                <?php $content = html_entity_decode($mb->get_the_value()); /* Please note the use of html_entity_decode $id = $mb->get_the_name();  $settings = array();  wp_editor( $content, $id, $settings ); 
            </div>
        </div>
        <div style="width: 10%; float: left; text-align: right;">	
        	<label><a style="position: relative; top: 10px;" href="#" class="dodelete button">Remove Tab</a></label>
        </div>
        </div>
        <div style="clear: both;"></div>
         $mb->the_group_close();
		  endwhile; 
     <p><a href="#" class="docopy-tabs button">Add Tab</a></p> */ ?>

    <h4 style="clear: both;">Brochures</h4>
     
    <a style="float:right; margin:0 10px;" href="#" class="dodelete-docs button">Remove All</a>
     
    <p>Add brochures to the library by entering in a title, 
    URL. Upload new documents 
    using the "Add Media" box.</p>
     
    <?php while($mb->have_fields_and_multi('docs')): ?>
    <?php $mb->the_group_open(); ?>
     
        <?php $mb->the_field('title'); ?>
        <label>Title, URL and filetype:</label>
        <p><input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/></p>
         
        <?php $mb->the_field('link'); ?>
        <p><input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/></p>

        <?php $mb->the_field('filetype'); ?>
        <p> 
        <select name="<?php $mb->the_name(); ?>">
            <option value="">Select...</option>
            <option value="a"<?php $mb->the_select_state('a'); ?>>PDF</option>
            <option value="b"<?php $mb->the_select_state('b'); ?>>DOC</option>
            <option value="c"<?php $mb->the_select_state('c'); ?>>DOCX</option>
        </select>
        </p>

        <?php $mb->the_field('access'); ?>
        <p>
            <a href="#" class="dodelete button">Remove Document</a>
        </p>
     
    <?php $mb->the_group_close(); ?>
    <?php endwhile; ?>
     
    <p style="margin-bottom:15px; padding-top:5px;"><a href="#" class="docopy-docs button">Add Document</a></p>

     <p>
     	<label for="small-image">URL for smaller image:</label>
		<?php $mb->the_field('small-image'); ?>
		<input type="text" id="small-image" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
	 </p> 
   
</div>
