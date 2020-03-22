<?php

if(isset($_GET['error'])) {
  echo '
  <div class="alert alert-danger row" role="alert">
    <div class="col-md-5">
      <img src="error.jpg" width="75%"></img>
    </div>
    <div class="col-md-5">
      <p>ErroR! - Da ist uns wohl ein Malörchen passiert</p>
    </div>
  </div>
  ';

}


?>

<div class="container login">
  <form class="login-form" method="post" action="index.php?content=login">
    <div class="form-group">
      <label for="email">Email Addresse</label>
      <input type="email" class="form-control big" id="email" name="email">
    </div>
    <div class="form-group">
      <label for="psw">Passwort</label>
      <input type="password" class="form-control big" id="psw"  name="psw">
    </div>
    <button type="submit" class="btn btn-primary btn-block big mt-5">Log mich ein</button>
    <div class="text-center">
      <small id="createAccount" class="form-text text-muted"><a href="index.php?content=create">noch kein Account? - Dann aber schnell</a></small>
    </div>
  </form>

</div>
