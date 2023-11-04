<?php

include_once "kereta/Kereta.php";
include_once "mobil/Mobil.php";
include_once "motor/Motor.php";

$kereta = new Kereta();
$mobil = new Mobil();
$motor = new Motor();

echo "<b> Nama Kendaraan : Kereta </b> <br>";
echo "Kecepatan : " . $kereta -> menampilkanKecepatan() . "<br>";
echo "Warna : " . $kereta -> menampilkanWarna() . "<br>";
echo "Kapasitas Penumpang : " . $kereta -> menampilkanJumlahPenumpang() . "<br>";
echo "<br> <br>";

echo "<b>Nama Kendaraan : Mobil</b> <br>";
echo "Kecepatan : " . $mobil -> menampilkanKecepatan() . "<br>";
echo "Warna : " .  $mobil -> menampilkanWarna() . "<br>";
echo "Kapasitas Penumpang : " .  $mobil -> menampilkanJumlahPenumpang() . "<br>";
echo "<br> <br>";

echo "<b>Nama Kendaraan : Sepeda Motor</b> <br>";
echo "Kecepatan : " . $motor -> menampilkanKecepatan() . "<br>";
echo "Warna : " .  $motor -> menampilkanWarna() . "<br>";
echo "Kapasitas Penumpang : " .  $motor -> menampilkanJumlahPenumpang() . "<br>";
echo "<br> <br>";