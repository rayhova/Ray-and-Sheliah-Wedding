<?php
/**
 * Home Page Template
 *
Template Name:  Home Page	
 *
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * 
 */

get_header(); ?>
<?php require __DIR__ . '/components/hero.php'; ?>
<section id="countdown">
	<div class='container'>
		<div id="countdown-text"></div>
	</div>
</section>
<section id="about-us">
	<div class="row">
		<div class="col-md-6 p-0">
			<?php $about_us_photo = get_field( 'about_us_photo' ); ?>
			<img src="<?php echo $about_us_photo['url']; ?>" alt="<?php echo $about_us_photo['alt']; ?>" />
		</div>
		<div class="col-md-6 p-5">
			<div class="story-box">
				<h2>About Us</h2>
				<hr>
				<div class="bride-box box">
					<?php if ( have_rows( 'about_us_bride' ) ) : ?>
						<?php while ( have_rows( 'about_us_bride' ) ) : the_row(); ?>
							<?php $image = get_sub_field( 'image' ); ?>
							<?php if ( $image ) { ?>
								<div class="thumb-wrapper">
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="thumb" />
								</div>
							<?php } ?>
							<div class="name"><?php the_sub_field( 'name' ); ?></div>
							
							<div class="bio"><?php the_sub_field( 'bio' ); ?></div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
					
				<div class="plus"><i class="fa fa-plus" aria-hidden="true"></i></div>
				<div class="groom-box box">
					<?php if ( have_rows( 'about_us_groom' ) ) : ?>
						<?php while ( have_rows( 'about_us_groom' ) ) : the_row(); ?>
							<?php $image = get_sub_field( 'image' ); ?>
							<?php if ( $image ) { ?>
								<div class="thumb-wrapper">
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="thumb" />
								</div>
							<?php } ?>
							<div class="name"><?php the_sub_field( 'name' ); ?></div>
							
							<div class="bio"><?php the_sub_field( 'bio' ); ?></div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
				<div class="equals">=</div>
				<div class="heart"><i class="fa fa-heart" aria-hidden="true"></i></div>
				
				<div class="about-us"><?php the_field( 'about_us' ); ?></div>
			</div>
		</div>
	</div>
</section>
<?php $rsvp_bg = get_field( 'rsvp_bg' ); ?>

<section id="rsvp" style="background-image: url('<?php echo $rsvp_bg['url']; ?>');">
<?php $form = get_field('rsvp_form'); ?>
<?php $date = get_field( 'wedding_date', 'option' ); ?>
<?php $date = new DateTime($date); ?>

	<div class="container">
		<h2>The Wedding</h2>
		<div class="row">
			<div class="col-lg-6">
				<div class="event-details">
					Date: <span><?php echo $date->format('F j, Y'); ?></span><br />
					Time: <span><?php echo $date->format('g:i A'); ?></span><br />
					Location: <span><?php the_field( 'wedding_location', 'option' ); ?></span><br />
					<div class="accomodations">Please find more information on our <a href="">accommodations</a> page.</div>
				</div>
			</div>
			<div class="col-lg-6">
				<?php gravity_form($form['id'], true, false, false, '', true, 1); ?></div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
<script type="text/javascript">
	
// Set the date we're counting down to
var countDownDate = new Date("<?php the_field( 'wedding_date', 'option' ); ?>").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="countdown"
  document.getElementById("countdown-text").innerHTML =days + " <span class='unit'>Days</span> " + hours + " <span class='unit'>Hours</span> "
  + minutes + " <span class='unit'>Minutes</span> " + seconds + " <span class='unit'>Seconds</span> <br /> <span class='countdown-caption'>Until we say I DO</span>";

  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("countdown-text").innerHTML = "We Are Married";
  }
}, 1000);

</script>