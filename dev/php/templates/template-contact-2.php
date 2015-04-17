<?php
/*
Template Name: Contact-2
*/
?>

<?php get_header(); ?>
<!--	<div class="border-extend">
	  <div class="nothing-fancy">
	    <p>Lorem ips... just some boring non-content here!</p>
	  </div>
	</div>-->
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="u-gridContainer container-border">

		<div class="u-gridRow row-border">
			<div class="adress-map">
				<div id="map_canvas"></div>
			</div>
		</div>
		<div class="u-gridRow row-border"> 
			<div class="scheme1-invert u-cf">
				<div class="u-gridCol6 split-section">
					<h5 class="h-no-marg">Contactgegevens</h5>
				</div>
				<div class="u-gridCol6">
					<h5 class="h-no-marg" style="padding:10px 20px;">Contactformulier</h5>
				</div>

			</div>

		</div>
		<div class="u-gridRow row-border">
			<div class="white-bg u-cf">
				<div class="u-gridCol6 split-section" style="border-right:0px;">
					<div class="adress-info">
						<p>Beusekom</p>
						<p>Ridderbuurt 29</p>
						<p>2402 NG Alphen aan den Rijn</p>
						<p>Email: info@ivanbeusekom.nl</p>
						<p>Tel: 0172420577</p>
					</div>
				</div>
				<div class="u-gridCol6 split-section-right padding">
					<p class="contact-page-p">Heeft u nog vragen? Neem dan hieronder contact met ons op. </p>
						<?php the_content(); ?>
					
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
				</div>

			</div>

		</div>

		<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>
