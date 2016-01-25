<div class="index-low-announcements content-wrapper">

	<? req_with_param(PATH__PHP_COMMON . "/title-with-line.php", [
		"text" => "Сегодня читают",
		"modification" => "title-with-line--index-low-announcements",
		"modification1" => "title-with-line__wrapper--index-low-announcements",
		"modification2" => "title-with-line__content--index-low-announcements"
	]); ?>


	<div class="index-low-announcements__wrapper-short-announcements">

		<? req_with_param(PATH__PHP_COMMON . "/short-announcement.php", ["title" => "Как сохранить и улучшить отношения в паре?", "img" => "/common/short-announcement-1.jpg"]); ?>

		<? req_with_param(PATH__PHP_COMMON . "/short-announcement.php", ["title" => "Как сохранить и улучшить отношения в паре?", "img" => "/common/short-announcement-1.jpg"]); ?>

		<? req_with_param(PATH__PHP_COMMON . "/short-announcement.php", ["title" => "Как сохранить и улучшить отношения в паре?", "img" => "/common/short-announcement-1.jpg"]); ?>

		<? req_with_param(PATH__PHP_COMMON . "/short-announcement.php", ["title" => "Как сохранить и улучшить отношения в паре?", "img" => "/common/short-announcement-1.jpg", "class" => "hide--laptop"]); ?>

	</div>

</div>