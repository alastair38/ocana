<aside class="large-12 medium-12 columns" role="complementary">
	<div class="latest_tweets columns">
		<h5 class="">	<a href="https://twitter.com/<?php echo get_theme_mod( 'tcx_twitter_handle' );?>" class="twitter-follow-button" data-show-count="true">Follow @<?php echo get_theme_mod( 'tcx_twitter_handle' );?></a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</h5>

		<?php echo do_shortcode( '[rotatingtweets screen_name="' . get_theme_mod( 'tcx_twitter_handle' ) . '" tweet_count="4" ]' );?>
	</div>
</aside>
