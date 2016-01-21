<div class="announcements <?=$params["modification"]?> content-wrapper">

	<div class="announcements__item-wrapper <?=$params["first-element-classes"]?> ">

		<? req_with_param(PATH__PHP_COMMON . "/short-announcement.php", ["title" => "Трагедия в Альпах – что творилось в голове у пилота?", "img" => "/common/short-announcement-1.jpg"]); ?>

	</div>

	<div class="announcements__item-wrapper <?=$params["second-element-classes"]?>">

		<? req_with_param(PATH__PHP_COMMON . "/short-announcement.php", ["title" => "Ревность мужская и женская", "img" => "/common/short-announcement-2.jpg"]); ?>

	</div>

	<div class="announcements__item-wrapper <?=$params["third-element-classes"]?>">

		<? req_with_param(PATH__PHP_COMMON . "/short-announcement.php", ["title" => "Невероятная история о переселении душ", "img" => "/common/short-announcement-3.jpg"]); ?>

	</div>

	<div class="announcements__item-wrapper <?=$params["fourth-element-classes"]?>">

		<? req_with_param(PATH__PHP_COMMON . "/short-announcement.php", ["title" => "Как я прожила семь дней, не жалуясь на жизнь", "img" => "/common/short-announcement-4.jpg",]); ?>

	</div>

</div>