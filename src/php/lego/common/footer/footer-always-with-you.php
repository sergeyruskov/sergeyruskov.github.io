<div class="footer-always-with-you">

	<div class="footer-always-with-you__top">

		<a href="#" class="footer-always-with-you__black-ipad link">
			<img src="<?= PATH__IMG . "/common/footer/footer-always-with-you/footer-top-cover.jpg" ?>" alt="" class="footer-always-with-you__black-ipad-img">
		</a>

		<a href="#" class="footer-always-with-you__center-magazine hide--tablet hide--phone link">
			<img src="<?= PATH__IMG . "/common/footer/footer-always-with-you/footer-top-cover.jpg" ?>" alt="" class="footer-always-with-you__center-magazine-img">
		</a>

		<a href="#" class="footer-always-with-you__gold-ipad link link--white hide--phone">

			<img src="<?= PATH__IMG . "/common/footer/footer-always-with-you/footer-gold-ipad-img.jpg" ?>" alt="" class="footer-always-with-you__gold-ipad-img">

			<span class="icon-psy-short footer-always-with-you__psy-short"></span>
			<span class="footer-always-with-you__tests">Тесты</span>

		</a>

		<a href="#" class="footer-always-with-you__iphone link">
			<img src="<?= PATH__IMG . "/common/footer/footer-always-with-you/footer-iphone-black-img.jpg" ?>" alt="" class="img-responsive hide--phone">
			<img src="<?= PATH__IMG . "/common/footer/footer-always-with-you/footer-top-cover.jpg" ?>" alt="" class="img-responsive hide--desktop hide--laptop hide--tablet">
		</a>

	</div>

	<div class="footer-always-with-you__bottom">

		<div class="footer-always-with-you__digital">
			<h4 class="footer-always-with-you__title">Digital-версия <br> ЖУРНАЛА</h4>
			<div class="footer-always-with-you__text">Интерактивная версия журнала для <br> iOS и Android-устройств</div>
			<div class="footer-always-with-you__wrapper-btn-digital">

				<a href="#">
					<? req_with_param(PATH__PHP_LEGO_COMMON . "/appstore-badge.php", ["modification" => "footer-always-with-you__appstore-btn" ]); ?>
				</a>
				<? req_with_param(PATH__PHP_LEGO_COMMON . "/google-play-badge.php", ["width" => 107, "height" => 31 ]); ?>

			</div>
		</div>

		<div class="footer-always-with-you__magazine hide--tablet hide--phone">
			<h4 class="footer-always-with-you__title">Журнал <br> Psychologies</h4>
			<div class="footer-always-with-you__text">Ваш любымый журнал в обычном <br> и travel-формате</div>
			<? req_with_param(PATH__PHP_LEGO_COMMON . "/btn.php", ["text" => "Подписаться", "class" => "btn--additional-brand"]); ?>

		</div>

		<div class="footer-always-with-you__phone hide--phone">
			<h4 class="footer-always-with-you__title">Мобильное приложение <br> тесты</h4>
			<div class="footer-always-with-you__text">Любимые тесты от журнала <br> PSYCHOLOGIES всегда с вами</div>
			<div class="footer-always-with-you__wrapper-btn-digital">

				<a href="#">
					<? req_with_param(PATH__PHP_LEGO_COMMON . "/appstore-badge.php", ["modification" => "footer-always-with-you__appstore-btn" ]); ?>
				</a>
				<? req_with_param(PATH__PHP_LEGO_COMMON . "/google-play-badge.php", ["width" => 107, "height" => 31 ]); ?>

			</div>
		</div>

	</div>

</div>