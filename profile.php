<?php

if(isset($_GET['user']) && isset($_GET['email'])) {



$name = mysqli_real_escape_string($conn, $_GET['user']);
$email = mysqli_real_escape_string($conn, $_GET['email']);



  // Check connection
  if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
    exit();
  }

  $result = mysqli_query($conn,"SELECT * FROM `users` WHERE email = '".$email."' AND name = '".$name."'");
  // Perform query
  if ($result) {

    //print_r($result);

    if($result -> num_rows > 0) {

      while($row = mysqli_fetch_array($result)) {
        $age = $row['age'];
        $country = $row['country'];
        $city = $row['city'];
      }


    }
    else {
      //header("Location:index.php");
    }
  }

}
else {
  //user = selbst
  $age = '12';
  $country ='a';
  $city = '2';
  $name ='a';
  $email = '2';
}

?>


    <div class="container profile">
      <div class="row">
        <img src="default.PNG" class="profile-picture"></img>
      </div>

      <div class="row profile-row ">
        <div class="profile-text">
          Ich bin toll, glaub ich... irgendwie.
        </div>
      </div>

      <div id="name" class="row profile-row">
        <div class="col-sm-3 profile-des">Name</div>
        <div class="col-sm-9 profile-val"><?php echo $name ?></div>
      </div>

      <div id="age" class="row profile-row">
        <div class="col-sm-3 profile-des">Alter</div>
        <div class="col-sm-3 profile-val"><?php echo $age ?></div>
      </div>
      <div id="city" class="row profile-row">
        <div class="col-sm-3 profile-des">Stadt</div>
        <div class="col-sm-3 profile-val"><?php echo $city ?></div>
      </div>
      <div id="country" class="row profile-row">
        <div class="col-sm-3 profile-des">Land</div>
        <div class="col-sm-3 profile-val"><?php echo $country ?></div>
      </div>
      <div id="email" class="row profile-row">
        <div class="col-sm-3 profile-des">Email</div>
        <div class="col-sm-3 profile-val"><?php echo $email ?></div>
      </div>

    </div>


    <div class="navbar justify-content-center">
      <ul class="nav nav-fill">
        <li class="nav-item mx-5">
          <a class="nav-link active" href="index.php?content=profile">Profile</a>
        </li>
        <li class="nav-item mx-5">
          <a class="nav-link" href="index.php?content=forum">Forum</a>
        </li>
        <li class="nav-item mx-5">
          <a class="nav-link" href="index.php?content=kategorie">Kategorien</a>
        </li>
      </ul>
    </div>
