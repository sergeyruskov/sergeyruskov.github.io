<div class="grid content-wrapper branding--content">

	<div class="grid__1">

		<? req_with_param(PATH__COMMON . "/announcements.php",
				[
						"modification" => "announcements--index",
						"first-element-classes" => "hide--phone",
						"second-element-classes" => "hide--phone",
						"third-element-classes" => "hide--phone hide--tablet",
						"fourth-element-classes" => "hide--tablet hide--laptop hide--phone",
				]
		); ?>

	</div>

	<div class="grid__2" id="grid__2">

		<? req_with_param(PATH__ARTICLE . "/article-main-content.php"); ?>

	</div>

	<div class="grid__3">

		<? req_with_param(PATH__COMMON . "/rubric-title.php", ["text" => "Тесты", "modification" => "rubric-title--phone-center"]); ?>

	</div>

	<div class="grid__4">

		<? req_with_param(PATH__COMMON . "/test/test-block.php", [
				"img" => "/index/test.jpg",
				"rubric" => "Красота",
				"title" => "В чем источник вашей радости?",
				"btn-text" => "Пройти тест",
				"hide-block-title" => true,
				"modification" => "test-block--test-page link link--white"
		]); ?>

	</div>

	<div class="grid__5 hide--phone">

		<? req_with_param(PATH__COMMON . "/test/test-block.php", [
				"img" => "/index/test.jpg",
				"rubric" => "Красота",
				"title" => "Какое жизненное начало в вас преобладает?",
				"btn-text" => "Пройти тест",
				"hide-block-title" => true,
				"modification" => "test-block--test-page link link--white"
		]); ?>

	</div>

	<div class="grid__6 hide--tablet hide--phone">

		<? req_with_param(PATH__COMMON . "/test/test-block.php", [
				"img" => "/index/test.jpg",
				"rubric" => "Красота",
				"title" => "Когда вы чувствуете себя в прекрасной форме?",
				"btn-text" => "Пройти тест",
				"hide-block-title" => true,
				"modification" => "test-block--test-page link link--white"
		]); ?>

	</div>

	<div class="grid__7 hide--laptop hide--tablet hide--phone">

		<? req_with_param(PATH__COMMON . "/test/test-block.php", [
				"img" => "/index/test.jpg",
				"rubric" => "Красота",
				"title" => "Умеете ли вы быть счастливым?",
				"btn-text" => "Пройти тест",
				"hide-block-title" => true,
				"modification" => "test-block--test-page link link--white"
		]); ?>

	</div>

	<div class="grid__8">

		<? req_with_param(PATH__COMMON . "/dossier-block.php",
				["modification" => "col__4--desktop col__3--laptop col__2--tablet col__1--phone h430--laptop h430--tablet dossier-block--article",
						"title" => "Толстые люди: полюбить себя и жить с удовольствием",
						"text" => "Стремление к улучшению собственной внешности не дает покоя даже самым ослепительным красавицам. Что уж говорить обо всех остальных: большинство из нас мечтает избавиться от лишних килограммов. Но в пылу борьбы за идеальную фигуру можно забыть о том, что слишком полные бедра, большой живот или даже, о ужас, двойной подбородок не мешают принимать себя, наслаждаться близкими отношениями и проживать каждый день."
				]); ?>

	</div>

	<div class="grid__9">

		<? req_with_param(PATH__COMMON . "/rubric-title.php", ["text" => "Субботний рамблер", "modification" => "rubric-title--phone-center"]); ?>

	</div>

	<div class="grid__10">

		<? req_with_param(PATH__COMMON . "/rambler-advertising-block.php", [
				"img" => "/section/article-17.jpg",
				"title" => "Неравные браки отечественных звезд"]); ?>

	</div>

	<div class="grid__11">

		<? req_with_param(PATH__COMMON . "/rambler-advertising-block.php", [
				"img" => "/section/article-18.jpg",
				"title" => "Признаки старения"]); ?>

	</div>

	<div class="grid__12">

		<? req_with_param(PATH__COMMON . "/rambler-advertising-block.php", [
				"img" => "/section/article-19.jpg",
				"title" => "Коротко об истории женских дуэлей"]); ?>

	</div>

	<div class="grid__13 hide--laptop hide--phone">

		<? req_with_param(PATH__COMMON . "/rambler-advertising-block.php", [
				"img" => "/section/article-20.jpg",
				"title" => "Как оставаться в форме без спортзала"]); ?>

	</div>

	<div class="grid__14">

		<? req_with_param(PATH__COMMON . "/yandex-direct.php", [
				"modification" => "content-wrapper yandex-direct--section",
				"desktop" => true
		]) ?>

	</div>

	<div class="grid__15">

		<? req_with_param(PATH__COMMON . "/rubric-title.php", ["text" => "Новое на сайте", "modification" => "rubric-title--phone-center"]); ?>

	</div>

	<div class="grid__16">
		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "Как сохранить и улучшить отношения в паре?", "text" => "Среди множества правил для двоих, которые можно высечь на скрижалях – или хотя бы записать на шпаргалке, – коуч Леонид Кроль выделяет 12 «пунктов ценности».", "img" => "/index/author-article-12.jpg"]); ?>
	</div>

	<div class="grid__17">
		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "Младенцы удивили психологов", "text" => "Дети до года обладают достаточными знаниями о мире, чтобы удивляться проходящему сквозь стену мячику и едущей по воздуху машинке. И это удивление – мощный стимул для их развития.", "img" => "/index/author-article-15.jpg"]); ?>
	</div>

	<div class="grid__18">
		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "8 способов улучшить свою жизнь", "text" => "Если вы фанат списков и вам удается извлекать из них пользу, мы предлагаем список вещей, которые НЕ нужно делать. ", "img" => "/index/author-article-18.jpg"]); ?>
	</div>

	<div class="grid__19 hide--phone">

		<? req_with_param(PATH__COMMON .  "/small-banners-block.php"); ?>

	</div>

	<div class="grid__20 hide--tablet hide--phone">
		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "Иллюзия дефекта:
