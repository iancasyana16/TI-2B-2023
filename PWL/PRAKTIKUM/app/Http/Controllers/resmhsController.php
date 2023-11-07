<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class resmhsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mhs = "Casyana";
        $title = "Ini adalah data Mahasiswa";
        $slug = "mahasiswa";
        $desk = "mengakses data pada controller resmhsController";
        $datamhs = $this->show();
        return view('konten.mahasiswa', compact('mhs', 'title', 'slug', 'desk', 'datamhs'));
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
            [
                'nama' => 'Casyana',
                'nim' => '2203037',
                'prodi' => 'Teknik Informatika',
            ],
            [
                'nama' => 'Gabriel',
                'nim' => '2203038',
                'prodi' => 'Teknik Informatika',
            ],
            [
                'nama' => 'Joy',
                'nim' => '2203039',
                'prodi' => 'Teknik Informatika',
            ]
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
