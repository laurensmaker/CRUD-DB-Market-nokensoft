@extends('layouts.utama')

@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Pengguna</h1>
        <a href="{{ url('pengguna') }}" class="d-none d-sm-inline-block btn btn-primary shadow-sm"><i class="fa fa-arrow-circle-left mr-2" aria-hidden="true"></i>Kembali</a>
    </div>

    <!-- Content Row -->
    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">                                    
                    <div class="col-lg">
                        <div class="p-5">                                            
                            <form class="user" action="{{ url('update', $data->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="nama">Nama Lengkap</label>
                                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $data->nama }}">
                                            @if($errors->has('nama'))
                                            <div class="text-danger">
                                                {{ $errors->first('nama')}}
                                            </div>
                                             @endif
                                           
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" value="{{ $data->email }}">
                                            @if($errors->has('email'))
                                            <div class="text-danger">
                                                {{ $errors->first('email')}}
                                            </div>
                                             @endif
                                        
                                        </div>                                                       
                                        <div class="form-group">
                                            <label for="no-hp">No HP</label>
                                            <input type="text" class="form-control" id="no-hp" name="no_hp" value="{{ $data->no_hp }}">
                                            @if($errors->has('no_hp'))
                                            <div class="text-danger">
                                                {{ $errors->first('no_hp')}}
                                            </div>
                                             @endif
                                           
                                        </div>                                                    
                                                                                              
                                        
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <img src="img/undraw_profile.svg" alt="" width="100">
                                        </div>
                                        <div class="form-group">
                                            <label for="foto">Pilih Gambar</label>
                                            <input type="file" class="form-control-file" id="foto" name="foto">
                                          </div>
                                          @if($errors->has('foto'))
                                          <div class="text-danger">
                                              {{ $errors->first('foto')}}
                                          </div>
                                           @endif
                                                                                             
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