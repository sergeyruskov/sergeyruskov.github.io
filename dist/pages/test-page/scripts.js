'use strict';

jQuery(function ($) {
	//Поиск в меню
	$('#test-menu-search__search-button').click(function () {
		var $parent = $(this).parent();

		$parent.addClass('test-menu-search--open');

		$("#test-menu-search__text").focus().focusout(function () {
			$parent.removeClass('test-menu-search--open');
		});
	});
});
//# sourceMappingURL=scripts.js.map
