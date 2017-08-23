<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header();
get_template_part('template-parts/top-bg');

?>

<section class="page-error">
	<div class="row">
		<div class="large-8 large-offset-2 medium-10 medium-offset-1 columns text-center">
			<h2 class="blue-heading">Page Not Found</h2>
			<p class="gray-p">Sorry! Something's gone wrong. Check the URL and start over in the search box, or use the link below to go back to our home page.</p>
		</div>
		<div class="medium-10 medium-offset-1 columns">
			<?php get_search_form(); ?>
		</div>
		<div class="large-8 large-offset-2 medium-10 medium-offset-1 columns end text-center">
			<ul>
				<li><a href="<?php echo site_url(); ?>">Go To The Home Page &nbsp;&nbsp;<i class="fa fa-home" aria-hidden="true"></i></a></li>
				<li><a href="<?php echo site_url(); ?>/become-dealer">Become A ClearPlex Dealer &nbsp;&nbsp;<i class="fa fa-check-square-o" aria-hidden="true"></i></a></li>
				<li><a href="<?php echo site_url(); ?>/find-distributor">Find A Distributor &nbsp;&nbsp;<i class="fa fa-search" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
</section>

<?php get_footer();
