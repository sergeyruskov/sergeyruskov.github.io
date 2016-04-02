<div class="content-wrapper grid <?= $params["branding"]; ?>">

	<div class="grid__1">

		<? req_with_param(PATH__COMMON . "/announcements.php",
				[
						"modification" => "announcements--index",
						"first-element-classes" => "",
						"second-element-classes" => "",
						"third-element-classes" => "hide--tablet",
						"fourth-element-classes" => "hide--tablet hide--laptop hide--phone",
				]
		); ?>

	</div>

	<div class="grid__2">

		<? req_with_param(PATH__COMMON . "/section-name.php", [
				"name" => "Красота",
				"modification" => "section"
		]); ?>

	</div>

	<div class="grid__3">

		<? req_with_param(PATH__COMMON . "/test/test-menu.php",
				[
						"modification" => "test-menu--test",
						"menu" => ["Лицо", "Тело", "Волосы", "Аромат", "Стиль"]
				]
		); ?>

	</div>

	<div class="grid__4">

		<? req_with_param(PATH__COMMON . "/forum-block.php", ["modification" => "index-forum--index"]); ?>

	</div>

	<div class="grid__5">

		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "Иллюзия дефекта:
4 принципа общения с особыми детьми", "text" => "Педагог и психолог Кристель Манске работает с аутистами, детьми с трисомией, СДВГ и другими особенностями уже больше 40 лет.", "img" => "/section/article-21.jpg"]); ?>


	</div>

	<div class="grid__6">

		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "Как сохранить и улучшить отношения в паре?", "text" => "Среди множества правил для двоих, которые можно высечь на скрижалях – или хотя бы записать на шпаргалке, – коуч Леонид Кроль выделяет 12 «пунктов ценности».", "img" => "/section/article-2.jpg"]); ?>


	</div>

	<div class="grid__7">

		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "Найден ген, располагающий к депрессии?", "text" => "Любой вид терапии эффективен при депрессии не более чем для 60% больных. Возможно, изучение генетической стороны депрессии поможет в некоторых случаях точнее подбирать методы лечение.", "img" => "/section/article-3.jpg"]); ?>

	</div>

	<div class="grid__8">

		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "Женское здоровье. Советы тибетского врача", "text" => "Как забыть о том, что такое ПМС, и прекрасно чувствовать себя в любой день, несмотря ни на что, рассказывает врач тибетской медицины Юлия Юсипова.", "img" => "/section/article-4.jpg"]); ?>

	</div>

	<div class="grid__9">

		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "Почему так популярны восточные ритуалы красоты?", "text" => "Аромат индийского дерева уд, арабские акценты в макияже, сложные японские ритуалы красоты, корейские и китайские тональные кремы... Откуда у нас эта тяга к Востоку?", "img" => "/section/article-11.jpg"]); ?>


	</div>

	<div class="grid__10">

		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "О чем говорит наша обувь", "text" => "Чувственность и свобода, естественность и комфорт, уверенность и стремление к разнообразию – обувь отражает все эти ценности современной женщины. Достаточно посмотреть себе под ноги!", "img" => "/section/article-13.jpg", "author" =>
				true]); ?>
	</div>

	<div class="grid__11 hide--phone">

		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "Ослепительна, несмотря на вес", "text" => "Что делать, если вы чувствуете себя слишком толстой, чтобы быть привлекательной? В первую очередь нужно менять образ мысли, а не цифру на весах, считает психолог Эстер Перель.", "img" => "/section/article-22.jpg"]); ?>

	</div>

	<div class="grid__12 hide--phone">

		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "Три процедуры для волос и не только", "text" => "Филлеры – новое слово в уходе за волосами. Активные ингредиенты этих «наполнителей» проникают глубоко в каждый волос, куда ни одна маска для волос попасть не сможет.", "img" => "/section/article-14.jpg"]); ?>

	</div>

	<div class="grid__13 hide--phone">

		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "Иллюзия дефекта:
