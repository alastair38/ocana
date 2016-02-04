<div class="top-bar" id="top-bar-menu">

	<div class="top-bar-left float-left">
		<ul class="menu">
			<li class="site-text show-for-medium">
				<?php
					if ( is_front_page() ) {?>
				<h4 style="background:url(<?php echo get_theme_mod( 'tcx_logo_image' )?>) no-repeat; background-size: 250px";><a href="<?php bloginfo('url');?>"><?php bloginfo('description');?></a></h4>
				<?php } else {?>
					<h4 style="background:url(<?php echo get_theme_mod( 'tcx_logo_image' )?>) no-repeat; background-size: 70px";><a href="<?php bloginfo('url');?>"><?php bloginfo('description');?></a></h4>

			<?php	}?>


			</li>
			<li class="site-text show-for-small-only">
			<h4 style="background:url(<?php echo get_theme_mod( 'tcx_logo_image' )?>) no-repeat; background-size: 30px";><a href="<?php bloginfo('url');?>"><?php bloginfo('description');?></a></h4>
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
