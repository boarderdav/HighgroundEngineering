$(document).ready(function() {
    
	//button animation
//	$('.button').on('mouseenter', function(){
//		$(this).animate({'top': '-10px', 'opacity': '0.7'}, 'fast');
//		//$(this).css({'background-color': '#51988C'}, 'slow');
//	});
//	
//	$('.button').on('mouseleave', function(){
//		$(this).animate({'top': '0px', 'opacity': '1'}, 'fast');
//		//$(this).css({'background-color': '#009F84'}, 'slow');
//	});
//	
//	$('.button').on('click', function(event){
//		$('.footertest').toggle('slow');
//		event.preventDefault();
//	});
	
//$('img').on('mouseover', function() {
//  $(this).find('svg').children().css({
//    'fill': 'green',
//    'stroke': 'white'
//  });
//});
//$('a').on('mouseleave', function() {
//  $(this).find('svg').children().css({
//    'fill': 'black',
//    'stroke': 'black'
//  });
//});
//	


// code from above wrapped into a function
//replaceSVG();
//
//// hover function
//// hover over an element, and find the SVG that you want to change
//$('.element').hover(function() {
//    var el = $(this);
//    var svg = el.find('svg path');
//    svg.attr('fill', '#CCC');
//}, function() {
//    var el = $(this);
//    var svg = el.find('svg path');
//    svg.attr('fill', '#3A3A3A');
//});

///*
// * Replace all SVG images with inline SVG
// */
//jQuery('img.svg').each(function(){
//    var $img = jQuery(this);
//    var imgID = $img.attr('id');
//    var imgClass = $img.attr('class');
//    var imgURL = $img.attr('src');
//
//    jQuery.get(imgURL, function(data) {
//        // Get the SVG tag, ignore the rest
//        var $svg = jQuery(data).find('svg');
//
//        // Add replaced image's ID to the new SVG
//        if(typeof imgID !== 'undefined') {
//            $svg = $svg.attr('id', imgID);
//        }
//        // Add replaced image's classes to the new SVG
//        if(typeof imgClass !== 'undefined') {
//            $svg = $svg.attr('class', imgClass+' replaced-svg');
//        }
//
//        // Remove any invalid XML tags as per http://validator.w3.org
//        $svg = $svg.removeAttr('xmlns:a');
//
//        // Replace image with new SVG
//        $img.replaceWith($svg);
//
//    }, 'xml');
//
//});


//	$('#expandMotion').on('mouseenter', function() {
//		$(this).animate({'width': '20px'}, 'slow');
//	});
//	$('#expandMotion').on('mouseleave', function() {
//		$(this).animate({'width': '0px'}, 'slow')
//	});
//
	//image animation
	$('#photo1').on('mouseenter', function(){
		$(this).animate({'top': '-10px', 'opacity': '0.8'}, 'fast');
	});
	$('#photo1').on('mouseleave', function(){
		$(this).animate({'top': '0px', 'opacity': '1'}, 'fast');
	});
	
	$('#photo2').on('mouseenter', function(){
		$(this).animate({'top': '-10px', 'opacity': '0.8'}, 'fast');
	});
	$('#photo2').on('mouseleave', function(){
		$(this).animate({'top': '0px', 'opacity': '1'}, 'fast');
	});

	$('#photo3').on('mouseenter', function(){
		$(this).animate({'top': '-10px', 'opacity': '0.8'}, 'fast');
	});
	$('#photo3').on('mouseleave', function(){
		$(this).animate({'top': '0px', 'opacity': '1'}, 'fast');
	});
	
	$('#photo4').on('mouseenter', function(){
		$(this).animate({'top': '-10px', 'opacity': '0.8'}, 'fast');
	});
	$('#photo4').on('mouseleave', function(){
		$(this).animate({'top': '0px', 'opacity': '1'}, 'fast');
	});
	
	//social icon animation
	$('#facebook').on('mouseenter', function(){
		$(this).animate({'opacity': '0.7'}, 'fast');
	});
	$('#facebook').on('mouseleave', function(){
		$(this).animate({'opacity': '1'}, 'fast');
	});
	$('#google').on('mouseenter', function(){
		$(this).animate({'opacity': '0.7'}, 'fast');
	});
	$('#google').on('mouseleave', function(){
		$(this).animate({'opacity': '1'}, 'fast');
	});
	$('#twitter').on('mouseenter', function(){
		$(this).animate({'opacity': '0.7'}, 'fast');
	});
	$('#twitter').on('mouseleave', function(){
		$(this).animate({'opacity': '1'}, 'fast');
	});	
	$('#kickstarter').on('mouseenter', function(){
		$(this).animate({'opacity': '0.7'}, 'fast');
	});
	$('#kickstarter').on('mouseleave', function(){
		$(this).animate({'opacity': '1'}, 'fast');
	});	
	
		
	$('.single-item').slick({
        dots: true,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1,
		autoplay: false,
        autoplaySpeed: 3000
    });
    $('.multiple-items').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 3
    });
    $('.one-time').slick({
        dots: true,
        infinite: false,
        placeholders: false,
        speed: 300,
        slidesToShow: 5,
        touchMove: false,
        slidesToScroll: 1
    });
    $('.uneven').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4
    });
    $('.responsive').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
        }, {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        }, {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });

    $('.center').slick({
        centerMode: true,
        infinite: true,
        centerPadding: '60px',
        slidesToShow: 3,
        responsive: [{
            breakpoint: 768,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 3
            }
        }, {
            breakpoint: 480,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
            }
        }]
    });
    $('.lazy').slick({
        lazyLoad: 'ondemand',
        slidesToShow: 3,
        slidesToScroll: 1
    });
    $('.autoplay').slick({
        dots: true,
        infinite: true,
        speed: 500,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000
    });

    $('.fade').slick({
        dots: true,
        infinite: true,
        speed: 500,
        fade: true,
        slide: 'div',
        cssEase: 'linear'
    });

    $('.add-remove').slick({
        dots: true,
        slidesToShow: 3,
        slidesToScroll: 3
    });
    var slideIndex = 1;
    $('.js-add-slide').on('click', function() {
        slideIndex++;
        $('.add-remove').slickAdd('<div><h3>' + slideIndex + '</h3></div>');
    });

    $('.js-remove-slide').on('click', function() {
        $('.add-remove').slickRemove(slideIndex - 1);
        if (slideIndex !== 0){
            slideIndex--;
        } 
    });

    $('.filtering').slick({
        dots: true,
        slidesToShow: 4,
        slidesToScroll: 4
    });
    var filtered = false;
    $('.js-filter').on('click', function() {
        if (filtered === false) {
            $('.filtering').slickFilter(':even');
            $(this).text('Unfilter Slides');
            filtered = true;
        } else {
            $('.filtering').slickUnfilter();
            $(this).text('Filter Slides');
            filtered = false;
        }
    });
    
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: true,
        centerMode: true,
        focusOnSelect: true
    });

    $(window).on('scroll', function() {
        if ($(window).scrollTop() > 166) {
            $('.fixed-header').show();
        } else {
            $('.fixed-header').hide();
        }
    });

    $('ul.nav a').on('click', function(event) {
        event.preventDefault();
        var targetID = $(this).attr('href');
        var targetST = $(targetID).offset().top - 48;
        $('body, html').animate({
            scrollTop: targetST + 'px'
        }, 300);
    });

});