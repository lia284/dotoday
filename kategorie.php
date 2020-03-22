
    <div class="row">
      <ul class="nav nav-fill category-menu">
        <li class="nav-item mx-5">
          <a id="category" class="nav-link active" onclick="searchCatSec(category);">#kochen</a>
        </li>
        <li class="nav-item mx-5">
          <a id="section" class="nav-link" onclick="searchCatSec(section);">#all</a>
        </li>
      </ul>
    </div>


    <div class="search-overlay" style="display: none">
      <button type="button" class="close icon-big" onclick="closeSearch(this);">
        <span aria-hidden="true">&times;</span>
      </button>
      <form class="form-inline my-2 my-lg-0 search">
        <input class="form-control search-input" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0 search-btn" type="submit">Search</button>
      </form>
      <div class="search-list">
        <p class="search-item">#vegetarisch</p>
        <p class="search-item">#vegan</p>
      </div>
      <div class="row justify-content-end">
        <button type="button" class="btn btn-primary btn-search">Auswählen</button>
      </div>
    </div>


    <div class="livefeed">
        <div class="card content">
          <div class="card-img-top" style="background-image: url('images/kochen.jpg')"></div>
          <div class="card-body">
            <h3 class="content-title">Wie man einfach vegan kocht</h3>
            <p class="content-text">vegane Rezepte</p>
          </div>
        </div>
      <div class="card content">
        <div class="card-img-top" style="background-image: url('images/koch.jpeg')"></div>
        <div class="card-body">
          <h3 class="content-title">Italienische Küche</h3>
          <p class="content-text">Bella Italia</p>
        </div>
      </div>
      <div class="card content">
        <div class="card-img-top" style="background-image: url('images/kochenundso.jpeg')"></div>
        <div class="card-body">
          <h3 class="content-title">Essen machen in der Corana Zeit</h3>
          <p class="content-text">Qaranäne Food super machen</p>
        </div>
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
