$(document).ready(function(){
	if ($('body').hasClass('home')) {
		owlCarousel();
		scrollDown();
	}
	if ($('body').hasClass('page-template-page-consumer') || $('body').hasClass('page-template-page-commercial') || $('body').hasClass('page-template-page-become-dealer')) {
		benefitsCarousel();
	}
	if ($('body').hasClass('page-template-page-faqs')){
		faqMenuSlider();
	}
	navSlideDown();
	videoMeta();
	ajaxVideoSearch();
	smoothScrollSidebar();
});

$(window).scroll(function(){
	navSlideDown();
	if ($('body').hasClass('page-template-page-faqs')){
		faqMenuSlider();
	}
});

// Scroll down to second section on home page
function scrollDown(){
	$('.scroll-down').on('click',function(){
		var height = $('.home-hero').outerHeight();
		$('html,body').animate({
      scrollTop: height
    }, 750);
	});
}

// Adds a disabled option to the beginning of <select> elements on Contact Page
// in contact forms, since Ninja Forms can't do it.
setTimeout(function(){
	(function addDisabledSelect(){
		var $form1 = $('#nf-form-1-cont');
		var $form3 = $('#nf-form-3-cont');
		$form1.find('#nf-field-5').find('option').removeAttr("selected");
		$form1.find('#nf-field-5').find('option:first').before('<option disabled="disabled" selected="selected">Please Choose One</option>');
		$form3.find('#nf-field-22').find('option').removeAttr("selected");
		$form3.find('#nf-field-22').find('option:first').before('<option disabled="disabled" selected="selected">Please Choose One</option>');
	})();
},550);

//smooth scroll on sidebar click
function smoothScrollSidebar(){
	$('.about-sidebar').find('a').on('click',function(){
		var id             = $(this).find('button').attr('id');
		var idFirst        = id.split('-')[0];
		var scrollToEle    = $('#'+idFirst);
		var scrollToEleTop = scrollToEle.offset().top;
		var sideNavFromTop = 235;

		$('html, body').animate({
      scrollTop: scrollToEleTop - sideNavFromTop
    }, 500);

	});
}

//faq menu slider sidebar thingy
function faqMenuSlider(){
	var consumerTop    = $('.product-faqs.consumer').offset().top;
	var commercialTop  = $('.product-faqs.commercial').offset().top;
	var dealerTop      = $('.product-faqs.dealer').offset().top;
	var $sidebar       = $('#side-nav');
	var $buttons       = $('#consumer-button, #dealer-button, #commercial-button');
	var sideNavFromTop = $('#side-nav').offset().top - $(window).scrollTop();

	if($(window).scrollTop() < consumerTop / 2){
		$sidebar.removeClass('sidebar-fixed');
		$buttons.removeClass('active-button');
	} 
	if ($(window).scrollTop() >= consumerTop / 2) {
		$sidebar.addClass('sidebar-fixed').css({'top':consumerTop / 2});
		$('#commercial-button,#dealer-button').removeClass('active-button');
		$('#consumer-button').addClass('active-button');
	} 
	if ($(window).scrollTop() >= commercialTop - sideNavFromTop - 100) {
		$('#consumer-button,#dealer-button').removeClass('active-button');
		$('#commercial-button').addClass('active-button');
	} 
	if ($(window).scrollTop() >= dealerTop - sideNavFromTop - 100) {
		$('#consumer-button,#commercial-button').removeClass('active-button');
		$('#dealer-button').addClass('active-button');
	}
	if ($(window).scrollTop() >= $('.container').outerHeight() - 300 - $('#side-nav').outerHeight()) {
		$sidebar.addClass('sidebar-absolute').removeClass('sidebar-fixed').css({'top':$('.container').outerHeight() - 300});
	}
	if ($(window).scrollTop() <= $('.container').outerHeight() - 300 - $('#side-nav').outerHeight() && $(window).scrollTop() >= consumerTop / 2) {
		$sidebar.addClass('sidebar-fixed').removeClass('sidebar-absolute').css({'top':consumerTop / 2});
	}
}

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

// Add video metadata to modal
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
	});
	$('#dealer-video').click(function(){
		$('#video-modal').foundation('open');
	});
}

function ajaxLoadMoreVideos(){
	$('#load-more-videos').on('click',function(e){
		e.preventDefault();
    

		$.ajax({
			url: templateURL + '/load-more-videos.php',
			type: 'POST',
			data: {query : query},
			success: function(response) {
        $content.html(response);
      }
		});
	});
}

function ajaxVideoSearch(){
	$('.video-gallery').find('#s').on('keyup',function(e){
		e.preventDefault();
		var $form    = $(this).parent().parent();
    var $input   = $form.find('input[name="s"]');
    var query    = $input.val();
    var $content = $('.gallery-container');

		$.ajax({
			url: templateURL + '/ajax-search.php',
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