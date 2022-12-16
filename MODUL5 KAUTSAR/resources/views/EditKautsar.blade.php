@extends('header')
@section('content')
    <section id='detail' style="padding-top: 50px; padding-bottom: 50px;">
        <div class="container">
                <h1 style='font-family: Raleway; font-style: normal; font-weight: 700; font-size: 32px; line-height: 38px;'></h1>
                <p style='font-family: Raleway; font-style: normal; font-weight: 400; font-size: 16px; line-height: 19px; color: #757575;'></p>
                <div class='d-flex justify-content-center align-items-start gap-5 mt-5'>
                  <img src="/image/{{$car->image}}" alt="gambar">

                  <form action="/product/{{$car-> id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="user_id" value="{{$car->user_id}}">
                        <div class="mb-3">
                            <label class="form-label">Nama mobil</label>
                            <input type="text" name="nama_mobil" class="form-control" value="{{$car->name}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama pemilik</label>
                            <input type="text" name="pemilik_mobil" class="form-control" value="{{$car->owner}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Merk</label>
                            <input type="text" name="merk_mobil" class="form-control" value="{{$car->brand}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal</label>
                            <input type="datetime-local" name="tanggal_beli" class="form-control" value="{{$car->purchase_date}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Deskripsi</label>
                            <textarea type="text" name="deskripsi" class="form-control">{{$car->description}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Foto</label>
                            <input type="file" name="img_path" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <div class="form-check">
                                <input type="radio"  id="option1" name="status" value="Lunas"  {{ ($car->status=="Lunas")? "checked" : "" }} >Lunas</label>
                                <input type="radio" id="option2" name="status" value="Belum Lunas" {{ ($car->status=="Belum Lunas")? "checked" : "" }} >Belum Lunas</label>
                            </div>
                        </div>
                    <input type="submit" class="btn btn-primary" name="edit" id="toastbtn" value="Simpan">
                </form>
                </div>
        </div>
    @endsection