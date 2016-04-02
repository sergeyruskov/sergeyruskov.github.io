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

		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "Нарциссы знают, что несносны. Но продолжают любить себя", "text" => "Умные, уверенные в себе, яркие… При первой встрече они вызывают восхищение.", "img" => "/index/author-article-2.jpg", "video" => true]); ?>

	</div>

	<div class="grid__3">

		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "6 страхов, которые достались нам в тяжелое наследство", "text" => "Боитесь темноты, не выносите змей? Возможно, в этом стоит винить (или благодарить) наших далеких предков: страх перед животными и явлениями природы не раз спасал им жизнь.", "img" => "/index/author-article-1.jpg", "author" => true]); ?>

	</div>

	<div class="grid__4">

		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "«Как мне решиться уехать от матери»", "text" => "Мать Сильвии отказывается принимать решения самостоятельно, во всем полагается на дочь и не отпускает ее от себя ни на шаг. Но Сильвия, 22-летняя студентка, хочет наконец начать жить своей жизнью. Как это сделать? ", "img" => "/index/author-article-16.jpg"]); ?>

	</div>

	<div class="grid__5">

		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "Младенцы удивили психологов", "text" => "Дети до года обладают достаточными знаниями о мире, чтобы удивляться проходящему сквозь стену мячику и едущей по воздуху машинке. И это удивление – мощный стимул для их развития.", "img" => "/index/author-article-15.jpg", "author" => true]); ?>

	</div>

	<div class="grid__6">
		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "Женское здоровье. <br> Советы тибетского врача", "text" => "Как забыть о том, что такое ПМС, и прекрасно чувствовать себя в любой день, несмотря ни на что, рассказывает врач тибетской медицины Юлия Юсипова.", "img" => "/index/author-article-13.jpg"]); ?>
	</div>

	<div class="grid__7">
		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "Как сохранить и улучшить отношения в паре?", "text" => "Среди множества правил для двоих, которые можно высечь на скрижалях – или хотя бы записать на шпаргалке, – коуч Леонид Кроль выделяет 12 «пунктов ценности».", "img" => "/index/author-article-12.jpg"]); ?>
	</div>

	<div class="grid__8 hide--phone">

		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "Японские мужчины боятся секса", "text" => "Среди взрослых японцев число девственников выше, чем в любой другой стране. Но для многих из них это не сознательный выбор, а результат социальных трудностей.", "img" => "/index/author-article-22.jpg"]); ?>

	</div>

	<div class="grid__9 hide--phone">

		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "8 способов улучшить свою жизнь", "text" => "Если вы фанат списков и вам удается извлекать из них пользу, мы предлагаем список вещей, которые НЕ нужно делать. Перестав сплетничать, отвлекаться, жить прошлым и выжидать идеальный момент, вы сможете радикально улучшить качество своей работы, самочувствие и отношения с друзьями и коллегами.", "img" => "/index/author-article-18.jpg", "author" => true]); ?>

	</div>

	<div class="grid__10 hide--phone">

		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "Ссориться, но грамотно", "text" => "От того, как мы ссоримся, наши отношения с партнером могут улучшиться или оказаться под угрозой. Предлагаем вам шесть приемов, которые помогут продвигаться во время споров в правильном направлении.", "img" => "/index/author-article-21.jpg"]); ?>

	</div>

	<div class="grid__11 hide--tablet hide--phone">
		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "Найден ген, располагающий к депрессии?", "text" => "Любой вид терапии эффективен при депрессии не более чем для 60% больных. Возможно, изучение генетической стороны депрессии поможет в некоторых случаях точнее подбирать методы лечение.", "img" => "/index/author-article-14.jpg"]); ?>
	</div>

	<div class="grid__12 hide--laptop hide--phone">

		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "Дружба на работе: как
				обойти подводные камни?", "text" => "Руководить тем, с кем дружишь (или, наоборот, дружить с тем, кем руководишь) не так-то просто. Зачастую здесь страдают либо отношения, либо дело.", "img" => "/index/author-article-3.jpg"]); ?>

	</div>

	<div class="grid__13 hide--laptop hide--tablet hide--phone">
		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "Я красивая или обыкновенная?", "text" => "Компания Dove не перестает удивлять. Несколько лет назад ее продукцию рекламировали пять «обычных» женщин самого разного возраста и телосложения.", "img" => "/index/author-article-11.jpg"]); ?>
	</div>

	<div class="grid__14 hide--laptop hide--tablet hide--phone">

		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "«Я чувствую себя бездарностью, ни на что не способной»", "text" => "С подачи психолога Карла Юнга мы делим людей на экстравертов и интровертов. Но между экстравертами существуют различия, уверены нейробиологи. ", "img" => "/index/author-article-17.jpg"]); ?>

	</div>

	<div class="grid__15 hide--laptop hide--tablet hide--phone">

		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "Два бокала на ночь – это алкоголизм?", "text" => "Говорят, что пьющие люди пьют оттого, что они несчастливы. А что, если наоборот – они несчастливы, оттого что пьют? Наша героиня, 42-летняя Наталья, решила поставить на себе эксперимент, чтобы разобраться в этом непростом вопросе.", "img" => "/index/author-article-19.jpg"]); ?>

	</div>

	<div class="grid__16 hide--laptop hide--tablet hide--phone">

		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "Ослепительна, несмотря на вес", "text" => "Что делать, если вы чувствуете себя слишком толстой, чтобы быть привлекательной? В первую очередь нужно менять образ мысли, а не цифру на весах, считает психолог Эстер Перель.", "img" => "/index/author-article-20.jpg"]); ?>

	</div>

	<div class="grid__17 hide--laptop hide--tablet hide--phone">

		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "Иллюзия дефекта: 4 принципа общения с особыми детьми", "text" => "Педагог и психолог Кристель Манске работает с аутистами, детьми с трисомией, СДВГ и другими особенностями уже больше 40 лет. ", "img" => "/index/author-article-23.jpg"]); ?>

	</div>

	<div class="grid__18 hide--laptop hide--tablet hide--phone">

		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "Сохранить страсть в долгом браке", "text" => "«И жили долго и счастливо»: постоянство, задаваемое этой фразой, радует большинство пар. Но в то же время многие жалуются, что желание исчезает из отношений.", "img" => "/index/author-article-24.jpg"]); ?>

	</div>

	<div class="grid__19 hide--laptop hide--tablet hide--phone">

		<? req_with_param(PATH__COMMON . "/article/article-block.php", ["title" => "«Йога открывает нам наш внутренний мир»", "text" => "В ожидании йога-фестиваля Free Spirit, который пройдет 25-26 июля в Аквакомплексе Лужники, мы встретились с его участницей, психологом Алисой Ротенберг.", "img" => "/index/author-article-25.jpg"]); ?>

	</div>

	<div class="grid__20 hide--phone">

		<? req_with_param(PATH__COMMON . "/external-articles.php", [
				"title" => "Gnezdo",
				"img1" => "/index/external-article.jpg", "text1" => "4 правила, которые предотвратят старение кожи шеи",
				"img2" => "/index/external-article.jpg", "text2" => "Умные стрижки, которые делают моложе!",
				"img3" => "/index/external-article.jpg", "text3" => "Самые эффективные упражнения для красоты рук",
				"img4" => "/index/external-article.jpg", "text4" => "Вся правда о свадьба Анджелины Джоли"
		]); ?>

	</div>

	<div class="grid__21 hide--laptop hide--tablet hide--phone">

		<? req_with_param(PATH__COMMON . "/external-articles.php", [
				"title" => "Lentainform",
				"img1" => "/index/external-article.jpg", "text1" => "Василиса Володина родила",
				"img2" => "/index/external-article.jpg", "text2" => "Рулет из лаваша: готовится очень просто и быстро",
				"img3" => "/index/external-article.jpg", "text3" => "Звезды за 40, как они выглядят в купальниках",
				"img4" => "/index/external-article.jpg", "text4" => "Пресс как у Меган Фокс: делай планку"
		]); ?>

	</div>

	<div class="grid__22 hide--tablet hide--phone">
		<? req_with_param(PATH__COMMON . "/psy-question-block.php",
				["title" => "Есть ли смысл встречаться зная, что это не приведет к семье?", "question-author" => "Ирина, 27", "question-answer" => "Млодик Ирина", "img" => "/index/test.jpg", "author-specialization" => "Психолог, психотерапевт"]); ?>
	</div>

	<div class="grid__23 hide--laptop hide--tablet hide--phone">

		<? req_with_param(PATH__COMMON . "/psy-question-block.php", ["title" => "Почему я так болезненно реагирую на чужие успехи?", "question-author" => "Анатолий, 22", "question-answer" => "Млодик Ирина", "img" => "/index/test.jpg", "author-specialization" => "Психолог, психотерапевт"]); ?>

	</div>

	<div class="grid__24">
		<? req_with_param(PATH__COMMON . "/psy-question-block.php",
				["title" => "Как строить отношения с женатыми мужчинами?", "question-author" => "Тамара, 37", "question-answer" => "Слепак Константин", "img" => "/index/test.jpg", "author-specialization" => "Психолог, психотерапевт"]); ?>
	</div>

	<div class="grid__25">
		<? req_with_param(PATH__COMMON . "/test/test-block.php", [
				"title" => "Какое жизненное начaло в&nbsp;вас преобладает?",
				"img" => "/index/test.jpg",
				"btn-text" => "Пройти тест",
				"modification" => "test-block--index link link--white"]); ?>
	</div>

	<div class="grid__26 hide--phone">
		<? req_with_param(PATH__COMMON . "/test/test-block.php", ["title" => "Как вы строите отношения с другими?", "img" => "/index/test.jpg", "btn-text" => "Пройти тест", "modification" => "test-block--index link link--white"]); ?>
	</div>

	<div class="grid__27 hide--phone">
		<? req_with_param(PATH__COMMON . "/test/test-block.php", ["title" => "В чем источник вашей радости?", "img" => "/index/test.jpg", "btn-text" => "Пройти тест", "modification" => "test-block--index link link--white"]); ?>
	</div>

	<div class="grid__28">

		<? req_with_param(PATH__COMMON . "/quote-block.php", ["quote" => "“У каждого человека есть желания, которые он не сообщает другим, и желания, в которых он не сознается даже себе самому себе”", "name" => "Зигмунд Фрейд", "specialization" => "Австрийский психолог, психиатр, невролог"]); ?>

	</div>

	<div class="grid__29">

		<? req_with_param(PATH__COMMON . "/quote-block.php", ["quote" => "“Там, где правит любовь, не остается места для власти силы; а где возобладала сила, там недостает любви”
 ", "name" => "Карл Густав Юнг", "specialization" => " Швейцарский психиатр, основоположник  аналитической психологии"]); ?>

	</div>

	<div class="grid__30">

		<? req_with_param(PATH__COMMON . "/slide-block.php", ["btn-text" => "Диван", "img" => "/index/slider-1.jpg", "title" => "Кейт Бланшетт", "text_uppercase" => true, "text" => "«Невозможно сделать фильм, который понравится всем, поэтому не стоит пытаться»", "modification" => "slide-block--index col__2--desktop col__2--laptop col__2--tablet col__1--phone"]); ?>

	</div>

	<div class="grid__31">

		<? req_with_param(PATH__COMMON . "/slide-block.php", ["btn-text" => "Моя история", "img" => "/index/slider-2.jpg", "title" => "Выйти из зоны комфорта", "text" => "Расскажите, были ли в вашей жизни случаи, когда вы осмелились выйти из зоны комфорта и поступить так, как считали нужным и правильным, вопреки стереотипам и общественному мнению? Ждем ваших историй!", "modification" => "slide-block--index col__2--desktop col__2--laptop col__2--tablet col__1--phone"]); ?>

	</div>

	<div class="grid__32 hide--phone">
		<? req_with_param(PATH__INDEX . "/index-slider.php", ["modification" => "index-slider--index"]); ?>
	</div>

	<div class="grid__33">

		<? req_with_param(PATH__COMMON . "/small-banners-block.php"); ?>

	</div>

	<div class="grid__34">

		<? req_with_param(PATH__COMMON . "/best-covers.php"); ?>

	</div>

	<div class="grid__35 hide--tablet hide--phone">

		<? req_with_param(PATH__COMMON . "/observers-block.php"); ?>

	</div>

	<div class="grid__36 hide--phone">

		<? req_with_param(PATH__COMMON . "/magazine-cover.php"); ?>

	</div>

	<div class="grid__37">

		<? req_with_param(PATH__COMMON . "/forum-block.php", ["modification" => "index-forum--index"]); ?>

	</div>

	<div class="grid__38">

		<? req_with_param(PATH__COMMON . "/socials-block.php"); ?>

	</div>

	<div class="grid__39 hide--phone">

		<? req_with_param(PATH__COMMON . "/subscribe-block.php", ["modification" => "subscribe-block--index"]); ?>

	</div>

	<div class="grid__40">

		<? req_with_param(PATH__COMMON . "/psy-guide.php"); ?>

	</div>

	<div class="grid__41 hide--tablet hide--phone">

		<? req_with_param(PATH__COMMON . "/special-project-block.php", ["project" => "Спецпроекты", "title" => "Территория TEENS", "text" => "Путеводитель для родителей подростков. Как сохранить контакт с ребенком? Лучше понимать его и себя и вместе преодолевать трудности?", "img" => "/index/special-project.jpg"]); ?>

	</div>

	<div class="grid__42">

		<? req_with_param(PATH__COMMON . "/dossier-block.php",
				[
						"modification" => "col__2--exclude-phone col__1--phone h430--exclude-phone dossier-block--index",
						"title" => "Толстые люди: полюбить себя <br> и жить с удовольствием",
						"text" => "Стремление к улучшению собственной внешности не дает покоя даже самым ослепительным красавицам. Что уж говорить обо всех остальных: большинство из нас мечтает избавиться от лишних килограммов. Но в пылу борьбы за идеальную фигуру можно забыть о том, что слишком полные бедра, большой живот или даже, о ужас, двойной подбородок не мешают принимать себя, наслаждаться близкими отношениями и проживать каждый день."
				]); ?>

	</div>

	<div class="grid__43 hide--phone">

		<? req_with_param(PATH__COMMON . "/psy-appstore.php"); ?>

	</div>

	<div class="grid__44 hide--laptop hide--tablet hide--phone">

		<? req_with_param(PATH__COMMON . "/interview-block.php"); ?>

	</div>


	<div class="grid__45">

		<? req_with_param(PATH__COMMON . "/skype-consultation.php"); ?>

	</div>

	<div class="grid__46">

		<? req_with_param(PATH__COMMON . "/low-announcements-block.php", ["modification" => "low-announcements-block--index"]); ?>

	</div>

	<div class="grid__500">

		<? req_with_param(PATH__COMMON . "/show-more-block.php", ["id" => "show-more-block"]); ?>

	</div>

	<div class="grid__501">

		<? req_with_param(PATH__COMMON . "/banner-300-600.php"); ?>

	</div>

	<div class="grid__502">

		<? req_with_param(PATH__COMMON . "/show-more-btn.php", ["id" => "show-more-btn"]); ?>

	</div>

	<div class="grid__support"></div>

</div>