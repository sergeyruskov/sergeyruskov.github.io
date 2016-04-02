<?php
//Корень сайта
define("PATH__SRC", ROOT__PATH . "/src");
//dist
define("PATH__DIST", ROOT__PATH . "\\dist");
//Каталог php
define("PATH__PHP", PATH__SRC . "/php");
//Каталог lib
define("PATH__LIB", PATH__PHP . "/lib");
//Каталог lego
define("PATH__LEGO", PATH__PHP . "/lego");
//Каталог common
define("PATH__COMMON", PATH__LEGO . "/common");
//Адреса папок с блоками страниц
//todo Добавлять новые страницы
define("PATH__INDEX", PATH__LEGO . "/index");
define("PATH__TEST", PATH__LEGO . "/test");
define("PATH__TEST_SECTION", PATH__LEGO . "/test-section");
define("PATH__TEST_RESULT", PATH__LEGO . "/test-result");
define("PATH__SECTION", PATH__LEGO . "/section");
define("PATH__ARTICLE", PATH__LEGO . "/article");
define("PATH__GAME", PATH__LEGO . "/game");
//Название страницы
define("PAGE_NAME", basename($_SERVER["SCRIPT_FILENAME"], ".php"));