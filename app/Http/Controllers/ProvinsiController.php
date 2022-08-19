<?php

namespace App\Http\Controllers;

use App\Models\ProvinsiModel;
use Illuminate\Http\Request;

class ProvinsiController extends Controller
{
    public function index()
    {
        $data = ProvinsiModel::all();
        return view('provinsi', ['title' => 'Provinsi', 'provinsi' => $data]);
    }

    public function tambah()
    {
        return view('tambahProvinsi', ['title' => 'Tambah Provinsi']);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'Required'
        ]);

        ProvinsiModel::create([
            'nama' => $request->nama
        ]);

        return redirect('provinsi');
    }
}
