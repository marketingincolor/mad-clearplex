
<?php
$slug = get_post_field( 'post_name', get_post());
$root = get_bloginfo('template_directory').'/assets/images/';

if (is_single('case-studies')) {
	$img = 'top-bg-case-studies.jpg';
}elseif (is_front_page()) {
	$img = 'top-bg-home.jpg';
} 
else{
	switch ($slug) {
		case 'testimonials':
			$img = 'top-bg-testimonials.jpg';
			break;
		case 'dealer':
			$img = 'top-bg-windshield.jpg';
			break;
		case 'commercial':
			$img = 'top-bg-truck.jpg';
			break;
		case 'consumer':
			$img = 'consumer-top-bg.jpg';
			break;
		case 'product':
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
			break;
		case 'contact':
			$img = 'top-bg-contact.jpg';
			break;
    case 'dealer-success':
			$img = 'top-bg-dealer-success.jpg';
			break;
    case 'faqs':
			$img = 'top-bg-faq.jpg';
			break;
    case 'sitemap':
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
			$img = 'top-bg-home.jpg';
			break;
	}
}
?>

<section class="top-bg" style="background-image: url(<?php echo $root.$img; ?>);"></section>