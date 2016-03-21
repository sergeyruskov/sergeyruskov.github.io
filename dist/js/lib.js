"use strict";

var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol ? "symbol" : typeof obj; };

(function ($) {
	//subscribe.js и device-logic.js подключаются вместе
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

	window.deviceLogic = function () {
		"use strict";
		//Имя пользовательского устройства

		var opt = arguments.length <= 0 || arguments[0] === undefined ? {} : arguments[0];
		var oneTime = arguments.length <= 1 || arguments[1] === undefined ? false : arguments[1];
		var devices = arguments.length <= 2 || arguments[2] === undefined ? [{
			min: 0,
			max: 658,
			name: "phone"
		}, {
			min: 657,
			max: 978,
			name: "tablet"
		}, {
			min: 977,
			max: 1297,
			name: "laptop"
		}, {
			min: 1296,
			max: Number.MAX_VALUE,
			name: "desktop"
		}] : arguments[2];
		var currentDevice = "";

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
			if (typeof opt.desiredDevice === "undefined" || typeof opt.logic === "undefined") return;

			var devices = opt.desiredDevice.split(" ");
			var deviceLength = devices.length;

			while (deviceLength) {
				if (currentDevice === devices[--deviceLength]) opt.logic();
			}
		}

		if (!oneTime) {

			$(window).on("resize", function () {
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
			}).trigger("resize");
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
	};
	var $showMoreBlock = $("#show-more-block"),
	    $showMoreBtn = $("#show-more-btn");

	$showMoreBtn.on("click", function () {

		$showMoreBtn.addClass("show-more-btn--load");

		setTimeout(function () {
			"use strict";

			$showMoreBtn.removeClass("show-more-btn--load");
			$showMoreBlock.append("<div class=\"show-more-block__item content-wrapper\" style=\"max-height: 0\">\n\t\t\t<div class=\"mt20\">\n\t\n\t\t\t\t<div class=\"article-block col__1 h430--exclude-phone\">\n\t\n\t\t<a href=\"#\">\n\t\n\t\t\t<div class=\"article-block__wrapper-photo-and-header\">\n\t\n\t\t\t\t<div class=\"article-block__video-icon\">\n\t\n\t\t\t\t\t<img src=\"../img/index/author-article-24.jpg\" alt=\"\" class=\"img-responsive\">\n\t\n\t\t\t\t</div>\n\t\n\t\t\t\t<h3 class=\"article-block__title\">Сохранить страсть в долгом браке</h3>\n\t\n\t\t\t</div>\n\t\n\t\t\t<p class=\"article-block__text\">«И жили долго и счастливо»: постоянство, задаваемое этой фразой, радует большинство пар. Но в то же время многие жалуются, что желание исчезает из отношений.</p>\n\t\n\t\t</a>\n\t\n\t\n\t</div>\n\t\t\t</div>\n\t\n\t\t\t<div class=\"mt20\">\n\t\n\t\t\t\t<div class=\"article-block col__1 h430--exclude-phone\">\n\t\n\t\t<a href=\"#\">\n\t\n\t\t\t<div class=\"article-block__wrapper-photo-and-header\">\n\t\n\t\t\t\t<div class=\"article-block__video-icon\">\n\t\n\t\t\t\t\t<img src=\"../img/index/author-article-24.jpg\" alt=\"\" class=\"img-responsive\">\n\t\n\t\t\t\t</div>\n\t\n\t\t\t\t<h3 class=\"article-block__title\">Сохранить страсть в долгом браке</h3>\n\t\n\t\t\t</div>\n\t\n\t\t\t<p class=\"article-block__text\">«И жили долго и счастливо»: постоянство, задаваемое этой фразой, радует большинство пар. Но в то же время многие жалуются, что желание исчезает из отношений.</p>\n\t\n\t\t</a>\n\t\n\t\n\t</div>\n\t\t\t</div>\n\t\n\t\n\t\t\t<div class=\"mt20\">\n\t\n\t\t\t\t<div class=\"article-block col__1 h430--exclude-phone\">\n\t\n\t\t<a href=\"#\">\n\t\n\t\t\t<div class=\"article-block__wrapper-photo-and-header\">\n\t\n\t\t\t\t<div class=\"article-block__video-icon\">\n\t\n\t\t\t\t\t<img src=\"../img/index/author-article-24.jpg\" alt=\"\" class=\"img-responsive\">\n\t\n\t\t\t\t</div>\n\t\n\t\t\t\t<h3 class=\"article-block__title\">Сохранить страсть в долгом браке</h3>\n\t\n\t\t\t</div>\n\t\n\t\t\t<p class=\"article-block__text\">«И жили долго и счастливо»: постоянство, задаваемое этой фразой, радует большинство пар. Но в то же время многие жалуются, что желание исчезает из отношений.</p>\n\t\n\t\t</a>\n\t\n\t\n\t\n\t</div>\n\t\t\t</div>\n\t\n\t\t\t<div class=\"hide--laptop mt20\">\n\t\n\t\t\t\t<div class=\"article-block col__1 h430--exclude-phone\">\n\t\n\t\t<a href=\"#\">\n\t\n\t\t\t<div class=\"article-block__wrapper-photo-and-header\">\n\t\n\t\t\t\t<div class=\"article-block__video-icon\">\n\t\n\t\t\t\t\t<img src=\"../img/index/author-article-24.jpg\" alt=\"\" class=\"img-responsive\">\n\t\n\t\t\t\t</div>\n\t\n\t\t\t\t<h3 class=\"article-block__title\">Сохранить страсть в долгом браке</h3>\n\t\n\t\t\t</div>\n\t\n\t\t\t<p class=\"article-block__text\">«И жили долго и счастливо»: постоянство, задаваемое этой фразой, радует большинство пар. Но в то же время многие жалуются, что желание исчезает из отношений.</p>\n\t\n\t\t</a>\n\t\n\t\n\t</div>\n\t\t\t</div>\n\t\n\t\t</div>");

			//Почему то не отрабатывает transition без setTimeout
			setTimeout(function () {
				"use strict";

				$showMoreBlock.find(".show-more-block__item:last-child").css("max-height", "3000px");
			}, 100);
		}, 1000);
	});
	$.fn.subscribe = function (opt) {

		if ((typeof opt === "undefined" ? "undefined" : _typeof(opt)) !== "object") opt = {};

		opt = $.extend({
			submit: '#subscribe-block__submit',
			inputEmail: '#subscribe-block__input-email',
			wrapperInputEmail: '#subscribe-block__wrapper-input-email',
			normalStateWrapperInput: "subscribe-block__wrapper-input-email--state-normal",
			errorStateWrapperInput: "subscribe-block__wrapper-input-email--state-error",
			successStateWrapperInput: "subscribe-block__wrapper-input-email--state-success",
			normalStateInput: "subscribe-block__input-email--state-normal",
			errorStateInput: "subscribe-block__input-email--state-error",
			successStateInput: "subscribe-block__input-email--state-success",
			submitClassInactive: "btn--additional-brand--inactive",
			normalMsg: "Введите ваш e-mail",
			successMsgPhone: "Спасибо",
			successMsgBigDevices: "Спасибо. Ваш email добавлен",
			submitText: "Подписаться",
			submitTextPhone: "Ок"
		}, opt);

		var $self = $(this),
		    $submit = $(opt.submit, $self),
		    $inputEmail = $(opt.inputEmail, $self),
		    $wrapperInputEmail = $(opt.wrapperInputEmail, $self);

		var validateStateEmail = false;

		deviceLogic([{
			logic: function logic() {
				"use strict";

				$submit.val(opt.submitTextPhone);
			},

			desiredDevice: "phone"
		}, {
			logic: function logic() {
				"use strict";

				$submit.val(opt.submitText);
			},

			desiredDevice: "desktop laptop tablet"
		}]);

		function validate() {
			"use strict";

			var email = $.trim($inputEmail.val()).toLowerCase();
			validateStateEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
		}

		function normalState() {
			"use strict";

			$wrapperInputEmail.removeClass(opt.errorStateWrapperInput + " " + opt.successStateWrapperInput).addClass("" + opt.normalStateWrapperInput);
			$inputEmail.removeClass(opt.errorStateInput + " " + opt.successStateInput).addClass("" + opt.normalStateInput);
		}

		function successState() {
			"use strict";

			$wrapperInputEmail.removeClass(opt.errorStateWrapperInput + " " + opt.normalStateWrapperInput).addClass("" + opt.successStateWrapperInput);
			$inputEmail.removeClass(opt.errorStateInput + " " + opt.normalStateInput).addClass("" + opt.successStateInput);
		}

		function errorState() {
			"use strict";

			$wrapperInputEmail.removeClass(opt.successStateWrapperInput + " " + opt.normalStateWrapperInput).addClass("" + opt.errorStateWrapperInput);
			$inputEmail.removeClass(opt.successStateInput + " " + opt.normalStateInput).addClass("" + opt.errorStateInput);
		}

		$inputEmail.on("keyup", function () {
			"use strict";

			validate();
			normalState();
			$submit.toggleClass(opt.submitClassInactive, !validateStateEmail);
		});

		$submit.on("click", function (e) {
			"use strict";

			e.preventDefault();
			validate();

			if (validateStateEmail) {
				successState();
				$inputEmail.val("");

				deviceLogic([{
					logic: function logic() {
						"use strict";

						$inputEmail.attr("placeholder", opt.successMsgPhone).addClass("subscribe-block__input-email--state-success-placeholder");
					},

					desiredDevice: "phone"
				}, {
					logic: function logic() {
						$inputEmail.attr("placeholder", opt.successMsgBigDevices).addClass("subscribe-block__input-email--state-success-placeholder");
					},

					desiredDevice: "desktop laptop tablet"
				}], true);

				setTimeout(function () {
					"use strict";

					normalState();
					$inputEmail.attr("placeholder", opt.normalMsg).removeClass("subscribe-block__input-email--state-success-placeholder");
				}, 3000);

				validateStateEmail = false;
			} else errorState();
		});
	};
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

	$('#subscribe-block').subscribe({
		submit: '#index-subscribe__submit',
		inputEmail: '#index-subscribe__input-email',
		wrapperInputEmail: '#index-subscribe__wrapper-input-email',
		normalStateWrapperInput: "index-subscribe__wrapper-input-email--state-normal",
		errorStateWrapperInput: "index-subscribe__wrapper-input-email--state-error",
		successStateWrapperInput: "index-subscribe__wrapper-input-email--state-success",
		normalStateInput: "index-subscribe__input-email--state-normal",
		errorStateInput: "index-subscribe__input-email--state-error",
		successStateInput: "index-subscribe__input-email--state-success",
		submitClassInactive: "btn--additional-brand--inactive",
		successMsgPhone: "Спасибо",
		successMsgBigDevices: "Спасибо. Ваш email добавлен"
	});
})(jQuery);
//# sourceMappingURL=lib.js.map
