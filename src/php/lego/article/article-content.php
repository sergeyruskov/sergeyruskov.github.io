<div class="article-content content-wrapper branding--content">

	<div class="article-content__1">

		<? req_with_param(PATH__PHP_COMMON . "/announcements.php",
				[
						"modification" => "announcements--index",
						"first-element-classes" => "hide--phone",
						"second-element-classes" => "hide--phone",
						"third-element-classes" => "hide--tablet",
						"fourth-element-classes" => "hide--tablet hide--laptop hide--phone",
				]
		); ?>

	</div>

	<div class="article-content__2">

		<? req_with_param(PATH__PHP_TEST . "/test-description.php", [
				"title" => "Сочувствовать другим, чтобы сохранить себя",
				"text" => "Сопереживать другим полезно для здоровья, уверены ученые. Они изучили поведение людей с пограничным расстройством личности, которое проявляется в виде эмоциональной неустойчивости, резких и частых перепадов настроения, проблем в личных отношениях. Оказалось, что они не склонны к эмпатии из-за сниженной активности некоторых участков.",
			"author-with-photo" => true,
			"article-img" => true
		]); ?>

	</div>

	<div class="article-content__3">

		<? req_with_param(PATH__PHP_INDEX . "/index-banner.php"); ?>

	</div>

	<div class="article-content__4">

		<? req_with_param(PATH__PHP_ARTICLE . "/article-main-ideas.php"); ?>

	</div>



</div>
