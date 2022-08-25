<?php

namespace App\Http\Controllers;

use File;
use App\Models\M_Organisasi;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OrganisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = M_Organisasi::all();
        return view('organisasi', ["title" => "organisasi"], ['organisasi' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create', ["title" => "Tambah Organisasi"]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'Required',
            'alamat' => 'Required',
            'alamat_web' => 'Required',
            'catatan' => 'Required',
            'provinsi' => 'Required',
            'kabupaten' => 'Required',
            'foto' => 'Required|image|mimes:jpg,png,jpeg',
        ]);

        $foto = $request->file('foto');
        $foto->storeAs('public/gambar', $foto->hashName());

        M_Organisasi::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'alamat_web' => $request->alamat_web,
            'catatan' => $request->catatan,
            'provinsi' => $request->provinsi,
            'kabupaten' => $request->kabupaten,
            'foto' => $foto->hashName()
        ]);
        return redirect('organisasi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datail = M_Organisasi::find($id);
        return view('detail-organisasi', ["title" => "Detail Organisasi"], ['organisasi' => $datail]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = M_Organisasi::find($id);
        return view('editOrganisasi', ["title" => "Edit Organisasi"], ['organisasi' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datas = M_Organisasi::find($id);
        $this->validate($request, [
            'nama' => 'Required',
            'alamat' => 'Required',
            'alamat_web' => 'Required',
            'catatan' => 'Required',
            'provinsi' => 'Required',
            'kabupaten' => 'Required',
            'foto' => 'Required|image|mimes:jpg,png,jpeg',
        ]);

        //update
        // $datas->update([
        //     'nama' => $request->nama,
        //     'alamat' => $request->alamat,
        //     'alamat_web' => $request->alamat_web,
        //     'catatan' => $request->catatan,
        //     'provinsi' => $request->provinsi,
        //     'kabupaten' => $request->kabupaten,
        //     'foto' => $request->foto
        // ]);

        //eloquent
        $datas->nama = $request->nama;
        $datas->alamat = $request->alamat;
        $datas->alamat_web = $request->alamat_web;
        $datas->catatan = $request->catatan;
        $datas->provinsi = $request->provinsi;
        $datas->kabupaten = $request->kabupaten;
        $datas->foto = $request->foto;
        $datas->save();

        //cek kalo input gambar
        if ($request->hasFile('foto')) {
            //upload gambar baru
            $foto = $request->file('foto');
            $foto->storeAs('public/gambar', $foto->hashName());

            //hapus gambar lama
            Storage::delete('public/gambar/' . $datas->foto);

            //update 
            // $datas->update([
            //     'nama' => $request->nama,
            //     'alamat' => $request->alamat,
            //     'alamat_web' => $request->alamat_web,
            //     'catatan' => $request->catatan,
            //     'provinsi' => $request->provinsi,
            //     'kabupaten' => $request->kabupaten,
            //     'foto' => $foto->hashName()
            // ]);

            //eloquent
            $datas->nama = $request->nama;
            $datas->alamat = $request->alamat;
            $datas->alamat_web = $request->alamat_web;
            $datas->catatan = $request->catatan;
            $datas->provinsi = $request->provinsi;
            $datas->kabupaten = $request->kabupaten;
            $datas->foto = $foto->hashName();
            $datas->save();
        }

        return redirect('/organisasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datas = M_Organisasi::find($id);
        $datas->delete();
        Storage::delete('public/gambar' . $datas->foto);

        return redirect('organisasi');
    }
}
