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
});
//# sourceMappingURL=scripts.js.map
