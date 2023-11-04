<?php

include_once "interface/Kendaraan.php";

class Mobil implements Kendaraan{
    public function menampilkanKecepatan(){
        return "100 km/jam";
    }

    public function menampilkanWarna(){
        return "Silver";
    }

    public function menampilkanJumlahPenumpang(){
        return "6 orang";
    }

}