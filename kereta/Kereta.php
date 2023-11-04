<?php

include_once "interface/Kendaraan.php";

class Kereta implements Kendaraan{
    public function menampilkanKecepatan()
    {
        return "120 km/jam";
    }
    public function menampilkanWarna()
    {
        return "Merah";
    }
    public function menampilkanJumlahPenumpang()
    {
        return "100 Orang";
    }
}