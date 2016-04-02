window.showMore = ($showMoreBlock, $showMoreBtn) => {
	"use strict";
	$showMoreBtn.on(`click`, () => {

		$showMoreBtn.addClass(`show-more-btn--load`);

		setTimeout(() => {
			"use strict";
			$showMoreBtn.removeClass(`show-more-btn--load`);
			$showMoreBlock
					.append(
							`<div class="show-more-block__item content-wrapper" style="max-height: 0">
		<div class="mt20">

			<div class="article-block col__1 h430--exclude-phone">

	<a href="#">

		<div class="article-block__wrapper-photo-and-header">

			<div class="article-block__video-icon">


			</div>

			<h3 class="article-block__title">Сохранить страсть в долгом браке</h3>

		</div>

		<p class="article-block__text">«И жили долго и счастливо»: постоянство, задаваемое этой фразой, радует большинство пар. Но в то же время многие жалуются, что желание исчезает из отношений.</p>

	</a>


</div>
		</div>

		<div class="mt20">

			<div class="article-block col__1 h430--exclude-phone">

	<a href="#">

		<div class="article-block__wrapper-photo-and-header">

			<div class="article-block__video-icon">


			</div>

			<h3 class="article-block__title">Сохранить страсть в долгом браке</h3>

		</div>

		<p class="article-block__text">«И жили долго и счастливо»: постоянство, задаваемое этой фразой, радует большинство пар. Но в то же время многие жалуются, что желание исчезает из отношений.</p>

	</a>


</div>
		</div>


		<div class="mt20">

			<div class="article-block col__1 h430--exclude-phone">

	<a href="#">

		<div class="article-block__wrapper-photo-and-header">

			<div class="article-block__video-icon">


			</div>

			<h3 class="article-block__title">Сохранить страсть в долгом браке</h3>

		</div>

		<p class="article-block__text">«И жили долго и счастливо»: постоянство, задаваемое этой фразой, радует большинство пар. Но в то же время многие жалуются, что желание исчезает из отношений.</p>

	</a>



</div>
		</div>

		<div class="hide--laptop mt20">

			<div class="article-block col__1 h430--exclude-phone">

	<a href="#">

		<div class="article-block__wrapper-photo-and-header">

			<div class="article-block__video-icon">


			</div>

			<h3 class="article-block__title">Сохранить страсть в долгом браке</h3>

		</div>

		<p class="article-block__text">«И жили долго и счастливо»: постоянство, задаваемое этой фразой, радует большинство пар. Но в то же время многие жалуются, что желание исчезает из отношений.</p>

	</a>


</div>
		</div>

	</div>`
					);

			//Почему то не отрабатывает transition без setTimeout
			setTimeout(() => {
				"use strict";
				$showMoreBlock
						.find(`.show-more-block__item:last-child`).css(`max-height`, `3000px`);
			}, 100);

		}, 1000);

	});
};