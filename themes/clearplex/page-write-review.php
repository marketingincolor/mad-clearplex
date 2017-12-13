<?php
	/*
	Template Name: Write Review
	*/
	$header_bg = '/assets/images/top-bg-about.jpg';
	get_header();
	get_template_part('template-parts/top-bg');
?>

<section class="become-distributor">
	<div class="row">
		<div class="large-8 small-10 small-centered text-center">
			<h1 class="blue-heading"><?php the_field('distributor_heading'); ?></h1>
			<p class="gray-p subheading"><?php the_field('distributor_body'); ?></p>
		</div>
		<div class="large-6 medium-8 small-10 small-centered">
			<?php echo do_shortcode('[ninja_form id=4]'); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>

<script>
  // Change state and/or country fields after load
	setTimeout(function(){
		$('#nf-field-39').on('change',function(){
			if ($(this).val() == 'US') {}
			setTimeout(function(){
				$('#nf-field-56').find('option:first').before('<option disabled="disabled" selected="selected">Select State</option>');
			},200);
		var country = $(this).find('option:selected').text();
		$(this).attr('value',country)
		});
		$('#nf-field-56').find('option:first').before('<option disabled="disabled" selected="selected">Select State</option>');
	},500)
</script>