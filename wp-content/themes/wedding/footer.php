<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		
				
					<div class="row">
						<div class="col-md-6">

							<div class="footer-text">
								<?php the_field( 'footer_text', 'option' ); ?>
							</div>
							
						</div>
						<div class="col-md-6">
							
							<div class="social-icons">
								<div class="hashtag">#<?php the_field( 'hashtag', 'option' ); ?></div>
								<a href="https://www.facebook.com/hashtag/<?php the_field( 'hashtag', 'option' ); ?>?hc_location=ufi" target="_blank"><i class="fa fa-facebook"></i></a>
								<a href="https://twitter.com/search?f=tweets&vertical=default&q=%23<?php the_field( 'hashtag', 'option' ); ?>&src=typd" target="_blank"><i class="fa fa-twitter"></i></a>
								<a href="https://www.instagram.com/explore/tags/<?php the_field( 'hashtag', 'option' ); ?>/" target="_blank"><i class="fa fa-instagram"></i></a>
							</div>
						</div>
					</div>
				

				<footer class="site-footer" id="colophon">

					<div class="site-info">

						©<?php echo Date('Y'); ?> All Rights Reserved. Wedding Love Theme Designed by <a href="http://raymondagothaii.com" target="_blank">Raymond A Gotha II</a>  | <?php the_field( 'copyright', 'option' ); ?>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

