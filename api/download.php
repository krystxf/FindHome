<?php
require "functions.php";

$name = $_GET["name"];
$url = $_GET["url"];

if (!is_null($name) && strlen($name) > 4 && !is_null($url) && strlen($url) > 4){
    createFolder("/var/www/hackathon/api/downloaded/$name");
    createFolder("/var/www/hackathon/api/downloaded/$name/raw");
    createFolder("/var/www/hackathon/api/downloaded/$name/extracted");

    downloadFile($url,"/var/www/hackathon/api/downloaded/$name/raw");
    unzipAll("/var/www/hackathon/api/downloaded/$name/raw","/var/www/hackathon/api/downloaded/$name/extracted");

    echo "Úspěšné";
}
else{
    echo "Chyba. Musíte zadat parametr 'name' a 'url'.";
}