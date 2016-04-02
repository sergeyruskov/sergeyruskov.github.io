<a href="#" class="test-block col__1 <?= $params["modification"]; ?>">
	<? echo $params["hide-block-title"] ?
		"": '<div class="test-block__block-title">Тесты</div>';?>

	<div class="test-block__wrapper-img img-circle">
		<div class="test-block__wrapper-img-circle img-circle"></div>
		<img src="<?= PATH__IMG, $params["img"]; ?>" alt="" class="img-responsive">

		<? if (isset($params["socials"])): {
		}?>
			<div class="test-block__wrapper-img-socials">
				<span class="icon-heart icon-social test-block__icon-heart"></span> 345 <span class="icon-comment icon-social test-block__icon-comment"></span> 12
			</div>
		<? endif; ?>

	</div>

	<? echo $params["rubric"] ?
			"<div class='test-block__rubric'>" . $params["rubric"] . "</div>" : "";
	?>

	<h3 class="test-block__title"><?= $params["title"]; ?></h3>
	<? if (isset($params["text"])) {
		echo "<div class='test-block__text'>" . $params["text"] . "</div>
		<div class='test-block__hide-text'></div>";
	} ?>

	<? echo $params["test-counter"] ?
			"<div class='test-block__test-counter'>" . $params["test-counter"] . "</div>" : "";
	?>

	<div class="test-block__wrapper-btn">

		<? req_with_param(PATH__COMMON . "/btn.php",
				["text" => $params["btn-text"], "class" => "btn--additional-brand"]); ?>

	</div>
</a>