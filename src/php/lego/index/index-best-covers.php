<div class="index-best-covers content-wrapper">

	<? req_with_param(PATH__PHP_COMMON . "/title-with-line.php", [
		"text" => "Лучшая обложка <span class=\"hide--phone\">psychologies</span>",
		"modification" => "title-with-line--index-best-covers",
		"modification1" => "title-with-line__wrapper--index-best-covers",
		"modification2" => "title-with-line__content--index-best-covers"]); ?>

	<div class="index-best-covers__wrapper-covers">

		<img src="<?= PATH__IMG ?>/index/best-cover.jpg" alt="">
		<img src="<?= PATH__IMG ?>/index/best-cover.jpg" alt="">
		<img src="<?= PATH__IMG ?>/index/best-cover.jpg" alt="" class="hide--phone">
		<img src="<?= PATH__IMG ?>/index/best-cover.jpg" alt="" class="hide--phone">
		<img src="<?= PATH__IMG ?>/index/best-cover.jpg" alt="" class="hide--tablet hide--phone">
		<img src="<?= PATH__IMG ?>/index/best-cover.jpg" alt="" class="hide--tablet hide--phone">
		<img src="<?= PATH__IMG ?>/index/best-cover.jpg" alt="" class="hide--laptop hide--tablet hide--phone">
		<img src="<?= PATH__IMG ?>/index/best-cover.jpg" alt="" class="hide--laptop hide--tablet hide--phone">

	</div>

	<div class="index-best-covers__wrapper-btn">
		<? req_with_param(PATH__PHP_COMMON . "/btn.php", ["text" => "Перейти к голосованию", "class" => "btn--additional-brand"]); ?>
	</div>

</div>