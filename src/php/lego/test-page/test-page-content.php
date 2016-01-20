<? req_with_param(PATH__PHP_LEGO . "/common/branding.php"); ?>
<div class="content-wrapper test-page-content <?= $params["branding"]; ?>">


	<div class="test-page-content__1">

		<? req_with_param(PATH__PHP_LEGO_COMMON . "/announcements.php",
				[
						"first-element-classes" => "",
						"second-element-classes" => "hide--phone",
						"third-element-classes" => "hide--tablet hide--phone",
						"fourth-element-classes" => "hide--laptop hide--tablet hide--phone",
				]
		); ?>

	</div>

	<div class="test-page-content__2">

		<? req_with_param(PATH__PHP_LEGO_COMMON . "/section-name.php", ["name" => "Тесты"]); ?>

	</div>

	<div class="test-page-content__3">

		<? req_with_param(PATH__PHP_LEGO_COMMON . "/test-menu.php"); ?>

	</div>

	<div class="test-page-content__4">

		<div class="test-page-content-test-description col__3--desktop col__2--laptop">

			<div class="test-page-content-test-description__number-and-counter">
				<span class="test-page-content-test-description__cover-number">Psychologies №114</span>
				Тест пройден 79891 раз
			</div>

			<h1 class="h__1">Умеете ли вы делать свою жизнь прекраснее?</h1>

			<img src="<?= PATH__IMG . "/test-page/test-page-content-test-description.jpg" ?>" alt=""
			     class="test-page-content-test-description__img">

			<div class="text-lead">
				Слово «харизма» происходит от греческого charisma («божья благодать»). Харизматичными принято называть
				людей, которые обладают способностью привлекать взгляды и воздействовать на других, не прилагая к этому
				особых усилий и зачастую не отдавая себе в этом отчета. Еще несколько лет назад харизматиками считали
				людей незаурядных или знаменитых, однако сейчас это слово перешло в разряд обыденных. Мы регулярно
				говорим «он/она обладает харизмой» о людях, которым удалось выделиться и которыми мы восхищаемся. «С
				психоаналитической точки зрения, харизма – это качества, которые мы разработали внутри себя и которые
				улавливаются другими людьми, – считает психоаналитик Жерар Боннэ (Gérard Bonnet). – В каждом из нас есть
				то, что привлекает и очаровывает других. харизмой обладаете вы?
			</div>

			<div class="test-page-content-test-description__author">Автор: светлана кирьенина</div>

		</div>

	</div>

	<div class="test-page-content__5 col__2--tablet">
		<? req_with_param(PATH__PHP_LEGO . "/index/index-banner.php") ?>
	</div>

	<div class="test-page-content__6 col__2--tablet">
		<form action="#22" class="test-page-content-question">
			<div class="test-page-content-question__question">

				<div class="test-page-content-question__question-counter">
					1<span class="test-page-content-question__separator">/</span>
					<span class="test-page-content-question__question-number">16</span>
				</div>
				<fieldset>
					<legend class="test-page-content-question__legend">По вашему мнению, чтобы убеждать людей, нужно:</legend>
					<p class="test-page-content-question__possible-answer">
						<input type="radio" class="test-page-content-question__radio"
						       name="test-page-content-question__1" id="test-page-content-question__1--1">
						<label class="test-page-content-question__label text-inside-frame" for="test-page-content-question__1--1">
							Заглушить свои сомнения и слабости
						</label>
					</p>

					<p class="test-page-content-question__possible-answer">
						<input type="radio" class="test-page-content-question__radio"
						       name="test-page-content-question__1" id="test-page-content-question__1--2">
						<label class="test-page-content-question__label text-inside-frame" for="test-page-content-question__1--2">Продемонстрировать гибкость и эмпатию</label>
					</p>

					<p class="test-page-content-question__possible-answer">
						<input type="radio" class="test-page-content-question__radio"
						       name="test-page-content-question__1" id="test-page-content-question__1--3">
						<label class="test-page-content-question__label text-inside-frame" for="test-page-content-question__1--3">Применить все свое обаяние</label>
					</p>

					<p class="test-page-content-question__possible-answer">
						<input type="radio" class="test-page-content-question__radio"
						       name="test-page-content-question__1" id="test-page-content-question__1--4">
						<label class="test-page-content-question__label text-inside-frame" for="test-page-content-question__1--4">Нестандартно мыслить</label>
					</p>
				</fieldset>
			</div>

			<div class="test-page-content-question__question">
				<div class="test-page-content-question__question-counter">
					2<span class="test-page-content-question__separator">/</span>
					<span class="test-page-content-question__question-number">16</span>
				</div>
				<fieldset>
					<legend class="test-page-content-question__legend">Что дает вам силы, когда перед вами стоит важная задача?</legend>
					<p class="test-page-content-question__possible-answer">
						<input type="radio" class="test-page-content-question__radio"
						       name="test-page-content-question__2" id="test-page-content-question__2--1">
						<label class="test-page-content-question__label text-inside-frame" for="test-page-content-question__2--1">
							Ваш опыт
						</label>
					</p>

					<p class="test-page-content-question__possible-answer">
						<input type="radio" class="test-page-content-question__radio"
						       name="test-page-content-question__2" id="test-page-content-question__2--2">
						<label class="test-page-content-question__label text-inside-frame" for="test-page-content-question__2--2">Ваше бесстрашие</label>
					</p>

					<p class="test-page-content-question__possible-answer">
						<input type="radio" class="test-page-content-question__radio"
						       name="test-page-content-question__2" id="test-page-content-question__2--3">
						<label class="test-page-content-question__label text-inside-frame" for="test-page-content-question__2--3">Окружающие вас люди</label>
					</p>

					<p class="test-page-content-question__possible-answer">
						<input type="radio" class="test-page-content-question__radio"
						       name="test-page-content-question__2" id="test-page-content-question__2--4">
						<label class="test-page-content-question__label text-inside-frame" for="test-page-content-question__2--4">Ваше воображение</label>
					</p>
				</fieldset>
			</div>

			<div class="test-page-content-question__wrapper-btn">
				<input type="submit" class="btn btn--additional-brand" value="Показать результаты">
			</div>

		</form>
	</div>

	<div class="test-page-content__7 col__3--desktop">

		<div class="test-socials col__2--desktop col__2--laptop col__2--tablet">

			<div class="test-socials__title">Поделиться с друзьями</div>
			<div class="test-socials__wrapper-btn">
				<a href="#" class="link link--white br5 test-socials__icon icon-facebook color__fb">
					<span class="test-socials__btn-text-separate test-socials__btn-text-separate--white
					hide--phone"></span>
					<span class="test-socials__btn-text hide--phone">1</span>
				</a>
				<a href="#" class="link link--white br5 test-socials__icon icon-vk color__vk">
					<span class="test-socials__btn-text-separate test-socials__btn-text-separate--white hide--phone"></span>
					<span class="test-socials__btn-text hide--phone">10</span>
				</a>
				<a href="#" class="link link--white br5 test-socials__icon icon-twitter
				color__twitter">
					<span class="test-socials__btn-text-separate test-socials__btn-text-separate--white hide--phone"></span>
					<span class="test-socials__btn-text hide--phone">100</span>
				</a>
				<a href="#" class="link link--white br5 test-socials__icon test-socials__icon--ok icon-ok color__ok">
					<span class="test-socials__btn-text-separate test-socials__btn-text-separate--white hide--phone"></span>
					<span class="test-socials__btn-text hide--phone">1000</span>
				</a>
				<a href="#" class="link link--white br5 test-socials__icon test-socials__icon--mail icon-mail
				color__mail">
					<span class="test-socials__btn-text-separate test-socials__btn-text-separate--white
					hide--phone"></span>
					<span class="test-socials__btn-text hide--phone">10000</span>
				</a>
			</div>

		</div>

		<div class="test-socials test-socials--discuss col__1">

			<div class="test-socials__title">Обсудите с читателями</div>
			<div class="test-socials__wrapper-discuss">

				<a href="#" class="link link--brand test-socials__comments br5">
					Комментарии
					<span class="test-socials__btn-text-separate test-socials__btn-text-separate--brand"></span>
					<span>3</span>
				</a>

				<a href="#" class="link link--viking br5 test-socials__forum">Форум</a>

			</div>

		</div>

	</div>


</div>