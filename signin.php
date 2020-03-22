<?php

$email = mysqli_real_escape_string($conn, $_POST['email']);
$psw = mysqli_real_escape_string($conn, $_POST['psw']);
$name = mysqli_real_escape_string($conn, $_POST['name']);
$city = mysqli_real_escape_string($conn, $_POST['city']);
$country = mysqli_real_escape_string($conn, $_POST['country']);
$age = mysqli_real_escape_string($conn, $_POST['age']);

  $result = mysqli_query($conn,"INSERT INTO `users` (name, email, city, country, age, password) VALUES ('".$name."','".$email."','".$city."','".$country."','".$age."','".$psw."')");


  if($result) {
      header("Location:index.php?content=profile&user=".$name."&email=".$email);
  }
  else {
    header("Location:index.php?content=create&error=1");
  }


 ?>
