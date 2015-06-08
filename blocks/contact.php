<div class="row">
	<div class="col-sm-6">
	  	<?php include roots_template_path(); ?>
	    <ul id="contact-page" class="list-unstyled">
	    	<li id="phone"><span class="icon s"></span><span class="text"><a href="tel:<?php echo get_option('companyphone'); ?>"><?php echo get_option('companyphone'); ?></a></span></li>
	    	<li id="fax"><span class="icon s"></span><span class="text"><?php echo get_option('companyfax'); ?></span></li>
	    	<li id="address"><span class="icon s"></span><span class="text"><?php echo get_option('companyaddress'); ?></span></li>
	    </ul>
	</div>
	<div class="col-sm-6">
	  <a href="http://goo.gl/maps/4HwK9" target="_blank" title="View larger map" class="gmap"><img src="<?php the_field('map_image'); ?>" alt="Map"></a>
	</div>
</div>

<div class="row">
	<div class="col-sm-12">
		<h2 class="h1">Send us a message</h2>
		<div id="contact-form-wrap">
			<div class="row">
				<?php echo wpautop(do_shortcode('[contact-form-7 id="970" title="Contact"]')); ?>
			</div>
		</div><!-- EO contact-form-wrap -->
	</div>
</div>


<script type="text/javascript" charset="utf-8">
  jQuery(document).ready(function($) {
  $("#contact-form-wrap input[name=hours]").val(<?php echo get_option('hours'); ?>);
});
</script>