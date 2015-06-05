<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    </div>


    <nav class="collapse navbar-collapse" role="navigation">

      <div class="row">
        <div class="col-sm-12">
          <div id="header-contact">
            
              <ul class="contact-menu-top list-unstyled">
                <li id="phone"><span class="icon s"><span class="sr-only">Call us on:</span> </span><span class="text"><a href="tel:<?php echo str_replace(' ', '', get_option('companyphone')); ?>"><?php echo get_option('companyphone'); ?></a></span></li>
                  <li id="fax"><span class="icon s"><span class="sr-only">Fax:</span> </span><span class="text"><a href="tel:<?php echo str_replace(' ', '', get_option('companyfax')); ?>"><?php echo get_option('companyfax'); ?></a></span></li>
              </ul>

              <?php wp_nav_menu(array('menu' => 'Secondary Menu', 'menu_class' => 'secondary-menu list-unstyled')); ?> 

          </div><!-- EO header-contact -->
        </div>
      </div>

      <div class="row">
        <div class="row-nav">
          <div class="nav-inner">
            <?php
              if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
              endif;
            ?>
          </div>

          <div id="header-search">
          
              <form role="search" method="get" id="searchform" class="form-search" action="<?php echo home_url('/'); ?>">
              <div>
                <?php $search_text = get_search_query(); ?>
                <input type="hidden" name="post_type" value="all" />
                <input type="text" value="<?php if(!empty($search_text) && (!isset($_GET['post_type']) && $_GET['post_type'] == "faqs")) echo get_search_query(); ?>" name="s" id="s" class="search-query" placeholder="Search Blog">
                <input type="submit" id="searchsubmit" value="                       Search" class="s ti">
              </div>
              </form>
          
          </div><!-- EO header-search -->
        </div>


      </div>

    


    </nav>



  </div>
</header>
