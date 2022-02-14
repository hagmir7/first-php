<?php 
session_start();
    include("conection.php");
    include("function.php");

    $user_data = check_login($con);

    $query = "SELECT * FROM `porblem`";

    $results=mysqli_query($con,$query);
    $row_count=mysqli_num_rows($results);


    



    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $type_prob = $_POST['type_prob'];
        $text_autre = $_POST['text_autre'];
        if(!empty($type_prob) && !empty($text_autre)){
            $query = "insert into porblem (type_prob, text_autre) values ('$type_prob', '$text_autre')";
            mysqli_query($con, $query);
        }else{
            echo "unvalid data";
        }

        
    }
    mysqli_query($con,$query); 
    mysqli_close($con);
   

    

?>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title><?php echo $user_data['nom']  ?></title>
  </head>
  <body>
  <div class="container">
    <div class="main-body">
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php echo $user_data['nom']  ?></h4>
                      <p class="text-secondary mb-1"><?php echo $user_data['post']  ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
              <div class="list-group">
                    <a class="list-group-item list-group-item-action" href="serves.php">Service</a>
                    <a class="list-group-item list-group-item-action" href="formation.php">Formation</a>
                    <a class="list-group-item list-group-item-action" href="management.php">Management</a>
                    <a class="list-group-item list-group-item-action" href="logout.php">Se déconnecté</a>
              </div>
               
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                    <h4>Espace de déclaration</h4>
                    <h6>Type du probleme</h6>
                    <form method="post">
                    <div class="form-check">
                    <input class="form-check-input" type="radio" value="Technique" checked name="type_prob" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                     Technique
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" value="Administrative" name="type_prob" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">
                     Administrative
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" value="Autre" name="type_prob" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                     Autre
                    </label>
                    </div>
                    <textarea placeholder="Enter votre Problem" name="text_autre" id="" cols="30" rows="5" class="form-control"></textarea>
                    <button class="btn btn-info mt-2" type="submit">Envoyer</button>
                    </form>
                </div>
              </div>

              <div class="row gutters-sm">

                <div class="col-sm-19 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                    <h3>Liste des probleme</h3>
                    <ol class="list-group list-group-numbered">
                    <?php
                    if($user_data['post'] == 'responsable'){
                        echo "<table>";
                        while ($row = mysqli_fetch_array($results)) {
                        echo "<li class='list-group-item d-flex justify-content-between align-items-start'>";
                        echo "<div class='ms-2 me-auto'>";
                        echo "<div class='fw-bold'>";
                        echo $row['type_prob'];
                        echo "</div>";
                        echo $row['text_autre'];
                        echo "</div>";
                        echo "<span class='badge bg-primary rounded-pill'>";
                        echo $row['id'];
                        echo "</span></li>";
                        }
                        

                    }else{
                        echo "You are not responsable";

                    }
                    ?>    
                    </ol>
                    </div>
                  </div>
                </div>
              </div>



            </div>
          </div>

        </div>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>