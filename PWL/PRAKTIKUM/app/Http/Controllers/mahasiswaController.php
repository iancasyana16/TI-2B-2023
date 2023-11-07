<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    public function index()
    {
        $mhs = "Casyana";
        $title = "Ini adalah data Mahasiswa";
        $slug = "mahasiswa";
        $desk = "mengakses data pada controller mahasiswaController";
        $datamhs = $this->dataMahasiswa();
        return view('konten.mahasiswa', compact('mhs', 'title', 'slug', 'desk', 'datamhs'));
    }

    public function dataMahasiswa()
    {
        $datamhs = array(
            [
                'nama' => 'Casyana',
                'nim' => 2203037,
                'prodi' => 'Teknik Informatika',
            ],
            [
                'nama' => 'Gabriel',
                'nim' => 2203038,
                'prodi' => 'Teknik Informatika',
            ],
            [
                'nama' => 'Joy',
                'nim' => 2203039,
                'prodi' => 'Teknik Informatika',
            ]
            );
            return $datamhs;
    }
};
