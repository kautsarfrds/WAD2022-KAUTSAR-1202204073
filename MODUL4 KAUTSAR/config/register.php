<?php
require './connector.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$nohp = $_POST['nohp'];
$sandi = $_POST['password'];

$registerQuery = "INSERT INTO user (nama, email, password, no_hp) VALUES ('$nama', '$email', '$password', '$nohp')";

$executeQuery = mysqli_query($connector, $registerQuery);

if ($executeQuery) {
  header("location: ../pages/Login-Kautsar.php");
} else {
  die(mysqli_error($connector));
}