<?php $home_id = get_queried_object_id();
?>
<div class="large-4 medium-6 columns">
<div id="projects" class="home-links">
<h3><?php the_field('section_name', $home_id);?></h3>
<?php echo '<span aria-hidden="true">4</span>';
the_field('section_description', $home_id);
?>
</div>
</div>

<?php
	$ids = get_field('home_page_links', false, false);

	$query = new WP_Query(array(
		'post_type'      	=> 'page',
		'posts_per_page'	=> 4,
		'post__in'		=> $ids,
		'orderby'        	=> 'menu_order',
	));

	?>
	<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
	<div class="large-4 medium-6 columns end">
	<div class="home-links <?php echo $page->post_name; ?>">
	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	<?php echo the_field('project_description');?></div>
	</div>
<?php endwhile; ?>
<?php endif;?>
	<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
