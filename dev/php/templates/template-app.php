<?php
/*
Template Name: App page
*/
?>

<?php get_header(); ?>


	<div class="u-gridContainer container-border">

		<div class="u-gridRow row-border">
			<div class="white-bg u-cf">
				<div class="u-gridCol8 split-section">

				<h3 class="h-no-marg">Onze App</h3>
					
					<?php // the_content(); ?>
					Bekijk nu ook de informatie van ons bedrijf vanuit de app! De app is beschikbaar in Google Play voor Android apparaten en als webapp voor iOS van Apple telefoons.

					Voor Apple iPhone gebruikers: scan de QR-code of surf naar de website. 

					<a href="#">Download de app hier</a>



					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/qr_code.png" /> 
				</div>
				<div class="u-gridCol4 split-section-right padding">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/screenshot.png" class="App-iphone" />
				</div>

			</div>

		</div>
		<div class="u-gridRow row-border">
			<div class="scheme1 padding u-cf">
				
					<div class="u-gridCol3 thumb-home">
						<a href="#">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/1.png">
						<h2>Aanbouw</h2>
						</a>
					</div>
				
				<div class="u-gridCol3 thumb-home">
					<a href="">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/2.png">
						<h2>Opbouw</h2>
					</a>
				</div>
				<div class="u-gridCol3 thumb-home">
					<a href="">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/3.png">
						<h2>Dakkapel</h2>
					</a>
				</div>
				<div class="u-gridCol3 thumb-home">
					<a href="">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/4.png">
						<h2>Verbouwingen</h2>
					</a>
				</div>

			</div>
		</div> 
	</div>
<?php get_footer(); ?>


