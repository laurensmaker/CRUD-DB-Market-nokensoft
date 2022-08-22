<?php

namespace App\Http\Controllers;

use App\Models\KelurahanModel;
use Illuminate\Http\Request;

class KelurahanController extends Controller
{
    public function index()
    {
        $data = KelurahanModel::all();
        return view('kelurahan', ['title' => 'Kelurahan', 'kelurahan' => $data]);
    }

    public function tambah()
    {
        return view('tambahKelurahan', ['title' => 'Tambah kelurahan']);
    }

    public function store(Request $request)
    {
        $this->validate($request,['nama' => 'Required', 'kode_pos' => 'Required']);

        KelurahanModel::create(['nama' => $request->nama, 'kode_pos' => $request->kode_pos]);

        return redirect('kelurahan');
    }

    public function edit($id)
    {
        $data = KelurahanModel::find($id);
        return view('editKelurahan',['title' => 'Edit Kelurahan', 'kelurahan' => $data]);
    }
    public function update($id, Request $request)
    {
        $data = KelurahanModel::find($id);
        $this->validate($request,['nama' => 'Required', 'kode_pos' => 'Required']);

        $data->nama = $request->nama;
        $data->kode_pos = $request->kode_pos;
        $data->save();

        return redirect('kelurahan');

    }

    public function detail($id)
    {
        $data = KelurahanModel::find($id);
        return view('detailKelurahan',['title' => 'Detail Kelurahan', 'kelurahan' => $data]);
    }

    public function hapus($id)
    {
        $data =KelurahanModel::find($id);
        $data->delete();
        return redirect('kelurahan');

    }
}
