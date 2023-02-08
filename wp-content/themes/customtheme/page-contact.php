<?php
/* 
 Template Name: Page Contact
*/
get_header(); 
?>

<?php if( have_posts() ):while( have_posts() ): the_post(); ?>
    <div class="contact-page">
        <div class="inner">
            <p><?php the_content(); ?></p>
        </div>
    </div>
<?php endwhile; endif;?>
<?php get_footer(); ?>