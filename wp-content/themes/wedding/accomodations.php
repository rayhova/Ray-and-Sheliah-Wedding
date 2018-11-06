<?php
/**
 * Accommodations Template
 *
Template Name:  Accommodations	
 *
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * 
 */

get_header(); ?>




<?php if ( get_field( 'map_or_image_header' ) == 1 ) { ?>
<section class="hero">
	<div id="map" class="hero-map">
	</div>
</section>
<?php } else { ?>
<?php require __DIR__ . '/components/hero.php'; ?>
<?php } ?>
<div class="bar bg-primary">
	<div class="height-center-wrapper bar-text">
		<h1><?php the_title(); ?></h1>
			
	</div>
</div>
<?php if ( have_rows( 'location_quote_quote' ) ) : ?>
	<section class="quotes">
		<?php while ( have_rows( 'location_quote_quote' ) ) : the_row(); ?>
			<?php require __DIR__ . '/components/quote-block.php'; ?>
		<?php endwhile; ?>
	</section>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>
<div class="container">
	<div class="row justify-content-center">
		<?php if ( have_rows( 'accomodations' ) ) : ?>
			<div class="col p-0 accomodations-box">
				<?php while ( have_rows( 'accomodations' ) ) : the_row(); ?>
					<div class="content">
						<h2>Accomodations</h2>
						<hr>
						<h3><?php the_sub_field( 'hotelresort_name' ); ?></h3>
						<div class="address">
							<?php the_sub_field( 'hotelresort_address' ); ?>
						</div>
						<?php $website = get_sub_field( 'website' ); ?>
						<?php if ( $website ) { ?>
						<div class="website">
							<a href="<?php the_sub_field( 'website' ); ?>" target="_blank"><?php the_sub_field( 'hotelresort_name' ); ?> Website</a>
						</div>
						<?php } ?>
						<?php $attachment = get_sub_field( 'attachment' ); ?>
						<?php if ( $attachment ) { ?>
							<div class="file">
								<a href="<?php echo $attachment['url']; ?>" class="btn bg-primary" target="_blank"><?php the_sub_field( 'hotelresort_name' ); ?> Travel Flyer</a>
							</div>
						<?php } ?>
					</div>
					<?php $image = get_sub_field( 'image' ); ?>
					<?php if ( $image ) { ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="accommodation-img" />
					<?php } ?>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
		<?php if ( have_rows( 'ceremony' ) ) : ?>
			<div class="col p-0 ceremony-box">
				<?php while ( have_rows( 'ceremony' ) ) : the_row(); ?>
					<div class="content">
						<h2>Wedding & Reception</h2>
						<hr>
						<h3><?php the_sub_field( 'name' ); ?></h3>
						<div class="address">
							<?php the_sub_field( 'address' ); ?>
						</div>
					</div>
					<?php $image = get_sub_field( 'image' ); ?>
					<?php if ( $image ) { ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="accommodation-img" />
					<?php } ?>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
	</div>
</div>
<?php if ( have_rows( 'events_quote_quote' ) ) : ?>
	<section class="quotes">
		<?php while ( have_rows( 'events_quote_quote' ) ) : the_row(); ?>
			<?php require __DIR__ . '/components/quote-block.php'; ?>
		<?php endwhile; ?>
	</section>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>
<?php if ( have_rows( 'events_quote_quote' ) ) : ?>
	
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>
<?php if ( have_rows( 'other_events' ) ) : ?>
	<div class="container">
		<h2>Wedding Events</h2>
		<hr>
	</div>
	<div class="container">
		<?php while ( have_rows( 'other_events' ) ) : the_row(); ?>

			<div class="other-event-box">
				<h3><?php the_sub_field( 'name' ); ?></h3>
				<div class="date"><?php the_sub_field( 'date_time' ); ?></div>
				<div class="location"><?php the_sub_field( 'location' ); ?></div>
				<p><?php the_sub_field( 'description' ); ?></p>
			</div>
		<?php endwhile; ?>
	</div>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>

<?php if ( have_rows( 'faq_quote_quote' ) ) : ?>
	<section class="quotes">
		<?php while ( have_rows( 'faq_quote_quote' ) ) : the_row(); ?>
			<?php require __DIR__ . '/components/quote-block.php'; ?>
		<?php endwhile; ?>
	</section>
	<div class="container">
		<h2>FAQ's</h2>
		<hr>
	</div>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>
<div class="container">
	<?php require __DIR__ . '/components/accordion-block.php'; ?>
</div>
<?php geocoded_map() ?>
<?php get_footer(); ?>
