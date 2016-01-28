<div class="latest_links">

	<?php
	$args = array(
		'posts_per_page' => 15,
		'post_type' => 'resource',
		'tax_query' => array(
				array(
					'taxonomy' => 'resource_cat',
					'field' => 'slug',
					'terms' => 'link'
				)
	),
		'order' => DESC
	);

	$lastlinks = get_posts( $args );
	echo '<h5 class="row">Latest Links</h5>';
	foreach ( $lastlinks as $post ) :
		setup_postdata( $post );
	// 	$eventDate = DateTime::createFromFormat('Ymd', get_field('event_date'));
	// 	$currentDate = new DateTime();
	// // this should only show an event if the event_date is either today or in the future
	// 	if ( $eventDate >= $currentDate ) : ?>

	<article class="large-3 medium-4 small-6 columns">
		 <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
		 <p class="byline">
		 	Published <time
		     datetime="<?php the_time('Y-m-d') ?>"
		     title="<?php the_time('F j, Y') ?>">
		     <?=time_ago(get_the_time( 'U' ))?>
		     </time>
		 </p>
		 <?php the_excerpt();?>
	</article>
	<?php

	endforeach;
	wp_reset_postdata(); ?>

</div>
