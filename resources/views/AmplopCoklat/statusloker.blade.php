@extends('master')
@section('contents')
    <!-- Back to top button -->
    <div class="container">
        <div class="page-banner home-banner mb-5">
            <div id="banner" class="p-5">
                <div class="row py-2">
                    <div class="col-md-4">
                        <img class="rounded img-fluid w-100 " src="/images/profile.png">
                    </div>
                    <div class="col-md-8">
                        <ul type="none" class="my-auto">
                            <li>
                                <b>Nama</b>
                                :
                                {{$user->pelamar->nama}}
                            </li>
                            <li><b>Pilihan Pekerjaan</b> : {{$user->pelamar->getLoker($idLoker)->first()->pekerjaan}}</li>
                            <li><b>Perusahaan</b> :  {{$user->pelamar->getLoker($idLoker)->first()->perusahaan->nama}}</li>
                            <li><b>Waktu Pendaftaran</b> : {{$user->pelamar->getLoker($idLoker)->first()->pivot->created_at}}</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <div class="d-flex flex-column bd-highlight mb-3">
            <h3>Progres Pendaftaran:</h3>
            <div class="border rounded-lg p-5">
                <div class="progress" style="height: 20px;">
                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column bd-highlight mb-3">
            <h3>Keterangan:</h3>
            <div class="border rounded-lg p-5">
                <ul class="mb-0">
                    <li>{{$user->pelamar->getLoker($idLoker)->first()->pivot->status}}</li>
                </ul>
            </div>
        </div>
    </div>
    
@endsection

    