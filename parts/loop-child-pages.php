<?php
     // if outside the loop


		// This is a parent so we'll loop through the child pages

$args = array(
		'post_type'      => 'page',
		'posts_per_page' => -1,
		'post_parent'    => $post->ID,
		'order'          => 'ASC',
		'orderby'        => 'menu_order'
 );

$parent = new WP_Query( $args );

if ( $parent->have_posts() ) : ?>

		<?php while ( $parent->have_posts() ) : $parent->the_post(); ?>
				<div id="parent-<?php the_ID(); ?>" class="home-links">

						<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>

				</div>

		<?php endwhile; ?>

<?php endif; wp_reset_query();
?>
