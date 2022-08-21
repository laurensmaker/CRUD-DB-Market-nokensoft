@extends('layouts.utama')

@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kelurahan</h1>
        <a href="{{ url('kelurahan/tambah') }}" class="d-none d-sm-inline-block btn btn-primary shadow-sm"><i
            class="fa fa-plus mr-2" aria-hidden="true"></i>Tambah</a>
    </div>

    <!-- Content Row -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
                    <thead">
                        <tr class="text-center">
                            <th>No</th>
                            <th>Kelurahan</th>
                            <th>Kode Pos</th>
                            <th>Opsi</th>
                        </tr>
                        </thead>
                        <tbody>
                            @php
                                $nomor = 1;
                            @endphp
                            @forelse ($kelurahan as $item)
                                <tr>
                                    <td>{{ $nomor++ }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->kode_pos }}</td>
                                    <td class="text-center">
                                        <a href="{{ url('kelurahan/edit',$item->id) }}" class="btn btn-info btn-circle mr-3 ">
                                            <i class="fa fa-magic" aria-hidden="true"></i>
                                        </a>
    
                                        <a href="{{ url('kelurahan/detail',$item->id) }}" class="btn btn-primary btn-circle mr-3">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </a>
    
                                        <a href="{{ url('hapus',$item->id) }}" class="btn btn-danger btn-circle">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <div class="alert alert-info">
                                    Data Kelurahan belum tersedia
                                </div>
                            @endforelse
                        </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
    
@endsection