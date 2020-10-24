<?php
require_once "DatabaseConnector.php";
$pole = null;

$file = file("downloaded/nezamestnanost/raw/250180-20data092920.csv",FILE_IGNORE_NEW_LINES);
foreach ($file as $item) {
    $splitted = explode(",",$item);
    if ($splitted[2] == '"6290"' && $splitted[8] == '' && $splitted[9] == '"2020"' && $splitted[10] == '"2"'){
        $pole[str_replace('"','',$splitted[13])] = str_replace('"','',$splitted[1]);
    }
}


$dbConn = new DatabaseConnector();
$dbConn->AktualizovatNezamestnanost($pole);
//var_dump($pole);
