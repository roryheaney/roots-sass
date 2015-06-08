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


</section>
