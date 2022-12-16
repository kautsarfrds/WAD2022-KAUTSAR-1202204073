@extends('header')
@section('content')
    <section id="list" style="padding-top: 50px; padding-bottom: 50px;">
        <div class="container">
            <div>
                <h1
                    style="font-family: 'Raleway'; font-style: normal; font-weight: 900; font-size: 32px; line-height: 38px;">
                    My Show Room</h1>
                <p
                    style="font-family: 'Raleway'; font-style: normal; font-weight: 400; font-size: 16px; line-height: 19px; color: #757575; margin-top: 20px;">
                    List Show Room Kautsar_1202204073</p>
                <div class="d-flex gap-5"></div>
            </div>
        </div>
        @foreach ($cars as $car)
            <div class="col flex px-6 py-4 mx-auto">
                <div class="card " style="width: 18rem;">
                    <img src="/image/{{$car->image}}" alt="gambar">  
                        <div class="card-body">
                            <h5 class="card-title">{{$car->name}}</h5>
                            <p class="card-text">{{$car->description}}</p>
                            <div class="d-flex justify-content-start">
                                <div class="row g-2">
                                    <div class="col">
                                        <a href="/product/{{$car-> id}}" class="btn btn-primary rounded-4">Detail</a>
                                    </div>
                                    <div class="col">
                                        <form action="/product/{{ $car-> id }}" method ="POST" style="display: inline-block">
                                            @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger rounded-4">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        @endforeach
    </section>
    <footer style="padding-bottom: 50px;">
        <div class="container">
            <p
                style="font-family: 'Raleway'; font-style: normal; font-weight: 700; font-size: 16px; line-height: 19px; color: #757575;">
                Jumlah Mobil :</p>
        </div>
    </footer>
    @endsection