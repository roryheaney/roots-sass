<li class="col-sm-6 col-md-4">
	<?php if ( is_tax('training' ) ): ?>
	<a class="category-thumb" href="<?php the_permalink(); ?>/#elearning-courses" title="<?php the_title(); ?>">
	<?php else: ?>
	<a class="category-thumb" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
	<?php endif; ?>
		<div class="inner">
			<div class="thumb">
				<div class="overlay"></div>
				<span><?php the_title(); ?></span>
				<img src="<?php the_post_thumbnail('course'); ?>" alt="<?php the_title(); ?>">
			</div>
		</div>
	</a>
</li>