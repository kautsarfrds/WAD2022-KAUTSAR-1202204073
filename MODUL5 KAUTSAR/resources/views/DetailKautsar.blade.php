@extends('header')
@section('content')
    <section id='detail' style="padding-top: 50px; padding-bottom: 50px;">
        <div class="container">
                <h1 style='font-family: 'Raleway'; font-style: normal; font-weight: 700; font-size: 32px; line-height: 38px;'></h1>
                <p style='font-family: 'Raleway'; font-style: normal; font-weight: 400; font-size: 16px; line-height: 19px; color: #757575;'></p>
                <div class='d-flex justify-content-center align-items-start gap-5 mt-5'>
                  <img src="/image/{{$car->image}}" alt="gambar">
                  <form>
                  <div class="mb-3">
                      <label class="form-label">Nama mobil</label>
                      <input type="text" name="nama_mobil" class="form-control" value="{{$car->name}}" disabled>
                  </div>
                  <div class="mb-3">
                      <label class="form-label">Nama pemilik</label>
                      <input type="text" name="pemilik_mobil" class="form-control" disabled value="{{$car->owner}}">
                  </div>
                  <div class="mb-3">
                      <label class="form-label">Merk</label>
                      <input type="text" name="merk_mobil" class="form-control" disabled value="{{$car->brand}}">
                  </div>
                  <div class="mb-3">
                      <label class="form-label">Tanggal</label>
                      <input type="datetime-local" name="tanggal_beli" class="form-control" disabled value="{{$car->purchase_date}}">
                  </div>
                  <div class="mb-3">
                      <label class="form-label">Deskripsi</label>
                      <textarea type="textarea" name="deskripsi" class="form-control" disabled>{{$car->description}}</textarea>
                  </div>
                  <div class="mb-3">
                      <label class="form-label">Foto</label>
                      <input type="file" name="foto_mobil" class="form-control" value="{{$car->image}}"  disabled >
                  </div>
                  <div class="mb-3">
                      <label class="form-label">Status</label>
                      <div class="form-check">
                          <input class="form-check-input" name="status_pembayaran" type="radio" name="flexRadioDefault" disabled value="" >
                          <label class="form-check-label" for="flexRadioDefault1">{{$car->status}}
                          </label>
                      </div>
                  </div>
                  
                  <a href="/product/{{$car-> id}}/edit" class="btn btn-primary">Edit</a>
                  </form>
                </div>
        </div>
        @endsection