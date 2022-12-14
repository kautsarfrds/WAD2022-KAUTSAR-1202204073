<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Home</title>
</head>

<body>
  <?php
  error_reporting(error_reporting() & ~E_NOTICE);
  $idNumber = rand(2340, 3000);
  $name = $_POST['nama'];
  $duration = $_POST['time'];
  $checkIn = date("d-m-Y H:i:s", strtotime($_POST['book'] . " " . $duration));
  $checkOut = date("d-m-Y H:i:s", (strtotime($checkIn) + 60 * 60 * 24 * $_POST["hari"]));
  $car = $_POST['car'];
  $phone = $_POST['phoneNumber'];

  $price = 0;
  if ($car == "Toyota Rush") {
    $price = 200000;
  } else if ($car = "Toyota Ayla") {
    $price = 150000;
  } else {
    $price = 150000;
  }

  $price = $price * $_POST['hari'];
  if (isset($_POST['service'])) {
    foreach ($_POST['service'] as $service) {
      if ($service == "Health Protocol") {
        $price += 25000;
      } else if ($service == "Driver") {
        $price += 100000;
      } else if ($service == "Fuel Filled") {
        $price += 250000;
      }
    }
  }
  ?>

  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="collapse navbar-collapse d-flex justify-content-center">
      <div class="navbar-nav">
        <a class="nav-item nav-link" href="Kautsar_Home.php" style="color: white;"> Home </a>
        <a class="nav-item nav-link" href="Kautsar_Booking.php" style="background-color: white; dark; color: black;""> Booking </a>
                </div>
            </div>
    </nav>

  <div class=" title mt-2 text-center">
          <h2 class="">Thank you Kautsar_1202204073 for Reserving</h2>
          <p class="">Please double check your reservation detail</p>
      </div>

      <div class="d-flex justify-content-center p-2">
        <table class="table table-striped">
          <tr>
            <th>Booking Number</th>
            <th>Name</th>
            <th>Check-in</th>
            <th>check-out</th>
            <th>Car Type</th>
            <th>Phone Number</th>
            <th>Service</th>
            <th>Total Price</th>
          </tr>
          <tr>
            <td><?= $idNumber ?></td>
            <td><?= $name ?></td>
            <td><?= $checkIn ?></td>
            <td><?= $checkOut ?></td>
            <td><?= $car; ?></td>
            <td><?= $phone ?></td>
            <td>
              <?php
              if (isset($_POST["service"])) {
                foreach ($_POST["service"] as $service) {
                  echo "<li>$service</li>";
                }
              } else {
                echo "no service";
              }
              ?>
            </td>
            <td>
              Rp.
              <?php echo $price ?>
            </td>
          </tr>
        </table>
      </div>

      <footer style="position: fixed; left: 0; bottom: 0; width: 100%; color: black; text-align: center; background-color: lightgrey;">
        <p>Created by KAUTSAR_1202204073</p>
      </footer>
</body>

</html>