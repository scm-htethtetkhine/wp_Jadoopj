<?php get_header(); ?>

<div class="post-list">
    <div class="blog-img">
        <img src="<?php echo  bloginfo('template_directory');?>/image/img_blog.png" alt="">
    </div>
    <div class="inner">
        <div id="tabs">
            <ul class="tab-list">
                <li><a href="#tab-1"><span>All</span></a></li>
                <li><a href="#tab-2"><span>Category01</span></a></li>
                <li><a href="#tab-3"><span>Category02</span></a></li>
                <li><a href="#tab-4"><span>Category03</span></a></li>
            </ul>
            <div id="tab-1">
            <?php query_posts('post_type=blog&paged='.$paged);
            if( have_posts() ): while( have_posts() ): the_post(); ?>
                <div class="custom-list">
                    <div class="list-gp">
                        <figure>
                            <?php the_post_thumbnail('thumb-img'); ?>
                        </figure>
                        <div class="txt-rightgp">
                            <h2><?php the_title(); ?></h2>
                            <div class="txt-gp">
                                <span><?php the_time('Y.m.d'); ?></span>
                                <?php the_category(); ?>
                            </div>
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink( ); ?>"><span class="txt-more">More</span></a>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php pagination(); ?>
                <?php wp_reset_query();endif; ?>
            </div>
            <div id="tab-2">
            <?php query_posts('post_type=blog&category_name=category01&showposts=1&paged='.$paged);
            if( have_posts() ): while( have_posts() ): the_post(); ?>
                <div class="custom-list">
                    <div class="list-gp">
                        <figure>
                            <?php the_post_thumbnail('thumb-img'); ?>
                        </figure>
                        <div class="txt-rightgp">
                            <h2><?php the_title(); ?></h2>
                            <div class="txt-gp">
                                <span><?php the_time('Y.m.d'); ?></span>
                                <?php the_category(); ?>
                            </div>
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink( ); ?>"><span class="txt-more">More</span></a>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_query();endif; ?>
            </div>
            <div id="tab-3">
            <?php query_posts('post_type=blog&category_name=category02&showposts=1&paged='.$paged);
            if( have_posts() ): while( have_posts() ): the_post(); ?>
                <div class="custom-list">
                    <div class="list-gp">
                        <figure>
                            <?php the_post_thumbnail('thumb-img'); ?>
                        </figure>
                        <div class="txt-rightgp">
                            <h2><?php the_title(); ?></h2>
                            <div class="txt-gp">
                                <span><?php the_time('Y.m.d'); ?></span>
                                <?php the_category(); ?>
                            </div>
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink( ); ?>"><span class="txt-more">More</span></a>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_query();endif; ?>
            </div>
            <div id="tab-4">
            <?php query_posts('post_type=blog&category_name=category03&showposts=1&paged='.$paged);
            if( have_posts() ): while( have_posts() ): the_post(); ?>
                <div class="custom-list">
                    <div class="list-gp">
                        <figure>
                            <?php the_post_thumbnail('thumb-img'); ?>
                        </figure>
                        <div class="txt-rightgp">
                            <h2><?php the_title(); ?></h2>
                            <div class="txt-gp">
                                <span><?php the_time('Y.m.d'); ?></span>
                                <?php the_category(); ?>
                            </div>
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink( ); ?>"><span class="txt-more">More</span></a>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_query();endif; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>