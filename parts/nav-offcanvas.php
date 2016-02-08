<div class="top-bar" id="top-bar-menu">

	<div class="top-bar-left float-left">
		<ul class="menu">
			<li class="site-text">
					<h4><img src="<?php echo get_theme_mod( 'tcx_logo_image' )?>"><a href="<?php bloginfo('url');?>"><?php bloginfo('description');?></a></h4>
			</li>
		</ul>
	</div>
	<div class="top-bar-right main-menu show-for-large">
		<?php joints_top_nav(); ?>
	</div>

	<div class="top-bar-right float-right show-for-small-only">
		<ul class="menu">
			<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
			<li class="menu-button"><a data-toggle="off-canvas">MENU</a></li>
		</ul>
	</div>
	<div class="top-bar-right float-right show-for-medium-only">
		<ul class="menu">
			<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
			<li class="menu-button"><a data-toggle="off-canvas">MENU</a></li>
		</ul>
	</div>
</div>
