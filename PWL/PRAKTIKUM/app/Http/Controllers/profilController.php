<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Profile Mahasiswa Politeknik Negeri Indramayu";
        $slug = "profile";
        $dataProfile = $this->show();
        return view('/konten.profile', compact('title', 'slug', 'dataProfile'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id = "")
    {
        $id = array(
            ['namaLengkap' => 'Casyana', 'umur' => '20 Tahun', 'prodi' => 'D3 TI'],
            ['namaLengkap' => 'Gabriel', 'umur' => '22 Tahun', 'prodi' => 'D3 TI'],
            ['namaLengkap' => 'Joy', 'umur' => '18 Tahun', 'prodi' => 'D3 TI'],
        );
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
