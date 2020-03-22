

    <div class="add">
      <h1>Inhalte hinzufügen</h1>
      <form class="add-form" method="post" action="index.php?content=upload" enctype=”multipart/form-data”>
        <div class="form-group add-form">
          <label for="exampleFormControlFile1">Bild / Video hinzufügen</label>
          <input type="file" class="form-control-file" id="media" name="media">
        </div>
        <div class="form-group add-form">
          <label for="title">Titel</label>
          <input type="text" class="form-control big" id="title" name="title">
        </div>
        <div class="form-group add-form">
          <label for="des">Beschreibung</label>
          <textarea class="form-control big" id="des" rows="3" name="des"></textarea>
        </div>

        <div class="form-group add-form">
          <label for="category">Kategorie</label>
          <input type="text" class="form-control big" id="category" name="category">
        </div>

        <div class="form-group add-form">
          <label for="section">Sektion</label>
          <input type="text" class="form-control big" id="section" name="section">
        </div>

        <div class="footer row">
          <button type="button" class="btn btn-secondary col-md-5 mx-4 big">Abbrechen</button>
          <button type="submit" class="btn btn-primary col-md-5 mx-4 big">Hochladen</button>
        </div>

        </div>

      </form>
