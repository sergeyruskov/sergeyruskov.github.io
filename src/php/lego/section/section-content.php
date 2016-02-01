<div class="content-wrapper test-content <?= $params["branding"]; ?>">

	<div class="test-content__1">

		<? req_with_param(PATH__PHP_COMMON . "/announcements.php",
				[
						"first-element-classes" => "",
						"second-element-classes" => "hide--phone",
						"third-element-classes" => "hide--tablet hide--phone",
						"fourth-element-classes" => "hide--laptop hide--tablet hide--phone",
				]
		); ?>

	</div>

	<div class="test-content__2">

		<? req_with_param(PATH__PHP_COMMON . "/section-name.php", ["name" => "Тесты"]); ?>

	</div>

	<div class="test-content__3">

		<? req_with_param(PATH__PHP_COMMON . "/test/test-menu.php",
				["menu" => ["Общение", "Двое", "Секс", "Семья", "Красота", "Работа и карьера", "IQ"],                            "search" => true]
		); ?>

	</div>

	<div class="test-content__4">

		<? req_with_param(PATH__PHP_INDEX . "/index-article-block.php", ["title" => "6 страхов, которые достались нам в тяжелое наследство", "text" => "Боитесь темноты, не выносите змей? Возможно, в этом стоит винить (или благодарить) наших далеких предков: страх перед животными и явлениями природы не раз спасал им жизнь.", "img" => "/index/author-article-1.jpg"]); ?>
	</div>

	<div class="test-content__5">
		<? req_with_param(PATH__PHP_INDEX . "/index-banner.php") ?>
	</div>

	<div class="test-content__6">
		<? req_with_param(PATH__PHP_TEST . "/test-questions.php"); ?>
	</div>

	<div class="test-content__7">
		<? req_with_param(PATH__PHP_COMMON . "/social-blocks.php"); ?>
	</div>

	<div class="test-content__8">
		<? req_with_param(PATH__PHP_TEST . "/test-rubric-title.php", ["text" => "Популярные тесты"]); ?>
	</div>

	<div class="test-content__9">
		<? req_with_param(PATH__PHP_INDEX . "/index-test-block.php", [
				"img" => "/index/test.jpg",
				"rubric" => "Красота",
				"title" => "Готовы ли вы изменить свой облик?",
				"test-counter" => "Тест пройден 16159 раз",
				"btn-text" => "Пройти тест",
				"hide-block-title" => true,
				"wrapper-img-modification" => "index-test-block__wrapper-img--test-page"
		]); ?>
	</div>

	<div class="test-content__10">
		<? req_with_param(PATH__PHP_INDEX . "/index-test-block.php", [
				"img" => "/index/test.jpg",
				"rubric" => "Личность",
				"title" => "Какой у вас тип харизмы?",
				"test-counter" => "Тест пройден 77645 раз",
				"btn-text" => "Пройти тест",
				"hide-block-title" => true,
				"wrapper-img-modification" => "index-test-block__wrapper-img--test-page"
		]); ?>
	</div>

	<div class="test-content__11 hide--tablet hide--phone">
		<? req_with_param(PATH__PHP_INDEX . "/index-test-block.php", [
				"img" => "/index/test.jpg",
				"rubric" => "Личность",
				"title" => "Вы интроверт или экстраверт?",
				"test-counter" => "Тест пройден 153451 раз",
				"btn-text" => "Пройти тест",
				"hide-block-title" => true,
				"wrapper-img-modification" => "index-test-block__wrapper-img--test-page"
		]); ?>
	</div>

	<div class="test-content__12 hide--laptop hide--tablet hide--phone">
		<? req_with_param(PATH__PHP_INDEX . "/index-test-block.php", [
				"img" => "/index/test.jpg",
				"rubric" => "Двое",
				"title" => "Готовы ли вы к (новой) любви?",
				"test-counter" => "Тест пройден 52834 раз",
				"btn-text" => "Пройти тест",
				"hide-block-title" => true,
				"wrapper-img-modification" => "index-test-block__wrapper-img--test-page"
		]); ?>
	</div>

	<div class="test-content__13">
		<? req_with_param(PATH__PHP_TEST . "/test-rubric-title.php", [
				"text" => "Новое на сайте"
		]); ?>
	</div>

	<div class="test-content__14">

	</div>

	<div class="test-content__15">

	</div>

	<div class="test-content__16">

	</div>

	<div class="test-content__17">

	</div>

	<div class="test-content__18 hide--tablet">
	</div>

	<div class="test-content__19 hide--tablet hide--phone">
	</div>

	<div class="test-content__20 hide--laptop hide--tablet hide--phone">
	</div>

	<div class="test-content__21 hide--laptop hide--tablet hide--phone">

	</div>

	<? req_with_param(PATH__PHP_COMMON . "/show-more.php"); ?>

</div>