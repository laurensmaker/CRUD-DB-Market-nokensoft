<?php

namespace App\Http\Controllers;

use App\Models\DistrikModel;
use Illuminate\Http\Request;

class DistrikController extends Controller
{
    public function index()
    {
        $data = DistrikModel::all();
        return view('distrik',['title' => 'Distrik', 'distrik' => $data]);
    }

    public function tambah()
    {
        return view('tambahDistrik',['title' => 'Tambah Distrik']);
    }

    public function store(Request $request)
    {
        $this->validate($request,['nama' => 'Required', 'kode_pos' => 'Required']);

        DistrikModel::create(['nama' => $request->nama, 'kode_pos' => $request->kode_pos]);

        return redirect('distrik');
    }

    public function edit($id)
    {
        $data = DistrikModel::find($id);
        return view('editDistrik', ['title' => 'Edit Distrik', 'distrik' => $data]);
    }

    public function update($id, Request $request)
    {
        $data = DistrikModel::find($id);
        $this->validate($request,['nama' => 'Required', 'kode_pos' => 'Required']);

        $data->nama = $request->nama;
        $data->kode_pos = $request->kode_pos;
        $data->save();

        return redirect('distrik');

    }

    public function detail($id)
    {
        $data = DistrikModel::find($id);
        return view('detailDistrik',['title' => 'Detail Distrik', 'distrik' => $data]);
    }

    public function hapus($id)
    {
        $data = DistrikModel::find($id);
        $data->delete();

        return redirect('distrik');
    }
    
}
