@extends('layouts.utama')

@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kelurahan</h1>
        <a href="tambah-kelurahan" class="d-none d-sm-inline-block btn btn-primary shadow-sm"><i
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
                            <tr>
                                <td class="text-center">1</td>
                                <td>Sentani Kota<d>                                               
                                <td>55101<d>
                                <td class="text-center">
                                    <a href="#" class="btn btn-info btn-circle mr-3 ">
                                        <i class="fa fa-magic" aria-hidden="true"></i>
                                    </a>

                                    <a href="#" class="btn btn-primary btn-circle mr-3">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>

                                    <a href="#" class="btn btn-danger btn-circle">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">2</td>
                                <td>Samofa</td>
                                <td>55102</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-info btn-circle mr-3">
                                        <i class="fa fa-magic" aria-hidden="true"></i>
                                    </a>

                                    <a href="#" class="btn btn-primary btn-circle mr-3">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>

                                    <a href="#" class="btn btn-danger btn-circle">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td>Sentani</td>
                                <td>55103</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-info btn-circle mr-3">
                                        <i class="fa fa-magic" aria-hidden="true"></i>
                                    </a>

                                    <a href="#" class="btn btn-primary btn-circle mr-3">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>

                                    <a href="#" class="btn btn-danger btn-circle">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">4</td>
                                <td>Serui Kota</td>
                                <td>55104</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-info btn-circle mr-3">
                                        <i class="fa fa-magic" aria-hidden="true"></i>
                                    </a>

                                    <a href="#" class="btn btn-primary btn-circle mr-3">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>

                                    <a href="#" class="btn btn-danger btn-circle">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">5</td>
                                <td>Jayawijaya</td>
                                <td>55105</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-info btn-circle mr-3">
                                        <i class="fa fa-magic" aria-hidden="true"></i>
                                    </a>

                                    <a href="#" class="btn btn-primary btn-circle mr-3">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>

                                    <a href="#" class="btn btn-danger btn-circle">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">6</td>
                                <td>Mamberamo Raya</td>
                                <td>55106</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-info btn-circle mr-3">
                                        <i class="fa fa-magic" aria-hidden="true"></i>
                                    </a>

                                    <a href="#" class="btn btn-primary btn-circle mr-3">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>

                                    <a href="#" class="btn btn-danger btn-circle">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
    
@endsection