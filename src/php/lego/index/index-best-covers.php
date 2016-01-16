<div class="index-best-covers content-wrapper">

	<? req_with_param(PATH__PHP_LEGO_COMMON . "/red-line-title.php", [
		"text" => "Лучшая обложка <span class=\"hide--phone\">psychologies</span>",
		"modification" => "red-line-title--index-best-covers",
		"modification1" => "red-line-title__wrapper--index-best-covers",
		"modification2" => "red-line-title__content--index-best-covers"]); ?>

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
		<? req_with_param(PATH__PHP_LEGO_COMMON . "/btn.php", ["text" => "Перейти к голосованию", "class" => "btn--additional-brand"]); ?>
	</div>

</div>