<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <?php
    do_action('get_header');
    get_template_part('templates/header');
  ?>


  <?php if ( is_front_page() ) : ?>
    
    <?php get_template_part('templates/jumbotron'); ?>

  <?php /* Use full width wrap  */ 
        elseif ( is_tax('training') && is_archive() ) : get_template_part('templates/section-1'); ?>
  <?php elseif ( is_post_type_archive('courses') ) : get_template_part('templates/section-2'); ?>
  <?php elseif ( is_single() && get_post_type() == 'courses' ) : get_template_part('templates/section-3'); ?>
  <?php elseif ( is_page(1564) ) : get_template_part('templates/section-4'); ?>

  <?php else: ?>
  <div class="wrap container" role="document">
    <div class="content row">
      <main class="col-sm-12" role="main">

        <?php /* Use left had column for content - Contact Page  */ 
              if ( is_page(38) ) : get_template_part('blocks/contact'); ?>

        <?php else : ?>

          <?php include roots_template_path(); ?>
        <?php /* Courses by Project Skills Solutions */ 
              if ( is_page(33) ) : get_template_part('loops/course-categories'); endif; ?>

        <?php endif; ?>
      </main><!-- /.main -->
    </div><!-- /.content -->
  </div><!-- /.wrap -->
  <?php endif; ?>

  <?php get_template_part('templates/footer'); ?>

  <?php wp_footer(); ?>

</body>
</html>
