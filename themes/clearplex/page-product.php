<?php
	/*
	Template Name: Product
	*/
	get_header(); 
	get_template_part('template-parts/top-bg');
?>

<section class="clear-choice">
	<div class="row">
		<div class="large-8 large-offset-2 medium-10 medium-offset-1 columns text-center">
			<h2 class="blue-heading"><?php the_field('top_heading'); ?></h2>
		</div>
		<div class="large-10 large-offset-1 columns text-center end">
			<p class="gray-p subheading"><?php the_field('top_body'); ?></p>
		</div>
	</div>
</section>

<!-- Top Row -->
<section class="product-features-top" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/yellow-car-bg.jpg);">
	<div class="row-expanded clearfix">
		<div class="medium-5 large-4 large-offset-1 columns end">
			<ul>
				<li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;<?php the_field('top_feature1'); ?></li>
				<li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;<?php the_field('top_feature2'); ?></li>
				<li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;<?php the_field('top_feature3'); ?></li>
				<li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;<?php the_field('top_feature4'); ?></li>
			</ul>
		</div>
	</div>
</section>
	
<!-- Middle Row -->
<section class="product-features-middle" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/middle-row-bg.jpg);">
	<div class="row-expanded clearfix">
		<div class="medium-5 medium-offset-6 large-4 large-offset-7 columns end">
			<ul>
				<li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;<?php the_field('middle_feature1'); ?></li>
				<li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;<?php the_field('middle_feature2'); ?></li>
				<li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;<?php the_field('middle_feature3'); ?></li>
				<li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;<?php the_field('middle_feature4'); ?></li>
			</ul>
		</div>
	</div>
</section>

<!-- Bottom Row -->
<section class="product-features-bottom" style="background-image: url(<?php the_field('bottom_row_bg_img'); ?>);">
	<div class="row-expanded clearfix">
		<div class="medium-5 large-4 large-offset-1 columns end">
			<ul>
				<li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;<?php the_field('bottom_feature1'); ?></li>
				<li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;<?php the_field('bottom_feature2'); ?></li>
				<li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;<?php the_field('bottom_feature3'); ?></li>
				<li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;<?php the_field('bottom_feature4'); ?></li>
			</ul>
		</div>
	</div>
</section>

<!-- Performance Data Table Section -->
<section class="performance-data">
	<div class="row">
		<div class="large-8 large-offset-2 medium-10 medium-offset-1 columns text-center">
			<h2 class="blue-heading"><?php the_field('performace_heading'); ?></h2>
			<p class="gray-p"><?php the_field('performance_body'); ?></p>
		</div>
		<div class="small-12 columns">
			<table class="unstriped stack" cellspacing="0">
				<thead>
					<th></th>
					<th><?php the_field('first_column_top_heading'); ?><br><span class="table-subhead"><?php the_field('first_column_subheading'); ?></span></th>
					<th><?php the_field('second_column_top_heading'); ?><br><span class="table-subhead"><?php the_field('second_column_subheading'); ?></span></th>
					<th><?php the_field('third_column_top_heading'); ?><br><span class="table-subhead"><?php the_field('third_column_subheading'); ?></span></th>
				</thead>
				<tbody>
					<tr>
						<td><?php the_field('first_row_heading'); ?></td>
						<td><?php the_field('first_row_first_column_data'); ?></td>
						<td><?php the_field('first_row_second_column_data'); ?></td>
						<td><?php the_field('first_row_third_column_data'); ?></td>
					</tr>
					<tr>
						<td><?php the_field('second_row_heading'); ?></td>
						<td><?php the_field('second_row_first_column_data'); ?></td>
						<td><?php the_field('second_row_second_column_data'); ?></td>
						<td><?php the_field('second_row_third_column_data'); ?></td>
					</tr>
					<tr>
						<td><?php the_field('third_row_heading'); ?></td>
						<td><?php the_field('third_row_first_column_data'); ?></td>
						<td><?php the_field('third_row_second_column_data'); ?></td>
						<td><?php the_field('third_row_third_column_data'); ?></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="medium-5 medium-offset-1 columns">
			<ul>
				<li><?php the_field('list_heading1'); ?><br><span class="list-subhead"><?php the_field('list_body1'); ?></span></li>
				<li><?php the_field('list_heading3'); ?><br><span class="list-subhead"><?php the_field('list_body3'); ?></span></li>
				<li><?php the_field('list_heading5'); ?><br><span class="list-subhead"><?php the_field('list_body5'); ?></span></li>
				<li><?php the_field('list_heading7'); ?><br><span class="list-subhead"><?php the_field('list_body7'); ?></span></li>
				<li><?php the_field('list_heading9'); ?><br><span class="list-subhead"><?php the_field('list_body9'); ?></span></li>
			</ul>
		</div>
		<div class="medium-4 columns end">
			<ul>
				<li><?php the_field('list_heading2'); ?><br><span class="list-subhead"><?php the_field('list_body2'); ?></span></li>
				<li><?php the_field('list_heading4'); ?><br><span class="list-subhead"><?php the_field('list_body4'); ?></span></li>
				<li><?php the_field('list_heading6'); ?><br><span class="list-subhead"><?php the_field('list_body6'); ?></span></li>
				<li><?php the_field('list_heading8'); ?><br><span class="list-subhead"><?php the_field('list_body8'); ?></span></li>
				<li><?php the_field('list_heading10'); ?><br><span class="list-subhead"><?php the_field('list_body10'); ?></span></li>
			</ul>
		</div>
	</div>
</section>

<section class="product-optimize" style="background-image: url(<?php the_field('optimize_bg_img'); ?>);">
	<div class="row">
		<div class="medium-6 columns end">
			<h2 class="blue-heading"><?php the_field('optimize_heading'); ?></h2>
			<p class="gray-p"><?php the_field('optimize_body') ?></p>
		</div>
	</div>
</section>

<section class="find-dealer" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/find-dealer-consumer.jpg);">
	<div class="row">
		<div class="large-5 large-offset-7 medium-8 medium-offset-4 columns">
			<h2 class="white-heading"><?php the_field('find_dealer_heading',8); ?></h2>
			<p class="white-p"><?php the_field('find_dealer_body',8); ?></p>
			<a href="<?php the_field('find_dealer_button_link',8); ?>" class="btn"><?php the_field('find_dealer_button_text',8); ?></a>
		</div>
	</div>
</section>

<?php get_footer(); ?>