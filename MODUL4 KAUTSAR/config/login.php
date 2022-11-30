<?php
require './connector.php';

$email = $_POST['mail'];
$sandi = $_POST['password'];
$check = $_POST['remember'];

$cariQuery = "SELECT * FROM user WHERE email = '$email'";

$executeCari = mysqli_query($connector, $cariQuery);


$row = mysqli_fetch_assoc($executeCari);
$data = mysqli_fetch_array($executeCari);

if ($executeCari == true) {
  if ($check == 'checked') {
    setcookie('email', $email);
    setcookie('pass', $sandi);
  }

  session_start();
  $_SESSION['id'] = $data['id'];
  $_SESSION['nama'] = $data['nama'];
  header("location: ../pages/Homeafter-Kautsar.php");
} else {
  header("location: ../pages/Login-Kautsar.php?pesan=failed");
}