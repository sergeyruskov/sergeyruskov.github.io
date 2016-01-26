'use strict';

jQuery(function ($) {
	//Поиск в меню
	$('#test-menu-search__search-button').click(function () {
		var $parent = $(this).parent();

		$parent.addClass('test-menu-search--open');

		$("#test-menu-search__text").focus().focusout(function () {
			//Таймер для того чтобы браузер успел переместить фокус с тектового инпута на submit
			setTimeout(function () {
				$parent.removeClass('test-menu-search--open');
			}, 200);
		});
	});
	var placeBanner = undefined;
	(placeBanner = function placeBanner() {
		"use strict";

		var $banner = $('#test-result-banner');
		window.innerWidth < 978 ? $banner.insertAfter($('#test-result__result')) : $banner.insertAfter($('#test-result__test-description'));
	})();
	$(window).on('resize', function () {
		"use strict";

		placeBanner();
	});
});
//# sourceMappingURL=scripts.js.map
