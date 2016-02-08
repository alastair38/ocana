<!-- <article id="post-<?php the_ID(); ?>" class="large-12 medium-7 columns" role="article" itemscope itemtype="http://schema.org/WebPage"> -->

	<div class="carousel">

		<?php
		$post_type = get_field('content_type'); // these custom fields control post_type and post_per_page
		$items = get_field('items_to_show'); // set the values in the edit screen for the home page
		$args = array(
			'posts_per_page' => $item,
			'post_type' => $post_type,
			// 'meta_key'=>'event_date',
			// 'orderby' => 'meta_value',
			'order' => DESC
		);

		$slider_posts = get_posts( $args );
		foreach ( $slider_posts as $post ) :
			setup_postdata( $post );
			$thumb_id = get_post_thumbnail_id();
			$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
			$thumb_url = $thumb_url_array[0];
		// 	$eventDate = DateTime::createFromFormat('Ymd', get_field('event_date'));
		// 	$currentDate = new DateTime();
		// // this should only show an event if the event_date is either today or in the future
		// 	if ( $eventDate >= $currentDate ) : ?>
		<div style="background: url(<?php echo $thumb_url;?>) no-repeat; background-size: cover;">

			 <article>
				 <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
				 <span class="byline">
				 	Published <time
				     datetime="<?php the_time('Y-m-d') ?>"
				     title="<?php the_time('F j, Y') ?>">
				     <?=time_ago(get_the_time( 'U' ))?>
				     </time>
				 </span><br />
				 <?php
				 $content = get_the_content();
				 echo wp_trim_words($content, 10);?>
			 </article>
		</div>

		<?php

		endforeach;
		wp_reset_postdata(); ?>

</div>
