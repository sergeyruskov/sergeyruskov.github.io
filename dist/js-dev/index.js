(($) => {
	//Появляющееся слева меню
	$(`#loop-index`).owlCarousel({
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
				autoplay: true,
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
	

	$('#subscribe-block').subscribe();
	showMore($(`#show-more-block`), $(`#show-more-btn`));
})(jQuery);
//# sourceMappingURL=index.js.map
