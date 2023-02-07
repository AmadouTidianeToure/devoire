<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Ajout Etudiant</title>
  </head>
  <body>
    <form action="ajouter" method="POST" class="container my-5" >
      @method('post')
      @csrf
        {{csrf_field()}}
        <h1 class="container">Formulaire d'ajout</h1>
        <div class="form-row" >
            <div class="mb-3">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" placeholder="nom">
            </div>
            <div class="mb-3">
                <label for="prenom">Prenom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="prenom">
            </div>      
        </div>
        <div class="mb-3">
            <label for="matiere">Matière</label>
            <input type="text" class="form-control" id="matiere" name="matiere" placeholder="Matière">
          </div>
        <div class="mb-3">
          <label for="note1">note1</label>
          <input type="number" max="20" class="form-control" name="note1" id="note1" >
        </div>
        <div class="mb-3">
            <label for="exam">exam</label>
            <input type="number"  max="20" class="form-control" name="exam" id="exam" >
        </div>
        <div class="mb-3">
            <label for="semestre">Semestre</label>
            <select id="semestre" name="semestre" class="form-control">
              <option selected>1</option>
              <option>2</option>
            </select>
        </div>
         
        <button type="submit" class="btn btn-primary">Ajouter</button>
        <a href="/afficher" class="btn btn-primary">Voir la liste des Candidats</a>
      </form>
  </body>
</html>
