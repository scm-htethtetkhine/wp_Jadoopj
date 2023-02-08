<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()):the_post(); ?>
    <div class="single-page">
        <div class="inner"> 
            <h2><?php the_title(); ?></h2>
            <div><?php get_template_part( 'blocks/block-h2-heading' ); ?></div>
            <div class="txt-gp">
            <span><?php the_time('Y.m.d'); ?></span>
            <a class="new-link" href="<?php the_permalink( ); ?>"><?php
            $category = get_the_category();
            echo $category[0]->cat_name;
            ?></a>
            </div>
            <div><?php the_post_thumbnail('thumb-img'); ?></div>
            <div><?php the_content(); ?></div>
        </div>
    </div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>