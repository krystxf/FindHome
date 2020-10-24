<?php
require_once "DatabaseConnector.php";
$pole = array();

$file = file("downloaded/obyvatelstvo/extracted/".scandir("downloaded/obyvatelstvo/extracted")[2],FILE_IGNORE_NEW_LINES);
foreach ($file as $item) {
    $splitted = explode(",",$item);
    if ($splitted[7] == '"2019"' && $splitted[9] == ""){
        $mestoid = str_replace('"','',$splitted[6]);
        $pocetobyvatel = str_replace('"','',$splitted[1]);
        array_push($pole,[$mestoid,$pocetobyvatel]);
        //echo $mesto." - ".$pocetobyvatel."<br>";
    }

}
$dbConn = new DatabaseConnector();
$dbConn->AktualizovatPoctyMesta($pole);
var_dump($pole);
