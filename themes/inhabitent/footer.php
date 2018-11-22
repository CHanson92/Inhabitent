<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<section class="site-info">
					<h3>Contact Info</h3>
					<p><i class="fas fa-envelope"></i><a href="mailto:info@inhabitent.com">info@inhabitent.com</a></p>
					<p><i class="fas fa-phone"></i><a href="tel:5553434567891">778-456-7891</a></p>
					<p>
						<span class='icons'><i class="fab fa-facebook-square"></i></span>
						<span class='icons'><i class="fab fa-twitter-square"></i></span>
						<span class='icons'><i class="fab fa-google-plus-square"></i></span>
					</p>
				</section>
				<section class="business-hours">
					<h3>Business Hours</h3>
					<p><span class="week">Monday-Friday:</span> 9am to 5pm</p>
					<p><span class="week">Saturday:</span> 10am to 2pm</p>
					<p><span class="week">Sunday:</span> Closed</p>
				</section>
				<section class="inhabitent-logo">
					<img src="/inhabitent/wp-content/themes/inhabitent/images/logos/inhabitent-logo-text.svg" href="<?php echo esc_url( home_url( 'http://localhost:3000/inhabitent/' ) ); ?>" rel="home">
				</section>
				<section class="copyright">
					<p>COPYRIGHT © 2019 INHABITENT</p>
				</section>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
