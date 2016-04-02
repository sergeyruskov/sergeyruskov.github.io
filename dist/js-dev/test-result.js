(($) => {

	const $banner = $(`#grid__501`);

	deviceLogic(
			[
				{
					logic: () => {
						$banner.insertAfter($(`#test-result__result`));
					},

					desiredDevice: `tablet phone`
				},

				{
					logic: () => {
						$banner.insertAfter($(`#test-result__test-description`));
					},

					desiredDevice: `laptop desktop`
				}
			]
	);

	showMore($(`#show-more-block`), $(`#show-more-btn`));


})(jQuery);
//# sourceMappingURL=test-result.js.map
