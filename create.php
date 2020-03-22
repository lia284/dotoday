

    <div class="container signin">
      <form class="signin-form" action="index.php?content=signin" method="post">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control big" id="name" name="name">
        </div>
        <div class="form-group">
          <label for="age">Alter</label>
          <input type="number" class="form-control big" id="age" name="age">
        </div>
        <div class="form-group">
          <label for="city">Stadt</label>
          <input type="text" class="form-control big" id="city" name="city">
        </div>
        <div class="form-group">
          <label for="country">Land</label>
          <input type="text" class="form-control big" id="country" name="country">
        </div>
        <div class="form-group">
          <label for="email">Email Addresse</label>
          <input type="email" class="form-control big" id="email" name="email">
        </div>
        <div class="form-group">
          <label for="psw">Passwort</label>
          <input type="password" class="form-control big" id="psw" name="psw">
        </div>
        <button type="submit" class="btn btn-primary btn-block big mt-5">Registrieren</button>
        <div class="text-center">
          <small id="createAccount" class="form-text text-muted"><a href="index.php?content=login-form">bist du schon cool und hast einen Account?</a></small>
        </div>
      </form>
    </div>

    <div class="container preferences" style="display: none;">
      <!--liste zum ankreuzen-->

      <div class="row label">Kunst</div>
      <div class="row options">
        <button type="input" class="btn large btn-outline-light" onclick="toggleState(this);">Singen</button>
        <button type="button" class="btn large btn-outline-light" onclick="toggleState(this);">Instrument</button>
        <button type="button" class="btn large btn-outline-light" onclick="toggleState(this);">Zeichnen</button>
        <button type="button" class="btn large btn-outline-light" onclick="toggleState(this);">Gitarre</button>
        <button type="button" class="btn large btn-outline-light" onclick="toggleState(this);">Bildhauerei</button>
      </div>
      <div class="row label">Unterhaltung</div>
      <div class="row options">
        <button type="button" class="btn large btn-outline-light" onclick="toggleState(this);">Filme</button>
        <button type="button" class="btn large btn-outline-light" onclick="toggleState(this);">Instrument</button>
        <button type="button" class="btn large btn-outline-light" onclick="toggleState(this);">Zeichnen</button>
      </div>
      <div class="row">
      </div>


      <div class="footer">
        <button type="button" class="btn btn-primary btn-block big btn-pref" onclick="window.location = 'profile.html'">Weiter</button>
      </div>



    </div>
