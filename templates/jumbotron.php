<section class="fill fill-image fill-image-landing">
	<div class="container">
		<div class="row">
			<div class="marvin"></div>
			<div class="col-sm-8 col-sm-offset-4 header-landing">
				<h1><?php echo get_option('landing-title'); ?></h1>
			</div>
			<div class="col-sm-8 col-sm-offset-4 ">
				<div class="header-landing">

				    <p><?php echo get_option('landing-paragraph'); ?></p>
				    <a href="" class="header-landing-anchor"><?php echo get_option('landing-anchor'); ?> &raquo;</a>
				</div>
			</div>
		</div>

	</div>
</section><!-- / .fill -->

<section class="fill fill-overlap">
	<div class="container">
		<?php get_template_part('templates/form-course-search'); ?>	
		<?php get_template_part('templates/callouts'); ?>
		<?php get_template_part('templates/coursesnearby'); ?>
	</div>
</section><!-- / .fill -->