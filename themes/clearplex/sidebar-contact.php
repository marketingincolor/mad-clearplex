<?php
/**
 * The specific sidebar for the Contact Us page
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<aside class="sidebar about-sidebar">
	<div class="small-11 small-offset-1">
	<article id="contact" class="widget widget_contact">
		<h5 class="ca-title blue-heading">Madico, Inc. Headquarters</h5>
		<p class="contact-address">
		2630 Fairfield Ave South<br>
		St. Petersburg, FL 33712<br>
		(727)-372-2544</p>
	</article>
	<article id="testimonial" class="widget widget_testimonial">
		<?php get_template_part('template-parts/testimonials-side'); ?>
	</article>
	</div>
</aside>
