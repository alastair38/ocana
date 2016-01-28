<?php
/*
Template Name: Full Width (No Sidebar)
*/
?>

<?php get_header(); ?>

	<div id="content" tabindex="0">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php get_template_part( 'parts/loop', 'page-home' ); ?>

			<?php endwhile; endif; ?>

		<div id="inner-content" class="row">



		    <main id="main" class="large-12 medium-12 columns" role="main">

				<aside class="large-6 medium-5 columns" role="complementary">

				<?php get_template_part( 'parts/loop', 'posts' ); ?>
				</aside>

				<aside class="large-6 medium-5 columns" role="complementary">

				<?php get_template_part( 'parts/loop', 'publications' ); ?>
				</aside>

			</main> <!-- end #main -->


		<aside class="large-12 medium-12 columns" role="complementary">
		<?php get_template_part( 'parts/loop', 'main-pages' ); ?>
	</aside>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
