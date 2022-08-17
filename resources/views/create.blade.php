@extends('layouts.utama')

@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Organisani/Tambah</h1>
        <a href="organisasi" class="d-none d-sm-inline-block btn btn-primary shadow-sm"><i class="fa fa-arrow-circle-left mr-2" aria-hidden="true"></i>Kembali</a>
    </div>

    <!-- Content Row -->
    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">                                    
                    <div class="col-lg">
                        <div class="p-5">                                            
                            <form class="user" action="{{ url('organisasi/store') }}" method="POST" enctype="multipart/form-data"
                           @csrf
                           <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="organisasi">Nama Organisasi</label>
                                            <input type="text" class="form-control " id="organisasi" name="nama">

                                            @if($errors->has('nama'))
                                            <div class="text-danger">
                                                {{ $errors->first('nama')}}
                                            </div>
                                             @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat-web">Alamat Website</label>
                                            <input type="text" class="form-control " id="alamat-web" name="alamat_web">
                                            @if($errors->has('alamat_web'))
                                            <div class="text-danger">
                                                {{ $errors->first('alamat_web')}}
                                            </div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="catatan">Catatan</label>
                                            <textarea class="form-control " id="catatan" rows="5" name="catatan"></textarea>
                                            @if($errors->has('catatan'))
                                            <div class="text-danger">
                                                {{ $errors->first('catatan')}}
                                            </div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <img src="img/undraw_profile.svg" alt="" width="100">
                                        </div>
                                        <div class="form-group">
                                            <label for="gambar">Pilih Gambar</label>
                                            <input type="file" class="form-control-file " id="gambar" name="foto">
                                          </div>
                                          @if($errors->has('foto'))
                                          <div class="text-danger">
                                              {{ $errors->first('foto')}}
                                          </div>
                                         @endif
                                        
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="provinsi">Provinsi</label>
                                            <select class="form-control" id="provinsi" name="provinsi">
                                                <option>Pilih Provinsi</option>
                                              <option value="papua" {{ old('provinsi') == 'papua' ? 'selected' : '' }}>Papua</option>
                                              <option value="papua-barat" {{ old('provinsi') == 'papua-barat' ? 'selected' : '' }}>Papua Barat</option>
                                            </select>

                                            @if($errors->has('provinsi'))
                                            <div class="text-danger">
                                                {{ $errors->first('provinsi')}}
                                            </div>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label for="kabupaten">Kabupaten</label>
                                            <select class="form-control" id="kabupaten" name="kabupaten">
                                               <option >Pilih Kabupaten</option>
                                              <option value="jayapura" {{ old('kabupaten') == 'jayapura' ? 'selected' : '' }}>Kabupaten Jayapura</option>                                             
                                              <option  value="biak" {{ old('kabupaten') == 'biak' ? 'selected' : '' }}>Kabupaten Biak</option>
                                              <option  value="serui" {{ old('kabupaten') == 'serui' ? 'selected' : '' }}>Kabupaten Serui</option>
                                              <option  value="nabire" {{ old('kabupaten') == 'nabira' ? 'selected' : '' }}>Kabupaten Nabire</option>
                                             
                                            </select>
                                            @if($errors->has('kabupaten'))
                                            <div class="text-danger">
                                                {{ $errors->first('kabupaten')}}
                                            </div>
                                            @endif

                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>
                                            @if($errors->has('alamat'))
                                            <div class="text-danger">
                                                {{ $errors->first('alamat')}}
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
