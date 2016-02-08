<?php $home_id = get_queried_object_id();
?>


<?php
	$ids = get_field('front_pages', false, false);

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
