<div id="sidebar1" class="sidebar large-4 medium-4 columns" role="complementary">

	<?php
	global $post;
	$children = get_pages( array( 'child_of' => $post->ID ) );
	if ( is_page() && $post->post_parent ) {

		 get_template_part( 'parts/loop', 'siblings' );

	} else if ( is_page()  && count( $children ) > 0 ) {
	get_template_part( 'parts/loop', 'child-pages' );

} else if ( is_home()) {

	$tags = get_tags();
$html = '<div class="latest_posts"><h5>Blog Categories</h5>';
foreach ( $tags as $tag ) {
$tag_link = get_tag_link( $tag->term_id );

$html .= "<a href='{$tag_link}' title='View all content assigned to {$tag->name}' class='{$tag->slug}'>";
$html .= "{$tag->name}</a> <span>[{$tag->count}]</span>";
}
$html .= '</div>';
echo $html;

} else if (is_page('resources')){

	echo '<aside class="columns" role="complementary">';

		get_template_part( 'parts/loop', 'resource-publications' );

		echo '</aside>';
} else if (is_page('about')) {
	$mypages = get_pages( array( 'sort_order' => 'desc', 'parent' => 0 ) );
	$i = 0;
	foreach( $mypages as $page ) {
	$children = get_pages( array( 'child_of' => $page->ID ) );
	$content = $page->post_excerpt;
	$content = apply_filters( 'the_content', $content );
	$i++;
	if($children) {?>
	<div class="row">
	<div class="about-links <?php echo $page->post_name; ?>">
	<h3><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a></h3>
	<?php echo 'Some content goes here';?></div>
	</div>
	<?php }
	}
} else {
	get_template_part( 'parts/loop', 'posts' );
}
?>

</div>
