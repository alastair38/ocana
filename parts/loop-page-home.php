<article id="post-<?php the_ID(); ?>" class="" role="article" itemscope itemtype="http://schema.org/WebPage">

	<header class="article-header large-5 columns">
		<h1 class="page-title"><?php the_title(); ?></h1>
		<?php the_post_thumbnail('full');
		if ( is_front_page() ) {?>
		<span class="front label"><?php bloginfo('description');?></span>
	<?php } else {}?>
	</header> <!-- end article header -->


    <section class="entry-content large-7 columns" itemprop="articleBody">
	    <?php the_content(); ?>
	    <?php wp_link_pages(); ?>
	</section> <!-- end article section -->

	<footer class="article-footer">

	</footer> <!-- end article footer -->

</article> <!-- end article -->
