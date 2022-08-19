<?php

namespace App\Http\Controllers;

use App\Models\KabupatenModel;
use Illuminate\Http\Request;

class KabupatenController extends Controller
{
    public function index()
    {
        $data = KabupatenModel::all();
        return view('kabupaten', ['title' => 'Kabupaten', 'kabupaten' => $data]);
    }

    public function tambah()
    {
        return view('tambahKabupaten', ['title' => 'Tambah Kabupaten']);
    }

    public function store(Request $request)
    {
        $this->validate($request, ['nama' => 'Required', 'kode_pos' => 'Required']);
        KabupatenModel::create(['nama' => $request->nama, 'kode_pos' => $request->kode_pos]);

        return redirect('kabupaten');
    }

    public function edit($id)
    {
        $data = KabupatenModel::find($id);
        return view('editKabupaten', ['title' => 'Edit Kabupaten', 'kabupaten' => $data]);
    }

    public function update($id, Request $request)
    {
        $data = KabupatenModel::find($id);
        $this->validate($request, ['nama' => 'Required', 'kode_pos' => 'Required']);

        $data->nama = $request->nama;
        $data->kode_pos =$request->kode_pos;
        $data->save();

        return redirect('kabupaten');

    }

    public function hapus($id)
    {
        $data = KabupatenModel::find($id);
        $data->delete();

        return redirect('kabupaten');
    }
}
