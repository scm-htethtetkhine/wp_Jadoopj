<?php
/* 
 Template Name: Page Thank
*/
get_header(); 
?>

<?php if( have_posts() ):while( have_posts() ): the_post(); ?>
    <div class="thank-page">
        <div class="inner">
            <p><?php the_content(); ?></p>
            <p class="btn-home"><a href="<?php echo site_url(); ?>">Back Home</a></p>
        </div>
    </div>
<?php endwhile; endif;?>
<?php get_footer(); ?>