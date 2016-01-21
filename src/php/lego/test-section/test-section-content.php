<div class="content-wrapper test-section-content <?= $params["branding"]; ?>">

	<div class="test-section-content__announcements">

		<? req_with_param(PATH__PHP_COMMON . "/announcements.php",
				[
						"first-element-classes" => "",
						"second-element-classes" => "hide--phone",
						"third-element-classes" => "hide--tablet hide--phone",
						"fourth-element-classes" => "hide--laptop hide--tablet hide--phone",
				]
		); ?>

	</div>


	<div class="test-section-content__1">

		<? req_with_param(PATH__PHP_COMMON . "/section-name.php", ["name" => "Тесты"]); ?>

	</div>

	<div class="test-section-content__2">

		<? req_with_param(PATH__PHP_COMMON . "/test/test-menu.php"); ?>

	</div>

	<div class="test-section-content__3">

		<div class="test-section-content__4">

			<a href="#" class="test-section-test col__1 h430 link link--grey">

				<div class="test-section-test__wrapper-img">
					<div class="test-section-test__img-circle"></div>
					<img src="<?= PATH__IMG . "/test-section/test-section__1.jpg" ?>" alt=""
					     class="test-section-test__img">
					<div class="test-section-test__wrapper-img-socials">
						<span class="icon-heart test-section-test__icon-heart"></span> 345 <span class="icon-comment test-section-test__icon-comment"></span> 12
					</div>
				</div>

				<div class="test-section-test__rubric">Личность</div>

				<h3 class="test-section-test__title">Умеете ли вы делать свою жизнь прекраснее?</h3>

				<p class="test-section-test__text">Что для вас важнее: заботиться о себе, быть в контакте с окружающими или
					пытаться изменить мир? Тест психолога Кристофа Андре (Christophe André) поможем вам разобраться.</p>

				<div class="test-section-test__hide-text"></div>

				<div class="test-section-test__take-test">
					<? req_with_param(PATH__PHP_COMMON . "/btn.php", ["text" => "Пройти тест", "class" => "btn--additional-brand"]); ?>
				</div>

			</a>

		</div>

	</div>

	<div class="test-section-content__4">
		<? req_with_param(PATH__PHP_INDEX . "/index-banner.php") ?>
	</div>


</div>