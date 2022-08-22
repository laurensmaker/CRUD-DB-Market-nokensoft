<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class KategoriController extends Controller
{
    public function index(){
        $data = Kategori::all();
        return view('kategori',['title' => 'Kategori',  'kategori' => $data]);
    }

    public function tambah()
    {
        return view('tambahKategori', ['title' => 'Tambah Kategori']);
    }

    public function store(Request $request)
    {
        $this->validate($request,['nama_kategori' => 'Required']);

        Kategori::create(['nama_kategori' => $request->nama_kategori]);

        return redirect('kategori');
    }

    public function edit($id)
    {
        $data = Kategori::find($id);
        return view('editKategori', ['title' => 'Edit Kategori', 'kategori' => $data]);
    }

    public function update($id, Request $request)
    {
        $data = Kategori::find($id);
        $this->validate($request, ['nama_kategori' => 'Required']);

        $data->nama_kategori = $request->nama_kategori;
        $data->save();
        return redirect('kategori');

    }

    public function hapus($id)
    {
        $data = Kategori::find($id);
        $data->delete();

        return redirect('kategori');
    }
}
