<?php
require_once "db.php";

// define("HOST", "http://www.demaindeslaube.site/public");
define("HOST", "http://localhost/MonSite/public");




// DB
// define("DB_HOSTNAME", "localhost");
// define("DB_USERNAME", "u305945986_maxime");
// define("DB_PASSWORD", "jbTasQr;4");
// define("DB_DATABASE", "u305945986_demaindeslaube");
// define("DB_PORT", "65002");
define("DB_HOSTNAME", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "mesprojets");
define("DB_PORT", "3306");

$db = new DB(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE, DB_PORT);
?>
