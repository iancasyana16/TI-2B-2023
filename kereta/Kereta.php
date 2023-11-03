<?php

include_once "interface/Kendaraan.php";

class Kereta implements Kendaraan{
    public function menampilkanKecepatan(): void
    {
        echo "120 km/jam";
    }
    public function menampilkanWarna(): void
    {
        echo "Merah";
    }
    public function menampilkanJumlahPenumpang(): void
    {
        echo "100 Orang";
    }
}