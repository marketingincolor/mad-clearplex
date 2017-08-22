
<?php
$slug = get_post_field( 'post_name', get_post());
$root = get_bloginfo('template_directory').'/assets/images/';

if (is_single()) {
	if (is_single('case-studies')) {
		$img = 'top-bg-case-studies.jpg';
	} elseif (is_single('videos')) {
		$img = 'top-bg-videos.jpg';
	}
} else{
	switch ($slug) {
		case 'testimonials':
			$img = 'top-bg-testimonials.jpg';
			break;
		case 'dealer-resources':
			$img = 'top-bg-windshield.jpg';
			break;
		case 'commercial':case 'consumer':case 'product':
			$img = 'top-bg-truck.jpg';
			break;
		case 'about':
			$img = 'top-bg-about.jpg';
			break;
		case 'become-dealer':
			$img = 'top-bg-become-dealer.jpg';
			break;
		case 'become-distributor':
			$img = 'top-bg-become-distributor.jpg';
			break;
		case 'case-studies':
			$img = 'top-bg-case-studies.jpg';
			break
		case 'contact':
			$img = 'top-bg-contact.jpg';
			break;
    case 'dealer-success':
			$img = 'top-bg-dealer-success.jpg';
			break;
    case 'faq':
			$img = 'top-bg-faq.jpg';
			break;
    case 'listing':
			$img = 'top-bg-listing.jpg';
			break;
    case 'terms-and-conditions':
			$img = 'top-bg-terms.jpg';
			break;
    case 'video-gallery':
			$img = 'top-bg-videos.jpg';
			break;

		default:
			# code...
			break;
	}
}
?>

<section class="top-bg" style="background-image: url(<?php echo $root.$img; ?>);"></section>