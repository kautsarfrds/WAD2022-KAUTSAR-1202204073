<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>

<body>
    <section id="insert">
        <div class="container insert">

            <h1 class="titleInsert" align="center">Profile</h1>
            <form enctype="multipart/form-data" method="POST" action="../config/update.php" class="form-input"
                name="form-edit">
                <input type="hidden" name="id" value="">
                <input type="hidden" name="id" value="">
                <div class="mb-3">
                    <label for="inputNamaMobil" class="form-label">Email</label>
                    <input type="text" class="form-control" value="" name="email" />
                </div>
                <div class="mb-3">
                    <label for="inputNamaPemilik" class="form-label">Nama</label>
                    <input type="text" class="form-control" value="" name="nama"
                        required />
                </div>
                <div class="mb-3">
                    <label for="inputMerk" class="form-label">Nomor handphone</label>
                    <input type="text" class="form-control" value="" name="no_hp"
                        required />
                </div>

                <div class="mb-3">
                    <label for="inputTanggalBeli" class="form-label">Kata sandi</label>
                    <input type="password" class="form-control" name="password" placeholder="masukan kata sandi..."
                        required />
                </div>
                <div class="mb-3">
                    <label for="inputMerk" class="form-label">Konfirmasi password</label>
                    <input type="password" class="form-control" name="konfirmasiPassword"
                        placeholder="Ulangi kata sandi..." required />
                </div>

                <div class="mb-3 d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary" name="btn-update">Update</button>
                </div>
            </form>
        </div>
    </section>
    <div class="d-flex align-items-center gap-5 mt-5" style="margin-top:50px ">
        <img src="/img/logo-ead.png" alt="logo" style="width:100px;">
        <p style="margin-top: 20px; font-size:14px;">Kautsar_1202204073</p>
    </div>
</body>

</html>