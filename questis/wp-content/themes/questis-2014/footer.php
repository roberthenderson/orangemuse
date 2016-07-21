<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package questis-2014
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer-container global-container">
			<div class="footer-left">
				<div class="site-branding">
					<div class="footer-logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					</div>
				</div>
				<ul class="footer-nav">
					<li><a href="#">In the Press</a></li>
					<li><a href="#">Meet the Team</a></li>
					<li><a href="#">Contact Us</a></li>
				</ul>
				<ul class="footer-links">
					<li>(855) 843-5233</li>
					<li class="separator">|</li>
					<li><a href="mailto:info@questisportfolio.com">info@questisportfolio.com</a></li>
					<li class="separator">|</li>
					<li><a href="#">Employment</a></li>
					<li class="separator">|</li>
					<li><a href="#">Terms</a></li>
				</ul>
			</div>
			<div class="footer-right">
				<ul class="social-icons">
					<li><a href="#" class="facebook">Like Questis on Facebook</a></li>
					<li><a href="#" class="twitter">Follow Questis on Twitter</a></li>
					<li><a href="#" class="linkedin">Follow Questis on Linked In</a></li>
					<li><a href="#" class="googleplus">Follow Questis on Google Plus</a></li>
				</ul>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
