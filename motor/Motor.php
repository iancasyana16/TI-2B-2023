<?php

include_once "interface/Kendaraan.php";

class Motor implements Kendaraan{
    public function menampilkanKecepatan(){
        return "60 km/jam";
    }

    public function menampilkanWarna(){
        return "Putih";
    }

    public function menampilkanJumlahPenumpang(){
        return "2 orang";
    }
}