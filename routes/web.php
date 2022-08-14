<?php

use App\Http\Controllers\OrganisasiController;
use App\Models\M_Organisasi;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dasbor', [
        "title" => "dasbor"
    ]);
});

Route::resource('organisasi', M_Organisasi::class);

Route::get('/kategori', function () {
    return view('kategori', [
        "title" => "kategori"
    ]);
});

Route::get('/pengguna', function () {
    return view('pengguna', [
        "title" => "pengguna"
    ]);
});

Route::get('/provinsi', function () {
    return view('provinsi', [
        "title" => "provinsi"
    ]);
});

Route::get('/kabupaten', function () {
    return view('kabupaten', [
        "title" => "kabupaten"
    ]);
});

Route::get('/distrik', function () {
    return view('distrik', [
        "title" => "distrik"
    ]);
});

Route::get('/kelurahan', function () {
    return view('kelurahan', [
        "title" => "kelurahan"
    ]);
});


Route::get('/tambah-kategori', function () {
    return view('tambah-kategori', [
        "title" => "tambah-kategori"
    ]);
});

Route::get('/tambah-pengguna', function () {
    return view('tambah-pengguna', [
        "title" => "tambah-pengguna"
    ]);
});

Route::get('/tambah-provinsi', function () {
    return view('tambah-provinsi', [
        "title" => "tambah-provinsi"
    ]);
});

Route::get('/tambah-kabupaten', function () {
    return view('tambah-kabupaten', [
        "title" => "tambah-kabupaten"
    ]);
});

Route::get('/tambah-distrik', function () {
    return view('tambah-distrik', [
        "title" => "tambah-distrik"
    ]);
});

Route::get('/tambah-kelurahan', function () {
    return view('tambah-kelurahan', [
        "title" => "tambah-kelurahan"
    ]);
});
