<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Formulaire</title>
</head>
<body>
<form method="POST" action="{{url('/save')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
    <label for="nom">Nom</label>
    <input type="text"  id="nom" name="nom">
  </div>
  
  <div class="form-group">
    <label for="image">Example file input</label>
    <input type="file" class="form-control-file" id="image" name="image">
  </div>
  
  <div class="form-group">
   
    <input type="submit"  id="bouton" name="bouton">
  </div>
</body>