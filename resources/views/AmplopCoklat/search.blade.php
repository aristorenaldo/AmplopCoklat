@extends('master')
@section('contents')
    <div class="container">
        <div class="page-banner home-banner">
            <div id="banner" class="row align-items-center flex-wrap-reverse h-100">
                <div class="col-md-6 py-5 wow fadeInLeft">
                    <h1 class="mb-4">
                        Halo, {{$name}}              
                    </h1>
                    <p class="tagline">Disabilitas Bisa Kerja</p>
                    <form action="{{route('search')}}" method="get">
                        <div class="search">
                            <input type="text" class="searchTerm" name="term" placeholder="Cari Lowongan Kerja">
                            <span>
                                <button type="submit" class="btn btn-sm btn-primary-outline p-0" value="Submit">
                                <img class="logo-search" src="/images/searchicon.png" alt="Logo-Search" width = "20" height = "20">
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
                <div class="col-md-62 py-5 wow zoomIn">
                    <div class="img-fluid mt-5">
                        <img src="images/homepic.png" alt="Gambar-Home" width="490" height="369">
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    @isset($loker)
    @foreach ($loker as $item)
    <div class="container">
        <div class="page-banner home-banner py-5 px-3">
            <div id="banner" class="row align-items-center flex-wrap-reverse">
                <div class="col-md-12 py-2">
                    <div class="d-flex align-items-center">
                        <img id="logo-google" src="{{asset($item->perusahaan->logo)}}">
                        <ul type="none">
                            <li>
                                <h4><strong>{{$item->pekerjaan}}</strong></h4>
                            </li>
                            <li>{{$item->perusahaan->nama}}</li>
                            <div class="mt-3">
                                <img id="logo-place" src="/images/place.png">
                                <span class="text-secondary-bottom ml-1">{{$item->lokasi}}</span>
                            </div>
                            <div class="rounded-lg bg-white px-1 w-60">
                                <p class="mt-3 text-center">Tuna Daksa</p>
                            </div>
                        </ul>
                    </div>
                    <p class="float-right"> Tutup: <b>{{$item->tgl_tutup}}</b></p>
                    <div class="mt-5 text-right">
                        <button type="button" class="btn btn-primary mt-4">Details</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @endisset
    

   
@endsection
