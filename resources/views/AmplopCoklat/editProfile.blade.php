
@extends('master')
@section('contents')
<link rel="stylesheet" href="css/editProfile.css">
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-4 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">Edogaru</span><span> </span></div>
            </div>
            <div class="col-md-8 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                   
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Name</label><input type="text" class="form-control" placeholder="nama lengkap" value=""></div>
                        <div class="col-md-12"><label class="labels">Nomor Telepon</label><input type="text" class="form-control" placeholder="nomor telepon" value=""></div>
                        <div class="col-md-12"><label class="labels">Tempat, tanggal lahir</label><input type="text" class="form-control" placeholder="Masukkan Tempat, tanggal lahir" value=""></div>
                        <div class="col-md-12"><label class="labels">Alamat</label><input type="text" class="form-control" placeholder="Alamat lengkap" value=""></div>
                        <div class="col-md-12"><label class="labels">Status</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                        <div class="col-md-12"><label class="labels">Jenis Disabilitas</label>
                            <select class="form-select col-md-12" aria-label="Default select example">
                            <option selected>Jenis Disabilitas</option>
                            <option value="1">Tuna Daksa</option>
                            <option value="2">Tuna Rungu</option>
                            <option value="3">Tuna Wicara</option>
                            <option value="4">Autisme</option>
                          </select>
                        </div>
                       
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
                </div>
            </div>
            {{-- <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                    <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                    <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
                </div>
            </div> --}}
        </div>
    </div>
@endsection