<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="contact-info">
		<h6><span>Contact Info</span></h6>
		<i class="fas fa-envelope">
			<a href="info@inhabitent.com">info@inhabitent.com</a>
		</i>
		<i class="fas fa-phone"><a href="tel:778-456-7891">778-456-7891</a></i>
		<i class="fab fa-facebook-square"></i>
		<i class="fab fa-twitter-square"></i>
		<i class="fab fa-google-plus-square"></i>
	</div>

	<div class="business-hour">
		<h6><span>business hour</span></h6>
		<p><span>Monday-Friday:</span> 9am to 5pm</p>
		<p><span>Saturday:</span> 10am to 2pm</p>
		<p><span>Sunday:</span> Closed</p>
	</div>

	<div class="footer-logo">
		<img class="inhabitent-logo-text-dark" src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/inhabitent-logo-text-dark.svg" />
	</div><!-- .footer-logo -->

	<div class="site-info">
		<p><span>copyright &copy; 2019 inhabitent</span></p>
		<a href="<?php echo esc_url('https://wordpress.org/'); ?>"><?php printf(esc_html('Proudly powered by %s'), 'WordPress'); ?></a>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<!-- include the javascript -->
<?php wp_footer(); ?>

</body>

</html>

