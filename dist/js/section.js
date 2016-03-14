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
})(jQuery);
//# sourceMappingURL=section.js.map
