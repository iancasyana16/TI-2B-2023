<?php

include_once "inteface/Kendaraan.php";

class Motor implements Kendaraan{
    public function menampilkanKecepatan(): void{
        echo "60 km/jam";
    }

    public function menampilkanWarna(): void{
        echo "Putih";
    }

    public function menampilkanJumlahPenumpang(): void{
        echo "2 orang";
    }
}