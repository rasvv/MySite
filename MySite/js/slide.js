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