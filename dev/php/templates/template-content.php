<?php
/*
Template Name: Content
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
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="u-gridRow row-border"> 
			<div class="scheme1-invert u-cf">
				<div class="u-gridCol3 split-section">
					<h5 class="h-no-marg"><?php the_title(); ?></h5>
				</div>
				<div class="u-gridCol9">
					<h5 class="h-no-marg" style="padding:10px 20px;">Kwaliteit & zekerheid</h5>
				</div>

			</div>

		</div>
		
		<div class="u-gridRow row-border">
			<div class="white-bg u-cf">
				<div class="u-gridCol3 split-section" style="border-right:0px;">
					<ul class="tabs">
					  <li class="active" rel="tab1">Project 1</li>
					  <li rel="tab2">Project 2</li>
					  <li rel="tab3">Project 3</li> 
					  <li rel="tab4">Project 4</li>
					  <li rel="tab5">Project 5</li> 
					</ul>
				</div>
					<div class="u-gridCol9 split-section-right"> 
						
						<div class="tab_container">
						  <h3 class="d_active tab_drawer_heading" rel="tab1">Project 1</h3>
						  <div id="tab1" class="tab_content">
						  	<h3>Project 1</h3>
						  	    <?php the_content(); ?>
						  </div>
						  <!-- #tab1 -->
						  <h3 class="tab_drawer_heading" rel="tab2">Project 2</h3>
						  <div id="tab2" class="tab_content">
						  <h3>Project 2</h3>
						    <?php the_content(); ?>
						  </div>
						  <!-- #tab2 -->
						  <h3 class="tab_drawer_heading" rel="tab3">Project 3</h3>
						  <div id="tab3" class="tab_content">
						  <h3>Project 3</h3>
						   <?php the_content(); ?>
						  </div>
						  <!-- #tab3 -->
						  <h3 class="tab_drawer_heading" rel="tab4">Project 3</h3>
						  <div id="tab4" class="tab_content">
						  <h3>Project 3</h3>
						    <?php the_content(); ?>
						  </div>
						  <h3 class="tab_drawer_heading" rel="tab5">Project 3</h3>
						  <div id="tab5" class="tab_content">
						  <h3>Project 3</h3>
						    <?php the_content(); ?>			
						  </div>
						  <!-- #tab4 --> 
						</div>
						<!-- .tab_container -->
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
		<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>
