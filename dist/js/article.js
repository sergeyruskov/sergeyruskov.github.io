"use strict";

(function ($) {
		var $showMoreBlock = $("#show-more-block"),
		    $showMoreBtn = $("#show-more-btn");

		$showMoreBtn.on("click", function () {

				$showMoreBtn.addClass("show-more-btn--load");

				setTimeout(function () {
						"use strict";

						$showMoreBtn.removeClass("show-more-btn--load");
						$showMoreBlock.append("<div class=\"show-more-block__item content-wrapper\" style=\"max-height: 0\">\n\t\t\t<div class=\"mt20\">\n\t\n\t\t\t\t<div class=\"article-block col__1 h430--exclude-phone\">\n\t\n\t\t<a href=\"#\">\n\t\n\t\t\t<div class=\"article-block__wrapper-photo-and-header\">\n\t\n\t\t\t\t<div class=\"article-block__video-icon\">\n\t\n\t\t\t\t\t<img src=\"../img/index/author-article-24.jpg\" alt=\"\" class=\"img-responsive\">\n\t\n\t\t\t\t</div>\n\t\n\t\t\t\t<h3 class=\"article-block__title\">Сохранить страсть в долгом браке</h3>\n\t\n\t\t\t</div>\n\t\n\t\t\t<p class=\"article-block__text\">«И жили долго и счастливо»: постоянство, задаваемое этой фразой, радует большинство пар. Но в то же время многие жалуются, что желание исчезает из отношений.</p>\n\t\n\t\t</a>\n\t\n\t\n\t</div>\n\t\t\t</div>\n\t\n\t\t\t<div class=\"mt20\">\n\t\n\t\t\t\t<div class=\"article-block col__1 h430--exclude-phone\">\n\t\n\t\t<a href=\"#\">\n\t\n\t\t\t<div class=\"article-block__wrapper-photo-and-header\">\n\t\n\t\t\t\t<div class=\"article-block__video-icon\">\n\t\n\t\t\t\t\t<img src=\"../img/index/author-article-24.jpg\" alt=\"\" class=\"img-responsive\">\n\t\n\t\t\t\t</div>\n\t\n\t\t\t\t<h3 class=\"article-block__title\">Сохранить страсть в долгом браке</h3>\n\t\n\t\t\t</div>\n\t\n\t\t\t<p class=\"article-block__text\">«И жили долго и счастливо»: постоянство, задаваемое этой фразой, радует большинство пар. Но в то же время многие жалуются, что желание исчезает из отношений.</p>\n\t\n\t\t</a>\n\t\n\t\n\t</div>\n\t\t\t</div>\n\t\n\t\n\t\t\t<div class=\"mt20\">\n\t\n\t\t\t\t<div class=\"article-block col__1 h430--exclude-phone\">\n\t\n\t\t<a href=\"#\">\n\t\n\t\t\t<div class=\"article-block__wrapper-photo-and-header\">\n\t\n\t\t\t\t<div class=\"article-block__video-icon\">\n\t\n\t\t\t\t\t<img src=\"../img/index/author-article-24.jpg\" alt=\"\" class=\"img-responsive\">\n\t\n\t\t\t\t</div>\n\t\n\t\t\t\t<h3 class=\"article-block__title\">Сохранить страсть в долгом браке</h3>\n\t\n\t\t\t</div>\n\t\n\t\t\t<p class=\"article-block__text\">«И жили долго и счастливо»: постоянство, задаваемое этой фразой, радует большинство пар. Но в то же время многие жалуются, что желание исчезает из отношений.</p>\n\t\n\t\t</a>\n\t\n\t\n\t</div>\n\t\t\t</div>\n\t\n\t\t\t<div class=\"hide--laptop mt20\">\n\t\n\t\t\t\t<div class=\"article-block col__1 h430--exclude-phone\">\n\t\n\t\t<a href=\"#\">\n\t\n\t\t\t<div class=\"article-block__wrapper-photo-and-header\">\n\t\n\t\t\t\t<div class=\"article-block__video-icon\">\n\t\n\t\t\t\t\t<img src=\"../img/index/author-article-24.jpg\" alt=\"\" class=\"img-responsive\">\n\t\n\t\t\t\t</div>\n\t\n\t\t\t\t<h3 class=\"article-block__title\">Сохранить страсть в долгом браке</h3>\n\t\n\t\t\t</div>\n\t\n\t\t\t<p class=\"article-block__text\">«И жили долго и счастливо»: постоянство, задаваемое этой фразой, радует большинство пар. Но в то же время многие жалуются, что желание исчезает из отношений.</p>\n\t\n\t\t</a>\n\t\n\t\n\t</div>\n\t\t\t</div>\n\t\n\t\t</div>");

						//Почему то не отрабатывает transition без setTimeout
						setTimeout(function () {
								"use strict";

								$showMoreBlock.find(".show-more-block__item:last-child").css("max-height", "3000px");
						}, 100);
				}, 1000);
		});

		$('#index-subscribe').subscribe({
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

		var $banner = $("#grid__3");

		deviceLogic([{
				logic: function logic() {
						$banner.insertAfter($("#article-main-content__img"));
				},

				desiredDevice: "phone"
		}, {
				logic: function logic() {
						$banner.insertAfter($("#article-main-content__article-external-info-wrapper"));
				},

				desiredDevice: "tablet"
		}, {
				logic: function logic() {
						$banner.insertAfter($("#grid__2"));
				},

				desiredDevice: "laptop desktop"
		}]);
})(jQuery);
//# sourceMappingURL=article.js.map
