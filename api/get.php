<?php
require_once "DatabaseConnector.php";
$dbConn = new DatabaseConnector();
echo json_encode($dbConn->GetAllData(),JSON_UNESCAPED_UNICODE);