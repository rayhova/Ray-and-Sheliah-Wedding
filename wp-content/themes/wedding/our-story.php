<?php
/**
 * Our Story Template
 *
Template Name:  Our Story	
 *
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * 
 */

get_header(); ?>

<?php require __DIR__ . '/components/hero.php'; ?>
<div class="bar bg-primary">
	<div class="height-center-wrapper bar-text">
		<h1><?php the_title(); ?></h1>
			
	</div>
</div>
<div class="container">
	<h2>Our Love</h2>
	<hr>
	<p><?php the_field( 'our_story' ); ?></p>
</div>
<?php if ( have_rows( 'quote_1_quote' ) ) : ?>
	<section class="quotes">
		<?php while ( have_rows( 'quote_1_quote' ) ) : the_row(); ?>
			<?php require __DIR__ . '/components/quote-block.php'; ?>
		<?php endwhile; ?>
	</section>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>
<h2>How We Met</h2>
<hr>
<div class="row">
	<div class="col-md-6 p-0">
		<?php $how_we_met_image = get_field( 'how_we_met_image' ); ?>
		<?php if ( $how_we_met_image ) { ?>
			<img src="<?php echo $how_we_met_image['url']; ?>" alt="<?php echo $how_we_met_image['alt']; ?>" class="img-cover"/>
		<?php } ?>
	</div>
	<div class="col-md-6 p-5">
		<div class="how-met-box height-center-wrapper">
			<div class="her-box">
				<h3><?php bride_name() ?>'s Story</h3>
				<p><?php the_field( 'how_we_met_her' ); ?></p>
			</div>
			<img class="story-icon style-svg" src="<?php echo get_template_directory_uri(); ?>/inc/images/tinder.svg">
			<div class="his-box">
				<h3><?php groom_name() ?>'s Story</h3>
				<p><?php the_field( 'how_we_met_him' ); ?></p>
			</div>
		</div>
	</div>
</div>
<?php if ( have_rows( 'quote_2_quote' ) ) : ?>
	<section class="quotes">
		<?php while ( have_rows( 'quote_2_quote' ) ) : the_row(); ?>
			<?php require __DIR__ . '/components/quote-block.php'; ?>
		<?php endwhile; ?>
	</section>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>
<h2>The Proposal</h2>
<hr>
<div class="row">
	<div class="col-md-6 p-5">
		<div class="how-propose-box height-center-wrapper">
			<div class="her-box">
				<h3><?php bride_name() ?>'s Story</h3>
				<p><?php the_field( 'the_proposal_her' ); ?></p>
			</div>
			<img class="story-icon style-svg" src="<?php echo get_template_directory_uri(); ?>/inc/images/eiffel-tower-with-heart.svg">
			<div class="his-box">
				<h3><?php groom_name() ?>'s Story</h3>
				<p><?php the_field( 'the_proposal_him' ); ?></p>
			</div>
		</div>
	</div>
	<div class="col-md-6 p-0">
		<?php $the_proposal_image = get_field( 'the_proposal_image' ); ?>
		<?php if ( $the_proposal_image ) { ?>
			<img src="<?php echo $the_proposal_image['url']; ?>" alt="<?php echo $the_proposal_image['alt']; ?>" class="img-cover"/>
		<?php } ?>
	</div>
</div>


<?php get_footer(); ?>