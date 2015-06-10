<?php
/*
Template Name: Basic
*/
?>

<?php get_header(); ?>
<!--	<div class="border-extend">
	  <div class="nothing-fancy">
	    <p>Lorem ips... just some boring non-content here!</p>
	  </div>
	</div>-->
	<div class="u-gridContainer container-border">

		<div class="u-gridRow row-border">
			<div class="Slider"> 

				<?php

					$args = array(
						'post_type' => 'slides',
						'posts_per_page'=>999
					);
					$slides = new WP_Query( $args );
					$num = count($slides);
					$counter = 0;
					if( $slides->have_posts() ) {
						while( $slides->have_posts() ) {
							$slides->the_post();
							$counter++;
							?>
							<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
								  $image_url = $image[0];
							?>
							<div class="slide" style="">
								<img src="<?php echo $image_url; ?>" />
							</div>
							<?php
						}
					}
				?>
			</div>
		</div>

		<div class="u-gridRow row-border">
			<div class="white-bg u-cf">
				<div class="u-gridCol8 split-section">

				<h3 class="h-no-marg">Referenties</h3>
					
					<p>Als aannemer van bouwprojecten in de particuliere- en zakelijke markt, hebben 
						wij een uitstekende naam opgebouwd op het gebied van kwaliteit en zekerheid.
						U kunt bij ons terecht voor het ontwikkelen van een plan, tot de uitvoering ervan. 
						Van de funderingsbalk, tot aan de nokvorst. Op onze website willen wij u graag 
						verder informeren over ons bedrijf en  onze werkzaamheden.
					</p>
				</div>
				<div class="u-gridCol4 split-section-right padding">
					<h5 class="h-no-marg">Bedrijven:</h5>
					<ul>
						<li>Bedrijf</li>
						<li>Bedrijf</li>
						<li>Bedrijf</li>
						<li>Bedrijf</li>
						<li>Bedrijf</li>
					</ul>
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
