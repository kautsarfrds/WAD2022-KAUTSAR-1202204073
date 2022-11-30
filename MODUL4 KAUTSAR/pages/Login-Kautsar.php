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
            <img src="../asset/images/Ford.png" style="position: absolute; top: 0; left: 0;">
        </div>
        <div class="col-md-6">
            <section id="form">
                <div class="container" style="margin-left: 100px; margin-top: 200px;">
                    <h1
                        style="font-family: 'Raleway'; font-style: normal; font-weight: 700; font-size: 32px; line-height: 38px;">
                        Login</h1>
                    <form style="margin-top: 10px;" action="../config/login.php" method="POST"
                        enctype="multipart/form-data">
                        <div>
                            <label
                                style="display: block; font-size: 20px; line-height: 24px; letter-spacing: 1.2px; margin-top: 15px;"
                                for="email">Email</label>
                            <input
                                style="display: block; width: 500px; height: 40px; border: 1px solid #757575; border-radius: 8px; margin-top: 15px; padding-left: 10px; padding-right: 10px;"
                                type="email" id="email" name="mail">
                        </div>
                        <div>
                            <label
                                style="display: block; font-size: 20px; line-height: 24px; letter-spacing: 1.2px; margin-top: 10px;"
                                for=" ">Password</label>
                            <input
                                style="display: block; width: 500px; height: 40px; border: 1px solid #757575; border-radius: 8px; margin-top: 15px; padding-left: 10px; padding-right: 10px;"
                                type="password" id=" " name="password">
                        </div>
                        <div>
                            <input type="checkbox" name='remember'>
                            <label style="margin-top: 20px;">Remember me</label>
                        </div>
                        <button type="Daftar" class="btn btn-primary"
                            style="margin-top: 20px; margin-bottom: 10px;">Login</button>
                        <p style="font-style: normal; font-weight: 400; font-size: 16px; line-height: 19px;">
                            Anda belum punya akun? <a href="../pages/Register-Kautsar.php">Daftar</a> </p>
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