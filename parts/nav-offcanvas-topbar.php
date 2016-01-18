<!-- By default, this menu will use off-canvas for small
	 and a topbar for medium-up -->

<div class="top-bar" id="top-bar-menu" >
	<div class="site-text show-for-medium">
		<h2><a href="<?php site_url();?>"><?php bloginfo('name'); ?></a></h2>
	</div>

	<div class="main-menu top-bar-right columns show-for-medium">
		<?php joints_top_nav(); ?>
	</div>
	<div class="site-text top-bar-left float-left show-for-small-only">
		<h2><a href="<?php site_url();?>"><?php bloginfo('name'); ?></a></h2>
	</div>
	<div class="top-bar-right float-right show-for-small-only">
		<ul class="menu">
			<li><a data-toggle="off-canvas">Menu</a></li>
		</ul>
	</div>

</div>
