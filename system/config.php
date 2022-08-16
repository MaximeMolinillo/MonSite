<?php
require_once "db.php";

// define("HOST", "http://www.maxime-molinillo.fr/");
define("HOST", "http://localhost/MonSite/public");




// DB
// define("DB_HOSTNAME", "localhost");
// define("DB_USERNAME", "u305945986_maxmoli");
// define("DB_PASSWORD", "aGL&OTmQH9:");
// define("DB_DATABASE", "u305945986_mesprojets");
// define("DB_PORT", "65002");
define("DB_HOSTNAME", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "mesprojets");
define("DB_PORT", "3306");

$db = new DB(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE, DB_PORT);
?>