4 принципа общения с особыми детьми", "text" => "Педагог и психолог Кристель Манске работает с аутистами, детьми с трисомией, СДВГ и другими особенностями уже больше 40 лет.", "img" => "/index/author-article-23.jpg"]); ?>
	</div>

	<div class="grid__21 hide--tablet hide--phone">
		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "Ослепительна, несмотря на вес", "text" => "Что делать, если вы чувствуете себя слишком толстой, чтобы быть привлекательной? В первую очередь нужно менять образ мысли, а не цифру на весах, считает психолог Эстер Перель.", "img" => "/index/author-article-20.jpg"]); ?>
	</div>

	<div class="grid__22 hide--laptop hide--tablet hide--phone">
		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "«Я чувствую себя бездарностью, ни на что не способной»", "text" => "С подачи психолога Карла Юнга мы делим людей на экстравертов и интровертов. Но между экстравертами существуют различия, уверены нейробиологи. ", "img" => "/index/author-article-17.jpg"]); ?>
	</div>

	<div class="grid__23 hide--laptop hide--tablet hide--phone">
		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "6 страхов, которые достались нам в тяжелое наследство", "text" => "Боитесь темноты, не выносите змей? Возможно, в этом стоит винить (или благодарить) наших далеких предков: страх перед животными и явлениями природы не раз спасал им жизнь.", "img" => "/index/author-article-1.jpg"]); ?>
	</div>

	<div class="grid__500">

		<? req_with_param(PATH__COMMON . "/show-more-block.php", ["id" => "show-more-block"]); ?>

	</div>

	<div class="grid__501" id="grid__501">

		<? req_with_param(PATH__COMMON .  "/banner-300-600.php"); ?>

	</div>

	<div class="grid__502">

		<? req_with_param(PATH__COMMON . "/show-more-btn.php", ["id" => "show-more-btn"]); ?>

	</div>

	<div class="grid__support"></div>

</div>