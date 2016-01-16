$('#test-menu-search__search-button').click(function() {
	const $parent = $(this).parent();

	$parent.addClass('test-menu-search--open');

	$("#test-menu-search__text")
			.focus()
			.focusout(() => {
				$parent.removeClass('test-menu-search--open');
			});

});