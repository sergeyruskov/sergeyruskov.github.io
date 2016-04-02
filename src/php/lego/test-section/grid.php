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

		<? req_with_param(PATH__COMMON . "/section-name.php", ["name" => "Тесты",
				"modification" => "section"]); ?>

	</div>

	<div class="grid__3">

		<? req_with_param(PATH__COMMON . "/test/test-menu.php",
				[
						"modification" => "test-menu--test",
						"menu" => ["Общение", "Двое", "Секс", "Семья", "Красота", "Работа и карьера", "IQ"],
						"search" => true]); ?>

	</div>

	<div class="grid__4">

		<? req_with_param(PATH__COMMON . "/test/test-block.php", [
				"img" => "/test-section/test-section__1.jpg",
				"rubric" => "Личность",
				"title" => "Умеете ли вы делать свою жизнь прекраснее?",
				"text" => "Что для вас важнее: заботиться о себе, быть в контакте с окружающими или
		пытаться изменить мир? Тест психолога Кристофа Андре (Christophe André) поможем вам разобраться.",
				"socials" => true,
				"modification" => "test-block--test-result link link--grey",
				"hide-block-title" => true,
				"btn-text" => "Пройти тест"
		]) ?>

	</div>

	<div class="grid__5">

		<? req_with_param(PATH__COMMON . "/test/test-block.php", [
				"img" => "/test-section/test-section__6.jpg",
				"rubric" => "Личность",
				"title" => "Что для вас значит нежность?",
				"text" => "Вы не склонны к излиянию чувств или, наоборот, охотно делитесь своими чувствами с другими? Вас считают черствым и мужественным? Или вы умеете дарить нежность безвозмездно? Наш тест поможет вам разобраться.",
				"socials" => true,
				"modification" => "test-block--test-result link link--grey",
				"hide-block-title" => true,
				"btn-text" => "Пройти тест"
		]) ?>

	</div>



	<div class="grid__6">

		<? req_with_param(PATH__COMMON . "/test/test-block.php", [
				"img" => "/test-section/test-section__3.jpg",
				"rubric" => "Общение",
				"title" => "Как устроена ваша память?",
				"text" => "Когда вы пытаетесь что-то вспомнить, что скорее всплывает на поверхность сознания? То, что вы видели, чувствовали или то, к чему прикасались? Чтобы узнать, как устроена ваша память, мы предлагаем вам ответить на вопросы теста. ",
				"socials" => true,
				"modification" => "test-block--test-result link link--grey",
				"hide-block-title" => true,
				"btn-text" => "Пройти тест"
		]) ?>

	</div>

	<div class="grid__7">

		<? req_with_param(PATH__COMMON . "/test/test-block.php", [
				"img" => "/test-section/test-section__4.jpg",
				"rubric" => "Личность",
				"title" => "Есть ли у вас фобии?",
				"text" => "Пауки, замкнутое пространство, боязнь толпы… Знакомы ли вам эти страхи? Узнайте об уровне своего дискомфорта с помощью нашего теста.",
				"socials" => true,
				"modification" => "test-block--test-result link link--grey",
				"hide-block-title" => true,
				"btn-text" => "Пройти тест"
		]) ?>

	</div>

	<div class="grid__8">

		<? req_with_param(PATH__COMMON . "/test/test-block.php", [
				"img" => "/test-section/test-section__7.jpg",
				"rubric" => "Общение",
				"title" => "Умеете ли вы подчеркивать свои достоинства?",
				"text" => "Вы умеете быть собой в любой ситуации или, наоборот, избегаете слишком тесного общения? А может быть, вы уверены, что все и так знают, насколько вы хороши? Проверьте себя с помощью нашего теста.",
				"socials" => true,
				"modification" => "test-block--test-result link link--grey",
				"hide-block-title" => true,
				"btn-text" => "Пройти тест"
		]) ?>

	</div>

	<div class="grid__9 hide--tablet hide--phone">

		<? req_with_param(PATH__COMMON . "/test/test-block.php", [
				"img" => "/test-section/test-section__2.jpg",
				"rubric" => "Личность",
				"title" => "Эмоциональный интеллект: определите свой уровень",
				"text" => "IQ (коэффициент интеллекта) играет важную роль в нашей жизни. Однако не меньшее значение имеет и EQ (интеллект эмоциональный).",
				"socials" => true,
				"modification" => "test-block--test-result link link--grey",
				"hide-block-title" => true,
				"btn-text" => "Пройти тест"
		]) ?>

	</div>

	<div class="grid__10 hide--tablet hide--phone">

		<? req_with_param(PATH__COMMON . "/test/test-block.php", [
				"img" => "/test-section/test-section__5.jpg",
				"rubric" => "Двое",
				"title" => "Любите ли вы играть с огнем?",
				"text" => "Некоторым из нас нравится вносить в свою жизнь элемент риска. Стремясь избежать монотонности в отношениях, они часто попадают в потенциально опасные ситуации. Ощущение опасности бодрит их, а игра только увеличивает желание. Другие же, наоборот, предпочитают держаться подальше от пламени и тушить любые искры, пока они не разгорелись. А что предпочитаете вы? Раздувать огонь или гасить его?",
				"socials" => true,
				"modification" => "test-block--test-result link link--grey",
				"hide-block-title" => true,
				"btn-text" => "Пройти тест"
		]) ?>

	</div>

	<div class="grid__11 hide--tablet hide--phone">

		<? req_with_param(PATH__COMMON . "/test/test-block.php", [
				"img" => "/test-section/test-section__12.jpg",
				"rubric" => "Семья",
				"title" => "Как выглядит ваш «внутренний ребенок»?",
				"text" => "Образцовый малыш, бунтарь или сама непосредственность? Узнав, кто «командует» вами изнутри, вам будет проще изменить (если понадобится) свое привычное поведение.",
				"socials" => true,
				"modification" => "test-block--test-result link link--grey",
				"hide-block-title" => true,
				"btn-text" => "Пройти тест"
		]) ?>

	</div>

	<div class="grid__12 hide--laptop hide--tablet hide--phone">

		<? req_with_param(PATH__COMMON . "/test/test-block.php", [
				"img" => "/test-section/test-section__12.jpg",
				"rubric" => "Семья",
				"title" => "Как выглядит ваш «внутренний ребенок»?",
				"text" => "Образцовый малыш, бунтарь или сама непосредственность? Узнав, кто «командует» вами изнутри, вам будет проще изменить (если понадобится) свое привычное поведение.",
				"socials" => true,
				"modification" => "test-block--test-result link link--grey",
				"hide-block-title" => true,
				"btn-text" => "Пройти тест"
		]) ?>

	</div>

	<div class="grid__13 hide--laptop hide--tablet hide--phone">

		<? req_with_param(PATH__COMMON . "/test/test-block.php", [
				"img" => "/test-section/test-section__12.jpg",
				"rubric" => "Семья",
				"title" => "Как выглядит ваш «внутренний ребенок»?",
				"text" => "Образцовый малыш, бунтарь или сама непосредственность? Узнав, кто «командует» вами изнутри, вам будет проще изменить (если понадобится) свое привычное поведение.",
				"socials" => true,
				"modification" => "test-block--test-result link link--grey",
				"hide-block-title" => true,
				"btn-text" => "Пройти тест"
		]) ?>

	</div>

	<div class="grid__14 hide--laptop hide--tablet hide--phone">

		<? req_with_param(PATH__COMMON . "/test/test-block.php", [
				"img" => "/test-section/test-section__12.jpg",
				"rubric" => "Семья",
				"title" => "Как выглядит ваш «внутренний ребенок»?",
				"text" => "Образцовый малыш, бунтарь или сама непосредственность? Узнав, кто «командует» вами изнутри, вам будет проще изменить (если понадобится) свое привычное поведение.",
				"socials" => true,
				"modification" => "test-block--test-result link link--grey",
				"hide-block-title" => true,
				"btn-text" => "Пройти тест"
		]) ?>

	</div>

	<div class="grid__15">

		<? req_with_param(PATH__COMMON . "/yandex-direct.php",
				[
					"modification" => "col__3--desktop col__2--laptop col__2--tablet col__1--phone yandex-direct--test-section"
				])
		?>

	</div>

	<div class="grid__16">

		<? req_with_param(PATH__COMMON . "/show-more-block.php", ["id" => "show-more-block-2"]); ?>

	</div>

	<div class="grid__17">

		<? req_with_param(PATH__COMMON . "/show-more-btn.php", ["id" => "show-more-btn-2"]); ?>

	</div>

	<div class="grid__18">

		<? req_with_param(PATH__COMMON . "/rubric-title.php", ["text" => "Популярные тесты", "modification" => "rubric-title--phone-center"]); ?>

	</div>

	<div class="grid__19">

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

	<div class="grid__20 hide--phone">

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

	<div class="grid__21 hide--phone hide--tablet">

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

	<div class="grid__22 hide--phone hide--tablet hide--laptop">

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

	<div class="grid__23 hide--phone">

		<? req_with_param(PATH__COMMON . "/test/test-quiz.php", ["modification" => "test-quiz--test-section"]); ?>

	</div>

	<div class="grid__24">

		<? req_with_param(PATH__COMMON . "/rubric-title.php", ["text" => "Новое на сайте", "modification" => "rubric-title--phone-center"]); ?>

	</div>

	<div class="grid__25">

		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "6 страхов, которые достались нам в тяжелое наследство", "text" => "Боитесь темноты, не выносите змей? Возможно, в этом стоит винить (или благодарить) наших далеких предков: страх перед животными и явлениями природы не раз спасал им жизнь.", "img" => "/index/author-article-1.jpg"]); ?>

	</div>

	<div class="grid__26">

		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "6 страхов, которые достались нам в тяжелое наследство", "text" => "Боитесь темноты, не выносите змей? Возможно, в этом стоит винить (или благодарить) наших далеких предков: страх перед животными и явлениями природы не раз спасал им жизнь.", "img" => "/index/author-article-1.jpg"]); ?>

	</div>

	<div class="grid__27">

		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "6 страхов, которые достались нам в тяжелое наследство", "text" => "Боитесь темноты, не выносите змей? Возможно, в этом стоит винить (или благодарить) наших далеких предков: страх перед животными и явлениями природы не раз спасал им жизнь.", "img" => "/index/author-article-1.jpg"]); ?>

	</div>

	<div class="grid__28">

		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "6 страхов, которые достались нам в тяжелое наследство", "text" => "Боитесь темноты, не выносите змей? Возможно, в этом стоит винить (или благодарить) наших далеких предков: страх перед животными и явлениями природы не раз спасал им жизнь.", "img" => "/index/author-article-1.jpg"]); ?>

	</div>

	<div class="grid__29 hide--tablet">

		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "6 страхов, которые достались нам в тяжелое наследство", "text" => "Боитесь темноты, не выносите змей? Возможно, в этом стоит винить (или благодарить) наших далеких предков: страх перед животными и явлениями природы не раз спасал им жизнь.", "img" => "/index/author-article-1.jpg"]); ?>

	</div>

	<div class="grid__30 hide--tablet hide--phone">

		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "6 страхов, которые достались нам в тяжелое наследство", "text" => "Боитесь темноты, не выносите змей? Возможно, в этом стоит винить (или благодарить) наших далеких предков: страх перед животными и явлениями природы не раз спасал им жизнь.", "img" => "/index/author-article-1.jpg"]); ?>

	</div>

	<div class="grid__31 hide--laptop hide--tablet hide--phone">

		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "6 страхов, которые достались нам в тяжелое наследство", "text" => "Боитесь темноты, не выносите змей? Возможно, в этом стоит винить (или благодарить) наших далеких предков: страх перед животными и явлениями природы не раз спасал им жизнь.", "img" => "/index/author-article-1.jpg"]); ?>

	</div>

	<div class="grid__32 hide--laptop hide--tablet hide--phone">

		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "6 страхов, которые достались нам в тяжелое наследство", "text" => "Боитесь темноты, не выносите змей? Возможно, в этом стоит винить (или благодарить) наших далеких предков: страх перед животными и явлениями природы не раз спасал им жизнь.", "img" => "/index/author-article-1.jpg"]); ?>

	</div>

	<div class="grid__500">

		<? req_with_param(PATH__COMMON . "/show-more-block.php", ["id" => "show-more-block"]); ?>

	</div>

	<div class="grid__501">

		<? req_with_param(PATH__COMMON . "/banner-300-600.php") ?>

	</div>

	<div class="grid__502">

		<? req_with_param(PATH__COMMON . "/show-more-btn.php", ["id" => "show-more-btn"]); ?>

	</div>

	<div class="grid__support"></div>

</div>