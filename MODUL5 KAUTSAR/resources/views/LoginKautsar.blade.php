<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="row">
        <div class="col-md-6">
            <img src="/img/ford.png" style="position: absolute; top: 0; left: 0;">
        </div>
        <div class="col-md-6">
            <section id="form">
                <div class="container" style="margin-left: 100px; margin-top: 200px;">
                        <form action="{{ route('LoginKautsar.action') }}" method="POST" class="p-5 vh-150" style="margin-right: 100px;" enctype="multipart/form-data">
                            <input type="hidden" name="id_mobil" >
                            @csrf
                            <h1>Login</h1><br>
                                <div class="mb-3 ">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" value="" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Kata Sandi</label>
                                    <input type="password" name="password" class="form-control" value="" required>
                                </div>
                                <div class="form-check ">
                                    <input class="form-check-input" value="rememberme" id="remember" type="checkbox" >
                                    <label class="form-check-label" for="rememberme">
                                        Remember Me 
                                    </label>
                                </div>
                                <br>
                                <button type="submit" name="submit" class="btn btn-primary">Login</button>
                            <br>
                            Anda belum punya akun? <a href="/RegisterKautsar">Daftar</a>
                        </form>
                </div>
            </section>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>