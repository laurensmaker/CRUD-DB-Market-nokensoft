@extends('layouts.utama')

@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Organisasi</h1>

        <a href="{{ url('organisasi') }}" class="d-none d-sm-inline-block btn btn-primary shadow-sm"><i
                class="fa fa-plus mr-2" aria-hidden="true"></i>Kembali</a>
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
                        {{-- @foreach ($datail as $tamp) --}}
                            <tr>
                                <td>{{ $nomor++ }}</td>
                                <td>{{ $datail->nama }}</td>
                                <td>{{ $datail->alamat }}</td>
                                <td>{{ $datail->alamat_web }}</td>
                                <td>{{ $datail->provinsi }}</td>
                                <td>{{ $datail->kabupaten }}</td>
                                <td>{{ $datail->catatan }}</td>
                                <td><img src="{{ 'storage/app/publick/gambar/'. $datail->foto }}" width="100" height="100" alt=""></td>
                            </tr>
                        {{-- @endforeach --}}
                                            

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
    
@endsection

