<?php

class DatabaseConnector
{
    private function getPdo()
    {
        return new PDO("mysql:dbname=*;host=*;charset=utf8", "*", "*", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }

    private function fetchData($command){
        $pdo = $this->getPdo();
        $stmt = $pdo->query($command);
        $fetched = $stmt->fetchAll();
        unset($stmt);
        return $fetched;
    }

    public function showAllObce() {
        return $this->fetchData("select nazev from obec;");
    }

    public function showAllOkresy() {
        return $this->fetchData("select nazev from okres;");
    }

    public function showAllOkresyKod() {
        return $this->fetchData("select kod from okres;");
    }

    public function KrajNaOkresy($kraj) {
        $fetched = $this->fetchData("select okres.nazev from okres inner join kraj on okres.kraj_id = kraj.id where kraj.nazev = '$kraj';");
        $result = array();
        foreach ($fetched as $item){
            array_push($result,$item[0]);
        }
        return $result;
    }

    public function ObecNaOkresy($obec) {
        return $this->fetchData("select okres.nazev from okres inner join obec on okres.id = obec.okres_id where obec.nazev = '$obec';")[0][0];
    }

    public function OkresNaObce($okres) {
        return $this->fetchData("select obec.nazev from okres inner join obec on okres.id = obec.okres_id where okres.nazev = '$okres';");
    }

    public function AktualizovatPoctyMesta($pole) {
        $pdo = $this->getPdo();
        foreach ($pole as $item) {
            $query = $pdo->prepare("update obec a inner join obec b on a.id = b.id set b.pocet_obyvatel = $item[1] where a.kod = '$item[0]';");
            $query->execute();
        }
        $pdo = null;
    }

    public function AktualizovatPoctyOkresu(){
        $pdo = $this->getPdo();
        $fetched = $this->fetchData("select id from okres;");
        foreach ($fetched as $item) {
            //echo $item[0]."<br>";
            $sum = $this->fetchData("select sum(obec.pocet_obyvatel) from okres inner join obec on okres.id = obec.okres_id where okres.id = $item[0];");
            foreach ($sum as $item2) {
                $query = $pdo->prepare("update okres inner join obec on okres.id = obec.okres_id set okres.pocet_obyvatel = $item2[0] where okres.id = $item[0];");
                $query->execute();
            }

        }
    }

    public function AktualizovatZnecisteni($polePraha, $poleOstatni){
        $pdo = $this->getPdo();
        foreach ($poleOstatni as $index => $item) {
            echo $index;
            $query = $pdo->prepare("update okres inner join kraj on kraj.id = okres.kraj_id set okres.znecisteni = $item where kraj.nazev = '$index';");
            $query->execute();
        }
        foreach ($polePraha as $index => $item) {
            $query = $pdo->prepare("update okres a inner join okres b on a.id = b.id set a.znecisteni = $item where b.nazev = '$index';");
            $query->execute();
        }
    }

    public function GetAllData(){
        return $this->fetchData("select * from okres order by nazev;");
    }

    public function AktualizovatDelkuZivota($pole){
        $pdo = $this->getPdo();
        foreach ($pole as $index => $item) {
            $query = $pdo->prepare("update okres a inner join okres b on a.id = b.id set a.delkazivota = $item where b.kod = '$index';");
            $query->execute();
        }
    }

    public function AktualizovatNezamestnanost($pole){
        $pdo = $this->getPdo();
        foreach ($pole as $index => $item) {
            $query = $pdo->prepare("update okres inner join kraj on kraj.id = okres.kraj_id set okres.nezamestnanost = $item where kraj.nazev = '$index';");
            $query->execute();
        }
    }

    public function AktualizovatZdravotnictvi($pole){
        $pdo = $this->getPdo();
        foreach ($pole as $index => $item) {
            $query = $pdo->prepare("update okres a inner join okres b on a.id = b.id set a.zdravotnictvi = $item where b.kod = '$index';");
            $query->execute();
        }
    }
}