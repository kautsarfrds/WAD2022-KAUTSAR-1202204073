<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container">
            <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNavAltMarkup">
                <div class="navbar-nav gap-3">
                    <a class="nav-link" style="color: white;" href="#home">Home</a>
                    <a class="nav-link" style="color: white;" href="/listcar">MyCar</a>
                    <a class="navbar-expand-lg" href="/add"
                        style="background-color: white; color:blue; border-radius: 5px; text-decoration: none; width: 110px; height: 35px; display:flex; justify-content:center; align-items:center; font-weight:500;">Add
                        Car</a>
                </div>
                <div class="collapse navbar-collapse d-flex justify-content-between">

                </div>
                <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Nama
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/profile">Profile</a></li>
                        <li><a class="dropdown-item" href="/login">Log Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
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
                    <a href="/listcar"
                        style="display: flex; flex-direction: row; align-items: center; justify-content: center; gap: 10px; width: 137px; height: 51px; background: #3563e9; border-radius: 5px; border: none; color: white; margin-top: 40px; text-decoration: none;"
                        class="button btn-primary">MyCar</a>
                    <div class="d-flex align-items-center gap-5 mt-5">
                        <img src="img/logo-ead.png" alt="logo" style="width:100px;">
                        <p style="margin-top: 20px; font-size:14px;">Kautsar_1202204073</p>
                    </div>
                </div>
                <img src="/img/hero.png" alt="hero">
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>