$('#test-menu-search__search-button').click(function() {
	const $parent = $(this).parent();

	$parent.addClass('test-menu-search--open');

	$("#test-menu-search__text")
			.focus()
			.focusout(() => {
				//Таймер для того чтобы браузер успел переместить фокус с тектового инпута на submit
				setTimeout(()  => {
					$parent.removeClass('test-menu-search--open');
				}, 200);
			});

});