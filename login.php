<?php


  $email = mysqli_real_escape_string($conn, $_POST['email']);//mysqli_real_escape_string();
  $psw = mysqli_real_escape_string($conn, $_POST['psw']);


    // Check connection
    if ($conn -> connect_errno) {
      echo "Failed to connect to MySQL: " . $conn -> connect_error;
      exit();
    }

    $result = mysqli_query($conn,"SELECT * FROM `users` WHERE email = '".$email."'");
    // Perform query
    if ($result) {

      print_r($result);

      if($result -> num_rows > 0) {

        while($row = mysqli_fetch_array($result)) {

          if($row['password'] == $psw) {
            header("Location:index.php?content=profile&user=".$row['name']."&email=".$row['email']);
          }
          else {
            header("Location:index.php?content=login-form&error=psw");
          }
        }

      }
      else {
        header("Location:index.php?content=login-form&error=user");
      }
    }
