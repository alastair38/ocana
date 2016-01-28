<?php
/*
Template Name: Resources
*/
?>

<?php get_header(); ?>

	<div id="content" tabindex="0">

		<div id="inner-content" class="row">


		  <main id="main" class="large-12 columns" role="main">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<h1 class="page-title"><?php the_title(); ?></h1>

				<?php get_template_part( 'parts/loop', 'resource-videos' ); ?>

				<aside class="columns" role="complementary">

					<?php get_template_part( 'parts/loop', 'resource-publications' ); ?>

				</aside>

				<aside class="columns" role="complementary">

					<?php get_template_part( 'parts/loop', 'resource-links' ); ?>

				</aside>



				<?php endwhile; endif; ?>

			</main> <!-- end #main -->


		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
