<?php
/*
Template Name: Front Page (Sidebar)
*/
?>

<?php get_header(); ?>

	<div id="content" tabindex="0">

		<div id="inner-content" class="row">

		    <main id="main" class="large-12 medium-12 columns" role="main">

					<section class="large-9 columns" itemprop="article">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<?php get_template_part( 'parts/loop', 'page-home' ); ?>



					</section>



			<?php endwhile; endif; ?>

			<?php
			$text = get_field('callout_text');
			if (get_field('visible')) {?>
				<div class="callout columns small" data-closable>
				<h5><?php the_field('callout_header');?></h5>
				<p><?php echo $text;?></p>
				<button class="close-button" aria-label="Dismiss alert" type="button" data-close>
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		<?php } else {
		}?>


				<aside class="large-3 medium-3 columns" role="complementary">

				<?php get_template_part( 'parts/loop', 'posts' );

				?>
				</aside>

				<aside class="large-3 medium-3 columns" role="complementary">

				<?php get_template_part( 'parts/loop', 'publications' ); ?>
				</aside>

			</main> <!-- end #main -->


		<aside class="large-12 medium-12 columns" role="complementary">
		<?php get_template_part( 'parts/loop', 'main-pages' ); ?>

	</aside>






		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
