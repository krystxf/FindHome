<?php
require_once "DatabaseConnector.php";
$pole = null;

$dbConn = new DatabaseConnector();
$okresyRaw = $dbConn->showAllOkresyKod();
$okresy = array();
foreach ($okresyRaw as $item) {
    $okresy[$item[0]] = 0;
}

$file = file("downloaded/zdravotnictvi/raw/narodni-registr-poskytovatelu-zdravotnich-sluzeb.csv",FILE_IGNORE_NEW_LINES);
foreach ($file as $item) {
    $splitted = explode(",",$item);
    $pole[$splitted[12]]++;
        //var_dump($splitted);
        //echo "<br>";
}
var_dump($pole);

$dbConn->AktualizovatZdravotnictvi($pole);
//var_dump($pole);
