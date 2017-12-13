<?php
/**
 * The template for displaying search form
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

do_action( 'foundationpress_before_searchform' ); ?>
<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
	<?php do_action( 'foundationpress_searchform_top' ); ?>
	<div class="input-group">
		<input type="text" class="input-group-field" value="" name="s" id="s" placeholder="<?php esc_attr_e( 'Start Your Search', 'foundationpress' ); ?>">
		<div class="input-group-button">
			<button type="submit" id="searchsubmit" class="button">
				<i class="fa fa-search" aria-hidden="true"></i>
			</button>
		</div>
	</div>
</form>
<?php do_action( 'foundationpress_after_searchform' );
