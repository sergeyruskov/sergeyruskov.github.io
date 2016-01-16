//=require owl.carousel.js
//В ИСХОДНИКЕ СЛАЙДЕРА ИЗМЕНЕНО СВОЙСТВО ПРОИЗВОДЯЩЕЕ ДВИЖЕНИЕ СЛАЙДОВ, С transform: translate3d() на transform:
// translateX(), так как 1ое тормозило в Chrome.
$('#loop-index').owlCarousel({
	responsive: {
		620 : {
			center: true,
			items: 1,
			loop: true,
			autoWidth: true,
			autoplay: true,
			autplayTimeout: 4000,
			autoplayHoverPause: true,
			nav: true,
			dots: false,
			smartSpeed: 1500,
			navText: []
		},
		1280 : {
			center: true,
			items: 3,
			loop: true,
			margin: 20,
			autoWidth: true,
			//autoplay: true,
			autplayTimeout: 4000,
			autoplayHoverPause: true,
			nav: true,
			dots: false,
			smartSpeed: 1500,
			activeClass: false,
			centerClass: false,
			navText: []
		}
	}
});
