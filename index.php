<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'roots'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

  <?php /* Use block layout - Sub Training Courses  */ 
        if ( is_tax('training') ) : ?>
        
          <?php echo category_description( get_category_by_slug('category-slug')->term_id ); ?> 

          <div class="training-courses row">
            <ul class="list-unstyled">
              <?php while (have_posts()) : the_post(); ?>
              <?php get_template_part('templates/content-blocks', get_post_format()); ?>
              <?php endwhile; ?>
            </ul>
          </div>

        
  <?php else: ?>

    <?php while (have_posts()) : the_post(); ?>
      <?php get_template_part('templates/content', get_post_format()); ?>
    <?php endwhile; ?>

    <?php if ($wp_query->max_num_pages > 1) : ?>
      <nav class="post-nav">
        <ul class="pager">
          <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
          <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
        </ul>
      </nav>
    <?php endif; ?>


  <?php endif; ?>
