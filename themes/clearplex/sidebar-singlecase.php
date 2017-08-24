<?php
/**
 * The specific sidebar for the Single Case Study page
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<aside class="sidebar about-sidebar">
	<div class="small-11 small-offset-1">
	<article id="testimonial" class="widget widget_testimonial">
		<?php get_template_part('template-parts/testimonials-side'); ?>
	</article>
	<article id="links" class="widget widget_links">
		<p><a href="<?php echo site_url(); ?>/become-dealer"><button>Become A Dealer</button></a></p>
		<p><a href="<?php echo site_url(); ?>/become-distributor"><button>Become A Distributor</button></a></p>
	</article>
	</div>
</aside>
