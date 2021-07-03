$(function() {
	$('.gallery-inner').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				return item.el.attr('title') + '<small>Arch-move</small>';
			}
		}
	});

	$('.reviews-slider').slick({
		speed: 300,
		slidesToShow: 1,
		slidesToScroll: 1,
		nextArrow: '<button type="button" class="slick-arrow slick-prev"></button>',
		prevArrow: '<button type="button" class="slick-arrow slick-next"></button>'
		

	});
});
