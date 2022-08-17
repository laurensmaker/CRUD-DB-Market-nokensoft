@extends('layouts.utama')

@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Organisasi</h1>

        <a href="{{ url('organisasi') }}" class="d-none d-sm-inline-block btn btn-primary shadow-sm"><i
                class="fa fa-arrow-circle-left mr-2" aria-hidden="true"></i>Kembali</a>
    </div>

    <!-- Content Row -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Nama Organisani</th>
                            <th>Alamat</th>
                            <th>Alamat Web</th>
                            <th>Provinsi</th>
                            <th>Kabupaten</th>
                            <th>catatan</th>
                            <th>Gambar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $nomor = 1;
                        @endphp                       
                            <tr>
                                <td>{{ $nomor++ }}</td>
                                <td>{{ $organisasi->nama }}</td>
                                <td>{{ $organisasi->alamat }}</td>
                                <td>{{ $organisasi->alamat_web }}</td>
                                <td>{{ $organisasi->provinsi }}</td>
                                <td>{{ $organisasi->kabupaten }}</td>
                                <td>{{ $organisasi->catatan }}</td>
                                <td><img src="{{ Storage::url('public/gambar/').$organisasi->foto }}" class="rounded" style="width: 100px" alt="foto"></td>
                            </tr>
                       
                                            

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
    
@endsection

