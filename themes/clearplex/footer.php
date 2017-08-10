<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>

		<div class="footer-container" data-sticky-footer>
			<footer class="footer">
				<div class="row">
					<div class="large-4 columns">
						<img src="<?php bloginfo('template_directory'); ?>/assets/images/footer-logo.png" alt="ClearPlex by Madico">
						<address>
							<p>PO BOX 216, Draper, UT 84020</p>
							<p>(801) 571-8243</p>
						</address>
						<p class="terms"><a href="#!">Terms and Conditions</a> | <a href="#!">Privacy Policy</a></p>
						<p>&copy; <?php echo Date('Y'); ?> ClearPlex by Madico. All rights reserved.</p>
					</div>
					<div class="large-4 large-offset-2 columns">
						<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' )); ?>
					</div>
					<div class="large-2 columns">
						<ul class="social-links">
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
					</div>
				</div>
			</footer>
		</div>

<?php wp_footer(); ?>

</body>
</html>
