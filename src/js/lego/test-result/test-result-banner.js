let placeBanner;
(placeBanner = () => {
	"use strict";
	const $banner = $(`#test-result-banner`);
	window.innerWidth < 978 ?
			$banner.insertAfter($(`#test-result__result`)) :
			$banner.insertAfter($(`#test-result__test-description`));
})();
$(window).on(`resize`, () => {
	"use strict";
	placeBanner();
});