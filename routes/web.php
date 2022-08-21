<?php

use App\Http\Controllers\DistrikController;
use App\Http\Controllers\KabupatenController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\OrganisasiController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\ProvinsiController;
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
    

Route::get('/pengguna', [PenggunaController::class, 'index']);
Route::get('/pengguna/tambah', [PenggunaController::class, 'tambah']);
Route::post('store', [PenggunaController::class, 'store']);
Route::get('pengguna/detail/{id}', [PenggunaController::class, 'detail']);
Route::get('pengguna/edit/{id}', [PenggunaController::class, 'edit']);
Route::post('update/{id}', [PenggunaController::class, 'update']);


Route::get('provinsi',[ProvinsiController::class, 'index']);
Route::get('provinsi/tambah',[ProvinsiController::class, 'tambah']);
Route::post('store',[ProvinsiController::class, 'store']);

Route::get('kabupaten', [KabupatenController::class, 'index']);
Route::get('kabupaten/tambah', [KabupatenController::class, 'tambah']);
Route::post('store', [KabupatenController::class, 'store']);
Route::get('kabupaten/edit/{id}', [KabupatenController::class, 'edit']);
Route::post('update/{id}', [KabupatenController::class, 'update']);
Route::get('hapus/{id}', [KabupatenController::class, 'hapus']);

Route::get('distrik', [DistrikController::class, 'index']);
Route::get('distrik/tambah', [DistrikController::class, 'tambah']);
Route::post('store', [DistrikController::class, 'store']);
Route::get('distrik/edit/{id}', [DistrikController::class, 'edit']);
Route::post('update/{id}', [DistrikController::class, 'update']);
Route::get('distrik/detail/{id}', [DistrikController::class, 'detail']);
Route::get('hapus/{id}', [DistrikController::class, 'hapus']);

Route::get('kelurahan',[KelurahanController::class, 'index']);
Route::get('kelurahan/tambah',[KelurahanController::class, 'tambah']);
Route::post('store',[KelurahanController::class, 'store']);
Route::get('kelurahan/edit/{id}',[KelurahanController::class, 'edit']);
Route::post('update/{id}',[KelurahanController::class, 'update']);
Route::get('kelurahan/detail/{id}',[KelurahanController::class, 'detail']);
Route::get('hapus/{id}',[KelurahanController::class, 'hapus']);


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