4 принципа общения с особыми детьми", "text" => "Педагог и психолог Кристель Манске работает с аутистами, детьми с трисомией, СДВГ и другими особенностями уже больше 40 лет. ", "img" => "/section/article-15.jpg"]); ?>
	</div>

	<div class="grid__14 hide--tablet hide--phone">

		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "Я красивая или обыкновенная?", "text" => "Компания Dove не перестает удивлять. Несколько лет назад ее продукцию рекламировали пять «обычных» женщин самого разного возраста и телосложения. ", "img" => "/section/article-1.jpg"]); ?>

	</div>

	<div class="grid__15 hide--tablet hide--phone">

		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "«Я чувствую себя бездарностью, ни на что не способной»", "text" => "С подачи психолога Карла Юнга мы делим людей на экстравертов и интровертов. Но между экстравертами существуют различия, уверены нейробиологи. ", "img" => "/section/article-23.jpg"]); ?>
	</div>

	<div class="grid__16 hide--laptop hide--tablet">

		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "«Как мне решиться уехать от матери»", "text" => "Мать Сильвии отказывается принимать решения самостоятельно, во всем полагается на дочь и не отпускает ее от себя ни на шаг. Но Сильвия, 22-летняя студентка, хочет наконец начать жить своей жизнью. Как это сделать?", "img" => "/section/article-5.jpg"]); ?>


	</div>

	<div class="grid__17 hide--laptop hide--tablet hide--phone">

		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "«Я чувствую себя бездарностью, ни на что не способной»", "text" => "С подачи психолога Карла Юнга мы делим людей на экстравертов и интровертов. Но между экстравертами существуют различия, уверены нейробиологи. ", "img" => "/section/article-6.jpg"]); ?>


	</div>

	<div class="grid__18 hide--laptop hide--tablet hide--phone">

		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "Краски на кончиках пальцев", "text" => "Поглаживания полезны, и об этом давно знают психологи. Теперь и визажисты оценили прелесть тактильного контакта: они призывают нас наносить макияж не кисточкой, а пальцами.", "img" => "/section/article-12.jpg"]); ?>

	</div>

	<div class="grid__19 hide--laptop hide--tablet hide--phone">

		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "Три процедуры для волос и не только", "text" => "Филлеры – новое слово в уходе за волосами. Активные ингредиенты этих «наполнителей» проникают глубоко в каждый волос, куда ни одна маска для волос попасть не сможет.", "img" => "/section/article-14.jpg"]); ?>

	</div>

	<div class="grid__20 hide--laptop hide--tablet hide--phone">

		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "6 страхов, которые достались нам в тяжелое наследство", "text" => "Боитесь темноты, не выносите змей? Возможно, в этом стоит винить (или благодарить) наших далеких предков: страх перед животными и явлениями природы не раз спасал им жизнь.", "img" => "/section/article-24.jpg"]); ?>

	</div>

	<div class="grid__21">

		<? req_with_param(PATH__COMMON . "/rubric-title.php", ["text" => "Лучшее в разделе", "modification" => "rubric-title--phone-center"]); ?>

	</div>

	<div class="grid__22">

		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "Здоровье удовольствия", "text" => "Чем порадовать себя перед праздниками? Как оставить в прошлом усталость и стресс? Новые процедуры для красоты и здоровья помогут встретить следующий год уверенно и спокойно.", "img" => "/section/article-7.jpg"]); ?>


	</div>

	<div class="grid__23">

		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "Я и мое тело: 9 книг о том, как нам наладить отношения", "text" => "Как научиться любить и понимать свое тело, осознанно и правильно управлять им? Что нам мешает чувствовать свободу движений и открывать новые возможности организма? ", "img" => "/section/article-8.jpg"]); ?>

	</div>

	<div class="grid__24 hide--tablet hide--phone">

		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "Галь Гадот, непобедимая амазонка", "text" => "Галь Гадот – актриса, спортсменка, красавица и образ нового аромата Bamboo, Gucci, – рассказывает о том, как хранить верность идеалам и быть почти идеальной матерью.", "img" => "/section/article-9.jpg"]); ?>


	</div>

	<div class="grid__25 hide--laptop hide--tablet hide--phone">

		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "На свежую голову: волосы зимой", "text" => "Стресс, вредные привычки, снижение иммунитета зимой – вот причины наших проблем с кожей головы. Проще говоря, появляется перхоть.", "img" => "/section/article-10.jpg"]); ?>


	</div>

	<div class="grid__26">

		<? req_with_param(PATH__COMMON . "/rubric-title.php", ["text" => "Популярные тесты", "modification" => "rubric-title--phone-center"]); ?>

	</div>

	<div class="grid__27">

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

	<div class="grid__28 hide--phone">

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

	<div class="grid__29 hide--tablet hide--phone">

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

	<div class="grid__30 hide--laptop hide--tablet hide--phone">

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

	<div class="grid__31">
		<? req_with_param(PATH__COMMON . "/psy-question-block.php",
				["title" => "Есть ли смысл встречаться зная, что это не приведет к семье?", "question-author" => "Ирина, 27", "question-answer" => "Млодик Ирина", "img" => "/index/test.jpg", "author-specialization" => "Психолог, психотерапевт"]); ?>

	</div>

	<div class="grid__32">
		<? req_with_param(PATH__COMMON . "/low-announcements-block.php", ["modification" => "low-announcements-block--index"]); ?>

	</div>

	<div class="grid__33 hide--phone">

		<? req_with_param(PATH__COMMON . "/special-project-block.php", ["project" => "Спецпроекты", "title" => "Территория красоты", "text" => "Путеводитель для желающих сохранить кожу зимой. Лучшие средства для питания и увлажнения в холодные месяцы.", "img" => "/index/special-project.jpg"]); ?>

	</div>

	<div class="grid__34 hide--phone">
		<? req_with_param(PATH__COMMON . "/socials-block.php"); ?>

	</div>

	<div class="grid__35">

		<? req_with_param(PATH__COMMON . "/dossier-block.php",
				[
						"modification" => "col__4--desktop col__2--laptop col__2--tablet col__1--phone h430--laptop h430--tablet dossier-block--section",
						"title" => "Толстые люди: полюбить себя и жить с удовольствием",
						"text" => "Стремление к улучшению собственной внешности не дает покоя даже самым ослепительным красавицам. Что уж говорить обо всех остальных: большинство из нас мечтает избавиться от лишних килограммов. Но в пылу борьбы за идеальную фигуру можно забыть о том, что слишком полные бедра, большой живот или даже, о ужас, двойной подбородок не мешают принимать себя, наслаждаться близкими отношениями и проживать каждый день."
				]); ?>

	</div>

	<div class="grid__36">

		<? req_with_param(PATH__COMMON . "/rubric-title.php", ["text" => "Субботний рамблер", "modification" => "rubric-title--phone-center"]); ?>

	</div>

	<div class="grid__37">

		<? req_with_param(PATH__COMMON . "/rambler-advertising-block.php", [
				"img" => "/section/article-18.jpg",
				"title" => "Признаки старения"]); ?>

	</div>


	<div class="grid__38">

		<? req_with_param(PATH__COMMON . "/external-articles.php", [
				"title" => "Gnezdo",
				"img1" => "/index/external-article.jpg", "text1" => "4 правила, которые предотвратят старение кожи шеи",
				"img2" => "/index/external-article.jpg", "text2" => "Умные стрижки, которые делают моложе!",
				"img3" => "/index/external-article.jpg", "text3" => "Самые эффективные упражнения для красоты рук",
				"img4" => "/index/external-article.jpg", "text4" => "Вся правда о свадьба Анджелины Джоли"
		]); ?>


	</div>

	<div class="grid__39">
		<? req_with_param(PATH__COMMON . "/external-articles.php", [
				"title" => "Lentainform",
				"img1" => "/index/external-article.jpg", "text1" => "Василиса Володина родила",
				"img2" => "/index/external-article.jpg", "text2" => "Рулет из лаваша: готовится очень просто и быстро",
				"img3" => "/index/external-article.jpg", "text3" => "Звезды за 40, как они выглядят в купальниках",
				"img4" => "/index/external-article.jpg", "text4" => "Пресс как у Меган Фокс: делай планку"
		]); ?>


	</div>

	<div class="grid__40 hide--tablet hide--phone">

		<? req_with_param(PATH__COMMON . "/rambler-advertising-block.php", [
				"img" => "/section/article-19.jpg",
				"title" => "Коротко об истории женских дуэлей"]); ?>

	</div>

	<div class="grid__41">
		<? req_with_param(PATH__COMMON . "/yandex-direct.php",
				[
						"modification" => "content-wrapper yandex-direct--section"]
		) ?>
	</div>

	<div class="grid__42 hide--laptop hide--tablet hide--phone">

		<? req_with_param(PATH__COMMON . "/rambler-advertising-block.php", [
				"img" => "/section/article-20.jpg",
				"title" => "Как оставаться в форме без спортзала"]); ?>

	</div>

	<div class="grid__43">

		<? req_with_param(PATH__COMMON . "/special-project-block.php", ["project" => "Конкурс", "title" => "Готовим вместе", "text" => "Испачкать руки в муке. Вдохнуть аромат свежей выпечки. Ощутить игру специй. Увидеть, как створки мидий раскрываются при обжарке...", "img" => "/section/concurs.jpg"]); ?>

	</div>

	<div class="grid__44">

		<? req_with_param(PATH__COMMON . "/rambler-advertising-block.php", [
				"img" => "/section/article-17.jpg",
				"title" => "Неравные браки отечественных звезд"]); ?>

	</div>

	<div class="grid__45">

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