<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/* NOTE NYALAKAN KOMENTAR UNTUK MENJALANKAN CODE SESUAI PRAKTIKUM */

// ---------------------PRAKTIKUM ROUTE----------------------

// class mhsController extends Controller
// {
//     public function index()
//     {
//         return "mengakses controller menggunakan route";
//     }
// }

// ---------------------PRAKTIKUM ROUTE----------------------

// -------------------PRAKTIKUM VIEW & BLADE-----------------


class mhsController extends Controller
{
    public function index()
    {
        $mhs = "Casyana";
        return view('mhs.index', compact('mhs'));
    }

    public function show()
    {
        $mhs = ['Casyana', 'Gabriel', 'Joy'];
        return view('mhs/show', compact('mhs'));
    }

    public function perulangan()
    {
        $mhs = ['Casyana', 'Gabriel', 'Joy'];
        return view('mhs/perulangan', compact('mhs'));
    }
}

// -------------------PRAKTIKUM VIEW & BLADE----------------
