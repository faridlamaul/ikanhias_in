@extends('layouts.template')
<link rel="stylesheet" href="css/customer.css">
@section('content')
<div class="container dashboard-c mt-4">
    <h2>Pengaturan Akun</h2>
    <div class="row rounded bg-white mt-3 mb-5">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">Tsania</span><span class="text-black-50">Lihat Profil</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Edit Informasi Akun</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Nama</label><input type="text" class="form-control" placeholder="Nama" value=""></div>
                    <div class="col-md-6"><label class="labels">Username</label><input type="text" class="form-control" value="" placeholder="Username"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Nomor Telepon</label><input type="text" class="form-control" placeholder="Nomor Telepon" value=""></div>
                    <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" placeholder="Email" value=""></div>
                    <div class="col-md-12"><label class="labels">Alamat</label><input type="text" class="form-control" placeholder="Alamat" value=""></div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
            </div>
        </div>
        <div class="col-md-3 p-3 py-5">
            <h4>Atur Ulang Password</h4>
            <div class="col-md-12"><label class="labels">Password Baru</label><input type="text" class="form-control" value=""></div>
            <div class="col-md-12"><label class="labels">Konfirmasi Password Baru</label><input type="text" class="form-control" value=""></div>
        </div>
    </div>
</div>
</div>
</div>
@endsection