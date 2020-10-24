<?php
require_once "DatabaseConnector.php";
$pole = null;

$file = file("downloaded/delkazivota/raw/stredni-delka-zivota.csv",FILE_IGNORE_NEW_LINES);
foreach ($file as $item) {
    $splitted = explode(",",$item);
    if ($splitted[1] == '2017' && strlen($splitted[3]) > 0 && $splitted[7] == '0'){
        if (!isset($pole[$splitted[3]])) $pole[$splitted[3]] = 0;
        $pole[$splitted[3]] += intval($splitted[0]/2);
        //echo intval($splitted[0])."<br>";
        //var_dump($splitted);
        //echo "<br>";
    }
}


$dbConn = new DatabaseConnector();
$dbConn->AktualizovatDelkuZivota($pole);
var_dump($pole);
