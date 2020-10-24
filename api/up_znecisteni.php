<?php
$url = "downloaded/znecisteni/raw/aqindex_3h_cze.json";

require_once "DatabaseConnector.php";
$dbConn = new DatabaseConnector();

function ConvertniHodnotu($hodnota)
{
    if ($hodnota == -1 || $hodnota == 0) {
        $hodnota = "1B";
    }

    switch ($hodnota) {
        case "1A":
            return 100;
        case "2A":
            return 60;
        case "2B":
            return 40;
        case "3A":
            return 20;
        case "3B":
            return 0;
        default:
            return 80;
    }
}

function Preloz($name)
{
    switch ($name) {
        case "Vysočina":
            return ("Kraj " . $name);
        default:
            return ($name . " kraj");
    }
}

$json = file_get_contents($url);
$json = json_decode($json, true);

$json = $json['States']['0']['Regions'];

$out = null;
$outP = null;

foreach ($json as $kraj) {


    if ($kraj['Name'] == "Praha") {
        $prumer = 0;
        foreach ($kraj['Stations'] as $stanice) {
            if (explode(" ", $stanice['Name'])[0] == "Praha") {
                if(isset($outP[explode("-", $stanice['Name'])[0]])){
                    if($outP[explode("-", $stanice['Name'])[0]] > ConvertniHodnotu($stanice['Ix']))
                        $outP[explode("-", $stanice['Name'])[0]] = ConvertniHodnotu($stanice['Ix']);
                }
                else{
                    $outP[explode("-", $stanice['Name'])[0]] = ConvertniHodnotu($stanice['Ix']);
                }
                $prumer += ConvertniHodnotu($stanice['Ix']);
            }
        }
        $prumer /= count($kraj['Stations']);
        $prumer = round($prumer);

        for($iter = 1; $iter < 11; $iter++){
            $cast = "Praha " . $iter;
            if(!isset($outP[$cast])){
               $outP[$cast] = $prumer;
            }
        }
    } else {
        $out[Preloz($kraj['Name'])] = 0;
        foreach ($kraj['Stations'] as $stanice) {
            $out[Preloz($kraj['Name'])] += ConvertniHodnotu($stanice['Ix']);
        }
        $out[Preloz($kraj['Name'])] /= count($kraj['Stations']);
        $out[Preloz($kraj['Name'])] = round($out[Preloz($kraj['Name'])]);
    }
}
$dbConn->AktualizovatZnecisteni($outP,$out);

var_dump($outP);