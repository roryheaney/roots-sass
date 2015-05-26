<footer class="content-info" role="contentinfo">
  <div class="container">

  	<div class="main">
	    <?php //dynamic_sidebar('sidebar-footer'); ?>

    
        <div class="footer-images">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/pss-original/main/footer-images.jpg" alt="Footer Images">
        </div>

	    <div class="footer-links">
	        <nav class="clearfix"><?php wp_nav_menu( array('menu' => 'Footer Menu' )); ?></nav>
	        <div class="copy clearfix">&copy; Project Skills Solution <?=date("Y")?></div>
	    </div>
  	</div>


  </div>
</footer>
