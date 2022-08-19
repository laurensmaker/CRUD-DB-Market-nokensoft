@extends('layouts.utama')

@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kabupaten/Tambah</h1>
        <a href="{{ url('kabupaten') }}" class="d-none d-sm-inline-block btn btn-primary shadow-sm"><i class="fa fa-arrow-circle-left mr-2" aria-hidden="true"></i>Kembali</a>
    </div>

    <!-- Content Row -->
    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">                                    
                    <div class="col-lg">
                        <div class="p-5">                                            
                            <form class="user" action="{{ url('store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <div class="row">
                                    <div class="col-lg">
                                        <div class="form-group">
                                            <label for="Kabupaten">Kabupaten/Kota</label>
                                            <input type="text" class="form-control" id="Kabupaten" name="nama">
                                            @if($errors->has('nama'))
                                            <div class="text-danger">
                                                {{ $errors->first('nama')}}
                                            </div>
                                            @endif
                                           
                                        </div>                                                        
                                        <div class="form-group">
                                            <label for="kode-pos">Kode Pos</label>
                                            <input type="text" class="form-control" id="provinsi" name="kode_pos">
                                            @if($errors->has('kode_pos'))
                                            <div class="text-danger">
                                                {{ $errors->first('kode_pos')}}
                                            </div>
                                            @endif
                                           
                                        </div>                                                        
                                        
                                    </div>                                                    
                                </div>                                               
                                
                                <hr>
                                <button type="submit" class="btn btn-info"><i class="fa fa-plus mr-2" aria-hidden="true"></i>Tambah</button>
                                <button type="reset" class="btn btn-outline-dark"><i class="fa fa-undo mr-2" aria-hidden="true"></i>Batal</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
    
@endsection