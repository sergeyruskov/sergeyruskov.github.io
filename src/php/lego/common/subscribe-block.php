<form action="#" class="subscribe-block br5 <?= $params["modification"]; ?>" data-token="innersubscribe" id="subscribe-block">

	<label for="subscribe-block__input-email" class="subscribe-block__label">

		<span class="subscribe-block__text-col-4-3-2">Лучшие статьи, тесты и акции от PSY</span>

		<span class="subscribe-block__text-col-1">Лучшее от PSY</span>

	</label>

	<div class="subscribe-block__wrapper-input-email subscribe-block__wrapper-input-email--state-normal" id="subscribe-block__wrapper-input-email">

		<input type="email" id="subscribe-block__input-email" placeholder="Введите ваш e-mail" class="subscribe-block__input-email subscribe-block__input-email--state-normal">

	</div>

	<? req_with_param(PATH__COMMON . "/btn.php", [
			"text" => "Подписаться",
			"class" => "btn--additional-brand btn--inactive",
			"id" => "subscribe-block__submit",
			"typeoftag" => "submit"
	]); ?>

</form>