<div class="low-announcements-block content-wrapper <?= $params["modification"]; ?>">

	<? req_with_param(PATH__COMMON . "/title-with-line.php", [
		"text" => "Сегодня читают",
		"modification" => "title-with-line--low-announcements-block",
		"modification1" => "title-with-line__wrapper--low-announcements-block",
		"modification2" => "title-with-line__content--low-announcements-block"
	]); ?>


	<div class="low-announcements-block__wrapper-short-announcements">

		<? req_with_param(PATH__COMMON . "/short-announcement.php", ["title" => "Как сохранить и улучшить отношения в паре?", "img" => "/common/short-announcement-1.jpg", "modification" => "short-announcement--index"]); ?>

		<? req_with_param(PATH__COMMON . "/short-announcement.php", ["title" => "Как сохранить и улучшить отношения в паре?", "img" => "/common/short-announcement-1.jpg", "modification" => "short-announcement--index"]); ?>

		<? req_with_param(PATH__COMMON . "/short-announcement.php", ["title" => "Как сохранить и улучшить отношения в паре?", "img" => "/common/short-announcement-1.jpg", "modification" => "short-announcement--index"]); ?>

		<? req_with_param(PATH__COMMON . "/short-announcement.php", ["title" => "Как сохранить и улучшить отношения в паре?", "img" => "/common/short-announcement-1.jpg", "class" => "hide--laptop", "modification" => "short-announcement--index"]); ?>

	</div>

</div>