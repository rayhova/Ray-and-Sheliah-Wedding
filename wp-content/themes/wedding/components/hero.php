<?php $hero_type = get_field( 'hero_type' ); ?>

<?php if($hero_type == "image"): ?>
	<?php if ( have_rows( 'slider' ) ) : 
	$count = 0; ?>

		<section class="hero">
			<div id="hero-slide" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<?php while ( have_rows( 'slider' ) ) : the_row(); ?>
					<?php $image = get_sub_field( 'image' ); ?>
						<div class="carousel-item <?php if (!$count) {
	                ?> active <?php }?>">
						 	<img class="d-block w-100" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
						 	<div class="carousel-caption d-block">
							    <h2><?php the_sub_field( 'headline' ); ?></h2>
							    <p><?php the_sub_field( 'subheadline' ); ?></p>
							    <?php if ( have_rows( 'cta' ) ) : ?>
									<?php while ( have_rows( 'cta' ) ) : the_row(); ?>
										<a href="<?php the_sub_field( 'page_link' ); ?>" class="cta-button"><?php the_sub_field( 'text' ); ?></a>
										
									<?php endwhile; ?>
								<?php endif; ?>
						 	</div>
						</div>
					<?php 
					$count++;
					endwhile; ?>
				</div><!-- carousel-inner -->
				<a class="carousel-control-prev" href="#hero-slide" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#hero-slide" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div> 
		</section>
		<!-- <script type="text/javascript">
		jQuery(function($){
			$('.carousel').carousel();
			});
		</script> -->
	<?php else : ?>
		<?php // no rows found ?>
	<?php endif; ?>
<?php endif ; ?>

<?php if($hero_type == "pattern"): ?>
	<?php if ( have_rows( 'pattern_hero' ) ) : ?>
		<?php while ( have_rows( 'pattern_hero' ) ) : the_row(); 
			$icon = get_sub_field( 'icon' );?>
			<section class="hero patterned" style="background-color: <?php the_sub_field( 'background_color' ); ?>;">
				<div id="hero-slide" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="hero-icon"><?php get_template_part('inc/images/icon', $icon.'.svg');?></div>	 	
					 	<div class="carousel-caption d-none d-md-block">
						    <h2><?php the_sub_field( 'headline' ); ?></h2>
						    <p><?php the_sub_field( 'subheadline' ); ?></p>
						    <?php if ( have_rows( 'cta' ) ) : ?>
								<?php while ( have_rows( 'cta' ) ) : the_row(); ?>
									<a href="<?php the_sub_field( 'page_link' ); ?>" class="cta-button"><?php the_sub_field( 'text' ); ?></a>
									
								<?php endwhile; ?>
							<?php endif; ?>
					 	</div>
					 </div>
				</div>
						

			</section>
		<?php endwhile; ?>
	<?php endif; ?>

<?php endif; ?>
