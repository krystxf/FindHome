<?php
require_once "DatabaseConnector.php";
$dbConn = new DatabaseConnector();
//$result = $dbConn->showAllObce();
$result = $dbConn->ObecNaOkresy($_GET["obec"]);
echo json_encode($result,JSON_UNESCAPED_UNICODE);
//var_dump($result);