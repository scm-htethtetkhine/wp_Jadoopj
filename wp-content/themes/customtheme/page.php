<?php get_header(); ?>

<?php

if( have_posts() ): while( have_posts() ): the_post(); ?>
    <div class="inner">
        <p><?php the_content(); ?></p>
        <h3><?php the_title(); ?></h3>
    </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>