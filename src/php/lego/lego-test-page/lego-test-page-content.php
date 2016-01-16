<? req_with_param(PATH__PHP_LEGO . "/common/branding.php"); ?>
<div class="content-wrapper lego-test-page-content <?= $params["branding"]; ?>">


	<div class="lego-test-page-content__1">

		<? req_with_param(PATH__PHP_LEGO_COMMON . "/announcements.php",
				[
						"first-element-classes" => "",
						"second-element-classes" => "hide--phone",
						"third-element-classes" => "hide--tablet hide--phone",
						"fourth-element-classes" => "hide--laptop hide--tablet hide--phone",
				]
		); ?>

	</div>

	<div class="lego-test-page-content__2">

		<? req_with_param(PATH__PHP_LEGO_COMMON . "/section-name.php", ["name" => "Тесты"]); ?>

	</div>

	<div class="lego-test-page-content__3">

		<? req_with_param(PATH__PHP_LEGO_COMMON . "/test-menu.php"); ?>

	</div>

	<div class="lego-test-page-content__4">

		<div class="lego-test-page-content-test-description col__3--desktop col__2--laptop">

			<div class="lego-test-page-content-test-description__number-and-counter">
				<span class="lego-test-page-content-test-description__cover-number">Psychologies №114</span>
				Тест пройден 79891 раз
			</div>

			<h1 class="h__1">Умеете ли вы делать свою жизнь прекраснее?</h1>

			<img src="<?= PATH__IMG . "/test-page/lego-test-page-content-test-description.jpg" ?>" alt=""
			     class="lego-test-page-content-test-description__img">

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

			<div class="lego-test-page-content-test-description__author">Автор: светлана кирьенина</div>

		</div>

	</div>

	<div class="lego-test-page-content__5 col__2--tablet">
		<? req_with_param(PATH__PHP_LEGO . "/index/index-banner.php") ?>
	</div>

	<div class="lego-test-page-content__6 col__2--tablet">
		<form action="#22" class="test-page-content-question">
			<div class="test-page-content-question__question-counter">1<span class="test-page-content-question__question-number">/16</span></div>
			<fieldset>
				<legend class="test-page-content-question__legend">По вашему мнению, чтобы убеждать людей, нужно:</legend>
				<p class="test-page-content-question__possible-answer">
					<input type="radio" class="test-page-content-question__radio"
					       id="test-page-content-question__radio--1" name="test-page-content-question">
					<label class="test-page-content-question__label text-inside-frame" for="test-page-content-question__radio--1">
						Заглушить свои сомнения и слабости
					</label>
				</p>

				<p class="test-page-content-question__possible-answer">
					<input type="radio" class="test-page-content-question__radio"
					       id="test-page-content-question__radio--2" name="test-page-content-question">
					<label class="test-page-content-question__label text-inside-frame" for="test-page-content-question__radio--2">Продемонстрировать гибкость и эмпатию</label>
				</p>

				<p class="test-page-content-question__possible-answer">
					<input type="radio" class="test-page-content-question__radio"
					       id="test-page-content-question__radio--3" name="test-page-content-question">
					<label class="test-page-content-question__label text-inside-frame" for="test-page-content-question__radio--3">Применить все свое обаяние</label>
				</p>

				<p class="test-page-content-question__possible-answer">
					<input type="radio" class="test-page-content-question__radio"
					       id="test-page-content-question__radio--4" name="test-page-content-question">
					<label class="test-page-content-question__label text-inside-frame" for="test-page-content-question__radio--4">Нестандартно мыслить</label>
				</p>
			</fieldset>
		</form>
	</div>


</div>