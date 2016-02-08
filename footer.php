					<footer class="footer" role="contentinfo">
						<div id="inner-footer" class="row">
							<div class="large-12 medium-12 columns">
								<nav role="navigation">
		    						<?php joints_footer_links(); ?>
		    					</nav>
		    				</div>
							<div class="large-12 medium-12 columns">

							<!-- <?php 	if ( is_front_page() ) {
								get_template_part( 'parts/content', 'twitter' );
							}?> to show your Twitter feed on the home page, install the Rotating Tweets plugin and uncomment this block-->

								<p class="source-org copyright">&copy; <?php echo date('Y');?> <?php echo bloginfo('name') . '. <span><a href="mailto:' . get_theme_mod( 'tcx_email_contact' ) . '" target="_blank"><i class="fa fa-envelope"></i>Email </a></span><span><a href="https://twitter.com/' . get_theme_mod( 'tcx_twitter_handle' ) . '" target="_blank"><i class="fa fa-twitter"></i>Twitter </a></span>'; ?>
								</p>

							</div>
						</div> <!-- end #inner-footer -->
					</footer> <!-- end .footer -->
				</div>  <!-- end .main-content -->
			</div> <!-- end .off-canvas-wrapper-inner -->
		</div> <!-- end .off-canvas-wrapper -->
		<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->
