<?php
	$blog = get_page_by_path( 'blog' ); // get id for the main blog page to exlude from home page grid
	$home_id = get_queried_object_id(); // get id for the home page to exlude from home page grid
	$mypages = get_pages( array( 'exclude' => array($home_id, $blog->ID), 'sort_order' => 'desc', 'parent' => 0 ) );
	$i = 0;
	foreach( $mypages as $page ) {
	$content = $page->post_excerpt;
	$content = apply_filters( 'the_content', $content );
	$i++;
	?>
	<div class="large-4 medium-6 columns">
	<div class="home-links <?php echo $page->post_name; ?>">
	<h3><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a></h3>
	<?php echo '<span aria-hidden="true">' . $i . '</span>'; ?><?php echo 'Some content goes here';?></div>
	</div>
	<?php
	}
?>
