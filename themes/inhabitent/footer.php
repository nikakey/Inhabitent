<?php
/**
 * The template for displaying the footer.
 *
 * @package Inhabitent_Theme
 */

?>

				</div><!-- #content -->
			</div><!-- .wrapper -->
			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<div class="contact-info">
						<h3>Contact Info</h3>
						<p><i class="fas fa-envelope"></i><a href="#">info@inhabitent.com</a></p>
						<p><i class="fas fa-phone" data-fa-transform="rotate-90"></i><a href="#">778-456-7891</a></p>
						<ul class="social">
							<li><i class="fab fa-facebook-square"></i></li>
							<li><i class="fab fa-twitter-square"></i></li>
							<li><i class="fab fa-google-plus-square"></i></li>
						</ul>
					</div>
					<div class="business-hours">
						<h3>Business Hours</h3>
						<p>Monday-Friday: <span class="time">9am to 5pm</span></p>
						<p>Saturday: <span class="time">10am to 2pm</span></p>
						<p>Sunday: <span class="time">Closed</span></p>
					</div>
					<div class="footer-logo">
						<a href="#">
							<img src="<?php bloginfo('template_url'); ?>/images/logos/inhabitent-logo-text.svg" alt="Site Logo">
						</a>
					</div>
				</div><!-- .site-info -->
				<div class="site-copyright">
					<p class="text-copyright">Copyright <span class="sign-copyright">&#9400;</span> 2017 Inhabitent</p>
				</div><!-- .site-copyright -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
