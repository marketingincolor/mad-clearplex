$(document).ready(function(){
	if ($('body').hasClass('home')) {
		owlCarousel();
	}
	if ($('body').hasClass('page-template-page-consumer') || $('body').hasClass('page-template-page-commercial')) {
		benefitsCarousel();
	}
	navSlideDown();
	videoMeta();
	ajaxVideoSearch();
});

$(window).scroll(function(){
	navSlideDown();
});

// Adds a disabled option to the beginning of <select> elements on Contact Page
// in contact forms, since Ninja Forms can't do it.
setTimeout(function(){
	(function addDisabledSelect(){
		var $form = $('#nf-form-1-cont');
		$form.find('#nf-field-5').find('option').removeAttr("selected");
		$form.find('#nf-field-5').find('option:first').before('<option disabled="disabled" selected="selected">Please Choose One</option>');
	})();
},550);

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

// Add video metadeta to modal
function videoMeta(){
	$('.column-block').find('a').on('click',function(){
		var that = this;
		$('#video-modal').bind('open.zf.reveal',function(){
			var videoSrc   = $(that).parent().data('video');
			var videoTitle = $(that).parent().data('title');
			$('video').attr('src',videoSrc);
			$('#video-modal').find('h1').text(videoTitle);
		});
		$('#video-modal').foundation('open');
	})
}

function ajaxVideoSearch(){
	$('.video-gallery').find('#s').on('keyup',function(e){
		e.preventDefault();
		var $form    = $(this).parent().parent();
    var $input   = $form.find('input[name="s"]');
    var query    = $input.val();
    var $content = $('.gallery-container');

		$.ajax({
			url: templateURL + '/page-templates/ajax-search.php',
			type: 'POST',
			data: {query : query},
			success: function(response) {
        $content.html(response);
      }
		});
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