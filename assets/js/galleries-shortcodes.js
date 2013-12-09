jQuery(document).ready(function ($) {
	// Enable sliders
	$('.tbs-slider').each(function () {
		// Prepare data
		var $slider = $(this);
		// Apply Swiper
		var $swiper = $slider.swiper({
			wrapperClass: 'tbs-slider-slides',
			slideClass: 'tbs-slider-slide',
			slideActiveClass: 'tbs-slider-slide-active',
			slideVisibleClass: 'tbs-slider-slide-visible',
			pagination: '#' + $slider.attr('id') + ' .tbs-slider-pagination',
			autoplay: $slider.data('autoplay'),
			paginationClickable: true,
			grabCursor: true,
			mode: 'horizontal',
			mousewheelControl: $slider.data('mousewheel'),
			speed: $slider.data('speed'),
			calculateHeight: $slider.hasClass('tbs-slider-responsive-yes'),
			loop: true
		});
		// Prev button
		$slider.find('.tbs-slider-prev').click(function (e) {
			$swiper.swipeNext();
		});
		// Next button
		$slider.find('.tbs-slider-next').click(function (e) {
			$swiper.swipePrev();
		});
	});
	// Enable carousels
	$('.tbs-carousel').each(function () {
		// Prepare data
		var $carousel = $(this),
			$slides = $carousel.find('.tbs-carousel-slide');
		// Apply Swiper
		var $swiper = $carousel.swiper({
			wrapperClass: 'tbs-carousel-slides',
			slideClass: 'tbs-carousel-slide',
			slideActiveClass: 'tbs-carousel-slide-active',
			slideVisibleClass: 'tbs-carousel-slide-visible',
			pagination: '#' + $carousel.attr('id') + ' .tbs-carousel-pagination',
			autoplay: $carousel.data('autoplay'),
			paginationClickable: true,
			grabCursor: true,
			mode: 'horizontal',
			mousewheelControl: $carousel.data('mousewheel'),
			speed: $carousel.data('speed'),
			slidesPerView: ($carousel.data('items') > $slides.length) ? $slides.length : $carousel.data('items'),
			slidesPerGroup: $carousel.data('scroll'),
			calculateHeight: $carousel.hasClass('tbs-carousel-responsive-yes'),
			loop: true
		});
		// Prev button
		$carousel.find('.tbs-carousel-prev').click(function (e) {
			$swiper.swipeNext();
		});
		// Next button
		$carousel.find('.tbs-carousel-next').click(function (e) {
			$swiper.swipePrev();
		});
	});
});