<a href="#34" class="test-section-test col__1 h430 link link--black">

	<div class="test-section-test__wrapper-img">
		<div class="test-section-test__img-circle"></div>
		<img src="<?= PATH__IMG . "/test-section/" . $params["img"] ?>" alt="" class="test-section-test__img" width="180px" height="180px">
		<div class="test-section-test__wrapper-img-socials">
			<span class="icon-heart test-section-test__icon-heart"></span> 345 <span class="icon-comment test-section-test__icon-comment"></span> 12
		</div>
	</div>

	<div class="test-section-test__rubric"><?=$params["rubric"];?></div>

	<h3 class="test-section-test__title"><?=$params["title"];?></h3>

	<p class="test-section-test__text"><?= $params["text"]; ?></p>

	<div class="test-section-test__hide-text"></div>

	<div class="test-section-test__take-test">
		<? req_with_param(PATH__PHP_COMMON . "/btn.php", ["text" => "Пройти тест", "class" => "btn--additional-brand"]); ?>
	</div>

</a>