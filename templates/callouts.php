<section class="main main-landing">


        <div class="row">

            <div class="col-sm-12">         
                <h2><?php echo get_option('popularheadline'); ?></h2>
                <div class="hidden-xs pad-h">
                    <p class="sub"><?php echo get_option('populartext'); ?></p>
                </div>
            </div>


            <?php $first = 1; ?>
            <?php $args = array( 'posts_per_page' => 4, 'post_type' => 'popular' );
            $mypost = get_posts( $args );
            foreach ( $mypost as $post ) : setup_postdata( $post ); ?>

            <?php global $popular_metabox; ?>
            <?php $popular_metabox->the_meta(); ?>

                <div class="col-sm-3">
       
                    <?php if ( has_post_thumbnail() ): ?>
                        <a href="<?=$popular_metabox->get_the_value('url')?>" title="Read <?php the_title(); ?>"><?php the_post_thumbnail('home-small'); ?></a>
                    <?php endif; ?>
                    <h3><a href="<?=$popular_metabox->get_the_value('url')?>" title="Read <?php the_title(); ?>"><?php the_title(); ?></a></h3>
                    <?php the_excerpt(); ?>
                    <a class="cta" href="<?=$popular_metabox->get_the_value('url')?>">Read more &raquo;</a>

                </div>

                <?php $first++; ?>

            <?php endforeach; ?>
            <?php wp_reset_postdata();?> 

        </div>

        <div class="row">

            <?php $recents = recentlyViewed(); ?>
             <?php if($recents != false): ?>
                <div class="col-xs-6 col-first recently-viewed">
                    <h2>Recently Viewed</h2>
                    <?php print $recents; ?>
                </div>
            <?php else: ?>
                <div class="col-xs-6 callout">        
                    <?php $page = get_post(1300); //print_r($page); ?>
                    <h2><a href="/<?=$page->post_name?>/" title="Read <?=$page->post_title?>"><?=$page->post_title?></a></h2>
                    <a href="/<?=$page->post_name?>/" title="Read <?=$page->post_title?>"><?php echo get_the_post_thumbnail($page->ID, 'home');  ?></a>
                    <p><?=$page->post_excerpt?>
                    <a class="read-more" href="/<?=$page->post_name?>/">Read More &raquo;</a></p>
                    <?php wp_reset_postdata(); ?>
                </div>
            <?php endif; ?>

            <div class="col-xs-6 callout">
                <?php $args = array( 'posts_per_page' => 1 );
                $mypost = get_posts( $args );
                foreach ( $mypost as $post ) : setup_postdata( $post ); ?>
                    <h2><a href="<?php the_permalink(); ?>" title="Read <?php the_title(); ?>"><?php the_title(); ?></a></h2>
                    <?php if ( has_post_thumbnail() ): ?>
                        <a href="<?php the_permalink(); ?>" title="Read <?php the_title(); ?>"><?php the_post_thumbnail('home'); ?></a>
                    <?php endif; ?>
                    <?php the_excerpt(); ?>
                <?php endforeach; ?>
                <?php wp_reset_postdata();?>
            </div>

        </div>
        

</section>
