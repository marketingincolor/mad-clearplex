<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */$options = get_option('mic_theme_options');
?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<?php echo $options['gtm_code_head']; ?>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php if(is_page(array(225,206,202,218,38,214,342,314,310,138,136,130))) { ?>
			<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
		<?php } ?>
		<?php echo $options['other_head_script']; ?>
		<?php echo $options['ga_code']; ?>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<?php echo $options['gtm_code_body']; ?>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<header class="site-header" role="banner">
		<nav class="site-navigation top-bar" role="navigation">
			<div class="row">
				<div class="small-12 columns">
					<div class="top-bar-left">
						<div class="site-desktop-title top-bar-title">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php bloginfo('template_directory'); ?>/assets/images/nav-logo.png" alt="ClearPlex"></a>
						</div>
					</div>
					<div class="top-bar-right">
						<?php foundationpress_top_bar_r2(); ?>

						<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
							<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
						<?php endif; ?>
						<i class="fa fa-bars cheeseburger" data-toggle="mobile-menu" aria-hidden="true"></i>
						<!-- Mobile menu fullscreen modal -->
						<div class="full reveal" id="mobile-menu" data-reveal  data-animation-in="slide-in-right bounce" data-animation-out="slide-out-right bounce">
								<!-- Display Mobile Menu -->
						  	<?php wp_nav_menu( array( 'theme_location' => 'mobile-nav-2','menu_id' => 'mobile-menu-modal','menu_class' => 'mobile-menu-list','container' => 'ul' )); ?>
						  <button class="close-button" data-close aria-label="Close reveal" type="button">
						    <span aria-hidden="true">&times;</span>
						  </button>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<script>
			templateURL = '<?php bloginfo("template_directory"); ?>';
		</script>
	</header>

	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
