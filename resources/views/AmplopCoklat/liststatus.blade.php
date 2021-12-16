@extends('master')
@section('contents')
{{-- @dd($user->pelamar->loker->first()->pekerjaan) --}}
<div class="container">
    <h2>Status Pendaftaran</h2>
@foreach ($user->pelamar->loker as $loker)

    <div class="page-banner home-banner py-5 px-3">
        <div id="banner" class="row align-items-center flex-wrap-reverse">
            <div class="col-md-12 py-2">
                <div class="d-flex align-items-center">
                    <img id="logo-google" src="{{asset($loker->perusahaan->logo)}}">
                    <ul type="none">
                        <li>
                            <h4><strong>{{$loker->pekerjaan}}</strong></h4>
                        </li>
                        <li>{{$loker->lokasi}}</li>
                    </ul>
                </div>
                <div class="mt-5 text-right">
                    <button type="button" class="btn btn-primary mt-4"  onclick="location.href='{{route('statusloker',['idLoker'=>$loker->id]) }}'">Details</button>
                </div>
            </div>
        </div>
    </div>

@endforeach
</div>
@endsection