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

		<? req_with_param(PATH__PHP_ARTICLE . "/article-main-content.php"); ?>

	</div>

	<div class="article-content__3">

		<? req_with_param(PATH__PHP_INDEX . "/index-banner.php"); ?>

	</div>

</div>