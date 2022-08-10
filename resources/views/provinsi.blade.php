@extends('layouts.utama')

@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Provinsi</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
        <a href="tambah-provinsi" class="d-none d-sm-inline-block btn btn-primary shadow-sm"><i
                class="fa fa-plus mr-2" aria-hidden="true"></i>Tambah</a>

    </div>

    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card bg-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <a href="Provinsi-Papua-Barat.html">
                                <div class="font-weight-bold text-white text-uppercase mb-1">
                                    Provinsi-Papua-Barat</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card bg-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <a href="Provinsi-Papua.html">
                                <div class="font-weight-bold text-white text-uppercase mb-1">
                                    Provinsi Papua</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
    
@endsection