<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Car</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav gap-3">
                    <a class="nav-link" style="color: #e0e0e0; font-weight: 600;" href="index.php">Home</a>
                    <a class="nav-link" style="color: white;" href="#">MyCar</a>
                </div>
            </div>
        </div>
    </nav>
    <section id='detail' style="padding-top: 50px; padding-bottom: 50px;">
        <div class="container">
                <h1 style='font-family: 'Raleway'; font-style: normal; font-weight: 700; font-size: 32px; line-height: 38px;'></h1>
                <p style='font-family: 'Raleway'; font-style: normal; font-weight: 400; font-size: 16px; line-height: 19px; color: #757575;'></p>
                <div class='d-flex justify-content-center align-items-start gap-5 mt-5'>
                  <img src='/img/bmwi4.png' alt='foto_mobil' style='width: 500px; height: 500px; object-fit: cover; border-radius: 16px; margin-top: 20px;'>
                  <form>
                    <div>
                      <label style='display: block;font-size: 20px; line-height: 24px; letter-spacing: 1.2px; margin-top: 30px;' for='nama'>Nama Mobil</label>
                      <input style='display: block; width: 600px; height: 50px; border: 1px solid #757575; border-radius: 8px; margin-top: 20px; padding-left: 10px; padding-right: 10px;' type='text' id='nama' name='nama_mobil' value=''>
                    </div>
                    <div>
                      <label style='display: block;font-size: 20px; line-height: 24px; letter-spacing: 1.2px; margin-top: 30px;' for='pemilik'>Nama Pemilik</label>
                      <input style='display: block; width: 600px; height: 50px; border: 1px solid #757575; border-radius: 8px; margin-top: 20px; padding-left: 10px; padding-right: 10px;' type='text' id='pemilik' name='nama_pemilik' value=''>
                    </div>
                    <div>
                      <label style='display: block;font-size: 20px; line-height: 24px; letter-spacing: 1.2px; margin-top: 30px;' for='merk'>Merk</label>
                      <input style='display: block; width: 600px; height: 50px; border: 1px solid #757575; border-radius: 8px; margin-top: 20px; padding-left: 10px; padding-right: 10px;' type='text' id='merk' name='merk_mobil' value=''>
                    </div>
                    <div>
                      <label style='display: block;font-size: 20px; line-height: 24px; letter-spacing: 1.2px; margin-top: 30px;' for='tanggalbeli'>Tanggal Beli</label>
                      <input style='display: block; width: 600px; height: 50px; border: 1px solid #757575; border-radius: 8px; margin-top: 20px; padding-left: 10px; padding-right: 10px;' type='date' id='tanggalbeli' name='tanggal_beli' value=''>
                    </div>
                    <div>
                      <label style='display: block;font-size: 20px; line-height: 24px; letter-spacing: 1.2px; margin-top: 30px;' for='desc'>Deskripsi</label>
                      <textarea id='desc' name='deskripsi' style='height:200px; width: 600px; border-radius: 8px; padding: 20px; margin-top: 20px;''> </textarea>
                    </div>
                    <div>
                      <label style='display: block;font-size: 20px; line-height: 24px; letter-spacing: 1.2px; margin-top: 30px;' for='inputGroupFile01'>Foto</label>
                      <input type='file' class='form-control' id='inputGroupFile01'  name='foto_mobil' style='height: 40px; display: block; width: 600px; border: 1px solid #757575; border-radius: 8px; margin-top: 20px; padding-left: 10px; padding-right: 10px;'>
                    </div>
                    <div>
                      <label style='display: block;font-size: 20px; line-height: 24px; letter-spacing: 1.2px; margin-top: 30px;' for='status'>Status Pembayaran</label>
                      <span class='d-flex'>
                        <input type='radio' name='status_bayar' id='lunas' value='Lunas' checked='checked' style='width: 15px; height: 15px; margin-right:10px; margin-top: 18px;'>
                        <label for='lunas' style='margin-top: 15px; margin-right:10px; font-size: 20px; line-height: 24px; letter-spacing: 1.2px;'>Lunas</label>
                        <input type='radio' name='status_bayar' id='belum' value='Belum Lunas' style='width: 15px; height: 15px; margin-right:10px; margin-top: 18px;'>
                        <label for='belum' style='margin-top: 15px; font-size: 20px; line-height: 24px; letter-spacing: 1.2px;'>Belum Lunas</label>
                      </span>
                    </div>
                    <a href='' class='btn btn-primary' style='margin-top: 40px;'>Edit</a>
                  </form>
                </div>
        </div>
    </section>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>