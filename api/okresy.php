<?php
require_once "DatabaseConnector.php";
$dbConn = new DatabaseConnector();
$result = $dbConn->KrajNaOkresy($_GET["kraj"]);
echo json_encode($result,JSON_UNESCAPED_UNICODE);
//var_dump($result);