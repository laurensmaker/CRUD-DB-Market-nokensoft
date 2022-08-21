@extends('layouts.utama')

@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Distrik</h1>
        <a href="{{ url('kelurahan') }}" class="d-none d-sm-inline-block btn btn-primary shadow-sm"><i
            class="fa fa-arrow-circle-left  mr-2" aria-hidden="true"></i>Kembali</a>
    </div>

    <!-- Content Row -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
                    <thead">
                        <tr class="text-center">
                            <th>No</th>
                            <th>Distrik</th>
                            <th>Kode Pos</th>                          
                        </tr>
                        </thead>
                        <tbody>
                            @php
                                $nomor = 1;
                            @endphp
                            <tr>
                                <td>{{ $nomor++ }}</td>
                                <td>{{ $kelurahan->nama }}</td>
                                <td>{{ $kelurahan->kode_pos }}</td>
                            </tr>
                          
                        </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
    
@endsection