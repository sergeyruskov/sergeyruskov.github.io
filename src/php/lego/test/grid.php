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
						"search" => true
				]); ?>

	</div>

	<div class="grid__4">

		<div class="test-main-content col__3--desktop col__2--laptop col__2--tablet col__1--phone">

			<? req_with_param(PATH__COMMON . "/test/test-description.php", [
					"modification" => "test-description--test",
					"show-number" => true,
					"title" => "Умеете ли вы делать свою жизнь прекраснее?",
					"text" => "<p>Слово «харизма» происходит от греческого charisma («божья благодать»). Харизматичными принято называть людей, которые обладают способностью привлекать взгляды и воздействовать на других, не прилагая к этому
		особых усилий и зачастую не отдавая себе в этом отчета. Еще несколько лет назад харизматиками считали
		людей незаурядных или знаменитых, однако сейчас это слово перешло в разряд обыденных. Мы регулярно
		говорим «он/она обладает харизмой» о людях, которым удалось выделиться и которыми мы восхищаемся. «С
		психоаналитической точки зрения, харизма – это качества, которые мы разработали внутри себя и которые
		улавливаются другими людьми, – считает психоаналитик Жерар Боннэ (Gérard Bonnet). – В каждом из нас есть
		то, что привлекает и очаровывает других. харизмой обладаете вы?</p>",
					"test-img" => true,
					"author-without-photo" => true
			]); ?>

			<div class="test-main-content__wrapper-test-questions-form">

				<? req_with_param(PATH__COMMON . "/test/test-questions-form.php"); ?>

			</div>

		</div>

	</div>

	<div class="grid__5">
		
		<? req_with_param(PATH__COMMON . "/test/test-social-blocks.php",
				["modification" => "test-social-blocks--test"]
		); ?>

	</div>

	<div class="grid__6">
		<? req_with_param(PATH__COMMON . "/rubric-title.php", ["text" => "Популярные тесты", "modification" => "rubric-title--phone-center"]); ?>
	</div>

	<div class="grid__7">

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

	<div class="grid__8 hide--phone">
		<? req_with_param(PATH__COMMON . "/test/test-block.php", [
				"img" => "/index/test.jpg",
				"rubric" => "Личность",
				"title" => "Какой у вас тип харизмы?",
				"test-counter" => "Тест пройден 77645 раз",
				"btn-text" => "Пройти тест",
				"hide-block-title" => true,
				"modification" => "test-block--test-page link link--white"
		]); ?>
	</div>

	<div class="grid__9 hide--tablet hide--phone">
		<? req_with_param(PATH__COMMON . "/test/test-block.php", [
				"img" => "/index/test.jpg",
				"rubric" => "Личность",
				"title" => "Вы интроверт или экстраверт?",
				"test-counter" => "Тест пройден 153451 раз",
				"btn-text" => "Пройти тест",
				"hide-block-title" => true,
				"modification" => "test-block--test-page link link--white"
		]); ?>
	</div>

	<div class="grid__10 hide--laptop hide--tablet hide--phone">
		<? req_with_param(PATH__COMMON . "/test/test-block.php", [
				"img" => "/index/test.jpg",
				"rubric" => "Двое",
				"title" => "Готовы ли вы к (новой) любви?",
				"test-counter" => "Тест пройден 52834 раз",
				"btn-text" => "Пройти тест",
				"hide-block-title" => true,
				"modification" => "test-block--test-page link link--white"
		]); ?>
	</div>

	<div class="grid__11">
		<? req_with_param(PATH__COMMON . "/rubric-title.php", [
				"text" => "Новое на сайте", "modification" => "rubric-title--phone-center"
		]); ?>
	</div>

	<div class="grid__12">
		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "Как сохранить и улучшить отношения в паре?", "text" => "Среди множества правил для двоих, которые можно высечь на скрижалях – или хотя бы записать на шпаргалке, – коуч Леонид Кроль выделяет 12 «пунктов ценности».", "img" => "/index/author-article-12.jpg"]); ?>
	</div>

	<div class="grid__13">
		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "Младенцы удивили психологов", "text" => "Дети до года обладают достаточными знаниями о мире, чтобы удивляться проходящему сквозь стену мячику и едущей по воздуху машинке. И это удивление – мощный стимул для их развития.", "img" => "/index/author-article-15.jpg"]); ?>
	</div>

	<div class="grid__14">
		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "8 способов улучшить свою жизнь", "text" => "Если вы фанат списков и вам удается извлекать из них пользу, мы предлагаем список вещей, которые НЕ нужно делать. ", "img" => "/index/author-article-18.jpg"]); ?>
	</div>

	<div class="grid__15">
		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "«Как мне решиться уехать от матери»", "text" => "Мать Сильвии отказывается принимать решения самостоятельно, во всем полагается на дочь и не отпускает ее от себя ни на шаг. Но Сильвия, 22-летняя студентка, хочет наконец начать жить своей жизнью. Как это сделать?", "img" => "/index/author-article-16.jpg"]); ?>
	</div>

	<div class="grid__16 hide--tablet">
		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "Иллюзия дефекта:
4 принципа общения с особыми детьми", "text" => "Педагог и психолог Кристель Манске работает с аутистами, детьми с трисомией, СДВГ и другими особенностями уже больше 40 лет.", "img" => "/index/author-article-23.jpg"]); ?>
	</div>

	<div class="grid__17 hide--tablet hide--phone">
		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "Ослепительна, несмотря на вес", "text" => "Что делать, если вы чувствуете себя слишком толстой, чтобы быть привлекательной? В первую очередь нужно менять образ мысли, а не цифру на весах, считает психолог Эстер Перель.", "img" => "/index/author-article-20.jpg"]); ?>
	</div>

	<div class="grid__18 hide--laptop hide--tablet hide--phone">
		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "«Я чувствую себя бездарностью, ни на что не способной»", "text" => "С подачи психолога Карла Юнга мы делим людей на экстравертов и интровертов. Но между экстравертами существуют различия, уверены нейробиологи. ", "img" => "/index/author-article-17.jpg"]); ?>
	</div>

	<div class="grid__19 hide--laptop hide--tablet hide--phone">
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

</div>