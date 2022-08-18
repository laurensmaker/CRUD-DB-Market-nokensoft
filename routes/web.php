<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\OrganisasiController;
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

Route::get('/organisasi', [OrganisasiController::class, 'index']);
Route::get('/organisasi/create', [OrganisasiController::class, 'create']);
Route::post('/organisasi/store', [OrganisasiController::class, 'store']);
Route::get('organisasi/edit/{id}', [OrganisasiController::class, 'edit']);
Route::post('update/{id}', [OrganisasiController::class, 'update']);
Route::get('destroy/{id}', [OrganisasiController::class, 'destroy']);
Route::get('detail-organisasi/{id}', [OrganisasiController::class, 'show']);

Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/kategori/tambah', [KategoriController::class, 'tambah']);
Route::post('/kategori/store', [KategoriController::class, 'store']);
Route::get('kategori/edit/{id}', [KategoriController::class, 'edit']);
Route::post('update/{id}', [KategoriController::class, 'update']);
Route::get('hapus/{id}', [KategoriController::class, 'hapus']);
    

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
