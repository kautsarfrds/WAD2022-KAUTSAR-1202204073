@extends('header')
@section('content')

   <section id="home">
        <div class="container">
            <div style="margin-top: 200px;" class="d-flex gap-5 justify-content-center align-items-center">
                <div>
                    <h1
                        style="font-family: 'Raleway'; font-style: normal; font-weight: 800; font-size: 56px; line-height: 66px; letter-spacing: 1.2px; text-transform: capitalize;">
                        Selamat Datang Di<br /> Show Room Kautsar</h1>
                    <p style="font-style: normal; font-weight: 400; font-size: 20px; line-height: 23px; letter-spacing: 0.2px;"
                        class="mt-3">At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis<br /> cursus
                        vestibulum, facilisi ac, sed faucibus.</p>
                        @auth
                        <a href="/listcar"
                        style="display: flex; flex-direction: row; align-items: center; justify-content: center; gap: 10px; width: 137px; height: 51px; background: #3563e9; border-radius: 5px; border: none; color: white; margin-top: 40px; text-decoration: none;"
                        class="button btn-primary">MyCar</a>
                
                        @endauth

                        @guest
                        @endguest
                        <div class="d-flex align-items-center gap-5 mt-5">
                        <img src="img/logo-ead.png" alt="logo" style="width:100px;">
                        <p style="margin-top: 20px; font-size:14px;">Kautsar_1202204073</p>
                    </div>
                </div>
                <img src="/img/hero.png" alt="hero">
            </div>
        </div>
    </section>
@endsection