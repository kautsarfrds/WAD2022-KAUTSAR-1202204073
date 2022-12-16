<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>
</head>

<body>
    @auth
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container">
            <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNavAltMarkup">
                <div class="navbar-nav gap-3">
                    <a class="nav-link" style="color: white;" href="/">Home</a>
                    <a class="nav-link" style="color: white;" href="/product">MyCar</a>
                    <a class="navbar-expand-lg" href="/product/create"
                        style="background-color: white; color:blue; border-radius: 5px; text-decoration: none; width: 110px; height: 35px; display:flex; justify-content:center; align-items:center; font-weight:500;">Add
                        Car</a>
                </div>
                <div class="collapse navbar-collapse d-flex justify-content-between">

                </div>
                <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{ Auth::user()->nama }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('profile') }}">Profile</a></li>
                        <li><a class="dropdown-item" href="{{ route ('logout')}}">Log Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
@endauth

@guest
<nav class="navbar navbar-expand-lg bg-primary">
    <div class="container">
        <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNavAltMarkup">
            <div class="navbar-nav gap-3">
                <a class="nav-link" style="color: white;" href="#home">Home</a>
                <a class="navbar-expand-lg" href="/LoginKautsar"
                    style="background-color: white; color:blue; border-radius: 5px; text-decoration: none; width: 110px; height: 35px; display:flex; justify-content:center; align-items:center; font-weight:500;">Login</a>
            </div>
            <div class="collapse navbar-collapse d-flex justify-content-between">

            </div>
        </div>
    </div>
</nav>
@endguest
    @yield('content')

</body>
</html>