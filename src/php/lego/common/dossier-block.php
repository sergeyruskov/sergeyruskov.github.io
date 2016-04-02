<div class="dossier-block <?= $params["modification"]; ?>">

	<? req_with_param(PATH__COMMON . "/btn.php", [
	"text" => "Досье",
	"class" => "btn--brand link--white",
	"typeoftag" => "link"
	]
	); ?>
	<h3 class="dossier-block__title">
		<?= $params["title"]; ?>
	</h3>

	<? if ($params["text"]): ?>
		<p class="dossier-block__text"><?= $params["text"] ?></p>
	<? endif; ?>

	<div class="dossier-block__wrapper-short-announcements">

		<? req_with_param(PATH__COMMON . "/short-announcement.php", ["title" => "Трагедия в Альпах – что творилось в голове у пилота?", "img" => "/common/short-announcement-1.jpg", "width" => "short", "modification" => "short-announcement--index"]); ?>

		<? req_with_param(PATH__COMMON . "/short-announcement.php", ["title" => "Трагедия в Альпах – что творилось в голове у пилота?", "img" => "/common/short-announcement-1.jpg", "width" => "short", "modification" => "short-announcement--index"]); ?>

		<? req_with_param(PATH__COMMON . "/short-announcement.php", ["title" => "Трагедия в Альпах – что творилось в голове у пилота?", "img" => "/common/short-announcement-1.jpg", "width" => "short", "modification" => "short-announcement--index"]); ?>

		<? req_with_param(PATH__COMMON . "/short-announcement.php", ["title" => "Трагедия в Альпах – что творилось в голове у пилота?", "img" => "/common/short-announcement-1.jpg", "width" => "short", "modification" => "short-announcement--index"]); ?>

	</div>

	<a href="#" class="dossier-block__all-articles link link--brand">все статьи этого досье</a>

</div>