<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

		<div id="footer-cont">
			<div class="footer-links">
				<a href="/">Home</a>
				<a href="/services/">Services</a>
			</div>
			<div class="footer-links">
				<a href="/gallery/">Gallery</a>
				<a href="/contact/">Contact</a>
			</div>
			<div class="footer-links social-media">
				<a class="facebook" href="#">
					<img class="f-white" src="/wp-content/images/footer/f.png" />
					<img class="f-grey" src="/wp-content/images/footer/f-grey.png" />
				</a>
			</div>
			<div class="footer-links social-media">
				<a class="twitter" href="#">
					<img class="t-white" src="/wp-content/images/footer/twitter.png" />
					<img class="t-grey" src="/wp-content/images/footer/twitter-grey.png" />
				</a>
			</div>

			<a class="copyright" href="mailto:sales@landcdigital.com">&#169; Copyright 2012, Lucas &#38; Cribb Digital Developers, LLC</a>
		</div>

<!-- 			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>

			<div id="site-generator">
				<?php do_action( 'twentyeleven_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyeleven' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentyeleven' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'twentyeleven' ), 'WordPress' ); ?></a>
			</div> -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>