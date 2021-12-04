@extends('master')
@section('contents')
    <div class="container mt-3">
        <div class="page-banner1 p-md-5">
            <div class="container-md">
                <div class="row border-bottom border-secondary py-2">
                    <div class="col-3">
                        <img src="{{asset('images/profile.png')}}" class="img-fluid w-75">
                    </div>
                    <div class="col-3">
                        <p>Nama</p>
                        <p>Bidang Pekerjaan</p>
                        <p>Perusahaan</p>
                        <p>Waktu Pendaftaran</p>    
                    </div>
                    <div class="col-6">
                        <p>: Budi Budidi</p>
                        <p>: UI Designer</p>
                        <p>: Google LLC</p>
                        <p>: 22 November 2021</p>
                    </div>
                </div>
                <div class="pt-5 px-5">
                    <p><img src="{{asset('images/document.png')}}" alt=""> Resume.pdf</p>
                    <p><img src="{{asset('images/document.png')}}" alt=""> CV.pdf</p>
                    <p><img src="{{asset('images/document.png')}}" alt=""> TranskripNilai.pdf</p>
                </div>
            </div>
        </div>

        <button class="btn btn-primary float-right ">Berkas Ditolak</button>
        <button class="btn btn-primary float-right mr-1">Berkas Diterima</button>
    </div>
@endsection