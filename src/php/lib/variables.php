<?php
//Корень сайта
define("PATH__ROOT", $_SERVER["DOCUMENT_ROOT"] . "/" . explode('/', substr($_SERVER["PHP_SELF"], 1))[0]);
//Каталог php
define("PATH__PHP", PATH__ROOT . "/php");
//Каталог lib
define("PATH__PHP_LIB", PATH__PHP . "/lib");
//Каталог lego
define("PATH__PHP_LEGO", PATH__PHP . "/lego");
//Каталог common
define("PATH__PHP_LEGO_COMMON", PATH__PHP_LEGO . "/common");
//Каталог img
define("PATH__IMG", "../../img");
//Каталог bower
define("PATH__BOWER", "../../../src/bower");
//Название страницы
define("PAGE_NAME", basename($_SERVER["SCRIPT_FILENAME"], ".php"));