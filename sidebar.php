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
if ($tags) {
$html = '<div class="latest_posts"><h5>Blog Categories</h5>';
}
foreach ( $tags as $tag ) {
$tag_link = get_tag_link( $tag->term_id );

$html .= "<a href='{$tag_link}' title='View all content assigned to {$tag->name}' class='{$tag->slug}'>";
$html .= "{$tag->name}</a> <span>[{$tag->count}]</span>";
}
$html .= '</div>';
echo $html;

} else {
	get_template_part( 'parts/loop', 'posts' );
}
?>

</div>
