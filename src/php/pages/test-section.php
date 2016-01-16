<?
//Подключаем вспомогательные функции/параметры
require_once(
		$_SERVER["DOCUMENT_ROOT"] . "/" .
		explode('/', substr($_SERVER["PHP_SELF"], 1))[0] . "/php/lib/lib.php"
);

//Константы для этой страницы
define("PATH__PHP_TEST_SECTION", PATH__PHP_LEGO . "/test-section/");

//header
req_with_param(PATH__PHP_LEGO_COMMON . "/head.php");

//main
req_with_param(PATH__PHP_TEST_SECTION . "/test-section-main.php");

//footer
req_with_param(PATH__PHP_LEGO_COMMON . "/footer/footer.php");