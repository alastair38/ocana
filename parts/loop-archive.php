<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">
	<header class="article-header">
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		<?php get_template_part( 'parts/content', 'byline' ); ?>
		<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('thumb'); ?></a>
	</header> <!-- end article header -->

	<section class="entry-content" itemprop="articleBody">
		<?php the_content('<button class="tiny">Read more...</button>'); ?>
	</section> <!-- end article section -->

	<footer class="article-footer">
    	<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>
	</footer> <!-- end article footer -->
	<?php get_template_part( 'parts/content', 'share' ); ?>
</article> <!-- end article -->
