$(document).ready(function(){
	owlCarousel();
	navSlideDown();
	benefitsCarousel();
});

$(window).scroll(function(){
	navSlideDown();
});

//product benefits carousel
function benefitsCarousel(){
	$('.benefits-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
      0:{
        items:1
      },
      640:{
        items:2
      },
      1024:{
      	items:3
      }
    }
	});
}

// home page verticl carousel
function owlCarousel(){
	$(".owl-carousel").owlCarousel({
	  loop: true,
	  autoplay: true,
	  autoplayTimeout:5000,
	  autoplayHoverPause:true,
	  items: 1,
	  nav: true,
	  animateOut: 'slideOutUp',
	  animateIn: 'slideInUp',
	  navText: ["<i class='fa fa-chevron-up'></i>","<i class='fa fa-chevron-down'></i>"]
	});
	$('.owl-prev').on('click',function(){
		
	});
}

// makes nav slide down after scrolling past 1st section
function navSlideDown(){
	var heroHeight = $('.home-hero').height();
	if ($('body').hasClass('home') || $('body').hasClass('page-template-page-products')) {
		if ($(window).scrollTop() > 200 && $(window).scrollTop() < heroHeight) {
			$('.top-bar').removeClass('slide-down').addClass('opacity0');
		}
		if ($(window).scrollTop() >= heroHeight) {
			$('.top-bar').addClass('slide-down');
		}
		if ($(window).scrollTop() < 200) {
			$('.top-bar').removeClass('opacity0');
		}
	}else{
		var topHeight = $('.top-bg').outerHeight();
		if ($(window).scrollTop() > 0 && $(window).scrollTop() < topHeight) {
			$('.top-bar').removeClass('slide-down').addClass('opacity0');
		}
		if ($(window).scrollTop() >= topHeight) {
			$('.top-bar').addClass('slide-down');
		}
		if ($(window).scrollTop() < 200) {
			$('.top-bar').removeClass('opacity0');
		}
	}
}