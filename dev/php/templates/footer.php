	<div class="Footer u-gridContainer container-border">
		<div class="u-gridRow bottom-border row-border u-cf" style="padding-bottom:20px;">
			<div class="white-bg padding u-cf">
				<div class="u-gridCol3 u-textCenter">
					<b>Timmer- en aannemersbedrijf</b>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png">
				</div>
				<div class="u-gridCol3">
					<b>Adresgegevens</b>
					<ul>
						<li>Ridderbuurt 29</li>
						<li>2402 NG</li>
						<li>Alphen aan den Rijn</li>
					</ul>
				</div>
				<div class="u-gridCol3">
					<b>Contact</b>
					<ul>
						<li><i class="fa fa-phone"></i> tel. 0172420577</li>
						<li><i class="fa fa-fax"></i> fax. 0172422087</li>
						<li><i class="fa fa-envelope"></i> info@lvanbeusekom.nl</li>
					</ul>
				</div>
				<div class="u-gridCol3">
					<b>Sitemap</b>
				</div>

			</div>
		</div> 
		<div class="u-gridContainer">
			<?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
			<div class="Footer-inner u-gridRow">
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
			</div>
			<?php endif; ?>
		</div>
	</div>


	<div class="Socket">
		<div class="u-gridContainer">
			<!-- Copyright info -->
			<p>&copy; <?php bloginfo('name'); ?> <?php echo date("Y"); ?> - Website & SEO door 
					<a href="http://www.lokaalgevonden.nl" target="_blank">LokaalGevonden</a>
			</p>
		</div>
	</div>

  <!-- Load jquery from google CDN if possible, with fallback to cdnjs -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"><\/script>')</script>

  <!-- build:remove:expanded -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/production.min.js"></script>
  <!-- /build -->
  <!-- build:remove:compressed -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/landingpage-select.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-collapse.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-dropdown.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/prepend-svg.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/google-maps.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/tabs.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.start.js"></script>
  <script src="http://localhost:35729/livereload.js"></script>
  
 
  <!-- /build -->

  <!-- Check if javascript for threaded comments should be loaded -->
  <?php include 'includes/comment-check.php'; ?>

	<!-- Wordpress footer -->
	<?php wp_footer(); ?>
	</body>
</html>
