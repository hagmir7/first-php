<?php 
session_start();
include("conection.php");
include("function.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $nom = $_POST['nom'];
    $matricul = $_POST['matricul'];
    $post = $_POST['post'];
    $password = $_POST['password'];

    if (!empty($nom) && !empty($matricul) && !empty($post) && !empty($password) && !is_numeric($nom) ){

        // save to data base
        $query = "insert into employer (nom, matricul, post, password) values ('$nom', '$matricul', '$post', '$password')";

        mysqli_query($con, $query);
        header("Location: login.php");
        die;
    }else{
        echo "Please enter Valid inforamtion";
    }
}

  

    

?>







<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Créer un compte</title>
  </head>
  <body>
      <div class="container">
          <div class="row justify-content-center mt-3">
              <div class="col-4">
                  <div class="card p-2">
                      <form method="post">
                      <h1 class="h3">Créer compte</h1>
                      <label for="nom">Nom Complet</label>
                      <input type="text" name="nom" class="form-control mb-3">
                      <label for="matricul">Matricul</label>
                      <input type="text" name="matricul" class="form-control mb-3">
                      <label for="post">Post</label>
                      <select name="post" class="form-select">
							<option value="technicien">technicien</option>
							<option value="fournisseur">fournisseur</option>
							<option value="livreur">livreur</option>
							<option value="responsable">responsable</option>
						</select>
                      <label for="Mode de Pass">Mode de Pass</label>
                      <input type="password" name="password" class="form-control">
                      <input type="submit" value="Create" class="btn btn-info mt-3 w-100">
                      <a href="singnup.php" class="btn btn-success mt-3 w-100">Singn Up</a>
                      </form>
                  </div>
              </div>
          </div>
      </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>