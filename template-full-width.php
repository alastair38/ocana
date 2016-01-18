<?php
/*
Template Name: Full Width (No Sidebar)
*/
?>

<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="row">

		    <main id="main" class="large-12 medium-12 columns" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'parts/loop', 'page-home' ); ?>

				<?php endwhile; endif; ?>

				<?php get_template_part( 'parts/loop', 'events' ); ?>

			</main> <!-- end #main -->

			<?php get_template_part( 'parts/loop', 'main-pages' ); ?>


		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
