<?php
if (!is_null($_GET["okres"]) && strlen($_GET["okres"]) > 0){
    require_once "DatabaseConnector.php";
    $dbConn = new DatabaseConnector();
    echo json_encode($dbConn->OkresNaObce($_GET["okres"]),JSON_UNESCAPED_UNICODE);
}
else echo "Chyba";