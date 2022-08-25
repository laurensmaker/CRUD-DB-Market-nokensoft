@extends('layouts.utama')

@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Provinsi Papua</h1>
        <a href="{{ url('provinsi') }}" class="d-none d-sm-inline-block btn btn-primary shadow-sm"><i
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
                            <th>Kabupaten</th>
                            <th>Distrik</th>
                            <th>Kelurahan</th>                          
                        </tr>
                        </thead>
                        <tbody>
                           
                            <tr>
                                <td>1</td>
                                <td>Biak Numfor</td>
                                <td>Biak Selatan</td>
                                <td>Samofa</td>
                            </tr>
                          
                        </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
    
@endsection