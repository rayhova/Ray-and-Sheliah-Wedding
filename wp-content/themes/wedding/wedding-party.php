<?php
/**
 * Wedding Party Template
 *
Template Name:  Wedding Party	
 *
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * 
 */

get_header(); 

$other_roles = get_field('other_roles');?>
<?php require __DIR__ . '/components/hero.php'; ?>
<div class="bar bg-primary">
	<div class="height-center-wrapper bar-text">
		<h1><?php the_title(); ?></h1>
			
	</div>
</div>

<?php if ( have_rows( 'bridesmaids_quote_quote' ) ) : ?>
	<section class="quotes">
		<?php while ( have_rows( 'bridesmaids_quote_quote' ) ) : the_row(); ?>
			<?php require __DIR__ . '/components/quote-block.php'; ?>
		<?php endwhile; ?>
	</section>
	<div class="container">
		<h2>Bridesmaids</h2>
		<hr>
	</div>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>

<?php if ( have_rows( 'maid_of_honor' ) ) : ?>
<div class="maid-honor">
	<div class="container">
		<div class="row justify-content-center">
			<?php while ( have_rows( 'maid_of_honor' ) ) : the_row(); ?>
			<div class="col-md-6">
				<div class="party-box">
					<div class="party-img">
						<?php $image = get_sub_field( 'image' ); ?>
						<?php if ( $image ):  ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						
						<?php else: ?>
							
						<?php endif; ?>
					</div>
					<div class="title-box">
						<h3><?php the_sub_field( 'name' ); ?></h3>
						<h4><?php if ( get_sub_field( 'matron_of_honor' ) == 1 ) { ?>
							 Matron of Honor 
							<?php } else { ?>
							 Maid of Honor 
							<?php } ?>
						</h4>
					</div>
				</div>

			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>

<?php if ( have_rows( 'bridesmaids' ) ) : ?>
<div class="bridesmaids">
	<div class="container">
		<div class="row justify-content-center">
			<?php while ( have_rows( 'bridesmaids' ) ) : the_row(); ?>
			<div class="col-md-6">
				<div class="party-box">
					<div class="party-img">
						<?php $image = get_sub_field( 'image' ); ?>
						<?php if ( $image ):  ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						
						<?php else: ?>
							
						<?php endif; ?>
					</div>
					<div class="title-box">
						<h3><?php the_sub_field( 'name' ); ?></h3>
						<h4>Bridesmaid</h4>
					</div>
				</div>

			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>

<?php if ( have_rows( 'groomsmen_quote_quote' ) ) : ?>
	<section class="quotes">
		<?php while ( have_rows( 'groomsmen_quote_quote' ) ) : the_row(); ?>
			<?php require __DIR__ . '/components/quote-block.php'; ?>
		<?php endwhile; ?>
	</section>
	<div class="container">
		<h2>Groomsmen</h2>
		<hr>
	
	</div>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>

<?php if ( have_rows( 'best_man' ) ) : ?>
<div class="best-man">
	<div class="container">
		<div class="row justify-content-center">
			<?php while ( have_rows( 'best_man' ) ) : the_row(); ?>
			<div class="col-md-6">
				<div class="party-box">
					<div class="party-img">
						<?php $image = get_sub_field( 'image' ); ?>
						<?php if ( $image ):  ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						
						<?php else: ?>
							
						<?php endif; ?>
					</div>
					<div class="title-box">
						<h3><?php the_sub_field( 'name' ); ?></h3>
						<h4>Best Man</h4>
					</div>
				</div>

			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>

<?php if ( have_rows( 'groomsmen' ) ) : ?>
<div class="groomsmen">
	<div class="container">
		<div class="row justify-content-center">
			<?php while ( have_rows( 'groomsmen' ) ) : the_row(); ?>
			<div class="col-md-6">
				<div class="party-box">
					<div class="party-img">
						<?php $image = get_sub_field( 'image' ); ?>
						<?php if ( $image ):  ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						
						<?php else: ?>
							
						<?php endif; ?>
					</div>
					<div class="title-box">
						<h3><?php the_sub_field( 'name' ); ?></h3>
						<h4>Groomsman</h4>
					</div>
				</div>

			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>

<?php if($other_roles):?>
	<?php if ( have_rows( 'others_role_quote_quote' ) ) : ?>
		<section class="quotes">
			<?php while ( have_rows( 'others_role_quote_quote' ) ) : the_row(); ?>
				<?php require __DIR__ . '/components/quote-block.php'; ?>
			<?php endwhile; ?>
		</section>
	<?php else : ?>
		<?php // no rows found ?>
	<?php endif; ?>

	<?php if ( have_rows( 'other_roles' ) ) : ?>
		<div class="container">
			<h2>The Rest of The Gang</h2>
			<hr>
		
		</div>
	<div class="other-roles">
		<div class="container">
			<div class="row justify-content-center">
				<?php while ( have_rows( 'other_roles' ) ) : the_row(); ?>
				<div class="col-md-6">
					<div class="party-box">
						<div class="party-img">
							<?php $image = get_sub_field( 'image' ); ?>
							<?php if ( $image ):  ?>
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							
							<?php else: ?>
								
							<?php endif; ?>
						</div>
						<div class="title-box">
							<h3><?php the_sub_field( 'name' ); ?></h3>
							<h4><?php the_sub_field( 'role' ); ?></h4>
						</div>
					</div>

				</div>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
	<?php else : ?>
		<?php // no rows found ?>
	<?php endif; ?>
<?php endif; ?>

<?php if ( have_rows( 'childrens_role_quote_quote' ) ) : ?>
	<section class="quotes">
		<?php while ( have_rows( 'childrens_role_quote_quote' ) ) : the_row(); ?>
			<?php require __DIR__ . '/components/quote-block.php'; ?>
		<?php endwhile; ?>
	</section>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>

<?php if ( have_rows( 'childrens_roles' ) ) : ?>
	<div class="container">
		<h2>We Love the Kids</h2>
		<hr>
	
	</div>
<div class="childrens-roles">
	<div class="container">
		<div class="row justify-content-center">
			<?php while ( have_rows( 'childrens_roles' ) ) : the_row(); ?>
			<div class="col-md-6">
				<div class="party-box">
					<div class="party-img">
						<?php $image = get_sub_field( 'image' ); ?>
						<?php if ( $image ):  ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						
						<?php else: ?>
							
						<?php endif; ?>
					</div>
					<div class="title-box">
						<h3><?php the_sub_field( 'name' ); ?></h3>
						<h4><?php the_sub_field( 'role' ); ?></h4>
					</div>
				</div>

			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>

<?php get_footer(); ?>