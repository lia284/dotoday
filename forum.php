

    <div class="tab justify-content-center">
      <ul class="nav nav-fill">
        <li class="nav-item mx-5">
          <a class="nav-link active" href="#">Alle</a>
        </li>
        <li class="nav-item mx-5">
          <a class="nav-link" href="#">Freunde</a>
        </li>
        <li class="nav-item mx-5">
          <a class="nav-link" href="#">Umgebung</a>
        </li>
      </ul>
    </div>

    <div class="livefeed">

      <?php

      $result = mysqli_query($conn,"SELECT * FROM `content` ORDER BY id DESC");
      // Perform query
      if ($result) {
        //print_r($result);

        if($result -> num_rows > 0) {

          while($row = mysqli_fetch_array($result)) {
            $results[] = $row;
          }

            foreach($results AS $row) {


              echo '<div class="card content">
                <div class="card-img-top"></div>
                <div class="card-body">
                  <h3 class="content-title">'.$row['title'].'</h3>
                  <p class="content-text">'.$row['description'].'</p>
                </div>
              </div>';
            }
        }
        else {
          header("Location:index.php?content=forum&error=1");
        }
      }
     ?>


    <button type="button" class="btn btn-light btn-circle btn-round" onclick="window.location = 'index.php?content=add'">+</button>


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
