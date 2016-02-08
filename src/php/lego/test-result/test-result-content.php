<main class="content-wrapper test-result-content <?= $params["branding"]; ?>">


	<div class="test-result-content__1">


		<? req_with_param(PATH__PHP_COMMON . "/announcements.php",
				[
						"first-element-classes" => "",
						"second-element-classes" => "hide--phone",
						"third-element-classes" => "hide--tablet hide--phone",
						"fourth-element-classes" => "hide--laptop hide--tablet hide--phone",
				]
		); ?>

	</div>

	<div class="test-result-content__2">

		<?req_with_param(PATH__PHP_COMMON . "/section-name.php", ["name" => "Тесты"]);?>

	</div>

	<div class="test-result-content__3">

		<?req_with_param(PATH__PHP_COMMON . "/test/test-menu.php",
				["menu" => ["Общение", "Двое", "Секс", "Семья", "Красота", "Работа и карьера", "IQ"],                            "search" => true]);?>

	</div>

	<div class="test-result-content__4" id="test-result__test-description">

		<?req_with_param(PATH__PHP_TEST . "/test-description.php", [
				"test-result" => true,
				"show-img" => true,
				"author-without-photo" => true,
				"show-bottom-btn" => true,
				"title" => "Умеете ли вы делать свою жизнь прекраснее?",
				"text" => "<p class='test-description__text-result-paragraph'>Ваши главные характеристики – авторитет, драйв, бесстрашие. Вам нравится управлять, принимать решения, находить
новые выходы из ситуации, заражать своим энтузиазмом других... Как в личной, так и в профессиональной жизни лидер без
 усилий добивается успеха. Вам нравится чувствовать себя избранным, ощущать, как волна энтузиазма несет вас и
 заставляет почувствовать себя по-настоящему живым. Более или менее сознательно лидер стремится к власти и всегда
 оказывается во главе любой группы людей. Существует два способа быть лидером: можно быть авторитарным и держать
 окружающих на расстоянии, а можно делать ставку на сотрудничество и «коллективный разум». Лидеров первого типа
 обычно боятся и уважают, но не обязательно любят; теми же, кто принадлежит ко второму типу, восхищаются, их любят и уважают.</p>
<p class='test-description__text-result-paragraph'>В любом случае, благодаря вашей способности убеждать, вашей
смелости и целеустремленности люди тянутся к вам и видят в вас человека влиятельного. К вам часто стремятся быть
ближе люди нерешительные, лишенные уверенности в себе, склонные увлекаться сильными личностями – другими словами, те,
 кому недостает в жизни порядка и фигуры «сильного родителя». Лидер пробуждает в них желание что-то делать,
 мотивирует их, придает им смелости и дает им ощущение принадлежности.</p>
<p class='test-description__text-result-paragraph'>Чтобы ваша харизма стала еще ярче, будьте осторожны, не накликайте
 на себя обвинений в «непримиримости» или «излишней авторитарности», ведь от лидера до тирана – один шаг...
 Старайтесь чаще прислушиваться к окружающим и сочувствовать им. Приучите себя иногда проводить время в одиночестве,
 чтобы у вас не развилась зависимость от внимания других людей.</p>",
			"img-circle" => true
		]);?>

	</div>

	<div class="test-result-content__5" id="test-result-banner">

		<? req_with_param(PATH__PHP_INDEX . "/index-banner.php") ?>

	</div>

	<div class="test-result-content__6 col__3--desktop">

		<? req_with_param(PATH__PHP_COMMON . "/test/test-social-blocks.php"); ?>

	</div>

	<div class="test-result-content__7">

		<? req_with_param(PATH__PHP_TEST . "/test-rubric-title.php", ["text" =>
				"<span class='hide--phone'>С этим тестом также проходят</span>
				<span class='hide--tablet hide--laptop hide--desktop'>Похожие тесты</span>"
		]); ?>

	</div>

	<div class="test-result-content__8">

		<? req_with_param(PATH__PHP_TEST_SECTION . "/test-section-test.php", [
				"img" => "test-section__4.jpg",
				"rubric" => "Личность",
				"title" => "Есть ли у вас фобии?",
				"text" => "Пауки, замкнутое пространство, боязнь толпы… Знакомы ли вам эти страхи? Узнайте об уровне своего дискомфорта с помощью нашего теста."
		]) ?>

	</div>

	<div class="test-result-content__9 hide--phone">

		<? req_with_param(PATH__PHP_TEST_SECTION . "/test-section-test.php", [
				"img" => "test-section__5.jpg",
				"rubric" => "Двое",
				"title" => "Любите ли вы играть с огнем?",
				"text" => "Некоторым из нас нравится вносить в свою жизнь элемент риска. Стремясь избежать монотонности в отношениях, они часто попадают в потенциально опасные ситуации. Ощущение опасности бодрит их, а игра только увеличивает желание. Другие же, наоборот, предпочитают держаться подальше от пламени и тушить любые искры, пока они не разгорелись. А что предпочитаете вы? Раздувать огонь или гасить его?"
		]) ?>

	</div>

	<div class="test-result-content__10 hide--tablet hide--phone">

		<? req_with_param(PATH__PHP_TEST_SECTION . "/test-section-test.php", [
				"img" => "test-section__6.jpg",
				"rubric" => "Личность",
				"title" => "Что для вас значит нежность?",
				"text" => "Вы не склонны к излиянию чувств или, наоборот, охотно делитесь своими чувствами с другими? Вас считают черствым и мужественным? Или вы умеете дарить нежность безвозмездно? Наш тест поможет вам разобраться."
		]) ?>

	</div>

	<div class="test-result-content__11 hide--laptop hide--tablet hide--phone">

		<? req_with_param(PATH__PHP_TEST_SECTION . "/test-section-test.php", [
				"img" => "test-section__7.jpg",
				"rubric" => "Общение",
				"title" => "Умеете ли вы подчеркивать свои достоинства?",
				"text" => "Вы умеете быть собой в любой ситуации или, наоборот, избегаете слишком тесного общения? А может быть, вы уверены, что все и так знают, насколько вы хороши? Проверьте себя с помощью нашего теста."
		]) ?>

	</div>

	<div class="test-result-content__12">

		<? req_with_param(PATH__PHP_TEST . "/test-rubric-title.php", ["text" => "Популярные тесты"]); ?>

	</div>

	<div class="test-result-content__13 hide--phone">

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

	<div class="test-result-content__14 hide--tablet hide--phone">

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

	<div class="test-result-content__15 hide--laptop hide--tablet hide--phone">

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

	<div class="test-result-content__16">

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

	<div class="test-result-content__17">

		<? req_with_param(PATH__PHP_TEST . "/test-rubric-title.php", ["text" => "Новое на сайте"]); ?>

	</div>

	<div class="test-result-content__18">

		<? req_with_param(PATH__PHP_INDEX . "/index-article-block.php", ["title" => "6 страхов, которые достались нам в тяжелое наследство", "text" => "Боитесь темноты, не выносите змей? Возможно, в этом стоит винить (или благодарить) наших далеких предков: страх перед животными и явлениями природы не раз спасал им жизнь.", "img" => "/index/author-article-1.jpg"]); ?>

	</div>

	<div class="test-result-content__19">

		<? req_with_param(PATH__PHP_INDEX . "/index-article-block.php", ["title" => "6 страхов, которые достались нам в тяжелое наследство", "text" => "Боитесь темноты, не выносите змей? Возможно, в этом стоит винить (или благодарить) наших далеких предков: страх перед животными и явлениями природы не раз спасал им жизнь.", "img" => "/index/author-article-1.jpg"]); ?>

	</div>

	<div class="test-result-content__20">

		<? req_with_param(PATH__PHP_INDEX . "/index-article-block.php", ["title" => "6 страхов, которые достались нам в тяжелое наследство", "text" => "Боитесь темноты, не выносите змей? Возможно, в этом стоит винить (или благодарить) наших далеких предков: страх перед животными и явлениями природы не раз спасал им жизнь.", "img" => "/index/author-article-1.jpg"]); ?>

	</div>

	<div class="test-result-content__21">

		<? req_with_param(PATH__PHP_INDEX . "/index-article-block.php", ["title" => "6 страхов, которые достались нам в тяжелое наследство", "text" => "Боитесь темноты, не выносите змей? Возможно, в этом стоит винить (или благодарить) наших далеких предков: страх перед животными и явлениями природы не раз спасал им жизнь.", "img" => "/index/author-article-1.jpg"]); ?>

	</div>

	<div class="test-result-content__22 hide--tablet">

		<? req_with_param(PATH__PHP_INDEX . "/index-article-block.php", ["title" => "6 страхов, которые достались нам в тяжелое наследство", "text" => "Боитесь темноты, не выносите змей? Возможно, в этом стоит винить (или благодарить) наших далеких предков: страх перед животными и явлениями природы не раз спасал им жизнь.", "img" => "/index/author-article-1.jpg"]); ?>

	</div>

	<div class="test-result-content__23 hide--tablet hide--phone">

		<? req_with_param(PATH__PHP_INDEX . "/index-article-block.php", ["title" => "6 страхов, которые достались нам в тяжелое наследство", "text" => "Боитесь темноты, не выносите змей? Возможно, в этом стоит винить (или благодарить) наших далеких предков: страх перед животными и явлениями природы не раз спасал им жизнь.", "img" => "/index/author-article-1.jpg"]); ?>

	</div>

	<div class="test-result-content__24 hide--laptop hide--tablet hide--phone">

		<? req_with_param(PATH__PHP_INDEX . "/index-article-block.php", ["title" => "6 страхов, которые достались нам в тяжелое наследство", "text" => "Боитесь темноты, не выносите змей? Возможно, в этом стоит винить (или благодарить) наших далеких предков: страх перед животными и явлениями природы не раз спасал им жизнь.", "img" => "/index/author-article-1.jpg"]); ?>

	</div>

	<div class="test-result-content__25 hide--laptop hide--tablet hide--phone">

		<? req_with_param(PATH__PHP_INDEX . "/index-article-block.php", ["title" => "6 страхов, которые достались нам в тяжелое наследство", "text" => "Боитесь темноты, не выносите змей? Возможно, в этом стоит винить (или благодарить) наших далеких предков: страх перед животными и явлениями природы не раз спасал им жизнь.", "img" => "/index/author-article-1.jpg"]); ?>

	</div>

	<? req_with_param(PATH__PHP_COMMON . "/show-more.php"); ?>

</main>