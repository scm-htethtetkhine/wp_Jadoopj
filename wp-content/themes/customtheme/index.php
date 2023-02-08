<?php get_header(); ?>
<div class="main-visual">
    <img src="<?php echo  bloginfo('template_directory');?>/image/main_visual.png" alt="">

    <ul class="category-list">
        <li>
            <span class="cat-title">NEWS</span>
            <?php query_posts('category_name=new02&showposts=1&paged='.$paged);
            if( have_posts() ): while( have_posts() ): the_post(); ?>
                <span class="date"><?php the_time('Y.m.d'); ?></span>
                <span class="text"><a href="<?php the_permalink( ); ?>"><?php the_title(); ?></a></span>
            <?php endwhile; ?>
            <?php wp_reset_query();endif; ?>
         </li>
    </ul>
</div>

<div class="section sec-about">
    <h2>ABOUT<span></span></h2>
    <p>Porem ipsum dolor sit amet, consectetur dipisicing elit, sed do eiusmod tempoi cidi ut labore et <br>
        dolore magna aliqua.Porem ipsum dolor sit amet, consectetur dipisicing elit, sed do eiusmod <br>
        tempoi cidi ut labore et dolore magna aliqua.</p>
    <p class="btn btn-about"><a href="<?php echo get_permalink( get_page_by_path( 'about' ) ) ?>">More About</a></p>
</div>

<div class="section sec-service">
    <div class="inner">
        <h2 class="title">SERVICE<span></span></h2>

        <?php query_posts('category_name=services&showposts=2&paged='.$paged);
        if( have_posts() ): while( have_posts() ): the_post(); ?>
        <div class="posts-gp">
            <figure>
                <?php the_post_thumbnail('thumb-img'); ?>
            </figure>
            <div class="txt-gp">
                <h2 class="c-article-list__heading">
                    <?php the_title(); ?>
                </h2>
                <?php the_content(); ?>
                <p class="btn btn-service"><a href="<?php the_permalink( ); ?>">More About</a></p>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</div>

<div class="section sec-blog">
    <div class="inner">
        <h2 class="title">BLOG<span></span></h2>
        <div class="custom-postgp">
        <?php query_posts('post_type=blog&showposts=3&paged='.$paged);
             while (have_posts()) : the_post(); ?>
            <a href="<?php the_permalink( ); ?>">
                <div class="custom-list">
                    <div class="imggp">
                        <figure>
                            <?php the_post_thumbnail('thumb-img'); ?>
                        </figure>
                        <?php the_category(); ?>
                    </div>
                    <div class="custom-txtgp">
                        <h2><?php the_title(); ?></h2>
                        <span><?php the_time('Y.m.d'); ?></span>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink( ); ?>"><span class="txt-more">More</span></a>
                    </div>
                </div>
            </a>
            <?php endwhile; ?>
        </div>
        <p class="btn btn-blog"><a href="<?php echo get_post_type_archive_link( 'blog' ); ?>">More About</a></p>
    </div>
</div>

<?php wp_reset_query();endif; ?>
</div>
<?php get_footer(); ?>