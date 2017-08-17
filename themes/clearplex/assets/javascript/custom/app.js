$(document).ready(function(){
	if ($('body').hasClass('home')) {
		owlCarousel();
	}
	if ($('body').hasClass('page-template-page-consumer') || $('body').hasClass('page-template-page-commercial')) {
		benefitsCarousel();
	}
	navSlideDown();
});

$(window).scroll(function(){
	navSlideDown();
});

//product benefits carousel
function benefitsCarousel(){
	$('.owl-carousel').owlCarousel({
    loop:true,
    margin:50,
    nav:true,
    navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
    responsiveClass:true,
    stagePadding:50,
    autoPlay:true,
    autoplaySpeed:5000,
    autoplayTimeout: 5000,
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

// home page vertical carousel
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