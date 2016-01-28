<p class="byline">
	Published <time
    datetime="<?php the_time('Y-m-d') ?>"
    title="<?php the_time('F j, Y') ?>">
    <?=time_ago(get_the_time( 'U' ))?>
	</time> by <?php the_author_posts_link(); ?>
</p>
