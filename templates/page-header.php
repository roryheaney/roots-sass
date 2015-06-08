<?php if ( is_front_page() ) : ?>
<?php else: ?>
<div class="page-header">
  <h1>
    <?php echo roots_title(); ?>
  </h1>
</div>

<div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
<?php endif; ?>