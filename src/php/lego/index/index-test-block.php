<a href="#" class="index-test-block link link--white col__1 h430">
	<? echo $params["hide-block-title"] ?
		"": '<div class="index-test-block__block-title">Тесты</div>';?>

	<div class="index-test-block__wrapper-img img-circle <?= $params["wrapper-img-modification"];?>">
		<div class="index-test-block__wrapper-img-circle img-circle"></div>
		<img src="<?= PATH__IMG; echo $params["img"]; ?>" alt="" class="img-responsive">
	</div>

	<? echo $params["rubric"] ?
			"<div class='index-test-block__rubric'>" . $params["rubric"] . "</div>" : "";
	?>

	<h3 class="index-test-block__title"><?= $params["title"]; ?></h3>

	<? echo $params["test-counter"] ?
			"<div class='index-test-block__test-counter'>" . $params["test-counter"] . "</div>" : "";
	?>

	<div class="index-test-block__wrapper-btn">

		<? req_with_param(PATH__PHP_LEGO_COMMON . "/btn.php",
				["text" => $params["btn-text"], "class" => "btn--additional-brand"]); ?>

	</div>
</a>