<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class prodiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Program Studi Politeknik Negeri Indramayu";
        $slug = "prodi";
        $dataProdi = $this->show();
        return view('/konten.prodi', compact('title', 'slug', 'dataProdi'));
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
    public function show(string $id = "")
    {
        $id = array(
            ['nama_prodi' => 'Teknik Informatika', 'kode_prodi' => 'D3 TI'],
            ['nama_prodi' => 'Teknik Mesin', 'kode_prodi' => 'D3 TM'],
            ['nama_prodi' => 'Teknik Pendingin dan Tata Udara', 'kode_prodi' => 'D3 TPTU'],
            ['nama_prodi' => 'Keperawatan', 'kode_prodi' => 'D3 KP'],
            ['nama_prodi' => 'Rekayasa Perangkat Lunak', 'kode_prodi' => 'D4 RPL'],
            ['nama_prodi' => 'Perancangan Manufaktur', 'kode_prodi' => 'D4 PM'],
        );
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
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
