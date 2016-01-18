<div class="events">

	<?php
	$args = array(
		'posts_per_page' => 3,
		'post_type' => 'event',
		'meta_key'=>'event_date',
		'orderby' => 'meta_value',
		'order' => ASC
	);

	$lastposts = get_posts( $args );
	foreach ( $lastposts as $post ) :
		setup_postdata( $post );
		$eventDate = DateTime::createFromFormat('Ymd', get_field('event_date'));
		$currentDate = new DateTime();
	// this should only show an event if the event_date is either today or in the future
		if ( $eventDate >= $currentDate ) : ?>

	<div class="callout large-12 columns">
		 <h4><?php the_time('F j, Y') ?> / <a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
		 <?php the_content();?>
	</div>
	<?php
	endif;
	endforeach;
	wp_reset_postdata(); ?>

</div>
