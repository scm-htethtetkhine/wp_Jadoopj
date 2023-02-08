<?php
/* 
 Template Name: Page About
*/
get_header(); 
?>
<div class="about-page">
    <div class="inner">
        <h2>About Us</h2>
        <h3>Porem ipsum dolor sit amet, consectetur dipisicing<br> elit</h3>
        <p><?php the_content(); ?></p>
        <div class="about-img">
            <?php the_post_thumbnail(); ?>
            <div class="quality-gp">
                <h2>Quality Policy</h2>
                <ul>
                    <li>1. Porem ipsum dolor sit amet, consectetur dipisicing elit, </li>
                    <li>2. Sed do eiusmod tempoi cidi ut labore et dolore magna aliqua.</li>
                    <li>3. Porem ipsum dolor sit amet, consectetur dipisicing elit.</li>
                    <li>4. Sed do eiusmod tempoi cidi ut labore et dolore magna aliqua.</li>
                </ul>
                <p class="txt-more"><a href="<?php echo get_permalink( get_page_by_path( 'policy' ) ) ?>">More</a></p>
            </div> 
        </div>
    </div>     
</div>

<?php get_footer(); ?>