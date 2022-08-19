<?php

namespace App\Http\Controllers;

use App\Models\PenggunaModel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class PenggunaController extends Controller
{
    public function index()
    {
        $data = PenggunaModel::all();
        return view('pengguna',['title' => 'Pengguna', 'pengguna' => $data]);
    }

    public function tambah()
    {
        return view('tambahPengguna', ['title' => 'Tambah Pengguna']);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'Required',
            'email' => 'Required',
            'no_hp' => 'Required',
            'password' => 'Required',
            'password_confirm' => 'Required',
            'foto' => 'Required|image|mimes:jpg,png,jpeg',
        ]);

        $foto = $request->file('foto');
        $foto->storeAs('public/gambar', $foto->hashName());

        PenggunaModel::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'password' => $request->password,
            'password_confirm' => $request->password_confirm,
            'foto' => $foto->hashName()
        ]);
        return redirect('pengguna');

    }

    public function detail($id)
    {
        $data = PenggunaModel::find($id);
        return view('detailPengguna', ['title' => 'Detail Pengguna', 'pengguna' => $data]);
    }

    public function edit($id)
    {
        $data = PenggunaModel::find($id);
        return view('editPengguna', ['title' => 'Edit Pengguna', 'pengguna' => $data]);
    }
    public function update($id, Request $request)
    {
        $data = PenggunaModel::find($id);
        $this->validate($request,[
            'nama' => 'Required',
            'email' => 'Required',
            'no_hp' => 'Required',
            'foto' => 'Required|image|mimes:jpg,png,jpeg',
        ]); 

        //cek kalo input gambar
        if ($request->hasFile('foto')) {
            //upload gambar baru
            $foto = $request->file('foto');
            $foto->storeAs('public/gambar', $foto->hashName());

            //hapus gambar lama
            Storage::delete('public/gambar/' . $data->foto);

            //eloquent
            $data->nama = $request->nama;
            $data->email = $request->email;
            $data->no_hp = $request->no_hp;
            $data->foto = $foto->hashName();
            $data->save();
        }        

        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->no_hp = $request->no_hp;
        $data->foto = $request->foto;
        $data->save();

        return redirect('pengguna');

    }
}
