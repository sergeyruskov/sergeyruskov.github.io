<footer class="footer-top <?=$params["branding"];?> content-wrapper">

	<div class="footer-top__title-with-line">

		<? req_with_param(PATH__PHP_COMMON . "/title-with-line.php", [
			"text" => "<div class='icon-psy-short title-with-line__psy-short-top-text'></div><span class='title-with-line__psy-short-content'>Везде с вами</span>",
			"modification" => "title-with-line--psy-short",
			"modification1" => "title-with-line__wrapper--psy-short",
			"modification2" => "title-with-line__content--psy-short"]); ?>

	</div>

	<? req_with_param(PATH__PHP_COMMON . "/footer/footer-always-with-you.php"); ?>

</footer>