<?
//Подключаем вспомогательные функции/параметры
require_once(
		$_SERVER["DOCUMENT_ROOT"] . "/" .
		explode('/', substr($_SERVER["PHP_SELF"], 1))[0] . "/php/lib/lib.php"
);

//header
req_with_param(PATH__PHP_COMMON . "/head.php");

?>
	<main class="branding--main">
		<?
		//branding
		req_with_param(PATH__PHP_LEGO . "/common/branding.php");
		//content
		req_with_param(PATH__PHP_ARTICLE . "/article-content.php", ["branding" => "branding--content"]);
		//footer-top
		req_with_param(PATH__PHP_COMMON . "/footer/footer-top.php", ["branding" => "branding--footer-top"]);
		?>
	</main>
<?

//footer
req_with_param(PATH__PHP_COMMON . "/footer/footer.php");