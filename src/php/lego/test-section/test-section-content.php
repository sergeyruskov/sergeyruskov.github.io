<div class="content-wrapper test-section-content <?= $params["branding"]; ?>">

	<div class="test-section-content__1">

		<? req_with_param(PATH__PHP_COMMON . "/announcements.php",
				[
						"first-element-classes" => "",
						"second-element-classes" => "hide--phone",
						"third-element-classes" => "hide--tablet hide--phone",
						"fourth-element-classes" => "hide--laptop hide--tablet hide--phone",
				]
		); ?>

	</div>


	<div class="test-section-content__2">

		<? req_with_param(PATH__PHP_COMMON . "/section-name.php", ["name" => "Тесты"]); ?>

	</div>

	<div class="test-section-content__3">

		<? req_with_param(PATH__PHP_COMMON . "/test/test-menu.php",
				["menu" => ["Общение", "Двое", "Секс", "Семья", "Красота", "Работа и карьера", "IQ"],                            "search" => true]); ?>

	</div>

	<div class="test-section-content__4">

		<? req_with_param(PATH__PHP_TEST_SECTION . "/test-section-test.php", [
				"img" => "test-section__1.jpg",
				"rubric" => "Личность",
				"title" => "Умеете ли вы делать свою жизнь прекраснее?",
				"text" => "Что для вас важнее: заботиться о себе, быть в контакте с окружающими или
		пытаться изменить мир? Тест психолога Кристофа Андре (Christophe André) поможем вам разобраться."
		]) ?>

	</div>

	<div class="test-section-content__5 hide--tablet hide--phone">

		<? req_with_param(PATH__PHP_TEST_SECTION . "/test-section-test.php", [
				"img" => "test-section__2.jpg",
				"rubric" => "Личность",
				"title" => "Эмоциональный интеллект: определите свой уровень",
				"text" => "IQ (коэффициент интеллекта) играет важную роль в нашей жизни. Однако не меньшее значение имеет и EQ (интеллект эмоциональный)."
		]) ?>

	</div>

	<div class="test-section-content__6">

		<? req_with_param(PATH__PHP_TEST_SECTION . "/test-section-test.php", [
				"img" => "test-section__3.jpg",
				"rubric" => "Общение",
				"title" => "Как устроена ваша память?",
				"text" => "Когда вы пытаетесь что-то вспомнить, что скорее всплывает на поверхность сознания? То, что вы видели, чувствовали или то, к чему прикасались? Чтобы узнать, как устроена ваша память, мы предлагаем вам ответить на вопросы теста. "
		]) ?>

	</div>

	<div class="test-section-content__7">

		<? req_with_param(PATH__PHP_TEST_SECTION . "/test-section-test.php", [
				"img" => "test-section__4.jpg",
				"rubric" => "Личность",
				"title" => "Есть ли у вас фобии?",
				"text" => "Пауки, замкнутое пространство, боязнь толпы… Знакомы ли вам эти страхи? Узнайте об уровне своего дискомфорта с помощью нашего теста."
		]) ?>

	</div>

	<div class="test-section-content__8 hide--tablet hide--phone">

		<? req_with_param(PATH__PHP_TEST_SECTION . "/test-section-test.php", [
				"img" => "test-section__5.jpg",
				"rubric" => "Двое",
				"title" => "Любите ли вы играть с огнем?",
				"text" => "Некоторым из нас нравится вносить в свою жизнь элемент риска. Стремясь избежать монотонности в отношениях, они часто попадают в потенциально опасные ситуации. Ощущение опасности бодрит их, а игра только увеличивает желание. Другие же, наоборот, предпочитают держаться подальше от пламени и тушить любые искры, пока они не разгорелись. А что предпочитаете вы? Раздувать огонь или гасить его?"
		]) ?>

	</div>


	<div class="test-section-content__9">

		<? req_with_param(PATH__PHP_TEST_SECTION . "/test-section-test.php", [
				"img" => "test-section__6.jpg",
				"rubric" => "Личность",
				"title" => "Что для вас значит нежность?",
				"text" => "Вы не склонны к излиянию чувств или, наоборот, охотно делитесь своими чувствами с другими? Вас считают черствым и мужественным? Или вы умеете дарить нежность безвозмездно? Наш тест поможет вам разобраться."
		]) ?>

	</div>

	<div class="test-section-content__10 hide--desktop">

		<? req_with_param(PATH__PHP_TEST_SECTION . "/test-section-test.php", [
				"img" => "test-section__7.jpg",
				"rubric" => "Общение",
				"title" => "Умеете ли вы подчеркивать свои достоинства?",
				"text" => "Вы умеете быть собой в любой ситуации или, наоборот, избегаете слишком тесного общения? А может быть, вы уверены, что все и так знают, насколько вы хороши? Проверьте себя с помощью нашего теста."
		]) ?>

	</div>

	<div class="test-section-content__11 hide--tablet hide--phone">

		<? req_with_param(PATH__PHP_TEST_SECTION . "/test-section-test.php", [
				"img" => "test-section__12.jpg",
				"rubric" => "Семья",
				"title" => "Как выглядит ваш «внутренний ребенок»?",
				"text" => "Образцовый малыш, бунтарь или сама непосредственность? Узнав, кто «командует» вами изнутри, вам будет проще изменить (если понадобится) свое привычное поведение."
		]) ?>

	</div>

	<div class="test-section-content__12">

		<div class="yandex-direct col__3--desktop col__2--laptop col__1--phone">
			<div class="yandex-direct__wrapper-title">
				<? req_with_param(PATH__PHP_COMMON . "/title-with-line.php", [
						"text" => "Яндекс.директ",
						"modification" => "title-with-line--yandex-direct",
						"modification1" => "title-with-line__wrapper--yandex-direct",
						"modification2" => "title-with-line__content--yandex-direct"]); ?>

			</div>

			<div class="yandex-direct__wrapper-items col__3--desktop col__2--laptop col__2--tablet">

				<div class="yandex-direct__item">
					<h4 class="yandex-direct__item-title">Магазин чемоданов Robinzon</h4>

					<p class="yandex-direct__item-text">Пожалуй, самый большой магазин чемоданов в Москве! 2тыс
						чемоданов от 3тыс р</p>

					<a href="#" class="yandex-direct__item-link link link--brand">robinzon.ru</a>
					<a href="#" class="yandex-direct__item-link link link--brand">Адрес и телефон</a>

				</div>

				<div class="yandex-direct__item">
					<h4 class="yandex-direct__item-title">Дача в жилом поселке Петрухино!</h4>

					<p class="yandex-direct__item-text">39 мин. по Симферопольскому ш. Коммуникации действуют. Конный
						клуб. Озеро.</p>

					<a href="#" class="yandex-direct__item-link link link--brand">robinzon.ru</a>
					<a href="#" class="yandex-direct__item-link link link--brand">Адрес и телефон</a>
				</div>

				<div class="yandex-direct__item hide--laptop hide--tablet hide--phone">
					<h4 class="yandex-direct__item-title">Участки по Минскому шоссе. Жми!</h4>

					<p class="yandex-direct__item-text">Земельные участки по 50 000 руб/сотка. Коммуникации. Успей
						купить!</p>


					<a href="#" class="yandex-direct__item-link link link--brand">robinzon.ru</a>
					<a href="#" class="yandex-direct__item-link link link--brand">Адрес и телефон</a>
					<a href="#" class="yandex-direct__item-link link link--brand">Москва</a>
				</div>

			</div>

		</div>

	</div>

	<div class="test-section-content__13">

		<? req_with_param(PATH__PHP_INDEX . "/index-banner.php") ?>

	</div>

	<div class="test-section-content__14">

		<? req_with_param(PATH__PHP_TEST . "/test-rubric-title.php", ["text" => "Популярные тесты"]); ?>

	</div>

	<div class="test-section-content__15">

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

	<div class="test-section-content__16 hide--phone">

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

	<div class="test-section-content__17 hide--phone hide--tablet">

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

	<div class="test-section-content__18 hide--phone hide--tablet hide--laptop">

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

	<div class="test-section-content__19">

		<? req_with_param(PATH__PHP_TEST . "/test-rubric-title.php", ["text" => "Новое на сайте"]); ?>

	</div>

	<div class="test-section-content__20">

		<? req_with_param(PATH__PHP_INDEX . "/index-article-block.php", ["title" => "6 страхов, которые достались нам в тяжелое наследство", "text" => "Боитесь темноты, не выносите змей? Возможно, в этом стоит винить (или благодарить) наших далеких предков: страх перед животными и явлениями природы не раз спасал им жизнь.", "img" => "/index/author-article-1.jpg"]); ?>

	</div>

	<div class="test-section-content__21">

		<? req_with_param(PATH__PHP_INDEX . "/index-article-block.php", ["title" => "6 страхов, которые достались нам в тяжелое наследство", "text" => "Боитесь темноты, не выносите змей? Возможно, в этом стоит винить (или благодарить) наших далеких предков: страх перед животными и явлениями природы не раз спасал им жизнь.", "img" => "/index/author-article-1.jpg"]); ?>

	</div>

	<div class="test-section-content__22">

		<? req_with_param(PATH__PHP_INDEX . "/index-article-block.php", ["title" => "6 страхов, которые достались нам в тяжелое наследство", "text" => "Боитесь темноты, не выносите змей? Возможно, в этом стоит винить (или благодарить) наших далеких предков: страх перед животными и явлениями природы не раз спасал им жизнь.", "img" => "/index/author-article-1.jpg"]); ?>

	</div>

	<div class="test-section-content__23">

		<? req_with_param(PATH__PHP_INDEX . "/index-article-block.php", ["title" => "6 страхов, которые достались нам в тяжелое наследство", "text" => "Боитесь темноты, не выносите змей? Возможно, в этом стоит винить (или благодарить) наших далеких предков: страх перед животными и явлениями природы не раз спасал им жизнь.", "img" => "/index/author-article-1.jpg"]); ?>

	</div>

	<div class="test-section-content__24 hide--tablet">

		<? req_with_param(PATH__PHP_INDEX . "/index-article-block.php", ["title" => "6 страхов, которые достались нам в тяжелое наследство", "text" => "Боитесь темноты, не выносите змей? Возможно, в этом стоит винить (или благодарить) наших далеких предков: страх перед животными и явлениями природы не раз спасал им жизнь.", "img" => "/index/author-article-1.jpg"]); ?>

	</div>

	<div class="test-section-content__25 hide--tablet hide--phone">

		<? req_with_param(PATH__PHP_INDEX . "/index-article-block.php", ["title" => "6 страхов, которые достались нам в тяжелое наследство", "text" => "Боитесь темноты, не выносите змей? Возможно, в этом стоит винить (или благодарить) наших далеких предков: страх перед животными и явлениями природы не раз спасал им жизнь.", "img" => "/index/author-article-1.jpg"]); ?>

	</div>

	<div class="test-section-content__26 hide--laptop hide--tablet hide--phone">

		<? req_with_param(PATH__PHP_INDEX . "/index-article-block.php", ["title" => "6 страхов, которые достались нам в тяжелое наследство", "text" => "Боитесь темноты, не выносите змей? Возможно, в этом стоит винить (или благодарить) наших далеких предков: страх перед животными и явлениями природы не раз спасал им жизнь.", "img" => "/index/author-article-1.jpg"]); ?>

	</div>

	<div class="test-section-content__27 hide--laptop hide--tablet hide--phone">

		<? req_with_param(PATH__PHP_INDEX . "/index-article-block.php", ["title" => "6 страхов, которые достались нам в тяжелое наследство", "text" => "Боитесь темноты, не выносите змей? Возможно, в этом стоит винить (или благодарить) наших далеких предков: страх перед животными и явлениями природы не раз спасал им жизнь.", "img" => "/index/author-article-1.jpg"]); ?>

	</div>

	<div class="test-section-content__28 hide--phone">

		<? req_with_param(PATH__PHP_TEST_SECTION . "/test-section-quiz.php"); ?>

	</div>

	<div class="test-section-content__support col__1 hide--tablet hide--phone"></div>

	<div class="hide--desktop hide--laptop hide--tablet">
		<? req_with_param(PATH__PHP_COMMON . "/show-more.php"); ?>
	</div>

</div>