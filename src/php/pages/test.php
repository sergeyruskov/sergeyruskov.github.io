<?
//Определяем рут сайта
if (strstr($_SERVER["DOCUMENT_ROOT"], "/")) {
	$rootFolder = explode("/", $_SERVER["DOCUMENT_ROOT"]);
} else {
	$rootFolder = explode("\\", $_SERVER["DOCUMENT_ROOT"]);
}
$rootFolder = end($rootFolder);
if ($rootFolder === "localhost") {
	define("ROOT__PATH", $_SERVER["DOCUMENT_ROOT"] . "/psychologies_html_adaptive");
	//Каталог img
	define("PATH__IMG", "../../img");
	//Каталог bower
	define("PATH__BOWER", "../../bower");
	//Каталог css
	define("PATH__CSS", "../../../dist/css-dev");
	//Каталог js
	define("PATH__JS", "../../../dist/js-dev");
} else {
	define("ROOT__PATH", $_SERVER["DOCUMENT_ROOT"]);
	//Каталог img
	define("PATH__IMG", "../img");
	//Каталог css
	define("PATH__CSS", "../css-dev");
	//Каталог js
	define("PATH__JS", "../js-dev");
	//Каталог bower
	define("PATH__BOWER", "../../src/bower");
}

require_once(ROOT__PATH . "/src/php/lib/lib.php");
//необходимо для подключения js/css файлов
define("FILE_NAME", basename(__FILE__, '.php'));

//head
req_with_param(PATH__COMMON . "/head.php");

	echo "<main>";
		//branding
		echo "<div class='hide--laptop hide--tablet hide--phone'>";
			req_with_param(PATH__COMMON . "/branding.php");
		echo "</div>";
		//content
		req_with_param(PATH__TEST . "/grid.php", ["branding" => "branding--content"]);
		//footer-top
		req_with_param(PATH__COMMON . "/footer/footer-top.php", ["branding" => "branding--content"]);
	echo "</main>";

//footer
req_with_param(PATH__COMMON . "/footer/footer.php");