@extends('header')
@section('content')

    <section id='form' style="padding-top: 50px; padding-bottom: 50px;">
        <div class="container">
            <h1
                style="font-family: 'Raleway'; font-style: normal; font-weight: 700; font-size: 32px; line-height: 38px;">
                Tambah Mobil</h1>
            <p
                style="font-family: 'Raleway'; font-style: normal; font-weight: 400; font-size: 16px; line-height: 19px; color: #757575;">
                Tambah Mobil Baru Anda Ke List Show Room</p>
            <form style="margin-top: 50px;" action="/product" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <div class="mb-3">
                    <label class="form-label">Nama mobil</label>
                    <input type="text" name="nama_mobil" required class="form-control" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama pemilik</label>
                    <input type="text" name="pemilik_mobil" required class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Merk</label>
                    <input type="text" name="merk_mobil" required class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal</label>
                    <input type="datetime-local" name="tanggal_beli" required class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea type="textarea" name="deskripsi" required class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Foto</label>
                    <input type="file" name="img_path" required class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="lunas" name="status_pembayaran">
                        <label class="form-check-label"  for="flexRadioDefault1">
                            Lunas
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="belum lunas" name="status_pembayaran">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Belum lunas
                        </label>
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        @endsection