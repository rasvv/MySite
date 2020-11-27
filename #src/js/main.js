$(function () {
	$('.slider').slick({
		//fade: true,
		// arrows: true,
		//autoplay: false,
		//adaptiveHeight: true,
		//dots: true,
		//infinite: true//,
		// speed: 300,
		// slidesToShow: 1//,
		// adaptiveHeight: true
	});
});

// 	$('.photo').on('click', function () {
// 		$('.fullphoto').addClass('active');
// 	})

// 	$('.photo1').on('click', function () {
// 		$('.fullphoto').removeClass('active');
// 	})


// $(function () {
// 	$('.gallery__item').on('click', function () {
// 		$('.gallery__item').addClass('active');
// 	})

// 	$('.gallery__item').on('click', function () {
// 		$('.gallery__item').removeClass('active');
// 	})
// });

// $(function () {
// 	$('.minimized').on('click', function (event) {
// 		var i_path = $(this).attr('src');
// 		$('body').append('<div id="overlay"></div><div id="magnify"><img src="' + i_path + '"><div id="close-popup"><i></i></div></div>');
// 		$('#magnify').css({
// 			left: ($(window).width() - $('#magnify').outerWidth()) / 2,
// 			// top: ($(document).height() - $('#magnify').outerHeight())/2 upd: 24.10.2016
// 			top: ($(document).height() - $('#magnify').outerHeight()) / 2
// 		});
// 		$('#overlay, #magnify').fadeIn('fast');
// 	});

	// $('body').on('click', '#close-popup, #overlay', function (event) {
	// 	event.preventDefault();
	// 	$('#overlay, #magnify').fadeOut('fast', function () {
	// 		$('#close-popup, #magnify, #overlay').remove();
	// 	});
	// });
// });