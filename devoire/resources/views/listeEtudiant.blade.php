<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Liste des étudidants</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      </head>
  <body>
    <h1>
        Liste des étudidants 
        <a class="btn btn-info" href="/">Ajouter un Etudiant </a>
        <a class="btn btn-info" href="/">Ajouter un Etudiant </a>
    </h1>
    <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">N°</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Matière</th>
      <th scope="col">Note1</th>
      <th scope="col">Examen</th>
      <th scope="col">Semestre</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach($etudiant as $etudiant)
        <tr>
            <td>{{$etudiant->id}}</td>
            <td>{{$etudiant->nom}}</td>
            <td>{{$etudiant->prenom}}</td>
            <td>{{$etudiant->matiere}}</td>
            <td>{{$etudiant->note1}}</td>
            <td>{{$etudiant->exam}}</td>
            <td>{{$etudiant->semestre}}</td>
            <td>
                <a href="{{'modifier/' . $etudiant->id}}" class="btn btn-info">Modifier</a>
                <a href="{{'supprimer/' . $etudiant->id}}" class="btn btn-danger">Suppprimer</a>
                <a href="{{'detail/' . $etudiant->id}}" class="btn btn-primary">Formations</a>
            </td>
        </tr>
  @endforeach
    </tr>
   
  </tbody>
</table>

  </body>
</html>