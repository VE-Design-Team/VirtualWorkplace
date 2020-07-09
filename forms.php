<?php
/*
Template Name: Forms template
*/
?>
<?php get_template_part('aged_care_forms/header'); ?>
<div class="wrapper" id="single-wrapper">

	<div class="container" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<div class="col-md-12 content-area" id="primary">

			<main class="site-main" id="main">

				<?php while ( have_posts() ) : the_post(); ?>
				
				<article <?php post_class();?> id="post-<?php the_ID();?>">

	<div class="entry-content p-5">

<?php  get_template_part('loop-templates/acf');?>

	</div><!-- .entry-content -->

</article><!-- #post-## -->
				
	
				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

		</div><!-- #primary -->

		<!-- Do the right sidebar check -->
	

		

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->
<style>
#nav-tab .tab-content
{
	border: none;
}
<?php the_field('field_5b2849d5b9d0c'); ?>
</style>
<?php get_template_part('aged_care_forms/footer'); ?>