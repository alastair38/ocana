<?php
	$parentObj = get_post( $post->post_parent );
 ?>

<div id="parent" class="home-links">

		 <h3><a href="<?php the_permalink($parentObj->ID) ?>"><?php echo get_the_title($parentObj->ID); ?></a></h3>
		 <?php
		 $content = get_the_content();
		 echo wp_trim_words($content, 5);?>
	 </div>

<?php

$args = array(
'child_of'     => $parentObj->ID,
'post_type' => 'page',
'exclude' => $post->ID,
'order' => DESC
);

	$mypages = get_pages( array( 'child_of' => $parentObj->ID, 'exclude' => $post->ID ) );

	foreach( $mypages as $page ) {
		$content = $page->post_content;
		if ( ! $content ) // Check for empty page
			continue;

		$content = apply_filters( 'the_content', $content );
	?>
	<div id="parent-<?php the_ID(); ?>" class="home-links">
		<h3><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a></h3>
		<div class="entry"><?php echo wp_trim_words($content, 5); ?></div>
	</div>
	<?php
	}
?>
