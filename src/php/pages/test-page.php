<?
//Подключаем вспомогательные функции/параметры
require_once(
		$_SERVER["DOCUMENT_ROOT"] . "/" .
		explode('/', substr($_SERVER["PHP_SELF"], 1))[0] . "/php/lib/lib.php"
);

//Константы для этой страницы
define("PATH__PHP_TEST_PAGE", PATH__PHP_LEGO . "/test-page");
define("PATH__PHP_INDEX", PATH__PHP_LEGO . "/index/");


//header
req_with_param(PATH__PHP_LEGO_COMMON . "/head.php");

?>
<main class="branding--main">
<?

 req_with_param(PATH__PHP_TEST_PAGE . "/test-page-content.php", ["branding" => "branding--content"]);

 req_with_param(PATH__PHP_LEGO_COMMON . "/footer/footer-top.php", ["branding" => "branding--footer-top"]);
?>
</main>

<?

//footer
req_with_param(PATH__PHP_LEGO_COMMON . "/footer/footer.php");