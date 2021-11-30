@extends('master')
@section('contents')
    <div class="container mt-5">
        <h2><strong>Selangkah lagi untuk mendaftar pekerjaan!</strong></h2>
        <h3>Isi data diri Anda untuk mendaftar pekerjaan</h3>

        <div class="container-fluid my-3">
            <div class="row">
                <div class="col-md-6">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-2">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" id="nama">
                        </div>
                        <div class="form-group mb-2">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" name="alamat" id="alamat">
                        </div>
                        <div class="form-group mb-2">
                            <label for="ttl">Tempat dan Tanggal Lahir</label>
                            <input type="text" class="form-control" name="ttl" id="tll">
                        </div>
                        <div class="form-group mb-2">
                            <label for="jenis-kelamin">Jenis Kelamin</label>
                            <select class="form-control" id="jenis-kelamin" name="jenis-kelamin">
                                <option value="pria">Pria</option>
                                <option value="wanita">Wanita</option>
                            </select>
                        </div>
                        <div class="form-group mb-2">
                            <label for="jenis-disabilitas">Jenis Disabilitas</label>
                            <select type="text" class="form-control" id="jenis-disabilitas" name="jenis-disabilitas">
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        </div>
                        <div class="form-group mb-2">
                            <label for="resume">Resume</label>
                            <input type="file" class="form-control-file" id="resume" name="resume">
                        </div>
                        <div class="form-group mb-2">
                            <label for="tambahan">Dokumen Pendukung</label>
                            <input type="file" class="form-control-file" id="tambahan" name="tambahan">
                        </div>
                        <button type="submit" class="btn btn-primary mb-2 px-5">Daftar Pekerjaan</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid  w-100" src="{{ asset('images/Calendar_Monochromatic.png') }}" alt="">
                </div>
            </div>
            
        </div>
    </div>
@endsection