<div class="content-wrapper grid <?= $params["branding"]; ?>">


	<div class="grid__1">

		<? req_with_param(PATH__COMMON . "/announcements.php",
				[
						"first-element-classes" => "",
						"second-element-classes" => "hide--phone",
						"third-element-classes" => "hide--tablet hide--phone",
						"fourth-element-classes" => "hide--laptop hide--tablet hide--phone",
				]
		); ?>

	</div>

	<div class="grid__2">

		<?req_with_param(PATH__COMMON . "/section-name.php", ["name" => "Тесты",
				"modification" => "section"]);?>

	</div>

	<div class="grid__3">

		<?req_with_param(PATH__COMMON . "/test/test-menu.php",
				[
						"modification" => "test-menu--test",
						"menu" => ["Общение", "Двое", "Секс", "Семья", "Красота", "Работа и карьера", "IQ"],
						"search" => true
				])
		;?>

	</div>

	<div class="grid__4" id="test-result__test-description">

		<?req_with_param(PATH__COMMON . "/test/test-description.php", [
				"modification" => "test-description--test",
				"show-result" => true,
				"show-number" => true,
				"test-img" => true,
				"show-bottom-btn" => true,
				"title" => "Умеете ли вы делать свою жизнь прекраснее?",
				"text" => "<p>Ваши главные характеристики – авторитет, драйв, бесстрашие. Вам
 нравится управлять, принимать решения, находить новые выходы из ситуации, заражать своим энтузиазмом других... Как в
  личной, так и в профессиональной жизни лидер без усилий добивается успеха. Вам нравится чувствовать себя избранным,
   ощущать, как волна энтузиазма несет вас и
 заставляет почувствовать себя по-настоящему живым. Более или менее сознательно лидер стремится к власти и всегда
 оказывается во главе любой группы людей. Существует два способа быть лидером: можно быть авторитарным и держать
 окружающих на расстоянии, а можно делать ставку на сотрудничество и «коллективный разум». Лидеров первого типа
 обычно боятся и уважают, но не обязательно любят; теми же, кто принадлежит ко второму типу, восхищаются, их любят и уважают.</p>
<p>В любом случае, благодаря вашей способности убеждать, вашей
смелости и целеустремленности люди тянутся к вам и видят в вас человека влиятельного. К вам часто стремятся быть
ближе люди нерешительные, лишенные уверенности в себе, склонные увлекаться сильными личностями – другими словами, те,
 кому недостает в жизни порядка и фигуры «сильного родителя». Лидер пробуждает в них желание что-то делать,
 мотивирует их, придает им смелости и дает им ощущение принадлежности.</p>
<p>Чтобы ваша харизма стала еще ярче, будьте осторожны, не
накликайте
 на себя обвинений в «непримиримости» или «излишней авторитарности», ведь от лидера до тирана – один шаг...
 Старайтесь чаще прислушиваться к окружающим и сочувствовать им. Приучите себя иногда проводить время в одиночестве,
 чтобы у вас не развилась зависимость от внимания других людей.</p>",
			"img-circle" => true
		]);?>

	</div>

	<div class="grid__5 col__3--desktop">

		<? req_with_param(PATH__COMMON . "/test/test-social-blocks.php",
				["modification" => "test-social-blocks--test"]
		); ?>

	</div>

	<div class="grid__6">

		<? req_with_param(PATH__COMMON . "/rubric-title.php", ["text" =>
				"<span class='hide--phone'>С этим тестом также проходят</span>
				<span class='hide--tablet hide--laptop hide--desktop'>Похожие тесты</span>", "modification" => "rubric-title--phone-center"
		]); ?>

	</div>

	<div class="grid__7">

		<? req_with_param(PATH__COMMON . "/test/test-block.php", [
				"img" => "/test-section/test-section__4.jpg",
				"hide-block-title" => true,
				"btn-text" => "Пройти тест",
				"rubric" => "Личность",
				"title" => "Есть ли у вас фобии?",
				"text" => "Пауки, замкнутое пространство, боязнь толпы… Знакомы ли вам эти страхи? Узнайте об уровне своего дискомфорта с помощью нашего теста.",
				"socials" => true,
				"modification" => "test-block--test-result link link--grey"
		]) ?>

	</div>

	<div class="grid__8 hide--phone">

		<? req_with_param(PATH__COMMON . "/test/test-block.php", [
				"img" => "/test-section/test-section__5.jpg",
				"btn-text" => "Пройти тест",
				"hide-block-title" => true,
				"rubric" => "Двое",
				"title" => "Любите ли вы играть с огнем?",
				"text" => "Некоторым из нас нравится вносить в свою жизнь элемент риска. Стремясь избежать монотонности в отношениях, они часто попадают в потенциально опасные ситуации. Ощущение опасности бодрит их, а игра только увеличивает желание. Другие же, наоборот, предпочитают держаться подальше от пламени и тушить любые искры, пока они не разгорелись. А что предпочитаете вы? Раздувать огонь или гасить его?",
				"socials" => true,
				"modification" => "test-block--test-result link link--grey"
		]) ?>

	</div>

	<div class="grid__9 hide--tablet hide--phone">

		<? req_with_param(PATH__COMMON . "/test/test-block.php", [
				"img" => "/test-section/test-section__6.jpg",
				"btn-text" => "Пройти тест",
				"hide-block-title" => true,
				"rubric" => "Личность",
				"title" => "Что для вас значит нежность?",
				"text" => "Вы не склонны к излиянию чувств или, наоборот, охотно делитесь своими чувствами с другими? Вас считают черствым и мужественным? Или вы умеете дарить нежность безвозмездно? Наш тест поможет вам разобраться.",
				"socials" => true,
				"modification" => "test-block--test-result link link--grey"
		]) ?>

	</div>

	<div class="grid__10 hide--laptop hide--tablet hide--phone">

		<? req_with_param(PATH__COMMON . "/test/test-block.php", [
				"img" => "/test-section/test-section__7.jpg",
				"btn-text" => "Пройти тест",
				"hide-block-title" => true,
				"rubric" => "Общение",
				"title" => "Умеете ли вы подчеркивать свои достоинства?",
				"text" => "Вы умеете быть собой в любой ситуации или, наоборот, избегаете слишком тесного общения? А может быть, вы уверены, что все и так знают, насколько вы хороши? Проверьте себя с помощью нашего теста.",
				"socials" => true,
				"modification" => "test-block--test-result link link--grey"
		]) ?>

	</div>

	<div class="grid__11">

		<? req_with_param(PATH__COMMON . "/rubric-title.php", ["text" => "Популярные тесты", "modification" => "rubric-title--phone-center"]); ?>

	</div>

	<div class="grid__12 hide--phone">

		<? req_with_param(PATH__COMMON . "/test/test-block.php", [
				"img" => "/index/test.jpg",
				"rubric" => "Красота",
				"title" => "Готовы ли вы изменить свой облик?",
				"test-counter" => "Тест пройден 16159 раз",
				"btn-text" => "Пройти тест",
				"hide-block-title" => true,
				"modification" => "test-block--test-page link link--white"
		]); ?>

	</div>

	<div class="grid__13 hide--tablet hide--phone">

		<? req_with_param(PATH__COMMON . "/test/test-block.php", [
				"img" => "/index/test.jpg",
				"rubric" => "Красота",
				"title" => "Готовы ли вы изменить свой облик?",
				"test-counter" => "Тест пройден 16159 раз",
				"btn-text" => "Пройти тест",
				"hide-block-title" => true,
				"modification" => "test-block--test-page link link--white"
		]); ?>

	</div>

	<div class="grid__14 hide--laptop hide--tablet hide--phone">

		<? req_with_param(PATH__COMMON . "/test/test-block.php", [
				"img" => "/index/test.jpg",
				"rubric" => "Красота",
				"title" => "Готовы ли вы изменить свой облик?",
				"test-counter" => "Тест пройден 16159 раз",
				"btn-text" => "Пройти тест",
				"hide-block-title" => true,
				"modification" => "test-block--test-page link link--white"
		]); ?>

	</div>

	<div class="grid__15">

		<? req_with_param(PATH__COMMON . "/test/test-block.php", [
				"img" => "/index/test.jpg",
				"rubric" => "Красота",
				"title" => "Готовы ли вы изменить свой облик?",
				"test-counter" => "Тест пройден 16159 раз",
				"btn-text" => "Пройти тест",
				"hide-block-title" => true,
				"modification" => "test-block--test-page link link--white"
		]); ?>

	</div>

	<div class="grid__16">

		<? req_with_param(PATH__COMMON . "/rubric-title.php", ["text" => "Новое на сайте", "modification" => "rubric-title--phone-center"]); ?>

	</div>

	<div class="grid__17">

		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "6 страхов, которые достались нам в тяжелое наследство", "text" => "Боитесь темноты, не выносите змей? Возможно, в этом стоит винить (или благодарить) наших далеких предков: страх перед животными и явлениями природы не раз спасал им жизнь.", "img" => "/index/author-article-1.jpg"]); ?>

	</div>

	<div class="grid__18">

		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "6 страхов, которые достались нам в тяжелое наследство", "text" => "Боитесь темноты, не выносите змей? Возможно, в этом стоит винить (или благодарить) наших далеких предков: страх перед животными и явлениями природы не раз спасал им жизнь.", "img" => "/index/author-article-1.jpg"]); ?>

	</div>

	<div class="grid__19">

		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "6 страхов, которые достались нам в тяжелое наследство", "text" => "Боитесь темноты, не выносите змей? Возможно, в этом стоит винить (или благодарить) наших далеких предков: страх перед животными и явлениями природы не раз спасал им жизнь.", "img" => "/index/author-article-1.jpg"]); ?>

	</div>

	<div class="grid__20">

		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "6 страхов, которые достались нам в тяжелое наследство", "text" => "Боитесь темноты, не выносите змей? Возможно, в этом стоит винить (или благодарить) наших далеких предков: страх перед животными и явлениями природы не раз спасал им жизнь.", "img" => "/index/author-article-1.jpg"]); ?>

	</div>

	<div class="grid__21 hide--tablet">

		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "6 страхов, которые достались нам в тяжелое наследство", "text" => "Боитесь темноты, не выносите змей? Возможно, в этом стоит винить (или благодарить) наших далеких предков: страх перед животными и явлениями природы не раз спасал им жизнь.", "img" => "/index/author-article-1.jpg"]); ?>

	</div>

	<div class="grid__22 hide--tablet hide--phone">

		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "6 страхов, которые достались нам в тяжелое наследство", "text" => "Боитесь темноты, не выносите змей? Возможно, в этом стоит винить (или благодарить) наших далеких предков: страх перед животными и явлениями природы не раз спасал им жизнь.", "img" => "/index/author-article-1.jpg"]); ?>

	</div>

	<div class="grid__23 hide--laptop hide--tablet hide--phone">

		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "6 страхов, которые достались нам в тяжелое наследство", "text" => "Боитесь темноты, не выносите змей? Возможно, в этом стоит винить (или благодарить) наших далеких предков: страх перед животными и явлениями природы не раз спасал им жизнь.", "img" => "/index/author-article-1.jpg"]); ?>

	</div>

	<div class="grid__24 hide--laptop hide--tablet hide--phone">

		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "6 страхов, которые достались нам в тяжелое наследство", "text" => "Боитесь темноты, не выносите змей? Возможно, в этом стоит винить (или благодарить) наших далеких предков: страх перед животными и явлениями природы не раз спасал им жизнь.", "img" => "/index/author-article-1.jpg"]); ?>

	</div>

	<div class="grid__501" id="grid__501">

		<? req_with_param(PATH__COMMON . "/banner-300-600.php") ?>

	</div>

	<div class="grid__500">

		<? req_with_param(PATH__COMMON . "/show-more-block.php", ["id" => "show-more-block"]); ?>

	</div>

	<div class="grid__502">

		<? req_with_param(PATH__COMMON . "/show-more-btn.php", ["id" => "show-more-btn"]); ?>

	</div>

</div>