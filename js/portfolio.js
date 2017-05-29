// JavaScript Document

jQuery(document).ready( function($){
	
	
	
	///masonry layout
	
	/*var container = document.querySelector('#ms-container');
      var msnry = new Masonry( container, {
        itemSelector: '.ms-item',
        columnWidth: '.ms-item',                
      });  
      
	
	var $container = $('#ms-container');
	// initialize
	$container.masonry({
  	columnWidth: '.ms-item',
  	itemSelector: '.ms-item'
	});
	*/
	var $grid = $('#ms-container').masonry({
  itemSelector: '.ms-item',
  percentPosition: true,
  columnWidth: '.ms-item'
});
// layout Isotope after each image loads
$grid.imagesLoaded().progress( function() {
  $grid.masonry();
}); 
	/*Contact Form submission*/
	$('#portfolioContactForm').on('submit', function(e){
		
		e.preventDefault();
		
		$('.has-error').removeClass('has-error');
		$('.js-show-feedback').removeClass('js-show-feedback');
		
		
		
		var form = $(this),
				name = form.find('#name').val(),
				email = form.find('#email').val(),
				company = form.find('#company').val(),
				message = form.find('#message').val(),
				ajaxurl = form.data('url');
		
		if( name === '' ){
			$('#name').parent('.form-group-two').addClass('has-error');
			return;
		}
		
		
		if( email === '' ){
			$('#email').parent('.form-group-two').addClass('has-error');
			return;
		}

		if( message === '' ){
			$('#message').parent('.form-group-two').addClass('has-error');
			return;
		}
		
		
		
		form.find('input, button, textarea').attr('disabled','disabled');
		$('.js-form-submission').addClass('js-show-feedback');
		
		
		$.ajax({
			
			url : ajaxurl,
			type : 'post',
			data : {
				
				name : name,
				email : email,
				company : company,
				message : message,
				action: 'portfolio_save_user_contact_form'
				
			},
			error : function( response ){
				$('.js-form-submission').addClass('js-show-feedback');
				$('.js-form-error').addClass('js-show-feedback');
				form.find('input, button, textarea').removeAttr('disabled');
			},
			success : function( response ){
				if(response === 0) {
					
				setTimeout(function(){
					
				
				$('.js-form-submission').addClass('js-show-feedback');
				$('.js-form-error').addClass('js-show-feedback');
				form.find('input, button, textarea').removeAttr('disabled');
					},500);
				}else{ 
					setTimeout(function(){
				$('.js-form-submission').addClass('js-show-feedback');
				$('.js-form-success').addClass('js-show-feedback');
				form.find('input, button, textarea').removeAttr('disabled').val('');
					
					},500);
				}
			}
			
		});

	});
	
	
	// animation loading
	$(window).load(function() {
	$("#loading").fadeOut(500);
	});
	
	//aniimate inview		
		
	//window browser
	
	$(window).resize(function() {
    $('#hero').height($(window).height());
}).resize();
		
	
	$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
	
	

	
	
	
		
	var $window	= $(window);
	var $body	= $('body');
		var Unicom = {
		
		// Initialization the functions
		init: function() {
			
			
			Unicom.Carousel();

			
			$window.on('load', function() {
				Unicom.Animation();
			});
			
		},
		

		
		// Carousel functions & settings
		Carousel: function() {
			
			// Carousel arrows 2 columns
			$('.carousel-slider.carousel-arrows-2col').slick({
				speed: 400,
				slidesToShow: 2,
				slidesToScroll: 2,
				draggable: false,
				responsive: [
					{
						breakpoint: 768,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1,
							draggable: true
						}
					}
				]
			});
			
			// Carousel arrows 3 columns
			$('.carousel-slider.carousel-arrows-3col').slick({
				speed: 400,
				slidesToShow: 3,
				slidesToScroll: 3,
				draggable: false,
				responsive: [
					{
						breakpoint: 768,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 2,
							draggable: true
						}
					},
					{
						breakpoint: 481,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1,
							draggable: true
						}
					}
				]
			});
			
			// Carousel arrows 4 columns
			$('.carousel-slider.carousel-arrows-4col').slick({
				speed: 400,
				slidesToShow: 4,
				slidesToScroll: 4,
				draggable: false,
				responsive: [
					{
						breakpoint: 992,
						settings: {
							slidesToShow: 3,
							slidesToScroll: 3
						}
					},
					{
						breakpoint: 768,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 2,
							draggable: true
						}
					},
					{
						breakpoint: 481,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1,
							draggable: true
						}
					}
				]
			});
			
			// Carousel arrows 5 columns
			$('.carousel-slider.carousel-arrows-5col').slick({
				speed: 400,
				slidesToShow: 5,
				slidesToScroll: 5,
				draggable: false,
				responsive: [
					{
						breakpoint: 992,
						settings: {
							slidesToShow: 4,
							slidesToScroll: 4
						}
					},
					{
						breakpoint: 768,
						settings: {
							slidesToShow: 3,
							slidesToScroll: 3,
							draggable: true
						}
					},
					{
						breakpoint: 481,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 2,
							draggable: true
						}
					},
					{
						breakpoint: 301,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1,
							draggable: true
						}
					}
				]
			});
			
			// Carousel arrows 6 columns
			$('.carousel-slider.carousel-arrows-6col').slick({
				speed: 400,
				slidesToShow: 6,
				slidesToScroll: 6,
				draggable: false,
				responsive: [
					{
						breakpoint: 1200,
						settings: {
							slidesToShow: 5,
							slidesToScroll: 5
						}
					},
					{
						breakpoint: 992,
						settings: {
							slidesToShow: 4,
							slidesToScroll: 4
						}
					},
					{
						breakpoint: 768,
						settings: {
							slidesToShow: 3,
							slidesToScroll: 3,
							draggable: true
						}
					},
					{
						breakpoint: 481,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 2,
							draggable: true
						}
					},
					{
						breakpoint: 301,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1,
							draggable: true
						}
					}
				]
			});
			
			// Carousel dots 2 columns
			$('.carousel-slider.carousel-dots-2col').slick({
				arrows: false,
				dots: true,
				speed: 400,
				slidesToShow: 2,
				slidesToScroll: 2,
				draggable: false,
				responsive: [
					{
						breakpoint: 768,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1,
							draggable: true
						}
					}
				]
			});
			
			// Carousel dots 3 columns
			$('.carousel-slider.carousel-dots-3col').slick({
				arrows: false,
				dots: true,
				speed: 400,
				slidesToShow: 3,
				slidesToScroll: 3,
				draggable: false,
				responsive: [
					{
						breakpoint: 768,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 2,
							draggable: true
						}
					},
					{
						breakpoint: 481,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1,
							draggable: true
						}
					}
				]
			});
			
			// Carousel dots 4 columns
			$('.carousel-slider.carousel-dots-4col').slick({
				arrows: false,
				dots: true,
				speed: 400,
				slidesToShow: 4,
				slidesToScroll: 4,
				draggable: false,
				responsive: [
					{
						breakpoint: 992,
						settings: {
							slidesToShow: 3,
							slidesToScroll: 3
						}
					},
					{
						breakpoint: 768,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 2,
							draggable: true
						}
					},
					{
						breakpoint: 481,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1,
							draggable: true
						}
					}
				]
			});
			
			// Carousel dots 5 columns
			$('.carousel-slider.carousel-dots-5col').slick({
				arrows: false,
				dots: true,
				speed: 400,
				slidesToShow: 5,
				slidesToScroll: 5,
				draggable: false,
				responsive: [
					{
						breakpoint: 992,
						settings: {
							slidesToShow: 4,
							slidesToScroll: 4
						}
					},
					{
						breakpoint: 768,
						settings: {
							slidesToShow: 3,
							slidesToScroll: 3,
							draggable: true
						}
					},
					{
						breakpoint: 481,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 2,
							draggable: true
						}
					},
					{
						breakpoint: 301,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1,
							draggable: true
						}
					}
				]
			});
			
			// Carousel dots 6 columns
			$('.carousel-slider.carousel-dots-6col').slick({
				arrows: false,
				dots: true,
				speed: 400,
				slidesToShow: 6,
				slidesToScroll: 6,
				draggable: false,
				responsive: [
					{
						breakpoint: 1200,
						settings: {
							slidesToShow: 5,
							slidesToScroll: 5
						}
					},
					{
						breakpoint: 992,
						settings: {
							slidesToShow: 4,
							slidesToScroll: 4
						}
					},
					{
						breakpoint: 768,
						settings: {
							slidesToShow: 3,
							slidesToScroll: 3,
							draggable: true
						}
					},
					{
						breakpoint: 481,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 2,
							draggable: true
						}
					},
					{
						breakpoint: 301,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1,
							draggable: true
						}
					}
				]
			});
			
			// Carousel draggable 2 columns
			$('.carousel-slider.carousel-draggable-2col').slick({
				arrows: false,
				speed: 400,
				slidesToShow: 2,
				centerMode: false,
				swipeToSlide: true,
				responsive: [
					{
						breakpoint: 768,
						settings: {
							slidesToShow: 1
						}
					}
				]
			});
			
			// Carousel draggable 3 columns
			$('.carousel-slider.carousel-draggable-3col').slick({
				arrows: false,
				speed: 400,
				slidesToShow: 3,
				centerMode: false,
				swipeToSlide: true,
				responsive: [
					{
						breakpoint: 768,
						settings: {
							slidesToShow: 2
						}
					},
					{
						breakpoint: 481,
						settings: {
							slidesToShow: 1
						}
					}
				]
			});
			
			// Carousel draggable 4 columns
			$('.carousel-slider.carousel-draggable-4col').slick({
				arrows: false,
				speed: 400,
				slidesToShow: 4,
				centerMode: false,
				swipeToSlide: true,
				responsive: [
					{
						breakpoint: 992,
						settings: {
							slidesToShow: 3
						}
					},
					{
						breakpoint: 768,
						settings: {
							slidesToShow: 2
						}
					},
					{
						breakpoint: 481,
						settings: {
							slidesToShow: 1
						}
					}
				]
			});
			
			// Carousel draggable 5 columns
			$('.carousel-slider.carousel-draggable-5col').slick({
				arrows: false,
				speed: 400,
				slidesToShow: 5,
				centerMode: false,
				swipeToSlide: true,
				responsive: [
					{
						breakpoint: 992,
						settings: {
							slidesToShow: 4
						}
					},
					{
						breakpoint: 768,
						settings: {
							slidesToShow: 3
						}
					},
					{
						breakpoint: 481,
						settings: {
							slidesToShow: 2
						}
					},
					{
						breakpoint: 301,
						settings: {
							slidesToShow: 1
						}
					}
				]
			});
			
			// Carousel draggable 6 columns
			$('.carousel-slider.carousel-draggable-6col').slick({
				arrows: false,
				speed: 400,
				slidesToShow: 6,
				centerMode: false,
				swipeToSlide: true,
				responsive: [
					{
						breakpoint: 1200,
						settings: {
							slidesToShow: 5
						}
					},
					{
						breakpoint: 992,
						settings: {
							slidesToShow: 4
						}
					},
					{
						breakpoint: 768,
						settings: {
							slidesToShow: 3
						}
					},
					{
						breakpoint: 481,
						settings: {
							slidesToShow: 2
						}
					},
					{
						breakpoint: 301,
						settings: {
							slidesToShow: 1
						}
					}
				]
			});
			
			// Carousel nav
			$('.carousel-nav-btn a').on('click', function(e) {
				var $slider = $(this).parents('.carousel-nav-btn').siblings('.carousel-slider.carousel-nav-content');
				
				if ($(this).hasClass('nav-prev')) {
					$slider.slick('slickPrev');
				} else {
					$slider.slick('slickNext');
				}
				
				e.preventDefault();
			});
			
			$('.carousel-slider.carousel-nav-content').slick({
				arrows: false,
				speed: 300,
				slidesToShow: 4,
				draggable: false,
				responsive: [
					{
						breakpoint: 992,
						settings: {
							slidesToShow: 3
						}
					},
					{
						breakpoint: 768,
						settings: {
							slidesToShow: 2,
							draggable: true
						}
					},
					{
						breakpoint: 481,
						settings: {
							slidesToShow: 1,
							draggable: true
						}
					}
				]
			});
			
			// Testimonials
			$('.carousel-slider.carousel-testimonials').slick({
				speed: 400,
				fade: true,
				autoplay: true,
				autoplaySpeed: 5000,
				draggable: false,
				responsive: [{
					breakpoint: 768,
					settings: {
						draggable: true
					}
				}]
			});
			
			// Testimonials 2
			$('.carousel-slider.carousel-testimonials2').slick({
				speed: 300,
				autoplay: true,
				autoplaySpeed: 5000,
				draggable: false,
				responsive: [
					{
						breakpoint: 992,
						settings: {
							arrows: false,
							dots: true
						}
					},
					{
						breakpoint: 768,
						settings: {
							arrows: false,
							dots: true,
							draggable: true
						}
					}
				]
			});
			
			// Clients
			$('.carousel-slider.carousel-clients').slick({
				arrows: false,
				speed: 500,
				autoplay: true,
				autoplaySpeed: 5000,
				slidesToShow: 6,
				centerMode: false,
				swipeToSlide: true,
				responsive: [
					{
						breakpoint: 768,
						settings: {
							slidesToShow: 3
						}
					},
					{
						breakpoint: 481,
						settings: {
							slidesToShow: 2
						}
					},
					{
						breakpoint: 301,
						settings: {
							slidesToShow: 1
						}
					}
				]
			});
			
			// Single product thumbnails
			$('.carousel-slider.carousel-product-thumbnails-nav').slick({
				arrows: false,
				speed: 300,
				infinite: false,
				slidesToShow: 5,
				vertical: true,
				focusOnSelect: true,
				verticalSwiping: true,
				swipeToSlide: true,
				asNavFor: '.carousel-slider.carousel-product-thumbnails',
				responsive: [
					{
						breakpoint: 1200
					}
				]
			});
			
			$('.carousel-slider.carousel-product-thumbnails-nav').on('breakpoint');
			
			$('.carousel-slider.carousel-product-thumbnails').slick({
				speed: 300,
				fade: true,
				infinite: false,
				swipe: false,
				asNavFor: '.carousel-slider.carousel-product-thumbnails-nav'
			});
			
			// General slider 2
			$('.carousel-slider.general-slider2').slick({
				arrows: false,
				dots: true,
				speed: 400,
				adaptiveHeight: true
			});
			
			// General slider 2 autoplay
			$('.carousel-slider.general-slider2-autoplay').slick({
				arrows: false,
				dots: true,
				speed: 400,
				adaptiveHeight: true,
				autoplay: true,
				autoplaySpeed: 5000
			});
			
			$('.carousel-slider.general-slider2, .carousel-slider.general-slider2-autoplay').on('beforeChange', function() {
				$('.slick-slide:not(.slick-current.slick-active) .slide-layer', this).each(function() {
					if ($(this).data('animation')) {
						$(this).removeClass('animated ' + $(this).data('animation'));
					}
				});
			});
			
			$('.carousel-slider.general-slider2, .carousel-slider.general-slider2-autoplay').on('afterChange', function() {
				$('.slick-slide .slide-layer', this).each(function() {
					if ($(this).data('animation')) {
						$(this).removeClass('animated ' + $(this).data('animation'));
					}
				});
				
				$('.slick-slide.slick-current.slick-active .slide-layer', this).each(function() {
					if ($(this).data('animation')) {
						$(this).addClass('animation animated ' + $(this).data('animation'));
					}
				});
			});
			
			// General slider
			$('.carousel-slider.general-slider').slick({
				dots: true,
				speed: 300,
				adaptiveHeight: true,
				draggable: false,
				responsive: [{
					breakpoint: 768,
					settings: {
						draggable: true
					}
				}]
			});
			
			// General slider autoplay
			$('.carousel-slider.general-slider-autoplay').slick({
				dots: true,
				speed: 300,
				adaptiveHeight: true,
				draggable: false,
				autoplay: true,
				autoplaySpeed: 5000,
				responsive: [{
					breakpoint: 768,
					settings: {
						draggable: true
					}
				}]
			});
			
		},
		

		
		// Animation functions & settings
		Animation: function() {
			
			// Embed animation effects to HTML elements with CSS3
			$('.animation, .animation-visible').each(function() {
				var $element = $(this);
				
				$element.waypoint(function() {
					var delay = 0;
					
					if ($element.data('delay')) {
						delay = parseInt($element.data('delay'), 0);
					}
					
					if (!$element.hasClass('animated')) {
						setTimeout(function() {
							$element.addClass('animated ' + $element.data('animation'));
						}, delay);
					}
					
					delay = 0;
				}, {
					offset: '80%'
				});
			});
			
		}
		
	};
	
	// Run the main function
	$(function() {
		Unicom.init();
	});
			
			
			
			
			
});