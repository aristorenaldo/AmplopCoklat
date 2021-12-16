@extends('master')
@section('contents')
    <div class="container mt-5">
        <h2 class="mx-3"><strong>Selangkah lagi untuk mendaftar pekerjaan!</strong></h2>
        <h4 class="mx-3">Isi data diri Anda untuk mendaftar pekerjaan</h4>

        <div class="container-fluid mt-5 my-3">
            <div class="row">
                <div class="col-md-6">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-2">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" id="nama" value="{{$user->pelamar->nama}}">
                        </div>
                        <div class="form-group mb-2">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" name="alamat" id="alamat" value="{{$user->pelamar->alamat}}">
                        </div>
                        {{-- <div class="form-group mb-2">
                            <label for="ttl">Tempat dan Tanggal Lahir</label>
                            <input type="date" class="form-control" name="ttl" id="tll">
                        </div> --}}
                        <div class="form-group mb-2">
                            <label for="jenis-kelamin">Jenis Kelamin</label>
                            <select autocomplete="off" class="form-control" id="jenis-kelamin" name="jenis-kelamin"> 
                                <option {{ ($user->pelamar->jenis_kelamin == 0) ? 'selected' : '' }} value="0">Pria</option>
                                <option {{ ($user->pelamar->jenis_kelamin == 1) ? 'selected' : '' }} value="1">Wanita</option>
                            </select>
                        </div>
                        <div class="form-group mb-2">
                            <label for="jenis-disabilitas">Jenis Disabilitas</label>
                            <select autocomplete="off" class="form-control form-select" id="jenis-disabilitas" name="jenis-disabilitas">
                                @foreach ($jenisDifabel as $difabel)
                                <option    {{ ($user->pelamar->jenis_disabilitas == $difabel->id) ? 'selected' : '' }} value="{{$difabel->id}}">{{$difabel->jenis}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mt-4 mb-2">
                            <label for="resume">Resume</label>
                            <input type="file" class="form-control-file" id="resume" name="resume">
                        </div>
                        <div class="form-group mt-4 mb-2">
                            <label for="tambahan">Dokumen Pendukung</label>
                            <input type="file" class="form-control-file" id="tambahan" name="tambahan">
                        </div>
                        <button type="submit" class="btn btn-primary mt-4 px-5">Daftar Pekerjaan</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid  w-100" src="{{ asset('images/Calendar_Monochromatic.png') }}" alt="">
                </div>
            </div>    
        </div>
    </div>

    <div class="page-section3">
        <footer class="page-footer bg-image" style="background-image: url(../assets/img/world_pattern.svg);"> 
        <div class="row">
            <div class="col align-items-start">
            <div class="contactfooter">
                <h5 id="kontak">Contact Us</h5>
                <p class="ketkontak">Jl.Soekarno Hatta No. 1A, Jakarta</p>
                <p class="ketkontak">+00 1122 3344 5566</p>
                <p class="ketkontak">amplopc@gmail.com</p>
            </div> 
            </div>  
            <div class="vl"></div>
            <div class="col align-items-end">
            <h3 id="footersosmed">Visit Our Social Media</h3>
            <div class="sosmed">
                <a href="https://www.facebook.com">
                <img src="/images/facebook.png" alt="Facebook" width="40" height="40">
                </a>
                <a href="https://www.instagram.com">
                <img src="/images/instagram.png" alt="Instagram" width="40" height="40">
                </a>
                <a href="https://www.twitter.com">
                <img src="/images/twitter.png" alt="Twitter" width="40" height="40">
                </a>
                <a href="https://www.youtube.com">
                <img src="/images/youtube.png" alt="Youtube" width="40" height="40">
                </a>
            </div>
            </div>
        </div>
        <div class="copyright text-center">© 2021, Amplop Coklat</div>
        </footer>
    </div>
@endsection