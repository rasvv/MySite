$(function () {
	$('.slider').slick({
		fade: true,
		arrows: true,
		//autoplay: false,
		//adaptiveHeight: true,
		dots: true,
		//infinite: true//,
		// speed: 300,
		// slidesToShow: 1//,
		// adaptiveHeight: true
		centrmode: true
	});
});

// 	$('.photo').on('click', function () {
// 		$('.fullphoto').addClass('active');
// 	})

// 	$('.photo1').on('click', function () {
// 		$('.fullphoto').removeClass('active');
// 	})


$(function () {
	$('.tab__guess').on('click', function () {
		// $('.tabs__puzzle').removeClass('active');
		// $('.tabs__guess').removeClass('active');
		$('.tabs__item').removeClass('active');
		$('.tab__guess').addClass('active');
	})
	$('.tab__puzzle').on('click', function () {
		// $('.tabs__puzzle').removeClass('active');
		// $('.tabs__guess').removeClass('active');
		$('.tabs__item').removeClass('active');
		$('.tab__puzzle').addClass('active');
	})
	$('.tab__password').on('click', function () {
		// $('.tabs__puzzle').removeClass('active');
		// $('.tabs__guess').removeClass('active');
		$('.tabs__item').removeClass('active');
		$('.tab__password').addClass('active');
	})

	// $('.tabs__block').on('click', function () {
	// 	$('.tabs__block').removeClass('active');
	// })
});

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