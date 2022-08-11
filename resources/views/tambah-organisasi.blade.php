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
                            <form class="user" action="{{ url('organisasi') }}" method="POST"
                            {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="organisasi">Nama Organisasi</label>
                                            <input type="text" class="form-control" id="organisasi" name="nama">
                                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat-web">Alamat Website</label>
                                            <input type="text" class="form-control" id="alamat-web" name="alamat-web">
                                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                        </div>
                                        <div class="form-group">
                                            <label for="catatan">Catatan</label>
                                            <textarea class="form-control" id="catatan" rows="5" name="catatan"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <img src="img/undraw_profile.svg" alt="" width="100">
                                        </div>
                                        <div class="form-group">
                                            <label for="gambar">Pilih Gambar</label>
                                            <input type="file" class="form-control-file" id="gambar" name="gambar">
                                          </div>
                                        
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Provinsi</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                              <option name="papua">Papua</option>
                                              <option name="papua-barat">Papua Barat</option>
                                            </select>
                                          </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Kabupaten</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                              <option name="kabupaten-jayapura">Kabupaten Jayapura</option>
                                              <option  name="kabupaten-kerom">Kabupaten Kerom</option>
                                              <option  name="kabupaten-biak">Kabupaten Biak</option>
                                              <option  name="kabupaten-serui">Kabupaten Serui</option>
                                              <option  name="kabupaten-nabire">Kabupaten Nabire</option>
                                             
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>
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