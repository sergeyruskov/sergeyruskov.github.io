<? $block_3_show_rules = $params["desktop"] ? "hide--tablet hide--phone" : "hide--laptop hide--tablet hide--phone"; ?>

<div class="yandex-direct <?= $params["modification"]; ?>">
	<div class="yandex-direct__wrapper-title">
		<? req_with_param(PATH__PHP_COMMON . "/title-with-line.php", [
				"text" => "Яндекс.директ",
				"modification" => "title-with-line--yandex-direct",
				"modification1" => "title-with-line__wrapper--yandex-direct",
				"modification2" => "title-with-line__content--yandex-direct"]); ?>

	</div>

	<div class="yandex-direct__wrapper-items <?= $params["modification"]; ?>">

		<div class="yandex-direct__item">
			<a href="#" class="link link--black">
				<h4 class="yandex-direct__item-title">Магазин чемоданов Robinzon</h4>

				<p class="yandex-direct__item-text">Пожалуй, самый большой магазин чемоданов в Москве! 2тыс
					чемоданов от 3тыс р</p>
			</a>
			<a href="#" class="yandex-direct__item-link link link--brand">robinzon.ru</a>
			<a href="#" class="yandex-direct__item-link link link--brand">Адрес и телефон</a>

		</div>

		<div class="yandex-direct__item">
			<a href="#" class="link link--black">
				<h4 class="yandex-direct__item-title">Дача в жилом поселке Петрухино!</h4>

				<p class="yandex-direct__item-text">39 мин. по Симферопольскому ш. Коммуникации действуют. Конный
				клуб. Озеро.</p>
			</a>
			<a href="#" class="yandex-direct__item-link link link--brand">robinzon.ru</a>
			<a href="#" class="yandex-direct__item-link link link--brand">Адрес и телефон</a>
		</div>

		<div class="yandex-direct__item <?= $block_3_show_rules; ?>">
			<a href="#" class="link link--black">
				<h4 class="yandex-direct__item-title">Участки по Минскому шоссе. Жми!</h4>

				<p class="yandex-direct__item-text">Земельные участки по 50 000 руб/сотка. Коммуникации. Успей
				купить!</p>
			</a>


			<a href="#" class="yandex-direct__item-link link link--brand">robinzon.ru</a>
			<a href="#" class="yandex-direct__item-link link link--brand">Адрес и телефон</a>
			<a href="#" class="yandex-direct__item-link link link--brand">Москва</a>
		</div>

		<? if($params["desktop"]): ?>
		<div class="yandex-direct__item hide--laptop hide--tablet hide--phone">
			<a href="#" class="link link--black">
				<h4 class="yandex-direct__item-title">Участки по Минскому шоссе. Жми!</h4>

				<p class="yandex-direct__item-text">Земельные участки по 50 000 руб/сотка. Коммуникации. Успей
				купить!</p>
			</a>

			<a href="#" class="yandex-direct__item-link link link--brand">robinzon.ru</a>
			<a href="#" class="yandex-direct__item-link link link--brand">Адрес и телефон</a>
			<a href="#" class="yandex-direct__item-link link link--brand">Москва</a>
		</div>
		<? endif; ?>

	</div>

</div>