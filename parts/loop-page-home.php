<!-- <article id="post-<?php the_ID(); ?>" class="large-12 medium-7 columns" role="article" itemscope itemtype="http://schema.org/WebPage"> -->

	<div class="carousel">
	<div>
		<header class="article-header large-12 columns">
			<?php $aboutObj = get_page_by_path( 'about' );?>
			<h1 class="page-title"><a href="<?php echo $aboutObj->guid; ?>"><?php the_title(); ?></a></h1>

			<?php the_post_thumbnail('full');
			if ( is_front_page() ) {?>
			<span class="front label"><?php bloginfo('description');?></span>
		<?php } else {}?>
		</header> <!-- end article header -->

	</div>

	<div> <img src="https://source.unsplash.com/category/people/1600x900">

		<article>
<h3>Hello World</h3>
	Donec sollicitudin molestie malesuada. Praesent…
	</article>
	</div>
	<div> <img src="https://source.unsplash.com/category/nature/1600x900">
		<article>
	<h3>Second Blog Post</h3>
	Donec sollicitudin molestie malesuada. Praesent…
	</article>
</div>
	<div> <img src="https://source.unsplash.com/category/technology/1600x900">
		<article>
<h3>Another Post</h3>
	Donec sollicitudin molestie malesuada. Praesent…
	</article>
	</div>
</div>
<!--
	<header class="article-header large-12 columns">
		<?php $aboutObj = get_page_by_path( 'about' );?>
		<h1 class="page-title"><a href="<?php echo $aboutObj->guid; ?>"><?php the_title(); ?></a></h1>

		<?php the_post_thumbnail('full');
		if ( is_front_page() ) {?>
		<span class="front label"><?php bloginfo('description');?></span>
	<?php } else {}?>
	</header> <!-- end article header -->


    <section class="entry-content large-12 row" itemprop="articleBody">
	    <?php the_content(); ?>
	    <?php wp_link_pages(); ?>
	</section> <!-- end article section -->

	<footer class="article-footer">

	</footer> <!-- end article footer -->

<!-- </article> <!-- end article -->
