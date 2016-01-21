<form action="#" class="index-subscribe content-wrapper">

	<label for="subscribe" class="index-subscribe__label">
		<span class="hide--tablet hide--phone">Подпишитесь на нашу рассылку</span>
		<span class="hide--desktop hide--laptop">Рассылка Psychologies</span>
	</label>
	<input type="email" id="subscribe" placeholder="Введите ваш e-mail" class="index-subscribe__input">
	<? req_with_param(PATH__PHP_COMMON . "/btn.php", ["text" => "Подписаться", "class" => "btn--additional-brand"]); ?>

</form>