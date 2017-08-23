<?php
/**
 * The specific sidebar for the FAQ page
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<aside class="sidebar about-sidebar">
	<div class="small-11 small-offset-1">
	<article id="side-nav" class="widget widget_sidenav">
		<nav class="page-buttons">
			<button><a href="<?php echo site_url('/'); ?>consumer" class="alt">consumer</a></button>
			<button><a href="<?php echo site_url('/'); ?>commercial" class="alt">commercial</a></button>
			<button><a href="<?php echo site_url('/'); ?>dealer-resources" class="alt">dealer</a></button>
		</nav>
	</article>
	<article id="testimonial" class="widget widget_testimonial">
		<?php get_template_part('template-parts/testimonials-side'); ?>
	</article>
	</div>
</aside>
