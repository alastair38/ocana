<?php if ($post->post_parent) {
	$parentObj = get_post( $post->post_parent );
	$cat_name = $parentObj->post_name . ' - use this as category slug for related posts on child pages';
	$args = array(
	'posts_per_page' => 3,
	'post_type' => 'post',
	'exclude' => $post->ID,
	'category_name' => $parentObj->post_name,
	'order' => DESC
);

$relatedposts = get_posts( $args );
echo '<h5>Related Posts</h5>';
foreach ( $relatedposts as $post ) :
	setup_postdata( $post );
// 	$eventDate = DateTime::createFromFormat('Ymd', get_field('event_date'));
// 	$currentDate = new DateTime();
// // this should only show an event if the event_date is either today or in the future
// 	if ( $eventDate >= $currentDate ) : ?>

	 <article>
		 <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
		 <p class="byline">
			Published <time
				 datetime="<?php the_time('Y-m-d') ?>"
				 title="<?php the_time('F j, Y') ?>">
				 <?=time_ago(get_the_time( 'U' ))?>
				 </time>
		 </p>
		 <?php
		 $content = get_the_content();
		 echo wp_trim_words($content, 5);?>
	 </article>

<?php

endforeach;
wp_reset_postdata();
} else {
	$cat_name = $post->post_name . ' - use this as category slug for related posts on parent pages';
	echo $cat_name;
	$args = array(
	'posts_per_page' => 3,
	'post_type' => 'post',
	'exclude' => $post->ID,
	'category_name' => $post->post_name,
	'order' => DESC
);

$relatedposts = get_posts( $args );
echo '<h5>Related Posts</h5>';
foreach ( $relatedposts as $post ) :
	setup_postdata( $post );
// 	$eventDate = DateTime::createFromFormat('Ymd', get_field('event_date'));
// 	$currentDate = new DateTime();
// // this should only show an event if the event_date is either today or in the future
// 	if ( $eventDate >= $currentDate ) : ?>

	 <article>
		 <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
		 <p class="byline">
			Published <time
				 datetime="<?php the_time('Y-m-d') ?>"
				 title="<?php the_time('F j, Y') ?>">
				 <?=time_ago(get_the_time( 'U' ))?>
				 </time>
		 </p>
		 <?php
		 $content = get_the_content();
		 echo wp_trim_words($content, 5);?>
	 </article>

<?php

endforeach;
wp_reset_postdata(); } ?>
