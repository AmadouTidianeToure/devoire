<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>modification</title>
  </head>
  <body>
    <form action="{{'modification/' . $etudiant->id}}" method="POST" class="container my-5" >
        {{csrf_field()}}
        <h1 class="container">modification</h1>
        <div class="form-row" >
            <div class="mb-3">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom" value="{{$etudiant->nom}}" name="nom" >
            </div>
            <div class="mb-3">
                <label for="prenom">Prénom</label>
                <input type="text" class="form-control" id="prenom" value="{{$etudiant->prenom}}" name="prenom" >
            </div>      
        </div>
        <div class="mb-3">
            <label for="matiere">Matière</label>
            <input type="text" class="form-control" id="matiere" value="{{$etudiant->matiere}}" name="matiere" p>
          </div>
        <div class="mb-3">
          <label for="note1">Note1</label>
          <input type="number" max="20" class="form-control" value="{{$etudiant->note1}}" name="note1" id="note1" >
        </div>
        <div class="mb-3">
            <label for="examen">Examen</label>
            <input type="number" max="20" class="form-control" value="{{$etudiant->examen}}" name="examen" id="examen" >
          </div>
          
          
        <button type="submit" class="btn btn-primary">Eregistrer</button>
        <a href="/afficher" class="btn btn-primary">Annuler</a>
      </form>
  </body>
</html>
