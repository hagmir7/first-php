<?php 
session_start();
include("conection.php");
include("function.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $matricul = $_POST['matricul'];
    $password = $_POST['password'];

    if(!empty($matricul) && !empty($password)){
        // save to data base
        $query = "select * from employer where matricul = '$matricul' limit  1";
        $result = mysqli_query($con, $query);
        if($result){
            if($result && mysqli_num_rows($result) > 0){
                $user_data = mysqli_fetch_assoc($result);
                if($user_data['password'] === $password){
                    $_SESSION['matricul'] = $user_data['matricul'];
                    header("Location: index.php");
                    die;
                }else{echo "Error 1 ";}
            }else{echo "Error 2 ";}
        }else{echo "Error 3 ";}
        echo "Matricul or Password is incorrect";
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

    <title>Home page</title>
  </head>
  <body>
      <div class="container">
          <div class="row justify-content-center mt-3">
              <div class="col-4">
                  <div class="card p-2">
                      <form action="" method="post">
                      <h1 class="h3">Login Page</h1>
                      <label for="matricul">Matricul</label>
                      <input type="text" name="matricul" class="form-control mb-3">
                      <label for="Mode de Pass">Mode de Pass</label>
                      <input type="password" name="password" class="form-control">
                      <button type="submit" value="Login" class="btn btn-info mt-3 w-100">Log In</button>
                      <a href="singnup.php" class="btn btn-success mt-3 w-100">Singn Up</a>
                      </form>
                  </div>
              </div>
          </div>
      </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>