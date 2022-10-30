<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
     <title> Home Page </title>
</head>

<!-- Navabar -->

<body>
     <nav class="navbar navbar-expand-lg navbar-light bg-dark">
          <div class="collapse navbar-collapse d-flex justify-content-center">
               <div class="navbar-nav">
                    <a class="nav-item nav-link" href="Kautsar_Home.php" style="background-color: white; dark; color: black;"> Home </a>
                    <a class="nav-item nav-link" href="Kautsar_Booking.php" style="color: white;"> Booking </a>
               </div>
          </div>
     </nav>

     <div class="text-center"> <br>
          <h2 class="welcome"> WELCOME TO EAD RENT </h2>
          <h4 class="find"> Find your best deal, here! </h4>
     </div>


     <div class="container d-flex justify-content-center p-5 mt-5">
          <div class="card mx-5">
               <img class="card-img-top" src="toyota rush.jpg" style="width: 210px;">
               <div class="card-body">
                    <h4 class="card-title"> Toyota Rush <br> </h4>
                    <p class="text-dark"> Rp. 200000 / Day </p>
                    <p class="card-text">
                    <table class="table text-center">
                         <tr>
                              <td style="text-align: center; font-weight: bold; color: blue;"> 7 Kursi </td>
                         </tr>
                         <tr>
                              <td style="text-align: center; font-weight: bold; color: blue;"> 1500 CC </td>
                         </tr>
                         <tr>
                              <td style="text-align: center; font-weight: bold; color: blue;"> Manual </td>
                         </tr>
                    </table>
                    </p>
               </div>
               <div class="card-footer d-flex justify-content-center">
                    <form action="Kautsar_Booking.php" method="post">
                         <button class="btn btn-primary" name="img" type="submit" value="toyota rush.jpg"> Book Now </button>
                    </form>
               </div>
          </div>

          <div class="card mx-5">
               <img class="card-img-top" src="toyota ayla.jpg" style="width: 210px;">
               <div class="card-body">
                    <h4 class="card-title"> Toyota Ayla <br> </h4>
                    <p class="text-dark">Rp. 150000 /Day </p>
                    <p class="card-text">
                    <table class="table text-center">
                         <tr>
                              <td style="text-align: center; font-weight: bold; color: blue;"> 5 Kursi </td>
                         </tr>
                         <tr>
                              <td style="text-align: center; font-weight: bold; color: blue;"> 1200 CC </td>
                         </tr>
                         <tr>
                              <td style="text-align: center; font-weight: bold; color: blue;"> Manual </td>
                         </tr>
                    </table>
                    </p>
               </div>
               <div class="card-footer d-flex justify-content-center">
                    <form action="Kautsar_Booking.php" method="post">
                         <button class="btn btn-primary" name="img" type="submit" value="toyota ayla.jpg"> Book Now </button>
                    </form>
               </div>
          </div>

          <div class="card  mx-5">
               <img class="card-img-top" src="honda brio.jpg" style="width: 230px;">
               <div class="card-body">
                    <h4 class="card-title"> Honda Brio <br> </h4>
                    <p class="text-dark"> Rp. 150000 / Day </p>
                    <p class="card-text">
                    <table class="table text-center">
                         <tr>
                              <td style="text-align: center; font-weight: bold; color: blue;"> 5 Kursi </td>
                         </tr>
                         <tr>
                              <td style="text-align: center; font-weight: bold; color: blue;"> 1200 CC </td>
                         </tr>
                         <tr>
                              <td style="text-align: center; font-weight: bold; color: blue;"> Automatic </td>
                         </tr>
                    </table>
                    </p>
               </div>
               <div class="card-footer d-flex justify-content-center">
                    <form action="Kautsar_Booking.php" method="post">
                         <button class="btn btn-primary" name="img" type="submit" value="honda brio.jpg"> Book Now </button>
                    </form>
               </div>
          </div>
     </div>
     <footer style=" position: fixed; left: 0; bottom: 0; width: 100%; color: black; text-align: center; background-color: lightgrey;">
          <p> Created by KAUTSAR_1202204073 </p>
     </footer>






     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>