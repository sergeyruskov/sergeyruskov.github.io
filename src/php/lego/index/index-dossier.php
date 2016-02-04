<div class="index-dossier <?= $params["modification"]; ?>">

	<? req_with_param(PATH__PHP_COMMON . "/btn.php", ["text" => "Досье", "class" =>
		"btn--brand"]); ?>
	<h3 class="index-dossier__title">
		<?= $params["title"]; ?>
	</h3>

	<? if ($params["text"]): ?>
		<p class="index-dossier__text hide--laptop hide--tablet hide--phone"><?= $params["text"] ?></p>
	<? endif; ?>

	<div class="index-dossier__wrapper-short-announcements <?= $params["short-announcements-modification"]; ?>">

		<? req_with_param(PATH__PHP_COMMON . "/short-announcement.php", ["title" => "Трагедия в Альпах – что творилось в голове у пилота?", "img" => "/common/short-announcement-1.jpg", "width" => "short"]); ?>

		<? req_with_param(PATH__PHP_COMMON . "/short-announcement.php", ["title" => "Трагедия в Альпах – что творилось в голове у пилота?", "img" => "/common/short-announcement-1.jpg", "width" => "short"]); ?>

		<? req_with_param(PATH__PHP_COMMON . "/short-announcement.php", ["title" => "Трагедия в Альпах – что творилось в голове у пилота?", "img" => "/common/short-announcement-1.jpg", "width" => "short"]); ?>

		<? req_with_param(PATH__PHP_COMMON . "/short-announcement.php", ["title" => "Трагедия в Альпах – что творилось в голове у пилота?", "img" => "/common/short-announcement-1.jpg", "width" => "short"]); ?>

	</div>

	<a href="#" class="index-dossier__all-articles link link--brand <?= $params["all-articles-modification"]; ?>">все статьи этого досье</a>

</div>