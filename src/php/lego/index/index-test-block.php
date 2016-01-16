<a href="#" class="index-test-block link link--white col__1 h430">
	<div class="index-test-block__rubric">Тесты</div>

	<div class="index-test-block__wrapper-img img-circle">
		<div class="index-test-block__wrapper-img-circle img-circle"></div>
		<img src="<?= PATH__IMG; echo $params["img"]; ?>" alt="" class="img-responsive">
	</div>

	<h3 class="index-test-block__title"><?= $params["title"]; ?></h3>

	<div class="index-test-block__wrapper-btn">

		<? req_with_param(PATH__PHP_LEGO_COMMON . "/btn.php",
				["text" => $params["btn-text"], "class" => "btn--additional-brand"]); ?>

	</div>
</a>