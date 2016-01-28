<div class="large-4 medium-6 columns">
<div id="projects" class="home-links">
<h3>Projects</h3>
<?php echo '<span aria-hidden="true">5</span>';
echo 'BeGOOD comprises the following five studies';
?>
</div>
</div>

<?php
	$about = get_page_by_path( 'about' ); // get id for the main blog page to exclude from home page grid
	// $home_id = get_queried_object_id(); // get id for the home page to exclude from home page grid
	$mypages = get_pages( array( 'sort_order' => 'desc', 'parent' => 0 ) );
	$i = 0;
	foreach( $mypages as $page ) {
	$children = get_pages( array( 'child_of' => $page->ID ) );
	$content = $page->post_excerpt;
	$content = apply_filters( 'the_content', $content );
	$i++;
	if($children) {?>
	<div class="large-4 medium-6 columns">
	<div class="home-links <?php echo $page->post_name; ?>">
	<h3><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a></h3>
	<?php echo 'Some content goes here';?></div>
	</div>
	<?php }
	}
?>
