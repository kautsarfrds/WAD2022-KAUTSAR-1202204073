<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title> Booking Page </title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="collapse navbar-collapse d-flex justify-content-center">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="Kautsar_Home.php" style="color: white;"> Home </a>
                <a class="nav-item nav-link" href="Kautsar_Booking.php" style="background-color: white; dark; color: black;""> Booking </a>
                </div>
            </div>
    </nav>
    
    <div class=" container"> <br>
                    <h1 style=" text-align: center;"> Rent your car now! </h1>
            </div>

            <div class="container card shadow-sm">
                <div class="d-flex justify-content-around">
                    <div class="col-8 ps-5 pe-5 d-flex ">
                        <?php
                        if (isset($_POST["img"])) {
                        ?><img class="" width="100%" src="<?= $_POST["img"]; ?>" alt="">
                        <?php
                        } else {
                        ?><img width="100%" src="toyota rush.jpg" alt="">
                        <?php } ?>
                    </div>
                    <div class="">
                        <ul type="none">
                            <form action="Kautsar_MyBooking.php" method="post">
                                <li class="">
                                    <label for="name"> Name </label><br>
                                    <input class="form-control" type="text" name="nama" id="nama" value="Kautsar_1202204073" readonly>
                                </li> <br>
                                <li class="">
                                    <label for="booking"> Book Date </label><br>
                                    <input class="form-control" type="date" name="book" id="book">
                                </li> <br>
                                <li class="">
                                    <label for="time"> Start Time </label><br>
                                    <input class="form-control" type="time" name="time" id="time">
                                </li> <br>
                                <li class="">
                                    <label for="duration"> Duration (Days) </label><br>
                                    <input class="form-control" type="number" name="hari" id="hari" min="1">
                                </li> <br>
                                <li class="">
                                    <label for="carType"> Car Type </label>
                                    <select class="form-select" name="car" id="car">
                                        <option selected>Choose...</option>
                                        <option value="Toyota Rush">Toyota Rush</option>
                                        <option value="Toyota Ayla">Toyota Ayla</option>
                                        <option value="Honda Brio">Honda Brio</option>
                                    </select> <br>
                                </li>
                                <li class="">
                                    <label for="time"> Phone Number </label><br>
                                    <input class="form-control" type="number" name="phoneNumber" id="phoneNumber"> <br>
                                </li>
                                <li>
                                    <label for="addService"> Add Service(s) </label> <br>
                                    <input class="form-check-input" type="checkbox" name="service[]" value="Health protocol" id="health"><label class="form-check-label" for="health"> Health protocol / Rp25.000 </label><br>
                                    <input class="form-check-input" type="checkbox" name="service[]" value="Driver" id="driver"><label class="form-check-label" for="driver"> Driver / Rp100.000 </label><br>
                                    <input class="form-check-input" type="checkbox" name="service[]" value="Fuel Filled" id="fuel"><label class="form-check-label" for="fuel"> Fuel Filled / Rp.250.000 </label><br>
                                </li>
                                <li class="d-flex justify-content-center">
                                    <button class="btn btn-primary" type="submit" name="submit"> Book </button>
                                </li>
                    </div>
                </div>
            </div>
        </div>

        <footer style=" position: fixed; left: 0; bottom: 0; width: 100%; color: black; text-align: center; background-color: lightgrey;">
            <p> Created by KAUTSAR_1202204073 </p>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>