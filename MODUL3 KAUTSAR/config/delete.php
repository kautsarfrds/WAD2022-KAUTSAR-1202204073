<?php
require './connector.php';

$id = $_GET['id'];

$deletequery = "DELETE FROM showroom_kautsar_table WHERE id_mobil = $id";

if (mysqli_query($connector, $deletequery)) {
  header("location: ../pages/ListCar-Kautsar.php?pesan=delete");
} else {
  header("location: ../pages/ListCar-Kautsar.php?pesan=failed");
}