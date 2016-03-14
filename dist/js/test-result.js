'use strict';

(function ($) {
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
	//deviceLogic(
	//		[
	//			{
	//				logic: () => {
	//					console.log(1);
	//				},
	//
	//				desiredDevice: `phone`
	//			},
	//
	//			{
	//				logic: () => {
	//					console.log(2);
	//				},
	//
	//				desiredDevice: `desktop laptop tablet`
	//			}
	//		]
	//);

	function deviceLogic() {
		"use strict";
		//Имя пользовательского устройства

		var opt = arguments.length <= 0 || arguments[0] === undefined ? {} : arguments[0];
		var oneTime = arguments.length <= 1 || arguments[1] === undefined ? false : arguments[1];
		var devices = arguments.length <= 2 || arguments[2] === undefined ? [{
			min: 0,
			max: 658,
			name: 'phone'
		}, {
			min: 657,
			max: 978,
			name: 'tablet'
		}, {
			min: 977,
			max: 1297,
			name: 'laptop'
		}, {
			min: 1296,
			max: Number.MAX_VALUE,
			name: 'desktop'
		}] : arguments[2];
		var currentDevice = '';

		//Определяем пользовательское устройство
		function checkDevice() {
			"use strict";

			var devicesLength = devices.length;

			function checkWidth(opt) {
				"use strict";

				if (window.innerWidth > opt.min && window.innerWidth < opt.max) {
					devicesLength = 0;
					currentDevice = opt.name;
				}
			}

			while (devicesLength) {
				checkWidth(devices[--devicesLength]);
			}
		}

		//Запускаем указаную разработчиком логику, если указанный им девайс совпал с пользовательским
		function _deviceLogic(opt) {
			if (typeof opt.desiredDevice === 'undefined' || typeof opt.logic === 'undefined') return;

			var devices = opt.desiredDevice.split(' ');
			var deviceLength = devices.length;

			while (deviceLength) {
				if (currentDevice === devices[--deviceLength]) opt.logic();
			}
		}

		if (!oneTime) {

			$(window).on('resize', function () {
				"use strict";

				checkDevice();

				//Парсим указанные разработчиком данные для запуска пользовательской логики
				for (var logicAndDeviceName in opt) {

					if (opt.hasOwnProperty(logicAndDeviceName)) {

						_deviceLogic({
							desiredDevice: opt[logicAndDeviceName].desiredDevice,
							logic: opt[logicAndDeviceName].logic
						});
					}
				}
			}).trigger('resize');
		} else {

			checkDevice();

			//Парсим указанные разработчиком данные для запуска пользовательской логики
			for (var logicAndDeviceName in opt) {

				if (opt.hasOwnProperty(logicAndDeviceName)) {

					_deviceLogic({
						desiredDevice: opt[logicAndDeviceName].desiredDevice,
						logic: opt[logicAndDeviceName].logic
					});
				}
			}
		}
	}
	var $showMoreBlock = $('#show-more-block'),
	    $showMoreBtn = $('#show-more-btn');

	$showMoreBtn.on('click', function () {

		$showMoreBtn.addClass('show-more-btn--load');

		setTimeout(function () {
			"use strict";

			$showMoreBtn.removeClass('show-more-btn--load');
			$showMoreBlock.append('<div class="show-more-block__item content-wrapper" style="max-height: 0">\n\t\t\t<div>\n\t\n\t\t\t\t<div class="article-block col__1 h430--exclude-phone">\n\t\n\t\t<a href="#">\n\t\n\t\t\t<div class="article-block__wrapper-photo-and-header">\n\t\n\t\t\t\t<div class="article-block__video-icon">\n\t\n\t\t\t\t\t<img src="../../img/index/author-article-24.jpg" alt="" class="img-responsive">\n\t\n\t\t\t\t</div>\n\t\n\t\t\t\t<h3 class="article-block__title">Сохранить страсть в долгом браке</h3>\n\t\n\t\t\t</div>\n\t\n\t\t\t<p class="article-block__text">«И жили долго и счастливо»: постоянство, задаваемое этой фразой, радует большинство пар. Но в то же время многие жалуются, что желание исчезает из отношений.</p>\n\t\n\t\t</a>\n\t\n\t\n\t</div>\n\t\t\t</div>\n\t\n\t\t\t<div>\n\t\n\t\t\t\t<div class="article-block col__1 h430--exclude-phone">\n\t\n\t\t<a href="#">\n\t\n\t\t\t<div class="article-block__wrapper-photo-and-header">\n\t\n\t\t\t\t<div class="article-block__video-icon">\n\t\n\t\t\t\t\t<img src="../../img/index/author-article-24.jpg" alt="" class="img-responsive">\n\t\n\t\t\t\t</div>\n\t\n\t\t\t\t<h3 class="article-block__title">Сохранить страсть в долгом браке</h3>\n\t\n\t\t\t</div>\n\t\n\t\t\t<p class="article-block__text">«И жили долго и счастливо»: постоянство, задаваемое этой фразой, радует большинство пар. Но в то же время многие жалуются, что желание исчезает из отношений.</p>\n\t\n\t\t</a>\n\t\n\t\n\t</div>\n\t\t\t</div>\n\t\n\t\n\t\t\t<div>\n\t\n\t\t\t\t<div class="article-block col__1 h430--exclude-phone">\n\t\n\t\t<a href="#">\n\t\n\t\t\t<div class="article-block__wrapper-photo-and-header">\n\t\n\t\t\t\t<div class="article-block__video-icon">\n\t\n\t\t\t\t\t<img src="../../img/index/author-article-24.jpg" alt="" class="img-responsive">\n\t\n\t\t\t\t</div>\n\t\n\t\t\t\t<h3 class="article-block__title">Сохранить страсть в долгом браке</h3>\n\t\n\t\t\t</div>\n\t\n\t\t\t<p class="article-block__text">«И жили долго и счастливо»: постоянство, задаваемое этой фразой, радует большинство пар. Но в то же время многие жалуются, что желание исчезает из отношений.</p>\n\t\n\t\t</a>\n\t\n\t\n\t</div>\n\t\t\t</div>\n\t\n\t\t\t<div class="hide--laptop">\n\t\n\t\t\t\t<div class="article-block col__1 h430--exclude-phone">\n\t\n\t\t<a href="#">\n\t\n\t\t\t<div class="article-block__wrapper-photo-and-header">\n\t\n\t\t\t\t<div class="article-block__video-icon">\n\t\n\t\t\t\t\t<img src="../../img/index/author-article-24.jpg" alt="" class="img-responsive">\n\t\n\t\t\t\t</div>\n\t\n\t\t\t\t<h3 class="article-block__title">Сохранить страсть в долгом браке</h3>\n\t\n\t\t\t</div>\n\t\n\t\t\t<p class="article-block__text">«И жили долго и счастливо»: постоянство, задаваемое этой фразой, радует большинство пар. Но в то же время многие жалуются, что желание исчезает из отношений.</p>\n\t\n\t\t</a>\n\t\n\t\n\t</div>\n\t\t\t</div>\n\t\n\t\t</div>');

			//Почему то не отрабатывает transition без setTimeout
			setTimeout(function () {
				"use strict";

				$showMoreBlock.find('.show-more-block__item:last-child').css('max-height', '3000px');
			}, 10);
		}, 3000);
	});

	var $banner = $('#test-result-banner');

	deviceLogic([{
		logic: function logic() {
			$banner.insertAfter($('#test-result__result'));
		},

		desiredDevice: 'tablet phone'
	}, {
		logic: function logic() {
			$banner.insertAfter($('#test-result__test-description'));
		},

		desiredDevice: 'laptop desktop'
	}]);
})(jQuery);
//# sourceMappingURL=test-result.js.map
