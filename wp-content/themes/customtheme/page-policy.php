<?php
/* 
 Template Name: Page Policy
*/
get_header(); 
?>

<div class="policy-page">
		<div class="policy-img">
				<img src="<?php echo  bloginfo('template_directory');?>/image/img_policy.png" alt="">
		</div>
		<div class="inner">
				<h2>Consectetur dipisicing</h2>
				<?php the_content(); ?>
				<div class="personal-gp">
						<h2>Personal Data</h2>
						<ul>
								<li>Right of Access - the right to be informed of and request access to your Personal Data</li>
								<li>Right to Rectification- the right to request amendments and updates to your Personal Data</li>
								<li>Right to Erasure - the right to request - the right to request that we amend or update your personaldata where it is inaccurate or incomplete;</li>
								<li>Right to Erasure - the right to request removal of your Personal Data;</li>
								<li>Right to Restrict - the right to request a temporary or permanent processing halt on some or all ofyour Personal Data</li>
								<li>Right to Object -<br>
										<span>The right, at any time, to object to us processing your Personal Data on grounds relating toyour particular situation;</span>
										<span>The right to object to the processing of your Personal Data for direct marketingpurposes;</span>
								</li>
						</ul>
				</div>
		</div>
</div>
<?php get_footer(); ?>