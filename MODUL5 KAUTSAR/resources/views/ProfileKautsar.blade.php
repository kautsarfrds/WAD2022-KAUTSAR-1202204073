@extends('header')
@section('content')

<body>
    <section id="insert">
        <div class="container insert">

            <h1 class="titleInsert" align="center">Profile</h1>
            <form action="{{ route('profile_action') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="">
                <div class="row mb-3">
                    <label for="inputEmail3" name="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10" name="email" disabled>
                        {{ Auth::user()->email }} 
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" value="{{ Auth::user()->nama }}" >
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="No HP" class="col-sm-2 col-form-label">No Handphone</label>
                    <div class="col-sm-10">
                    <input type="text" name="no_hp" class="form-control" value="{{ Auth::user()->no_hp }}" >
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="Kata Sandi" class="col-sm-2 col-form-label">Kata Sandi</label>
                    <div class="col-sm-10">
                    <input type="password" name="password_baru" class="form-control"  value="">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="Konfirmasi Kata Sandi" class="col-sm-2 col-form-label">Konfirmasi Kata Sandi</label>
                    <div class="col-sm-10">
                    <input type="password" name="password_baru_confirmation" class="form-control"  value="">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" name="update">Update</button>
            </form>
        </div>
    </section>
    <div class="d-flex align-items-center gap-5 mt-5" style="margin-top:50px ">
        <img src="/img/logo-ead.png" alt="logo" style="width:100px;">
        <p style="margin-top: 20px; font-size:14px;">Kautsar_1202204073</p>
    </div>
@endsection