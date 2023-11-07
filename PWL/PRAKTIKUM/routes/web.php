<?php

use App\Http\Controllers\mahasiswaController;
use App\Http\Controllers\mhsController;
use App\Http\Controllers\pagemhsController;
use App\Http\Controllers\pageprodiController;
use App\Http\Controllers\pagehomeController;
use App\Http\Controllers\prodiController;
use App\Http\Controllers\profilController;
use App\Http\Controllers\resmhsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// ----------------------PRAKTIKUM ROUTE-----------------------

// CARA MEMBUAT ROUTE 
// Route::method('url', $callback);

// Contoh 

Route::get('/', function () {
    return view('welcome');
});

// JENIS-JENIS ROUTE METHOD
// ------------------------

Route::get('/index', function(){  // route dengan method get
    echo "ujicoba route dengan method get";
});

Route::post('/save', function(){ // route dengan method post
    echo "ujicoba route dengan method post";
});

Route::put('/update', function(){ // route dengan method put
    echo "ujicoba route dengan method put";
});

Route::delete('/delete', function(){ // route dengan method delete
    echo "ujicoba route dengan method delete";
});

Route::match(['get', 'post'], '/kirim', function () { // route dengan method match
    echo "ujicoba route dengan method match";
});

Route::any('/home', function(){ // route dengan method any
    echo "ujicoba route dengan method any";
});

// BERBAGAI CARA PENULISAN ROUTE
// -----------------------------

// ROUTE DENGAN PARAMETER

Route::get('/show/{id}' , function($id) {
    echo "nilai GET dari parameter ID = " . $id;
});

// ROUTE DENGAN PARAMETER DENGAN NILAI DEFAULT

Route::get('/show/{id?}' , function($id = 0) {
    echo "nilai GET dari parameter ID = " . $id;
});

// ROUTE DENGAN REGULAR EXPRESION

Route::get('/edit/{nama}' , function($nama) {
    echo "nilai GET dari parameter NAMA = " . $nama;
}) -> where('nama', '[A-Za-z]+');

// ROUTE DENGAN REGULAR EXPRESION DENGAN NILAI DEFAULT

Route::get('/edit/{nama?}' , function($nama = "undefined") {
    echo "nilai GET dari parameter NAMA = " . $nama;
}) -> where('nama', '[A-Za-z]+');

// ROUTE DENGAN NAMA
// -----------------

Route::get('/start' , function() {
    echo "<a href='" . Route('coba') . "'> START <a/>";
}) -> name('start');

Route::get('/coba' , function() {
    echo "<a href='" . Route('start') . "'> FINISH <a/>";
}) -> name('coba');

// ROUTE DENGAN AKSI CONTROLLER
// ----------------------------

Route::get('/mhs', [mhsController::class, 'index']) -> name('mhs');

// ----------------------PRAKTIKUM ROUTE-----------------------

// -------------------TUGAS PRAKTIKUM ROUTE--------------------

Route::get('/home', [pagehomeController::class, 'index']) -> name('home');
Route::get('/mahasiswa', [pagemhsController::class, 'index']) -> name('mahasiswa');
Route::get('/prodi', [pageprodiController::class, 'index']) -> name('prodi');


Route::get('/tugas' , function() {
    echo "<a href='" . Route('home') . "'> HOME <a/> - ";
    echo "<a href='" . Route('mahasiswa') . "'> MAHASISWA <a/> - ";
    echo "<a href='" . Route('prodi') . "'> PRODI <a/>";
    echo "<hr>";
    echo "<h1>PAGE > HOME</h1>";
}) -> name('tugas');

// -------------------TUGAS PRAKTIKUM ROUTE------------------- 

// ----------------PRAKTIKUM ROUTE VIEW BLADE----------------- 

Route::get('mhs/show', [mhsController::class, 'show']) -> name('show');
Route::get('mhs/perulangan', [mhsController::class, 'perulangan']) -> name('perulangan');


Route::get('/praktikumviewblade', function() {
    $title = "WebSaya.com";
    $slug = "home";
    $konten = "ini adalah konten WebSaya.com";
    return view('konten.home', compact('title', 'slug', 'konten'));
});

Route::get('/home', function() {
    $title = "WebSaya.com";
    $slug = "home";
    $konten = "ini adalah konten WebSaya.com";
    return view('konten.home', compact('title', 'slug', 'konten'));
});

// ----------------PRAKTIKUM VIEW BLADE-----------------

// ------------TUGAS PRAKTIKUM VIEW BLADE---------------

Route::get('/prodi', function() {
    $title = "Program Studi Politeknik Negeri Indramayu";
    $slug = "prodi";
    $dataProdi = array(
        ['nama_prodi' => 'Teknik Informatika', 'kode_prodi' => 'D3 TI'],
        ['nama_prodi' => 'Teknik Mesin', 'kode_prodi' => 'D3 TM'],
        ['nama_prodi' => 'Teknik Pendingin dan Tata Udara', 'kode_prodi' => 'D3 TPTU'],
        ['nama_prodi' => 'Keperawatan', 'kode_prodi' => 'D3 KP'],
        ['nama_prodi' => 'Rekayasa Perangkat Lunak', 'kode_prodi' => 'D4 RPL'],
        ['nama_prodi' => 'Perancangan Manufaktur', 'kode_prodi' => 'D4 PM'],
    );
    return view('konten.prodi', compact('title', 'slug', 'dataProdi'));
});

Route::get('/profile', function() {
    $title = "Profile Mahasiswa Politeknik Negeri Indramayu";
    $slug = "profile";
    $dataProfile = array(
        ['namaLengkap' => 'Casyana', 'umur' => '20 Tahun', 'prodi' => 'D3 TI'],
        ['namaLengkap' => 'Gabriel', 'umur' => '22 Tahun', 'prodi' => 'D3 TI'],
        ['namaLengkap' => 'Joy', 'umur' => '18 Tahun', 'prodi' => 'D3 TI'],
    );
    return view('/konten.profile', compact('title', 'slug', 'dataProfile'));
});

// ------------TUGAS PRAKTIKUM VIEW BLADE---------------

// ----------------PRAKTIKUM CONTROLLER-----------------

Route::get('/mahasiswa', [mahasiswaController::class, 'index']);
Route::resource('/resmhs', resmhsController::class);
Route::resource('/prodi', prodiController::class);
Route::resource('/profile', profilController::class);

// ----------------PRAKTIKUM CONTROLLER-----------------
