<?php
/**
 * The template for displaying the footer.
 *
 * @package Inhabitent_New_Theme
 */

?>

</div><!-- #content -->
</div>
<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="company-info">
		<div class="contact-info">
			<h3><span>Contact Info</span></h3>
			<p>
				<i class="fas fa-envelope"></i>
				<a href="info@inhabitent.com">info@inhabitent.com</a>
			</p>
			<p class="phone">
				<i class="fas fa-phone"></i>
				<a href="tel:778-456-7891">778-456-7891</a>
			</p>
			<p>
				<i class="fab fa-facebook-square"></i>
				<i class="fab fa-twitter-square"></i>
				<i class="fab fa-google-plus-square"></i>
			</p>

		</div>

		<div class="business-hour">
			<h3><span>business hour</span></h3>
			<p><span>Monday-Friday:</span> 9am to 5pm</p>
			<p><span>Saturday:</span> 10am to 2pm</p>
			<p><span>Sunday:</span> Closed</p>
		</div><!-- .business-hour -->

		<div class="footer-logo">
			<img class="inhabitent-logo-text-dark" src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/inhabitent-logo-text.svg" />
		</div><!-- .footer-logo -->
	</div><!-- .company-info -->

	<div class="copyright">
		<p><span>copyright &copy; 2019 inhabitent</span></p>
	</div><!-- .copyright -->

</footer><!-- #colophon -->
</div><!-- #page -->

<!-- include the javascript -->
<?php wp_footer(); ?>

</body>

</html>