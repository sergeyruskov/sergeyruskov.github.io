<footer class="footer-top <?=$params["branding"];?> content-wrapper">

	<div class="footer-top__red-line-title">

		<? req_with_param(PATH__PHP_LEGO_COMMON . "/red-line-title.php", [
			"text" => "<div class='icon-psy-short red-line-title__psy-short-top-text'></div><span class='red-line-title__psy-short-content'>Везде с вами</span>",
			"modification" => "red-line-title--psy-short",
			"modification1" => "red-line-title__wrapper--psy-short",
			"modification2" => "red-line-title__content--psy-short"]); ?>

	</div>

	<? req_with_param(PATH__PHP_LEGO_COMMON . "/footer/footer-always-with-you.php"); ?>

</footer>