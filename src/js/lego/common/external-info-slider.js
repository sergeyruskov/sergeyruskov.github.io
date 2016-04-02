window.externalInfoSlider = context => {

	let $context = $(`${context}`),
		slider = $(`.external-slide`, $context);

	slider.on(`initialized.owl.carousel`, (event) => {
		$(`.external-info__number-slides`, $context).text(event.item.count);
	});

	slider.owlCarousel({
		nav: true,
		dots: false,
		items: 1,
		navClass: [ 'external-info__arrow-left', 'external-info__arrow-right' ],
		navContainer: `${context} .external-info__block-title`
	});

	slider.on(`changed.owl.carousel`, (event) => {
		$(`.external-info__current-slide-number`, $context).text(event.item.index + 1);
	});

};