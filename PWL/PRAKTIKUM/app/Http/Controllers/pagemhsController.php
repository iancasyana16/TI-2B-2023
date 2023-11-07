<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagemhsController extends Controller
{
    public function index()
    {
        echo "<a href='" . Route('home') . "'> HOME <a/> - ";
        echo "<a href='" . Route('mahasiswa') . "'> MAHASISWA <a/> - ";
        echo "<a href='" . Route('prodi') . "'> PRODI <a/>";
        echo "<hr>";
        echo "<h1> PAGE > MAHASISWA </h1>";
    }
}
