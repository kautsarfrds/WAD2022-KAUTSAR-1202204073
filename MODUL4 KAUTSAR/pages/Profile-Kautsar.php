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
                <input type="hidden" name="id" value="<?php echo $_SESSION['email'];?>">
                <input type="hidden" name="id" value="<?php echo $dataUser['id'];?>">
                <div class="mb-3">
                    <label for="inputNamaMobil" class="form-label">Email</label>
                    <input type="text" class="form-control" value="<?php echo $dataUser['email'];?>" name="email" />
                </div>
                <div class="mb-3">
                    <label for="inputNamaPemilik" class="form-label">Nama</label>
                    <input type="text" class="form-control" value="<?php echo $dataUser['nama'];?>" name="nama"
                        required />
                </div>
                <div class="mb-3">
                    <label for="inputMerk" class="form-label">Nomor handphone</label>
                    <input type="text" class="form-control" value="<?php echo $dataUser['no_hp'];?>" name="no_hp"
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
    <!-- End Form -->
    <div class="container">
        <div class="d-flex align-items-center gap-5 mt-5" align="center">
            <img src="<?php echo "../asset/images/logo-ead.png" ?>" alt="logoead" style="width:100px;">
            <p style="margin-top: 20px; font-size:15px;">Rio_1202200020</p>
        </div>
    </div>

    <!-- Footer Start -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="container footer-bottom clearfix">
                        <div class="copyright text-center">
                            &copy; Copyright <strong><span>Muh Ario Adriansyah Wuleho</span></strong>. All Rights
                            Reserved
                        </div>
                        <div class="credits text-center">
                            Created by <a href="https://github.com/madrioo">Muh Ario Adriansyah
                                Wuleho_1202200020_SI4402</a>
                        </div>
                    </div>
    </footer>
</body>

</html>